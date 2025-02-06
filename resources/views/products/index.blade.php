@extends('layouts.main')

@section('content')
    <h2 class="mb-3">All products</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th class="ps-5">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('product.show', $product->id) }}"><i class="fa-solid fa-eye fa-xl m-2" style="color: #00aaff;"></i></a>
                    <a href="{{ route('product.edit', $product->id) }}"><i class="fa-solid fa-pencil fa-xl m-2" style="color: #7b541e;"></i></a>
                    <form action="{{ route('product.delete', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent"><i class="fa-solid fa-trash-can fa-xl m-2" style="color: #c70000;"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
