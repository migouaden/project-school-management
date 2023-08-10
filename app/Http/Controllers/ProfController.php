<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profs.index', ['profs' => User::whereType('prof')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profs.create');
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
            'type' => 'prof',
            'email' => $request->email,
            'password' => Hash::make('secret'),
        ]);
        return redirect()->to('profs')->with('success', 'Le prof a été bien ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $prof
     * @return \Illuminate\Http\Response
     */
    public function show(User $prof)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $prof
     * @return \Illuminate\Http\Response
     */
    public function edit(User $prof)
    {
        $user = $prof;
        return view('profs.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $prof
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $prof)
    {
        $prof->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => Hash::make('secret'),
        ]);
        return redirect()->route('profs.index')->with('success', 'Le prof a ete bien modifiee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $prof
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $prof)
    {
        $prof->delete();
        return redirect()->route('profs.index')->with('success', 'Le prof a été bien supprimer');
    }

    public function matieres(User $prof)
    {
        return $prof->matieres;
    }
}
