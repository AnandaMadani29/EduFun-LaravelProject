@extends('layouts.app')

@section('title', $course->title . ' - EduFun')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <!-- Course Header -->
            <div class="mb-4">
                <span class="badge bg-primary mb-2">{{ $course->category->name }}</span>
                <h1 class="mb-3">{{ $course->title }}</h1>
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ $course->writer->image }}" alt="{{ $course->writer->name }}" 
                         class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
                    <div>
                        <p class="mb-0"><strong>{{ $course->writer->name }}</strong></p>
                        <p class="text-muted small mb-0">{{ $course->writer->specialist }}</p>
                    </div>
                </div>
                <p class="text-muted">
                    <small>Published on {{ $course->created_at->format('d M Y') }} | {{ $course->views }} views</small>
                </p>
            </div>

            <!-- Course Image -->
            <img src="{{ $course->image }}" class="img-fluid rounded mb-4" alt="{{ $course->title }}" style="width: 100%; max-height: 400px; object-fit: cover;">

            <!-- Course Content -->
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Description</h4>
                    <p class="lead">{{ $course->description }}</p>
                    
                    <hr class="my-4">
                    
                    <h4 class="mb-3">Course Content</h4>
                    <div style="text-align: justify; line-height: 1.8;">
                        {!! nl2br(e($course->content)) !!}
                    </div>
                </div>
            </div>

            <!-- Back Button -->
            <div class="mt-4">
                <a href="{{ route('category.show', $course->category->slug) }}" class="btn btn-outline-primary">
                    ← Back to {{ $course->category->name }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
