<div class="faq_des_div">
    <div class="faq_des_print">
        {!! ($faq->des) !!}
    </div>

    @if(count($faq->more_photos) > 0 )
        <div class="faq_img_print">
            @foreach($faq->more_photos as $photo)
                @if($loop->index < 400)
                    <p>{!! $photo->$printdes !!}</p>
                    <p class="faq_photo_p">
                        <img src="{!! getPhotoPath($photo->photo,"faq_def") !!}">
                    </p>
                @endif
            @endforeach
        </div>
    @endif


    <div class="faq_other_print">
        {!! nl2br($faq->other) !!}
    </div>

    @if(count($faq->more_photos) > 0  and $btn == true)
        <div class="col-md-12 text-center  mt-3 mb-3">
            <a href="{{route('Page_FaqView',$faq->slug)}}" class="btn btn-fill-out">Open New Page</a>
        </div>
    @endif

</div>
