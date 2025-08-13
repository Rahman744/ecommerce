<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset ('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('bootstrap/style.css') }}">
    <link rel="stylesheet" href="{{ asset ('bootstrap/icons/bootstrap-icons.min.css') }}">
    <script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
</head>

<body>
    <header class="bg-dark text-light">
        <div class="py-1 small border-bottom-custom">
            <div class="container-xl d-flex justify-content-between">
                <div>
                    Get 30% Off On Selected Items
                </div>
                <div>
                    <i class="bi bi-telephone-fill"></i> (+993) 61 61 32 65
                    <span class="mx-3"></span>
                    <i class="bi bi-envelope-fill"></i> rahman@gmail.com
                </div>
            </div>
        </div>
        <div class="container-xl d-flex align-items-center justify-content-between py-3">
            <h3>
                STORETAP<span class="text-danger">.</span>
            </h3>
            <form class="d-flex w-50">
                <input type="search" name="" id="" class="form-control rounded-start-pill" placeholder="Search..." aria-label="Search">
                <button class="btn btn-danger rounded-end-pill" type="submit">Search</button>
            </form>
            <div class="smal1">
                <a href="#" class="text-light fw-semibold me-3" style="text-decoration: none;"><i class="bi bi-person h6 me-1"></i>My Account</a>
                <a href="#" class="text-light fw-semibold" style="text-decoration: none;"><i class="bi bi-basket h6 me-1"></i>My Cart</a>
            </div>
        </div>
    </header>
    <nav class="">
        <div class="container-xl d-flex">
            <div class="dropdown me-4">
                <button class="btn btn-danger rounded-0 dropdown-toggle" type="button" id="categoriesDropdown" data-bs-toggle="dropdown">
                    <i class="bi bi-list rounded-circle px-1" style="background-color: #CB031D;"></i> <span class="fw-semibold ">ALL CATEGORIES</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#" class="dropdown-item">Headphones</a></li>
                    <li><a href="#" class="dropdown-item">Chair</a></li>
                    <li><a href="#" class="dropdown-item dropdown-toggle">Accessories</a></li>
                    <li><a href="#" class="dropdown-item">Handbag</a></li>
                    <li><a href="#" class="dropdown-item">Jewellery</a></li>
                    <li><a href="#" class="dropdown-item dropdown-toggle">Sofa</a></li>
                    <li><a href="#" class="dropdown-item">Laptop</a></li>
                    <li><a href="#" class="dropdown-item">Table Lamp</a></li>
                    <li><a href="#" class="dropdown-item dropdown-toggle">Smartwatch</a></li>
                    <li><a href="#" class="dropdown-item">Shoes</a></li>
                    <li><a href="/categories" class="dropdown-item">View All Categories</a></li>
                </ul>
            </div>
            <ul class="nav fw-bold">
                <li><a href="/" class="nav-link text-dark">HOME</a></li>
                <li><a href="/categories" class="nav-link text-dark">TOP PRODUCT</a></li>
                <li><a href="#" class="nav-link text-dark">DAILY DEAL</a></li>
                <li><a href="#" class="nav-link text-dark">LATEST NEWS</a></li>
                <li><a href="#" class="nav-link text-dark">ABOUT US</a></li>
            </ul>
            <a href="#" class="text-danger fw-bold ms-auto pt-2 smal1" style="text-decoration: none;"><i class="bi bi-percent me-1 rounded-circle px-1 bg-danger text-white"></i> SPECIAL OFFER</a>
        </div>
    </nav>

    <div>
        @yield('main_content')
    </div>

</body>

</html>