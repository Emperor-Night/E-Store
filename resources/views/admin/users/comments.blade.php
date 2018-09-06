@extends("layouts.master")

@section("title","User | comments")


@section("content")

    <div class="card">

        <div class="card-header">
            <h3>User | {{ $user->name }} | comments</h3>
        </div>

        <div class="card-body">

            @if(count($comments))
                @include("admin.comments.template")
            @else
                <h3 class="text-center">No user's comments found</h3>
            @endif

        </div>

    </div>


@endsection