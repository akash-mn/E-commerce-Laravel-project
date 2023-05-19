<!-- Carousel -->
@extends('master')
@section('content')



<div class="custom-product">

    <div class="row">

        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h4 class="text-center">cart List</h4>
                <a href="ordernow" class="btn btn-success">Order Now</a>
                @foreach ($products as $item)
                <div class="row searched-item  border-bottom border-dark  p-2">
                    <div class="col">
                        <a href="detail/{{$item->id}}" style="text-decoration: none;">
                            <img src="{{$item->gallery}}" alt="Los Angeles" class="trending-image">
                        </a>

                        <div class="col">

                            <h3>{{$item->name}}</h3>
                            <h5>{{$item->description}}</h5>
                        </div>

                        <div class="col">

                            <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove From cart</a>
                        </div>

                    </div>

                </div>

                @endforeach

            </div>
        </div>
    </div>

</div>

@endsection