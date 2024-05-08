@extends('Layouts.app')

@section('title', 'KYCARE')

@section('content')

@include('Layouts.header')
@include('partials._page-title', ["title" => "A propos"])
@include('Partials._about')

@endsection
