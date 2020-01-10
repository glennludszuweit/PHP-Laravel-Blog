@extends('layouts.admin')

@section('title')
    Admin Comments
@endsection

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header bg-light">
                Admin Comments
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
                        @foreach($comments as $comment)
                            <tr>
                                <td>{{ $comment->id }}</td>
                                <td><a href="{{ route('singlePost', $comment->post->id) }}">{{ $comment->post->title }}</a></td>
                                <td><a href="{{ route('singlePost', $comment->post->id) }}">{{ str_limit($comment->content, 50) }}</a></td>
                                <td>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</td>
                                <td>
                                    <a  href="#" style="color: red;" data-toggle="modal" data-target="#deleteCommentModal-{{ $comment->id }}">X</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @foreach($comments as $comment)
        <!-- Modal -->
        <div class="modal fade" id="deleteCommentModal-{{ $comment->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="modal-title" id="exampleModalLabel">You are about to delete this {{ $comment->post->title }}</p>
                    </div>
                    <div class="modal-body">
                        Are you sure?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                        <form id="deleteComment-{{ $comment->id }}" action="{{ route('adminDeleteComment', $comment->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger rounded">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

