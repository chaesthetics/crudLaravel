@section('content')

<div class="card">
    <div class="card-header">Contact Us Page</div>
    <div class="card-body">
        <form action="{{ url('/information' .$informations->id) }}" method="post">
        {!! csrf_field() !!}
            <label>Name</label><br>
            <input type="hidden" name="id" id="id" value="{{ $informations->id}}">
            <input type="text" name="name" id="name" class="form-control" value="${{informations->name}}"><br>
            <label>Email</label><br>
            <input type="email" name="email" id="email" class="form-control" value="${{informations->email}}"><br>
            <label>Mobile Number</label><br>
            <input type="text" name="mobile" id="mobile" class="form-control" value="${{informations->mobile}}"><br>
            <input type="submit"  value="update" class="btn btn-success"><br>
        </form>
    </div>
</div>
@stop