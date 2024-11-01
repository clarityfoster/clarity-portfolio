@extends('layouts.app')
@section('content')
    @include('nav.nav')
    <div class="main-div" id="home">
        <div class="first-div first-div-container">
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
                <a href="{{ route('index') }}#abilities" class="scroll-down">
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
            <a href="{{ route('essence') }}" class="essence">My Essence</a>
            <div class="cm-gp">
                <a href="https://t.me/clarity_foster" class="telegram">
                    <i class="bi bi-telegram"></i>
                </a>
                <a href="mailto:clarityfoster23@gmail.com" class="mail">
                    <i class="bi bi-envelope-fill"></i>
                </a>
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
    <div id="abilities" class="abilities d-flex align-items-center justify-content-center">
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
    <div class="prjs" id="projects">
        <div class="cat-div">
            @foreach ($category as $cat)
                <a href="#" class="cat-title" data-category={{ $cat->id }}>{{ $cat->name }}</a>
            @endforeach
        </div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center g-3">
                @foreach ($project as $prj)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="prj rounded-4 p-4 shadow pale-brown-bg"
                            style="max-width: 450px; height: auto; overflow: hidden;"
                            data-category="{{ $prj->category_id }}">
                            <img class="img-thumbnail card-img-top mb-2 rounded-3" src="{{ asset('storage/' . $prj->project_img) }}"
                                alt="{{ $prj->name }}">
                            <div class="card-body text-center text-md-start text-white">
                                <b class="prj-title main-brown">{{ $prj->name }}</b>
                                <p class="prj-body mt-1 main-color">{{ $prj->pre_body }}</p>
                                <div class="text-center text-md-end mt-2">
                                    <a href="{{ route('detail', ['id' => $prj->id]) }}"
                                        class="prj-seeMore text-decoration-none text-end main-color">
                                        See more <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div id="contact">
        <h3 class="contact-title">Get In Touch</h3>
        <div class="contact-body">
            <form class="contact-form" method="POST" action="{{ route('sendMessage') }}">
                @include('share.alerts')
                @csrf
                <div class="input-field mb-4">
                    <label for="name">Name</label>
                    <input type="text" class="name" name="name" required>
                </div>
                <div class="input-field mb-4">
                    <label for="email">Email</label>
                    <input type="text" class="name" name="email" required>
                </div>
                <div class="input-field mb-4">
                    <label for="message">Message</label>
                    <textarea name="message" class="name" required></textarea>
                </div>
                <button type="submit" class="form-submit">
                    Send Message <i class="fa-solid fa-paper-plane text-white ms-2"></i>
                </button>
            </form>
            <div class="contact-info">
                <div class="info-text">
                    <i class="info-icon bi bi-geo-alt-fill me-1"></i> Yangon, Myanmar
                </div>
                <div class="info-text">
                    <i class="bi bi-telephone-fill me-1"></i> 09 458 923 602
                </div>
                <a href="mailto:clarityfoster23@gmail.com" class="info-text text-decoration-none">
                    <i class="fa-solid fa-envelope me-1"></i> clarityfoster23@gmail.com
                </a>
                <a href="https://t.me/clarity_foster" class="info-text text-decoration-none">
                    <i class="bi bi-telegram me-1"></i> @clarity_foster
                </a>
                <a href="https://github.com/clarityfoster" class="info-text text-decoration-none">
                    <i class="bi bi-github me-1"></i> @clarityfoster
                </a>
                <a href="" class="info-text text-decoration-none">
                    <i class="bi bi-linkedin me-1"></i> @clarityfoster
                </a>
            </div>
        </div>
    </div>
    @include('admins/footer')
    @include('admins/topBtn')
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const seeMore = document.getElementById('seeMore');
        const fullBody = document.getElementById('fullBody');
        const shortBody = document.getElementById('shortBody');
        const topBtn = document.getElementById('topBtn');

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
        window.addEventListener('scroll', function() {
            if (window.scrollY > 550) {
                topBtn.classList.add('topActive')
            } else {
                topBtn.classList.remove('topActive')
            }
        });
        const categoryLinks = document.querySelectorAll('.cat-title');
        const projects = document.querySelectorAll('.prj'); 
        const defaultCategoryId = "2"; 

        projects.forEach(function(project) {
            if(project.getAttribute('data-category') === defaultCategoryId) {
                project.parentNode.style.display = "block";
            } else {
                project.parentNode.style.display = "none";
            }
        })

        categoryLinks.forEach(function(links) {
            if(links.getAttribute('data-category') === defaultCategoryId) {
                links.classList.add('active-category');
            }
        })

        categoryLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const categoryId = this.getAttribute('data-category');

                categoryLinks.forEach(function(link) {
                    link.classList.remove('active-category')
                })
                this.classList.add('active-category');
                
                projects.forEach(function(project) {
                    if (project.getAttribute('data-category') === categoryId) {
                        project.parentNode.style.display = 'block';
                    } else {
                        project.parentNode.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
