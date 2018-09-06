<div class="list-group">

    <a class="list-group-item {{ checkRoute("dashboard") }}"
       href="{{ route("dashboard") }}">Home</a>

    <a class="list-group-item {{ checkRoute(["categories.index","categories.edit"]) }}"
       href="{{ route("categories.index") }}">All categories</a>
    <a class="list-group-item {{ checkRoute("categories.create") }}"
       href="{{ route("categories.create") }}">Create category</a>

    <a class="list-group-item {{ checkRoute(["brands.index","brands.edit"]) }}"
       href="{{ route("brands.index") }}">All brands</a>
    <a class="list-group-item {{ checkRoute("brands.create") }}"
       href="{{ route("brands.create") }}">Create brand</a>

    <a class="list-group-item {{ checkRoute(["conditions.index","conditions.edit"]) }}"
       href="{{ route("conditions.index") }}">All conditions</a>
    <a class="list-group-item {{ checkRoute("conditions.create") }}"
       href="{{ route("conditions.create") }}">Create condition</a>

    <a class="list-group-item {{ checkRoute([
    "products.index","products.edit","users.products","categories.products","brands.products","conditions.products"
    ]) }}"
       href="{{ route("products.index") }}">All products</a>
    <a class="list-group-item {{ checkRoute("products.create") }}"
       href="{{ route("products.create") }}">Create product</a>

    <a class="list-group-item {{ checkRoute([
    "comments.index","users.comments","products.comments","categories.comments","brands.comments","conditions.comments"
    ]) }}"
       href="{{ route("comments.index") }}">All comments</a>
    <a class="list-group-item {{ checkRoute("photos.index") }}"
       href="{{ route("photos.index") }}">All photos</a>

    @if(auth()->user()->is_admin)
        <a class="list-group-item {{ checkRoute("users.index") }}"
           href="{{ route("users.index") }}">All users</a>
        <a class="list-group-item {{ checkRoute("users.create") }}"
           href="{{ route("users.create") }}">Create user</a>
        <a class="list-group-item {{ checkRoute("users.profile") }}"
           href="{{ route("users.profile") }}">My profile</a>
        <a class="list-group-item {{ checkRoute("settings.edit") }}"
           href="{{ route("settings.edit") }}">Settings</a>
    @else
        <a class="list-group-item {{ checkRoute("users.profile") }}"
           href="{{ route("users.profile") }}">My profile</a>
    @endif


</div>