@extends('layouts.app')
@section('content')
    @include('nav.nav')
    <div class="essence-page essence-container">
        <img class="essence-img" src="{{ asset('img/coding.svg') }}" alt="">
        <div class="essence-content">
            <h1 class="essence-title">
                Who am I?
            </h1>
            <h3 class="essence-subtitle">
                Let me introduce you
            </h3>
            <p class="essence-body">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio aspernatur sed praesentium aperiam quidem
                assumenda, distinctio voluptates blanditiis rem, quisquam dolorum reiciendis similique possimus inventore.
                lore
            </p>
            <div class="cards">
                <div class="essence-card p-3 rounded-4">
                    <i class="bi bi-patch-check fs-4"></i>
                    <span>Completed</span>
                    <small class="text-muted">3+ Projects</small>
                </div>
                <div class="essence-card p-3 rounded-4">
                    <i class="bi bi-patch-check fs-4"></i>
                    <span>Completed</span>
                    <small class="text-muted">3+ Projects</small>
                </div>
            </div>
            <a href="" class="download-cv rounded-4">
                Download CV
                <i class="bi bi-file-earmark-text-fill ms-2"></i>
            </a>
        </div>
    </div>
@endsection
