@extends('layouts.master')

@section('title') {{ $product->title }} @endsection

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{ asset('assets/img/shop-bg.jpeg') }}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>{{ $product->title }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
