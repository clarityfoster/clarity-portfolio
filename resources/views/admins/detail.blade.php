@extends('layouts.app')
@section('content')
    <div class="detail-container1">
        @include('nav.nav')
        <div class="detail-card main-color d-flex flex-column align-items-center">
            @php
                $images = json_decode($project->ui_image, true);
                $maxWidth = '450px';
                if (is_array($images) && count($images) > 0) {
                    $imagePath = storage_path('app/public/' . $images[0]);
                    if (file_exists($imagePath)) {
                        [$width] = getimageSize($imagePath);
                        if ($width > 1000) {
                            $maxWidth = '1000px';
                        }
                    }
                }
            @endphp
            @if (is_array($images) && count($images) > 0)
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" style="max-width: {{ $maxWidth }}">
                        @foreach ($images as $index => $image)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ asset('storage/' . $image) }}" class="d-block ui-image mt-2 w-100 rounded-3"
                                    alt="Image {{ $index + 1 }}" style="max-block-size: 800px">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev text-secondary" type="button"
                        data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
                        <span class="visually-hidden text-dark">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            @endif
            @if ($project->video_url)
                <iframe class="youtube shadow rounded-3 mt-3" width="640" height="335" src="{{ $project->video_url }}"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            @endif
            <div class="mt-4">
                <hr>
                <h2 class="detail-title align-items-start">{{ $project->name }}</h2>
                <hr>
                <p class="detail-body mb-4">{{ $project->body }}</p>
                <h3 class="df-title">Features</h3>
                <hr>
                <ul class="features-list mb-4">
                    @foreach ($project->feature as $feature)
                        <li>
                            <h4 class="feature-title">{{ $feature->title }}</h4>
                            <ul class="feature-body-list">
                                <li class="detail-body">{{ $feature->body }}</li>
                            </ul>
                        </li>
                    @endforeach
                </ul>
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
                    <a href="{{ $project->github_url }}" class="btn text-light bg-main-brown">
                        <i class="bi bi-github me-2"></i> Get on GitHub
                    </a>
                @endif
            </div>
        </div>
    </div>
    @include('admins.footer')
@endsection
