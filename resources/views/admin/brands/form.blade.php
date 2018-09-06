@extends("layouts.master")

@section("content")

    <div class="card">

        <div class="card-header">
            @if(isset($brand))
                @section("title","Brand | Edit")
                <h3>Edit brand</h3>
            @else
                @section("title","Brand | Create")
                <h3>Create brand</h3>
            @endif
        </div>

        <div class="card-body">

            @if(isset($brand))
                {!! Form::model($brand,["method"=>"PATCH","route"=>["brands.update",$brand->slug]]) !!}
            @else
                {!! Form::open(["method"=>"POST","route"=>"brands.store"]) !!}
            @endif

            <div class="form-group">
                {!! Form::label("name","Name :") !!}
                {!! Form::text("name",null,["class"=>"form-control " . getValClass($errors,"name")]) !!}
                {!! valMsg($errors, "name") !!}
            </div>

            <div class="form-group">
                @if(isset($brand))
                    {!! Form::button("Update <i class='fa fa-save'></i>",["class"=>"btn btn-success","type"=>"submit"]) !!}
                @else
                    {!! Form::button("Create <i class='fas fa-save'></i>",["class"=>"btn btn-success","type"=>"submit"]) !!}
                @endif
            </div>

            {!! Form::close() !!}

        </div>

    </div>


@endsection