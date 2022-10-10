<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function index()
    {
        //
        return view('admin.blogs.index');
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(StoreBlogRequest $request)
    {
        $saveImagePath = $request->file('image')->store('blog','public');
        $blog = new Blog($request->validated());
        $blog->image = $saveImagePath;
        $blog->save();
        return to_route('admin.blogs.index')->with('success','投稿しました');
    }
}
