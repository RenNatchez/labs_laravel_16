@extends('layouts.admin')
@section('content')
<div class="w-full mx-auto container">
    {{-- header --}}
    <div class="flex items-center justify-between w-full my-4 pl-4 sm:pr-4">
        <div class="mr-6">
            <h2
                class="text-3xl text_green md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate">
                Carousel</h2>
            <div class="font-base tracking-tight text-gray-600">Ajouter vos images afin de présenter votre
                entreprise({{$count}}/6)</div>
        </div>
        <div class="flex items-center">
            <a href="{{route('carousel.create')}}">
                <button class="bg_green px-5 py-2 text-lg shadow-sm font-semibold tracking-wider text-white rounded-full hover:bg-gray-200 hover:text-black">
                    Ajouter
                </button>
            </a>
        </div>
    </div>
    <hr class="border-b-2 border-gray-600 my-3">
    {{-- header end --}}
    {{-- card --}}
    <div class="flex flex-wrap justify-around">
        @forelse ($carousels as $carousel)
        <div class="bg-gray-900 shadow-md lg:w-5/12 rounded-3xl p-2 my-1">
            <div class="lg:flex">
                <div class=" h-full w-full lg:h-48 lg:w-60   lg:mb-0 mb-3">
                    <img src="{{asset('image/'. $carousel->image)}}"
                        alt="Just a flower" class=" w-full  object-scale-down lg:object-cover  lg:h-48 rounded-2xl">
                </div>
                <div class="flex-auto ml-3 justify-evenly py-2 flex flex-col">
                    <div class="flex flex-wrap ">
                        <div class="w-full flex-none text-xs text-purple-800 font-medium ">
                            Image {{$loop->iteration}}
                        </div>
                        <h4 class="flex-auto text-sm font-medium text-white">{{$carousel->texte}}</h4>
                    </div>
                    @if ($carousel->start == 1)
                    <h4 class=" text-sm font-medium text-white"> Image de départ</h4>
                    @endif
                    <div class="flex pb-2 border-t border-gray-200 "></div>
                    <div class="flex space-x-3 text-xs font-medium">
                        <div class="flex-auto flex justify-around space-x-3">
                            <a href="{{ route('carousel.edit', $carousel->id) }}">
                                <button
                                    class="bg_green px-10 py-3 text-sm shadow-sm font-semibold tracking-wider text-white rounded-full">Modifier</button>
                            </a>
                                <form action="{{route('carousel.destroy', $carousel)}}" method="post">
                                    @csrf
                                @method('DELETE')
                                <button
                                class="bg-red-500 px-10 py-3 text-sm shadow-sm font-semibold tracking-wider text-white rounded-full">Supprimer</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        @endforelse

    </div>
</div>
@endsection
