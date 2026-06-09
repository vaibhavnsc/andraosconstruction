@extends('layouts.app')

@section('content')
    @include('sections.home.services')
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const path = window.location.pathname;
    const map = {
        '/commercial-concrete': 'Commercial Concrete',
        '/residential-concrete': 'Residential Concrete',
        '/concrete-finishes': 'Concrete Finishes',
        '/masonry': 'Masonry',
        '/asphalt': 'Asphalt Paving & Repair',
        '/snow-melt': 'Snow Melt Systems'
    };
    const title = map[path];
    if (title) {
        const cards = Array.from(document.querySelectorAll('#svcGrid h3'));
        const card = cards.find(function(h) { return h.textContent.trim() === title; });
        if (card) {
            setTimeout(function() {
                card.closest('.svc-card').scrollIntoView({ behavior: 'smooth', block: 'center' });
            }, 100);
        }
    }
});
</script>
@endpush