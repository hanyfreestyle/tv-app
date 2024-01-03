@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>
    <x-html-section>
        <div class="row mb-3">
            <div class="col-12 text-left">
                <x-action-button url="{{route($PrefixRoute.'.More_Photos',$Faq->id)}}"  count="{{$Faq->more_photos_count}}" type="morePhoto"   />
            </div>
        </div>
    </x-html-section>

    <x-html-section>
        <x-ui-card :page-data="$pageData">
            <x-mass.confirm-massage />

            <form  class="mainForm" action="{{route($PrefixRoute.'.update',intval($Faq->id))}}" method="post"  enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <x-form-select-multiple name="categories" label="{{__('admin/def.Category')}}">
                        @foreach($FaqCategory as $Category )
                            <option  value="{{$Category->id}}"
                                {{ (collect(old('categories'))->contains($Category->id)) ? 'selected':'' }}
                                {{ (in_array($Category->id,$selCat)) ? 'selected' : ''}}
                            >{{$Category->name}}</option>
                        @endforeach
                    </x-form-select-multiple>
                </div>

                <div class="row">
                    @foreach ( config('app.WebLang') as $key=>$lang )
                        <div class="col-lg-6 {{getColDir($key)}}">
                            <x-trans-input
                                label="{{__('admin/form.faq_question')}} ({{ $key}})"
                                name="{{ $key }}[name]"
                                inputid="name_{{ $key }}"
                                dir="{{ $key }}"
                                reqname="{{ $key }}.name"
                                value="{!! old($key.'.name',$Faq->translateOrNew($key)->name) !!}"
                            />

                            <x-trans-text-area
                                label="{{ __('admin/form.faq_answer')}} ({{ ($key) }})"
                                name="{{ $key }}[des]"
                                dir="{{ $key }}"
                                reqname="{{ $key }}.des"
                                value="{!! old($key.'.des',$Faq->translateOrNew($key)->des) !!}"
                            />

                            <x-trans-text-area
                                label="{{ __('admin/form.faq_answer_full')}} ({{ ($key) }})"
                                name="{{ $key }}[other]"
                                dir="{{ $key }}"
                                reqname="{{ $key }}.other"
                                :reqspan="false"
                                value="{!! old($key.'.other',$Faq->translateOrNew($key)->other) !!}"
                            />

                        </div>
                    @endforeach
                </div>
                <hr>
                <x-meta-tage-filde :old-data="$Faq" :placeholder="false" :page-data="$pageData" />
                <hr>
                <div class="row">
                    <x-form-check-active :row="$Faq" name="is_active" page-view="{{$pageData['ViewType']}}"/>
                </div>

                <div class="container-fluid">
                    <x-form-submit text="{{$pageData['ViewType']}}" />
                </div>
            </form>
        </x-ui-card>

    </x-html-section>

@endsection

@push('JsCode')
    <script src="https://cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>
    <x-faq.ckeditor-jave  name="en[des]" />
    <x-faq.ckeditor-jave  name="es[des]" />
    <x-faq.ckeditor-jave  name="en[other]" />
    <x-faq.ckeditor-jave  name="es[other]" />
    <x-slug-name-script :pagetype="$pageData['ViewType']" />
@endpush
