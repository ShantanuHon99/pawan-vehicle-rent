@extends('layouts.main')

@section('title', 'Home Page')

@section('content')
    @include('home')
    @include('explore')
    @include('whyus')
    @include('feedback')
@endsection
