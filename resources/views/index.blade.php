@extends('layouts.app')
@section('content')
@include('partial.banner')
@include('partial.vendido')
@include('partial.conoce')
@include('partial.visitado')
@include('partial.inspiracion')
@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/index.css">
@endpush