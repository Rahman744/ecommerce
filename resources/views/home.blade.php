@extends('layout')

@section('title')Home @endsection

@section('main_content')
<!-- <div class="container-xl text-end">
    <img src="{{ asset ('images/1.webp') }}" alt="" class="img-fluid w-80">
</div> -->

<div class="container-xl">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-10">
            <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="{{ asset('images/1.webp') }}" class="d-block w-100" alt="First Slide">
                        <div class="carousel-caption text-start">
                            <p>New Collections 2021</p>
                            <h2>New Smart Phone</h2>
                            <p>Startup Ecosystem Infrastructure Seeds Round Bandwidth Series A Financing</p>
                            <a href="#" class="btn btn-danger">Shop Now</a>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <img src="{{ asset('images/2.jpg') }}" class="d-block w-100" alt="Second Slide">
                        <div class="carousel-caption text-start">
                            <p>Special Offer</p>
                            <h2>Best Gadgets 2025</h2>
                            <p>Latest Technology & Accessories Available Now</p>
                            <a href="#" class="btn btn-danger">Shop Now</a>
                        </div>
                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </div>

</div>
@endsection