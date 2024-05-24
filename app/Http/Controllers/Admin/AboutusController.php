<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function aboutus()
    {
        $abouts = AboutUs::all();

        return view('backend.Aboutus', compact('abouts'));
    }

    public function aboutusStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming image upload
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Handle file upload if a new image is provided
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path('uploads'), $fileName);
        } else {
            $fileName = '';
        }

        // Create AboutUs instance
        AboutUs::create([
            'admin_id' => 1,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $fileName,
        ]);

        return redirect()->back()->with('success', 'About Us information stored successfully.');
    }

    public function aboutusUpdate(Request $request, $id)
    {
        // dd($request->all());
        // $request->validate([
        //     'title' => 'required|string',
        //     'description' => 'required|string',
        //     // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming image upload
        // ]);

        // Handle image upload
        // if ($request->hasFile('image')) {
        //     // Handle file upload if a new image is provided
        //     $file = $request->file('image');
        //     $fileName = $file->getClientOriginalName();
        //     $filePath = $file->move(public_path('uploads'), $fileName);
        // } else {
        //     $fileName = '';
        // }

        // Create AboutUs instance
        AboutUs::where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            // 'image' => $fileName,
        ]);

        return redirect()->back()->with('success', 'About Us information Updated successfully.');
    }

    public function delete($id)
    {
        AboutUs::find($id)->delete();

        return redirect()->back()->with('success', 'About Us information deleted successfully.');
    }
}
