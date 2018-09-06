@extends("layouts.master")

@section("title","Conditions | Index")


@section("content")

    <div class="card">

        <div class="card-header">
            <h3>All conditions</h3>
        </div>

        <div class="card-body">

            @if(count($conditions))

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
                    @foreach($conditions as $condition)
                        <tr>
                            <td>
                                {!! checkbox($condition) !!}
                            </td>
                            <td>
                                {{ $condition->id }}
                            </td>
                            <td>
                                {{ $condition->name }}
                            </td>
                            <td>
                                <a href="{{ route("conditions.products",$condition->slug) }}">
                                    View products <strong>({{ $condition->products->count() }})</strong>
                                </a>
                            </td>
                            <td>
                                {{ $condition->getProductQty() }}
                            </td>
                            <td>
                                <a href="{{ route("conditions.comments",$condition->slug) }}">
                                    View comments <strong>({{ $condition->comments->count() }})</strong>
                                </a>
                            </td>
                            <td>
                                {{ $condition->created_at->toFormattedDateString() }}
                            </td>
                            <td>
                                {{ $condition->updated_at->diffForHumans() }}
                            </td>
                            <td>
                                <a href="{{ route("conditions.edit",$condition->slug) }}" class="btn btn-info">
                                    Edit <i class="far fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                {!! deleteForm(route("conditions.destroy",$condition->slug))  !!}
                            </td>
                        </tr>
                    @endforeach
                </table>

                <div class="mx-auto paginate">
                    {{ $conditions->links() }}
                </div>

            @else
                <h3 class="text-center">No conditions found</h3>
            @endif

        </div>

    </div>


@endsection