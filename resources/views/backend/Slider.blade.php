@extends('backend.sidebar')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-md-4">
                    <form action="{{ url('admin/slider-create') }}" method="POST" enctype="multipart/form-data"
                        style="background: white;padding: 2rem">
                        @csrf
                        <input type="file" name="media[]" class="form-control" id="" multiple>
                        <p style="color:red">The Image must be a jpeg, png, jpg, or gif image.
                            <br>
                            The Image size must not exceed 2 MB.
                        </p>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-8">

                    <table class="table table-striped" style="background: white;padding: 2rem">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($media as $image)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td><img src="{{ asset('uploads/' . $image->media) }}" width="100" height="100">
                                    </td>
                                    <td>
                                        {{-- <form action="{{ url('admin/delete-media/' . $image->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form> --}}
                                        <a href="{{ url('admin/slider-delete/' . $image->id) }}"> <i class="fa fa-trash"
                                                aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- <div class="row">
          
@forelse ($media as $medias)
                    <div class="col-md-3" style="margin-top: 2rem" style="position: relative">
                        <img src="{{ asset('uploads/' . $medias->media) }}" style="width: 250px ;height: 250px;"
                            alt="">
                        <a href="{{ url('admin/delete-media/' . $medias->id) }}" class="btn btn-danger"
                            style="position: absolute;top: 0">Delete</a>
                    </div>
                @empty
                @endforelse
        </div> --}}
        </div>
    </div>
@endsection
