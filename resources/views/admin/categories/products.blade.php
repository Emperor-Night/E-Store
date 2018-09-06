@extends("layouts.master")

@section("title","Category | Products")


@section("content")

    <div class="card">

        <div class="card-header">
            <h3>Category | {{ $category->name }} | products</h3>
        </div>

        <div class="card-body">

            @if(count($products))
                @include("admin.products.template")
            @else
                <h3 class="text-center">No category's products found</h3>
            @endif

        </div>

    </div>


@endsection