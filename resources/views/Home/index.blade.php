@extends('Layouts.app')

@section('title', 'KYCARE')

@section('content')
    @include('Layouts.header')
    @include('Partials._hero-slide')
    @include('Partials._call-to-action')
    @include('Partials._about-tab')
    @include('Partials._slogans')
    @include('Partials._faq')
@endsection
