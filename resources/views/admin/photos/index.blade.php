@extends("layouts.master")

@section("title","Photos | Index")


@section("content")

    <div class="card">

        <div class="card-header">
            <h3>All photos</h3>
        </div>

        <div class="card-body">

            @if(count($photos))

                @include("inc.bulkDeleteForm")

                <table class="table table-hover">
                    <tr>
                        <th>
                            {!! checkbox() !!}
                        </th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Size</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($photos as $photo)
                        <tr>
                            <td>
                                {!! checkbox($photo) !!}
                            </td>
                            <td>
                                {{ $photo->id }}
                            </td>
                            <td>
                                <img src="{{ $photo->getPhotoPath() }}" alt="{{ $photo->name }}" width="70"
                                     class="rounded">
                            </td>
                            <td>
                                {{ $photo->size . " KB" }}
                            </td>
                            <td>
                                {{ $photo->created_at->toFormattedDateString() }}
                            </td>
                            <td>
                                {{ $photo->updated_at->diffForHumans() }}
                            </td>
                            <td>
                                {!! deleteForm(route("photos.destroy",$photo->id))  !!}
                            </td>
                        </tr>
                    @endforeach
                </table>

                <div class="mx-auto paginate">
                    {{ $photos->links() }}
                </div>

            @else
                <h3 class="text-center">No photos found</h3>
            @endif

        </div>

    </div>


@endsection