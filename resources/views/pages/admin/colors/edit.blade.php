@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Edit color
                    <a href="{{ route('colors.index') }}" class="btn btn-sm btn-warning text-white float-end">
                        Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/colors/' . $color->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="">Color Name</label>
                        <input type="text" name="name" value="{{ $color->name }}" class="form-control form-control-sm">
                    </div>
                    <div class="mb-3">
                        <label for="">Color Code</label>
                        <input type="text" name="code" value="{{ $color->name }}" class="form-control form-control-sm">
                    </div>
                    <div class="mb-3">
                        <label for="">Status</label><br>
                        <input type="checkbox" name="status" {{ $color->status == '1' ? 'checked' : '' }}>Checked =
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