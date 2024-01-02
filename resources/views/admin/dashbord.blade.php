@extends('admin.layouts.app')

@section('content')

    <x-html-section>
        <div class="row py-3"></div>
    </x-html-section>

    @can('ShopOrders_view')
        <x-html-section>
            <div class="row">

            </div>

        </x-html-section>
    @endcan





@endsection

@push('JsCode')

@endpush
