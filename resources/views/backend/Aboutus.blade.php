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
            color: #c9c8c8;
        }

        table {
            border-collapse: collapse;
            table-layout: fixed;
            width: 310px;
        }

        table td {
            /* border: solid 1px #666; */
            width: 110px;
            word-wrap: break-word;
            overflow: hidden;
        }
    </style>
    {{-- <div class="main-panel"> --}}
    <div class="content-wrapper">
        <div class="container">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="flex" style="display: flex ;justify-content: space-between">
                            <h4 class="card-title">About Table</h4>
                            <button data-toggle="modal" data-target=".bd-example-modal-md" type="submit"
                                class="btn btn-gradient-primary me-2">Add New about</button>
                        </div>
                        {{-- <p class="card-description"> Add class <strong style="color: green">{{ success }}</strong> --}}
                        </p>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> Sl No# </th>
                                    {{-- <th> Image </th> --}}
                                    {{-- <th> name </th> --}}
                                    <th> Description </th>


                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($abouts as $key => $about)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>

                                        {{-- <td><img src="{{ asset('uploads/' . $about->image) }}" alt=""></td> --}}
                                        {{-- <td>{{ $about->title }}</td> --}}
                                        <td style="max-width: 400px; word-wrap: break-word;">
                                            {{ $about->description }}
                                        </td>




                                        <td>

                                            <a data-toggle="modal" data-target=".bd-example-modal-md-{{ $about->id }}"
                                                class="">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </a> |
                                            <a href={{ url('admin/aboutus-delete', $about->id) }} class=" ">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>


                                        </td>
                                        {{-- <td>{{ $about }}</td> --}}
                                        <!-- Adjust this line according to your actual about attribute -->
                                        <!-- Other table cells for about details -->
                                    </tr>
                                    <div class="modal fade bd-example-modal-md-{{ $about->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">

                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3>Update about </h3>
                                                    <button type="button" class="btn-close" data-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="card">
                                                    {{-- <div class="card-header">
                                                       
                                                    </div> --}}

                                                    <div class="card-body">
                                                        <form action="{{ url('admin/aboutus-update', $about->id) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    {{-- <div class="form-group">
                                                                        <input type="text" name="title"
                                                                            value="{{ $about->title }}"
                                                                            placeholder="about name" class="form-control">
                                                                    </div> --}}
                                                                </div>


                                                            </div>


                                                            <div class="form-group">
                                                                <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $about->description }}</textarea>
                                                            </div>
                                                            {{-- <div class="form-group">
                                                                <div class="file-input-container">
                                                                    <input type="file" name="image" id="fileInput"
                                                                        class="custom-file-input">

                                                                </div>
                                                            </div> --}}

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
                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target=".bd-example-modal-md">Large modal</button> --}}

                        <div class="modal fade bd-example-modal-md" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3>Add about </h3>
                                        <button type="button" class="btn-close" data-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="card">


                                        <div class="card-body">
                                            <form action="{{ url('admin/aboutus-create') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- <div class="form-group">
                                                            <input type="text" name="title" value=""
                                                                placeholder="about name" class="form-control">
                                                        </div> --}}
                                                    </div>


                                                </div>


                                                <div class="form-group">
                                                    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                                                </div>
                                                {{-- <div class="form-group">
                                                    <div class="file-input-container">
                                                        <input type="file" name="image" id="fileInput" class="">

                                                    </div>
                                                </div> --}}

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
    {{-- </div> --}}
@endsection
