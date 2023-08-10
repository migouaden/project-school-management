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
                                    <table>
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    ID
                                                </th>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    Etudients
                                                </th>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                            @foreach($etudients as $item)
                                            <tr class="whitespace-nowrap">
                                                <td class="px-6 py-4 text-sm text-gray-500">
                                                    {{$item->id}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="text-sm text-gray-900">
                                                       {{$item->nom}}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 flex">
                                                    <a href="/branches/{{$item->id}}/edit" class="px-4 py-1 text-sm text-white bg-blue-400 rounded mr-2">Edit</a>
                                                    <form method="post" action="/branches/{{$item->id}}">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class=" px-6
                                                        py-2.5
                                                        bg-red-600
                                                        text-white
                                                        font-medium
                                                        text-xs
                                                        leading-tight
                                                        uppercase
                                                        rounded
                                                        shadow-md
                                                        hover:bg-red-700 hover:shadow-lg
                                                        focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0
                                                        active:bg-red-800 active:shadow-lg
                                                        transition
                                                        duration-150
                                                        ease-in-out">Supprimer</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>