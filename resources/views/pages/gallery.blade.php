@extends('layouts.app')

@php
    $seo = getPageSeoByKey('gallery');

    $title = $seo->meta_title ?? 'Project Gallery — Commercial Concrete & Asphalt in Colorado | Andraos Construction';

    $description = $seo->meta_description
        ?? 'Recent commercial concrete, asphalt and masonry projects across the Colorado Front Range — HOA, hospitality, retail and civic work by Andraos Construction.';
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