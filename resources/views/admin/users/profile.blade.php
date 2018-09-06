@extends("layouts.master")

@section("title","Profile | Edit")


@section("content")

    <div class="card">

        <div class="card-header">
            <h3>Edit profile</h3>
        </div>

        <div class="card-body">

            {!! Form::model($user,["method"=>"PATCH","route"=>"users.profile.update","files"=>true]) !!}

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
                {!! Form::label("password","New Password :") !!}
                {!! Form::password("password",["class"=>"form-control " . getValClass($errors,"password")]) !!}
                {!! valMsg($errors, "password") !!}
            </div>

            <div class="form-group">
                {!! Form::label("password_confirmation","Repeat password :") !!}
                {!! Form::password("password_confirmation",["class"=>"form-control " . getValClass($errors,"password")]) !!}
                {!! valMsg($errors, "password") !!}
            </div>

            <div class="form-group">
                {!! Form::label("image","Avatar :") !!}
                {!! Form::file("image",["class"=>"form-control " . getValClass($errors,"image")]) !!}
                {!! valMsg($errors, "image") !!}
            </div>

            <label for="image">
                <img src="{{ $user->getPhotoPath()}}" alt="{{ $user->slug }}" class="rounded-circle mb-3 mt-1" width="50">
            </label>

            <div class="form-group">
                {!! Form::label("facebook","Facebook :") !!}
                {!! Form::text("facebook",null,["class"=>"form-control " . getValClass($errors,"facebook")]) !!}
                {!! valMsg($errors, "facebook") !!}
            </div>

            <div class="form-group">
                {!! Form::label("youtube","Youtube :") !!}
                {!! Form::text("youtube",null,["class"=>"form-control " . getValClass($errors,"youtube")]) !!}
                {!! valMsg($errors, "youtube") !!}
            </div>

            <div class="form-group">
                {!! Form::label("about","About :") !!}
                {!! Form::textarea("about",null,["class"=>"form-control " . getValClass($errors,"about")]) !!}
                {!! valMsg($errors, "about") !!}
            </div>

            <div class="form-group">
                {!! Form::button("Update <i class='fa fa-save'></i>",["class"=>"btn btn-success","type"=>"submit"]) !!}
            </div>

            {!! Form::close() !!}

        </div>

    </div>


@endsection

@section("scripts")
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({selector: 'textarea'});</script>
@endsection