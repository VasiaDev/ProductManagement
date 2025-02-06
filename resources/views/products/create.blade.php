@extends('layouts.main')

@section('content')
    <div class="container">
        <h2 class="mb-3">Adding products</h2>

        <form action="{{ route('product.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Product name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                @error('description')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" step="0.01">
                @error('price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection
