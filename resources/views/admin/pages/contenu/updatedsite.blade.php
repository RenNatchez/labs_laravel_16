@extends('layouts.admin')
@section('content')
<div class="w-full mx-auto container">
    {{-- header --}}
    <div class="flex items-center justify-between w-full my-4 pl-4 sm:pr-4">
        <div class="mr-6">
            <h2
                class="text-3xl text_green md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate">
                Contenu du site</h2>
            <div class="font-base tracking-tight text-gray-600">Gérer Le contenu du site, utiliser les parenthése pour
                mettre les mots en valeur</div>
        </div>
        <div class="flex items-center">
            <a href="{{route('contenu.index')}}">
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
        <form action="{{ route('contenu.edit.site', $contenu->id) }}" method="post"
            class="d-flex flex-column align-items-center my-5">
            @csrf
            @method('PUT')
            <!-- titre 1 -->
            <div class="w-11/12 sm:w-full my-6 mx-auto border-b-2 border-green-400">
                <span class="text-gray-400 ml-12 pb-10">{{$contenu->titre_1}}</span>
                <x-label for="titre_1" />
                <x-input placeholder='Entrer le titre 1 ' id="titre_1"
                    class="@error('titre_1') is-invalid @enderror block mt-1 w-full bg-gray-800 text_input py-3" type="texte" name="titre_1"
                    value='{{$contenu->titre_1}}' required />
                @error('titre_1')
                <span class="feedback-invalid text-red-700">Le texte est trop long</span>
                @enderror

            </div>
            <!-- titre 2 -->
            <div class="w-11/12 sm:w-full my-6 mx-auto border-b-2 border-green-400">
                <span class="text-gray-400 ml-12 pb-10">{{$contenu->titre_2}}</span>
                <x-label for="titre_2" />
                <x-input placeholder='Entrer le titre 2 ' id="titre_2"
                    class="@error('titre_2') is-invalid @enderror block mt-1 w-full bg-gray-800 text_input py-3" type="texte" name="titre_2"
                    value='{{$contenu->titre_2}}' required />
                @error('titre_2')
                <span class="feedback-invalid text-red-700">Le texte est trop long</span>
                @enderror

            </div>
            <!-- titre 3 -->
            <div class="w-11/12 sm:w-full my-6 mx-auto border-b-2 border-green-400">
                <span class="text-gray-400 ml-12 pb-10">{{$contenu->titre_3}}</span>
                <x-label for="titre_3" />
                <x-input placeholder='Entrer le titre 3 ' id="titre_3"
                    class="@error('titre_3') is-invalid @enderror block mt-1 w-full bg-gray-800 text_input py-3" type="texte" name="titre_3"
                    value='{{$contenu->titre_3}}' required />
                @error('titre_3')
                <span class="feedback-invalid text-red-700">Le texte est trop long</span>
                @enderror

            </div>
            <!-- titre 4 -->
            <div class="w-11/12 sm:w-full my-6 mx-auto border-b-2 border-green-400">
                <span class="text-gray-400 ml-12 pb-10">{{$contenu->titre_4}}</span>
                <x-label for="titre_4" />
                <x-input placeholder='Entrer le titre 4 ' id="titre_4"
                    class="@error('titre_4') is-invalid @enderror block mt-1 w-full bg-gray-800 text_input py-3" type="texte" name="titre_4"
                    value='{{$contenu->titre_4}}' required />
                @error('titre_4')
                <span class="feedback-invalid text-red-700">Le texte est trop long</span>
                @enderror

            </div>
            <!-- titre 5 -->
            <div class="w-11/12 sm:w-full my-6 mx-auto border-b-2 border-green-400">
                <span class="text-gray-400 ml-12 pb-10">{{$contenu->titre_5}}</span>
                <x-label for="titre_5" />
                <x-input placeholder='Entrer le titre 5 ' id="titre_5"
                    class="@error('titre_5') is-invalid @enderror block mt-1 w-full bg-gray-800 text_input py-3" type="texte" name="titre_5"
                    value='{{$contenu->titre_5}}' required />
                @error('titre_5')
                <span class="feedback-invalid text-red-700">Le texte est trop long</span>
                @enderror

            </div>
            <!-- titre 6 -->
            <div class="w-11/12 sm:w-full my-6 mx-auto border-b-2 border-green-400">
                <span class="text-gray-400 ml-12 pb-10">{{$contenu->titre_6}}</span>
                <x-label for="titre_6" />
                <x-input placeholder='Entrer le titre 6 ' id="titre_6"
                    class="@error('titre_6') is-invalid @enderror block mt-1 w-full bg-gray-800 text_input py-3" type="texte" name="titre_6"
                    value='{{$contenu->titre_6}}' required />
                @error('titre_6')
                <span class="feedback-invalid text-red-700">Le texte est trop long</span>
                @enderror

            </div>
            <!-- titre 7 -->
            <div class="w-11/12 sm:w-full my-6 mx-auto border-b-2 border-green-400">
                <span class="text-gray-400 ml-12 pb-10">{{$contenu->titre_7}}</span>
                <x-label for="titre_7" />
                <x-input placeholder='Entrer le titre 7 ' id="titre_7"
                    class="@error('titre_7') is-invalid @enderror block mt-1 w-full bg-gray-800 text_input py-3" type="texte" name="titre_7"
                    value='{{$contenu->titre_7}}' required /> 
                    @error('titre_7')
                <span class="feedback-invalid text-red-700">Le texte est trop long</span>
                @enderror

            </div>
            <!-- description 1 -->
            <div class="w-11/12 sm:w-full my-6 mx-auto border-b-2 border-green-400">
                <span class="text-gray-400 ml-12 pb-10">{{$contenu->description_1}}</span>
                <x-label for="description_1" />
                <textarea placeholder='Contenu' id="description_1" value='{{$contenu->description_1}}'
                    class=" @error('description_1') is-invalid @enderror mt-1 w-full bg-gray-800 border-none text_input rounded-lg" type="text" required
                    name="description_1">{{$contenu->description_1}}'</textarea>
                @error('description_1')
                <span class="feedback-invalid text-red-700">Le texte est trop long</span>
                @enderror
            </div>
            <!-- description 2 -->
            <div class="w-11/12 sm:w-full my-6 mx-auto border-b-2 border-green-400">
                <span class="text-gray-400 ml-12 pb-10">{{$contenu->description_2}}</span>
                <x-label for="description_2" />
                <textarea placeholder='description_2' id="contenu" value='{{$contenu->description_2}}'
                    class="@error('description_2') is-invalid @enderror  mt-1 w-full bg-gray-800 border-none text_input rounded-lg" type="text" required
                    name="description_2">{{$contenu->description_2}}'</textarea>
                @error('description_2')
                <span class="feedback-invalid text-red-700">Le texte est trop long</span>
                @enderror
            </div>
            <!-- description 3 -->
            <div class="w-11/12 sm:w-full my-6 mx-auto border-b-2 border-green-400">
                <span class="text-gray-400 ml-12 pb-10">{{$contenu->description_3}}</span>
                <x-label for="description_3" />
                <x-input placeholder='Entrer le titre 7 ' id="description_3"
                    class="@error('description_3') is-invalid @enderror block mt-1 w-full bg-gray-800 text_input py-3" type="texte" name="description_3" required
                    value='{{$contenu->description_3}}' />
                @error('description_3')
                <span class="feedback-invalid text-red-700">Le texte est trop long</span>
                @enderror
            </div>
            <button type="submit"
                class="mr-10 mt-10 bg_green px-16 py-2 text-lg shadow-sm font-semibold  tracking-wider text-gray-800 hover:text-white rounded-lg">Envoyer</button>
        </form>
    </div>
</div>
@endsection
