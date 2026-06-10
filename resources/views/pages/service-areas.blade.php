@extends('layouts.app')

@section('content')

 @include('sections.home.location-pages')

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('page-service-areas');
});
</script>
@endpush