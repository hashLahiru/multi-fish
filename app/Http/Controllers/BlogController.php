<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', '!=', 'delete')
            ->with('category')
            ->orderBy('published_at', 'desc')
            ->get();

        return view('admin.blogs', compact('blogs'));
    }

    public function create()
    {
        $categories = BlogCategory::where('status', 'active')->get();

        return view('admin.blogForm', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:blog_categories,id',
            'header_img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'thumbnail_img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'blog_img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Save images in specific folders
        $headerImgPath = $request->file('header_img')->store('blogs/headerImgs', 'public');
        $thumbImgPath = $request->file('thumbnail_img')->store('blogs/thumbImgs', 'public');
        $blogImgPath = $request->file('blog_img')->store('blogs/blogImgs', 'public');

        Blog::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'blog_url' => Str::slug($request->title),
            'header_img_url' => $headerImgPath,
            'thumb_img_url' => $thumbImgPath,
            'blog_img_url' => $blogImgPath,
            'author' => 'admin',
            'published_at' => now(),
            'status' => 'active',
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog added successfully!');
    }

    public function toggleStatus(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $newStatus = $blog->status === 'active' ? 'pause' : 'active';
        $blog->update(['status' => $newStatus]);

        return response()->json([
            'success' => true,
            'message' => "Blog status updated to $newStatus.",
        ]);
    }

    public function delete(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->update(['status' => 'delete']);

        return response()->json([
            'success' => true,
            'message' => 'Blog deleted successfully.',
        ]);
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = BlogCategory::all(); // Replace with your actual categories retrieval logic
        return view('admin.blogForm', compact('blog', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:blog_categories,id',
            'header_img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'thumbnail_img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'blog_img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Update image paths if new files are uploaded
        if ($request->hasFile('header_img')) {
            $headerImgPath = $request->file('header_img')->store('blogs/headerImgs', 'public');
            $blog->header_img_url = $headerImgPath;
        }

        if ($request->hasFile('thumbnail_img')) {
            $thumbImgPath = $request->file('thumbnail_img')->store('blogs/thumbImgs', 'public');
            $blog->thumb_img_url = $thumbImgPath;
        }

        if ($request->hasFile('blog_img')) {
            $blogImgPath = $request->file('blog_img')->store('blogs/blogImgs', 'public');
            $blog->blog_img_url = $blogImgPath;
        }

        $blog->update([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'content' => $request->content,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    }
}
