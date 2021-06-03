@extends('layouts.admin')
@section('content')
<div class="w-full mx-auto container">
    {{-- header --}}
    <div class="flex items-center justify-between w-full my-4 pl-4 sm:pr-4">
        <div class="mr-6">
            <h2
                class="text-3xl text_green md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate">
                Services</h2>
            <div class="font-base tracking-tight text-gray-600">Ajouter vos services afin de présenter votre
                entreprise</div>
        </div>
        <div class="flex items-center">
            <a href="{{route('service.create')}}">
                <button class="bg_green px-5 py-2 text-lg shadow-sm font-semibold tracking-wider text-white rounded-full hover:bg-gray-200 hover:text-black">
                    Ajouter
                </button>
            </a>
        </div>
    </div>
    <hr class="border-b-2 border-gray-600 my-3">
    {{-- header end --}}
    @forelse ($service as $serv)
        <div class="p-3 h-24 w-11/12 sm:w-full my-5 mx-auto bg-gray-900 rounded-lg flex">
            <div class="w-3/4 sm:1/2">
                <h2 class=" text_green mb-3">{{$serv->titre}} <i class="ml-5 {{$serv->icone->class}}"></i></h2>
                <p class="text-xs text-white">{{$serv->description}}</p>
            </div>
            <div class="w-1/4 sm:1/2 sm:flex justify-end my-auto">
                <a href="{{ route('service.edit', $serv->id) }}">
                    <button
                        class="bg_green px-3 lg:px-10  py-1 lg:py-3 mr-3 text-xs lg:text-sm shadow-sm font-semibold tracking-wider text-white rounded-lg">Modifier</button>
                </a>
                    <form action="{{route('service.destroy', $serv->id)}}" method="post">
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
