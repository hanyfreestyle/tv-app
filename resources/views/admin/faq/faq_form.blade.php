@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>

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
                                label="{{__('admin/form.faq_question_'.$key)}} ({{ $key}})"
                                name="{{ $key }}[name]"
                                inputid="name_{{ $key }}"
                                dir="{{ $key }}"
                                reqname="{{ $key }}.name"
                                value="{!! old($key.'.name',$Faq->translateOrNew($key)->name) !!}"
                            />

                            <x-trans-text-area
                                label="{{ __('admin/form.faq_answer_'.$key)}} ({{ ($key) }})"
                                name="{{ $key }}[des]"
                                dir="{{ $key }}"
                                reqname="{{ $key }}.des"
                                value="{!! old($key.'.des',$Faq->translateOrNew($key)->des) !!}"
                            />

                            <x-trans-text-area
                                label="{{ __('admin/form.faq_answer_full_'.$key)}} ({{ ($key) }})"
                                name="{{ $key }}[other]"
                                dir="{{ $key }}"
                                reqname="{{ $key }}.other"
                                :reqspan="false"
                                value="{!! old($key.'.other',$Faq->translateOrNew($key)->other) !!}"
                            />

                            <x-trans-input
                                label="{{__('admin/form.banner_url')}} ({{ $key}})"
                                name="{{ $key }}[url]"
                                dir="en"
                                :reqspan="false"
                                reqname="{{ $key }}.url"
                                value="{{old($key.'.url',$Faq->translateOrNew($key)->url)}}"
                            />

                            <x-trans-input
                                label="{{__('admin/form.banner_url_but')}} ({{ $key}})"
                                name="{{ $key }}[url_but]"
                                dir="{{ $key }}"
                                :reqspan="false"
                                reqname="{{ $key }}.url_but"
                                value="{{old($key.'.url_but',$Faq->translateOrNew($key)->url_but)}}"
                            />

                        </div>
                    @endforeach
                </div>

                <hr>
                <div class="row">

                    <x-form-check-active :row="$Faq" name="is_active" page-view="{{$pageData['ViewType']}}"/>
                    <x-form-check-active :row="$Faq" name="url_type"  :defstatus="false" lable="{{__('admin/form.banner_url_type')}}"  page-view="{{$pageData['ViewType']}}"/>
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
        <script>
            CKEDITOR.replace('en[des]',
                {
                    language: 'en',
                    height: 250,
                    toolbarGroups : [
                        { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
                        { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
                        { name: 'insert', groups: [ 'insert' ] },
                        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
                        { name: 'links', groups: [ 'links' ] },
                        '/',
                        { name: 'colors', groups: [ 'colors' ] },
                        { name: 'styles', groups: [ 'styles' ] },
                        { name: 'tools', groups: [ 'tools' ] },
                        { name: 'others', groups: [ 'others' ] },
                        { name: 'about', groups: [ 'about' ] }
                    ],

                });
            CKEDITOR.config.removeButtons = 'Save,NewPage,ExportPdf,Preview,Print,Templates,About,Smiley,SpecialChar,PageBreak,Iframe,Language,BidiRtl,BidiLtr,Subscript,Superscript,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Find,Replace,SelectAll,Scayt';
        </script>
        <script>
            CKEDITOR.replace('es[des]',
                {
                    language: 'en',
                    height: 250,
                    toolbarGroups : [
                        { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
                        { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
                        { name: 'insert', groups: [ 'insert' ] },
                        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
                        { name: 'links', groups: [ 'links' ] },
                        '/',
                        { name: 'colors', groups: [ 'colors' ] },
                        { name: 'styles', groups: [ 'styles' ] },
                        { name: 'tools', groups: [ 'tools' ] },
                        { name: 'others', groups: [ 'others' ] },
                        { name: 'about', groups: [ 'about' ] }
                    ],

                });
            CKEDITOR.config.removeButtons = 'Save,NewPage,ExportPdf,Preview,Print,Templates,About,Smiley,SpecialChar,PageBreak,Iframe,Language,BidiRtl,BidiLtr,Subscript,Superscript,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Find,Replace,SelectAll,Scayt';
        </script>
        <script>
            CKEDITOR.replace('en[other]',
                {
                    language: 'en',
                    height: 250,
                    toolbarGroups : [
                        { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
                        { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
                        { name: 'insert', groups: [ 'insert' ] },
                        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
                        { name: 'links', groups: [ 'links' ] },
                        '/',
                        { name: 'colors', groups: [ 'colors' ] },
                        { name: 'styles', groups: [ 'styles' ] },
                        { name: 'tools', groups: [ 'tools' ] },
                        { name: 'others', groups: [ 'others' ] },
                        { name: 'about', groups: [ 'about' ] }
                    ],

                });
            CKEDITOR.config.removeButtons = 'Save,NewPage,ExportPdf,Preview,Print,Templates,About,Smiley,SpecialChar,PageBreak,Iframe,Language,BidiRtl,BidiLtr,Subscript,Superscript,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Find,Replace,SelectAll,Scayt';
        </script>
        <script>
            CKEDITOR.replace('es[other]',
                {
                    language: 'en',
                    height: 250,
                    toolbarGroups : [
                        { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
                        { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
                        { name: 'insert', groups: [ 'insert' ] },
                        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
                        { name: 'links', groups: [ 'links' ] },
                        '/',
                        { name: 'colors', groups: [ 'colors' ] },
                        { name: 'styles', groups: [ 'styles' ] },
                        { name: 'tools', groups: [ 'tools' ] },
                        { name: 'others', groups: [ 'others' ] },
                        { name: 'about', groups: [ 'about' ] }
                    ],

                });
            CKEDITOR.config.removeButtons = 'Save,NewPage,ExportPdf,Preview,Print,Templates,About,Smiley,SpecialChar,PageBreak,Iframe,Language,BidiRtl,BidiLtr,Subscript,Superscript,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Find,Replace,SelectAll,Scayt';
        </script>

    <x-slug-name-script :pagetype="$pageData['ViewType']" />
@endpush
