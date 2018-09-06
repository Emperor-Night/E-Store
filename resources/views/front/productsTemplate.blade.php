<div class="row">
    <div class="col-md-4">

        <?php
        $sorting = ["Choose sorting", "Price ASC", "Price DESC", "Name ASC", "Name DESC"];
        ?>

        <div class="form-group">
            {!! Form::select("sort",$sorting,null,["class"=>"form-control","id"=>"sort"]) !!}
        </div>
        {!! Form::close() !!}

    </div>
</div>

<div class="row" id="mainContent">

    @foreach($products as $product)
        <div class="col-md-4 text-center mt-4">

            <a href="{{ route("product.single",$product->slug) }}">
                <img src="{{ $product->getPhotoPath() }}" alt="{{ $product->slug }}" style="max-height: 150px;"
                     class="img-thumbnail">
            </a>

            <div class="mt-2"></div>

            <h5>
                <a href="{{ route("product.single",$product->slug) }}">
                    {{ str_limit($product->name,45) }}
                </a>
            </h5>

            <div class="my-1">
                <i class="far fa-comment"></i> {{ $product->comments->count() }}
            </div>

            <p class="lead">{{ formatPrice($product->price) }} &euro;</p>

            {!! Form::open(["method"=>"POST","route"=>["cart.add",$product->slug]]) !!}
            <div class="form-group">
                {!! Form::button("Add to cart <i class='fas fa-shopping-cart'></i>",["class"=>"btn btn-success","type"=>"submit"]) !!}
            </div>
            {!! Form::close() !!}

        </div>
    @endforeach

</div>
