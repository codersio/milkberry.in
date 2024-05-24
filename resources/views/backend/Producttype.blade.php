@extends('backend.sidebar')

@section('content')
    <style>
        .form-control {
            border: 1px solid rgb(189, 176, 176);
        }

        /* Custom CSS to reduce the gap between columns */
        /* .row {
                                                                                                                                                                                margin-right: -5px;
                                                                                                                                                                                /* Adjust as needed */
        margin-left: -5px;
        /* Adjust as needed */
        }

        .col-md-8,
        .col-md-4 {
            padding-right: 5px;
            /* Adjust as needed */
            padding-left: 5px;
            /* Adjust as needed */
        }

        */
    </style>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 " style="background: white;padding: 2rem">
                    <form action="{{ url('admin/product-type-create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="category name" name="type_title">

                        </div>
                       <div class="form-group">
                            <input type="file" class="form-control" placeholder="category name" name="type_file">

                        </div>

                        <div class="form-group">
                            <select name="category_id" id="" class="form-control">
                                <option value="">Select Category</option>
                                @foreach ($categoryid as $key => $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->cat_title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group " style="display: flex;justify-content: flex-end">
                            <button type="submit" class="btn btn-success">Submit</button>
                            {{-- <input type="button" value="submit" class="form-control"> --}}
                        </div>
                    </form>
                </div>
                <div class="col-md-8">
                    <table class="table table-striped" style="background: white;padding: 2rem">
                        <thead>
                            <tr>
                                <th> Sl No#</th>
                                <th> Name</th>
                                 <th> Image</th>
                                {{-- <th>Category Description</th> --}}
                                {{-- <th>Category Status</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        @forelse ($categories as $key=> $category)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $category->type_title }}</td>
                                 <td><img src="{{ asset('uploads/' . $category->type_file) }}" width="100px" height="100px">
                                </td>

                                <td>
                                    <a data-toggle="modal" data-target="#exampleModal-{{ $category->id }}" class="">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    |
                                    <a href={{ url('admin/product-type-delete', $category->id) }} class=" ">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal-{{ $category->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Type Update</h5>
                                            <button type="button" class="btn-close" data-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url('admin/product-type-update', $category->id) }}"
                                                method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        value={{ $category->type_title }} placeholder="category name"
                                                        name="type_title">

                                                </div>
                                                <div class="form-group">
                                                    <select name="category_id" id="" class="form-control">
                                                        <option value="">Select Category</option>
                                                        @foreach ($categoryid as $key => $cat)
                                                            <option value="{{ $cat->id }}" {{ $category->category_id == $cat->id ? 'selected' : '' }}>{{ $cat->cat_title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                              <div class="form-group">
                                                   <input type="file" class="form-control" placeholder="category name"--}}
                                                        name="type_file">

                                               </div>
                                                <div class="form-group " style="display: flex;justify-content: flex-end">
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                    {{-- <input type="button" value="submit" class="form-control"> --}}
                                                </div>
                                            </form>
                                        </div>
                                        {{-- <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse


                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
