<div class="row">
    <div class="col-md-12">
        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Categoies
                    <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary float-end">Create
                        Category</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->status == '1' ? 'Hidden' : 'Visible' }}</td>
                            <td>
                                <a href="{{ url('admin/category/'.$category->id.'/edit') }}"
                                    class="btn btn-sm btn-success">Edit</a>
                                <a href="{{ url('admin/category/'.$category->id.'/delete') }}"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex float-end">
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
</div>