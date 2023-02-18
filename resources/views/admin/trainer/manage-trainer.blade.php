@extends('admin.master')

@section('content')
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Manage Trainer Info.</h5>

                <!-- Table with stripped rows -->
                <table class="table table-striped">
                    <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
{{--                        <th scope="col">Taking Course</th>--}}
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($trainers as $trainer)
                    <tr class="text-center">
                        <th scope="row">{{$i++}}</th>
                        <td>{{$trainer->trainer_name}}</td>
                        <td>{{$trainer->trainer_email}}</td>
{{--                        <td>{{$trainer->taken_course->course_name}}</td>--}}
                        <td>{{substr($trainer->trainer_description,0,30)}}</td>
                        <td>
                            <img src="{{$trainer->trainer_image}}" alt="Image" height="75px" width="75px">
                        </td>
                        <td>
                            <table align="center">
                                <tr>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{route('delete.trainer')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="trainer_id" value="{{$trainer->id}}">
                                            <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure??')">Delete</button>
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
@endsection
