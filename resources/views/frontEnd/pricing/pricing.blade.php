@extends('frontEnd.master')

@section('title')
    Pricing
@endsection


@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Price of Courses</h2>
            <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section class="courses">
        <div class="container" data-aos="fade-up">
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                @foreach($courses as $course)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="course-item">
                            <img src="{{asset($course->image)}}" class="img-fluid" alt="..." style="height: 280px">
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4>{{$course->course_name}}</h4>
                                    <p class="price">TK. {{$course->price}}</p>
                                </div>

                                <h3><a href="{{route('course.details',['id'=>$course->course_slug])}}">{{$course->course_name}}</a></h3>
                                <p style="height: 100px">{{substr($course->description,0,200)}}</p>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                    <div class="trainer-profile d-flex align-items-center">
                                        <img src="{{asset($course->trainer_image)}}" class="img-fluid" alt="">
                                        <span>{{$course->trainer_name}}</span>
                                    </div>
                                    <div class="trainer-rank d-flex align-items-center">
                                        <i class="bx bx-user"></i>&nbsp;50
                                        &nbsp;&nbsp;
                                        <i class="bx bx-heart"></i>&nbsp;65
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                @endforeach
            </div>

        </div>
    </section><!-- End Pricing Section -->
@endsection
