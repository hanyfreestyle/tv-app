<?php

namespace App\Http\Controllers;

use App\Helpers\AdminHelper;
use App\Models\admin\Category;
use App\Models\admin\config\DefPhoto;


use App\Models\admin\config\Setting;
use App\Models\admin\Page;
use App\Models\data\DataCity;
use Cache;
use Illuminate\Support\Facades\View;
use Phattarachai\LaravelMobileDetect\Agent;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class WebMainController extends Controller
{

    public $WebConfig;
    public $agent;
    public function __construct(

    )
    {

        $stopCash = 0 ;
        $agent = new Agent();
        $this->agent = $agent ;
        View::share('agent', $agent);

        $this->WebConfig = self::getWebConfig($stopCash);
        View::share('WebConfig', $this->WebConfig);

        $DefPhotoList = self::getDefPhotoList($stopCash);
        View::share('DefPhotoList', $DefPhotoList);

        $PageView = [
            'selMenu'=>  '',
            'container'=>  webContainer(0), # 'custom-container',
            'top_search_view'=>1, # 'custom-container',
            'top_search_view_cat'=> 0, # 'custom-container',
            'PageType'=> 'web',

        ];
        $this->PageView = $PageView;
        View::share('PageView', $PageView);

    }



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text
    static function printSeoMeta($row,$defPhoto="logo",$sendArr=array()){

        if($row != ''){



        $lang = thisCurrentLocale();

        $type = AdminHelper::arrIsset($sendArr,'type','website');
        $siteName = self::getWebConfig();


        if($row->photo){
            $defImage = $row->photo ;
        }else{
            $GetdefImage = self::getDefPhotoById($defPhoto);
            $defImage =optional($GetdefImage)->photo;
        }
        if($defImage){
            $defImage = defImagesDir($defImage);
        }

        SEOMeta::setTitle($row->translate($lang)->g_title ?? $row->translate($lang)->name);
        SEOMeta::setDescription($row->translate($lang)->g_des ?? $row->translate($lang)->name);
        SEOMeta::addMeta('article:published_time', $row->published_at ?? "" , 'property');

        OpenGraph::setTitle($row->translate($lang)->g_title ?? "");
        OpenGraph::setDescription($row->translate($lang)->g_des ?? "" );
        OpenGraph::addProperty('type', $type);
        OpenGraph::setUrl(url()->current());
        OpenGraph::addImage($defImage);
        OpenGraph::setSiteName($siteName->translate($lang)->name ?? "");

        TwitterCard::setTitle($row->translate($lang)->g_title ?? "");
        TwitterCard::setDescription($row->translate($lang)->g_des ?? "");
        TwitterCard::setUrl(url()->current());
        TwitterCard::setImage($defImage);
        TwitterCard::setImage($defImage);
        TwitterCard::setType('summary_large_image');

        }

    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     getMeatByCatId
    static function getMeatByCatId($cat_id){

        $PagesList = Cache::remember('PagesList_Cash_'.app()->getLocale(),config('app.def_24h_cash'), function (){
            return  Page::where('is_active',true)
                ->with('translation')
                ->orderBy('postion','ASC')
                ->get()
                ->keyBy('cat_id')
                ;
        });

        if ($PagesList->has($cat_id)) {
            return $PagesList[$cat_id] ;
        }else{
            return $PagesList['HomePage'] ?? '' ;
        }
   }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     getDefPhotoById
    static function getDefPhotoById($cat_id){
        $DefPhoto = self::getDefPhotoList();

        if ($DefPhoto->has($cat_id)) {
            return $DefPhoto[$cat_id] ;
        }else{
            return $DefPhoto['logo'] ?? '';
        }
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     getWebConfig
    static function getWebConfig($stopCash=0){
        if($stopCash){
            $WebConfig = Setting::where('id' , 1)->with('translation')->first();
        }else{
            $WebConfig = Cache::remember('WebConfig_Cash_'.app()->getLocale(),config('app.def_24h_cash'), function (){
                return  Setting::where('id' , 1)->with('translation')->first();
            });
        }
        return $WebConfig ;
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     getWebConfig
    static function getDefPhotoList($stopCash=0){

        if($stopCash){
            $DefPhotoList = DefPhoto::get()->keyBy('cat_id');
        }else{
            $DefPhotoList = Cache::remember('DefPhotoList_Cash_'.app()->getLocale(),config('app.def_24h_cash'), function (){
                return  DefPhoto::get()->keyBy('cat_id');
            });
        }
        return $DefPhotoList ;
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     getPagesList
    static function getPagesList(){
        $PagesList = Cache::remember('PagesList_Cash_'.app()->getLocale(),config('app.def_24h_cash'), function (){
            return  Page::where('is_active',true)
                ->with('translation')
                ->with('PageBanner')
                ->orderBy('postion','ASC')
                ->get()
                ->keyBy('cat_id')
                ;
        });
        return $PagesList ;
    }






}
