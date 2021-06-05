@extends('layouts.admin')
@section('content')
<div class="w-full mx-auto container">
    {{-- header --}}
    <div class="flex items-center justify-between w-full my-4 pl-4 sm:pr-4">
        <div class="mr-6">
            <h2
                class="text-3xl text_green md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate">
                Testimonial</h2>
            <div class="font-base tracking-tight text-gray-600">Gérer vos testimonial afin de présenter votre
                entreprise</div>
        </div>
        <div class="flex items-center">
            <a href="{{route('testimonial.create')}}">
                <button class="bg_green px-5 py-2 text-lg shadow-sm font-semibold tracking-wider text-white rounded-full hover:bg-gray-200 hover:text-black">
                    Ajouter
                </button>
            </a>
        </div>
    </div>
    <hr class="border-b-2 border-gray-600 my-3">
    {{-- header end --}}
    @forelse ($testimonial as $testi)
        <div class="p-3 h-34 w-11/12 sm:w-full my-5 mx-auto bg-gray-900 rounded-lg flex">
            <div class="w-3/4 sm:1/2">
                <div class="flex items-center pb-3">
                    <img class="mr-5" width="50" height="50" src="{{asset('image/'.$testi->photo)}}" alt="">
                    <h2 class=" text_green ">{{$testi->prenom}}  {{$testi->nom}}, <span class="text-gray-400">{{$testi->poste}}</span></h2>
                </div>
                <p class="text-xs text-white">{{$testi->avis}}</p>
            </div>
            <div class="w-1/4 sm:1/2 sm:flex justify-end my-auto">
                <a href="{{ route('testimonial.edit', $testi->id) }}">
                    <button
                        class="bg_green px-3 lg:px-10  py-1 lg:py-3 mr-3 text-xs lg:text-sm shadow-sm font-semibold tracking-wider text-white rounded-lg">Modifier</button>
                </a>
                    <form action="{{route('testimonial.destroy', $testi->id)}}" method="post">
                        @csrf
                    @method('DELETE')
                    <button
                    class="bg-red-500 px-3 lg:px-10  py-1 lg:py-3 mr-3 text-xs lg:text-sm shadow-sm font-semibold tracking-wider text-white rounded-lg">Supprimer</button>
                    </form>

            </div>
        </div>
    @empty
        
    @endforelse
</div>
@endsection
