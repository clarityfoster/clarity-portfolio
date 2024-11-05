@extends('layouts.app')
@section('content')
    @include('nav.nav')
    <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($essence as $index => $ess)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <div class="essence-page essence-container">
                        <img class="essence-img" src="{{ asset('storage/' . $ess->essence_img) }}" alt="">
                        <div class="essence-content">
                            <h1 class="essence-title">
                                {{ $ess->title }}
                            </h1>
                            <h3 class="essence-subtitle">
                                {{ $ess->subtitle }}
                            </h3>
                            <p class="essence-body">
                                {{ $ess->body }}
                            </p>
                            @foreach ($ess->card as $card)
                                <div class="cards">
                                    <div class="essence-card p-3 rounded-4">
                                        <i class="{{ $card->icon_class }}"></i>
                                        <span>{{ $card->card_name }}</span>
                                        @if ($ess->id == 1)
                                            <small class="text-muted">{{ $project->count() }}
                                                @if ($project->count() > 0)
                                                    Projects
                                                @else
                                                    Project
                                                @endif
                                            </small>
                                        @else
                                            <small class="text-muted">{{ $ui->count() }}
                                                @if ($ui->count() > 0)
                                                    Projects
                                                @else
                                                    Project
                                                @endif
                                            </small>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                            @if ($ess->cv_path)
                                <a href="{{ asset($ess->cv_path) }}" class="download-cv rounded-4" download>
                                    Download CV
                                    <i class="bi bi-file-earmark-text-fill ms-2"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-secondary rounded-2" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-secondary rounded-2" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    @include('admins.footer')
@endsection
