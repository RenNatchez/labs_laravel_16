@extends('layouts.admin')
@section('content')
<div class="w-full mx-auto container">
    {{-- header --}}
    <div class="flex items-center justify-between w-full my-4 pl-4 sm:pr-4">
        <div class="mr-6">
            <h2
                class="text-3xl text_green md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate">
                Ajout d'un article</h2>
        </div>
        <div class="flex items-center">
            <a href="{{route('articles.index')}}">
                <button
                    class="bg-blue-600 px-5 py-2 text-lg shadow-sm font-semibold tracking-wider text-white rounded-full hover:bg-gray-200 hover:text-black">
                    Annuler
                </button>
            </a>
        </div>
    </div>
    <hr class="border-b-2 border-gray-600 my-3">
    {{-- header end --}}
    {<div>
        <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data"
            class="d-flex flex-column align-items-center my-5">
            @csrf
            <div class="flex">
                <div class="form-group w-11/12">
                    <label for="image"
                        class="w-11/12 sm:w-full m-auto h-32 flex flex-col items-center justify-center px-4 py-6 bg_green text-gray-800 rounded-lg shadow-lg tracking-wide uppercase border border-green-700 cursor-pointer hover:text-white">
                        <i class="fas fa-cloud-upload-alt text-5xl" style="user-select: auto;"></i>
                        <h2 class="text-xl">Sélectionner une photo</h2>
                    </label>
                    <input type="file" class="hidden" id="image" name="image" >
                </div>
                <div class="11/12">
                    <!-- Name -->
                    <div class="w-11/12 sm:w-full my-6 mx-auto border-b-2 border-green-400">
                            <x-label for="titre" />
                            <x-input placeholder='Entrer votre titre' id="titre"
                                class="block mt-1 w-full bg-gray-800 text_input py-3 pl-3" type="titre"
                                name="titre" />
                        </div>
                    </div>
                    {{-- categorie --}}
                    <div class="w-11/12 sm:w-full my-6 mx-auto">
                        <div class="relative inline-block w-full text_input border-b-2 border-green-400">
                            <x-label for="icone_id" />
                            <select name="icone_id" class="w-full h-10 pl-3 pr-6  border-none bg-gray-800 rounded-lg  focus:shadow-outline" placeholder="Regular input">
                                @foreach ($categorie as $icon)
                                <option value="{{$icon->id}}">{{$icon->nom}}</option> 
                                @endforeach
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="flex w-100 justify-end">
                <button type="submit" class="mr-10 mt-10 bg_green px-16 py-2 text-lg shadow-sm font-semibold  tracking-wider text-gray-800 hover:text-white rounded-lg">Envoyer</button>
            </div>
        </form>
    </div>
</div>


@endsection