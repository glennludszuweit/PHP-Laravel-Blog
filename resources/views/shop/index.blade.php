@extends('layouts.master')

@section('title') Welcome to my Shop @endsection

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{ asset('assets/img/shop-bg.jpeg') }}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>My Shop</h1>
                        <span class="subheading">Proven Herbs for maximum health performance</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">

        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="{{ asset($product->thumbnail) }}">
                        <div class="card-body">
                            <a href="{{ route('shop.singleProduct', $product->id) }}">
                                <h5>{{ $product->title }}</h5>
                            </a>
{{--                            <p class="card-text">{{ $product->description }}</p>--}}
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <span class="ml-4">€ {{ $product->price }}</span>
                                    <span class="ml-5"><small><a href="#">Buy Now</a></small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="container">{{ $products->links('vendor.pagination.paginate') }}</div>

        </div>
    </div>
@endsection
