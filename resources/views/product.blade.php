<!-- Carousel -->
@extends('master')
@section('content')


<div id="demo" class="carousel slide mt-2" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        @foreach ($products as $item)
        <div class="carousel-item {{$item['id']==1?'active':''}}">
           <a href="detail/{{$item['id']}}">
           <img src="{{$item['gallery']}}" alt="Los Angeles" class="d-block slider-img" style="width:100%">
            <div class="carousel-caption">
                <h3 class="text-dark">{{$item['name']}}</h3>
                <p class="text-dark">{{$item['description']}}</p>
            </div>
           </a>
        </div>

        @endforeach

    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next " type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<div class="trending-wrapper">
    <h3 class="text-center">Trending Products</h3>
    @foreach ($products as $item)
    <div class="trending-item">
        <a href="detail/{{$item['id']}}" style="text-decoration: none;">
        <img src="{{$item['gallery']}}" alt="Los Angeles" class="trending-image" >
        <div class="">
            <h3>{{$item['name']}}</h3>
           
        </div>
        </a>
    </div>

    @endforeach

</div>

@endsection