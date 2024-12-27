@extends('admin.layout.app')

@section('title', 'Blog List')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title" style="padding-bottom: 10px;">
                    <h5>Blog List</h5>
                    <div class="ibox-tools">
                        <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-2">Create Blog</a>
                        <a href="#" class="btn btn-success mb-2" data-bs-toggle="modal"
                            data-bs-target="#createCategoryModal">Create Category</a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table-striped table-bordered table-hover table" id="blogTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Status</th>
                                    <th>Published Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->category->name ?? 'N/A' }}</td>
                                        <td>{{ $blog->author }}</td>
                                        <td>{{ $blog->status }}</td>
                                        <td>{{ \Carbon\Carbon::parse($blog->published_at)->toDateTimeString() }}</td>
                                        <td>
                                            <a href="{{ route('blogs.edit', $blog->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <button class="btn btn-danger btn-sm delete-blog"
                                                data-id="{{ $blog->id }}">Delete</button>
                                            <button
                                                class="btn btn-{{ $blog->status === 'active' ? 'secondary' : 'primary' }} btn-sm toggle-status"
                                                data-id="{{ $blog->id }}" data-status="{{ $blog->status }}">
                                                {{ $blog->status === 'active' ? 'Pause' : 'Activate' }}
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Create Category Modal -->
        <div class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createCategoryModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="createCategoryForm">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createCategoryModalLabel">Create Category</h5>
                            <a href="#" class="fa fa-times" data-bs-dismiss="modal" aria-label="Close"></a>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="categoryName" class="form-label">Category Name</label>
                                <input type="text" class="form-control" id="categoryName" name="categoryName" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" id="saveCategoryBtn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle delete blog
            document.querySelectorAll('.delete-blog').forEach(button => {
                button.addEventListener('click', function() {
                    const blogId = button.getAttribute('data-id');
                    if (confirm('Are you sure you want to delete this blog?')) {
                        deleteBlog(blogId);
                    }
                });
            });

            // Handle status toggle
            document.querySelectorAll('.toggle-status').forEach(button => {
                button.addEventListener('click', function() {
                    const blogId = button.getAttribute('data-id');
                    toggleStatus(blogId);
                });
            });

            // Save category
            document.getElementById('saveCategoryBtn').addEventListener('click', function() {
                const categoryName = document.getElementById('categoryName').value.trim();

                if (!categoryName) {
                    alert('Please enter a category name.');
                    return;
                }

                if (!confirm('Are you sure you want to save this category?')) {
                    return;
                }

                const formData = new FormData();
                formData.append('name', categoryName);

                fetch('/categories/store', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content'),
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        alert(data.message);
                        if (data.success) {
                            document.getElementById('createCategoryForm').reset();
                            $('#createCategoryModal').modal('hide'); // Hide modal
                            // location.reload(); // Reload the page to update the table
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred while saving the category.');
                    });
            });
        });

        function deleteBlog(blogId) {
            fetch(`/blogs/delete/${blogId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.message);
                    if (data.success) {
                        location.reload();
                    }
                });
        }

        function toggleStatus(blogId) {
            fetch(`/blogs/toggle-status/${blogId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.message);
                    if (data.success) {
                        location.reload();
                    }
                });
        }
    </script>
@endsection
