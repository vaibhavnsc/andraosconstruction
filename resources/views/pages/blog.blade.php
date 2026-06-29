@extends('layouts.app')

@php
    $seo = getPageSeoByKey('blog');

    $title = $seo->meta_title ?? 'Blog | Andraos Construction';

    $description = $seo->meta_description
        ?? 'Visit our blog to see the latest news and updates from Andraos Construction.';
@endphp 

@section('meta_title', $title)
@section('meta_description', $description)



@extends('layouts.app')

@section('content')

@include('sections.blog.banner')
@include('sections.blog.article')

@endsection

 