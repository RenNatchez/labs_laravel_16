@extends('layouts.admin')
@section('content')
<div class="w-full mx-auto container">
    {{-- header --}}
    <div class="flex items-center justify-between w-full my-4 pl-4 sm:pr-4">
        <div class="mr-6">
            <h2
                class="text-3xl text_green md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate">
                Membre</h2>
        </div>
        <div class="flex items-center">
            <a href="{{route('verif.index')}}">
                <button
                    class="bg-blue-600 px-5 py-2 text-lg shadow-sm font-semibold tracking-wider text-white rounded-full hover:bg-gray-200 hover:text-black">
                    Annuler
                </button>
            </a>
        </div>
    </div>
    <hr class="border-b-2 border-gray-600 my-3">
    {{-- header end --}}
    <div class="w-full sm:px-6">
        <div class="bg-gray-900 shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
            <table class="w-full whitespace-nowrap">
                <thead>
                    <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-300">
                        <th class="font-normal text-left pl-4">Auteur</th>
                        <th class="font-normal text-left pl-12">Etat</th>
                        <th class="font-normal text-left pl-12">Titre</th>
                        <th class="font-normal text-left pl-20"></th>
                    </tr>
                </thead>
                <tbody class="w-full">
                    @forelse ($article as $item)
                    <tr tabindex="0" class="focus:outline-none h-20 text-sm leading-none text-gray-800 bg-white hover:bg-gray-100 border-b border-t border-gray-100">
                        <td class="pl-4 cursor-pointer">
                            <div class="flex items-center">
                                <div class="w-10 h-10">
                                    <img class="w-full h-full" src="{{asset('image/'. $item->user->photo)}}" alt="user_pic" />
                                </div>
                                <div class="pl-4">
                                    <p class="font-medium">{{$item->user->nom}} {{$item->user->prenom}}</p>
                                    <p class="text-xs leading-3 text-gray-600 pt-2">{{$item->poste}}</p>
                                </div>
                            </div>
                        </td>
                        <td class="pl-12">
                            @if ($item->validate == 0)
                            <p class="text-sm font-medium leading-none text-red-800">Non Valide</p>                                
                            @else
                            <p class="text-sm font-medium leading-none text-green-600">Valide</p>
                            @endif
                        </td>
                        <td class="pl-12">
                            <p class="font-medium">{{$item->titre}}</p>
                        </td>
                        <td class="pl-20 w-96">
                            <a href="{{route('verif.article.edit', $item->id)}}"><button class="bg_green px-6 py-3 rounded-lg">Analyser</button></a>
                        </td>
                    </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection