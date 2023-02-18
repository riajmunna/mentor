@extends('frontEnd.master')

@section('title')
    Enrollment
@endsection

@section('content')
    <section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9" style="display: block; margin-left: auto; margin-right: auto;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Enrollment</h5>
                        <form action="{{route('enroll.form')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" readonly name="student_name" value="{{$student->name}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" readonly name="student_email" value="{{$student->email}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" readonly name="student_phone" value="{{$student->phone}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Course Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" readonly name="course_name" value="{{$course->course_name}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Fee</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" readonly name="price" value="{{$course->price}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Code</label>
                                <div class="col-sm-10">
                                    <input type="text" required class="form-control" name="code" placeholder="Enter Bkash Transaction Code">
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
    </section>
@endsection
