@extends('layouts.app')

@section('title', 'Popular Articles - EduFun')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Popular Articles</h2>
    <p class="text-muted mb-4">Discover the most viewed courses on EduFun</p>
    
    @if($courses->count() > 0)
    <div class="row">
        @foreach($courses as $course)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="position-relative">
                    <img src="{{ $course->image }}" class="card-img-top" alt="{{ $course->title }}" style="height: 200px; object-fit: cover;">
                    <span class="position-absolute top-0 end-0 badge bg-danger m-2">
                        {{ $course->views }} views
                    </span>
                </div>
                <div class="card-body d-flex flex-column">
                    <span class="badge bg-primary mb-2 align-self-start">{{ $course->category->name }}</span>
                    <h5 class="card-title">{{ $course->title }}</h5>
                    <p class="card-text text-muted small">{{ $course->created_at->format('d M Y') }} | by {{ $course->writer->name }}</p>
                    <p class="card-text">{{ Str::limit($course->description, 100) }}</p>
                    <a href="{{ route('course.show', $course->slug) }}" class="btn btn-primary mt-auto">Read more...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $courses->links('pagination::bootstrap-5') }}
    </div>
    @else
    <div class="alert alert-info">No popular articles available yet.</div>
    @endif
</div>
@endsection
