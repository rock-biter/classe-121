<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::with(['category', 'category.posts'])->get(); // 3 query
        // dd($posts);

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->get();

        // dd($categories);

        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {

        // $request->validate([
        //     'title' => 'required|max:150|string',
        //     'content' => 'nullable|string'
        // ]);

        // dd($request->all());
        // dd($request->all(), $request->validated());

        // dd($request->all());

        $form_data = $request->validated();

        // dd($form_data);

        $base_slug = Str::slug($form_data['title']);
        $slug = $base_slug;
        // dd($form_data, $slug);
        $n = 0;

        do {
            // SELECT * FROM `posts` WHERE `slug` = ?
            $find = Post::where('slug', $slug)->first(); // null | Post

            if ($find !== null) {
                $n++;
                $slug = $base_slug . '-' . $n;
            }
        } while ($find !== null);

        $form_data['slug'] = $slug;

        $post = Post::create($form_data);

        // creare l'istanza e salvarla nel db

        // redirect alla rotta show
        return to_route('admin.posts.show', $post);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        //eager loading
        $post->load(['category', 'category.posts']);

        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::orderBy('name', 'asc')->get();

        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        // dd($request->all());
        // $request->validate([
        //     'title' => 'required|max:150|string',
        //     'slug' => ['required', 'max:255', Rule::unique('posts')->ignore($post->id)],
        //     'content' => 'nullable|string'
        // ]);

        $form_data = $request->validated();
        $post->update($form_data);

        // dd($request->all());
        return to_route('admin.posts.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return to_route('admin.posts.index');
    }
}
