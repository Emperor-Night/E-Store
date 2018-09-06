@extends("layouts.master")

@section("title","Categories | Index")


@section("content")

    <div class="card">

        <div class="card-header">
            <h3>All categories</h3>
        </div>

        <div class="card-body">

            @if(count($categories))

                @include("inc.bulkDeleteForm")

                <table class="table table-hover">
                    <tr>
                        <th>
                            {!! checkbox() !!}
                        </th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Different products</th>
                        <th>Products quantity</th>
                        <th>Total comments</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($categories as $category)
                        <tr>
                            <td>
                                {!! checkbox($category) !!}
                            </td>
                            <td>
                                {{ $category->id }}
                            </td>
                            <td>
                                {{ $category->name }}
                            </td>
                            <td>
                                <a href="{{ route("categories.products",$category->slug) }}">
                                    View products <strong>({{ $category->products->count() }})</strong>
                                </a>
                            </td>
                            <td>
                                {{ $category->getProductQty() }}
                            </td>
                            <td>
                                <a href="{{ route("categories.comments",$category->slug) }}">
                                    View comments <strong>({{ $category->comments->count() }})</strong>
                                </a>
                            </td>
                            <td>
                                {{ $category->created_at->toFormattedDateString() }}
                            </td>
                            <td>
                                {{ $category->updated_at->diffForHumans() }}
                            </td>
                            <td>
                                <a href="{{ route("categories.edit",$category->slug) }}" class="btn btn-info">
                                    Edit <i class="far fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                {!! deleteForm(route("categories.destroy",$category->slug))  !!}
                            </td>
                        </tr>
                    @endforeach
                </table>

                <div class="mx-auto paginate">
                    {{ $categories->links() }}
                </div>

            @else
                <h3 class="text-center">No categories found</h3>
            @endif

        </div>

    </div>

@endsection