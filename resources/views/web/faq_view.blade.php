@extends('web.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb >
{{--        {{ Breadcrumbs::render($SinglePageView['breadcrumb'],$FaqCategory) }}--}}
    </x-website.breadcrumb>
@endsection


@section('content')

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="faqcat_list pb-5">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row mb-2">
                                    <div class="col-lg-12">

                                        <h1 class="faq_def_h1"> {{ $Faq->name }}</h1>
                                        <x-faq.faq-info-print :faq="$Faq" :printdes="$printDes" :btn="false" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mt-4 pt-2 mt-xl-0 pt-xl-0 d-none d-xl-block">
                                @foreach($FaqCategories as $Category )
                                    <div class="faq_cat_list">
                                        <div class="img_div">
                                            <a href="{{route('Page_FaqCatView',$Category->slug)}}">
                                                <img src="{!! getPhotoPath($Category->photo_thum_1,"faq_def") !!}">
                                            </a>
                                        </div>
                                        <h2><a href="{{route('Page_FaqCatView',$Category->slug)}}">{{ $Category->name }}</a> <span class="cat_count">({{$Category->faqs_count}})</span></h2>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section mt-3 mt-lg-3 pb-5 d-md-block d-lg-none">
        <x-website.block-faq-carousel :faq-categories="$FaqCategories" lable="{{__('web/def.read_more')}}" />
    </div>
@endsection

