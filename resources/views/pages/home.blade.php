@extends('layouts.app')

@php
    $seo = getPageSeoByKey('home');
    $title = $seo->meta_title ?? 'Concrete Flatwork Contractors Denver | Andraos Construction';
    $description = $seo->meta_description ?? 'Looking for concrete flatwork contractors in Denver, CO? Andraos Construction offers expert concrete and asphalt services. Call or text us to learn more!';
@endphp

@section('meta_title', $title)
@section('meta_description', $description)

@section('content')
    @include('sections.home.hero-video')
    @include('sections.home.trusted-by')
    <!-- @include('sections.home.trust') -->
    @include('sections.home.about')
    @include('sections.home.services')
 
    @include('sections.home.gallery')
    @include('sections.home.service')
    @include('sections.home.reviews')
    @include('sections.home.get-touch')

    
@endsection