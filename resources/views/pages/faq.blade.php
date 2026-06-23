@extends('layouts.app')

@php
    $seo = getPageSeoByKey('faq');

    $title = $seo->meta_title ?? 'FAQs | Andraos Construction';

    $description = $seo->meta_description
        ?? 'Visit our FAQ page to learn more about Andraos Construction.';
@endphp

@section('meta_title', $title)
@section('meta_description', $description)


@section('content')
@include('sections.faq.banner')
@include('sections.faq.accordian')
@include('sections.faq.get-started')
@endsection

