<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" style="color: #8B0000">
            My Store
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li>
                    <a class="nav-link {{ checkRoute("cart.show") }}"
                       href="{{ route("cart.show") }}">
                        Cart
                    </a>
                </li>
                <li>
                    <a class="nav-link {{ checkRoute("cart.checkout") }}"
                       href="{{ route("cart.checkout") }}">
                        Checkout
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route("dashboard") }}" style="color: #8B0000">
                        Admin Section
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav navbar-right">
                <li>
                    <a class="nav-link mr-3" href="{{ route("cart.show") }}" data-toggle="modal" data-target="#myModal"
                       id="link">
                        <span style="position: relative">
                            Basket <i class="fas fa-2x fa-cart-arrow-down"></i>
                            <span class="badge badge-pill badge-info"
                                  style="position: absolute;top:-16px;right: -10px;">
                                {{ Cart::count() }}
                            </span>
                        </span>
                    </a>
                </li>

                <form class="form-inline" id="searchForm" method="POST">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search store..." name="search"
                           id="search">
                </form>

            </ul>

        </div>
    </div>
</nav>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header" style="border-bottom: none">
                <h4 class="modal-title">Your basket :</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                @if(Cart::count())

                    <div class="row">
                        <div class="col-md-12">

                            <table class="table table-hover mb-0">

                                @foreach(Cart::content() as $product)
                                    <tr>
                                        <td>
                                            <h4>
                                                <a href="{{ route("product.single",$product->model->slug) }}">
                                                    {{ str_limit($product->name,35) }}
                                                </a>
                                            </h4>
                                        </td>
                                        <td>
                                            <a href="{{ route("product.single",$product->model->slug) }}">
                                                <img src="{{ $product->model->getPhotoPath() }}"
                                                     alt="{{ $product->name }}"
                                                     height="50">
                                            </a>
                                        </td>
                                        <td>
                                            <h4>{{ $product->qty }} x</h4>
                                        </td>
                                        <td>
                                            <h4>{{ formatPrice($product->price) }} &euro;</h4>
                                        </td>
                                    </tr>
                                @endforeach

                            </table>

                        </div>
                    </div>

                @else
                    <h3 class="text-center">No items in your cart !</h3>
                @endif

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <h4 class="mr-5">Total : {{ formatPrice(Cart::total()) }} &euro;</h4>
            </div>

        </div>
    </div>
</div>