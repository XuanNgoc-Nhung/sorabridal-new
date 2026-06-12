@extends('users.layouts.app')

@section('content')
    <div class="w-100">
        @include('users.partials.sections.banner')
    </div>

    <div class="d-flex flex-column home-sections">
        {{-- @include('users.partials.sections.brand') --}}
        {{-- @include('users.partials.sections.service') --}}
        <div class="section-band">@include('users.partials.sections.open_letter')</div>
        <div class="section-band">@include('users.partials.sections.reason')</div>
        <div class="section-band">@include('users.partials.sections.collection')</div>
        <div class="section-band">@include('users.partials.sections.film_set')</div>
        <div class="section-band">@include('users.partials.sections.address')</div>
        <div class="section-band">@include('users.partials.sections.collection-video')</div>
        <div class="section-band">@include('users.partials.sections.collection-tiktok')</div>
        <div class="section-band">@include('users.partials.sections.concept')</div>
        <div class="section-band">@include('users.partials.sections.famous')</div>
        <div class="section-band">@include('users.partials.sections.customer')</div>
        <div class="section-band">@include('users.partials.sections.feedback')</div>
        <div class="section-band">@include('users.partials.sections.news')</div>
        <div class="section-band">@include('users.partials.sections.partner')</div>
        <div class="section-band">@include('users.partials.sections.connect')</div>
    </div>
@endsection
