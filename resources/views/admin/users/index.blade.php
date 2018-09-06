@extends("layouts.master")

@section("title","Users | Index")


@section("content")

    <div class="card">

        <div class="card-header">
            <h3>All users</h3>
        </div>

        <div class="card-body">

            @if(count($users))
                <table class="table table-hover">
                    <tr>
                        <th>Id</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Different products</th>
                        <th>Products quantity</th>
                        <th>Total comments</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Role</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($users as $user)
                        <tr>
                            <td>
                                {{ $user->id }}
                            </td>
                            <td>
                                <img src="{{ $user->getPhotoPath() }}" alt="{{ $user->slug }}" class="rounded-circle"
                                     width="50">
                            </td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                {{ $user->email }}
                            </td>
                            <td>
                                <a href="{{ route("users.products",$user->slug) }}">
                                    View products <strong>({{ $user->products->count() }})</strong>
                                </a>
                            </td>
                            <td>
                                {{ $user->getProductQty() }}
                            </td>
                            <td>
                                <a href="{{ route("users.comments",$user->slug) }}">
                                    View comments <strong>({{ $user->comments->count() }})</strong>
                                </a>
                            </td>
                            <td>
                                {{ $user->created_at->toFormattedDateString() }}
                            </td>
                            <td>
                                {{ $user->updated_at->diffForHumans() }}
                            </td>
                            <td>
                                @if($user->is_admin)

                                    @if($user->id == 1)
                                        <button class="btn btn-success">Head Admin</button>
                                    @elseif (auth()->id() == $user->id)
                                        <button class="btn btn-success">Admin</button>
                                    @else
                                        {!! Form::open(["method"=>"PATCH","route"=>["users.remove.admin",$user->slug]]) !!}
                                        {!! Form::submit("Admin",["class"=>"btn btn-success"]) !!}
                                        {!! Form::close() !!}
                                    @endif

                                @else
                                    {!! Form::open(["method"=>"PATCH","route"=>["users.make.admin",$user->slug]]) !!}
                                    {!! Form::submit("Not Admin",["class"=>"btn btn-warning"]) !!}
                                    {!! Form::close() !!}
                                @endif
                            </td>
                            <td>
                                @if(auth()->id() !== $user->id && $user->id != 1)
                                    {!! deleteForm(route("users.destroy",$user->slug))  !!}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>

                <div class="mx-auto paginate">
                    {{ $users->links() }}
                </div>

            @else
                <h3 class="text-center">No users found</h3>
            @endif

        </div>

    </div>


@endsection

@include("inc.deleteModal")