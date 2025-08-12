<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'OL&D')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f5f6fa;
        }

        .navbar-custom {
            background: #141922;
            color: #fff;
        }

        .navbar-custom .navbar-brand {
            font-weight: 800;
            font-size: 1.5rem;
            letter-spacing: .5px;
        }

        .navbar-custom .nav-link,
        .navbar-custom .navbar-text {
            color: #fff;
        }

        .navbar-custom .nav-link.active {
            color: #3B82F6;
        }

        .menu-title {
            font-weight: bold;
            font-size: 1.3rem;
        }

        .menu-icon {
            margin-right: 8px;
        }
    </style>
</head>

<body>
    @include('layouts.topbar')
    <div style="display:flex;">
        @include('layouts.sidebar')
        <div style="margin-left:80px;width:100%;">
            <div class="container mt-4">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</body>

</html>
