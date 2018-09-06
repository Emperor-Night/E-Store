@extends("layouts.master")

@section("title","Admin | Dashboard")


@section("content")

    <div class="card">

        <div class="card-header">
            <h2>Welcome {{ auth()->user()->name }} !</h2>
        </div>

        <div class="card-body">

            <div class="row">

                {{ makeWidget($totalCategories,"Total categories","bg-info",route("categories.index")) }}
                {{ makeWidget($totalBrands,"Total brands","bg-success",route("brands.index")) }}
                {{ makeWidget($totalConditions,"Total conditions","bg-primary",route("conditions.index")) }}

            </div>

            <div class="row mt-4">

                {{ makeWidget($totalProducts,"Total products","bg-info",route("products.index")) }}
                {{ makeWidget($totalPhotos,"Total photos","bg-success",route("photos.index")) }}
                {{ makeWidget($totalComments,"Total comments","bg-primary",route("comments.index")) }}

            </div>

            <div class="row mt-4">

                @if(auth()->user()->is_admin)
                    {{ makeWidget($totalUsers,"Total users","bg-info",route("users.index")) }}
                @endif

            </div>

        </div>

    </div>


@endsection