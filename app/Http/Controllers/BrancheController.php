<?php

namespace App\Http\Controllers;

use App\Models\Branche;
use Illuminate\Http\Request;

class BrancheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('branches.index', ['branches' => Branche::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Branche::create($request->all());
        return redirect('/branches');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branche  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branche $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branche  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branche $branch)
    {
        return view('branches.edit', compact('branch')); //['branch'=>$branch]
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branche  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branche $branch)
    {
        $branch->update($request->all());
        return redirect('/branches');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branche  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branche $branch)
    {
        $branch->delete();
        return redirect('/branches');
    }
}
