@extends('layouts.app')

@php
    $seo = getPageSeoByKey('privacy');
    $title = $seo->meta_title ?? 'Privacy Policy | Andraos Construction';
    $description = $seo->meta_description ?? 'Andraos Construction privacy policy. Learn how we protect and handle your personal information.';
@endphp

@section('meta_title', $title)
@section('meta_description', $description)

@section('content')
@include('sections.other.privacy-policy')

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('page-privacy');
});
</script>
@endpush




