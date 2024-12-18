@extends('admin.layout.app')

@section('title', 'Add Product')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Add New Product</h5>
                </div>
                <div class="ibox-content">
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" id="product-form">
                        @csrf
                        <div class="form-group row">
                            <label for="prod_name" class="col-lg-2 col-form-label">Name:</label>
                            <div class="col-lg-10">
                                <input type="text" name="prod_name" placeholder="Product Name" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-lg-2 col-form-label">Description:</label>
                            <div class="col-lg-10">
                                <textarea name="description" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-lg-2 col-form-label">Price:</label>
                            <div class="col-lg-10">
                                <input type="text" name="price" placeholder="Price" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category_id" class="col-lg-2 col-form-label">Category:</label>
                            <div class="col-lg-10">
                                <select name="category_id" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Images:</label>
                            <div class="col-lg-10">
                                <input type="file" name="img1" class="form-control mb-2"
                                    onchange="previewImage(this, 'img1-preview')" />
                                <input type="file" name="img2" class="form-control mb-2"
                                    onchange="previewImage(this, 'img2-preview')" />
                                <input type="file" name="img3" class="form-control"
                                    onchange="previewImage(this, 'img3-preview')" />
                            </div>
                        </div>

                        <div class="form-group row" id="img1-preview" class="image-preview"></div>
                        <div class="form-group row" id="img2-preview" class="image-preview"></div>
                        <div class="form-group row" id="img3-preview" class="image-preview"></div>

                        <div class="form-group row">
                            <div class="col-lg-offset-2 col-lg-10">
                                <label><input type="checkbox" name="is_popular" /> Mark as Popular Product</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Image preview function
        function previewImage(input, previewId) {
            const previewContainer = document.getElementById(previewId);
            const file = input.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewContainer.innerHTML = `
                        <div class="col-md-3">
                            <img src="${e.target.result}" class="img-thumbnail" width="100">
                            <button type="button" class="btn btn-danger" onclick="removeImage('${previewId}')">Remove</button>
                        </div>
                    `;
                };
                reader.readAsDataURL(file);
            }
        }

        // Remove the image preview
        function removeImage(previewId) {
            document.getElementById(previewId).innerHTML = '';
            document.querySelector(`input[name='${previewId.split('-')[0]}']`).value = ''; // Clear file input
        }
    </script>
@endsection
