<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ContactController extends Controller
{


    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        Contact::create($validated);

        return redirect()->route('contact')->with('success', 'Thank you! Your message has been received.');
    }



    public function sadik()
    {
        
        $imageDirectory = public_path('images');

        if (!file_exists($imageDirectory)) {
            return abort(404, 'The images directory does not exist.');
        }

        $files = File::files($imageDirectory);

        $images = [];
        foreach ($files as $file) {
            $images[] = asset('images/' . $file->getFilename());
        }

        return view('images', compact('images'));
    }
}
