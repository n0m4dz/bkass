<?php

namespace Railway\Post\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Auth;
use App\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post::index');
    }

    function getPosts()
    {
        return Post::orderBy('id', 'desc')->take(20)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->session()->put('name', 'ben');
        session(['age' => 16]);
        session()->flash('w', 120);
        return view('create-post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {

//        $validatedData = $request->validate([
//            'title'   => 'required|min:5',
//            'content' => 'required'
//        ]);
//        session()->flash('alert', 'success');
//        session()->flash('msg', 'successfully created post');
//        Auth::user();

//        return redirect('post/create');

//        dump($validatedData);

        $r = Post::create($request->all());
//        $r = DB::table('post')->insert($request->all());
        if ($r) {
            return response()->json(['status' => true]);
        }
        return response()->json(['status' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
