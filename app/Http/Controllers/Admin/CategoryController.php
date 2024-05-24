<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Subsubcategory;
class CategoryController extends Controller
{
    public function category()
    {
        $categories = Category::all();

        return view('backend.Category', compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the incoming request data
        $request->validate([
            'cat_title' => 'required|string|max:255',
            'cat_file' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Assuming cat_file is for image upload
        ], [
    'cat_title.required' => 'The category Name is required.',
    'cat_title.string' => 'The category Name must be a string.',
    'cat_title.max' => 'The category Name must not exceed :max characters.',
    'cat_file.required' => 'The Image is required.',
    'cat_file.image' => 'The Image must be an image.',
    'cat_file.mimes' => 'The Image must be a jpeg, png, jpg image.',
    'cat_file.max' => 'The Image size must not exceed 2 MB.',
]);

        // Store the uploaded file

        // Handle file upload if a new image is provided
        if ($request->hasFile('cat_file')) {
            // Get the file from the request
            $file = $request->file('cat_file');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path('uploads'), $fileName);
        } else {
            $fileName = 'No Images';
        }
        $slug = Str::slug($request->input('cat_title'));
        // Create the category
        $category = new Category();
        $category->admin_id = '1'; // Assuming you want to associate the category with the currently logged-in admin
        $category->cat_title = $request->input('cat_title');
        $category->cat_slug = $slug;
        $category->cat_file = $fileName;
        $category->save();

        // dd($category);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Category created successfully');
    }

    public function update(Request $request, $category)
    {
        // Validate the incoming request data
        $request->validate([
            'cat_title' => 'required|string|max:255',
            'cat_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Update is optional, so image is not required
        ], [
    'cat_title.required' => 'The category Name is required.',
    'cat_title.string' => 'The category Name must be a string.',
    'cat_title.max' => 'The category Name must not exceed :max characters.',
    'cat_file.required' => 'The Image is required.',
    'cat_file.image' => 'The Image must be an image.',
    'cat_file.mimes' => 'The Image must be a jpeg, png, jpg, or gif image.',
    'cat_file.max' => 'The Image size must not exceed 2 MB.',
]);

        // Retrieve the category from the database
        $category = Category::findOrFail($category);

        // Update category data
        $category->cat_title = $request->input('cat_title');
        $slug = Str::slug($request->input('cat_title'));
        $category->cat_slug = $slug;

        if ($request->hasFile('cat_file')) {
            // Handle file upload if a new image is provided
            $file = $request->file('cat_file');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path('uploads'), $fileName);
            $category->cat_file = $fileName;
        } elseif ($category->cat_file === null || empty($category->cat_file)) {
            // Only update the image if it's not already set
            $category->cat_file = '';
        }

        $category->save();
        // dd($category);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Category updated successfully');
    }

    public function delete($category)
    {
        $category = Category::findOrFail($category);
        $category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully');
    }

    public function productType()
    {
        $categories = ProductType::all();
        $categoryid=Category::all();

        return view('backend.Producttype', compact('categories','categoryid'));
    }

    public function ProductTypeStore(Request $request)
    {
        // dd($request->all());
        // Validate the incoming request data
        $request->validate([
            'type_title' => 'required|string|max:255',
            // 'type_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming cat_file is for image upload
        ]);


        $slug = Str::slug($request->input('type_title'));

        // Handle file upload if a new image is provided
        if ($request->hasFile('type_file')) {
            // Get the file from the request
            $file = $request->file('type_file');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path('uploads'), $fileName);
        } else {
            $fileName = '';
        }

        // Create the category
        $category = new ProductType();
        $category->admin_id = '1'; // Assuming you want to associate the category with the currently logged-in admin
        $category->type_title = $request->input('type_title');
        $category->sub_slug = $slug;
        $category->category_id = $request->input('category_id');
        $category->type_file = $fileName;
        $category->save();

        // dd($category);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Category created successfully');
    }

    public function ProductTypeUpdate(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'type_title' => 'required|string|max:255',
            'type_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Update is optional, so image is not required
        ]);

        // Retrieve the category from the database
        $category = ProductType::findOrFail($id);

        // Update category data
        $category->type_title = $request->input('type_title');

        if ($request->hasFile('type_file')) {
            // Handle file upload if a new image is provided
            $file = $request->file('type_file');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path('uploads'), $fileName);
            $category->type_file = $fileName;
        }
        $category->category_id = $request->input('category_id');

        $category->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Category updated successfully');
    }

    public function producttypeDelete($id)
    {
        $category = ProductType::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully');
    }

    public function subcategory(){

        $categories=Subsubcategory::all();
        $categoryid=Category::all();
//        dd($category);
        $type=ProductType::all();
//        dd($type);
        return view('backend.subcategory', compact('categories','categoryid','type'));
    }

    public function  subcategorystore(Request $request){
        // dd($request->all());
        // Validate the incoming request data
        $request->validate([
//            'type_title' => 'required|string|max:255',
            // 'type_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming cat_file is for image upload
        ]);


        $slug = Str::slug($request->input('sub_title'));



        // Create the category
        $category = new Subsubcategory();
//        $category->admin_id = '1'; // Assuming you want to associate the category with the currently logged-in admin
        $category->sub_title = $request->input('sub_title');
        $category->slug = $slug;
        $category->category_id = $request->input('category_id');
        $category->product_type_id = $request->input('product_type_id');
        if ($request->hasFile('type_file')) {
            // Handle file upload if a new image is provided
            $file = $request->file('type_file');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path('uploads'), $fileName);
            $category->type_file = $fileName;
        }
        $category->save();

        // dd($category);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Category created successfully');

    }

//    public function subcategoryall(){
//        $su
//    }

public function uodateSubcategory(Request $request,$id){
    $category =  Subsubcategory::find($id);
    $category->sub_title = $request->input('sub_title');

    $category->category_id = $request->input('category_id');
    if ($request->hasFile('type_file')) {
        // Handle file upload if a new image is provided
        $file = $request->file('type_file');
        $fileName = $file->getClientOriginalName();
        $filePath = $file->move(public_path('uploads'), $fileName);
        $category->type_file = $fileName;
    }
    $category->product_type_id = $request->input('product_type_id');

    $category->save();

    return redirect()->back()->with('success', 'Category created successfully');

}
public function subcategoryDelete($id){
        $del=Subsubcategory::where('id',$id)->delete();
        return back();

}

}
