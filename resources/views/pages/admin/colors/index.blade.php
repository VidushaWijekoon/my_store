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
                    Colors List
                    <a href="{{ route('colors.create') }}" class="btn btn-sm btn-primary text-white float-end">
                        Add Colors</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Color</td>
                            <td>Color Code</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($colors as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->code }}</td>
                            <td>{{ $item->status == 1 ? 'Hidden' : 'Visible' }}</td>
                            <td>
                                <a href="{{ url('admin/colors/' . $item->id . '/edit') }}"
                                    class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ url('admin/colors/' . $item->id . '/delete') }}"
                                    onclick="return confirm('are you sure you want to delete this data')"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection