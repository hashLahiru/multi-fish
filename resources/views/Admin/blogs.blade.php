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
                        <a href="#" class="btn btn-success mb-2">Create Category</a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="blogTable">
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
