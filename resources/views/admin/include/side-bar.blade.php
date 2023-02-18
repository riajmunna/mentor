<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{route('dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#trainers-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people"></i><span>Trainer</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="trainers-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('add.trainer')}}">
                        <i class="bi bi-square"></i><span>Add Trainer</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('manage.trainer')}}">
                        <i class="bi bi-square"></i><span>Manage Trainer</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Trainer Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#courses-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-fast-forward-btn"></i><span>Courses</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="courses-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('add.course')}}">
                        <i class="bi bi-square"></i><span>Add Course</span>
                    </a>

                    <a href="{{route('manage.course')}}">
                        <i class="bi bi-square"></i><span>Manage Course</span>
                    </a>

                </li>
            </ul>
        </li><!-- End Courses Nav -->

        <li class="nav-item">
            <a class="nav-link " href="">
                <i class="bi bi-plus-square"></i>
                <span>Enrollment</span>
            </a>
        </li><!-- End Enrollment Nav -->

    </ul>

</aside>
