@extends('backend.sidebar')
@section('content')
    <style>
        .form-control {
            border: 1px solid rgb(189, 176, 176);
        }

        /* Custom styling for file input */
        .custom-file-input {
            color: transparent;
            /* Hide the default text color */
            cursor: pointer;
            /* Show pointer cursor on hover */
        }

        /* Style the file input container */
        .file-input-container {
            position: relative;
            overflow: hidden;
            display: inline-block;
            border: 1px solid #ccc;
            padding: 6px 12px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        /* Style the file input button */
        .file-input-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        select.form-control {
            padding: 1rem !important;
            border: 0;
            outline: 1px solid #ebedf2;
            color: #000;
        }
        p{
            margin-top:1rem;
        }
    </style>
  
    {{-- <div class="main-panel"> --}}
    <div class="content-wrapper">
      
   
        <div class="container">
            <div class="col-lg-12 grid-margin stretch-card">
               
                <div class="card" style="overflow-x: scroll">
                    <div class="card-body">
                    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="flex" style="display: flex ;justify-content: space-between">
                            <h4 class="card-title">Products Table</h4>
                       <div style="display:flex">
                       <a href="{{url('/admin/download')}}"  type="submit"
                                class="btn btn-gradient-success me-2">Sample excel Data</a>
                       <button data-toggle="modal" data-target=".bd-example-modal-md" type="submit"
                                class="btn btn-gradient-primary me-2">Add New Product</button>
                                <button data-toggle="modal" data-target="#exampleModal" type="submit"
                                class="btn btn-gradient-primary me-2">Import Product</button>
                       </div>
                        </div>
                       
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('admin/bulkupload')}}" method="post"  enctype="multipart/form-data">
    @csrf
                    <div class="form-group">
                        <input type="file" class="form-control"  name="csv_file">
                    </div>
                    <div class="form-group">

                    <div class="form-group">
                    <select name="category_id" class="form-control"
                        style="width:100%;padding:1rem;border:1px solid gray">
                        <option value="">Select Product Type</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">
                            
                                {{ $category->cat_title }}
                            </option>
                        @endforeach
                    </select>
                    </div>
                        <div class="form-group">
                            <select name="subsub_cate_id" class="form-control"
                                    style="width:100%;padding:1rem;border:1px solid gray">
                                <option value="">Select Product Type</option>
                                @foreach ($subcate as $category)
                                    <option value="{{ $category->id }}">

                                        {{ $category->sub_title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                    <div class="form-group">
                              <select name="product_type_id" class="form-control"
                                                                            id=""
                                                                            style="width:100%;pading:1rem;border:1px solid gray">
                                                                            <option value="">Select Product Type</option>
                                                                            @foreach ($producttype as $producttypes)
                                                                                <option value="{{ $producttypes->id }}">
                                                                                 
                                                                                    {{ $producttypes->type_title }}
                                                                                </option>
                                                                         
                                                                            @endforeach

                                                                            
                                                                        </select>
                                                                    </div>                                                 


</div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
      </div>
      
    </div>
  </div>
</div>
                        {{-- <p class="card-description"> Add class <strong style="color: green">{{ success }}</strong> --}}
                        </p>
                        <!--<form action="{{url('admin/multidelete')}}" method="post">-->
                           <div style="display:flex;justify;justify-content: end;"> <button style="border: none;
    width: 10%;
    padding: 5px;
    background: #84d9d2;
    color: #fff;" type="">Delete All</button></div>
                            <table class="table table-striped overflow-x" >
                              <input id="myInput" type="text" placeholder="Search.." style="border:1px solid grey;padding:0.3rem;border-radius:5px">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th> Sl No# </th>
                                    <th> Product Image </th>
                                    <th> Product name </th>
                                    <th> products  </th>
                                    <th> product Category </th>
                                     <th> product Sub Category </th>
                                    <th> Amount </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                @foreach ($products as $key => $product)
                                    <tr>
                                         <td><input type="checkbox" name="ids[]" value="{{ $product->id }}"></td>
                                        <td>{{ $key + 1 }}</td>

                                        <td>
                                            
                                            
                                        <img src="{{ $product->image ? asset('uploads/' . $product->image) : 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg' }}" alt="">

                                    </td>
                                   
                                        <td>{{ $product->title }}</td>
                                        <td>{{ $product->cat_title }}</td>
                                        <td>{{ $product->type_title }}</td>
                                        <td>{{$product->sub_title}}</td>
                                        <td>{{ $product->mrp }}</td>
                                        <td>

                                            <a data-toggle="modal" data-target=".bd-example-modal-md-{{ $product->id }}"
                                                class="">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </a> |
                                            <a href={{ url('admin/product-delete', $product->id) }} class=" ">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>


                                        </td>
                                        {{-- <td>{{ $product }}</td> --}}
                                        <!-- Adjust this line according to your actual product attribute -->
                                        <!-- Other table cells for product details -->
                                    </tr>
                                    <div class="modal fade bd-example-modal-md-{{ $product->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">

                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3>Update Product </h3>
                                                    <button type="button" class="btn-close" data-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="card">


                                                    <div class="card-body">
                                                        <form action="{{ url('admin/product-update', $product->id) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <input type="text" name="title"
                                                                            value="{{ $product->title }}"
                                                                            placeholder="product name" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <input type="text" name="mrp"
                                                                            value="{{ $product->mrp }}"
                                                                            placeholder="product price"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">

                                                                        <select name="category_id" class="form-control"
                                                                            style="width:100%;padding:1rem;border:1px solid gray">
                                                                            <!--<option value="">Select Category</option>-->
<option value="">Select Category {{$product->category_id}}</option>
@foreach ($cat as $c)
    <option value="{{ $c->id }}"
        {{  $product->category_id === $c->id ? 'selected' : '' }}>
        {{ $c->cat_title }}
    </option>
@endforeach


                                                                        </select>


                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">

                                                                        <select name="subsub_cate_id" class="form-control"
                                                                            style="width:100%;padding:1rem;border:1px solid gray">
                                                                            <option value="">Select</option>
                                                                            @foreach ($subcate as $sub)
                                                                                <option value="{{ $sub->id }}"
                                                                                    {{ $product->subsub_cate_id === $sub->id ? 'selected' : '' }}>
                                                                                    {{ $sub->sub_title }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>


                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <select name="product_type_id" class="form-control"
                                                                            id=""
                                                                            style="width:100%;pading:1rem;border:1px solid gray">
                                                                            <option value="">Select</option>
                                                                            @forelse ($producttype as $producttypes)
                                                                                <option value="{{ $producttypes->id }}"
                                                                                    {{ $product->product_type_id == $producttypes->id ? 'selected' : '' }}>
                                                                                    {{ $producttypes->type_title }}
                                                                                </option>
                                                                            @empty
                                                                            @endforelse

                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <input type="text" name="pkt_size"
                                                                            value="{{ $product->pkt_size }}"
                                                                            placeholder="product PKT" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <input type="text" name="weight"
                                                                            value="{{ $product->weight }}"
                                                                            placeholder="Product Weight"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <input type="text" name="qty"
                                                                            value="{{ $product->qty }}"
                                                                            placeholder="Product QTY" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <input type="text" name="box_price"
                                                                            value="{{ $product->box_price }}"
                                                                            placeholder="Product Box Price"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <input type="text" name="distributer_price"
                                                                            value="{{ $product->distributer_price }}"
                                                                            placeholder="Product Distributer Price"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $product->description }}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="file-input-container">
                                                                    <input type="file" name="image" id="fileInput"
                                                                        class="custom-file-input">
                                                                    <p style="color:red">The Image must be a jpeg, png,
                                                                        jpg, or gif image.
                                                                        <br>
                                                                        The Image size must not exceed 2 MB.
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group "
                                                                style="display: flex;justify-content: flex-end">
                                                                <button type="submit"
                                                                    class="btn btn-success">Submit</button>
                                                                {{-- <input type="button" value="submit" class="form-control"> --}}
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </tbody>
                             
                        </table>
                        <!--</form>-->
                        
                        <style>
                            svg{
                                display:none;
                            }
                            .z-0{
                                display:none;
                            }
                            /*.text-sm{*/
                            /*    display:none;*/
                            /*}*/
                        </style>
                        <div class="pagination" style="margin-top:2rem">
                            {{ $products->links() }}
                        </div>
                       
                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target=".bd-example-modal-md">Large modal</button> --}}

                        <div class="modal fade bd-example-modal-md" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3>Add Product </h3>
                                        <button type="button" class="btn-close" data-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="card">


                                        <div class="card-body">
                                            <form action="{{ url('admin/product-store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" name="title"
                                                                placeholder="product name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" name="mrp"
                                                                placeholder="product price" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <select name="category_id" class="form-control"
                                                                id=""
                                                                style="width:100%;pading:1rem;border:1px solid gray">
                                                                <option value=""> Select Category
                                                                    @foreach ($categories as $category)
                                                                <option value={{ $category->id }}>
                                                                    {{ $category->cat_title }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <select name="subsub_cate_id" class="form-control"
                                                                style="width:100%;padding:1rem;border:1px solid gray">
                                                            <option value="">Select sub Category</option>
                                                            @foreach ($subcate as $category)
                                                                <option value="{{ $category->id }}">

                                                                    {{ $category->sub_title }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <select name="product_type_id" class="form-control"
                                                                id=""
                                                                style="width:100%;pading:1rem;border:1px solid gray">
                                                                <option value=""> Select Product Type
                                                                </option>
                                                                @forelse ($producttype as $producttypes)
                                                                    <option value="{{ $producttypes->id }}">
                                                                        {{ $producttypes->type_title }}</option>
                                                                @empty
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" name="pkt_size"
                                                                placeholder="product PKT" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" name="weight"
                                                                placeholder="Product Weight" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" name="qty"
                                                                placeholder="Product QTY" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" name="box_price"
                                                                placeholder="Product Box Price" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" name="distributer_price"
                                                                placeholder="Product Distributer Price"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <div class="file-input-container">
                                                        <input type="file" name="image" id="fileInput"
                                                            class="custom-file-input">
                                                        <p style="color:red">The Image must be a jpeg, png, jpg, or gif
                                                            image.
                                                            <br>
                                                            The Image size must not exceed 2 MB.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="form-group " style="display: flex;justify-content: flex-end">
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                    {{-- <input type="button" value="submit" class="form-control"> --}}
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
    </script>
    {{-- </div> --}}
@endsection
