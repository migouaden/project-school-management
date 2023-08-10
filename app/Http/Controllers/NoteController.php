<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use App\Models\User;
use App\Models\Stagiaire;
use App\Models\MatiereNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index()
    {
        $notes = MatiereNote::with('stagiaire')->paginate();
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        $stagiaires = Stagiaire::all();
        $matieres = Matiere::all();
        return view('notes.create', compact('stagiaires', 'matieres'));
    }

    public function store(Request $request)
    {
        $prof_id = auth()->user()->id;
    }

    public function createAjouterNote(Matiere $matiere)
    {
        return view('notes.ajouterNote', ['matiere' => $matiere, 'etudients' => User::whereType('étudient')->get()]);
    }
    public function ajouterNote(Request $request)
    {
        $matiere_id = $request->matiere_id;
        $prof_id = Auth::id();
        $etudients_notes = $request->except(['_token', 'matiere_id']);
        foreach ($etudients_notes as $etudient_id => $note) {
            MatiereNote::create(['prof_id' => $prof_id, 'étudient_id' => $etudient_id, 'matiere_id' => $matiere_id, 'note' => $note]);
        }
        return redirect('matieres');
    }
}
