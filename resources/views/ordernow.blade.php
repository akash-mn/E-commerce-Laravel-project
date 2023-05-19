<!-- Carousel -->
@extends('master')
@section('content')



<div class="custom-product p-5">

    <div class="row">

        <div class="col-sm-10">
            <table class="table table-striped">

                <tr>
                    <td>Amount</td>
                    <td>${{$total}}</td>

                </tr>

                <tbody>
                    <tr>
                        <td>Tax</td>
                        <td>$ 0</td>

                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>$10</td>

                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>${{$total+10}}</td>

                    </tr>

                </tbody>
            </table>
            <form action="/orderplace" method="post">
                @csrf
                <div class="mb-3 mt-3">
                    <textarea type="address" class="form-control" id="email" placeholder="Enter your address" name="email"></textarea>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Payment Method:</label><br><br>
                    <input type="radio" value="cash" name="payment"><span>Online Payment</span><br><br>
                    <input type="radio" value="cash" name="payment"><span>EMI</span><br><br>
                    <input type="radio" value="cash" name="payment"><span>Cash On Delivery</span><br><br>
                </div>

                <button type="submit" class="btn btn-primary">Order Now</button>
            </form>
        </div>
    </div>

</div>

@endsection