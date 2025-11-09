@extends('layouts.app')

@section('title', $writer->name . ' - Articles')

@section('content')
<div class="container my-5">
    <!-- Writer Info -->
    <div class="row mb-5">
        <div class="col-md-12 text-center">
            <img src="{{ $writer->image }}" alt="{{ $writer->name }}" 
                 class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
            <h2>{{ $writer->name }}</h2>
            <p class="text-muted">{{ $writer->specialist }}</p>
        </div>
    </div>

    <!-- Writer's Courses -->
    <h3 class="mb-4">Articles by {{ $writer->name }}</h3>
    
    @if($courses->count() > 0)
    <div class="row">
        @foreach($courses as $course)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ $course->image }}" class="card-img-top" alt="{{ $course->title }}" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <span class="badge bg-primary mb-2 align-self-start">{{ $course->category->name }}</span>
                    <h5 class="card-title">{{ $course->title }}</h5>
                    <p class="card-text text-muted small">{{ $course->created_at->format('d M Y') }}</p>
                    <p class="card-text">{{ Str::limit($course->description, 100) }}</p>
                    <a href="{{ route('course.show', $course->slug) }}" class="btn btn-primary mt-auto">Read more...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="alert alert-info">This writer hasn't published any articles yet.</div>
    @endif

    <!-- Back Button -->
    <div class="mt-4">
        <a href="{{ route('writers') }}" class="btn btn-outline-primary">← Back to Writers</a>
    </div>
</div>
@endsection
