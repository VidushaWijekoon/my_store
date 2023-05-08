@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>
                    Products
                    <a href="{{ route('product.create') }}" class="btn btn-sm btn-primary text-white float-end">Add
                        Products</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Category</td>
                            <td>Product</td>
                            <td>Price</td>
                            <td>Quantity</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>
                                @if ($product->category)
                                {{ $product->category->name }}
                                @else
                                No Category
                                @endif
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->selling_price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->status == '1' ? 'Hidden' : 'Visible' }}</td>
                            <td>
                                <a href="{{ url('admin/products/' . $product->id . '/edit') }}"
                                    class="btn btn-sm btn-success">Edit</a>
                                <a href="{{ url('admin/products/'. $product->id . '/delete') }}"
                                    onclick="return confirm('Are you sure you want to delete this data ?')"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">No Product Available</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection