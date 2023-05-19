<!-- Carousel -->
@extends('master')
@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$product['gallery']}}" class="detail-img" alt="">
        </div>
        <div class="col-sm-6">
             <a href="/">Go back</a>
             <h2>{{$product['name']}}</h2>
             <h3>Price:{{$product['price']}}</h3>
             <h4>Details:{{$product['description']}}</h4>
             <h4>Category:{{$product['category']}}</h4>
             <br> <br>
            <form action="/add_to_cart" method="post" >
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary">Add to cart</button>
            </form>
             <br><br>
             <button class="btn btn-success">Buy Now</button>
        </div>
    </div>


</div>




@endsection