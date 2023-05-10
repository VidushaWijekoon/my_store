@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>
                    Edit Slider
                    <a href="{{ route('sliders.index') }}" class="btn btn-sm btn-warning text-white float-end">
                        Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/sliders/' . $slider->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" name="title" value="{{ $slider->title }}"
                            class="form-control form-control-sm">
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea type="text" name="description" class="form-control form-control-sm"
                            rows="3">{{ $slider->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Image</label><br>
                        <input type="file" name="image" class="form-control form-control-sm">
                        <img src="{{ asset($slider->image) }}" alt="sliders" style="width: 50px; height: 50px;">
                    </div>
                    <div class="mb-3">
                        <label for="">Status</label><br>
                        <input type="checkbox" name="status" {{ $slider->status == '1' ? 'checked' : '' }}>Checked =
                        Hidden, Unchecked = Visible
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection