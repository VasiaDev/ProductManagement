@extends('layouts.main')

@section('content')
    <div class="max-w-2xl mx-auto px-4 mt-5">
        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="bg-dark p-6">
                <h2 class="text-2xl font-bold text-light whitespace-normal max-w-2xl break-words">{{ $product->name }}</h2>
            </div>

            <div class="p-6 space-y-4">
                <div class="flex items-start">
                    <span class="text-secondary font-semibold w-32 flex-shrink-0">Description:</span>
                    <p class="text-gray-700 flex-1 whitespace-normal max-w-md break-words">{{ $product->description }}</p>
                </div>
                <div class="flex items-center">
                    <span class="text-secondary font-semibold w-32 flex-shrink-0">Price:</span>
                    <p class="text-gray-700 font-semibold">
                        <span class="text-accent">${{ $product->price }}</span>
                    </p>
                </div>
            </div>

            <div class="bg-gray-50 px-6 py-4 border-t border-gray-100 flex items-center space-x-4">
                <a href="{{ route('product.index') }}"
                   class="text-secondary hover:text-dark transition-colors duration-200"
                   title="Back to list">
                    <i class="fa-solid fa-circle-chevron-left fa-2xl"></i>
                </a>
                <a href="{{ route('product.edit', $product->id) }}"
                   class="text-accent hover:text-secondary transition-colors duration-200"
                   title="Edit product">
                    <i class="fa-solid fa-pencil fa-2xl"></i>
                </a>
                <form action="{{ route('product.delete', $product->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="text-red-600 hover:text-red-800 transition-colors duration-200"
                            title="Delete product">
                        <i class="fa-solid fa-trash-can fa-2xl"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
