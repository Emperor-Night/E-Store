@extends("layouts.master")

@section("content")

    <div class="card">

        <div class="card-header">
            @if(isset($product))
                @section("title","Product | Edit")
                <h3>Edit product</h3>
            @else
                @section("title","Product | Create")
                <h3>Create product</h3>
            @endif
        </div>

        <div class="card-body">

            @if(isset($product))
                {!! Form::model($product,["method"=>"PATCH","route"=>["products.update",$product->slug],"files"=>true]) !!}
            @else
                {!! Form::open(["method"=>"POST","route"=>"products.store","files"=>true]) !!}
            @endif

            <div class="form-group">
                {!! Form::label("name","Name :") !!}
                {!! Form::text("name",null,["class"=>"form-control " . getValClass($errors,"name")]) !!}
                {!! valMsg($errors, "name") !!}
            </div>

            <div class="form-group">
                {!! Form::label("category_id","Category :") !!}
                {!! Form::select("category_id",$categories,null,["class"=>"form-control " . getValClass($errors,"category_id")]) !!}
                {!! valMsg($errors, "category_id") !!}
            </div>

            <div class="form-group">
                {!! Form::label("brand_id","Brand :") !!}
                {!! Form::select("brand_id",$brands,null,["class"=>"form-control " . getValClass($errors,"brand_id")]) !!}
                {!! valMsg($errors, "brand_id") !!}
            </div>

            <div class="form-group">
                {!! Form::label("description","Description :") !!}
                {!! Form::textarea("description",null,["class"=>"form-control " . getValClass($errors,"description")]) !!}
                {!! valMsg($errors, "description") !!}
            </div>

            <div class="form-group">
                {!! Form::label("image","Photo :") !!}
                {!! Form::file("image",["class"=>"form-control " . getValClass($errors,"image")]) !!}
                {!! valMsg($errors, "image") !!}
            </div>

            @if(isset($product))
                <label for="image">
                    <img src="{{ $product->getPhotoPath()}}" alt="{{ $product->slug }}" class="rounded mb-3 mt-1" width="250">
                </label>
            @endif

            <div class="form-group">
                {!! Form::label("condition_id","Condition :") !!}
                {!! Form::select("condition_id",$conditions,null,["class"=>"form-control " . getValClass($errors,"condition_id")]) !!}
                {!! valMsg($errors, "condition_id") !!}
            </div>

            <div class="form-group">
                {!! Form::label("is_android","Android :") !!}
                {!! Form::select("is_android",["No","Yes"],null,["class"=>"form-control " . getValClass($errors,"is_android")]) !!}
                {!! valMsg($errors, "is_android") !!}
            </div>

            <div class="form-group">
                {!! Form::label("is_threeD","3D :") !!}
                {!! Form::select("is_threeD",["No","Yes"],null,["class"=>"form-control " . getValClass($errors,"is_threeD")]) !!}
                {!! valMsg($errors, "is_threeD") !!}
            </div>

            <div class="form-group">
                {!! Form::label("price","Price :") !!}
                {!! Form::number("price",null,["class"=>"form-control " . getValClass($errors,"price")]) !!}
                {!! valMsg($errors, "price") !!}
            </div>

            <div class="form-group">
                {!! Form::label("quantity","Quantity :") !!}
                {!! Form::number("quantity",null,["class"=>"form-control " . getValClass($errors,"quantity")]) !!}
                {!! valMsg($errors, "quantity") !!}
            </div>

            <div class="form-group">
                @if(isset($product))
                    {!! Form::button("Update <i class='fa fa-save'></i>",["class"=>"btn btn-success","type"=>"submit"]) !!}
                @else
                    {!! Form::button("Create <i class='fas fa-save'></i>",["class"=>"btn btn-success","type"=>"submit"]) !!}
                @endif
            </div>

        </div>

    </div>


@endsection

@section("scripts")
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({selector: 'textarea'});</script>
@endsection