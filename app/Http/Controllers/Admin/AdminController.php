<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Http\Requests\Auth\AdminLoginRequest;
use App\Models\Social;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display the login view.
     */
    public function create()
    {
        return view('backend.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(AdminLoginRequest $request): RedirectResponse
    {
        // dd($request->all());
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function socialLinks(Request $request)
    {
        $social = Social::all();

        return view('backend.socialinks', compact('social'));
    }

    public function socialLinksStore(Request $request)
    {
        if ($request->hasFile('image')) {
            // Handle file upload if a new image is provided
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path('uploads'), $fileName);
        } else {
            $fileName = '';
        }
        Social::create([
            'name' => $request->name,
            'link' => $request->link,
            'image' => $fileName,
        ]);

        return back();
    }

    // public function socialLinkEdit($id)
    // {
    //     $social = Social::find($id);

    //     return view('backend.socialLinkEdit', compact('social'));
    // }

    public function socialLinksUpdate(Request $request, $id)
    {
        // Find the social link by its ID
        $social = Social::findOrFail($id);

        // Validate the request data if needed
        $request->validate([
            'name' => 'required|string',
            'link' => 'required|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);

        // Update fields other than image
        $social->name = $request->name;
        $social->link = $request->link;

        // Handle image update if a new image is provided
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path('uploads'), $fileName);
            $social->image = $fileName;
        }

        // Save the updated social link
        $social->save();

        return back();
    }

    public function socialLinksDelete($id)
    {
        $social = Social::find($id);
        $social->delete();

        return back();
    }
}
