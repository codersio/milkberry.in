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
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <thead>
                                <tr>
                                    <th> Sl No# </th>
                                    <th> Email </th>
                                    <th> Phone Number </th>
                                    <th> Address </th>


                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contact as $key => $about)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>

                                        {{-- <td><img src="{{ asset('uploads/' . $about->image) }}" alt=""></td> --}}
                                        <td>{{ $about->email }}</td>
                                        <td>{{ $about->phone }}</td>
                                        <td>{{ $about->address }}</td>


                                        <td>

                                            <a data-toggle="modal" data-target=".bd-example-modal-md-{{ $about->id }}"
                                                class="">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </a> |
                                            <a href={{ url('admin/contact-delete', $about->id) }} class=" ">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>


                                        </td>
                                        {{-- <td>{{ $about }}</td> --}}
                                        <!-- Adjust this line according to your actual about attribute -->
                                        <!-- Other table cells for about details -->
                                    </tr>
                                    <div class="modal fade bd-example-modal-md-{{ $about->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-md">

                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3>Update about {{ $about->id }}</h3>
                                                    <button type="button" class="btn-close" data-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="card">


                                                    <div class="card-body">
                                                        <form action="{{ url('admin/contact-update', $about->id) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row">
                                                                {{-- <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <input type="text" name="title" value={}
                                                                            placeholder="about name" class="form-control">
                                                                    </div>
                                                                </div> --}}
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <input type="text" name="email"
                                                                            value="{{ $about->email }}" placeholder="Email"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <input type="text" name="phone"
                                                                            value="{{ $about->phone }}"
                                                                            placeholder="Phone Number" class="form-control">
                                                                        @if ($errors->has('phone'))
                                                                            <div class="alert alert-danger">
                                                                                {{ $errors->first('phone') }}
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>


                                                            </div>


                                                            <div class="form-group">
                                                                <textarea name="address" class="form-control" id="" cols="30" rows="10">{{ $about->address }}</textarea>
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
                                        <h3>Add Contact </h3>
                                        <button type="button" class="btn-close" data-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="card">


                                        <div class="card-body" x-data="{
                                            email: '',
                                            phone: '',
                                            validateEmail() {
                                                // Email validation logic
                                                // You can customize the validation logic here
                                                return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.email);
                                            },
                                            validatePhone() {
                                                // Phone number validation logic
                                                // You can customize the validation logic here
                                                return /^[0-9]{10}$/.test(this.phone);
                                            },
                                            submitForm() {
                                                if (!this.validateEmail()) {
                                                    alert('Invalid email format');
                                                    return;
                                                }
                                                if (!this.validatePhone()) {
                                                    alert('Invalid phone number format');
                                                    return;
                                                }
                                                // Form submission logic
                                                // You can submit the form using AJAX or any other method
                                                alert('Form submitted successfully');
                                            }
                                        }">
                                            <form @submit.prevent="submitForm" id="sub"
                                                action="{{ url('admin/contact-create') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" name="title" value=""
                                                                placeholder="about name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" name="email" id="email"
                                                                value="" placeholder="Email" class="form-control">
                                                            <p id="email-error" style="color: rgb(228, 51, 51)"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" name="phone" id="phone"
                                                                value="" placeholder="Phone Number"
                                                                class="form-control">
                                                            <p id="phone-error" style="color: rgb(228, 51, 51)"></p>
                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="form-group">
                                                    <textarea name="address" class="form-control" id="" cols="30" rows="10"></textarea>
                                                </div>


                                                <div class="form-group " style="display: flex;justify-content: flex-end">
                                                    <button id="submit-btn" type="submit"
                                                        class="btn btn-success">Submit</button>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Validate email format
            $('#email').on('input', function() {
                var email = $(this).val();
                // Regular expression for email validation
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (!emailRegex.test(email)) {
                    $('#email-error').text('Please enter a valid email address.');
                    $('#email-error').show();
                } else {
                    $('#email-error').hide();
                }
            });

            // Validate phone number format
            $('#phone').on('input', function() {
                var phone = $(this).val();
                // Regular expression for phone number validation
                var phoneRegex = /^(\+\d{1,3}[- ]?)?\d{10}$/;

                if (!phoneRegex.test(phone)) {
                    $('#phone-error').text('Please enter a valid phone number.');
                    $('#phone-error').show();
                } else {
                    $('#phone-error').hide();
                }
            });

            $(document).ready(function() {
                // Function to check if the form inputs are valid
                function validateForm() {
                    var email = $('#email').val();
                    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    var phone = $('#phone').val();
                    var phoneRegex = /^(\+\d{1,3}[- ]?)?\d{10}$/;
                    var isValid = true; // Flag to track form validity

                    if (!emailRegex.test(email)) {
                        $('#email-error').text('Please enter a valid email address.');
                        $('#email-error').show();
                        isValid = false; // Set flag to false if email is invalid
                    } else {
                        $('#email-error').hide();
                    }

                    if (!phoneRegex.test(phone)) {
                        $('#phone-error').text('Please enter a valid phone number.');
                        $('#phone-error').show();
                        isValid = false; // Set flag to false if phone number is invalid
                    } else {
                        $('#phone-error').hide();
                    }

                    return isValid; // Return flag indicating form validity
                }

                // Validate form on submit
                $('#sub').on('submit', function(event) {
                    if (!validateForm()) {
                        event.preventDefault(); // Prevent form submission if form is invalid
                    }
                });

                // Enable/disable submit button based on form validity
                $('#email, #phone').on('input', function() {
                    var isValid = validateForm();
                    $('#submit-btn').prop('disabled', !
                        isValid); // Disable button if form is invalid
                });
            });


        });
    </script>
@endsection
