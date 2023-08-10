<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>
<h1 class="text-green-500 text-center font-semibold text-xl">{{$matiere->nom}}</h1>
<form action="/ajouter-notes" method="POST">
  @csrf
  <input type="hidden" name="matiere_id" value="{{$matiere->id}}">
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom étudient</th>
        <th scope="col">Note</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($etudients as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->getFullName()}}</td>
            <td><input type="text" name="{{$item->id}}"></td>
        </tr>
        @endforeach
    </tbody>
</table>
<button type="submit" class="px-3 py-2 hover:bg-sky-600 bg-sky-500 text-white rounded rounded-lg">Ajouter</button>
</form>
</x-app-layout>
