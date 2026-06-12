@extends('layouts.app')

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