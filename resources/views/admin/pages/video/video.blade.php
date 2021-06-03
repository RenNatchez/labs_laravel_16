@extends('layouts.admin')
@section('content')
<div class="w-full mx-auto container">
    {{-- header --}}
    <div class="flex items-center justify-between w-full my-4 pl-4 sm:pr-4">
        <div class="mr-6">
            <h2
                class="text-3xl text_green md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate">
                Vidéo</h2>
            <div class="font-base tracking-tight text-gray-600">Gérer votre spot vidéo</div>
        </div>
        <div class="flex items-center">
            </a>
        </div>
    </div>
    <hr class="border-b-2 border-gray-600 my-3">
    {{-- header end --}}
    <div class="lg:flex">
        <img class="lg:w-2/4 w-11/12 mx-auto rounded-lg mb-5" src="{{asset('image/'. $video->miniature)}}" alt="bug">
        <div class="w-2/4 sm:h-12/12 flex lg:flex-col justify-around mx-auto">
            <a href="{{ route('service.edit', $video->id) }}" class="mx-auto">
                <button
                    class="bg-purple-400 px-3 lg:px-32  py-1 lg:py-10 mr-3 text-xs lg:text-sm shadow-sm font-semibold tracking-wider text-white rounded-lg">Voir</button>
            </a>
            <a href="{{ route('service.edit', $video->id) }}" class="mx-auto">
                <button
                    class="bg_green px-3 lg:px-32  py-1 lg:py-10 mr-3 text-xs lg:text-sm shadow-sm font-semibold tracking-wider text-white rounded-lg">Modifier</button>
            </a>
</div>
    </div>
</div>
@endsection
