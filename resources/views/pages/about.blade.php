@extends('layouts.app')

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




