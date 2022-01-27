<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function insertProducts(Request $request)
    {
        $name_prod = $request->input('name_prod');
        $name_representative = $request->input('name_representative');
        $email = $request->input('email');
        $phone_number = $request->input('phone_number');
        $address = $request->input('address');

        print_r($name_prod);
    }
}
