<?php

namespace App\Service;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductService
{
    /**
     * Create a new class instance.
     */
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $product = Product::firstOrCreate($data);
            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
            abort(500);
        }
    }

    public function update($data, $product){
        try {
            DB::beginTransaction();
            $product->update($data);
            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
            abort(500);
        }
        return $product;
    }
}
