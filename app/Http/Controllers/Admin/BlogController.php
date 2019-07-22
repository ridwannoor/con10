<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Categorie;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\User;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $categorie = Categorie::all();
        $tag = Tag::all();
        $comment = Comment::all();
        $blogs = Blog::all();
        return view('admin.blog.index',compact('blogs','user','categorie','tag','comment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        $tags = Tag::all();
        return view('admin.blog.add', compact('categories', 'tags'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $blog = Blog::create([
        //     'title'       => $request->title,
        //     'content'        => $request->content,
        //     'categorie_id' => $request->categorie_id, 
        // ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->categorie_id = $request->categorie_id;
        $blog->save();
      
        // $id = $request->input('tags');
        // $tags = Tag::find($id);
        // $blog->tags()->attach($tags);
        $blog->tags()->sync($request->tags, false);

        return redirect('/admin/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       
        $blog = Blog::find($id);
        $categorie = Categorie::all();
        $tags = Tag::all();
        $comment = Comment::all();
        return view('admin.blog.show', compact('blog', 'categorie', 'tags', 'comment'));
    }

    public function publish($id)
    {
       
        $blog = Blog::find($id);
        $blog->is_published = !$blog->is_published;
        $blog->save();  
        return redirect('/admin/blog');
    }

    // public function show(Blog $blog)
    // {
    //     $blog = $blog->load(['user', 'categorie', 'tags', 'comment']);

    //     return view('admin.blog.show', compact('blog'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $categories = Categorie::all();
        // $tags = Tag::all();
        $comment = Comment::all();
        $blogs = Blog::find($id);
        $tags = Tag::pluck('name', 'id')->all();        

        // dd($tags);
        // if ($blogs->has('tags')) {
        //     $tags = $blogs->tags->pluck('name')->toArray();    
        //     $tags = implode(', ', $tags);
        // } else {
        //     $tags = "";
        // }
      
        return view('admin.blog.edit',compact('blogs','user','categories','tags','comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // $blog = Blog::where('id','=',$request->id)->update([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'categorie_id' => $request->categorie_id
        // ]);

        $blog = Blog::find($id);
        dd($blog);
        
        // $blog->tags()->sync($request->tags);
        // if (isset($request->tags)) {
            
        // } else {
        //     $blog->tags()->sync(array());
        // }

        // $blog = Blog::where('id','=', $id)->first();
        // $tagsId =  $blog->tags->pluck('id');
       
        // $tagsId = $blog->tags()->sync($request->tags);
        // dd($tagsId);
        //  $blog->tags()->sync($tagsId);
        // $blog->tags()->sync($request->tags, false);

        // $tagsId = collect($request->tags)->map(function($tag) {
        //     return Tag::firstOrCreate(['name' => $tag])->id;
        // });
        // $tagsId = $request->get('tags');

        // $blog->tags()->sync($request->input('tag_id'));

        // $blog = Blog::find($id);
        // dd($blog);
        // $blog->title = $request->input('title');
        // $blog->content = $request->input('content');
        // $blog->categorie_id = $request->input('categorie_id');
        // $blog->save();

        // if (isset($request->tags)) {
        //     $blog->tags()->sync($request->tags);
        // } 
        // else {
        //     $blog->tags()->sync(array());
        // }

        // $tag = $request->tag_id;

        // $tags = Tag::where($tag)->pluck('name');
        // $blogs = $blogs->tags()->sync($tags);
        // dd($tag);
        // $blogs->tags()->sync($request->input('tag_id'));
        // $tags = Tag::all();
        // $blogs->tags->sync($request->tag);

        // $blogs->title = $request->input('title');
        // $blogs->content = $request->input('content');
        // $blogs->categorie_id = $request->input('categorie_id');
        // $blogs->save();

        
        // $id = $request->input('tag_id');
        // $tags = Tag::find($id);
        // $blogs->tags()->attach($tags);

        // if (isset($request->tags)) {
        //     $blogs->tags->sync($request->tags);
        // }
        //  else {
        //     $blogs->tags->sync(array());
        // }

        // $blogs->tags()->sync((array)$request->input('tag_id'));
         
        return redirect('/admin/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Blog::find($id);
        $data->tags()->detach();
        $data->delete();
        return redirect('/admin/blog');
    }
}