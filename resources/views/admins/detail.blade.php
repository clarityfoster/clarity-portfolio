@extends('layouts.app')
@section('content')
<div class="detail-container1">
    @include('nav.nav')
        <div class="detail-card bg-secondary text-white d-flex flex-column align-items-center">
            <iframe class="youtube rounded-3" 
                width="640" height="335" 
                src="{{ $project->video_url }}" 
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
            <div>
                <hr>
                <h2 class="detail-title align-items-start">{{ $project->name }}</h2>
                <hr>
                <p class="detail-body mb-4">{{ $project->body }}</p>
                <h4 class="df-title">Features</h4>
                <hr>
                @foreach ($project->feature as $feature)
                    <ul class="mb-4">
                        <h3 class="feature-title">{{ $feature->title }}</h3>
                        <li class="detail-body">{{ $feature->body }}</li>
                    </ul>
                @endforeach
                <h4 class="df-title mt-3">Technologies Used</h4>
                <hr>
                @foreach ($project->tech as $tech)
                    <ul class="tech mb-1">
                        <li class="detail-body">{{ $tech->name }}</li>
                    </ul>
                @endforeach
                <h4 class="df-title mt-3">Source Code</h4>
                <hr>
                <a href="{{ $project->github_url }}" class="btn btn-secondary">
                    <i class="bi bi-github me-2"></i> Get on GitHub
                </a>
            </div>
        </div>
    </div>
@endsection
