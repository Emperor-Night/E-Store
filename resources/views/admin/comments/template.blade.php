@include("inc.bulkDeleteForm")

<table class="table table-hover">
    <tr>
        <th>
            {!! checkbox() !!}
        </th>
        <th>Id</th>
        <th>User</th>
        <th>Product</th>
        <th>Category</th>
        <th>Brand</th>
        <th>Condition</th>
        <th>Body</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Status</th>
        <th>Delete</th>
    </tr>
    @foreach($comments as $comment)
        <tr>
            <td>
                {!! checkbox($comment) !!}
            </td>
            <td>
                {{ $comment->id }}
            </td>
            <td>
                <a href="{{ route("users.comments",$comment->user->slug)}}">
                    {{ $comment->user->name }}
                </a>
            </td>
            <td>
                <a href="{{ route("products.comments",$comment->product->slug) }}">
                    {{ str_limit($comment->product->name,45) }}
                </a>
            </td>
            <td>
                <a href="{{ route("categories.comments",$comment->category->slug) }}">
                    {{ $comment->category->name }}
                </a>
            </td>
            <td>
                <a href="{{ route("brands.comments",$comment->brand->slug) }}">
                    {{ $comment->brand->name }}
                </a>
            </td>
            <td>
                <a href="{{ route("conditions.comments",$comment->condition->slug) }}">
                    {{ $comment->condition->name }}
                </a>
            </td>
            <td>
                {{ $comment->body }}
            </td>
            <td>
                {{ $comment->created_at->toFormattedDateString() }}
            </td>
            <td>
                {{ $comment->updated_at->diffForHumans() }}
            </td>
            <td>
                @if($comment->status)
                    {!! Form::open(["method"=>"PATCH","route"=>["comments.unApprove",$comment->id]]) !!}
                    {!! Form::button("Approved <i class='far fa-thumbs-up'></i>",["class"=>"btn btn-success","type"=>"submit"]) !!}
                    {!! Form::close() !!}
                @else
                    {!! Form::open(["method"=>"PATCH","route"=>["comments.approve",$comment->id]]) !!}
                    {!! Form::button("UnApproved <i class='far fa-thumbs-down'></i>",["class"=>"btn btn-warning","type"=>"submit"]) !!}
                    {!! Form::close() !!}
                @endif
            </td>
            <td>
                {!! deleteForm(route("comments.destroy",$comment->id))  !!}
            </td>
        </tr>
    @endforeach

</table>

<div class="mx-auto paginate">
    {{ $comments->links() }}
</div>