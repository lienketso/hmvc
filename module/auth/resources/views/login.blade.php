<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Liên Kết Số</title>
    <!--favicon-->
    <link rel="icon" href="{{asset('admin/assets/images/favicon-32x32.png')}}" type="image/png"/>
    <!-- loader-->
    <link href="{{asset('admin/assets/css/pace.min.css')}}" rel="stylesheet"/>
    <script src="{{asset('admin/assets/js/pace.min.js')}}"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/icons.css')}}" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/dark-style.css')}}" />
</head>

<body>
<!-- wrapper -->
<div class="wrapper">

    <div class="section-authentication">
        <div class="container-fluid">
            <div class="card mb-0">
                <div class="card-body p-0">
                    <div class="row no-gutters">
                        <div class="col-12 col-lg-5 col-xl-4 d-flex align-items-stretch">
                            <div class="card mb-0 shadow-none bg-transparent w-100 login-card rounded-0">
                                <div class="card-body p-md-5">
                                    <div class="logo-white">
                                        <img src="{{asset('admin/assets/images/logo-white.png')}}" width="180" alt="">
                                    </div>
                                    <div class="logo-dark">
                                        <img src="{{asset('admin/assets/images/logo-dark.png')}}" width="180" alt="">
                                    </div>
                                    <h4 class="mt-5"><strong>Welcome Back</strong></h4>
                                    <p>Log in to your account using email & password</p>
                                    <form method="post">

                                        {{ csrf_field() }}

                                        @if (count($errors) > 0)
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                                <strong>Error !</strong>
                                                @foreach ($errors->all() as $e)
                                                    <div>{{$e}}</div>
                                                @endforeach
                                            </div>
                                        @endif

                                    <div class="form-group mt-4">
                                        <label>Email Address</label>
                                        <input type="text" class="form-control" name="email" placeholder="Enter your email address"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Enter your password"/>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                                <label class="custom-control-label" for="customSwitch1">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="form-group col text-right">
                                            <a href="authentication-forgot-password.html"><i class='bx bxs-key mr-2'></i>Forget Password?</a>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block mt-3"><i class='bx bxs-lock mr-1'></i>Login</button>
                                    <div class="text-center mt-4">
                                        <p class="mb-0">Dont' have an account yet? <a href="authentication-register.html">Create an account</a></p>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 col-xl-8 d-flex align-items-stretch">
                            <div class="card mb-0 shadow-none bg-transparent w-100 rounded-0">
                                <div class="card-body p-md-5">
                                    <div class="text-center"><img src="{{asset('admin/assets/images/login-images/auth-img-7.png')}}" class="img-fluid" alt=""/></div>
                                    <h5 class="card-title">Why do we use it?</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent px-md-5">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">Login With</li>
                            <li class="list-inline-item"><a href="#"><i class='bx bxl-facebook mr-1'></i>Facebook</a></li>
                            <li class="list-inline-item"><a href="#"><i class='bx bxl-twitter mr-1'></i>Twitter</a></li>
                            <li class="list-inline-item"><a href="#"><i class='bx bxl-google mr-1'></i>Google</a></li>
                        </ul>
                        <p class="mb-0">Synadmin @2020 | Developed By : <a href="https://themeforest.net/user/codervent" target="_blank">Codervent</a>
                        </p>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                            <li class="list-inline-item"><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- end wrapper -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>

</body>
</html>
