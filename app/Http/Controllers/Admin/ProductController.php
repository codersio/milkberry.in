<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Subsubcategory;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::join('categories', 'products.category_id', '=', 'categories.id')
    ->leftJoin('product_types', 'products.product_type_id', '=', 'product_types.id')
    ->leftJoin('subsubcategories', 'products.subsub_cate_id', '=', 'subsubcategories.id')
    ->select('products.id', 'products.title', 'products.image', 'products.mrp', 'categories.cat_title', 'product_types.type_title','products.category_id','products.subsub_cate_id','products.product_type_id','products.description','products.weight','products.box_price','products.distributer_price','products.pkt_size','products.qty','subsubcategories.sub_title')
    ->orderByDesc('products.id')
    ->paginate(5);

        // dd($products);
        $categories = Category::all();
        $producttype = ProductType::all();
        $subcate = Subsubcategory::all();
        $cat=Category::all();
        // dd($cat);

        return view('backend/Product', compact('products', 'categories', 'producttype','subcate','cat'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the request data
        $this->validate($request, [
           'box_price'=>['nullable', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'distributer_price'=>['nullable', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'mrp' => ['nullable', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Assuming you want to validate that 'image' is an image file
        ],[
    'image.required' => 'The category Name is required.',
    'image.string' => 'The category Name must be a string.',
    'image.max' => 'The category Name must not exceed :max characters.',
    'image.required' => 'The Image is required.',
    'image.image' => 'The Image must be an image.',
    'image.mimes' => 'The Image must be a jpeg, png, jpg image.',
    'image.max' => 'The Image size must not exceed 2 MB.',
]);

        // Handle file upload
        if ($request->hasFile('image')) {
            // Get the file from the request
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $files_fld = $file->move(public_path('uploads'), $fileName);

            // At this point, you can save the path to the database or do further processing
            // For example:
            $product = new Product();
            $product->title = $request->input('title');
            $product->category_id = $request->input('category_id');
            $product->description = $request->input('description');
            $product->mrp = $request->input('mrp');
            $product->pkt_size = $request->input('pkt_size');
            $product->weight = $request->input('weight');
            $product->qty = $request->input('qty');
            $product->subsub_cate_id = $request->input('subsub_cate_id');
            $product->box_price = $request->input('box_price');
            $product->distributer_price = $request->input('distributer_price');
            $product->product_type_id = $request->input('product_type_id');
            $product->image = $fileName; // Save the path to the image file
            $product->save();
            // dd($product);

            // Redirect to a success page or do something else
            return redirect()->back()->with('success', 'Product created successfully');
        } else {
            // Handle the case when no image is uploaded
            return redirect()->back()->withInput()->withErrors(['image' => 'Please upload an image']);
        }
    }

    public function productDelete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully');
    }

    public function productUpdate(Request $request, $id)
    {
        // Validate the request data if needed
        $this->validate($request, [
            'title' => 'nullable',
            'description' => 'nullable',
            'box_price'=>['nullable', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'distributer_price'=>['nullable', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'mrp' => ['nullable', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optionally, you can validate that 'image' is an image file
        ], [
    'image.required' => 'The Image is required.',
    'image.image' => 'The Image must be an image.',
    'image.mimes' => 'The Image must be a jpeg, png, jpg, or gif image.',
    'image.max' => 'The Image size must not exceed 2 MB.',
]);

        // Find the product to update
        $product = Product::findOrFail($id);

        // Handle file upload if a new image is provided
        if ($request->hasFile('image')) {
            // Get the file from the request
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path('uploads'), $fileName);

            // Update the image path in the database
            $product->image = $fileName;
        }

        // Update other fields
        $product->title = $request->input('title');
        $product->category_id = $request->input('category_id');
        $product->description = $request->input('description');
        $product->mrp = $request->input('mrp');
        $product->pkt_size = $request->input('pkt_size');
        $product->weight = $request->input('weight');
        $product->qty = $request->input('qty');
        $product->box_price = $request->input('box_price');
        $product->distributer_price = $request->input('distributer_price');
        $product->product_type_id = $request->input('product_type_id');

        // Save the changes
        $product->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product updated successfully');
    }


    public function BulkImageUpload(Request $request ){

        $this->validate($request, [
            'product_type_id'=>'required',
             'category_id'=>'required',
             'csv_file'=>'required',
            
           
         ],[
            'product_type_id.required' => 'The Product type  is required.',
            'category_id.required' => 'The Category  is required.',
        ]);
        $file = $request->file('csv_file');

        if ($file && $file->isValid()) {
            $mime = $file->getMimeType();
            if ($mime === 'text/csv') {
                // File is a CSV
                $filePath = $file->getRealPath();
                $csvData = array_map('str_getcsv', file($filePath));
        
                // Remove the header row
                array_shift($csvData);
        
                // Iterate through CSV rows
                foreach ($csvData as $row) {
                    // Your logic to process each row and save to database
                    // Example: Create a new model instance and save it
                    Product::create([
                        'title' => $row[0],
                        'mrp' => $row[1],
                        'category_id' => $request->category_id,
                        'product_type_id' => $request->product_type_id,
                        // Add more columns as needed
                    ]);
                }
        
                return redirect()->back()->with('success', 'File imported successfully.');
            } else {
                // File is not a CSV
                return redirect()->back()->with('error', 'Invalid file format. Please upload a CSV file.');
            }
        } else {
            // No file uploaded or invalid file
            return redirect()->back()->with('error', 'No file uploaded or invalid file.');
        }
        
        
        
    }

    public function exportSampleData()
    {
        // Sample data
        // Retrieve products
        $products = Product::join('categories', 'products.category_id', '=', 'categories.id')
        ->join('product_types', 'products.product_type_id', '=', 'product_types.id')
        ->select('products.id', 'products.title', 'products.image', 'products.mrp', 'categories.cat_title', 'product_types.type_title')
        ->get();

        // Create CSV content
        $content = "Name,Price\n";
        foreach ($products as $product) {
            $content .= $product->title . ',' . $product->mrp . "\n";
        }

        // Generate file name
        $fileName = 'sample_data.csv';

        // Set headers for download
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        ];

        // Return response with file content
        return Response::make($content, 200, $headers);
    }
public function multiPleDelete(Request $request) {
        // Validate that 'ids' is an array and contains integers
        $this->validate($request, [
            'ids' => '|array',
            'ids.*' => 'integer',
        ]);

        // Find and delete the products
        Product::whereIn('id', $request->ids)->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Selected products deleted successfully');
    }

    
}
