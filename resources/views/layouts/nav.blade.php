<aside>
    <div class=" list-group">
        <a href="{{ route("page.home")}}" class=" list-group-item list-group-item-action">Home</a>
    </div>

    <p class=" mt-3 my-2">Manage Category</p>

    <div class=" list-group">
        <a href="{{ route("category.create")}}" class=" list-group-item list-group-item-action">Create Category</a>
        <a href="{{ route("category.index")}}" class=" list-group-item list-group-item-action">Item Category</a>
    </div>

    <p class=" mt-3 my-2">Manage Items</p>

    <div class=" list-group">
        <a href="{{ route("inventory.create")}}" class=" list-group-item list-group-item-action">Create Item</a>
        <a href="{{ route("inventory.index")}}" class=" list-group-item list-group-item-action">Item list</a>
    </div>

</aside>
