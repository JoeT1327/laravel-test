@extends("layouts.master")

@section('title')
   Category List Page
@endsection

@section('content')

    <h4>Category list Page</h4>

    <table class=" table">
        <thead>
            <tr>
                <td>#</td>
                <td>Title</td>
                <td>Description</td>

                <td>Control</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category )

                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ Str::limit($category->description, 20, '...') }}</td>

                    <td>
                       <a class=" btn btn-sm btn-outline-success" href="{{ route("category.show",$category->id)}}">Detail</a>

                       <a class=" btn btn-sm btn-outline-info" href="{{ route("category.edit",$category->id) }}">Edit</a>

                       <form class=" d-inline-block" action="{{ route("category.destroy", $category->id) }}" method="POST">
                        @method("delete")
                        @csrf
                        <button class=" btn btn-sm btn-outline-danger">Delete</button>
                       </form>
                    </td>
                </tr>

            @empty

                <tr>
                    <td class=" text-center" colspan="5">
                        There is no record yet <br>
                    <a class=" btn btn-primary" href="{{ route("category.create")}}">Create Category First</a>
                    </td>
                </tr>

            @endforelse
        </tbody>
    </table>

@endsection
