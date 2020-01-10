@extends('layouts.master')

@section('content')


<!-- Page Header -->
<header class="container-md mb-5 py-5" style="background-image: url('{{ asset('assets/img/post-bg.jpg') }}')"></header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>{{ $post->title }}</h1>
                    <span class="meta">
              <a href="#">{{ $post->user->name }}</a>
{{--              on {{ date_format($post->created_at, 'F d, Y') }}--}}
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                {!! nl2br($post->content) !!}
            </div>
        </div>
        <div class="comments mt-5">
            <hr>
            <h3>Comments</h3>
            @foreach($post->comments as $comment)
                <hr>
                <small>by {{ $comment->user->name }}
                    on {{ date_format($comment->created_at, 'F d, Y') }}
                </small>
                <p>{{ $comment->content }}</p>
            @endforeach
            @if(Auth::check())
                <form action="{{ route('newComment') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Leave your comment..." name="comment" id="" cols="30" rows="10"></textarea>
                        <input type="hidden" name="post" value="{{ $post->id }}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit Comment</button>
                    </div>
                </form>
                @else
                <div class="form-group">
                    <textarea class="form-control" placeholder="Leave your comment..." name="comment" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <a href="{{ route('login') }}" type="submit" class="btn btn-primary">Login to post Comment</a>
                </div>
            @endif
        </div>
    </div>
</article>



@endsection
