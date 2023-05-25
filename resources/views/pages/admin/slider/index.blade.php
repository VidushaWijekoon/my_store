@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        @if (session('message'))
        <div class="alert alert-success">{{ session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Slider List
                    <a href="{{ route('sliders.create') }}" class="btn btn-sm btn-primary float-end">Add Slider</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sliders as $slider)
                        <tr>
                            <td>{{ $slider->id }}</td>
                            <td>{{ $slider->title }}</td>
                            <td>{{ $slider->description }}</td>
                            <td>
                                <img src="{{ asset($slider->image) }}" style="width: 100px; height: 70px;"
                                    alt="slider{{ $slider->id }}" class="rounded">
                            </td>
                            <td>{{ $slider->status == '1' ? 'Hideen' : 'Visible' }}</td>
                            <td>
                                <a href="{{ url('admin/sliders/' . $slider->id . '/edit') }}"
                                    class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ url('admin/sliders/' . $slider->id . '/delete') }}"
                                    onclick="return confirm('Are you sure you want to delete this slider completely')"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        @empty
                        <span>No Data Found!</span>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection