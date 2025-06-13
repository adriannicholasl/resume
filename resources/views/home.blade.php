@extends('layouts.app')

@section('title', 'Adrian Nicholas L - Portofolio')

@section('content')
<main>
    @include('partials.sidebar')

    <div class="main-content">
        @include('partials.navbar')
        @include('sections.about')
        @include('sections.service')
        @include('sections.testimonials')
        @include('sections.clients')
        @include('sections.resume')
        @include('sections.portfolio')
        @include('sections.blog')
        @include('sections.contact')
    </div>
</main>
@endsection