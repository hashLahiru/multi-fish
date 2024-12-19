@extends('admin.layout.app')

@section('title', 'Add Product')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5>Add Product</h5>
            </div>
            <div class="ibox-content">
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data"
                    id="product-form">
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
                            <input type="file" name="img1" class="form-control mb-2" id="img1"
                                onchange="previewImage(event, 'img1Preview')" />
                            <div id="img1PreviewContainer">
                                <img id="img1Preview" src="#" alt="Image 1 Preview"
                                    style="width: 150px; height: auto; display: none; margin-top: 10px;" />
                            </div>
                            <input type="file" name="img2" class="form-control mb-2" id="img2"
                                onchange="previewImage(event, 'img2Preview')" />
                            <div id="img2PreviewContainer">
                                <img id="img2Preview" src="#" alt="Image 2 Preview"
                                    style="width: 150px; height: auto; display: none; margin-top: 10px;" />
                            </div>
                            <input type="file" name="img3" class="form-control" id="img3"
                                onchange="previewImage(event, 'img3Preview')" />
                            <div id="img3PreviewContainer">
                                <img id="img3Preview" src="#" alt="Image 3 Preview"
                                    style="width: 150px; height: auto; display: none; margin-top: 10px;" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Available Countries:</label>
                        <div class="col-lg-10">
                            <label><input type="checkbox" name="isSriLanka" value="1" /> Sri Lanka</label><br>
                            <label><input type="checkbox" name="isIndonesia" value="1" /> Indonesia</label><br>
                            <label><input type="checkbox" name="isMalasiya" value="1" /> Malaysia</label>
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
    // Function to show image preview
    function previewImage(event, previewId) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            // Set the preview image source to the uploaded file
            const preview = document.getElementById(previewId);
            preview.src = e.target.result;
            preview.style.display = 'block'; // Display the image
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection