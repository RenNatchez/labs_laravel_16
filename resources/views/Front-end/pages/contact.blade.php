@extends('layouts.front')
@section('content')
@include('front-end.components.currentpage')
<p class="hidden" id="adresse_2">{{$maps->longitude}}</p>
<p class="hidden" id="adresse_1">{{$maps->latitude}}</p>
<div class="map" id="map-area"></div>

@include('front-end.components.contact')
@endsection
