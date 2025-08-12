@extends('layouts.auth')

@section('content')
    @include('auth._form', ['mode' => 'register'])
@endsection
