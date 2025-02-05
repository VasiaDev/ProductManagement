<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Product\BaseController;

class CreateController extends BaseController
{
    function __invoke(){
        return view('products.create');
    }
}
