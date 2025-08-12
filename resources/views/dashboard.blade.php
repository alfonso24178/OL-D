@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid" style="background:#141922;min-height:100vh;">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-white mt-4 mb-4"
                    style="font-size:2.3rem;letter-spacing:1px;text-shadow:2px 2px 0 #000;">HOLA BIENVENIDO ADMIN</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg" style="border-radius:16px;">
                    <div class="card-body text-center">
                        <h4 class="fw-bold mb-4">Resumen del autolavado</h4>
                        <div class="row mb-3">
                            <div class="col-md-4 mb-3">
                                <div class="border rounded py-3 px-2">
                                    <div class="h3 fw-bold text-primary">14</div>
                                    <div class="text-secondary">Lavados Hoy</div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="border rounded py-3 px-2">
                                    <div class="h3 fw-bold text-primary">$1,250</div>
                                    <div class="text-secondary">Ingresos del día</div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="border rounded py-3 px-2">
                                    <div class="h3 fw-bold text-primary">10</div>
                                    <div class="text-secondary">Clientes Registrados</div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="border rounded py-3 px-2">
                                    <div class="h3 fw-bold text-primary">5</div>
                                    <div class="text-secondary">Productos Vendidos</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
