@extends("layouts.master")

@section("content")

    <div class="card">

        <div class="card-header">
            @if(isset($category))
                @section("title","Category | Edit")
                <h3>Edit category</h3>
            @else
                @section("title","Category | Create")
                <h3>Create category</h3>
            @endif
        </div>

        <div class="card-body">

            @if(isset($category))
                {!! Form::model($category,["method"=>"PATCH","route"=>["categories.update",$category->slug]]) !!}
            @else
                {!! Form::open(["method"=>"POST","route"=>"categories.store"]) !!}
            @endif

            <div class="form-group">
                {!! Form::label("name","Name :") !!}
                {!! Form::text("name",null,["class"=>"form-control " . getValClass($errors,"name")]) !!}
                {!! valMsg($errors, "name") !!}
            </div>

            <div class="form-group">
                @if(isset($category))
                    {!! Form::button("Update <i class='fa fa-save'></i>",["class"=>"btn btn-success","type"=>"submit"]) !!}
                @else
                    {!! Form::button("Create <i class='fas fa-save'></i>",["class"=>"btn btn-success","type"=>"submit"]) !!}
                @endif
            </div>

            {!! Form::close() !!}

        </div>

    </div>


@endsection