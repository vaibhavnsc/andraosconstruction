@extends('layouts.app')

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




