@extends('layouts.main')

@section('title', 'Registro')

@section('content')
    @include('auth._form', ['mode' => 'register'])
@endsection
