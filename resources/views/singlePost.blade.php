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
                    <span class="meta">Posted by
              <a href="#">{{ $post->user->name }}</a>
              on {{ date_format($post->created_at, 'F d, Y') }}</span>
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
                <small>by {{ $comment->user->name }} on {{ date_format($comment->created_at, 'F d, Y') }}</small>
                <p>{{ $comment->content }}</p>
            @endforeach
        </div>
    </div>
</article>



@endsection
