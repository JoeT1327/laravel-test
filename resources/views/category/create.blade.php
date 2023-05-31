@extends("layouts.master")

@section('title')
   Create Category Page
@endsection

@section('content')

    <h4>Category Create Page</h4>

    <form action="{{ route("category.store") }}" method="post">

        @csrf

        <div class=" mb-3">
            <label class=" form-label" for="">Category Title</label>
            <input type="text" class=" form-control" name="title">
        </div>

        <div class=" mb-3">
            <label class=" form-label" for="">Description</label>
            <textarea name="description" class=" form-control"  rows="7"></textarea>
        </div>



        <button class=" btn btn-primary">Save Category</button>
    </form>

@endsection
