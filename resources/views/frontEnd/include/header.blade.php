<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{route('home')}}" class="logo d-flex align-items-center">
                <img src="{{asset('frontEndAsset')}}/assets/img/logo.png" alt="">
            </a>
        </div>
        <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="{{asset('frontEndAsset')}}/assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('courses')}}">Courses</a></li>
                <li><a href="{{route('trainers')}}">Trainers</a></li>
                <li><a href="{{route('events')}}">Events</a></li>
                <li><a href="{{route('pricing')}}">Pricing</a></li>

                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a href="{{route('contact')}}">Contact</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

        @if(Session::get('studentId'))
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li style="margin-left: 50px" class="dropdown">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0"
                           data-bs-toggle="dropdown">
                            <img src="{{asset('adminAsset')}}/assets/img/riaj.png" alt="Profile"
                                 class="rounded-circle" height="40px" width="40px">
                            <span class="d-none d-md-block dropdown-toggle ps-2">{{Session::get('studentName')}}</span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6>{{Session::get('studentName')}}</h6>
                                <span>{{Session::get('studentEmail')}}</span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a href="{{route('student.logout')}}"
                                   class="bi bi-box-arrow-right dropdown-item d-flex align-items-center">Sign
                                    Out</a>

                                </a>
                            </li>

                        </ul><!-- End Profile Dropdown Items -->
                    </li>
                </ul>
            </nav>

        @else
            <a href="{{route('student.login')}}" class="get-started-btn" style="margin-left: 20px">Sign In</a>
        @endif

    </div>
</header>
