@extends('layouts.app')

@php
    $seo = getPageSeoByKey('service-areas');
    $title = $seo->meta_title ?? 'Service Areas — Commercial Concrete & Asphalt on the Colorado Front Range | Andraos Construction';
    $description = $seo->meta_description ?? 'Andraos Construction serves Denver, Aurora, Boulder, Littleton, Highlands Ranch, Castle Rock, Parker and more across the Colorado Front Range. Find your city.';
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