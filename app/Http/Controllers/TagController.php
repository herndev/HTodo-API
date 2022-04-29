<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Tag::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagRequest $request)
    {
        //
        return Tag::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $tag
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tag = Tag::findOrFail($id);
        return $tag;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTagRequest  $request
     * @param  \App\Models\Todo  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagRequest $request, Tag $id)
    {
        //
        $tag = Tag::findOrFail($id);
        $tag->update($request->all());
        return $tag;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return $tag;
    }
}
