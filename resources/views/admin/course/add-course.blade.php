@extends('admin.master')

@section('content')
    <div class="container mt-lg-5">
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

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Course Form</h5>
                        <form action="{{route('save.course')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input required type="text" class="form-control" name="course_name"
                                           placeholder="Enter Course Name">
                                </div>

                                <label for="inputEmail3" class="col-sm-2 col-form-label mt-3">Trainer Name</label>
                                <div class="col-sm-10 mt-3">
                                    <select required class="form-control" name="trainer_id" id="">
                                        @foreach($trainers as $trainer)
                                            <option value="{{$trainer->id}}">{{$trainer->trainer_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <label for="inputEmail3" class="col-sm-2 col-form-label mt-3">Fee</label>
                                <div class="col-sm-10 mt-3">
                                    <input required type="number" class="form-control" name="price"
                                           placeholder="Enter Course Fee">
                                </div>

                                <label for="inputEmail3" class="col-sm-2 col-form-label mt-3">Description</label>
                                <div class="col-sm-10 mt-3">
                                    <textarea required type="text" class="form-control" name="description"
                                              placeholder="Enter Description"> </textarea>
                                </div>

                                <label for="inputEmail3" class="col-sm-2 col-form-label mt-3">Image</label>
                                <div class="col-sm-10 mt-3">
                                    <input required type="file" class="form-control" name="image">
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

