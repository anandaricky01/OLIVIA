@extends('layouts/layoutMain')

@section('container')
    <h1>Halo, {{ auth()->user()->name }}!</h1>
@endsection