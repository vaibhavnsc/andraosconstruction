@extends('layouts.app')

@php
    $seo = getPageSeoByKey('about');

    $title = $seo->meta_title ?? 'About | Andraos Construction | Denver, CO Area';

    $description = $seo->meta_description
        ?? 'Andraos Construction has been serving Denver since 1993. Learn more about our services! Serving the Denver, CO Metro Area.';
@endphp

@section('meta_title', $title)
@section('meta_description', $description)

@section('content')

@include('sections.about.about')
@include('sections.home.gallery')
@include('sections.home.reviews')

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('page-about');
});
</script>
@endpush




