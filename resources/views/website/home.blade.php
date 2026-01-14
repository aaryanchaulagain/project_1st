@extends('layouts.master')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

<!-- CEO MESSAGE -->
<section class="home-ceo" aria-labelledby="ceo-heading">
    <div class="container ceo-container">

        <article class="ceo-content">
            <h2 id="ceo-heading">Message from CEO & Founder</h2>
            <span class="dear-students">Dear Students,</span>

            <p>
                Welcome to Oz Connect, where we open doors to international education
                and help students achieve their dreams. As the CEO and Founder, I’m
                proud of our success in guiding thousands of students toward their
                educational goals across Australia, the UK, Canada, USA, Japan,
                Denmark, and more.
            </p>

            <p>
                We provide expert guidance for higher education and career development,
                along with test preparation for IELTS, PTE, GMAT, and other
                international exams through a dedicated team of professionals.
            </p>

            <a href="/aboutus" class="read-more-btn">
                Read More About Our Vision
            </a>
        </article>

        <div class="ceo-image-wrapper">
            <figure class="image-placeholder">
                <img
                    src="{{ asset('image/bullet.webp') }}"
                    alt="Mr. Name Surname, CEO and Founder of Oz Connect Consultancy"
                    width="400"
                    height="500"
                    loading="lazy"
                    decoding="async"
                >
            </figure>
            <p class="ceo-name-label">
                Mr. Name Surname — CEO & Founder
            </p>
        </div>

    </div>
</section>

<!-- CONTACT CTA -->
<section class="contact-cta" aria-labelledby="cta-heading">

    <!-- REAL IMAGE FOR SEO + LCP -->
    <img
        src="{{ asset('image/bookquery.webp') }}"
        alt="Students consulting Oz Connect for study abroad guidance"
        class="cta-bg"
        width="1920"
        height="1080"
        loading="lazy"
        decoding="async"
    >

    <div class="contact-cta-overlay">
        <div class="contact-cta-content">
            <h2 id="cta-heading">Got Any Queries?</h2>
            <p>
                Book an appointment by filling out our inquiry form.
                Our team will get back to you as soon as possible.
            </p>
            <a href="/contactus" class="cta-btn">
                Book An Appointment
            </a>
        </div>
    </div>

</section>

@endsection
