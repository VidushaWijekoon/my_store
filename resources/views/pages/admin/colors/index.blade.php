@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        @if (session('message'))
        <div class="alert alert-success">{{ session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Color List
                    <a href="{{ route('colors.create') }}" class="btn btn-sm btn-primary float-end">Add Color</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Color Name</td>
                            <td>Color Code</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($colors as $color)
                        <tr>
                            <td>#</td>
                            <td>{{ $color->name }}</td>
                            <td>{{ $color->code }}</td>
                            <td>{{ $color->status == '1' ? 'Hidden' : 'Visible' }}</td>
                            <td>
                                <a href="{{ url('admin/colors/' . $color->id . '/edit') }}"
                                    class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ url('admin/colors/' . $color->id . '/delete') }}"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this color')">Delete</a>
                            </td>
                        </tr>
                        @empty
                        <span>No Colors Found</span>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection