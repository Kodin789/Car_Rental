<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $brands = brand::all();
        $cars = Car::all();
        return view('welcome', compact('brands', 'cars'));
    }

    public function all()
    {
        return view('cars.all');
    }

    public function view()
    {
        return view('home_page');
    }

    public function show()
    {
        return view('about_us');
    }

    public function get()
    {
        return view('contact_us');
    }

    public function form()
    {
        $cars = Car::all();
        return view('gallery_page', compact('cars'));
    }

    public function list()
    {
        return view('blog');
    }

    public function create()
    {
        return view('coupe');
    }

    public function live()
    {
        return view('sedan');
    }

    public function host()
    {
        return view('suv');
    }

    public function for()
    {
        return view('our_service');
    }

    public function page($id)
    {
        $car = Car::find($id);
        $cars = $car->cars;
        return view('details_page', compact('car', 'cars'));
    }

    public function edit(User $user)
    {
        return view('edit_image');
    }

    public function save(Request $request, User $user)
    {
      if ($request->has('images')) {
        $file = $request->file('images');  //getting the image
        $ext = $file->getClientOriginalExtension(); //the png or jpg
        $filename = \Str::slug($request->name) . time() . '.' . $ext;
        $file->storePubliclyAs('public\images', $filename);

        Auth::user()->images = $filename;
        Auth::user()->save();
      }


        return redirect()->route('edit_image');
    }
}
