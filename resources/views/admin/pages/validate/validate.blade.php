@extends('layouts.admin')
@section('content')
<div class="w-full mx-auto container">
    {{-- header --}}
    <div class="flex items-center justify-between w-full my-4 pl-4 sm:pr-4">
        <div class="mr-6">
            <h2
                class="text-3xl text_green md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate">
                Validate</h2>
            <div class="font-base tracking-tight text-gray-600">Gérer les multiples demandes des différentes sections du site</div>
        </div>
    </div>
    <hr class="border-b-2 border-gray-600 my-3">
    {{-- header end --}}
    <div class="flex flex-wrap justify-around">
        <a href="{{route('verif.membre')}}" class="w-full sm:w-4/12 m-10">
            <div class="bg_green text-center py-16 text-gray-800 hover:text-green-400 hover:bg-gray-900 rounded-2xl">
                <h2 class="uppercase text-4xl">Membres</h2>
            </div>    
        </a>
        <a href="{{route('verif.article')}}" class="w-full sm:w-4/12 m-10">
            <div class="bg_green text-center py-16 text-gray-800 hover:text-green-400 hover:bg-gray-900 rounded-2xl">
                <h2 class="uppercase text-4xl">Articles</h2>
            </div>    
        </a>
        <a href="{{route('verif.commentaire')}}" class="w-full sm:w-4/12 m-10">
            <div class="bg_green text-center py-16 text-gray-800 hover:text-green-400 hover:bg-gray-900 rounded-2xl">
                <h2 class="uppercase text-4xl">Commentaires</h2>
            </div>    
        </a>
    </div>
</div>
@endsection
