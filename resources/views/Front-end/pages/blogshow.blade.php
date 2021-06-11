@extends('layouts.front')
@section('content')
@include('front-end.components.currentpage')
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                @include('front-end.components.articleshow')
            </div>
            <!-- Sidebar area -->
            @include('front-end.components.navblog')
        </div>
    </div>
</div>

@endsection
