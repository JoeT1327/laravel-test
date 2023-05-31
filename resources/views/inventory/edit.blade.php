@extends("layouts.master")

@section('title')
   Update Item Page
@endsection

@section('content')

    <h4>Content Update Page</h4>

    <form action="{{ route("inventory.update",$item->id) }}" method="post">

        @method("put")

        @csrf

        <div class=" mb-3">
            <label class=" form-label" for="">Item Name</label>
            <input type="text" class=" form-control" value="{{ $item->name }}" name="name">
        </div>

        <div class=" mb-3">
            <label class=" form-label" for="">Item Price</label>
            <input type="number" class=" form-control" value="{{ $item->price }}" name="price">
        </div>

        <div class=" mb-3">
            <label class=" form-label" for="">Stock</label>
            <input type="number" class=" form-control" value="{{ $item->stock }}" name="stock">
        </div>

        <button class=" btn btn-primary">Update Item</button>
    </form>

@endsection
