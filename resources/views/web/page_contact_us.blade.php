@extends('web.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb >
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection
@section('content')

    <div class="section bg_gray">
        <div class="container">
            <div class="row">
                @if(false == $agent->isMobile())
                <div class="col-lg-4">
                    <div class="conatct_img">
                        <img src="{{getDefPhotoPath($DefPhotoList,'contact-from')}}" class="rounded"  alt="about_img"/>
                    </div>
                </div>
                @endif
                <div class="col-lg-8 contactform">

{{--                    <h2 class="def_h2">{{__('web/contact_form.title')}}</h2>--}}

{{--                    <p class="leads"> {!! __('web/contact_form.des') !!}</p>--}}
                    <div class="">
                        <form method="post" action="{{route('Page_ContactSend')}}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <x-form-input
                                        name="name"
                                        label="{{__('web/contact_form.name')}}"
                                        value="{{old('name')}}"
                                    />
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <x-form-input
                                        name="email"
                                        label="{{__('web/contact_form.email')}}"
                                        value="{{old('email')}}"
                                    />
                                </div>

                                <div class="form-group col-md-6 mb-3">
                                    <x-form-input
                                        name="phone"
                                        label="{{__('web/contact_form.Phone')}}"
                                        value="{{old('phone')}}"
                                    />
                                </div>


                                <div class="form-group col-md-6 mb-3">
                                    <x-form-input
                                        name="subject"
                                        label="{{__('web/contact_form.subject')}}"
                                        value="{{old('subject')}}"
                                    />


                                </div>
                                <div class="form-group col-md-12 mb-3">
                                    <x-form-textarea
                                        label="{{__('web/contact_form.Message')}}"
                                        name="message"
                                        value="{{old('message')}}"
                                    />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" title="{{__('web/contact_form.Submit')}}" class="btn btn-fill-out" name="submit" value="Submit">{{__('web/contact_form.Submit')}}</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="section mt-3 mt-lg-3 pb-5">
        <x-website.block-faq-carousel :faq-categories="$FaqCategories" />
    </div>

@endsection


@section('googleMaps')

@endsection
