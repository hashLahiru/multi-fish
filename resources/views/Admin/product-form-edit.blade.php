@extends('admin.layout.app')

@section('title', 'Edit Product')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Edit Product</h5>
                </div>
                <div class="ibox-content">
                    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data"
                        id="product-form">
                        @csrf
                        @method('POST')

                        <div class="form-group row">
                            <label for="prod_name" class="col-lg-2 col-form-label">Name:</label>
                            <div class="col-lg-10">
                                <input type="text" name="prod_name" value="{{ $product->prod_name }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-lg-2 col-form-label">Description:</label>
                            <div class="col-lg-10">
                                <textarea name="description" class="form-control" rows="5">{{ $product->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-lg-2 col-form-label">Price:</label>
                            <div class="col-lg-10">
                                <input type="text" name="price" value="{{ $product->price }}" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category_id" class="col-lg-2 col-form-label">Category:</label>
                            <div class="col-lg-10">
                                <select name="category_id" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                            {{ $category->cat_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Images:</label>
                            <div class="col-lg-10">
                                <input type="file" name="img1" class="form-control mb-2"
                                    onchange="previewImage(this, 'img1-preview')" />
                                <div id="img1-preview" class="image-preview">
                                    @if ($product->img1 || $product->img1_url)
                                        <div class="col-md-3">
                                            <img src="{{ asset($product->img1 ? 'uploads/' . $product->img1 : $product->img1_url) }}"
                                                class="img-thumbnail" width="100">
                                            <button type="button" class="btn btn-danger mt-1"
                                                onclick="removeImage('img1-preview', 'remove_img1')">Remove</button>
                                        </div>
                                    @endif
                                </div>
                                <input type="file" name="img2" class="form-control mb-2"
                                    onchange="previewImage(this, 'img2-preview')" />
                                <div id="img2-preview" class="image-preview">
                                    @if ($product->img2 || $product->img2_url)
                                        <div class="col-md-3">
                                            <img src="{{ asset($product->img2 ? 'uploads/' . $product->img2 : $product->img2_url) }}"
                                                class="img-thumbnail" width="100">
                                            <button type="button" class="btn btn-danger mt-1"
                                                onclick="removeImage('img2-preview', 'remove_img2')">Remove</button>
                                        </div>
                                    @endif
                                </div>
                                <input type="file" name="img3" class="form-control"
                                    onchange="previewImage(this, 'img3-preview')" />
                                <div id="img3-preview" class="image-preview">
                                    @if ($product->img3 || $product->img3_url)
                                        <div class="col-md-3">
                                            <img src="{{ asset($product->img3 ? 'uploads/' . $product->img3 : $product->img3_url) }}"
                                                class="img-thumbnail" width="100">
                                            <button type="button" class="btn btn-danger mt-1"
                                                onclick="removeImage('img3-preview', 'remove_img3')">Remove</button>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="remove_img1" id="remove_img1" value="">
                        <input type="hidden" name="remove_img2" id="remove_img2" value="">
                        <input type="hidden" name="remove_img3" id="remove_img3" value="">
                        <div class="form-group row">
                            <div class="col-lg-offset-2 col-lg-10">
                                <label><input type="checkbox" name="is_popular"
                                        {{ $product->is_popular ? 'checked' : '' }} /> Mark as Popular Product</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="#" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(input, previewId) {
            const previewContainer = document.getElementById(previewId);
            const file = input.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewContainer.innerHTML = `
                    <div class="col-md-3">
                        <img src="${e.target.result}" class="img-thumbnail" width="100">
                        <button type="button" class="btn btn-danger mt-1" onclick="removeImage('${previewId}')">Remove</button>
                    </div>
                `;
                };
                reader.readAsDataURL(file);
            }
        }

        function removeImage(previewId, hiddenFieldId) {
            document.getElementById(previewId).innerHTML = '';

            document.getElementById(hiddenFieldId).value = '1';

            var fileInput = document.querySelector(`input[name=${previewId.split('-')[0]}]`);
            if (fileInput) {
                fileInput.value = '';
            }
        }
    </script>

@endsection
