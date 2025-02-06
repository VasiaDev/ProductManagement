@extends('layouts.main')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h2 class="text-3xl font-bold text-dark mb-6">All Products</h2>

        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-secondary text-light">
                <tr>
                    <th class="px-6 py-4 text-left text-sm font-semibold">Name</th>
                    <th class="px-6 py-4 text-left text-sm font-semibold">Description</th>
                    <th class="px-6 py-4 text-left text-sm font-semibold">Price</th>
                    <th class="px-6 py-4 text-center text-sm font-semibold">Actions</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                @foreach($products as $product)
                    <tr class="hover:bg-gray-50 transition-colors duration-200">
                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-normal max-w-xs break-words">{{ $product->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-normal max-w-xs break-words">{{ $product->description }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">${{ $product->price }}</td>
                        <td class="px-6 py-4 text-sm text-center">
                            <div class="flex justify-center space-x-3">
                                <a href="{{ route('product.show', $product->id) }}"
                                   class="text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                    <i class="fas fa-eye fa-xl"></i>
                                </a>
                                <a href="{{ route('product.edit', $product->id) }}"
                                   class="text-accent hover:text-secondary transition-colors duration-200">
                                    <i class="fas fa-pencil fa-xl"></i>
                                </a>
                                <form action="{{ route('product.delete', $product->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800 transition-colors duration-200">
                                        <i class="fas fa-trash-can fa-xl"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
