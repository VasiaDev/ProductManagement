@extends('layouts.main')

@section('content')
    <h2>All products</h2>

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
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a {{-- href="{{ route('product.show', $product->id) }}" --}} class="btn btn-primary">Посмотреть</a>
                    <a {{-- href="{{ route('product.edit', $product->id) }}" --}} class="btn btn-warning">Редактировать</a>
                    <form {{-- action="{{ route('product.destroy', $product->id) }}" --}}  method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
