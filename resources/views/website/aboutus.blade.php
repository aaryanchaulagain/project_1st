@extends('layouts.master')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')

<!-- PAGE HERO -->
<section class="about-hero" aria-labelledby="about-hero-title">
    <img
        src="{{ asset('image/about.webp') }}"
        alt="About Oz Connect education consultancy"
        class="about-hero-bg"
        width="1920"
        height="900"
        fetchpriority="high"
        decoding="async"
    >

    <div class="about-hero-overlay">
        <h1 id="about-hero-title">About Us</h1>
    </div>
</section>

<!-- INTRO + MISSION -->
<section class="intro-mission-section" aria-labelledby="intro-mission-heading">
    <div class="container">
        <div class="intro-mission-grid">

            <article class="card">
                <h2 id="intro-mission-heading">Who We Are</h2>
                <p>
                    Oz Connect Consultancy is Nepal’s premier education consultancy
                    dedicated to guiding students toward their dream careers abroad.
                    With personalized mentorship and expert guidance, we ensure
                    every student gets the roadmap to success they deserve.
                </p>
            </article>

            <article class="card">
                <h2>Our Mission</h2>
                <p>
                    Our mission is to empower students by providing ethical and
                    professional consultancy services. We bridge the gap between
                    ambition and opportunity by creating life-changing educational
                    pathways.
                </p>
            </article>

        </div>
    </div>
</section>

<!-- CEO MESSAGE -->
<section class="ceo-section" aria-labelledby="ceo-heading">
    <div class="container">
        <div class="ceo-wrapper">

            <article class="ceo-message">
                <h2 id="ceo-heading">Message from Our CEO</h2>
                <p>
                    “At Oz Connect, we believe every student has the potential
                    to achieve greatness. Our role is to guide, support,
                    and inspire students to make informed decisions and unlock
                    their full potential.”
                </p>
                <strong>— Aryan, CEO & Founder</strong>
            </article>

            <figure class="ceo-image">
                <img
                    src="{{ asset('image/aryan.webp') }}"
                    alt="Aryan, CEO and Founder of Oz Connect"
                    width="450"
                    height="500"
                    loading="lazy"
                    decoding="async"
                >
            </figure>

        </div>
    </div>
</section>

<!-- TEAM -->
<section class="team-section" aria-labelledby="team-heading">
    <div class="container">
        <h2 id="team-heading">Meet Our Team</h2>

        <div class="team-grid">
            @foreach ([
                ['img' => 'bullet.webp', 'name' => 'Bullet'],
                ['img' => 'bullet.webp', 'name' => 'Jane Smith'],
                ['img' => 'aryan.webp', 'name' => 'Mike Johnson'],
                ['img' => 'aryan.webp', 'name' => 'Emily Davis'],
            ] as $member)
                <article class="team-member">
                    <img
                        src="{{ asset('image/'.$member['img']) }}"
                        alt="{{ $member['name'] }} - Oz Connect Team Member"
                        width="250"
                        height="250"
                        loading="lazy"
                        decoding="async"
                    >
                    <h3>{{ $member['name'] }}</h3>
                </article>
            @endforeach
        </div>

    </div>
</section>

@endsection
