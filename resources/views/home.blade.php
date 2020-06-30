@extends('Layouts.client')
@section('content')
    @include('partials.select')
    @include('partials.slider')
    <x-property/>
{{--    <x-city/>--}}
    @include('partials.city')
    <x-whyus/>
    @endsection
