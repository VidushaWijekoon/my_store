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
            </div>
        </div>
    </div>
</div>
@endsection