@extends('layouts.admin')

@section('title')
    Admin Products
@endsection

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header bg-light">
                <a href="{{ route('adminNewProduct') }}" class="btn btn-sm btn-primary mr-3 rounded">Add new Product</a>
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
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td><img src="{{ asset($product->thumbnail) }}" width="50"></td>
                                <td><a href="{{ route('adminEditProduct', $product->id) }}"></a>{{ $product->title }}</td>
                                <td>{{ $product->description }}</td>
                                <td>€ {{ $product->price }}</td>
                                <td>
                                    <a href="{{ route('adminEditProduct', $product->id) }}" class="btn btn-sm btn-warning rounded mt-1">Edit</a>
                                    <a href="#" data-toggle="modal" data-target="#deleteProductModal-{{ $product->id }}" class="btn btn-sm btn-danger rounded mt-1">Remove</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{{--    @foreach($products as $product)--}}
{{--        <!-- Modal -->--}}
{{--        <div class="modal fade" id="deleteProductModal-{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--            <div class="modal-dialog" role="document">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <p class="modal-title" id="exampleModalLabel">You are about to delete "{{ $product->title }}".</p>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        Are you sure?--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>--}}
{{--                        <form id="deleteProduct-{{ $product->id }}" action="{{ route('adminDeleteProduct', $product->id) }}" method="post">--}}
{{--                            @csrf--}}
{{--                            <button type="submit" class="btn btn-danger rounded">Delete</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endforeach--}}
@endsection


