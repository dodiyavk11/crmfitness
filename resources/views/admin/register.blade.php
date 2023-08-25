    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Register | crmfittness</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" style="height: 100%;width:100%" href="{{ asset('myimage/image (4).png') }}">


        <!-- Theme Config Js -->
        <script src="{{ asset('js/hyper-config.js') }}"></script>

        <!-- App css -->
        <link href="{{ asset('css/app-saas.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />

        <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    </head>

    <body class="authentication-bg">

        <div class="position-absolute start-0 end-0 start-0 bottom-0 w-100 h-100">
            <svg xmlns='http://www.w3.org/2000/svg' width='100%' height='100%' viewBox='0 0 800 800'>
                <g fill-opacity='0.22'>
                    <circle style="fill: rgba(var(--ct-primary-rgb), 0.1);" cx='400' cy='400' r='600' />
                    <circle style="fill: rgba(var(--ct-primary-rgb), 0.2);" cx='400' cy='400' r='500' />
                    <circle style="fill: rgba(var(--ct-primary-rgb), 0.3);" cx='400' cy='400' r='300' />
                    <circle style="fill: rgba(var(--ct-primary-rgb), 0.4);" cx='400' cy='400' r='200' />
                    <circle style="fill: rgba(var(--ct-primary-rgb), 0.5);" cx='400' cy='400' r='100' />
                </g>
            </svg>
        </div>

        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-lg-7">
                        <div class="card">
                            <!-- Logo-->
                            <div class="card-header py-4 text-center bg-primary">
                                <a href="javascript:void(0);">
                                    <span> <img src="{{ asset('myimage/logo2.png') }}" style="    filter: drop-shadow(1px 2px 1px black);" alt="logo"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">

                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 fw-bold">Free Sign Up</h4>
                                    <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute </p>
                                </div>

                                <form method="POST" class="needs-validation" action="{{ route('register') }}" novalidate>
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-12  col-md-6 mb-3 mb-sm-0">
                                            <label for="name" class="form-label">Name*</label>
                                            <input class="form-control" type="text" id="name" placeholder="Enter your name" name="name" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-12  col-md-6 ">
                                            <label for="surname" class="form-label">Surname*</label>
                                            <input class="form-control" type="text" id="surname" placeholder="Enter your  surname" name="sname" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-12  col-md-6 mb-3 mb-sm-0">
                                            <label for="city" class="form-label">City*</label>
                                            <input class="form-control" type="text" id="city" placeholder="Enter your city" name="city" required>
                                        </div>
                                        <div class="col-12  col-md-6">
                                            <label for="inputState" class="form-label">Student*</label>
                                            <select id="inputState" name="student" class="form-control" required>
                                                <option selected>Choose student type...</option>
                                                <option value="adult"> adult</option>
                                                <option value="student"> student</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12  col-md-6 mb-3 mb-sm-0">
                                            <label for="gender" class="form-label">Gender*</label>
                                            <select id="gender" name="gender" class="form-control" required>
                                                <option selected>Select Gender...</option>
                                                <option value="male"> male</option>
                                                <option value="female">female</option>
                                            </select>
                                        </div>
                                        <div class="col-12  col-md-6">
                                            <label for="telephone" class="form-label">Telephone*</label>
                                            <input class="form-control" type="number" id="telephone" placeholder="Enter your Telephone number" name="telephone" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12  ">
                                            <label for="dob" class="form-label">Date of Birth*</label>
                                            <input class="form-control" type="date" name="dob" id="dob" required placeholder="Enter Date of birth">
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12  col-md-6 mb-3 mb-sm-0">
                                            <label for="emailaddress" class="form-label">Email address*</label>
                                            <input class="form-control" type="email" name="email" id="emailaddress" required placeholder="Enter your email">
                                        </div>
                                        <div class="col-12  col-md-6 ">
                                            <label for="password" class="form-label">Password*</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password" required>
                                                <div class="input-group-text" data-password="false">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 text-center">
                                        <button class="btn btn-primary" type="submit"> Sign Up </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Already have account? <a href="{{ route('login') }}" class="text-muted ms-1"><b>Log In</b></a></p>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2018 - <script>
                document.write(new Date().getFullYear())
            </script> © Hyper - Coderthemes.com
        </footer>

        <!-- Vendor js -->
        <script src="{{ asset('js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('js/app.min.js') }}"></script>

    </body>

    </html>