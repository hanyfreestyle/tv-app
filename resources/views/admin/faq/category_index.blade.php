@extends('admin.layouts.app')
@section('StyleFile')
    <x-data-table-plugins :style="true" :is-active="$viewDataTable"/>
@endsection

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>



    <x-html-section>
        <x-ui-card  :page-data="$pageData" add-button-name="Add Category">
            <x-mass.confirm-massage/>

            @if(count($FaqCategories)>0)
                <div class="card-body table-responsive p-0">
                    <table {!! $tableHeader !!} >
                        <thead>
                        <tr>
                            <th class="TD_20">#</th>
                            <th class="TD_20"></th>
                            @foreach ( config('app.WebLang') as $key=>$lang)
                                <th>{{__('admin/def.form_name_ar')}}</th>
                            @endforeach

                            @if($pageData['ViewType'] == 'deleteList')
                                <th>{{ __('admin/page.del_date') }}</th>
                                <th></th>
                                <th></th>
                            @else
                                @can($PrefixRole.'_edit')
                                    <th class="tbutaction TD_50"></th>
                                    <th class="tbutaction TD_50"></th>
                                    <th class="tbutaction TD_50"></th>
                                @endcan
                                @can($PrefixRole.'_delete')
                                    <th class="tbutaction TD_50"></th>
                                @endcan
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($FaqCategories as $Category)
                            <tr>
                                <td>{{$Category->id}}</td>
                                <td class="tc">{!!  \App\Helpers\AdminHelper::printTableImage($Category) !!} </td>

                                @foreach ( config('app.WebLang') as $key=>$lang)
                                    <td>{{ $Category->translate($key)->name ?? ''}}</td>
                                @endforeach

                                @if($pageData['ViewType'] == 'deleteList')
                                    <td>{{$Category->deleted_at}}</td>
                                    <td class="tc"><x-action-button url="{{route($PrefixRoute.'.restore',$Category->id)}}" type="restor" /></td>
                                    <td class="tc"><x-action-button url="#" id="{{route($PrefixRoute.'.force',$Category->id)}}" type="deleteSweet"/></td>
                                @else
                                    @can($PrefixRole.'_edit')

                                        <td class="tc" >{!! is_active($Category->is_active) !!}</td>
                                        <td class="tc" ><x-action-button url="{{route($PrefixRoute.'.Sort',$Category->id)}}" type="sort" :tip="true" /></td>
                                        <td class="tc"><x-action-button url="{{route($PrefixRoute.'.edit',$Category->id)}}" type="edit" :tip="true" /></td>
                                    @endcan
                                    @can($PrefixRole.'_delete')
                                        <td class=""><x-action-button url="#" id="{{route($PrefixRoute.'.destroy',$Category->id)}}" type="deleteSweet" :tip="true" /></td>
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
                {{ $FaqCategories->links() }}
            @endif
        </div>
    </x-html-section>

@endsection

@push('JsCode')
    <x-sweet-delete-err/>
    <x-sweet-delete-js-no-form/>
    <x-data-table-plugins :jscode="true" :is-active="$viewDataTable" />
@endpush
