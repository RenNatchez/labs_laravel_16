@extends('layouts.admin')
@section('content')
<div class="w-full mx-auto container">
    {{-- header --}}
    <div class="flex items-center justify-between w-full my-4 pl-4 sm:pr-4">
        <div class="mr-6">
            <h2
                class="text-3xl text_green md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate">
                Modif testimonial</h2>
        </div>
        <div class="flex items-center">
            <a href="{{route('testimonial.index')}}">
                <button
                    class="bg-blue-600 px-5 py-2 text-lg shadow-sm font-semibold tracking-wider text-white rounded-full hover:bg-gray-200 hover:text-black">
                    Annuler
                </button>
            </a>
        </div>
    </div>
    <hr class="border-b-2 border-gray-600 my-3">
    {{-- header end --}}
    <div>
        <form action="{{ route('testimonial.update', $testimonial->id) }}" method="post" enctype="multipart/form-data"
            class="d-flex flex-column align-items-center my-5">
            @csrf
            @method('PUT')
            <!-- Titre -->
            <div class=" sm:flex sm:justify-between flex-wrap">
                <div class="w-11/12  sm:w-5/12 sm:mx-0 mx-auto lg:w-3/12 my-6 border-b-2 border-green-400">
                    <x-label for="nom" />
                    <x-input placeholder='Entrer le nom' id="nom"
                        class="block mt-1 pl-3 w-full bg-gray-800 text_input py-3" type="texte" name="nom"
                        value="{{$testimonial->nom}}" required/>
                </div>
                <div class="w-11/12 sm:w-5/12 sm:mx-0 mx-auto lg:w-3/12 my-6 border-b-2 border-green-400">
                    <x-label for="prenom" />
                    <x-input placeholder='Entrer le prenom' id="prenom"
                        class="block mt-1 pl-3 w-full bg-gray-800 text_input py-3" type="texte" name="prenom"
                        value="{{$testimonial->prenom}}" required/>
                </div>
                <div class="w-11/12 sm:w-full sm:mx-0 mx-auto lg:w-3/12 my-6 border-b-2 border-green-400">
                    <x-label for="poste" />
                    <x-input placeholder='Entrer le poste' id="poste"
                        class="block mt-1 pl-3 w-full bg-gray-800 text_input py-3" type="texte" name="poste"
                        value="{{$testimonial->poste}}" required/>
                </div>
            </div>
            <!-- description -->
            <div class="w-11/12 sm:w-full my-6 mx-auto border-b-2 border-green-400">
                <x-label for="avis" />
                <x-input placeholder="Entrer l'avis" id="avis"
                    class="@error('avis') is-invalid @enderror block mt-1 pl-3 w-full bg-gray-800 text_input py-3" type="texte" name="avis"
                    value="{{$testimonial->avis}}" required/>
                    @error('avis')
                    <span class="feedback-invalid text-red-700">{{$message}}</span>
                @enderror

            </div>
            <div class="form-group">
                <label for="photo"
                    class="w-11/12 sm:w-full m-auto h-32 flex flex-col items-center justify-center px-4 py-6 bg_green text-gray-800 rounded-lg shadow-lg tracking-wide uppercase border border-green-700 cursor-pointer hover:text-white">
                    <i class="fas fa-cloud-upload-alt text-5xl" style="user-select: auto;"></i>
                    <h2 class="text-xl">Sélectionner une photo</h2>
                </label>
                <input type="file" class="hidden" id="photo" name="photo">
            </div>
            <button type="submit"
                class="mr-10 mt-10 bg_green px-16 py-2 text-lg shadow-sm font-semibold  tracking-wider text-gray-800 hover:text-white rounded-lg">Envoyer</button>
        </form>
    </div>
</div>


@endsection