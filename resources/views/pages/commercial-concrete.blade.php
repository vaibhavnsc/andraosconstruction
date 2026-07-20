@extends('layouts.app')

@php
    $seo = getPageSeoByKey('services');
    $title = $seo->meta_title ?? 'Construction Services | Concrete, Masonry, Asphalt Paving';
    $description = $seo->meta_description ?? 'Professional concrete, masonry, asphalt paving, and snow melt system services. Quality workmanship for residential and commercial projects.';
@endphp

@section('meta_title', $title)
@section('meta_description', $description)

@section('content')
    @include('sections.home.services')
@endsection
