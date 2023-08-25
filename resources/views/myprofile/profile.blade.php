<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Profile | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Theme Config Js -->
    <script src="{{ asset('js/hyper-config.js') }}"></script>

    <!-- App css -->
    <link href="{{ asset('css/app-saas.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        @include('./layout/header')
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('layout/leftside')
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Crmfitness</a></li>
                                        <li class="breadcrumb-item active">My Account</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">My Account</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="{{ asset('images/users/avatar-1.jpg') }}"
                                        class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                                    <h4 class="mb-0 mt-2">{{ $user->name }} {{ $user->surname }}</h4>
                                    <p class="text-muted font-14">Founder</p>



                                    <div class="text-start mt-3">
                                        <h4 class="font-13 text-uppercase">About Me :</h4>
                                        <p class="text-muted font-13 mb-3">
                                            Hi I'm {{ $user->name }} {{ $user->surname }},has been the industry's
                                            standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type.
                                        </p>
                                        <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span
                                                class="ms-2">{{ $user->name }} {{ $user->surname }}</span></p>

                                        <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span
                                                class="ms-2">{{ $user->telephone }} </span></p>

                                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span
                                                class="ms-2 ">{{ $user->email }} </span></p>

                                        <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span
                                                class="ms-2">{{ $user->city }} </span></p>
                                    </div>


                                </div> <!-- end card-body -->
                            </div> <!-- end card -->

                            <!-- Messages-->


                        </div> <!-- end col-->

                        <div class="col-xl-8 col-lg-7">
                            <div class="card">
                                <div class="card-body">



                                                Settings

                                    </ul>
                                    <div class="tab-content">



                                        <div class="tab-pane active" id="settings">
                                            <form method="post" action="{{ route('profile.update') }}"
                                                class="mt-6 space-y-6">
                                                @csrf
                                                @method('patch')
                                                <h5 class="mb-4 text-uppercase"><i
                                                        class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="firstname" class="form-label">First
                                                                Name</label>
                                                            <input type="text" value="{{ $user->name }}"
                                                                name="name" class="form-control" id="firstname"
                                                                placeholder="Enter first name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="lastname" class="form-label">Last Name</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $user->surname }}" name="surname"
                                                                id="lastname" placeholder="Enter last name">
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="useremail" class="form-label">Email
                                                                Address</label>
                                                            <input type="email" class="form-control" id="useremail"
                                                                value="{{ $user->email }}" name="email"
                                                                placeholder="Enter email">
                                                            <span class="form-text text-muted"><small>If you want to
                                                                    change email please <a
                                                                        href="javascript: void(0);">click</a>
                                                                    here.</small></span>
                                                        </div>
                                                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                                            <div>
                                                                <p class="text-sm mt-2 text-gray-800">
                                                                    {{ __('Your email address is unverified.') }}

                                                                    <button form="send-verification"
                                                                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                        {{ __('Click here to re-send the verification email.') }}
                                                                    </button>
                                                                </p>

                                                                @if (session('status') === 'verification-link-sent')
                                                                    <p class="mt-2 font-medium text-sm text-green-600">
                                                                        {{ __('A new verification link has been sent to your email address.') }}
                                                                    </p>
                                                                @endif
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-success mt-2"><i class="mdi mdi-content-save"></i> update</button>
                                                        @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
                                                    </div>
                                                </form>

                                                </div> <!-- end row -->
                                                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                                                    @csrf
                                                    @method('put')
                                                <h5 class="mb-3 text-uppercase bg-light p-2"><i
                                                        class="mdi mdi-office-building me-1"></i> Update Password</h5>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="userpassword"
                                                                class="form-label">Current Password</label>
                                                            <input type="password" name="current_password" class="form-control"
                                                                id="userpassword" placeholder="Enter password">

                                                        </div>
                                                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                                    </div> <!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="userpassword"
                                                                class="form-label">New Password</label>
                                                            <input type="password" class="form-control"
                                                            name="password"
                                                                id="userpassword" placeholder="Enter password">

                                                        </div>
                                                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                                    </div> <!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="userpassword"
                                                                class="form-label">Confirm Password</label>
                                                            <input type="password" class="form-control"
                                                                id="userpassword"
                                                                name="password_confirmation" placeholder="Enter password">

                                                        </div>
                                                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-success mt-2"><i
                                                            class="mdi mdi-content-save"></i> Save</button>

                                                </div>
                                                @if (session('status') === 'password-updated')
                                                <p
                                                    x-data="{ show: true }"
                                                    x-show="show"
                                                    x-transition
                                                    x-init="setTimeout(() => show = false, 2000)"
                                                    class="text-sm text-gray-600"
                                                >{{ __('Saved.') }}</p>
                                            @endif
                                            </form>
                                        </div>
                                        <!-- end settings content-->

                                    </div> <!-- end tab-content -->
                                </div> <!-- end card body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Hyper - Coderthemes.com
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ================== ============================================ -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->
    @include('layout/themesetting')
    <!-- Theme Settings -->

    <!-- Vendor js -->
    <script src="{{ asset('js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('js/app.min.js') }}"></script>

</body>

</html>
