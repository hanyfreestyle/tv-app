<?php

namespace App\Http\Controllers\admin;

use App\Helpers\AdminHelper;
use App\Helpers\PuzzleUploadProcess;
use App\Http\Controllers\AdminMainController;
use App\Http\Requests\admin\FaqPhotoRequest;
use App\Http\Requests\admin\FaqRequest;
use App\Http\Requests\admin\ProductPhotoRequest;
use App\Models\admin\BlogPost;
use App\Models\admin\BlogPostPhoto;
use App\Models\admin\Faq;
use App\Models\admin\FaqCategory;
use App\Models\admin\FaqPhoto;
use App\Models\admin\FaqTranslation;
use Cache;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FaqController extends AdminMainController
{
    public $controllerName ;
    public $PageTitle ;
    public $selMenu ;
    public $PrefixRole ;
    public $PrefixRoute ;
    public $pageData ;

    function __construct(

        $selMenu = 'FAQ.',
        $controllerName = 'FaqList',
        $PrefixRole = 'Faq',
        $PrefixRoute = '#',
        $PrefixCatRoute = 'FAQ.FaqCat',
        $pageData = array(),

    )
    {
        parent::__construct();

        $this->controllerName = $controllerName;
        $this->selMenu = $selMenu;
        $this->PrefixRole = $PrefixRole;
        $this->PrefixRoute = $this->selMenu.$this->controllerName ;
        $this->PageTitle = __('admin/menu.faq');

        $this->middleware('permission:'.$PrefixRole.'_view', ['only' => ['index']]);
        $this->middleware('permission:'.$PrefixRole.'_add', ['only' => ['create']]);
        $this->middleware('permission:'.$PrefixRole.'_edit', ['only' => ['edit','config']]);
        $this->middleware('permission:'.$PrefixRole.'_delete', ['only' => ['destroy']]);
        $this->middleware('permission:'.$PrefixRole.'_restore', ['only' => ['SoftDeletes','Restore','ForceDeletes']]);

        $viewDataTable = AdminHelper::arrIsset($this->modelSettings,$controllerName.'_datatable',0) ;
        $viewEditor = AdminHelper::arrIsset($this->modelSettings,$controllerName.'_editor',0) ;
        View::share('viewDataTable', $viewDataTable);
        View::share('viewEditor', $viewEditor);
        View::share('tableHeader', AdminHelper::Table_Style($viewDataTable));
        View::share('PrefixRoute', $this->PrefixRoute);
        View::share('PrefixRole', $PrefixRole);
        View::share('controllerName', $controllerName);
        View::share('PrefixCatRoute', $PrefixCatRoute);

        $sendArr = [
            'TitlePage' =>  $this->PageTitle ,
            'selMenu'=> $this->selMenu,
            'prefix_Role'=> $this->PrefixRole ,
            'restore'=> 1 ,
        ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $this->pageData = $pageData ;

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| # ClearCash
    public function ClearCash(){
        foreach ( config('app.WebLang') as $key=>$lang){
            Cache::forget('Faq_Cash_'.$key);
        }
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     index
    public function index()
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "List";
        $pageData['Trashed'] = Faq::onlyTrashed()->count();

        $Faqs = Faq::Defquery()->with('FaqToCategories')
            ->orderBy('id','desc')
            ->paginate(10);

        return view('admin.faq.faq_index',compact('pageData','Faqs'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     SoftDeletes
    public function SoftDeletes()
    {
        $pageData = $this->pageData ;
        $pageData['ViewType'] = "deleteList";

        $Faqs = self::getSelectQuery(Faq::onlyTrashed());
        self::ClearCash();
        return view('admin.faq.faq_index',compact('pageData','Faqs'));
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ListCategory
    public function ListCategory($id)
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "List";

        $Faqs = Faq::whereHas('FaqToCategories', function ($query) use ($id) {
            $query->where('category_id', $id);
        })
            ->paginate(10);




        dd($Faqs);

//        $Category = FaqCategory::with(['faqs' => function ($query) {
//            $query->orderBy('postion','ASC');
//        }])->where('id',$Categoryid)->firstOrFail();


        return view('admin.faq.faq_index',compact('pageData','Faqs'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     create
    public function create()
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "Add";
        $Faq =  Faq::findOrNew(0);
        $FaqCategory = FaqCategory::all();
        $selCat = [];
        return view('admin.faq.faq_form',compact('pageData','Faq','FaqCategory','selCat'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     edit
    public function edit($id)
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "Edit";

        $FaqCategory = FaqCategory::all();
        $Faq =  Faq::where('id',$id)->with('FaqToCategories')->firstOrFail();
        $selCat = $Faq->FaqToCategories()->pluck('category_id')->toArray();
        return view('admin.faq.faq_form',compact('pageData','Faq','FaqCategory','selCat'));
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     storeUpdate
    public function storeUpdate(FaqRequest $request, $id=0)
    {
        $categories = $request->input('categories');

        $saveData =  Faq::findOrNew($id);
        $saveData->is_active = intval((bool) $request->input( 'is_active'));
        $saveData->save();
        $saveData->FaqToCategories()->sync($categories);


        foreach ( config('app.WebLang') as $key=>$lang) {
            $saveTranslation = FaqTranslation::where('faq_id',$saveData->id)->where('locale',$key)->firstOrNew();
            $saveTranslation->faq_id = $saveData->id;
            $saveTranslation->locale = $key;
            $saveTranslation->name = $request->input($key.'.name');
            $saveTranslation->des = $request->input($key.'.des');
            $saveTranslation->other = $request->input($key.'.other');

            $saveTranslation->slug = AdminHelper::Url_Slug($request->input($key.'.slug'));
            $saveTranslation->g_title = $request->input($key.'.g_title');
            $saveTranslation->g_des = $request->input($key.'.g_des');
            $saveTranslation->save();
        }

        self::ClearCash();
        if($id == '0'){
            return redirect(route($this->PrefixRoute.'.index'))->with('Add.Done',"");
        }else{
            return redirect(route($this->PrefixRoute.'.index'))->with('Edit.Done',"");
        }
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     destroy
    public function destroy($id)
    {
        $deleteRow = Faq::findOrFail($id);
        $deleteRow = AdminHelper::DeleteAllPhotos($deleteRow);
        $deleteRow->delete();
        self::ClearCash();
        return back()->with('confirmDelete',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Restore
    public function restored($id)
    {
        Faq::onlyTrashed()->where('id',$id)->restore();
        self::ClearCash();
        return back()->with('restore',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ForceDeletes
    public function ForceDeletes($id)
    {
        $deleteRow =  Faq::onlyTrashed()->where('id',$id)->firstOrFail();
        $deleteRow = AdminHelper::DeleteAllPhotos($deleteRow);
        $deleteRow->forceDelete();
        self::ClearCash();
        return back()->with('confirmDelete',"");
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Sort
    public  function Sort($Categoryid){

        $pageData = $this->pageData;
        $pageData['ViewType'] = "List";

        $Category = FaqCategory::with(['faqs' => function ($query) {
            $query->orderBy('postion','ASC');
        }])->where('id',$Categoryid)->firstOrFail();
        return view('admin.faq.sort',compact('Category','pageData'));
    }

//#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
//#|||||||||||||||||||||||||||||||||||||| #     SaveSort
//    public function SaveSort(Request $request){
//        $positions = $request->positions;
//        foreach($positions as $position) {
//            $id = $position[0];
//            $newPosition = $position[1];
//            $saveData =  Faq::findOrFail($id) ;
//            $saveData->postion = $newPosition;
//            $saveData->save();
//        }
//        self::ClearCash();
//        return response()->json(['success'=>$positions]);
//    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     SaveSort
    public function SaveSort(Request $request){
        $positions = $request->positions;
        $categoryid = $request->categoryid;

        foreach($positions as $position) {
            $id = $position[0];
            $newPosition = $position[1];

            DB::table('faqcategory_faq')
                ->where('category_id',$categoryid)
                ->where('faq_id',$id)
                ->update(['postion' => $newPosition]);


        }
        self::ClearCash();
        return response()->json(['success'=>$positions]);
    }



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ListMorePhoto
    public function ListMorePhoto($id)
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "Edit";
        $Faq = Faq::findOrFail($id) ;
        $FaqPhotos = FaqPhoto::where('faq_id','=',$id)->orderBy('position')->get();
        return view('admin.faq.photos',compact('FaqPhotos','pageData','Faq'));
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     AddMorePhotos
    public function AddMorePhotos(FaqPhotoRequest $request)
    {
        $saveImgData = new PuzzleUploadProcess();
        $saveImgData->setCountOfUpload('2');
        $saveImgData->setUploadDirIs('faq/'.$request->blog_id);
        $saveImgData->setnewFileName($request->input('name'));
        $saveImgData->UploadMultiple($request);

        foreach ($saveImgData->sendSaveData as $newPhoto){
            $saveData =  FaqPhoto::findOrNew('0');
            $saveData->faq_id   =  $request->faq_id;
            $saveData->photo = $newPhoto['photo']['file_name'];
            $saveData->photo_thum_1 = $newPhoto['photo_thum_1']['file_name'];
            $saveData->save();
        }
        self::ClearCash();
        return back()->with('Add.Done',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     sortDefPhotoList
    public function sortPhotoSave(Request $request){
        $positions = $request->positions;
        foreach($positions as $position) {
            $id = $position[0];
            $newPosition = $position[1];
            $saveData =  FaqPhoto::findOrFail($id) ;
            $saveData->position = $newPosition;
            $saveData->save();
        }
        self::ClearCash();
        return response()->json(['success'=>$positions]);
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     More_PhotosDestroy
    public function More_PhotosDestroy($id){
        $deleteRow = FaqPhoto::findOrFail($id);
        $deleteRow = AdminHelper::DeleteAllPhotos($deleteRow);
        $deleteRow->delete();
        self::ClearCash();
        return back()->with('confirmDelete',"");
    }
}
