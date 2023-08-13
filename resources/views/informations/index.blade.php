@extends('informations.layout')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class="">
                <div class="card">
                    <div class="card-header">User Informations</div>
                    <div class="card-body">
                        <a href="{{ url('/information/create') }}" class="btn btn-success btn-sm" title="Add new User">
                            <i class="fa fa-plus" aria-hidden="true"> Add User</i>
                        </a> 
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach($informations as $item)
                                <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $item->created_at}}</td>
                                        <td>{{ $item->updated_at}}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td style="display:flex; justify-content:center; justify-self:center;">
                                            <a href="{{ url('/information/' . $item->id) }}" title="View User"><button class="btn btn-info btn-sm" style="margin-left:4px; font-size:14; font-weight:700; color:white;">View</button></a>
                                            <a href="{{ url('/information/' . $item->id . '/edit') }}" title="Edit User" style="margin-left:4px; font-size:24; font: weight 700;"><button class="btn btn-primary btn-sm">Edit</button></a>
                                            <form method="POST" action="{{ url('/information' . '/' . $item->id) }}" accept-charset="UTF-8}}" style="display: inline;">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" style="margin-left:4px; font-size:14; font-weight:700" class="btn btn-danger btn-sm" onclick="return confirm('Confirm Delete ?')" title="Delete User">Delete</button>
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