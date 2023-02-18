<!doctype html>
<html lang="en" class="minimal-theme">


<!-- Mirrored from codervent.com/skodash/demo/tabular-menu/ltr/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 06:15:36 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('frontEndAsset')}}/assets/img/logo.png" alt="">
    <!-- Bootstrap CSS -->
    <link href="{{asset('admin')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('admin')}}/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{asset('admin')}}/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('admin')}}/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{asset('admin')}}/assets/css/pace.min.css" rel="stylesheet" />

    <title>Mentor-Sign Up</title>
</head>

<body>

<!--start wrapper-->
<div class="wrapper">

    <!--start content-->
    <main class="authentication-content">
        <div class="container-fluid">
            <div class="authentication-card">
                <div class="card shadow rounded-0 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
                            <img src="{{asset('admin')}}/assets/images/error/login-img.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="card-body p-4 p-sm-5">
                                <h5 class="card-title">Sign Up</h5>
                                <p class="card-text mb-5">See your growth and get consulting support!</p>
                                <form class="form-body" action="{{route('student.register')}}" method="post">
                                    @csrf
                                    <div class="d-grid">
                                        <div class="row g-3">
                                            <div class="col-12 ">
                                                <label for="inputName" class="form-label">Name</label>
                                                <div class="ms-auto position-relative">
                                                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-circle"></i></div>
                                                    <input type="text" class="form-control radius-30 ps-5" name="name" placeholder="Enter Name">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                                <div class="ms-auto position-relative">
                                                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                                                    <input type="email" class="form-control radius-30 ps-5" name="email" placeholder="Email Address">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Phone Number</label>
                                                <div class="ms-auto position-relative">
                                                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                                                    <input type="text" class="form-control radius-30 ps-5" name="phone" placeholder="Phone Number">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                                <div class="ms-auto position-relative">
                                                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                                                    <input type="password" class="form-control radius-30 ps-5" name="password" placeholder="Enter Password">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary radius-30">Sign in</button>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <p class="mb-0">Already have an account? <a href="{{route('student.login')}}">Sign up here</a></p>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--end page main-->

</div>
<!--end wrapper-->


<!--plugins-->
<script src="{{asset('admin')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('admin')}}/assets/js/pace.min.js"></script>


</body>


<!-- Mirrored from codervent.com/skodash/demo/tabular-menu/ltr/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 06:15:36 GMT -->
</html>
