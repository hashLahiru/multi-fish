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
                    @method('PUT')
                    <div class="form-group row">
                        <label for="prod_name" class="col-lg-2 col-form-label">Name:</label>
                        <div class="col-lg-10">
                            <input type="text" name="prod_name" placeholder="Product Name" class="form-control"
                                value="{{ $product->pro_name }}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-lg-2 col-form-label">Description:</label>
                        <div class="col-lg-10">
                            <textarea name="description" class="form-control"
                                rows="5">{{ $product->pro_description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-lg-2 col-form-label">Price:</label>
                        <div class="col-lg-10">
                            <input type="text" name="price" placeholder="Price" class="form-control"
                                value="{{ $product->unit_price }}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category_id" class="col-lg-2 col-form-label">Category:</label>
                        <div class="col-lg-10">
                            <select name="category_id" class="form-control">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ?
                                    'selected' : '' }}>
                                    {{ $category->cat_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Images:</label>
                        <div class="col-lg-10">
                            <input type="file" name="img1" class="form-control mb-2" id="img1" />
                            <small>Current: {{ $product->img1_url ?? 'No image uploaded' }}</small><br>
                            <img id="img1-preview" src="{{ $product->img1_url ?? '' }}" class="img-thumbnail"
                                style="display: {{ $product->img1_url ? 'block' : 'none' }}; max-width: 150px;" />
                            <input type="file" name="img2" class="form-control mb-2" id="img2" />
                            <small>Current: {{ $product->img2_url ?? 'No image uploaded' }}</small><br>
                            <img id="img2-preview" src="{{ $product->img2_url ?? '' }}" class="img-thumbnail"
                                style="display: {{ $product->img2_url ? 'block' : 'none' }}; max-width: 150px;" />
                            <input type="file" name="img3" class="form-control" id="img3" />
                            <small>Current: {{ $product->img3_url ?? 'No image uploaded' }}</small><br>
                            <img id="img3-preview" src="{{ $product->img3_url ?? '' }}" class="img-thumbnail"
                                style="display: {{ $product->img3_url ? 'block' : 'none' }}; max-width: 150px;" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Available Countries:</label>
                        <div class="col-lg-10">
                            <label><input type="checkbox" name="isSriLanka" value="1" {{ $product->isSriLanka ?
                                'checked' : '' }} /> Sri Lanka</label><br>
                            <label><input type="checkbox" name="isIndonesia" value="1" {{ $product->isIndonesia ?
                                'checked' : '' }} /> Indonesia</label><br>
                            <label><input type="checkbox" name="isMalaysia" value="1" {{ $product->isMalaysia ?
                                'checked' : '' }} /> Malaysia</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('products.view') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('img1').addEventListener('change', function(e) {
        const reader = new FileReader();
        reader.onload = function(event) {
            const preview = document.getElementById('img1-preview');
            preview.src = event.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(e.target.files[0]);
    });

    document.getElementById('img2').addEventListener('change', function(e) {
        const reader = new FileReader();
        reader.onload = function(event) {
            const preview = document.getElementById('img2-preview');
            preview.src = event.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(e.target.files[0]);
    });

    document.getElementById('img3').addEventListener('change', function(e) {
        const reader = new FileReader();
        reader.onload = function(event) {
            const preview = document.getElementById('img3-preview');
            preview.src = event.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(e.target.files[0]);
    });
</script>

@endsection