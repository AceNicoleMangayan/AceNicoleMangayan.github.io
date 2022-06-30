@extends('layout')

@section('content')

<div class="row justify-content-center">
    <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($users as $user)
                           <tr>
                               <td>{{$user->name}}</td>
                               <td>{{$user->email}}</td>
                               <td><a href = 'delete/{{ $user->id }}'>Delete</a></td>
                           </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>
@endsection
