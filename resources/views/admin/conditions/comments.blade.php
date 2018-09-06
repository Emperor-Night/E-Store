@extends("layouts.master")

@section("title","Condition | comments")


@section("content")

    <div class="card">

        <div class="card-header">
            <h3>Condition | {{ $condition->name }} | comments</h3>
        </div>

        <div class="card-body">

            @if(count($comments))
                @include("admin.comments.template")
            @else
                <h3 class="text-center">No condition's comments found</h3>
            @endif

        </div>

    </div>


@endsection