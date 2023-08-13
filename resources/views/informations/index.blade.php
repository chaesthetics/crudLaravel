@section('content')
    <div class='container'>
        <div class='row'>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">User Informations</div>
                    <div class="card-body">
                        <a href="{{ url('informations/create') }}" class="btn btn-success btn-sm" title="Add new User">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a> 
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Fullname<th>
                                        <th>Email<th>
                                        <th>Mobile #<th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($informations as $item)
                                    <tr>
                                        <td>{{ $loop->$iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->mobile }}</td>

                                        <td>
                                            <a href="{{ url('/information/' . $item->id) }}" title="View User"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true">View</i></button></a>
                                            <a href="{{ url('/information/' . $item->id . '/edit') }}" title="Edit User"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true">Edit</i></button></a>
                                            <form method="POST" action="{{ url('/information' . '/' . $item->id)}}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete User" onclick="return confirm(&amp;quot;Confirm delete?&amp;quot;)"><i class="fa fa-trash-o" aria-hidden="true">Delete</i><button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>   
                            </table>      
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection