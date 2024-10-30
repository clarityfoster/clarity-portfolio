@extends('layouts.app')
@section('content')
    <div class="detail-container1">
        @include('nav.nav')
        <div class="detail-card bg-secondary text-white shadow d-flex flex-column align-items-center">
            @php
                $images = json_decode($project->ui_image, true);
            @endphp
            @if (is_array($images) && count($images) > 0)
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="max-width: 500px">
                    <div class="carousel-inner" style="max-width: 450px">
                        @foreach ($images as $index => $image)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ asset('storage/' . $image) }}" class="d-block ui-image mt-2" alt="Image {{ $index + 1 }}" style="max-block-size: 800px">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev text-secondary" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
                        <span class="visually-hidden text-dark">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            @endif
            @if ($project->video_url)
                <iframe class="youtube shadow rounded-3 mt-3" width="640" height="335" src="{{ $project->video_url }}" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            @endif
            <div class="mt-4">
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
                @if ($project->tech_id)
                    <h4 class="df-title mt-3">Technologies Used</h4>
                    <hr>
                    @foreach ($project->tech as $tech)
                        <ul class="tech mb-1">
                            <li class="detail-body">{{ $tech->name }}</li>
                        </ul>
                    @endforeach
                @endif
                @if ($project->github_url)
                    <h4 class="df-title mt-3">Source Code</h4>
                    <hr>
                    <a href="{{ $project->github_url }}" class="btn btn-light">
                        <i class="bi bi-github me-2"></i> Get on GitHub
                    </a>
                @endif
            </div>
        </div>
    </div>
@endsection
