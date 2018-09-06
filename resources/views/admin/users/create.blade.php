@extends("layouts.master")

@section("title","User | Create")


@section("content")

    <div class="card">

        <div class="card-header">
            <h3>Create user</h3>
        </div>

        <div class="card-body">

            {!! Form::open(["method"=>"POST","route"=>"users.store"]) !!}

            <div class="form-group">
                {!! Form::label("name","Name :") !!}
                {!! Form::text("name",null,["class"=>"form-control " . getValClass($errors,"name")]) !!}
                {!! valMsg($errors, "name") !!}

            </div>

            <div class="form-group">
                {!! Form::label("email","Email :") !!}
                {!! Form::email("email",null,["class"=>"form-control " . getValClass($errors,"email")]) !!}
                {!! valMsg($errors, "email") !!}
            </div>

            <div class="form-group">
                {!! Form::button("Create <i class='fas fa-save'></i>",["class"=>"btn btn-success","type"=>"submit"]) !!}
            </div>

            {!! Form::close() !!}

        </div>

    </div>


@endsection