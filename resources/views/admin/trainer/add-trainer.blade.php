@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="display: block; margin-left: auto; margin-right: auto;">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @if (session('warning'))
                    <div class="alert alert-warning">
                        {{ session('warning') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Trainer Form</h5>
                        <form action="{{route('save.trainer')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input required type="text" class="form-control" name="trainer_name"
                                           placeholder="Enter Trainer's Name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input required type="email" class="form-control" name="trainer_email"
                                           placeholder="Enter Trainer's Valid Email">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" name="trainer_description"
                                              placeholder="Enter Description"> </textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input required type="file" class="form-control" name="trainer_image"
                                           placeholder="Enter Description">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
