@extends('layouts.admin')
@section('content')
<div class="w-full mx-auto container">
    {{-- header --}}
    <div class="flex items-center justify-between w-full my-4 pl-4 sm:pr-4">
        <div class="mr-6">
            <h2
                class="text-3xl text_green md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate">
                Contenus</h2>
            <div class="font-base tracking-tight text-gray-600">Gérer Le contenu des différentes sections du site</div>
        </div>
    </div>
    <hr class="border-b-2 border-gray-600 my-3">
    {{-- header end --}}
    <div class="flex flex-wrap justify-around">
        <a href="{{route('contenu.update.site')}}" class="w-full sm:w-4/12 m-10">
            <div class="bg_green text-center py-16 text-gray-800 hover:text-green-400 hover:bg-gray-900 rounded-2xl">
                <h2 class="uppercase text-4xl">Site</h2>
            </div>    
        </a>
        <a href="{{route('contenu.update.contact')}}" class="w-full sm:w-4/12 m-10">
            <div class="bg_green text-center py-16 text-gray-800 hover:text-green-400 hover:bg-gray-900 rounded-2xl">
                <h2 class="uppercase text-4xl">Contact</h2>
            </div>    
        </a>
    </div>
</div>
@endsection
