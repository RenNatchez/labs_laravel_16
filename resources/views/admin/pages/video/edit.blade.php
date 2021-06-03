@extends('layouts.admin')
@section('content')
<div class="w-full mx-auto container">
    {{-- header --}}
    <div class="flex items-center justify-between w-full my-4 pl-4 sm:pr-4">
        <div class="mr-6">
            <h2
                class="text-3xl text_green md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate">
                Modifier vidéo</h2>
        </div>
        <div class="flex items-center">
            <a href="{{route('video.index')}}">
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
        <form action="{{route('video.update', $video->id)}}" method="post" enctype="multipart/form-data"
            class="d-flex flex-column align-items-center my-5">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="miniature"
                    class="w-11/12 sm:w-full m-auto h-32 flex flex-col items-center justify-center px-4 py-6 bg_green text-gray-800 rounded-lg shadow-lg tracking-wide uppercase border border-green-700 cursor-pointer hover:text-white">
                    <i class="fas fa-cloud-upload-alt text-5xl" style="user-select: auto;"></i>
                    <h2 class="text-xl">Sélectionner une photo pour la miniature</h2>
                </label>
                <input type="file" class="hidden" id="miniature" name="miniature" >
            </div>

            <!-- Titre -->
            <div class="w-11/12 sm:w-full my-6 mx-auto border-b-2 border-green-400">
                <x-label for="video" />
                <x-input placeholder="Entrer l'URL de votre vidéo" id="video"
                class="block mt-1 pl-3 w-full bg-gray-800 text_input py-3" type="texte"
                name="video" value="{{$video->video}}" />
            </div>
        </div> 
    <div class="flex w-100 justify-end">
                <button type="submit" class="mr-10 mt-10 bg_green px-16 py-2 text-lg shadow-sm font-semibold  tracking-wider text-gray-800 hover:text-white rounded-lg">Envoyer</button>
            </div>
        </form>
    </div>
</div>


@endsection