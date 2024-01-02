@extends('web.layouts.app')

@section('content')
    <div class="section AboutUs">
        <div class="container">
         <div class="row">
                <div class="col-lg-12">
                    <h1 class="def_h1 def_border" >{{__('web/menu.About_Us')}}</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 d-md-none d-lg-block">
                    <div class="about_img scene mt-2 mb-4 mb-lg-0">
                        <img src="{{getDefPhotoPath($DefPhotoList,'about-1')}}" alt="about_img"/>
                    </div>
                </div>
                <div class="col-lg-7 AboutUs_text">
                    <p class="AboutUs_text_home">{!! __('web/about.text_1') !!}</p>
                    <p class="AboutUs_text_home">{!! __('web/about.text_2') !!}</p>
                    <p class="AboutUs_text_home">{!! __('web/about.text_3_home') !!}</p>
                    <p class="footer_about_more">
                        <a href="{{route('Page_AboutUs')}}">{{__('web/def.read_more')}}</a>
                    </p>

                </div>
            </div>
        </div>
    </div>









<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 mb-lg-3">
                <div class="heading_s1 text-center">
                    <h2>{{__('web/menu.Latest_News')}}</h2>
                </div>

            </div>
        </div>
        <div class="row justify-content-centerX">

            @foreach($BlogPosts as $Post)
                <div class="col-lg-4 col-md-6">
                    <x-website.card-last-news  :post-data="$Post"/>
                </div>
            @endforeach


        </div>
    </div>
</div>


<x-website.block-our-client/>

@endsection

