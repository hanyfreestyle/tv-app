<div class="container conatct_faq">
    <div class="row">
        <div class="col-md-12">
            <div class="heading_tab_header">
                <h2 class="def_h2">{{ $lable }}</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="faq_logo  carousel_slider owl-carousel owl-theme nav_style3" data-dots="false" data-nav="true" data-margin="0" data-loop="false" data-autoplay="false" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "4"}}'>
                @foreach($faqCategories as $FaqCategory)


                            <a href="{{route($url,$FaqCategory->slug)}}">

                                    <img src="{{getPhotoPath($FaqCategory->photo,"faq_def")}}" alt="cl_logo"/>

                                <h3 class="def_h4 text-center">{{$FaqCategory->name}}</h3>
                            </a>


                @endforeach
            </div>
        </div>
    </div>
</div>
