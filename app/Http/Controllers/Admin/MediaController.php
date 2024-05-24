<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\SliderBanner;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::all();

        return view('backend.Media', compact('media'));
    }

    public function uploadMedia(Request $request)
    {
        $request->validate([
            'type' => 'required',
        'media' => [
            'required',
            // 'file',
            function ($attribute, $value, $fail) {
                $allowedImageTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
                $allowedVideoTypes = ['video/mp4', 'video/avi', 'video/mov', 'video/wmv'];

                $maxImageSize = 2048; // Max size for images (2MB)
                $maxVideoSize = 10000; // Max size for videos (10MB)

                // Loop through each file
                foreach ($value as $file) {
                    // Get the file's MIME type
                    $mimeType = $file->getMimeType();

                    // Check if it's either an image or a video
                    if (!in_array($mimeType, array_merge($allowedImageTypes, $allowedVideoTypes))) {
                        $fail('The '.$attribute.' must be either an image or a video file.');

                        return;
                    }

                    // Apply size validation based on the file type
                    if (in_array($mimeType, $allowedImageTypes) && $file->getSize() > ($maxImageSize * 1024)) {
                        $fail('The '.$attribute.' must not exceed 2MB.');

                        return;
                    } elseif (in_array($mimeType, $allowedVideoTypes) && $file->getSize() > ($maxVideoSize * 1024)) {
                        $fail('The '.$attribute.' must not exceed 10MB.');

                        return;
                    }
                }
            },
        ],
    ]);
        if ($request->hasFile('media')) {
            foreach ($request->file('media') as $file) {
                // Check if the file is valid
                if ($file->isValid()) {
                    $fileName = $file->getClientOriginalName();
                    // Move the file to the uploads directory
                    $path = $file->move(public_path('uploads'), $fileName); // Adjust the storage path as needed

                    // Save file details to the database
                    $media = new Media();
                    $media->media = $fileName;
                    $media->type = $request->type;
                    $media->save();
                }
            }

            return redirect()->back()->with('success', 'Media uploaded successfully.');
        }

        return redirect()->back()->with('error', 'No files were uploaded.');
    }

    public function deleteMedia($id)
    {
        Media::find($id)->delete();

        return redirect()->back()->with('success', 'Media deleted successfully.');
    }

    public function slider()
    {
        $media = SliderBanner::all();

        return view('backend.Slider', compact('media'));
    }

    public function sliderStore(Request $request)
    {
        $request->validate([
        //    'cat_title' => 'required|string|max:255',
           'media' => 'required|max:2048', // Update is optional, so image is not required
        ], [

    // 'media.max' => 'The category Name must not exceed :max characters.',
    // 'media.required' => 'The Image is required.',
    // 'media.image' => 'The Image must be an image.',
    // 'media.mimes' => 'The Image must be a jpeg, png, jpg.',
    'media.max' => 'The Image size must not exceed 2 MB.',
        ]);
        if ($request->hasFile('media')) {
            foreach ($request->file('media') as $file) {
                // Check if the file is valid
                if ($file->isValid()) {
                    $fileName = $file->getClientOriginalName();
                    // Move the file to the uploads directory
                    $path = $file->move(public_path('uploads'), $fileName); // Adjust the storage path as needed

                    // Save file details to the database
                    $media = new SliderBanner();
                    $media->media = $fileName;
                    $media->save();
                }
            }

            return redirect()->back()->with('success', 'Media uploaded successfully.');
        }

        return redirect()->back()->with('error', 'No files were uploaded.');
    }

    public function sliderDelete($id)
    {
        SliderBanner::find($id)->delete();

        return redirect()->back()->with('success', 'Media deleted successfully.');
    }
}
