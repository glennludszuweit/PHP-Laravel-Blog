@extends('layouts.admin')

@section('title')
    User Comments
@endsection

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header bg-light">
                User Comments
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Post</th>
                            <th>Content</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(Auth::user()->comments as $comment)
                            <tr>
                                <td>{{ $comment->id }}</td>
                                <td><a href="{{ route('singlePost', $comment->id) }}">{{ $comment->post->title }}</a></td>
                                <td><a href="{{ route('singlePost', $comment->id) }}">{{ str_limit($comment->content, 20) }}</a></td>
                                <td>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</td>
                                <td>
                                    <form id="deleteComment-{{ $comment->id }}" action="{{ route('deleteComment', $comment->id) }}" method="post">
                                        @csrf
                                        <a  href="#" style="color: red;" onclick="document.getElementById('deleteComment-{{ $comment->id }}').submit()">X</a>
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
