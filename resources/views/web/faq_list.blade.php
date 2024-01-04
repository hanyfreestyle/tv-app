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
                                <div class="col-lg-3 col-6">

                                    <div class="faq_cat_list">
                                        <div class="img_div">
                                            <a href="{{route('Page_FaqCatView',$Category->slug)}}">
                                                <img src="{!! getPhotoPath($Category->photo_thum_1,"faq_def") !!}">
                                            </a>
                                        </div>

                                        <h2><a href="{{route('Page_FaqCatView',$Category->slug)}}">{{ $Category->name }}</a>
                                            <span class="cat_count">({{$Category->faqs_count}})</span></h2>


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

