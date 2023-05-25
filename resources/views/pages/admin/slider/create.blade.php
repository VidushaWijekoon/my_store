@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        @if (session('message'))
        <div class="alert alert-success">{{ session('message')}}</div>
        @endif
        <div class="card">
            @if ($errors->any())
            <div class="alert alert-warning">
                @foreach ($errors->all() as $error)
                <div class="">{{ $error }}</div>
                @endforeach
            </div>
            @endif
            <div class="card-header">
                <h4>Color List
                    <a href="{{ route('sliders.index') }}" class="btn btn-sm btn-warning float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('sliders.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control form-control-sm">
                        @error('title')<small>{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea type="text" name="description" class="form-control form-control-sm"
                            rows="3"></textarea>
                        @error('description')<small>{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="file" name="image" class="form-control form-control-sm">
                        @error('image')<small>{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status">Checked=Hidden, Unchecked=Visible
                        @error('status')<small>{{ $message }}</small> @enderror
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