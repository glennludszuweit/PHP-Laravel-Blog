@extends('layouts.master')

@section('title') Welcome - gngBLOG @endsection

@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url('{{ asset('assets/img/blog-bg.jpeg') }}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>My Blog</h1>
                    <span class="subheading">Articles based on personal experience and science</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @foreach($posts as $post)
            <div class="post-preview">
                <a href="{{ route('singlePost', $post->id) }}">
                    <h4 class="post-title">
                        {{ $post->title }}
                    </h4>
                </a>
                <p class="post-meta">by
{{--                    <a href="#">{{ $post->user->name }}</a>--}}
                    {{ $post->user->name }} on {{ date_format($post->created_at, 'F d, Y') }}
                     - <i class="fa fa-comment" aria-hidden="true"></i> {{ $post->comments->count() }}
                </p>
            </div>
            <hr>
            @endforeach

            {{ $posts->links('vendor.pagination.paginate') }}
            <!-- Pager -->
{{--            <div class="clearfix">--}}
{{--                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>--}}
{{--            </div>--}}
        </div>
    </div>
</div>

@endsection

