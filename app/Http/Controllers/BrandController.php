<?php

namespace App\Http\Controllers;

use App\Models\brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('user.add_brand');
    }


    public function all()
    {
        return view('user.inbox');
    }


    public function call()
    {
        return view('user.calender');
    }

    public function host()
    {
        $brands = brand::all();
        return view('user.all_brand', compact('brands'));
    }

}
