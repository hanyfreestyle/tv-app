@extends('admin.layouts.app')

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>
    <x-mass.confirm-massage />

    <x-html-section>
        <div class="row mb-3 top_header_info">
            <div class="col-3 text-left">
                <x-action-button  url="{{route($PrefixRoute.'.edit', $Faq->id)}}"  type="back" />
                <x-action-button  url="{{route($PrefixRoute.'.More_Photos', $Faq->id)}}" print-lable="Sort Photo" />
            </div>

            <div class="col-9">
                <h1 class="def_h1">{{ $Faq->translate()->name ?? "" }}</h1>
            </div>
        </div>
    </x-html-section>

    <x-html-section>
        <div class="row">
            @if(count($FaqPhotosData)>0)
                <form  class="mainForm" action="{{route($PrefixRoute.'.ListPhotosUpdate',intval($Faq->id))}}" method="post">
                    @csrf
                    <div class="row col-lg-12">
                        @foreach($FaqPhotosData as $Photo)
                            <div class="row col-lg-12">
                                <div class="col-lg-2">
                                    <p class="PhotoImageCard"><img src="{{ defImagesDir($Photo['photo']) }}"></p>
                                    @can($PrefixRole.'_edit')
                                        <p>
                                            <x-action-button  url="{{route($PrefixRoute.'.EditPhoto',$Photo['id'])}}"  type="edit" size="s"   />
                                        </p>
                                    @endcan

                                    <input type="hidden" name="id[]" value="{{$Photo['id']}}">

                                    <x-form-select-arr  label="Photo Position" name="print_photo{{$Photo['id']}}"
                                                        colrow="col-lg-12" sendvalue="{{$Photo['print_photo']}}"
                                                        :send-arr="$PrintPhotoPosition" :labelview="false" />

                                </div>
                                @foreach ( config('app.WebLang') as $key=>$lang )
                                    <x-form-textarea
                                        label=""
                                        name="des_{{$key}}{{$Photo['id']}}"
                                        topclass="col-lg-5 "

                                        value="{!! old('des_'.$key.$Photo['id'],$Photo['des_'.$key]) !!}"
                                    />
                                @endforeach
                            </div>
                       @endforeach
                            <div class="container-fluid mb-5">
                                <x-form-submit text="Update" />
                            </div>

                    </div>
                </form>
            @else
                <div class="col-lg-12">
                    <x-alert-massage type="nodata" />
                </div>
            @endif
        </div>
    </x-html-section>



@endsection


@push('JsCode')
    <script src="https://cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>
    @foreach($FaqPhotosData as $Photo)
        @foreach ( config('app.WebLang') as $key=>$lang )
            <x-faq.ckeditor-jave  name="des_{{$key}}{{$Photo['id']}}" />
        @endforeach
    @endforeach
@endpush

