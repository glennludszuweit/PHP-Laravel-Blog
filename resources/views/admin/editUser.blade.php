@extends('layouts.admin')

@section('title')
    Edit {{ $user->name }}
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            Edit User
                        </div>
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('adminEditUserPost', $user->id) }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name" class="form-control-label">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email" class="form-control-label">Email</label>
                                            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="normal-input" class="form-control-label">Change Permissions</label><br>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="author" name="author" value=1 {{ $user->author == true ? 'checked' : '' }}>
                                                <label class="form-check-label" for="author">Author</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="admin" name="admin" value=1 {{ $user->admin == true ? 'checked' : '' }}>
                                                <label class="form-check-label" for="admin">Admin</label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success rounded">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
