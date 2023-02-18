@extends('admin.master')

@section('content')
    <div class="container mt-lg-5">
        <div class="row">
            <div class="col-lg-12" style="display: block; margin-left: auto; margin-right: auto;">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage Course Info.</h5>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Trainer Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($courses as $course)
                                <tr class="text-center">
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{$course->course_name}}</td>
                                    <td>{{$course->trainer_name}}</td>
                                    <td>{{$course->price}}</td>
                                    <td>{{substr($course->description,0,100)}}</td>
                                    <td>
                                        <img src="{{asset($course->image)}}" alt="" height="75px" width="75px">
                                    </td>
                                    @if($course->status == 1)
                                        <td>Seat Available</td>
                                    @else
                                        <td>Seat Not Available</td>
                                    @endif
                                    <td>
                                        <table align="center">
                                            <tr>
                                                <td>
                                                    <a href="{{route('edit.course',['id'=>$course->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                                </td>

                                                <td>
                                                    <form action="{{route('delete.course',['id'=>$course->id])}})}}" method="post" id="delete">
                                                        @csrf
                                                        <input type="hidden" name="course_id" value="{{$course->id}}">
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are you sure??')">Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

