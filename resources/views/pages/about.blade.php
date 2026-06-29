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
@include('sections.about.hero')
@include('sections.about.about')
@include('sections.about.team-bios')
<!-- @include('sections.home.reviews') -->
@include('sections.about.why-andros')
@include('sections.about.talk')

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('page-about');
});
</script>
@endpush



 
