@extends('web.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb >
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection
@section('content')

    <div class="sectionS faqcat_list pt-0">

        <div class="container">
           <div class="row">
                <div class="col-12">
                    <div class=" pb-5">
                        <div class="row">
                            @foreach($FaqCategories as $Category )
                                <div class="col-lg-3">



                                    <div class="icon_box icon_box_style2">

                                        <div class="icon faq_icon">
                                            <a href="{{route('Page_FaqCatView',$Category->slug)}}">
                                                <img src="{!! getPhotoPath($Category->photo_thum_1,"faq_def") !!}">
                                            </a>
                                        </div>

                                        <div class="icon_box_content">
                                            <h2><a href="{{route('Page_FaqCatView',$Category->slug)}}">{{ $Category->name }}</a>
                                                <span class="cat_count">({{$Category->faqs_count}})</span></h2>
                                            <p>{{ $Category->g_des }}</p>
                                            <span class="readmore">
                                                <a href="{{route('Page_FaqCatView',$Category->slug)}}">{{__('web/def.read_more')}}</a>
                                            </span>
                                        </div>
                                    </div>


                                </div>

                            @endforeach

                            <div class="row">
                                <div class="col-12 mt-0 mt-md-4">
                                    <ul class="pagination pagination_style1 justify-content-center">
                                        {{ $FaqCategories->links() }}
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

