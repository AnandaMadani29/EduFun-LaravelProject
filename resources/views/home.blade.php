@extends('layouts.app')

@section('title', 'Home - EduFun')

@section('content')
<!-- Hero Section -->
<div class="hero-section">
    <div class="container text-center">
        <h1 class="display-4 mb-3">Welcome to EduFun</h1>
        <p class="lead">Learn IT courses for free! Explore Data Science, Network Security, Interactive Multimedia, and Software Engineering.</p>
    </div>
</div>

<!-- Latest Courses -->
<div class="container mb-5">
    <h2 class="mb-4">Latest Articles</h2>
    <div class="row">
        @foreach($courses as $course)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ $course->image }}" class="card-img-top" alt="{{ $course->title }}" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $course->title }}</h5>
                    <p class="card-text text-muted small">{{ $course->created_at->format('d M Y') }} | by {{ $course->writer->name }}</p>
                    <p class="card-text">{{ Str::limit($course->description, 100) }}</p>
                    <a href="{{ route('course.show', $course->slug) }}" class="btn btn-primary mt-auto">Read more...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
