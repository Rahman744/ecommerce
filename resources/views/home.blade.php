<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset ('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('bootstrap/style.css') }}">
    <link rel="stylesheet" href="{{ asset ('bootstrap/icons/bootstrap-icons.min.css') }}">
</head>

<body>
    <header class="bg-dark text-light">
        <div class="py-1 small border-bottom">
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
            <h2>
                STORETAP<span class="text-danger">.</span>
            </h2>
            <form class="d-flex w-50">
                <input type="search" name="" id="" class="form-control rounded-start-pill" placeholder="Search..." aria-label="Search">
                <button class="btn btn-danger rounded-end-pill" type="submit">Search</button>
            </form>
            <div class="">
                <a href="#" class="text-secondary fw-semibold me-3" style="text-decoration: none;"><i class="bi bi-person h5 me-1"></i>My Account</a>
                <a href="#" class="text-secondary fw-semibold" style="text-decoration: none;"><i class="bi bi-basket h5 me-1"></i>My Cart</a>
            </div>
        </div>
    </header>
</body>

</html>
            <!-- Search --
            <form class="d-flex w-50">
                <input class="form-control rounded-0" type="search" placeholder="Search..." aria-label="Search">
                <button class="btn btn-danger rounded-0" type="submit">Search</button>
            </form>
        </div>
    </div>

    <!-- Navigation --
    <nav class="border-bottom">
        <div class="container d-flex align-items-center">
            <!-- Categories dropdown --
            <div class="dropdown me-4">
                <button class="btn btn-danger dropdown-toggle" type="button" id="categoriesDropdown" data-bs-toggle="dropdown">
                    <i class="fa fa-bars me-2"></i> ALL CATEGORIES
                </button>
                <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                    <li><a class="dropdown-item" href="#">Headphones</a></li>
                    <li><a class="dropdown-item" href="#">Chair</a></li>
                    <li><a class="dropdown-item" href="#">Accessories</a></li>
                    <li><a class="dropdown-item" href="#">Handbag</a></li>
                    <li><a class="dropdown-item" href="#">Jewellery</a></li>
                    <li><a class="dropdown-item" href="#">Sofa</a></li>
                    <li><a class="dropdown-item" href="#">Laptop</a></li>
                    <li><a class="dropdown-item" href="#">Table Lamp</a></li>
                    <li><a class="dropdown-item" href="#">Smartwatch</a></li>
                    <li><a class="dropdown-item" href="#">Shoes</a></li>
                </ul>
            </div>

            <!-- Menu links --
            <ul class="nav">
                <li class="nav-item"><a class="nav-link text-dark" href="#">HOME</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="#">TOP PRODUCT</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="#">DAILY DEAL</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="#">LATEST NEWS</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="#">ABOUT US</a></li>
            </ul>

            <!-- Special offer --
            <a href="#" class="ms-auto text-danger fw-bold"><i class="fa fa-bell me-1"></i> SPECIAL OFFER</a>
        </div>
    </nav>
</header>

<!-- Bootstrap & Font Awesome --
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">