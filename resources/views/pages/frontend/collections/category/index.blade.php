@extends('layouts.frontend.app')
@section('title', 'All Categories')
@section('content')

<div class="py-3 py-md-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4">Our Categories</h4>
            </div>
            @forelse ($categories as $category)

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url('/collections/' . $category->slug) }}">
                        <img src="{{ asset($category->image) }}" class="card-img-top" alt="slug">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }}</h5>
                        </div>
                    </a>
                </div>
            </div>

            @empty
            <div class="col-md-12">
                <h5>No Data Found</h5>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection