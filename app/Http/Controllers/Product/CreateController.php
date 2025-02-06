<?php

namespace App\Http\Controllers\Product;

class CreateController extends BaseController
{
    function __invoke(){
        return view('products.create');
    }
}
