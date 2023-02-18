@extends('frontEnd.master')

@section('title')
    Trainers
@endsection


@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <h2>Trainers</h2>
            <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                @foreach($trainers as $trainer)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <a href="{{route('trainer.profile',['trainer_slug' => $trainer->trainer_slug])}}"><img src="{{asset($trainer->trainer_image)}}" class="img-fluid" alt="" style="height: 280px"></a>
                            <div class="member-content">
                                <a href="{{route('trainer.profile',['trainer_slug' => $trainer->trainer_slug])}}"><h4>{{$trainer->trainer_name}}</h4></a>
                                <span>{{$trainer->course_name}}</span>
                                <p>{{substr($trainer->trainer_description,0,50)}}.. <a href="{{route('trainer.profile',['trainer_slug' => $trainer->trainer_slug])}}"><b>Read More</b></a></p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Trainers Section -->
@endsection
