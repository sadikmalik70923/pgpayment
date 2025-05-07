<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Customer;
use Illuminate\Support\Facades\Storage; // fix typo


class RegisteredUserController extends Controller
{
   
public function submit(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:customer,email',
        'number' => 'required',
        'address' => 'required',
        'addhar_no' => 'required',
        'pan_no' => ['required', 'regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/'],
        'rent_home_address' => 'required',
        'password' => 'required|confirmed|min:6',
        // 'selpi_image' => 'required|string', // base64 string
        'selpi_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',

    ]);

    // // Handle base64 selfie image
    // $base64Image = $request->input('selpi_image');
    // $image = str_replace('data:image/png;base64,', '', $base64Image);
    // $image = str_replace(' ', '+', $image);
    // $imageName = time() . '.png';
    // Storage::disk('public')->put("selfies/{$imageName}", base64_decode($image));
    $imagePath = $request->file('selpi_image')->store('selpis', 'public');

    // Save user
    $customer = new Customer();
    $customer->name = $validated['name'];
    $customer->email = $validated['email'];
    $customer->number = $validated['number'];
    $customer->address = $validated['address'];
    $customer->addhar_no = $validated['addhar_no'];
    $customer->pan_no = $validated['pan_no'];
    $customer->rent_home_address = $validated['rent_home_address'];
    $customer->password = Hash::make($validated['password']);
    // $customer->selpi_image = "selfies/{$imageName}"; // Store path
    $customer->selpi_image = $imagePath;

    $customer->save();

    return redirect()->route('payment.show')->with('success', 'Registration complete with selfie!');
}



    
}
