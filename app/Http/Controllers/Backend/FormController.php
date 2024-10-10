<?php

namespace App\Http\Controllers\Backend;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormController extends Controller
{


    public function index(Request $request)
    {
        // Initialize query
        $query = Form::query();

        // Check if there is a search term
        if ($request->has('search') && $request->input('search') != '') {
            $search = $request->input('search');
            // Filter records based on search term
            $query->where(function($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('email', 'LIKE', "%{$search}%")
                  ->orWhere('category', 'LIKE', "%{$search}%");
            });
        }

        // Get paginated results
        $participations = $query->paginate(5); // Example: Paginate with 5 contacts per page

        return view('backend.form.index', compact('participations'));
    }

    public function delete(Request $request, $id)
    {
        $contact = Form::find(($id));

        if (!$contact) {
            return redirect()->back()->with('error', 'Contact not found.');
        }

        $contact->delete();

        return redirect()->route('form.index')->with('success', 'Contact deleted successfully.');
    }
    public function download($id)
{
    $participation = Form::findOrFail($id);
    $filePath = public_path($participation->video); // Make sure this points to the correct video path

    return response()->download($filePath);
}



}
