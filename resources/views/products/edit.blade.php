@extends('layouts.main')

@section('content')
    <div class="max-w-2xl mx-auto px-4 mt-5">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="bg-dark p-6">
                <h2 class="text-2xl font-bold text-light whitespace-normal max-w-2xl break-words">Editing Product</h2>
            </div>

            <div class="p-6">
                <form action="{{ route('product.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-secondary mb-2">
                                Product Name
                            </label>
                            <input type="text"
                                   id="name"
                                   name="name"
                                   value="{{ old('name', $product->name) }}"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent transition-colors duration-200"
                            >
                            @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-secondary mb-2">
                                Description
                            </label>
                            <textarea id="description"
                                      name="description"
                                      rows="4"
                                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent transition-colors duration-200"
                            >{{ old('description', $product->description) }}</textarea>
                            @error('description')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="price" class="block text-sm font-medium text-secondary mb-2">
                                Price
                            </label>
                            <div class="relative">
                                <input type="number"
                                       id="price"
                                       name="price"
                                       value="{{ old('price', $product->price) }}"
                                       step="0.01"
                                       class="w-full pr-12 pl-5 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent transition-colors duration-200 text-left [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                                >
                                <span class="absolute inset-y-0 left-2 pr-6 flex items-center text-gray-500">$</span>
                            </div>
                            @error('price')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex justify-end space-x-4">
                            <a href="{{ route('product.index') }}"
                               class="px-6 py-2 border border-gray-300 text-secondary rounded-lg hover:bg-gray-50 transition-colors duration-200">
                                Cancel
                            </a>
                            <button type="submit"
                                    class="px-6 py-2 bg-accent text-light rounded-lg hover:bg-opacity-90 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-accent"
                            >
                                Update Product
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
