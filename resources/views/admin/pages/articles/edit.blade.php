@extends('layouts.admin')
@section('content')
<div class="w-full mx-auto container">
    {{-- header --}}
    <div class="flex items-center justify-between w-full my-4 pl-4 sm:pr-4">
        <div class="mr-6">
            <h2
                class="text-3xl text_green md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate">
                Modifier un article</h2>
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
    <div>
        <form action="{{ route('articles.update', $article) }}" method="post" enctype="multipart/form-data" class="my-5">
            @csrf
            @method('PUT')
            <div class="sm:flex justify-between items-center">
                <div class="form-group sm:w-5/12">
                    <label for="image"
                        class="w-full sm:w-full m-au-to h-44 flex flex-col items-center justify-center px-4 py-6 bg_green text-gray-800 rounded-lg shadow-lg tracking-wide uppercase border border-green-700 cursor-pointer hover:text-white">
                        <i class="fas fa-cloud-upload-alt text-5xl" style="user-select: auto;"></i>
                        <h2 class="text-xl">Sélectionner une photo</h2>
                    </label>
                    <input type="file" class="hidden" id="image" name="image" required>
                </div>
                <div class="sm:w-5/12 flex flex-col">
                    <div class="w-12/12  my-6 border-b-2 border-green-400">
                        <x-label for="titre" />
                        <x-input placeholder='Entrer votre titre' id="titre"
                            class="@error('titre') is-invalid @enderror block mt-1 w-full bg-gray-800 text_input py-3 pl-3" type="titre" name="titre" value='{{$article->titre}}' required/>
                            @error('titre')
                            <span class="feedback-invalid text-red-700">{{$message}}</span>
                        @enderror
                        </div>
                    <div class="w-12/12  my-6 border-b-2 border-green-400">
                        <x-label for="categorie" />
                        <select name="categorie" class="w-full h-11 pl-3 pr-6 text_input border-none bg-gray-800 rounded-lg  focus:shadow-outline" placeholder="categorie">
                            @foreach ($categorie as $item)
                            <option value="{{$item->id}}">{{$item->nom}}</option> 
                            @endforeach
                        </select>
                        </div>
                </div>
            </div>
            <div class="my-2 border-b-2 border-green-400">
                <x-label for="contenu" />
                <textarea placeholder='Contenu' id="contenu" value='{{$article->contenu}}' style="height: 150px;"
                    class=" mt-1 w-full bg-gray-800 border-none text_input rounded-lg @error('contenu') is-invalid @enderror"
                    type="text" required name="contenu">{{$article->contenu}} </textarea>
                    @error('contenu')
                    <span class="feedback-invalid text-red-700">{{$message}}</span>
                @enderror

                </div>
                {{-- checkbox --}}
                <div class="flex items-center pt-10 form-group">
                    @foreach ($tags as $tag)
                    <input id="tags" value='{{$tag->id}}' name="tags[]" type="checkbox" class=" h-4 w-4 text-green-400 border-gray-300">
                    <span for="tags" class="mx-3 block text-sm font-medium text-gray-400">{{Str::upper($tag->nom)}}</span>
                    @endforeach
                    
                
                </div>
            <div class="flex w-100 justify-end">
                <button type="submit"
                    class="mr-10 mt-10 bg_green px-16 py-2 text-lg shadow-sm font-semibold  tracking-wider text-gray-800 hover:text-white rounded-lg">Envoyer</button>
            </div>
        </form>
    </div>
</div>


@endsection
