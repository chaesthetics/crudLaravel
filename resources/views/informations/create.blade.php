@extends('informations.layout')
@section('content')

<div class="card">
    <div class="card-header">
        Contact Us Page
    </div>
    <div class="card-body">
        <form action="{{ url('information') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label><br>
            <input type="text" name="name" id="name" class="form-control"><br>
            <label>Email</label><br>
            <input type="email" name="email" id="email" class="form-control"><br>
            <label>Mobile Number</label><br>
            <input type="text" name="mobile" id="mobile" class="form-control"><br>
            <input type="submit" value="save" class="btn btn-success"><br>
        </form>
    </div>
</div>
@stop