@extends('users.layouts.app')

@section('content')
    @include('users.partials.sections.banner')
    @include('users.partials.sections.brand')
    @include('users.partials.sections.service')
    @include('users.partials.sections.reason')
    @include('users.partials.sections.collection')
    @include('users.partials.sections.collection-video')
    {{-- @include('users.partials.sections.collection-tiktok') --}}
    @include('users.partials.sections.concept')
    @include('users.partials.sections.address')
    @include('users.partials.sections.famous')
    @include('users.partials.sections.customer')
    @include('users.partials.sections.feedback')
    @include('users.partials.sections.news')
    @include('users.partials.sections.partner')
    @include('users.partials.sections.connect')
@endsection