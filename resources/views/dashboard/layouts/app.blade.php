<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.A.M College of Engineering</title>
    <link href="{{asset('images/web-title-logo.png')}}" rel="icon" />

    <!-- External Css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/adminStyle.css')}}" rel="stylesheet">
    <link href="{{asset('css/fastbootstrap.min.css')}}" rel="stylesheet">

    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/fastbootstrap.min.js')}}"></script>

</head>

<body>

    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!---- Sidebar Start ---->
        <div class="sidebar">
            <div class="logo">
                <ul id="sidebar">
                    <li>
                        <div class="profile-element">
                            <span class="d-flex align-items-center gap-4">
                                <img class="" src="/assets/images/web-title-logo.png" alt="">
                                <h2 class="mt-2">MAMCE</h2>
                            </span>
                        </div>
                    </li>

                    <li class="">
                        <a href="{{route('mamce.admission_enquiry_list')}}">
                            <i class="fa fa-th-large"></i>
                            <span class="nav-item">Admission Enquiry</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('mamce.contact_enquiry_list')}}">
                            <i class="fa fa-th-large"></i>
                            <span class="nav-item">Contact Enquiry</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!---- Sidebar End ---->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">

                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="btn px-4 py-2 me-2" style="background-color: #2f4050;">
                        <i class="fa-solid fa-arrow-up-right-from-square text-white me-1"></i>
                        <a href="{{route('index')}}" class="text-white" style="text-decoration: none;">Website</a>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle" src="{{asset('images/web-title-logo.png')}}" alt=""
                                style="width: 40px; height: 40px;">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                           
                            <a href="{{route('mamce.logout')}}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Main Content -->
            @yield('content')
                   </div>
        <!-- Content End -->

    </div>

</body>

</html>