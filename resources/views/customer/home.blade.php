<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset ('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('bootstrap/style.css') }}">
    <link rel="stylesheet" href="{{ asset ('bootstrap/icons/bootstrap-icons.min.css') }}">
    <script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
</head>

<body>
    <div>
        @include('customer.navbar')
    </div>    

    <div class="margin-top">
        <div class="container-xl d-flex">
            <div class="dropdown me-5">
                <button class="btn btn-danger rounded-0 dropdown-toggle px-4 py-2" type="button" id="categoriesDropdown" data-bs-toggle="dropdown">
                    <i class="bi bi-list rounded-circle px-1" style="background-color: #CB031D;"></i> <span class="fw-semibold ">ALL CATEGORIES</span>
                </button>
                <ul class="dropdown-menu">
                    @foreach($categories as $category)
                    <li><a href="#" class="dropdown-item">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <ul class="nav fw-bold">
                <li><a href="/" class="nav-link text-dark">HOME</a></li>
                <li><a href="" class="nav-link text-dark">TOP PRODUCT</a></li>
                <li><a href="#" class="nav-link text-dark">DAILY DEAL</a></li>
                <li><a href="#" class="nav-link text-dark">LATEST NEWS</a></li>
                <li><a href="#" class="nav-link text-dark">ABOUT US</a></li>
            </ul>
            <a href="#" class="text-danger fw-bold ms-auto pt-2 smal1" style="text-decoration: none;"><i class="bi bi-percent me-1 rounded-circle px-1 bg-danger text-white"></i> SPECIAL OFFER</a>
        </div>
    </div>

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

    <div>
        @include('customer.footer')
    </div>

</body>

</html>