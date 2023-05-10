@extends('layouts.frontend.app')
@section('title', 'Home Page')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

    <div class="carousel-inner">
        @foreach ($sliders as $key => $item)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
            <img src="{{ asset($item->image) }}" class="d-block w-100" alt="..." style="height: 80vh">
            <div class="carousel-caption d-none d-md-block">
                <div class="custom-carousel-content">
                    <h1>
                        {{ $item->title }}
                    </h1>
                    <p>
                        {{ $item->description }}
                    </p>
                    <div>
                        <a href="#" class="btn btn-slider">
                            Get Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection

<style>
    .carousel-item .custom-carousel-content {
        width: 50%;
        transform: translate(0%, -10%);
    }

    .custom-carousel-content {
        text-align: start;
    }

    .custom-carousel-content h1 {
        font-size: 40px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 30px;
    }

    .custom-carousel-content h1 span {
        color: #fbff00;
    }

    .custom-carousel-content p {
        font-size: 18px;
        font-weight: 400;
        color: #fff;
        margin-bottom: 30px;
    }

    .custom-carousel-content .btn-slider {
        border: 1px solid #fff;
        border-radius: 0px;
        padding: 8px 26px;
        color: #fff;
        font-size: 18px;
        font-weight: 600;
        letter-spacing: 0.5px;
    }
</style>