@extends("front.layout.front")

@section("title","Cart")


@section("content")

    @if(count($products))

        <div class="row">
            @foreach($products as $product)

                <div class="col-md-4 text-center pb-4">

                    <a href="{{ route("product.single",$product->model->slug) }}">
                        <img src="{{ $product->model->getPhotoPath() }}" alt="{{ $product->slug }}"
                             style="max-height: 150px;" class="img-thumbnail">
                    </a>

                    <div class="mt-2"></div>

                    <a href="{{ route("product.single",$product->model->slug) }}">
                        {{ str_limit($product->name,45) }}
                    </a>

                    <p class="lead">{{ formatPrice($product->price) }} &euro;</p>
                    <p class="lead">{{ $product->qty }} x</p>

                    <hr>
                    <p class="lead">Total : <strong>{{ formatPrice($product->total) }} &euro;</strong></p>


                    {!! Form::open(["method"=>"POST","route"=>["cart.decrease",$product->rowId,$product->qty],"class"=>"float-left"]) !!}
                    <div class="form-group">
                        {!! Form::button("<i class='fas fa-minus'></i>",["class"=>"btn btn-danger","type"=>"submit"]) !!}
                    </div>
                    {!! Form::close() !!}


                    {!! Form::open(["method"=>"POST","route"=>["cart.increase",$product->rowId,$product->qty],"class"=>"float-right"]) !!}
                    <div class="form-group">
                        {!! Form::button("<i class='fas fa-plus'></i>",["class"=>"btn btn-success","type"=>"submit"]) !!}
                    </div>
                    {!! Form::close() !!}


                    {!! Form::open(["method"=>"DELETE","route"=>["cart.remove",$product->rowId]]) !!}
                    <div class="form-group">
                        {!! Form::button("Remove <i class='fas fa-trash'></i>",["class"=>"btn btn-warning","type"=>"submit"]) !!}
                    </div>
                    {!! Form::close() !!}

                </div>

            @endforeach
        </div>

        <hr>
        <div class="row my-5">
            <a href="{{ route("cart.checkout") }}" class="btn btn-success mx-auto">
                Checkout <i class="fab fa-amazon-pay"></i>
            </a>
        </div>

    @else
        <h3 class="text-center">Cart empty !</h3>
    @endif


@endsection