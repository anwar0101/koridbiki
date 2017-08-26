<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Favorite;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * make post favorite or unfavorite
     */
     public function favorite($id)
     {
         $post = Post::find($id);
         if(count($post->favorites()->where('user_id', Auth::id())->get())==0){
             $fav = new Favorite();
             $fav->user_id = Auth::id();
             $fav->post_id = $post->id;
             $fav->save();
         } else {
             $post->favorites()->where('user_id', Auth::id())->get()->first()->delete();
         }
         return back();
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = \App\Category::all();
        $subcat = \App\SubCategory::all();
        $places = \App\Place::all();
        return view('posts.create', compact('category','subcat','places'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            // 'images' => 'required',
            'price' => 'required',
            'negatiable' => 'required',
            'condition' => 'required',
            'contact' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        // $post->images => $request->
        $post->price = $request->price;
        $post->negatiable = $request->negatiable;
        $post->condition = $request->condition;
        $post->contact = $request->contact;
        $post->sub_category_id = $request->sub_category_id;
        $post->place_id = $request->place_id;
        $post->user_id = $request->user()->id;

        $post->save();

        return redirect()->route('dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
