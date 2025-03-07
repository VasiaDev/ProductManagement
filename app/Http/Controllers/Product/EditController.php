<?php

namespace App\Http\Controllers\Product;

use App\Models\Product;

class EditController extends BaseController
{
    public function __invoke(Product $product)
    {
        return view('products.edit', compact('product'));
    }
}
