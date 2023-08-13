@extends('informations.layout')
@section('content')

<div class="card">
    <div class="card-header">Contact us</div>
    <div class="card-body">
        <h5 class="card-title">Name: {{ $informations->name }}</h5>
        <p class="card-text">Email: {{ $informations->email }}</p>
        <p class="card-text">Mobile #: {{ $informations->mobile }}</p>
    </div>
</div>
