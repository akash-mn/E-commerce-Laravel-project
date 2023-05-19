<!-- Carousel -->
@extends('master')
@section('content')



<div class="custom-product">

<div class="row">

    <div class="col-sm-4 ms-2 mt-2">
        <a href="#">Filter</a>
    </div>

    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4 class="text-center">Result for Products</h4>
            @foreach ($products as $item)
            <div class="searched-item">
                <a href="detail/{{$item['id']}}" style="text-decoration: none;">
                    <img src="{{$item['gallery']}}" alt="Los Angeles" class="trending-image">
                    <div class="">
                        <h3>{{$item['name']}}</h3>
                        <h5>{{$item['description']}}</h5>

                    </div>
                </a>
            </div>

            @endforeach

        </div>
    </div>
    </div>
</div>

@endsection