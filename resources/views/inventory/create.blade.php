@extends("layouts.master")

@section('title')
   Create Item Page
@endsection

@section('content')

    <h4>Content Create Page</h4>

    <form action="{{ route("inventory.store") }}" method="post">

        @csrf

        <div class=" mb-3">
            <label class=" form-label" for="">Item Name</label>
            <input type="text" class=" form-control" name="name">
        </div>

        <div class=" mb-3">
            <label class=" form-label" for="">Item Price</label>
            <input type="number" class=" form-control" name="price">
        </div>

        <div class=" mb-3">
            <label class=" form-label" for="">Stock</label>
            <input type="number" class=" form-control" name="stock">
        </div>

        <button class=" btn btn-primary">Save Item</button>
    </form>

@endsection
