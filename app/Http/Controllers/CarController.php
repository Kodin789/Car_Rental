<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Facades\Paystack;

class CarController extends Controller
{

    public function redirectToGateway()
    {
        // dd(Paystack::getAuthorizationUrl()->redirectNow());
        try {
            return Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function  handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        // dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want.
        return redirect()->route('gallery_page');
    }

    public function create()
    {
        $brands = brand::all();
        return view('user.add_car', compact('brands'));
    }

    public function host()
    {
        $cars = Car::all();
        return view('user.all_car', compact('cars'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'description' => 'required',
            'quantity' => 'required',
            'brand_id' => 'required',
            'color' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg'

        ]);

        $car = Car::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'color' => $request->color,
            'brand_id' => $request->brand_id,
            'image' => 'default'


        ]);

        $file = $request->file('image');  //getting the image
        $ext = $file->getClientOriginalExtension(); //the png or jpg
        $filename = \Str::slug($request->name) . time() . '.' . $ext;
        $file->storePubliclyAs('public\images', $filename);

        $car->image = $filename;
        $car->save();


        return back()->with(['status' => 'car added']);
    }

    public function view(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg'

        ]);

        $brand = brand::create([
            'name' => $request->name,
            'image' => 'default'
        ]);

        $file = $request->file('image');  //getting the image
        $ext = $file->getClientOriginalExtension(); //the png or jpg
        $filename = \Str::slug($request->name) . time() . '.' . $ext;
        $file->storePubliclyAs('public\images', $filename);

        $brand->image = $filename;
        $brand->save();

        return back()->with(['status' => 'brand added']);
    }

    public function index(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'car_id' => 'required',
            'pick_up_address' => 'required',
            'pick_up_date' => 'required',
            'drop_off_address' => 'required',
            'drop_off_date' => 'required',

        ]);

        $form = form::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'car_id' => $request->car_id,
            'pick_up_address' => $request->pick_up_address,
            'pick_up_date' => $request->pick_up_date,
            'drop_off_address' => $request->drop_off_address,
            'drop_off_date' => $request->drop_off_date,

        ]);
    }
}
