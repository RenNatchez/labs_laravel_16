@extends('layouts.admin')
@section('content')
<div class="w-full mx-auto container">
    {{-- header --}}
    <div class="flex items-center justify-between w-full my-4 pl-4 sm:pr-4">
        <div class="mr-6">
            <h2
                class="text-3xl text_green md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate">
                Contenu du contact</h2>
            <div class="font-base tracking-tight text-gray-600">Gérer Le contenu du blog</div>
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
        <form action="{{ route('contenu.edit.contact', $contenu->id) }}" method="post"
            class="d-flex flex-column align-items-center my-5">
            @csrf
            @method('PUT')
            <!-- titre contact -->
            <div class="w-11/12 sm:w-full my-6 mx-auto border-b-2 border-green-400">
                <span class="text-gray-400 ml-12 pb-10">{{$contenu->contact_titre}}</span>
                <x-label for="contact_titre" />
                <x-input placeholder='Entrer le titre du contact' id="contact_titre"
                    class="block mt-1 w-full bg-gray-800 text_input py-3" type="texte" name="contact_titre"
                    value='{{$contenu->contact_titre}}' />
            </div>
            <!-- description contact -->
            <div class="w-11/12 sm:w-full my-6 mx-auto border-b-2 border-green-400">
                <span class="text-gray-400 ml-12 pb-10">{{$contenu->contact_description}}</span>
                <x-label for="contact_description" />
                <x-input placeholder='Entrer le description du contact' id="contact_description"
                    class="block mt-1 w-full bg-gray-800 text_input py-3" type="texte" name="contact_description"
                    value='{{$contenu->contact_description}}' />
            </div>
            <!-- sous titre contact -->
            <div class="w-11/12 sm:w-full my-6 mx-auto border-b-2 border-green-400">
                <span class="text-gray-400 ml-12 pb-10">{{$contenu->contact_soustitre}}</span>
                <x-label for="contact_soustitre" />
                <x-input placeholder='Entrer le sous titre du contact' id="contact_soustitre"
                    class="block mt-1 w-full bg-gray-800 text_input py-3" type="texte" name="contact_soustitre"
                    value='{{$contenu->contact_soustitre}}' />
            </div>
            <!-- rue contact -->
            <div class="w-11/12 sm:w-full my-6 mx-auto border-b-2 border-green-400">
                <span class="text-gray-400 ml-12 pb-10">{{$contenu->contact_rue}}</span>
                <x-label for="contact_rue" />
                <x-input placeholder='Entrer votre adresse' id="contact_rue"
                    class="block mt-1 w-full bg-gray-800 text_input py-3" type="texte" name="contact_rue"
                    value='{{$contenu->contact_rue}}' />
            </div>
            <!-- ville contact -->
            <div class="w-11/12 sm:w-full my-6 mx-auto border-b-2 border-green-400">
                <span class="text-gray-400 ml-12 pb-10">{{$contenu->contact_ville}}</span>
                <x-label for="contact_ville" />
                <x-input placeholder='Entrer votre  ville' id="contact_ville"
                    class="block mt-1 w-full bg-gray-800 text_input py-3" type="texte" name="contact_ville"
                    value='{{$contenu->contact_ville}}' />
            </div>
            <!-- telephone contact -->
            <div class="w-11/12 sm:w-full my-6 mx-auto border-b-2 border-green-400">
                <span class="text-gray-400 ml-12 pb-10">{{$contenu->contact_telephone}}</span>
                <x-label for="contact_telephone" />
                <x-input placeholder='Entrer votre telephone' id="contact_telephone"
                    class="block mt-1 w-full bg-gray-800 text_input py-3" type="texte" name="contact_telephone"
                    value='{{$contenu->contact_telephone}}' />
            </div>
            <!-- email contact -->
            <div class="w-11/12 sm:w-full my-6 mx-auto border-b-2 border-green-400">
                <span class="text-gray-400 ml-12 pb-10">{{$contenu->contact_email}}</span>
                <x-label for="contact_email" />
                <x-input placeholder='Entrer votre mail' id="contact_email"
                    class="block mt-1 w-full bg-gray-800 text_input py-3" type="texte" name="contact_email"
                    value='{{$contenu->contact_email}}' />
            </div>
            <button type="submit" class="mr-10 mt-10 bg_green px-16 py-2 text-lg shadow-sm font-semibold  tracking-wider text-gray-800 hover:text-white rounded-lg">Envoyer</button>
        </form>
    </div>
</div>
@endsection
