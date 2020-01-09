@extends('layouts.admin')

@section('title')
    Users Management
@endsection

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header bg-light">
                Users Management
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Posts</th>
                            <th>Comments</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->posts->count() }}</td>
                                <td>{{ $user->comments->count() }}</td>
                                <td>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                                <td>{{ \Carbon\Carbon::parse($user->updated_at)->diffForHumans() }}</td>
                                <td>
                                    <form id="deleteUser-{{ $user->id }}" action="{{ route('adminDeleteUser', $user->id) }}" method="post">
                                        @csrf
                                        <a href="{{ route('adminEditUser', $user->id) }}" class="btn btn-sm btn-warning rounded mt-1">Edit</a>
                                        <a href="#" onclick="document.getElementById('deleteUser-{{ $user->id }}').submit()" class="btn btn-sm btn-danger rounded mt-1">Remove</a>
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
@endsection


