<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story;
use App\Models\React;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $stories = Auth::user()->id;
        // $react = DB::table('reacts')->where('react_happy', '=', 1 );
        $react = React::withCount('reacts')->get();
        // $stories = Story::orderBy('user_id')->get();
        $stories = auth()->user()->Storys;

        return view('frontend.story.index', compact('stories', 'react'));
    }

    public function home(){

        $stories = Story::all();

        return view('frontend.story.home', compact('stories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.story.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Alert::success('Success', 'Your story now flying');

        Story::create([
            'user_id' => Auth::id(),
            'title' => request('title'),
            'slug' => Str::slug(request('title')),
            'image' => request('image')->store('stories'),
            'content' => request('content'),
        ]);

        return redirect()->route('frontend.story.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Story $story)
    {
        return view('frontend.story.show', compact('story'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Story $story)
    {

        return view('frontend.story.edit', compact('story'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Story $story)
    {
        
        if($story->image){
            \Storage::delete($story->image);
        }

        Alert::success('success', 'Your story updated');

        $story->update([
            'user_id' => Auth::id(),
            'title' => request('title'),
            'slug' => Str::slug(request('title')),
            'image' => request('image')->store('stories'),
            'content' => request('content'),
        ]);

        return redirect()->route('frontend.story.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Story $story)
    {

        $story->delete();
        Alert::success('Success', 'Story was deleted');

        if($story->image){
            \Storage::delete($story->image);
        }

        return redirect()->route('frontend.story.index');
    }
    
}
