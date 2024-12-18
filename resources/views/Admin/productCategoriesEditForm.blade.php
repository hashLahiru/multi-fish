@extends('admin.layout.app')

@section('title', 'Edit Category')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5>Edit Category</h5>
            </div>
            <div class="ibox-content">
                <form action="{{ route('categories.update', $category->id) }}" method="POST"
                    enctype="multipart/form-data" id="category-form">
                    @csrf
                    <div class="form-group row">
                        <label for="cat_name" class="col-lg-2 col-form-label">Category Name:</label>
                        <div class="col-lg-10">
                            <input type="text" name="cat_name" value="{{ $category->cat_name }}" class="form-control"
                                required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="super_category_id" class="col-lg-2 col-form-label">Super Category:</label>
                        <div class="col-lg-10">
                            <select name="super_category_id" class="form-control" required>
                                <option value="">Select Super Category</option>
                                @foreach ($superCategories as $superCategory)
                                <option value="{{ $superCategory->id }}" {{ $category->super_category_id ==
                                    $superCategory->id ? 'selected' : '' }}>
                                    {{ $superCategory->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="img_url" class="col-lg-2 col-form-label">Category Image:</label>
                        <div class="col-lg-10">
                            <input type="file" name="img_url" class="form-control" accept="image/*" id="img_url" />
                            <div id="image-preview" class="mt-3">
                                @if ($category->img_url)
                                <img src="{{ asset($category->img_url) }}" alt="Current Image"
                                    style="max-width: 200px; max-height: 200px;" />
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('img_url').addEventListener('change', function (event) {
        const previewContainer = document.getElementById('image-preview');
        previewContainer.innerHTML = ""; // Clear previous preview
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '200px';
                img.style.maxHeight = '200px';
                img.alt = "New Image Preview";
                previewContainer.appendChild(img);
            };
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection