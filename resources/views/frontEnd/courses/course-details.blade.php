@extends('frontEnd.master')

@section('title')
    Course Details
@endsection


@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Course Details</h2>
            <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit
                quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-8">
                    <img src="{{asset($course->image)}}" class="img-fluid" alt="">
                    <h3>{{$course->course_name}}</h3>
                    <p>{{$course->description}}</p>
                </div>
                <div class="col-lg-4">

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Trainer</h5>
                        <p><a href="{{route('trainer.profile',['trainer_slug' => $course->trainer_slug])}}">{{$course->trainer_name}}</a></p>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Course Fee</h5>
                        <p>TK. {{$course->price}}</p>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Available Seats</h5>
                        @if(30-(\App\Models\Enrollment::where('course_name','=',$course->course_name)->count()) > 0)
                        <p>{{30-(\App\Models\Enrollment::where('course_name','=',$course->course_name)->count())}}</p>
                        @else
                        <p>Seat not available</p>
                        @endif
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Total Classes</h5>
                        <p>45</p>
                    </div>

                    @if(30-(\App\Models\Enrollment::where('course_name','=',$course->course_name)->count()) > 0)
                        @if(Session::get('studentId'))
                            <div>
                                <a href="{{route('enroll',['id' => $course->id])}}"
                                   style="display: block;margin-left: auto; margin-right: auto; background-color: #5fcf80 ; color: #fff"
                                   class="btn mt-3">Enroll Now</a>
                            </div>
                        @else
                            <h2 class="text-center">Please <a href="{{route('student.login')}}" class="text-danger">Login,</a> to enroll this course</h2>
                        @endif
                    @endif

                </div>
            </div>
        </div>
    </section><!-- End Cource Details Section -->

    <!-- ======= Cource Details Tabs Section ======= -->
    <section id="cource-details-tabs" class="cource-details-tabs">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Architecto ut aperiam autem id</h3>
                                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila
                                        parde sonata raqer a videna mareta paulona marka</p>
                                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum
                                        eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat
                                        minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui
                                        similique accusamus nostrum rem vero</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/course-details-tab-1.png" alt=""
                                         class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila
                                        parde sonata raqer a videna mareta paulona marka</p>
                                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et
                                        reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit
                                        ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna
                                        desera vafle de nideran pal</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/course-details-tab-2.png" alt=""
                                         class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                                    <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim
                                        fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis
                                        aut</p>
                                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis
                                        quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae
                                        sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et
                                        harum voluptatem optio quae</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/course-details-tab-3.png" alt=""
                                         class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                                    <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas
                                        iure porro quis delectus</p>
                                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam
                                        necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in
                                        consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a
                                        laborum inventore</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/course-details-tab-4.png" alt=""
                                         class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-5">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro
                                        quia.</p>
                                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae
                                        ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet.
                                        Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/course-details-tab-5.png" alt=""
                                         class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Cource Details Tabs Section -->
@endsection
