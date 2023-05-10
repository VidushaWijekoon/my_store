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
                    Add Slider
                    <a href="{{ route('sliders.index') }}" class="btn btn-sm btn-warning text-white float-end">
                        Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('sliders.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control form-control-sm">
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea type="text" name="description" class="form-control form-control-sm"
                            rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Image</label><br>
                        <input type="file" name="image" class="form-control form-control-sm">
                    </div>
                    <div class="mb-3">
                        <label for="">Status</label><br>
                        <input type="checkbox" name="status">Checked = Hidden, Unchecked = Visible
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection