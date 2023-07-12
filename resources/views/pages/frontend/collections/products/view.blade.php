@extends('layouts.frontend.app')
@section('title')
{{ $product->meta_title }}
@endsection
@section('title')
{{ $product->meta_keyword }}
@endsection
@section('title')
{{ $product->meta_description }}
@endsection
@section('content')

<div class="">
    <livewire:frontend.product.view :category="$category" :product="$product" />
</div>

@endsection