@extends('layouts.app')

@php
    $seo = getPageSeoByKey('privacy');
    $title = $seo->meta_title ?? 'Privacy Policy | Andraos Construction';
    $description = $seo->meta_description ?? 'Andraos Construction privacy policy. Learn how we protect and handle your personal information.';
@endphp

@section('meta_title', $title)
@section('meta_description', $description)

@section('content')

<section id="privacy">
    <div class="container">
        <div class="privacy-policy">
            <h1>Privacy Policy</h1>
            <p>At Andraos Construction, we respect your privacy and are committed to protecting the information you share with us. This Privacy Policy explains our practices regarding the collection, use, storage, and protection of information obtained through our website and communications with our company.</p>
            <p>By accessing and using this website, you agree to the terms outlined in this Privacy Policy.</p>
            <h2>Our Commitment to Privacy</h2>
            <p>Protecting the privacy and confidentiality of our clients, website visitors, and business partners is important to us. We strive to maintain appropriate safeguards and business practices designed to protect information shared through our website and during the course of providing our construction services.</p>
            <h2>Use of Website Information</h2>
            <p>Information submitted through our website, including contact forms, estimate requests, and other inquiries, may be used to:</p>
            <ul>
                <li>Respond to questions and service requests.</li>
                <li>Provide project consultations and estimates.</li>
                <li>Communicate regarding construction services and project updates.</li>
                <li>Improve the performance, functionality, and user experience of our website.</li>
                <li>Maintain website security and prevent unauthorized activity.</li>
                <li>Fulfill legal, regulatory, and contractual obligations.</li>
            </ul>
            <p>We use information only for legitimate business purposes and in accordance with applicable laws and regulations.</p>
            <h2>Cookies and Website Analytics</h2>
            <p>Our website may utilize cookies, analytics tools, and related technologies to enhance functionality and understand how visitors interact with our website. These tools help us improve website performance, optimize content, and provide a better user experience.</p>
            <p>You may choose to disable cookies through your browser settings; however, certain features of the website may not operate as intended.</p>

            <h2>Information Sharing</h2>
            <p>Andraos Construction does not sell, rent, or trade personal information to third parties.</p>
            <p>Information may be shared only when necessary to:</p>
            <ul>
                <li>Support business operations through trusted service providers.</li>
                <li>Comply with legal obligations, court orders, or governmental requests.</li>
                <li>Protect the rights, property, safety, or security of our company, clients, or others.</li>
                <li>Facilitate professional services required for business operations.</li>
            </ul>
            <p>Any third parties engaged on our behalf are expected to maintain appropriate confidentiality and security standards.</p>
            <h2>Changes to This Privacy Policy</h2>
            <p>Andraos Construction reserves the right to update or modify this Privacy Policy at any time to reflect changes in business practices, legal requirements, or website functionality.</p>
            <p>Any updates will be posted on this page with a revised effective date. Continued use of the website following the posting of changes constitutes acceptance of those changes.</p>
            <h2>Contact Us</h2>
            <p>If you have any questions regarding this Privacy Policy or our privacy practices, please contact us:</p>
            <h3>Andraos Construction</h3>
            <p><a href="https://maps.app.goo.gl/fkSX938Yuh4QBNYp6" target="_blank">9331 Commerce Center Street <br>Highlands Ranch, CO 80129</a></p>
            <p>Phone: <a href="tel:(303) 915-3703">(303) 915-3703</a></p>

        </div>
    </div>
</section>


@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('page-privacy');
});
</script>
@endpush




