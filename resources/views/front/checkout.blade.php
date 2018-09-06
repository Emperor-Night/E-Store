@extends("front.layout.front")

@section("title","Checkout")


@section("content")

    <div class="row">
        <div class="col-md-12 text-center">

            <table class="table table-hover">

                <tr>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>

                @foreach($products as $product)
                    <tr>
                        <td style="width: 300px">
                            <h4>
                                <a href="{{ route("product.single",$product->model->slug) }}">
                                    {{ $product->name }}
                                </a>
                            </h4>
                        </td>
                        <td style="width: 250px">
                            <a href="{{ route("product.single",$product->model->slug) }}">
                                <img src="{{ $product->model->getPhotoPath() }}" alt="{{ $product->name }}"
                                      class="img-fluid">
                            </a>
                        </td>
                        <td><h4>{{ $product->qty }} x </h4></td>
                        <td><h4>{{ formatPrice($product->price) }} &euro; </h4></td>
                        <td><h4>{{ formatPrice($product->total) }} &euro; </h4></td>
                    </tr>
                @endforeach

            </table>

            <hr>
            <h2>Total : {{ formatPrice(Cart::total()) }} &euro;</h2>

            <form action="{{ route("cart.pay") }}" method="POST" class="my-4">
                @csrf
                <script
                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        data-key="pk_test_AhEgOCjLWPmgKW2xEbqu4lux"
                        data-amount="{{ Cart::total() * 100}}"
                        data-name="My E-Shop"
                        data-description="Buy some products"
                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                        data-locale="auto">
                </script>
            </form>
            <hr>

        </div>
    </div>


@endsection