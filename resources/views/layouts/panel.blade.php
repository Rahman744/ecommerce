<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset ('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('bootstrap/icons/bootstrap-icons.min.css') }}">
    @stack('css')
</head>

<body>
    <div>
        @include('panel.shared.navbar')
    </div>
    <div class="container">
        <div class="py-3">
            <div class="pb-2">
                @foreach (['success', 'error'] as $msg)
                @if (session($msg))
                <div class="alert alert-{{ $msg == 'error' ? 'danger' : 'success' }} alert-dismissible fade show" role="alert">
                    {{ session($msg) }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @endforeach
            </div>
            <div>
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    @stack('js')
</body>

</html>