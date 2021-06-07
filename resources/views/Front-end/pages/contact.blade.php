@extends('layouts.front')
@section('content')
@include('front-end.components.currentpage')
<h1 class="hidden" id="adresse_2">{{$maps->longitude}}</h1>
<h1 class="hidden" id="adresse_1">{{$maps->latitude}}</h1>
<div class="map" id="map-area"></div>

@include('front-end.components.contact')
@endsection
