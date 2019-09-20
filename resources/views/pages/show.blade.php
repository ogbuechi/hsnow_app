@extends('layouts.master')

@section('content')
    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{ $page->image ? Voyager::image($page->image) : 'assets/images/bg/bg-image-1.jpg' }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tm-breadcrumb">
                        <h2>{{ $page->title }}</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>{{ $page->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->

    <!-- Main Content -->
    <main class="main-content">

        <!-- About Us Area -->

        <!--// About Us Area -->



        <!-- Why Choose Area -->
        <div class="tm-section whychoose-area tm-padding-section">
            <div class="container">
                {!! $page->body !!}
            </div>
        </div>

        @if(in_array($page->slug,['about-us','vital','team']))
            @if(in_array($page->slug,['about-us','vital']))
        @include('partials.facts')
            @endif

        <div class="tm-section team-member-area tm-padding-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-12">
                        <div class="tm-section-title text-center">
                            <h2>Our Team Members</h2>
                            <p>Below are some of our team members </p>
                        </div>
                    </div>
                </div>
                <div class="row mt-30-reverse">

                    @include('partials.team_members')

                </div>
            </div>
        </div>
        <!--// Team Member Area -->


            @endif


    </main>
    <!--// Main Content -->
    @endsection
