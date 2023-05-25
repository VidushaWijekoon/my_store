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
                    <a href="{{ route('colors.index') }}" class="btn btn-sm btn-warning float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('colors.create') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control form-control-sm">
                    </div>
                    <div class="mb-3">
                        <label for="">Code</label>
                        <input type="text" name="code" class="form-control form-control-sm">
                    </div>
                    <div class="mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status">Checked=Hidden, Unchecked=Visible
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