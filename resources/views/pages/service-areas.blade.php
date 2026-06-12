@extends('layouts.app')

@php
    $seo = getPageSeoByKey('service-areas');
    $title = $seo->meta_title ?? 'Service Areas | Colorado Construction Services';
    $description = $seo->meta_description ?? 'Serving Colorado with expert construction services including concrete, masonry, and asphalt paving across multiple locations.';
@endphp

@section('meta_title', $title)
@section('meta_description', $description)

@section('content')

 @include('sections.service-areas.hero')
@include('sections.service-areas.areas')
@include('sections.service-areas.dont')

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('page-service-areas');
});
</script>
@endpush