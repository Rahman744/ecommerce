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

    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-10 ps-4">
                <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/1.webp') }}" class="d-block w-100" alt="First Slide">
                            <div class="carousel-caption text-start" style="margin-left:-60px;">
                                <div class="text-secondary h5">New Collections 2021</div>
                                <div class="text-dark h1 fw-bolder">New Smart Phone</div>
                                <div class="text-dark">Startup Ecosystem Infrastructure Seeds Round Bandwidth Series A Financing Project <br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi sed quod facilis <br> eligendi aliquam cupiditate.</div>
                                <div class="py-5">
                                    <a href="#" class="btn btn-danger fw-semibold">SHOP NOW</a>
                                </div>
                            </div>
                        </div>


                        <div class="carousel-item">
                            <img src="{{ asset('images/2.jpg') }}" class="d-block w-100" alt="Second Slide">
                            <div class="carousel-caption text-start" style="margin-left:-60px;">
                                <div class="text-secondary h5">New Collections 2021</div>
                                <div class="text-dark h1 fw-bolder">New Smart Phone</div>
                                <div class="text-dark">Startup Ecosystem Infrastructure Seeds Round Bandwidth Series A Financing Project <br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi sed quod facilis <br> eligendi aliquam cupiditate.</div>
                                <div class="py-5">
                                    <a href="#" class="btn btn-danger fw-semibold">SHOP NOW</a>
                                </div>
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

    <div class="container-xl">
        <div class="row py-5">
            <div class="col-4">
                <a href="#"><img src="{{ asset('images/category/1.webp') }}" alt="category" class="img-fluid"></a>
            </div>
            <div class="col-4">
                <a href="#"><img src="{{ asset('images/category/2.webp') }}" alt="category" class="img-fluid"></a>
            </div>
            <div class="col-4">
                <a href="#"><img src="{{ asset('images/category/3.webp') }}" alt="category" class="img-fluid"></a>
            </div>
        </div>
    </div>

    <div class="container-xl">
        <div class="h5 fw-normal">
            Top Category
        </div>
        <hr>
        <div class="row text-center pt-3">
            <div class="col-2">
                <a href="#" class="hover-black"><img src="{{ asset('images/category/top_1.jpg') }}" alt="category" class="img-fluid img-hover rounded-1">
                    <h6 class="py-2">ACCESSORIES</h6>
                </a>
            </div>
            <div class="col-2">
                <a href="#" class="hover-black"><img src="{{ asset('images/category/top_2.avif') }}" alt="category" class="img-fluid img-hover rounded-1">
                    <h6 class="py-2">CHAIR</h6>
                </a>
            </div>
            <div class="col-2">
                <a href="#" class="hover-black"><img src="{{ asset('images/category/top_3.avif') }}" alt="category" class="img-fluid img-hover rounded-1">
                    <h6 class="py-2">HANDBAG</h6>
                </a>
            </div>
            <div class="col-2">
                <a href="#" class="hover-black"><img src="{{ asset('images/category/top_4.webp') }}" alt="category" class="img-fluid img-hover rounded-1">
                    <h6 class="py-2">HEADPHONES</h6>
                </a>
            </div>
            <div class="col-2">
                <a href="#" class="hover-black"><img src="{{ asset('images/category/top_5.webp') }}" alt="category" class="img-fluid img-hover rounded-1">
                    <h6 class="py-2">SHOES</h6>
                </a>
            </div>
            <div class="col-2">
                <a href="#" class="hover-black"><img src="{{ asset('images/category/top_6.avif') }}" alt="category" class="img-fluid img-hover rounded-1">
                    <h6 class="py-2">SOFA</h6>
                </a>

            </div>
        </div>
    </div>

    <div class="container-xl">
        <div class="row py-5">
            <div class="col-9">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="h5 fw-normal">
                        Top Product
                    </div>
                    <div class="d-flex gap-3">
                        <a href="#" class="h6 text-danger" style="text-decoration: none;">Featured</a>
                        <a href="#" class="h6 text-danger" style="text-decoration: none;">Latest</a>
                        <a href="#" class="h6 text-danger" style="text-decoration: none;">Bestseller</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <a href="#"><img src="{{ asset('images/product/top_p1') }}" alt="product"></a>
                    </div>
                </div>

            </div>
            <div class="col-3">
                <div class="p border border-danger rounded bg-lit">
                    <div class="bg-danger py-3 h5 text-light ps-3">Daily Deal</div>
                    <img src="{{ asset('images/product/daily_deal.webp') }}" alt="daily_deal" class="img-fluid">
                    <div class="ps-2">
                        <div class="fw-semibold">Nikon COOLPIX B600</div>
                        <div class="fw-bold py-2">Rs. 552.00</div>
                        <div class="fw-semibold">Deal ends in:</div>
                        <div class="py-3">Expired</div>
                    </div>
                </div>
                <div class="py-4">
                    <a href="#"><img src="{{ asset('images/product/bravia.avif') }}" alt="bravia" class="img-fluid w-100 rounded"></a>
                </div>
            </div>
        </div>
    </div>

    <div>
        @include('customer.footer')
    </div>

</body>

</html>