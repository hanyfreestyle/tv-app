@extends('admin.layouts.app')

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>

    <x-html-section>
        <div class="row mb-3 top_header_info">
            <div class="col-3 text-left">
                <x-action-button  url="{{route($PrefixRoute.'.edit', $rowData->faqName->id)}}"  type="back" />
                <x-action-button  url="{{route($PrefixRoute.'.More_Photos', $rowData->faqName->id )}}" print-lable="Sort Photo" />
                <x-action-button  url="{{route($PrefixRoute.'.ListPhotosEdit', $rowData->faqName->id )}}" print-lable="Edit Photos" />
            </div>

            <div class="col-9">
                <h1 class="def_h1">{{ $rowData->faqName->name ?? "" }}</h1>
            </div>
        </div>
    </x-html-section>


    <x-html-section>
        <x-ui-card :page-data="$pageData">
            <x-mass.confirm-massage />
            <form action="{{route('FAQ.FaqList.editPhotoUpdate',intval($rowData->id))}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    @foreach ( config('app.WebLang') as $key=>$lang )
                        <x-form-textarea
                            label=""
                            name="des_{{$key}}"
                            topclass="col-lg-6 "
                            value="{!! old('des_'.$key,$oldData['des_'.$key]) !!}"
                        />
                    @endforeach
                </div>



                <hr>
                <x-form-upload-file view-type="Edit" :row-data="$rowData"
                                    :multiple="false"
                                    thisfilterid="{{ \App\Helpers\AdminHelper::arrIsset($modelSettings,$controllerName.'_morephoto_filterid',0) }}"
                />
                <div class="container-fluid mb-5 mt-2">
                    <x-form-submit text="{{$pageData['ViewType']}}" />
                </div>
            </form>
        </x-ui-card>
    </x-html-section>


@endsection

@push('JsCode')
    <script src="https://cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>

    @foreach ( config('app.WebLang') as $key=>$lang )
        <x-faq.ckeditor-jave  name="des_{{$key}}" />
    @endforeach

@endpush
