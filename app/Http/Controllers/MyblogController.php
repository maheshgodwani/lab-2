<?php

namespace App\Http\Controllers;

use App\Models\myblog;
use Illuminate\Http\Request;

class MyblogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post=myblog::get();
        return view('post.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        myblog::create($request->all());
        return redirect()->route('myblog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\myblog  $myblog
     * @return \Illuminate\Http\Response
     */
    public function show(myblog $myblog)
    {
        return view('post.show',compact('myblog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\myblog  $myblog
     * @return \Illuminate\Http\Response
     */
    public function edit(myblog $myblog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\myblog  $myblog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, myblog $myblog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\myblog  $myblog
     * @return \Illuminate\Http\Response
     */
    public function destroy(myblog $myblog)
    {
        //
    }
}
