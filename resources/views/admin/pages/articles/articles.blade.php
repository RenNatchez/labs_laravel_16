@extends('layouts.admin')
@section('content')
<div class="w-full mx-auto container">
    {{-- header --}}
    <div class="flex items-center justify-between w-full my-4 pl-4 sm:pr-4">
        <div class="mr-6">
            <h2
                class="text-3xl text_green md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate">
                Articles</h2>
            <div class="font-base tracking-tight text-gray-600">Gérer vos articles</div>
        </div>
        <div class="flex items-center">
            <a href="{{route('articles.create')}}">
                <button class="bg_green px-5 py-2 text-lg shadow-sm font-semibold tracking-wider text-white rounded-full hover:bg-gray-200 hover:text-black">
                    Ajouter
                </button>
            </a>
        </div>
    </div>
    <hr class="border-b-2 border-gray-600 my-3">
    {{-- header end --}}
    {{-- card --}}
    @forelse ($articles->where('delete',0) as $article)
    <div class="p-3 w-11/12 sm:w-full my-5 mx-auto bg-gray-900 rounded-lg">
        <div class="flex">
            <div class="w-3/4 sm:1/2">
                <h2 class=" text_green mb-3"> article : {{$article->id}}</i></h2>
                <p class="text-gray-300 text-4xl mt-5">{{$article->titre}}</p>
                <p class="text-gray-600 ny-2">
                    <span>{{$article->categorie->nom }}</span>
                    <span> || </span>
                    <span>
                    </span>
                    @forelse ($article->tags as $tag)
                    <span>{{$tag->nom}}</span>
                    @empty
                    <span>Aucun Tag</span>
                    @endforelse
                </p>
            </div>
            <div class="w-1/4 sm:1/2 my-auto text-right">
                <a href="{{ route('articles.edit', $article->id) }}">
                    <button
                        class="bg_green px-3 lg:px-10  py-1 lg:py-3 mr-3 my-2 text-xs lg:text-sm shadow-sm font-semibold tracking-wider text-white rounded-lg">Modifier</button>
                </a>
                <form action="{{route('articles.destroy', $article->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button
                    class="bg-red-500 px-3 lg:px-10  py-1 lg:py-3 mr-3 my-2 text-xs lg:text-sm shadow-sm font-semibold tracking-wider text-white rounded-lg">Supprimer</button>
                </form>
            </div>
        </div>
        <img width="450" class="pb-5" src='{{ asset("image/blog/".$article->image) }}' alt="">
        <p class="text-gray-300 text-sm">{{$article->contenu}}</p>
    </div>
    @empty
<h2
class="mt-10  text-center  text-3xl text_green md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate">
Aucune Inscription</h2>

@endforelse






</div>
@endsection
