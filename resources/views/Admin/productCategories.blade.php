@extends('admin.layout.app')

@section('title', 'Landing Page')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title" style="padding-bottom: 10px;">
                <h5>Category List</h5>
                <div class="ibox-tools">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-2">
                        Add Category
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="productTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Super Category</th>
                                <th>Product Count</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->cat_name }}</td>
                                <td>{{ $category->superCategory->name ?? 'N/A' }}</td>
                                <td>{{ $category->products_count }}</td>
                                <td>{{ $category->status }}</td>
                                <td>
                                    <a href="{{ route('categories.edit', $category->id) }}"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm delete-category"
                                        data-id="{{ $category->id }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.delete-category').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const categoryId = this.getAttribute('data-id');
                    const row = this.closest('tr');

                    if (confirm('Are you sure you want to delete this category?')) {
                        fetch(`/categories/delete/${categoryId}`, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector(
                                        'meta[name="csrf-token"]').getAttribute('content'),
                                },
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    alert('Category deleted successfully!');
                                    // Remove the row dynamically without reload
                                    row.remove();
                                } else {
                                    alert('Failed to delete the category.');
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                alert('An error occurred. Please try again later.');
                            });
                    }
                });
            });
        });
</script>
@endsection