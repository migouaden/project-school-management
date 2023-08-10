@extends('layout.app')
@section('content')
<h2>Vous avez {{$notes->total()}} notes.</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Nom complet stagiaire</th>
        <th scope="col">Nom matiere</th>
        <th scope="col">Nom Prof</th>
        <th scope="col">Note</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($notes as $note)
        <tr>
            <th>{{$note->stagiaire->nomComplet()}}</th>
            <th>{{$note->matiere->nom}}</th>
            <th>{{$note->prof->nom}}</th>
            <th>{{$note->note}}</th>
        </tr>
        @endforeach
    </tbody>
</table>
{{$notes->links()}}

@endsection
