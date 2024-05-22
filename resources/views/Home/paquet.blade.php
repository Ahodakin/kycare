@extends('Layouts.app')

@section('title', 'KYCARE')

@section('content')
@include('Layouts.header')
@include('partials._page-title', ["title" => "Paquets"])
@include('Partials._paquet')

@endsection