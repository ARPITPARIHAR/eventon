<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    public function showUserPanel()
    {
        // Get the authenticated user's ID
        $userId = Auth::id(); // Retrieve the authenticated user's ID

        // Get all forms submitted by the authenticated user
        $forms = Form::where('user_id', $userId)->get(); // Fetch forms by user_id

        return view('user.index', compact('forms'));
    }



    // Method to display forms submitted by the logged-in user

    // Method to show the form edit page
    public function editForm($id)
    {
        // Find the form by its ID, or fail if it doesn't exist
        $forms = Form::findOrFail($id);

        // Check if the authenticated user owns the form


        return view('user.edit', compact('forms'));
    }


    // Method to update a form submission
    public function updateForm(Request $request, Form $form)
    {
        // Validate request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'number' => 'required|string|max:15',
            'age' => 'required|integer',
            'game_category' => 'required|string',
            'custom_game_category' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'message' => 'nullable|string',
        ]);

        // Update form fields
        $form->name = $request->name;
        $form->email = $request->email;
        $form->number = $request->number;
        $form->age = $request->age;

        // Handle category selection
        if ($request->game_category === 'custom' && !empty($request->custom_game_category)) {
            $form->category = $request->custom_game_category;
        } elseif (!empty($request->game_category)) {
            $form->category = $request->game_category;
        }

        // Handle logo upload
        if ($request->file('logo')) {
            // Get original file name without extension
            $originalName = pathinfo($request->file('logo')->getClientOriginalName(), PATHINFO_FILENAME);
            // Create a new file name
            $fileName = time() . '-logo-' . $originalName;
            // Store the file and get the path
            $filePath = $request->file('logo')->storeAs('uploads/video', $fileName, 'public');
            // Store the path in the database
            $form->video = '/storage/' . $filePath; // Removed 'public' from the path
        }

        $form->message = $request->message;

        // Save the changes
        $form->save();

        return redirect()->route('user.index')->with('success', 'Form updated successfully.');
    }

    // Method to delete a form submission
    public function destroyForm(Form $form)
    {
        // Ensure the form belongs to the authenticated user
        $this->authorize('delete', $form);

        // Delete the form entry
        $form->delete();

        return redirect()->route('user.index')->with('success', 'Form deleted successfully.');
    }
}


