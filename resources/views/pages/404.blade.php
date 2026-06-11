@extends('layouts.app')

@section('content')

@include('sections.other.404')

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('page-404');
});
</script>
@endpush