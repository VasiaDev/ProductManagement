@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>{{ $product->name }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <p><strong>Price:</strong> {{ $product->price }} $</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('product.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('product.delete', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection
