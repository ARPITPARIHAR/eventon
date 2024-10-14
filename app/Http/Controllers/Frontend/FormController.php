<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        // Debugging: Check incoming request data
        //   dd($request->all());


        // Create a new Form instance
        $buyer = new Form;
        $buyer->user_id = auth()->id();
        // Assign request values to the Form model
        $buyer->name = $request->name;
        $buyer->email = $request->email;
        $buyer->number = $request->number;
        $buyer->age = $request->age;
        // Determine the category based on user input
        if ($request->game_category === 'custom' && !empty($request->custom_game_category)) {
            $buyer->category = $request->custom_game_category;
        } elseif (!empty($request->game_category)) {
            $buyer->category = $request->game_category;
        } else {
            // Handle case where no category is selected
            return back()->withErrors(['game_category' => 'Please select a category.']);
        }

        // if ($request->file('logo')) {
        //     // Get original file name without extension
        //     $originalName = pathinfo($request->file('logo')->getClientOriginalName(), PATHINFO_FILENAME);

        //     // Create a new file name by combining current timestamp and original name
        //     $fileName = time() . '-logo-' . $originalName;

        //     // Debugging to check the file name
        //     // dd($fileName);

        //     // Store the file and get the path
        //     $filePath = $request->file('logo')->storeAs('uploads/video', $fileName, 'public');

        //     // Debugging to check the file path
        //     // dd($filePath);

        //     // Store the video path in the database
        //     $buyer->video =  '/public/storage/' . $filePath;
        // }

        // Additional fields
        $buyer->video = $request->logo;
        $buyer->message = $request->message;

        // Save the Form model
        $buyer->save();

        // Redirect back with a success message
        return back()->with('success', 'Your submission was submitted successfully');
    }
}
