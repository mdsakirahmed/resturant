@extends('layouts.frontend.app')
@push('title')

@endpush
@section('content')
    @include('frontend.partials.menubar')

    @include('frontend.partials.carousel')

    @include('frontend.partials.promotion')

    @include('frontend.partials.farmfood')

    @include('frontend.partials.products')

    @include('frontend.partials.offer')

    @include('frontend.partials.products-two')

    @include('frontend.partials.blog')

    @include('frontend.partials.brand')

    @include('frontend.partials.footer')
@endsection
@push('foot')

@endpush
