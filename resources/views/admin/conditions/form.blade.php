@extends("layouts.master")

@section("content")

    <div class="card">

        <div class="card-header">
            @if(isset($condition))
                @section("title","Condition | Edit")
                <h3>Edit condition</h3>
            @else
                @section("title","Condition | Create")
                <h3>Create condition</h3>
            @endif
        </div>

        <div class="card-body">

            @if(isset($condition))
                {!! Form::model($condition,["method"=>"PATCH","route"=>["conditions.update",$condition->slug]]) !!}
            @else
                {!! Form::open(["method"=>"POST","route"=>"conditions.store"]) !!}
            @endif

            <div class="form-group">
                {!! Form::label("name","Name :") !!}
                {!! Form::text("name",null,["class"=>"form-control " . getValClass($errors,"name")]) !!}
                {!! valMsg($errors, "name") !!}
            </div>

            <div class="form-group">
                @if(isset($condition))
                    {!! Form::button("Update <i class='fa fa-save'></i>",["class"=>"btn btn-success","type"=>"submit"]) !!}
                @else
                    {!! Form::button("Create <i class='fas fa-save'></i>",["class"=>"btn btn-success","type"=>"submit"]) !!}
                @endif
            </div>

            {!! Form::close() !!}

        </div>

    </div>


@endsection