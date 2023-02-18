@extends('admin.master')

@section('content')
    <div class="container mt-lg-5">
        <div class="row">
            <div class="col-lg-12" style="display: block; margin-left: auto; margin-right: auto;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Course Form</h5>
                        <form action="{{route('edit.course.form')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="course_id" value="{{$course->id}}">
                                    <input type="text" value="{{$course->course_name}}" class="form-control"
                                           name="course_name" placeholder="Enter Course Name">
                                </div>

                                <label for="inputEmail3" class="col-sm-2 col-form-label mt-3">Trainer Name</label>
                                <div class="col-sm-10">
                                    <select class="form-control mt-3" name="trainer_id" id="">
                                        @foreach($trainers as $trainer)
                                            <option value="{{$trainer->id}}">{{$trainer->trainer_name}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <label for="inputEmail3" class="col-sm-2 col-form-label mt-3">Price</label>
                                <div class="col-sm-10 mt-3">
                                    <input type="number" class="form-control" name="price" value="{{$course->price}}"
                                           placeholder="Enter Course Price">
                                </div>

                                <label for="inputEmail3" class="col-sm-2 col-form-label mt-3">Description</label>
                                <div class="col-sm-10 mt-3">
                                    <textarea type="text" class="form-control" name="description"
                                              placeholder="Enter Description">{{$course->description}}</textarea>
                                </div>

                                <label for="inputEmail3" class="col-sm-2 col-form-label mt-3">Image</label>
                                <div class="col-sm-10 mt-3">
                                    <img src="{{asset($course->image)}}" name="image" alt="" style="height: 100px" width="150px">
                                    <input name="image" type="file" class="form-control">
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

