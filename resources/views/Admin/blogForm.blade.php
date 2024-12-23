@extends('admin.layout.app')

@section('title', isset($blog) && $blog->id ? 'Edit Blog' : 'Add Blog')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>{{ isset($blog) && $blog->id ? 'Edit Blog' : 'Add Blog' }}</h5>
                </div>
                <div class="ibox-content">
                    <form action="{{ isset($blog) ? route('blogs.update', $blog->id) : route('blog.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @if (isset($blog))
                            @method('PUT')
                        @endif
                        <div class="form-group row">
                            <label for="title" class="col-lg-2 col-form-label">Title:</label>
                            <div class="col-lg-10">
                                <input type="text" name="title" value="{{ old('title', $blog->title ?? '') }}"
                                    placeholder="Blog Title" class="form-control" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category_id" class="col-lg-2 col-form-label">Category:</label>
                            <div class="col-lg-10">
                                <select name="category_id" class="form-control" required>
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id', $blog->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="header_img" class="col-lg-2 col-form-label">Header Image:</label>
                            <div class="col-lg-10">
                                <input type="file" name="header_img" class="form-control"
                                    onchange="previewImage(event, 'headerPreview')" />
                                <img id="headerPreview"
                                    src="{{ isset($blog->header_img_url) ? asset('storage/' . $blog->header_img_url) : '#' }}"
                                    alt="Header Preview"
                                    style="display: {{ isset($blog->header_img_url) ? 'block' : 'none' }}; margin-top: 10px; width: 150px;" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="thumbnail_img" class="col-lg-2 col-form-label">Thumbnail Image:</label>
                            <div class="col-lg-10">
                                <input type="file" name="thumbnail_img" class="form-control"
                                    onchange="previewImage(event, 'thumbPreview')" />
                                <img id="thumbPreview"
                                    src="{{ isset($blog->thumb_img_url) ? asset('storage/' . $blog->thumb_img_url) : '#' }}"
                                    alt="Thumbnail Preview"
                                    style="display: {{ isset($blog->thumb_img_url) ? 'block' : 'none' }}; margin-top: 10px; width: 150px;" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="blog_img" class="col-lg-2 col-form-label">Blog Image:</label>
                            <div class="col-lg-10">
                                <input type="file" name="blog_img" class="form-control"
                                    onchange="previewImage(event, 'blogPreview')" />
                                <img id="blogPreview"
                                    src="{{ isset($blog->blog_img_url) ? asset('storage/' . $blog->blog_img_url) : '#' }}"
                                    alt="Blog Preview"
                                    style="display: {{ isset($blog->blog_img_url) ? 'block' : 'none' }}; margin-top: 10px; width: 150px;" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-lg-2 col-form-label">Content:</label>
                            <div class="col-lg-10">
                                <textarea name="content" class="form-control" rows="5" required>
                                    {{ old('content', $blog->content ?? '') }}
                                </textarea>
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
@endsection
