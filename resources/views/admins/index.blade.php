@extends('layouts.app')
@section('content')
    <div class="main-div">
        <div class="first-div first-div-container">
            @include('nav.nav')
            <div class="home-content">
                <div class="responsive-div">
                    <img class="home-img-responsive" src="{{ asset('img/white.jpeg') }}" alt="Image">
                </div>
                <h3 class="home-title">
                    Just Turn Your
                    <span class="home-title-span">Ideas</span>
                    into <span class="home-title-span">Websites</span>
                </h3>
                <p class="home-body" id="shortBody">
                    My name is Clarity and, I'm a motivated junior web developer. I have experience building web
                    applications, web design, and managing databases. My work focuses on creating websites that are both
                    beautiful and easy to use.
                    <a href="" id="seeMore" class="seeMore text-secondary text-decoration-none small">See
                        More</a>
                </p>
                <p class="home-body" id="shortBody2">
                    I'm here to turn your vision into reality with clean, efficient code. Browse my portfolio to see how
                    my
                    expertise can meet your needs. Look through my projects to see how I can help bring your ideas to
                    life.
                </p>
                <p class="home-body fullBody" id="fullBody">
                    My name is Clarity and, I'm a motivated junior web developer. I have experience building web
                    applications, web design, and managing databases. My work focuses on creating websites that are both
                    beautiful and easy to use.
                    I'm here to turn your vision into reality with clean, efficient code. Browse my portfolio to see how
                    my
                    expertise can meet your needs. Look through my projects to see how I can help bring your ideas to
                    life.
                    <a href="" id="seeMore" class="seeMore text-secondary text-decoration-none small">See
                        Less</a>
                </p>
                <a href="" class="scroll-down">
                    <i class="bi bi-mouse fs-2"></i>
                    <span>Scroll down</span>
                    <i class="bi bi-arrow-down"></i>
                </a>
            </div>
            <div class="home-content2">
                <h4 class="home-content2-title">Some of my projects</h4>
                @foreach ($someprj as $some)
                    <table class="blog-table">
                        <tr>
                            <td class="blog-index">{{ $some->id }}</td>
                            <td class="blog-title">{{ $some->name }}</td>
                            <td class="blog-tag-container">
                                <span class="blog-tag">{{ $some->language }}</span>
                            </td>
                            <td class="blog-arrow">
                                <a href="{{ $some->github_url }}" class="blog-icon text-decoration-none">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </td>
                        </tr>
                    </table>
                @endforeach
            </div>
        </div>
        <div class="sec-div">
            <img class="home-img" src="{{ asset('img/white.jpeg') }}" alt="Image">
            <button class="lucky">
                <i class="fa-solid fa-paw"></i>
            </button>
            <button class="essence">My Essence</button>
            <div class="cm-gp">
                <button class="telegram">
                    <i class="bi bi-telegram"></i>
                </button>
                <button class="mail">
                    <i class="bi bi-envelope-fill"></i>
                </button>
                <span class="cm-text">Contact me here</span>
            </div>
            <div class="search-gp">
                <a href="https://github.com/clarityfoster" class="github">
                    <i class="bi bi-github"></i>
                </a>
                <button class="linkedin">
                    <i class="bi bi-linkedin"></i>
                </button>
                <span class="cm-text">Search me here</span>
            </div>
        </div>
    </div>
    <div class="abilities d-flex align-items-center justify-content-center">
        <div class="dark-muted d-flex align-items-center justify-content-center position-relative">
            <div class="dark-muted1 d-flex align-items-center justify-content-center">
                <div class="dark-muted2 d-flex align-items-center justify-content-center">
                    <div class="dark-muted2 d-flex align-items-center justify-content-center">
                        <h1 class="abilities-text text-uppercase main-brown">Abilities</h1>
                    </div>
                </div>
            </div>
            <div class="card-container">
                @foreach ($ability as $item)
                    <div class="{{ $item->class }}">
                        <div class="abCard-title d-flex justify-content-between align-items-start">
                            <h5 class="card-title1 text-uppercase main-brown">
                                {{ $item->title }}
                            </h5>
                            <span class="abCard-index">{{ $item->id }}</span>
                        </div>
                        <p class="abCard-text">
                            {{ $item->body }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="prjs">
        <div class="cat-div">
            @foreach ($category as $cat)
                <a href="#" class="cat-title">{{ $cat->name }}</a>
            @endforeach
        </div>
        <div class="prj-container">
            @foreach ($project as $prj)
                <div class="prj">
                    <img class="prj-img" src="{{ asset('storage/' . $prj->project_img) }}" alt="{{ $prj->name }}">
                    <div class="prj-content">
                        <h4 class="prj-name">{{ $prj->name }}</h4>
                        <p class="prj-body">{{ $prj->body }}</p>
                    </div>
                    <div class="prj-btn">
                        <a href="{{ $prj->github_url }}" class="card-link text-decoration-none main-brown">
                            <i class="bi bi-github me-1"></i> Source code
                        </a>
                        <a href="{{ route('detail', ['id' => $prj->id]) }}" class="card-link text-decoration-none main-brown">
                            See More <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const seeMore = document.getElementById('seeMore');
        const fullBody = document.getElementById('fullBody');
        const shortBody = document.getElementById('shortBody');

        seeMore.addEventListener('click', function(event) {
            event.preventDefault();
            if (fullBody.style.display === "block") {
                fullBody.style.display = "none";
                shortBody.style.display = "block";
                seeMore.textContent = "See More";
            } else {
                fullBody.style.display = "block";
                shortBody.style.display = "none";
                seeMore.textContent = "See Less";
            }
        });
    });
</script>
