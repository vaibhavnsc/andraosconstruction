@extends('layouts.app')

@php
    $seo = getPageSeoByKey('terms');
    $title = $seo->meta_title ?? 'Terms & Conditions | Andraos Construction';
    $description = $seo->meta_description ?? 'Terms and conditions for Andraos Construction services. Please review our policies before using our services.';
@endphp

@section('meta_title', $title)
@section('meta_description', $description)

@section('content')

<section id ="terms">
    <div class="container">
        <div class="terms-condition">
            <h1>Terms & Conditions</h1>
            <p>Welcome to Andraos Construction. These Terms and Conditions govern your access to and use of our website and services. By accessing this website, you agree to comply with and be bound by these Terms and Conditions. If you do not agree with any part of these terms, please refrain from using this website.</p>
            <h2>Acceptance of Terms</h2>
            <p>By using this website, you acknowledge that you have read, understood, and agreed to these Terms and Conditions, as well as any applicable laws and regulations governing website use.</p>
            <h2>Website Purpose</h2>
            <p>The information provided on this website is intended for general informational purposes regarding Andraos Construction's services, capabilities, projects, and company information.</p>
            <p>Nothing on this website constitutes professional, legal, engineering, architectural, or construction advice unless expressly stated in a written agreement between Andraos Construction and a client.</p>
            <h2>Use of the Website</h2>
            <p>You agree to use this website only for lawful purposes and in a manner that does not:</p>
            <ul>
                <li>Violate any applicable laws or regulations.</li>
                <li>Interfere with the operation or security of the website.</li>
                <li>Attempt to gain unauthorized access to any portion of the website, server, or related systems.</li>
                <li>Distribute harmful software, malware, viruses, or malicious code.</li>
                <li>Misrepresent your identity or provide false information through website forms.</li>
            </ul>
            <p>We reserve the right to restrict or terminate access to users who violate these Terms and Conditions.</p>
            <h2>Privacy</h2>
            <p>Your use of this website is also governed by our Privacy Policy. By using this website, you acknowledge and agree to the terms outlined in our Privacy Policy.</p>
            <h2>Changes to Terms and Conditions</h2>
            <p>Andraos Construction reserves the right to update, modify, or replace these Terms and Conditions at any time without prior notice.</p>
            <p>Changes become effective immediately upon posting to this page. Continued use of the website following any updates constitutes acceptance of the revised Terms and Conditions.</p>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('page-terms');
});
</script>
@endpush




