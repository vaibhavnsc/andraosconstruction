@extends('layouts.app')

@php
    $seo = getPageSeoByKey('terms');
    $title = $seo->meta_title ?? 'Terms & Conditions | Andraos Construction';
    $description = $seo->meta_description ?? 'Terms and conditions for Andraos Construction services. Please review our policies before using our services.';
@endphp

@section('meta_title', $title)
@section('meta_description', $description)

@section('content')
@include('sections.other.terms-condition')
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('page-terms');
});
</script>
@endpush




