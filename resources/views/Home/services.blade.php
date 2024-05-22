@extends('Layouts.app')

@section('title', 'KYCARE')

@section('content')
@include('Layouts.header')
@include('partials._page-title', ["title" => "Service"])
@include('Partials._service')


@endsection
