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
            <a href="{{route('verif.membre')}}">
                <button
                    class="bg-blue-600 px-5 py-2 text-lg shadow-sm font-semibold tracking-wider text-white rounded-full hover:bg-gray-200 hover:text-black">
                    Annuler
                </button>
            </a>
        </div>
    </div>
    <hr class="border-b-2 border-gray-600 my-3">
    {{-- header end --}}
    <div class="bg-gray-900 h-96 w-10/12 mx-auto flex">
        <div class="my-auto flex  w-3/12 justify-center content-center		">
            <img class="" src="{{asset('image/'. $membre->photo)}}" alt="user_pic" />
        </div>
        <div class="my-auto flex  w-9/12 justify-center content-center text-gray-300">
            <div class="divide-y divide-light  px-10">
                <p class="text-2xl py-5 text-center">{{$membre->nom}} {{$membre->prenom}}</p>
                <p class="text-xl py-5 text-center">{{$membre->poste->nom}}</p>
                <p class="text-xl py-5 text-center">{{$membre->email}}</p>
                <p class="text-xl py-5 text-center">{{$membre->description}} </p>
            </div>
        </div>
    </div>
    <div class="w-10/12 mx-auto">
        <form action="{{ route('verif.membre.update', $membre->id) }}" method="post" enctype="multipart/form-data"
            class="d-flex flex-column align-items-center my-5">
            @csrf
            @method('PUT')
            <!-- role -->
            <div class="w-11/12 sm:w-full my-6 mx-auto">
                <div class="relative inline-block w-full text_input border-b-2 border-green-400">
                    <x-label for="role_id" />
                    <select name="role_id"
                        class="w-full h-10 pl-3 pr-6  border-none bg-gray-800 rounded-lg  focus:shadow-outline"
                        placeholder="Regular input">
                        @foreach ($role as $item)
                        <option value="{{$item->id}}">{{$item->nom}}</option>
                        @endforeach
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                    </div>
                </div>
            </div>
            <div class="flex w-100 justify-end">
                <button type="submit"
                    class="mr-10 mt-10 bg_green px-16 py-2 text-lg shadow-sm font-semibold  tracking-wider text-gray-800 hover:text-white rounded-lg">valider</button>
            </div>
        </form>
        <form action="{{route('verif.membre.destroy', $membre->id)}}" method="post" class="text-right pr-7">
            @csrf
            @method('DELETE')
            <button
                class="bg-red-500 px-3 lg:px-10  py-1 lg:py-3 mr-3 text-xs lg:text-sm shadow-sm font-semibold tracking-wider text-white rounded-lg">Supprimer</button>
        </form>
    </div>
















    €


</div>


@endsection
