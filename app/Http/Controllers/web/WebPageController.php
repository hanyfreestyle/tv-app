<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\WebMainController;
use App\Http\Requests\data\ContactUsFormRequest;
use App\Http\Requests\data\NewsLetterRequest;
use App\Models\admin\BlogPost;
use App\Models\admin\Category;
use App\Models\admin\config\WebPrivacy;
use App\Models\admin\FaqCategory;
use App\Models\admin\OurClient;
use App\Models\admin\Product;
use App\Models\data\ContactUsForm;
use App\Models\User;
use Illuminate\Support\Facades\View;


class WebPageController extends WebMainController
{
    public $SinglePageView ;
    public function __construct(

    )
    {
        parent::__construct();
        $stopCash =0;
        $MenuCategory = self::getMenuCategory($stopCash);
        View::share('MenuCategory', $MenuCategory);

       // dd($MenuCategory);


        $SinglePageView = [
            'SelMenu' => '',
            'slug' => null,
            'banner_id' => null,
            'breadcrumb' => 'home',

        ];


        $this->SinglePageView = $SinglePageView ;
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    HomePage
    public function HomePage()
    {
        $PageMeta = parent::getMeatByCatId('HomePage');
        parent::printSeoMeta($PageMeta);
        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'HomePage' ;
        $SinglePageView['banner_id'] = $PageMeta->banner_id ;
        $SinglePageView['banner_count'] = $PageMeta->page_banner_count ;
        $SinglePageView['banner_list'] = $PageMeta->PageBanner ;
        $BlogPosts =  BlogPost::defWeb()->limit(3)->get();
        return view('web.index',compact('SinglePageView','BlogPosts'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    AboutUs
    public function AboutUs ()
    {
        $PageMeta = parent::getMeatByCatId('AboutUs');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'AboutUs' ;
        $SinglePageView['banner_id'] = $PageMeta->banner_id ;
        $SinglePageView['banner_count'] = $PageMeta->page_banner_count ;
        $SinglePageView['banner_list'] = $PageMeta->PageBanner ;
        $SinglePageView['breadcrumb'] = "AboutUs" ;

        return view('web.page_about',compact('SinglePageView','PageMeta'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    OurClient
    public function OurClient ()
    {
        $PageMeta = parent::getMeatByCatId('OurClient');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'OurClient' ;
        $SinglePageView['banner_id'] = $PageMeta->banner_id ;
        $SinglePageView['banner_count'] = $PageMeta->page_banner_count ;
        $SinglePageView['banner_list'] = $PageMeta->PageBanner ;
        $SinglePageView['breadcrumb'] = "OurClient" ;

        $OurClients = OurClient::defWeb()->paginate(12);

        return view('web.page_our_client',compact('SinglePageView','PageMeta','OurClients'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    ContactUs
    public function ContactUs ()
    {
        $PageMeta = parent::getMeatByCatId('ContactUs');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'ContactUs' ;
        $SinglePageView['banner_id'] = $PageMeta->banner_id ;
        $SinglePageView['banner_count'] = $PageMeta->page_banner_count ;
        $SinglePageView['banner_list'] = $PageMeta->PageBanner ;
        $SinglePageView['breadcrumb'] = "ContactUs" ;

        $FaqCategories = FaqCategory::defWeb()
            ->get();
        return view('web.page_contact_us',compact('SinglePageView','PageMeta','FaqCategories'));
    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    ContactUsThanks
    public function ContactUsThanks ()
    {
        $PageMeta = parent::getMeatByCatId('ContactUs');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'ContactUs' ;
        $SinglePageView['banner_id'] = $PageMeta->banner_id ;
        $SinglePageView['banner_count'] = $PageMeta->page_banner_count ;
        $SinglePageView['banner_list'] = $PageMeta->PageBanner ;
        $SinglePageView['breadcrumb'] = "ContactUs" ;


        return view('web.page_contact_us_confirm',compact('SinglePageView','PageMeta'));
    }



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ContactSend
    public function ContactSend(ContactUsFormRequest $request)
    {
        $saveContactUs = new ContactUsForm();
        $saveContactUs->name = $request->input('name');
        $saveContactUs->email = $request->input('email');
        $saveContactUs->phone = $request->input('phone');
        $saveContactUs->subject = $request->input('subject');
        $saveContactUs->message = $request->input('message');
        $saveContactUs->save();
        return redirect()->route('Page_ContactUsThanks');
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    ContactUs
    public function Careers ()
    {
        $PageMeta = parent::getMeatByCatId('ContactUs');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'Careers' ;
        $SinglePageView['banner_id'] = $PageMeta->banner_id ;
        $SinglePageView['banner_count'] = $PageMeta->page_banner_count ;
        $SinglePageView['banner_list'] = $PageMeta->PageBanner ;
        $SinglePageView['breadcrumb'] = "ContactUs" ;

        $FaqCategories = FaqCategory::defWeb()
            ->get();
        return view('web.page_contact_us',compact('SinglePageView','PageMeta','FaqCategories'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    TermsConditions
    public function TermsConditions ()
    {

        $PageMeta = parent::getMeatByCatId('TermsConditions');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['banner_id'] = $PageMeta->banner_id ;
        $SinglePageView['banner_count'] = $PageMeta->page_banner_count ;
        $SinglePageView['banner_list'] = $PageMeta->PageBanner ;
        $SinglePageView['breadcrumb'] = "TermsConditions" ;


        $Terms = WebPrivacy::where('is_active',true)
            ->with('translation')
            ->orderBy('postion','asc')
            ->get();

        return view('web.page_term_conditions',compact('SinglePageView','PageMeta','Terms'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    FaqList
    public function FaqList ()
    {

        $PageMeta = parent::getMeatByCatId('FaqList');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'FaqList' ;
        $SinglePageView['banner_id'] = $PageMeta->banner_id ;
        $SinglePageView['banner_count'] = $PageMeta->page_banner_count ;
        $SinglePageView['banner_list'] = $PageMeta->PageBanner ;
        $SinglePageView['breadcrumb'] = "FaqList" ;

        $FaqCategories = FaqCategory::defWeb()->paginate(12);


        return view('web.faq_list',compact('SinglePageView','PageMeta','FaqCategories'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     FaqCatView
    public function FaqCatView ($slug)
    {
        $slug = \AdminHelper::Url_Slug($slug);

        $FaqCategory  = FaqCategory::defWeb()
            ->whereTranslation('slug', $slug)
            ->firstOrFail();

        if ($FaqCategory->translate()->where('slug', $slug)->first()->locale != app()->getLocale()) {
            return redirect()->route('Page_FaqCatView', $FaqCategory->translate()->slug);
        }

        $PageMeta = $FaqCategory ;
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'FaqList' ;
        $SinglePageView['breadcrumb'] = "FaqCatView" ;
        $SinglePageView['slug'] = 'faq/'.$FaqCategory->translate(webChangeLocale())->slug;

        $FaqCategories = FaqCategory::defWeb()
            ->where('id','!=',$FaqCategory->id)
            ->get();

        return view('web.faq_cat_view',compact('SinglePageView','PageMeta','FaqCategory','FaqCategories'));

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    LatestNews
    public function LatestNews ()
    {

        $PageMeta = parent::getMeatByCatId('LatestNews');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'LatestNews' ;
        $SinglePageView['banner_id'] = $PageMeta->banner_id ;
        $SinglePageView['banner_count'] = $PageMeta->page_banner_count ;
        $SinglePageView['banner_list'] = $PageMeta->PageBanner ;
        $SinglePageView['breadcrumb'] = "LatestNews" ;

        $BlogPosts =  BlogPost::defWeb()->paginate(12);

        return view('web.blog_list',compact('SinglePageView','PageMeta','BlogPosts'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    LatestNews
    public function LatestNews_View ($slug)
    {
        $slug = \AdminHelper::Url_Slug($slug);
        $Post  = BlogPost::defWeb()
            ->whereTranslation('slug', $slug)
            ->firstOrFail();


        if ($Post->translate()->where('slug', $slug)->first()->locale != app()->getLocale()) {
            return redirect()->route('LatestNews_View', $Post->translate()->slug);
        }

        $PageMeta = parent::getMeatByCatId('LatestNews');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'LatestNews' ;
        $SinglePageView['breadcrumb'] = "LatestNewsView" ;
        $SinglePageView['slug'] = 'latest-news/'.$Post->translate(webChangeLocale())->slug ;

        $BlogPosts =  BlogPost::defWeb()->where('id','!=',$Post->id)->limit(2)->get();

        return view('web.blog_view',compact('SinglePageView','PageMeta','Post','BlogPosts'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    MainCategory
    public function MainCategory ()
    {

        $PageMeta = parent::getMeatByCatId('MainCategory');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['banner_id'] = $PageMeta->banner_id ;
        $SinglePageView['banner_count'] = $PageMeta->page_banner_count ;
        $SinglePageView['banner_list'] = $PageMeta->PageBanner ;
        $SinglePageView['breadcrumb'] = "MainCategory" ;
        $SinglePageView['SelMenu'] = 'MainCategory' ;

        return view('web.web_product.category_main',compact('SinglePageView','PageMeta'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     WebCategoryView
    public function WebCategoryView ($slug)
    {
        $slug = \AdminHelper::Url_Slug($slug);

        $Category  = Category::WebSite_Def_Query()
            ->whereTranslation('slug', $slug)
            ->withCount('website_children')
            ->with('website_children')
            ->withCount('category_with_product_website')
            ->with('category_with_product_website')
            ->withCount('table_data')
            ->with('table_data')
            ->with('translation')
            ->firstOrFail();

        if ($Category->translate()->where('slug', $slug)->first()->locale != app()->getLocale()) {
            return redirect()->route('Page_WebCategoryView', $Category->translate()->slug);
        }


        $PageMeta = $Category ;
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'MainCategory' ;
        $SinglePageView['breadcrumb'] = "WebCategoryView" ;
        $SinglePageView['slug'] = 'category/'.$Category->translate(webChangeLocale())->slug;

        $trees = Category::find($Category->id)->ancestorsAndSelf()->orderBy('depth','asc')->get() ;

        return view('web.web_product.category_view',compact('SinglePageView','PageMeta','Category','trees'));

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     WebProductView
    public function WebProductView($catid,$slug){
        $catid = intval($catid);
        $slug = \AdminHelper::Url_Slug($slug);

        $Category = Category::WebSite_Def_Query()
            ->where('id',$catid)
            ->firstOrFail();

        $Product  = Product::Website_Shop_Def_Query()
            ->whereTranslation('slug', $slug)
            ->whereHas('product_with_category',function($query) use ($catid){
                $query->where('category_id',$catid);
            })
            ->with('website_product_with_category')
            ->with('table_data')
            ->withCount('table_data')
            ->firstOrFail();



        $PageMeta = $Product ;
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'MainCategory' ;
        $SinglePageView['breadcrumb'] = "WebProductView" ;
        $SinglePageView['slug'] = 'product/'.$catid.'/'.$Product->translate(webChangeLocale())->slug;

//        $trees = Category::find($catid)->ancestorsAndSelf()->orderBy('depth','asc')->get() ;
        $trees = $Category->ancestorsAndSelf()->orderBy('depth','asc')->get() ;

        $ReletedProducts=Product::Website_Shop_Def_Query()
            ->where('id','!=',$Product->id)
            ->whereHas('website_product_with_category',function($query) use ($catid){
            $query->where('category_id',$catid);
        })->limit(8)->get();

        return view('web.web_product.product_view',compact('SinglePageView','PageMeta','Product','trees','ReletedProducts','Category'));
    }





}
