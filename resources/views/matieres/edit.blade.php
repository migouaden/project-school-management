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
                                        <form method="POST" action='/matieres/{{$matiere->id}}'>
                                            @csrf
                                            <input type="hidden" name="_method" value="PUT">
                                          <div class="form-group mb-6">
                                            <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Matiere</label>
                                            <input type="text" name="nom" class="form-control" value="{{$matiere->nom}}"
                                              block
                                              w-full
                                              px-3
                                              py-1.5
                                              text-base
                                              font-normal
                                              text-gray-700
                                              bg-white bg-clip-padding
                                              border border-solid border-gray-300
                                              rounded
                                              transition
                                              ease-in-out
                                              m-0
                                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail1"
                                              aria-describedby="emailHelp" />
                                              <select class="form-select appearance-none
                                              block
                                              w-full
                                              px-3
                                              py-1.5
                                              text-base
                                              font-normal
                                              text-gray-700
                                              bg-white bg-clip-padding bg-no-repeat
                                              border border-solid border-gray-300
                                              rounded
                                              transition
                                              ease-in-out
                                              m-0
                                              mt-3
                                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  name="branche_id" aria-label="Default select example">
                                              @foreach($branches as $branch)
                                                <option value="{{$branch->id}}"> {{$branch->nom}}</option>
                                                @endforeach
                                            </select>
                                              <select class="form-select appearance-none
                                              block
                                              w-full
                                              px-3
                                              py-1.5
                                              text-base
                                              font-normal
                                              text-gray-700
                                              bg-white bg-clip-padding bg-no-repeat
                                              border border-solid border-gray-300
                                              rounded
                                              transition
                                              ease-in-out
                                              m-0
                                              mt-3
                                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="prof_id" aria-label="Default select example">
                                              @foreach($profs as $prof)
                                                <option {{ $matiere->prof_id==$prof->id ? 'selected="selected"' : '' }} value="{{$prof->id}}">{{$prof->getFullName()}}</option>
                                                @endforeach
                                            </select>
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