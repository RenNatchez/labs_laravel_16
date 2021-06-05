@extends('layouts.admin')
@section('content')
<div class="w-full mx-auto container">
    {{-- header --}}
    <div class="flex items-center justify-between w-full my-4 pl-4 sm:pr-4">
        <div class="mr-6">
            <h2
            class="text-3xl text_green md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate">
            Voir vidéo</h2>
        </div>
        <div class="flex items-center">
            <a href="{{route('video.index')}}">
                <button
                class="bg-blue-600 px-5 py-2 text-lg shadow-sm font-semibold tracking-wider text-white rounded-full hover:bg-gray-200 hover:text-black">
                Retour
            </button>
        </a>
    </div>
</div>
<hr class="border-b-2 border-gray-600 my-3">
{{-- header end --}}
<div class="">
        <iframe class="w-10/12 sm:w-1/2 h-96 mx-auto" src="{{$video->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
@endsection