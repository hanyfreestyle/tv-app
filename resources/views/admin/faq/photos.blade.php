@extends('admin.layouts.app')

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>
    <x-mass.confirm-massage />

    <x-html-section>
        <div class="row mb-3 top_header_info">
            <div class="col-3 text-left">
                <x-action-button  url="{{route($PrefixRoute.'.edit', $Faq->id)}}"  type="back" />
                <x-action-button  url="{{route($PrefixRoute.'.ListPhotosEdit', $Faq->id)}}" print-lable="Edit Photos" />
            </div>

            <div class="col-9">
                <h1 class="def_h1">{{ $Faq->translate()->name ?? "" }}</h1>
            </div>
        </div>
    </x-html-section>

    <x-html-section>
        <div class="row">
            @if(count($FaqPhotos)>0)
                <div class="row col-lg-12 hanySort">
                    @foreach($FaqPhotos as $Photo)
                        <div class="col-lg-2 ListThisItam"  data-index="{{$Photo->id}}" data-position="{{$Photo->postion}}" >
                            <p class="PhotoImageCard"><img src="{{ defImagesDir($Photo->photo) }}"></p>
                            <div class="buttons mb-3" >
                                @can($PrefixRole.'_delete')
                                    <td class="tc"><x-action-button url="#" id="{{route($PrefixRoute.'.More_PhotosDestroy',$Photo->id)}}"  type="deleteSweet"/></td>
                                @endcan
                                @can($PrefixRole.'_edit')
                                    <x-action-button  url="{{route($PrefixRoute.'.EditPhoto',$Photo->id)}}"  type="edit" :tip="true" size="s"   />
                                @endcan

                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="col-lg-12">
                    <x-alert-massage type="nodata" />
                </div>
            @endif
        </div>
    </x-html-section>

    <x-html-section>
        <hr>
        <div class="row">
            <div class="col-lg-12">

                <form  class="mainForm" action="{{route($PrefixRoute.'.More_PhotosAdd')}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="faq_id" value="{{intval($Faq->id)}}">
                    <input type="hidden" name="name" value="{{ $Faq->translate('en')->slug }}">
                    <x-form-upload-file view-type="Add" :row-data="$Faq"
                                        :multiple="true"
                                        thisfilterid="{{ \App\Helpers\AdminHelper::arrIsset($modelSettings,$controllerName.'_morephoto_filterid',0) }}"
                    />
                    <div class="container-fluid">
                        <x-form-submit text="Add" />
                    </div>
                </form>

            </div>
        </div>
    </x-html-section>

@endsection


@push('JsCode')
    <x-sweet-delete-js-no-form/>
    <script src="{{defAdminAssets('plugins/bootstrap/js/jquery-ui.min.js')}}"></script>
    <x-sort-ajax-code url="{{ route($PrefixRoute.'.sortPhotoSave') }}" />
@endpush

