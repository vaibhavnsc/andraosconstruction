@extends('layouts.app')

@php
    $seo = getPageSeoByKey('home');
    $title = $seo->meta_title ?? 'Concrete Flatwork Contractors Denver | Andraos Construction';
    $description = $seo->meta_description ?? 'Looking for concrete flatwork contractors in Denver, CO? Andraos Construction offers expert concrete and asphalt services. Call or text us to learn more!';
@endphp

@section('meta_title', $title)
@section('meta_description', $description)

@section('content')
    @include('sections.home.hero')
    @include('sections.about.about')
    @include('sections.home.services')
    @include('sections.home.industries')
    @include('sections.home.gallery')
    @include('sections.home.case-study')
    @include('sections.home.why-andros')
    @include('sections.home.areas')
    @include('sections.home.location-pages')
    @include('sections.home.reviews')
    
@endsection