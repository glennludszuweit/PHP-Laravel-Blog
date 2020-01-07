@extends('layouts.admin')

@section('title')
    Author Posts
@endsection

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header bg-light">
                Author Posts
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
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Created on</th>
                            <th>Updated on</th>
                            <th>Comments</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(Auth::user()->posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td><a href="{{ route('singlePost', $post->id) }}">{{ str_limit($post->title, 20) }}</a></td>
                                <td>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</td>
                                <td>{{ \Carbon\Carbon::parse($post->updated_at)->diffForHumans() }}</td>
                                <td>{{ $post->comments->count() }}</td>
                                <td>
                                    <form id="deletePost-{{ $post->id }}" action="{{ route('deletePost', $post->id) }}" method="post">
                                        @csrf
                                        <a href="{{ route('editPost', $post->id) }}" class="btn btn-sm btn-warning rounded mt-1">Edit</a>
                                        <a href="#" onclick="document.getElementById('deletePost-{{ $post->id }}').submit()" class="btn btn-sm btn-danger rounded mt-1">Remove</a>
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
