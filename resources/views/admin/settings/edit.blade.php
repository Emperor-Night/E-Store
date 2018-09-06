@extends("layouts.master")

@section("title","Settings | Edit")


@section("content")

    <div class="card">

        <div class="card-header">
            <h3>Edit settings</h3>
        </div>

        <div class="card-body">

            {!! Form::model($setting,["method"=>"PATCH","route"=>"settings.update"]) !!}

            <div class="form-group">
                {!! Form::label("site_name","Site name :") !!}
                {!! Form::text("site_name",null,["class"=>"form-control " . getValClass($errors,"site_name")]) !!}
                {!! valMsg($errors, "site_name") !!}
            </div>

            <div class="form-group">
                {!! Form::label("contact_number","Contact number :") !!}
                {!! Form::text("contact_number",null,["class"=>"form-control " . getValClass($errors,"contact_number")]) !!}
                {!! valMsg($errors, "contact_number") !!}
            </div>

            <div class="form-group">
                {!! Form::label("contact_email","Contact email :") !!}
                {!! Form::email("contact_email",null,["class"=>"form-control " . getValClass($errors,"contact_email")]) !!}
                {!! valMsg($errors, "contact_email") !!}
            </div>

            <div class="form-group">
                {!! Form::label("address","Address :") !!}
                {!! Form::text("address",null,["class"=>"form-control " . getValClass($errors,"address")]) !!}
                {!! valMsg($errors, "address") !!}
            </div>

            <div class="form-group">
                {!! Form::button("Update <i class='fa fa-save'></i>",["class"=>"btn btn-success","type"=>"submit"]) !!}
            </div>

            {!! Form::close() !!}

        </div>

    </div>


@endsection