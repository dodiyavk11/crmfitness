<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Log In | Crmfitness </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Theme Config Js -->
    <script src="{{ asset('js/hyper-config.js') }}"></script>

    <!-- App css -->
    <link href="{{ asset('css/app-saas.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
  
    <!-- Icons css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    </head>
    
    <body class="authentication-bg position-relative">
        <div class="position-absolute start-0 end-0 start-0 bottom-0 w-100 h-100">
            <svg xmlns='http://www.w3.org/2000/svg' width='100%' height='100%' viewBox='0 0 800 800'>
                <g fill-opacity='0.22'>
                    <circle style="fill: rgba(var(--ct-primary-rgb), 0.1);" cx='400' cy='400' r='600'/>
                    <circle style="fill: rgba(var(--ct-primary-rgb), 0.2);" cx='400' cy='400' r='500'/>
                    <circle style="fill: rgba(var(--ct-primary-rgb), 0.3);" cx='400' cy='400' r='300'/>
                    <circle style="fill: rgba(var(--ct-primary-rgb), 0.4);" cx='400' cy='400' r='200'/>
                    <circle style="fill: rgba(var(--ct-primary-rgb), 0.5);" cx='400' cy='400' r='100'/>
                </g>
            </svg>
        </div>
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header py-4 text-center bg-primary">
                                <a href="javascript:void(0);">
                                    <span> <img src="{{ asset('myimage/logo2.png') }}" style="    filter: drop-shadow(1px 2px 1px black);" alt="logo"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                <div class="mb-4 text-sm text-gray-600">
                                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                                </div>
                                @if (session('status') == 'verification-link-sent')
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </div>
                            @endif
                            <div class="mt-4 d-flex gap-4 items-center justify-between">
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                        
                                    <div>
                                        <button class="btn btn-primary" type="submit">
                                            {{ __('Resend Verification Email') }}
                                        </button>
                                    </div>
                                </form>
                        
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                        
                                    <button type="submit" class="btn btn-danger">
                                        {{ __('Log Out') }}
                                    </button>
                                </form>
                            </div>
                        
                            
                                
                             
                           
                                
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2018 - <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
        </footer>
        <!-- Vendor js -->
        <script src="{{ asset('js/vendor.min.js') }}"></script>
        
        <!-- App js -->
        <script src="{{ asset('js/app.min.js') }}"></script>

    </body>
</html>
