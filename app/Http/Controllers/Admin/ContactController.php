<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function contact()
    {
        $contact = Contact::all();

        return view('backend.Contact', compact('contact'));
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'phone' => ['required', 'regex:/^(\+\d{1,3}[- ]?)?\d{10}$/'],
            'email' => 'required',
        ]);

        // $imageName = time().'.'.$request->image->extension(); // Generate unique image name
        // $request->image->move(public_path('images'), $imageName); // Move the uploaded image to public/images directory
        $admin = Auth::guard('admin')->user();
        // dd($admin);
        $contact = new Contact();
        $contact->admin_id = $admin->id;
        // $contact->title = $request->title;
        // $contact->description = $request->description;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        // $contact->image_path = 'images/'.$imageName; // Store the image path
        $contact->save();

        return redirect()->back()->with('success', 'Contact created successfully.');
    }

    public function contactDelete($id)
    {
        Contact::find($id)->delete();

        return redirect()->back()->with('success', 'Contact deleted successfully.');
    }

    public function edit($id)
    {
        $contact = Contact::find($id);

        return view('backend.editContact', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $admin = Auth::guard('admin')->user();

        $contact = Contact::find($id);
        $contact->admin_id = $admin->id;

        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        // $contact->image_path = 'images/'.$imageName; // Store the image path
        $contact->save();

        return redirect()->back()->with('success', 'Contact updated successfully.');
    }
}
