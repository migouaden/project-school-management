@extends('layout.app')
@section('content')
<h2>Ajouter une note</h2>
<form action="{{route('notes.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="stagiaire">Stagiaire</label>
        <select name="stagiaire" id="stagiaire" class="form-control">
            @foreach ($stagiaires as $stagiaire)
                <option value="{{$stagiaire->id}}">{{$stagiaire->nom}}</option> 
            @endforeach
        </select>  
    </div>
    <div class="form-group">
        <label for="matiere">Matiere</label>
        <select name="matiere" id="matiere" class="form-control">
            @foreach ($matieres as $matiere)
                <option value="{{$matiere->id}}">{{$matiere->nom}}</option> 
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="note">Note</label>
        <input type="text" id="note" name="note" class="form-control" required>
    </div>
    <button class="btn btn-success btn-lg">
        Ajouter la note
    </button>
</form>
</div>
@endsection
      
