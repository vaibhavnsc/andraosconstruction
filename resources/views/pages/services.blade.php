@extends('layouts.app')

@php
    $seo = getPageSeoByKey('services');
    $title = $seo->meta_title ?? 'Construction Services | Concrete, Masonry, Asphalt Paving';
    $description = $seo->meta_description ?? 'Professional concrete, masonry, asphalt paving, and snow melt system services. Quality workmanship for residential and commercial projects.';
@endphp

@section('meta_title', $title)
@section('meta_description', $description)

@section('content')
    @include('sections.services.hero')
    @include('sections.services.sercom')
    @include('sections.services.scope')
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.body.classList.add('page-services');
    const pathMap = {
        '/commercial-concrete': '#commercial-concrete',
        '/residential-concrete': '#commercial-concrete',
        '/asphalt': '#asphalt',
        '/masonry': '#masonry',
        '/snow-melt': '#snow-melt',
        '/concrete-finishes': '#concrete-finishes'
    };

    const targetHash = window.location.hash || pathMap[window.location.pathname];

    if (targetHash) {
        setTimeout(function() {
            const target = document.querySelector(targetHash);
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }, 150);
    }
});
</script>
@endpush