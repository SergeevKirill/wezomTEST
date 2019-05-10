@extends('template')
@section('bodyClass', 'item-page')
@section('content')
    @include('header')
    @include('mmenu')
    @include('undernav')
    @include('popups')
    @include('menu')
    <div class="content centered">
        @include ('contacts/breadcrumbs')
        @include('contacts/page-title')
        @include('contacts/contact-data')
        @include('contacts/contacts-feedback')
    </div>


    @include('footer')
@endsection
