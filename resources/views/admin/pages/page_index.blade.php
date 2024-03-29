@extends('admin.layouts.app')
@section('StyleFile')
    <x-data-table-plugins :style="true" :is-active="$viewDataTable"/>
@endsection

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>

    <x-html-section>
        <div class="row mb-3">
            <div class="col-12 text-left">
                <x-action-button  url="{{route($PrefixRoute.'.Sort')}}" type="sort" />
            </div>
        </div>
    </x-html-section>

    <x-html-section>
        <x-ui-card :page-data="$pageData" >

            <x-mass.confirm-massage/>

            @if(count($Pages)>0)
                <div class="card-body table-responsive p-0">
                    <table {!! $tableHeader !!} >
                        <thead>
                        <tr>
                            <th class="TD_20">#</th>
                            <th class="TD_20"></th>
                            <th class="TD_100">CatId</th>
                            <th class="TD_200" >{{__('admin/def.form_name_en')}}</th>
                            @if($pageData['ViewType'] == 'deleteList')
                                <th class="TD_200">{{ __('admin/page.del_date') }}</th>
                                <th></th>
                                <th></th>
                            @else
                                <th class="TD_250">{{__('admin/form.meta_g_title_'.thisCurrentLocale())}}</th>
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
                        @foreach($Pages as $Page)
                            <tr>
                                <td>{{$Page->id}}</td>
                                <td class="tc">{!!  \App\Helpers\AdminHelper::printTableImage($Page) !!} </td>
                                <td>{{$Page->cat_id}}</td>

                                <td>{{ $Page->name}}</td>


                                @if($pageData['ViewType'] == 'deleteList')
                                    <td>{{$Page->deleted_at}}</td>
                                    <td class="tc"><x-action-button url="{{route($PrefixRoute.'.restore',$Page->id)}}" type="restor" /></td>
                                    <td class="tc"><x-action-button url="#" id="{{route($PrefixRoute.'.force',$Page->id)}}" type="deleteSweet"/></td>
                                @else
                                    <td>{{$Page->translate(thisCurrentLocale())->g_title}}</td>
                                    <td class="tc" >{!! is_active($Page->is_active) !!}</td>
                                    @can($PrefixRole.'_edit')
                                        <td class="tc"><x-action-button url="{{route($PrefixRoute.'.edit',$Page->id)}}" type="edit" :tip="true" /></td>
                                    @endcan
                                    @can($PrefixRole.'_delete')
                                        <td class=""><x-action-button url="#" id="{{route($PrefixRoute.'.destroy',$Page->id)}}" type="deleteSweet" :tip="true" /></td>
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
                {{ $Pages->links() }}
            @endif
        </div>
    </x-html-section>
@endsection

@push('JsCode')
    <x-sweet-delete-js-no-form/>
    <x-data-table-plugins :jscode="true" :is-active="$viewDataTable" />
@endpush

