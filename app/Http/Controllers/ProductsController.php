<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\list_model;

class ProductsController extends Controller
{
    public function insertProducts(Request $request)
    {
        error_log(request('name_prod'));
    }

    public function products_view() {
        return view('products');
    }
}
