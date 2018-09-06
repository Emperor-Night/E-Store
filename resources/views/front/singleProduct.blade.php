@extends("front.layout.front")

@section("title","Single")


@section("content")

    <div class="row">
        <div class="col-md-12">

            <div class="text-center mb-5">
                <h2 class="mb-3">{{ $product->name }}</h2>
                <img src="{{ $product->getPhotoPath() }}" alt="{{ $product->slug }}" width="500" class="img-thumbnail">
            </div>

            <h3>Description</h3>
            <p>{!! $product->description !!}</p>
            <hr>


            <div class="row py-4">

                <div class="col-md-3">
                    <h3>Category</h3>
                    <p>
                        <a href="{{ route("category.products",$product->category->slug) }}">
                            {{ $product->category->name }}
                        </a>
                    </p>
                </div>

                <div class="col-md-3">
                    <h3>Brand</h3>
                    <p>
                        <a href="{{ route("brand.products",$product->brand->slug) }}">
                            {{ $product->brand->name }}
                        </a>
                    </p>
                </div>

                <div class="col-md-3">
                    <h3>Condition</h3>
                    <p>
                        <a href="{{ route("condition.products",$product->condition->slug) }}">
                            {{ $product->condition->name }}
                        </a>
                    </p>
                </div>

                <div class="col-md-3">
                    <h3>User</h3>
                    <p>
                        <a href="{{ route("user.products",$product->user->slug) }}">
                            {{ $product->user->name }}
                        </a>
                    </p>
                </div>

            </div>
            <hr>

            <div class="row">

                <div class="col-md-3">
                    <h3>Android</h3>
                    <p class="lead">
                        <strong>
                            <a href="{{ route("android.products",$product->is_android ? "yes" : "no" ) }}">
                                {{ $product->is_android ? "Yes" : "No" }}
                            </a>
                        </strong>
                    </p>
                </div>

                <div class="col-md-3">
                    <h3>3D</h3>
                    <p class="lead">
                        <strong>
                            <a href="{{ route("threeD.products",$product->is_threeD ? "yes" : "no" ) }}">
                                {{ $product->is_threeD ? "Yes" : "No"  }}
                            </a>
                        </strong>
                    </p>
                </div>

                <div class="col-md-3">
                    <h3>Price</h3>
                    <p class="lead"><strong>{{ formatPrice($product->price) }} &euro;</strong></p>
                </div>

                <div class="col-md-3">
                    <h3>Buy</h3>
                    {!! Form::open(["method"=>"POST","route"=>["cart.add",$product->slug]]) !!}
                    <div class="form-group">
                        {!! Form::label("qty","Quantity : ") !!}
                        {!! Form::text("qty",1,["class"=>"form-control customInput"]) !!}
                        {!! Form::button("Add to cart <i class='fas fa-shopping-cart'></i>",["class"=>"btn btn-success mt-3","type"=>"submit"]) !!}
                    </div>
                    {!! Form::close() !!}
                </div>

            </div>

            <hr>

            @if($product->comments->count())
                <h3>Comments :</h3>

                <ul class="list-group">
                    @foreach($product->comments as $comment)
                        @if($comment->status)
                            <li class="list-group-item my-2">{{ $comment->body }}</li>
                        @endif
                    @endforeach
                </ul>
            @else
                <p class="lead text-center">No product comments found. Be the first to make one !</p>
            @endif


            @guest
            <p>Please <a href="{{ route("login") }}">login</a> first to make a comment</p>
            @else

                {!! Form::open(["method"=>"POST","route"=>["comment.store",$product->slug]]) !!}

                <div class="form-group">
                    {!! Form::label("comment","Comment :") !!}
                    {!! Form::textarea("comment",null,["class"=>"form-control " . getValClass($errors,"comment")]) !!}
                    {!! valMsg($errors, "comment") !!}
                </div>

                <div class="form-group">
                    {!! Form::submit("Add comment",["class"=>"btn btn-primary"]) !!}
                </div>

                {!! Form::close() !!}

                @endguest

        </div>

    </div>


@endsection