<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Relive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class RelivingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = Relive::paginate(15);
        return view('backend.relieve.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Relive::all();


        return view('backend.relieve.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'nullable|integer',
            'pdf_file' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $detail = new Relive;

        $detail->title = $request->title;

        if ($request->category_id) {
            $detail->category_id = $request->category_id;
        } else {
            $detail->category_id = 0;
        }
        if ($request->hasFile('pdf_file')) {
            $fileName = time() . '-trainingevent-' . $request->file('pdf_file')->getClientOriginalName();
            $filePath = $request->file('pdf_file')->storeAs('uploads/relivingorders', $fileName, 'public');
            $detail->pdf_file = '/public/storage/' . $filePath;
        }
        $detail->save();
        Artisan::call('cache:clear');
        return back()->with('success', 'Details added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('backend.trainingevent.show');
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        // Decrypt the ID if necessary



        $relieve = Relive::findOrFail(decrypt($id));
        $categories = Relive::distinct()->pluck('category_id');
        return view('backend.relieve.edit', compact('relieve', 'categories'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'category_id' => 'nullable|integer',
            'pdf_file' => 'nullable|file|mimes:pdf|max:2048'

        ]);
        $detail = Relive::findOrFail(decrypt($id));
        $detail->title = $request->title;
        if ($request->category_id) {
            $detail->category_id = $request->category_id;
        } else {
            $detail->category_id = 0;
        }
        if ($request->hasFile('pdf_file')) {
            $fileName = time() . '-trainingevent-' . $request->file('pdf_file')->getClientOriginalName();
            $filePath = $request->file('pdf_file')->storeAs('uploads/relivingorders', $fileName, 'public');
            $detail->pdf_file = '/public/storage/' . $filePath;
        }
        $detail->update();
        Artisan::call('cache:clear');
        return back()->with('success', 'Detail updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Relive::findOrFail(decrypt($id))->delete();
        Artisan::call('cache:clear');
        return back()->with('success', 'Detail deleted successfully.');
    }
}