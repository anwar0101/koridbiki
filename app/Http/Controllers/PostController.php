<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Favorite;
use Illuminate\Support\Facades\Storage;

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
        $subcat = $category->first()->sub_categories;
        $divitions = \App\Divition::all();
        $places = $divitions->first()->places;
        return view('posts.create', compact('category','subcat','places','divitions'));
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
            'sub_category_id' => 'required',
            'place_id' => 'required',
            'photo1' => 'required',
            'price' => 'required',
            'condition' => 'required',
            'contact' => 'required',
        ]);
        $data = $request->all();
        $data['user_id'] = Auth::id();

        if ($request->hasFile('photo1')) {
            $imgStore = Storage::putFile('public/post', $request->file('photo1'));
            $data['photo1'] = $imgStore;
        }
        if ($request->hasFile('photo2')) {
            $imgStore = Storage::putFile('public/post', $request->file('photo2'));
            $data['photo2'] = $imgStore;
        }
        if ($request->hasFile('photo3')) {
            $imgStore = Storage::putFile('public/post', $request->file('photo3'));
            $data['photo3'] = $imgStore;
        }
        if ($request->hasFile('photo4')) {
            $imgStore = Storage::putFile('public/post', $request->file('photo4'));
            $data['photo4'] = $imgStore;
        }

        if($post = Post::create($data)){
            flash("Your ad Posted and Waiting for reviewed")->success();
        } else {
            flash("Error occured while posting. Try again")->error();
        }

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
