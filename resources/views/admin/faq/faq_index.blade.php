@extends('admin.layouts.app')
@section('StyleFile')
    <x-data-table-plugins :style="true" :is-active="$viewDataTable"/>
@endsection

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>

    <x-html-section>
        <div class="row mb-3">
            <div class="col-12 text-left">
                <x-action-button  url="{{route( $PrefixCatRoute.'.index') }}"  type="cat" />
            </div>
        </div>
    </x-html-section>

    <x-html-section>
        <x-ui-card  :page-data="$pageData"   add-button-name="Add Question" >
            <x-mass.confirm-massage/>

            @if(count($Faqs)>0)
                <div class="card-body table-responsive p-0">
                    <table {!! $tableHeader !!} >
                        <thead>
                        <tr>
                            <th class="TD_20">#</th>
                            @foreach ( config('app.WebLang') as $key=>$lang)
                                <th>{{__('admin/def.form_name_ar')}}</th>
                            @endforeach

                            @if($pageData['ViewType'] == 'deleteList')
                                <th>{{ __('admin/page.del_date') }}</th>
                                <th></th>
                                <th></th>
                            @else
                                <th class="TD_250">{{__('admin/def.Category')}}</th>
                                <th class="tbutaction TD_50"></th>
                                @can($PrefixRole.'_edit')
                                    <th class="tbutaction TD_50"></th>
                                @endcan
                                @can($PrefixRole.'_delete')
                                    <th class="tbutaction TD_50"></th>
                                @endcan
                            @endif

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Faqs as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                @foreach ( config('app.WebLang') as $key=>$lang)
                                    <td>{{ $row->translate($key)->name ?? ''}}</td>
                                @endforeach
                                @if($pageData['ViewType'] == 'deleteList')
                                    <td>{{$row->deleted_at}}</td>
                                    <td class="tc"><x-action-button url="{{route($PrefixRoute.'.restore',$row->id)}}" type="restor" /></td>
                                    <td class="tc"><x-action-button url="#" id="{{route($PrefixRoute.'.force',$row->id)}}" type="deleteSweet"/></td>
                                @else
                                    <td>
                                        @foreach($row->FaqToCategories as $Category )
                                            <a href="{{route($PrefixRoute.'.ListCategory',$Category->id)}}">
                                                <span class="cat_table_name">{{$Category->name }}</span>
                                            </a>
                                        @endforeach
                                    </td>
                                    <td class="tc" >{!! is_active($row->is_active) !!}</td>
                                    @can($PrefixRole.'_edit')
                                        <td class="tc"><x-action-button url="{{route($PrefixRoute.'.More_Photos',$row->id)}}"  count="{{$row->more_photos_count}}" type="morePhoto" :tip="true" /></td>
                                        <td class="tc"><x-action-button url="{{route($PrefixRoute.'.edit',$row->id)}}" type="edit" :tip="true" /></td>
                                    @endcan

                                    @can($PrefixRole.'_delete')
                                        <td class=""><x-action-button url="#" id="{{route($PrefixRoute.'.destroy',$row->id)}}" type="deleteSweet" :tip="true" /></td>
                                    @endcan
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <x-alert-massage type="nodata" />
            @endif
        </x-ui-card>
        <div class="d-flex justify-content-center">
            @if($viewDataTable == false)
                {{ $Faqs->links() }}
            @endif
        </div>
    </x-html-section>
@endsection

@push('JsCode')
    <x-sweet-delete-err/>
    <x-sweet-delete-js-no-form/>
    <x-data-table-plugins :jscode="true" :is-active="$viewDataTable" />
@endpush
