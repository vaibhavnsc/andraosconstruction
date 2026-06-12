@extends('layouts.app')

@php
    $seo = getPageSeoByKey('about');

    $title = $seo->meta_title ?? 'About Andraos Construction | Colorado Construction Company';

    $description = $seo->meta_description
        ?? 'Learn about Andraos Construction, a Colorado construction company specializing in concrete, masonry, asphalt paving, and custom building services.';
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




