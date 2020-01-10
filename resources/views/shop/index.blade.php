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
@endsection
