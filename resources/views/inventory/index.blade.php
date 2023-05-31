@extends("layouts.master")

@section('title')
   Item List Page
@endsection

@section('content')

    <h4>Item list Page</h4>

    <table class=" table">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Price</td>
                <td>Stock</td>
                <td>Control</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item )

                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>
                       <a class=" btn btn-sm btn-outline-success" href="{{ route("inventory.show",$item->id)}}">Detail</a>

                       <a class=" btn btn-sm btn-outline-info" href="{{ route("inventory.edit",$item->id) }}">Edit</a>

                       <form class=" d-inline-block" action="{{ route("inventory.destroy", $item->id) }}" method="POST">
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
                    <a class=" btn btn-primary" href="{{ route("inventory.create")}}">Create Items First</a>
                    </td>
                </tr>

            @endforelse
        </tbody>
    </table>

@endsection
