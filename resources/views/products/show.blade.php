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
            <a href="{{ route('product.index') }}"><i class="fa-solid fa-circle-chevron-left fa-2xl m-2" style="color: #6c6996;"></i></a>
            <a href="{{ route('product.edit', $product->id) }}"><i class="fa-solid fa-pencil fa-2xl m-2" style="color: #7b541e;"></i></a>
            <form action="{{ route('product.delete', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="border-0 bg-transparent"><i class="fa-solid fa-trash-can fa-2xl m-2" style="color: #c70000;"></i></button>
            </form>
        </div>
    </div>
@endsection
