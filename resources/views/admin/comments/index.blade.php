@extends("layouts.master")

@section("title","Comments | Index")


@section("content")

    <div class="card">

        <div class="card-header">
            <h3>All comments</h3>
        </div>

        <div class="card-body">

            @if(count($comments))
                @include("admin.comments.template")
            @else
                <h3 class="text-center">No comments found</h3>
            @endif

        </div>

    </div>


@endsection