<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EtudientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('etudients.index', ['etudients' => User::where('type', 'étudient')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etudients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'type' => 'étudient',
            'email' => $request->email,
            'password' => Hash::make('secret'),
        ]);
        return redirect()->to('etudients')->with('success', 'Le etudient a été bien ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $etudient
     * @return \Illuminate\Http\Response
     */
    public function show(User $etudient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $etudient
     * @return \Illuminate\Http\Response
     */
    public function edit(User $etudient)
    {
        $user = $etudient;
        return view('etudients.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $etudient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $etudient)
    {
        $etudient->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => Hash::make('secret'),
        ]);
        return redirect()->route('etudients.index')->with('success', 'Le etudient a ete bien modifiee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $etudient
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $etudient)
    {
        $etudient->delete();
        return redirect()->route('etudients.index')->with('success', 'Le etudient a été bien supprimer');
    }
    public function matieresNote(User $etudient)
    {
        return 'ok';
    }
}
