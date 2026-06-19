@extends('layouts.app')

@php
    $seo = getPageSeoByKey('gallery');

    $title = $seo->meta_title ?? 'Gallery | Andraos Construction | Denver, CO Area';

    $description = $seo->meta_description
        ?? 'View our recent projects like driveways & patios. Learn more! Serving the Denver, CO Metro Area.';
@endphp

@section('meta_title', $title)
@section('meta_description', $description)


@section('content')
@include('sections.gallery.hero')
@include('sections.gallery.gallery')
@include('sections.gallery.references')
@endsection


@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('page-gallery');
});
</script>
@endpush