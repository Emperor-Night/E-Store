@extends("layouts.master")

@section("title","Category | comments")


@section("content")

    <div class="card">

        <div class="card-header">
            <h3>Category | {{ $category->name }} | comments</h3>
        </div>

        <div class="card-body">

            @if(count($comments))
                @include("admin.comments.template")
            @else
                <h3 class="text-center">No category's comments found</h3>
            @endif

        </div>

    </div>


@endsection