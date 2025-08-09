<!doctype html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OL&D — Acceso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/js/app.js']) {{-- mantiene Vite activo --}}
    <style>
        body {
            background: #0f1217;
        }

        .brand {
            font-weight: 800;
            letter-spacing: .5px;
        }

        .card {
            background: #141922;
            border: 1px solid #1f2532;
        }

        .btn-ol {
            background: #3B82F6;
            border-color: #3B82F6;
        }

        .btn-ol:hover {
            filter: brightness(.9);
        }

        .ol-link {
            color: #9dbbff;
        }

        .ol-link:hover {
            color: #cfe0ff;
        }
    </style>
</head>

<body class="d-flex align-items-center" style="min-height:100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-6 col-lg-5 col-xl-4">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
