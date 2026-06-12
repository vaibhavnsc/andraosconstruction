@extends('layouts.app')

@php
    $seo = getPageSeoByKey('contact');
    $title = $seo->meta_title ?? 'Contact | Andraos Construction | Denver, CO Area';
    $description = $seo->meta_description ?? 'Reach out for inquiries & prompt responses. Learn more! Serving the Denver, CO Metro Area.';
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




