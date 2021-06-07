@extends('layouts.admin')
@section('content')
<div class="w-full mx-auto container">
    {{-- header --}}
    <div class="flex items-center justify-between w-full my-4 pl-4 sm:pr-4">
        <div class="mr-6">
            <h2
                class="text-3xl text_green md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate">
                Newsletter</h2>
            <div class="font-base tracking-tight text-gray-600">Gérer vos inscriptions a la newsletter</div>
        </div>
    </div>
    <hr class="border-b-2 border-gray-600 my-3">
    {{-- header end --}}
    @forelse ($newsletter as $news)
        <div class="p-3 h-24 w-11/12 sm:w-full my-5 mx-auto bg-gray-900 rounded-lg flex">
            <div class="w-3/4 sm:1/2">
                <h2 class=" text_green mb-3"> Numéro d'inscription : {{$news->id}}</i></h2>
                <p class="text-gray-300 text-xl">{{$news->mail}}</p>
            </div>
            <div class="w-1/4 sm:1/2 sm:flex justify-end my-auto">
                    <form action="{{route('newsletter.destroy', $news->id)}}" method="post">
                        @csrf
                    @method('DELETE')
                    <button
                    class="bg-red-500 px-3 lg:px-10  py-1 lg:py-3 mr-3 text-xs lg:text-sm shadow-sm font-semibold tracking-wider text-white rounded-lg">Supprimer</button>
                    </form>
            </div>
        </div>
    @empty
    <h2
    class="mt-10  text-center  text-3xl text_green md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate">
    Aucune Inscription</h2>

    @endforelse
</div>
@endsection
