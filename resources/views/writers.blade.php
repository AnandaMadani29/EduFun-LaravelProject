@extends('layouts.app')

@section('title', 'Our Writers - EduFun')

@section('content')
<div class="container my-5">
    <h2 class="mb-4 text-center">Our Expert Writers</h2>
    
    <div class="row justify-content-center">
        @foreach($writers as $writer)
        <div class="col-md-4 mb-4">
            <div class="card text-center h-100">
                <div class="card-body d-flex flex-column align-items-center">
                    <img src="{{ $writer->image }}" alt="{{ $writer->name }}" 
                         class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                    <h5 class="card-title">{{ $writer->name }}</h5>
                    <p class="card-text text-muted">{{ $writer->specialist }}</p>
                    <a href="{{ route('writer.show', $writer->id) }}" class="btn btn-primary mt-auto">View Articles</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
