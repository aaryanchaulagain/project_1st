@extends('layouts.master')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

<!-- CEO MESSAGE SECTION -->
<section class="home-ceo" aria-labelledby="ceo-heading">
    <div class="container ceo-container">

        <!-- Text Content -->
        <article class="ceo-content">
            <header>
                <h2 id="ceo-heading">Message from the CEO & Founder</h2>
                <p class="dear-students">Dear Students,</p>
            </header>

            <p>
                Welcome to <strong>Oz Connect</strong>, where we open doors to
                international education and help students achieve their global
                ambitions. As the CEO and Founder, I am proud to guide thousands
                of students toward academic success across Australia, the UK,
                Canada, the USA, Japan, Denmark, and more.
            </p>

            <p>
                Our consultancy provides expert guidance for higher education,
                career development, and international test preparation including
                IELTS, PTE, GMAT, and other globally recognized examinations.
            </p>

            <a href="/aboutus"
               class="read-more-btn"
               aria-label="Read more about Oz Connect vision and leadership">
                Read More About Our Vision
            </a>
        </article>

        <!-- Image -->
        <aside class="ceo-image-wrapper" aria-label="CEO profile image">
            <figure class="image-placeholder">
                <img
                    src="{{ asset('image/bullet.webp') }}"
                    alt="Mr. Name Surname, CEO and Founder of Oz Connect Education Consultancy"
                    width="360"
                    height="460"
                    loading="lazy"
                    decoding="async"
                >
                <figcaption class="ceo-name-label">
                    Mr. Name Surname — CEO & Founder
                </figcaption>
            </figure>
        </aside>

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
