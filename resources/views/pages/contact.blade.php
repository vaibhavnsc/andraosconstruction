@extends('layouts.app')

@php
    $seo = getPageSeoByKey('contact');
    $title = $seo->meta_title ?? 'Contact Andraos Construction — Request a Commercial Estimate | Denver, CO';
    $description = $seo->meta_description ?? 'Request a commercial concrete, asphalt or masonry estimate from Andraos Construction. Serving the Colorado Front Range since 1993. Call (303) 915-3703.';
@endphp

@section('meta_title', $title)
@section('meta_description', $description)

@section('content')
@include('sections.contact.banner')
@include('sections.contact.contact')
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('page-contact');
});
</script>
@endpush




