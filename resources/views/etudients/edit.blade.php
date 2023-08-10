<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container flex justify-center mx-auto">
                        <div class="flex flex-col">
                            <div class="w-full">
                                <div class="border-b border-gray-200 shadow">
                                    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                                        <form method="POST" action="{{ route('etudients.update', ['etudient' => $user]) }}">
                                            @csrf
                                            @method("put")
                                          <div class="form-group mb-6">
                                            <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Nom</label>
                                            <input type="text" name="nom" class="form-control" value="{{$user->nom}}" id="exampleInputEmail1"
                                              aria-describedby="emailHelp" />
                                          </div>
                                          <div class="form-group mb-6">
                                            <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Prenom</label>
                                            <input type="text" name="prenom" class="form-control" value="{{$user->prenom}}" id="exampleInputEmail1"
                                              aria-describedby="emailHelp" />
                                          </div>
                                          <div class="form-group mb-6">
                                            <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Email</label>
                                            <input type="email" name="email" class="form-control" value="{{$user->email}}" id="exampleInputEmail1"
                                              aria-describedby="emailHelp" />
                                          </div>
                                          <button type="submit" class="
                                            px-6
                                            py-2.5
                                            bg-blue-600
                                            text-white
                                            font-medium
                                            text-xs
                                            leading-tight
                                            uppercase
                                            rounded
                                            shadow-md
                                            hover:bg-blue-700 hover:shadow-lg
                                            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                                            active:bg-blue-800 active:shadow-lg
                                            transition
                                            duration-150
                                            ease-in-out">Modifier</button>
                                        </form>
                                      </div>
                                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>