<?php

namespace App\Http\Controllers\Product;

use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        $product = $this->service->update($data, $product);

        return redirect()->route('product.show', compact('product'))->with('success', 'Product updated successfully.');
    }
}
