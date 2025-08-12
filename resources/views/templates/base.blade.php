<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Control de caché --}}
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="Thu, 01 Jan 1970 00:00:00 GMT">
    {{-- Fin de control de caché --}}
    <script src="{{ asset('lib/jQuery/jquery.min.js') }}"></script>
    @routes
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/select2/select2-bs5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/dataTables/dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/dataTables/responsive.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/toastify/toastify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/spinner.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/3.2.2/css/buttons.dataTables.css">

    @stack('styles')
    <title>@yield('title')</title>
    <meta id='csrf' name='csrf-token' content='{{ csrf_token() }}'>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>

<body style="background-color: #eaeded;" @yield('preferredModalSize')>
    @yield('body')
    @include('templates.modal')
    <script src="{{ asset('lib/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/currency/currency.min.js') }}"></script>
    <script src="{{ asset('lib/moment/moment.min.js') }}"></script>
    <script src="{{ asset('lib/moment/es-mx.min.js') }}"></script>
    <script src="{{ asset('lib/select2/select2.min.js') }}"></script>
    <script src="{{ asset('lib/dataTables/dataTables.min.js') }}"></script>
    <script src="{{ asset('lib/dataTables/responsive.min.js') }}"></script>
    <script src="{{ asset('lib/toastify/toastify.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="{{ asset('lib/orgchart/orgchart.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.html5.min.js"></script>


    <script>
        const langFile = "{{ asset('lib/dataTables/Spanish.json') }}";
    </script>
</body>
<script>
    const setMethodHeaders = (method, body = []) => {
        switch (method) {
            case 'POST':
                return {
                    method,
                    body,
                    headers: {
                        'X-CSRF-TOKEN': $('#csrf').attr('content'),
                        Accept: 'application/json'
                    }
                }
                break;
            case 'PUT':
                return {
                    method,
                    body: JSON.stringify(Object.fromEntries(body)),
                        headers: {
                            'X-CSRF-TOKEN': $('#csrf').attr('content'),
                            Accept: 'application/json',
                            'Content-Type': 'application/json'
                        }
                }
                break;
            case 'DELETE':
                return {
                    method,
                    body: JSON.stringify(Object.fromEntries(body)),
                        headers: {
                            'X-CSRF-TOKEN': $('#csrf').attr('content'),
                            Accept: 'application/json'
                        }
                }
        }
    }
</script>

@stack('scripts')

</html>
