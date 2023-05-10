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
                    Slider List
                    <a href="{{ route('sliders.create') }}" class="btn btn-sm btn-primary text-white float-end">
                        Add Slider</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Title</td>
                            <td>Description</td>
                            <td>Image</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sliders as $slider)
                        <tr>
                            <td>{{ $slider->id }}</td>
                            <td>{{ $slider->title }}</td>
                            <td>{{ $slider->description }}</td>
                            <td>
                                <img src="{{ asset($slider->image) }}" alt="img" style="width: 70px; height: 70px">
                            </td>
                            <td>{{ $slider->id == '1' ? 'Show' : 'Hide' }}</td>
                            <td>
                                <a href="{{ url('admin/sliders/' . $slider->id ) . '/edit'}}"
                                    class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ url('admin/sliders/' . $slider->id ) . '/delete'}}"
                                    onclick="return confirm('Are you sure you want to delete this slider')"
                                    class="btn btn-sm btn-danger">Delet</a>
                            </td>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection