<div class="navbar-custom">

    <div class="topbar container-fluid">

        <div class="d-flex align-items-center gap-lg-2 gap-1">



            <!-- Topbar Brand Logo -->

            <div class="logo-topbar">

                <!-- Logo light -->

                <a href="/dashboard" class="logo-light">

                    <span class="logo-lg">

                        <img src="{{ asset('myimage/logo1.png') }}" alt="logo">

                    </span>

                    <span class="logo-sm">

                        <img src="{{ asset('myimage/logo2.png') }}" alt="small logo">

                    </span>

                </a>



                <!-- Logo Dark -->

                <a href="/dashboard" class="logo-dark">

                    <span class="logo-lg">

                        <img src="{{ asset('images/logo-dark.png') }}" alt="dark logo">

                    </span>

                    <span class="logo-sm">

                        <img src="{{ asset('images/logo-dark-sm.png') }}" alt="small logo">

                    </span>

                </a>

            </div>



            <!-- Sidebar Menu Toggle Button -->

            <button class="button-toggle-menu">

                <i class="mdi mdi-menu"></i>

            </button>



            <!-- Horizontal Menu Toggle Button -->

            <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">

                <div class="lines">

                    <span></span>

                    <span></span>

                    <span></span>

                </div>

            </button>



            <!-- Topbar Search Form -->

            <div class="app-search dropdown d-none d-lg-block">

                {{-- <form>

                    <div class="input-group">

                        <input type="search" class="form-control dropdown-toggle" placeholder="Search..." id="top-search">

                        <span class="mdi mdi-magnify search-icon"></span>

                        <button class="input-group-text btn btn-primary" type="submit">Search</button>

                    </div>

                </form> --}}



                <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">

                    <!-- item-->

                    <div class="dropdown-header noti-title">

                        <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>

                    </div>



                    <!-- item-->

                    <a href="javascript:void(0);" class="dropdown-item notify-item">

                        <i class="uil-notes font-16 me-1"></i>

                        <span>Analytics Report</span>

                    </a>



                    <!-- item-->

                    <a href="javascript:void(0);" class="dropdown-item notify-item">

                        <i class="uil-life-ring font-16 me-1"></i>

                        <span>How can I help you?</span>

                    </a>



                    <!-- item-->

                    <a href="javascript:void(0);" class="dropdown-item notify-item">

                        <i class="uil-cog font-16 me-1"></i>

                        <span>User profile settings</span>

                    </a>



                    <!-- item-->

                    <div class="dropdown-header noti-title">

                        <h6 class="text-overflow mb-2 text-uppercase">Users</h6>

                    </div>



                    <div class="notification-list">

                        <!-- item-->

                        <a href="javascript:void(0);" class="dropdown-item notify-item">

                            <div class="d-flex">

                                <img class="d-flex me-2 rounded-circle" src="{{ asset('images/users/avatar-2.jpg') }}"
                                    alt="Generic placeholder image" height="32">

                                <div class="w-100">

                                    <h5 class="m-0 font-14">Erwin Brown</h5>

                                    <span class="font-12 mb-0">UI Designer</span>

                                </div>

                            </div>

                        </a>



                        <!-- item-->

                        <a href="javascript:void(0);" class="dropdown-item notify-item">

                            <div class="d-flex">

                                <img class="d-flex me-2 rounded-circle" src="{{ asset('images/users/avatar-5.jpg') }}"
                                    alt="Generic placeholder image" height="32">

                                <div class="w-100">

                                    <h5 class="m-0 font-14">Jacob Deo</h5>

                                    <span class="font-12 mb-0">Developer</span>

                                </div>

                            </div>

                        </a>

                    </div>

                </div>

            </div>

        </div>



        <ul class="topbar-menu d-flex align-items-center gap-3">

            <li class="dropdown d-lg-none">

                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">

                    <i class="ri-search-line font-22"></i>

                </a>

                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">

                    <form class="p-3">

                        <input type="search" class="form-control" placeholder="Search ..."
                            aria-label="Recipient's username">

                    </form>

                </div>

            </li>







            <li class="dropdown notification-list">

                <a class="nav-link dropdown-toggle arrow-none notification" data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">

                    <i class="ri-notification-3-line font-22"></i>





                </a>

                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">

                    <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">

                        <div class="row align-items-center">

                            <div class="col">

                                <h6 class="m-0 font-16 fw-semibold"> Notification</h6>

                            </div>

                            <div class="col-auto">

                                <a href="javascript: void(0);" id="mark-all"
                                    class="text-dark text-decoration-underline">


                                    <small>Clear All</small>

                                </a>

                            </div>

                        </div>

                    </div>


                    @if (Auth::user()->role == 'admin')
                        <div class="px-2" style="max-height: 300px;" data-simplebar id="all_notification">



                            {{-- <h5 class="text-muted font-13 fw-normal mt-2">Today</h5> --}}

                            <!-- item-->
                        </div>
                    @else
                        <div class="px-2" style="max-height: 300px;" data-simplebar>
                            <p class="dropdown-item ">There are no new notifications</p>
                        </div>
                    @endif


                    <!-- All-->

                    <!-- <a href="javascript:void(0);"
                        class="dropdown-item text-center text-primary notify-item border-top py-2" id="">

                        Mark all as read

                    </a> -->



                </div>

            </li>



            {{-- <li class="dropdown d-none d-sm-inline-block">

                 <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

                    <i class="ri-apps-2-line font-22"></i>

                </a>

                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">



                    <div class="p-2">

                        <div class="row g-0">

                            <div class="col">

                                <a class="dropdown-icon-item" href="#">

                                    <img src="{{asset('images/brands/slack.png')}}" alt="slack">

            <span>Slack</span>

            </a>

    </div>

    <div class="col">

        <a class="dropdown-icon-item" href="#">

            <img src="{{asset('images/brands/github.png')}}" alt="Github">

            <span>GitHub</span>

        </a>

    </div>

    <div class="col">

        <a class="dropdown-icon-item" href="#">

            <img src="{{asset('images/brands/dribbble.png')}}" alt="dribbble">

            <span>Dribbble</span>

        </a>

    </div>

</div>



<div class="row g-0">

    <div class="col">

        <a class="dropdown-icon-item" href="#">

            <img src="{{asset('images/brands/bitbucket.png')}}" alt="bitbucket">

            <span>Bitbucket</span>

        </a>

    </div>

    <div class="col">

        <a class="dropdown-icon-item" href="#">

            <img src="{{asset('images/brands/dropbox.png')}}" alt="dropbox">

            <span>Dropbox</span>

        </a>

    </div>

    <div class="col">

        <a class="dropdown-icon-item" href="#">

            <img src="{{asset('images/brands/g-suite.png')}}" alt="G Suite">

            <span>G Suite</span>

        </a>

    </div>

</div> <!-- end row-->

</div>



</div>

</li> --}}


            {{--
            <li class="d-none d-sm-inline-block">

                <a class="nav-link" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">

                    <i class="ri-settings-3-line font-22"></i>

                </a>

            </li> --}}



            <li class="d-none d-sm-inline-block">

                <div class="nav-link" id="light-dark-mode" data-bs-toggle="tooltip" data-bs-placement="left"
                    title="Theme Mode">

                    <i class="ri-moon-line font-22"></i>

                </div>

            </li>





            <li class="d-none d-md-inline-block">

                <a class="nav-link" href="" data-toggle="fullscreen">

                    <i class="ri-fullscreen-line font-22"></i>

                </a>

            </li>



            <li class="dropdown">

                <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">

                    <span class="account-user-avatar">

                        <img src="{{ asset('images/users/avatar-1.jpg') }}" alt="user-image" width="32"
                            class="rounded-circle">

                    </span>

                    <span class="d-lg-flex flex-column gap-1 d-none">

                        <h5 class="my-0">{{ Auth::user()->name }}</h5>

                        <h6 class="my-0 fw-normal">Founder</h6>

                    </span>

                </a>

                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">

                    <!-- item-->

                    <div class=" dropdown-header noti-title">

                        <h6 class="text-overflow m-0">Welcome !</h6>

                    </div>



                    <!-- item-->

                    <a href="{{ route('profile.edit') }}" class="dropdown-item">

                        <i class="mdi mdi-account-circle me-1"></i>

                        <span>My Account</span>

                    </a>



                    <!-- item-->

                    <!-- <a href="javascript:void(0);" class="dropdown-item">

            <i class="mdi mdi-account-edit me-1"></i>

            <span>Settings</span>

        </a> -->



                    <!-- item-->

                    {{-- <a href="javascript:void(0);" class="dropdown-item">

                        <i class="mdi mdi-lifebuoy me-1"></i>

                        <span>Support</span>

                    </a> --}}



                    <!-- item-->

                    {{-- <a href="javascript:void(0);" class="dropdown-item">

                        <i class="mdi mdi-lock-outline me-1"></i>

                        <span>Lock Screen</span>

                    </a> --}}



                    <!-- item-->

                    <form method="POST" action="{{ route('logout') }}">

                        @csrf



                        {{-- <x-dropdown-link :href="route('logout')"

                                onclick="event.preventDefault();

                                            this.closest('form').submit();" class="dropdown-item">

                                                 <i class="mdi mdi-logout me-1"></i>

                            {{ __('Log Out') }}

            </x-dropdown-link> --}}

                        <button type="submit" class="dropdown-item"> <i class="mdi mdi-logout me-1"></i>
                            logout</button>

                    </form>

                    {{-- <form action="{{ route('logout') }}" method="POST">

        <button type="submit" class="dropdown-item" onclick="event.preventDefault();

                        this.closest('form').submit();">

            <i class="mdi mdi-logout me-1"></i>

            <span>Logout</span>

        </button></form> --}}



                </div>

            </li>

        </ul>

    </div>

</div>
<div id="user-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <div class="text-center  mb-1">
                    <a href="javascript:void(0);    " class="text-success">
                        <span><img src="{{ asset('myimage/logo2.png') }}" alt=""></span>
                    </a>
                </div>

                <div id="rootwizard">
                    <ul class="nav nav-pills nav-justified form-wizard-header mb-3 mx-2">
                        <li class="nav-item" data-target-form="#accountForm">
                            <a href="#first" data-bs-toggle="tab" data-toggle="tab"
                                class="nav-link rounded-0 py-2">
                                <i class="mdi mdi-account-circle font-18 align-middle me-1"></i>
                                <span class="d-none d-sm-inline">Account</span>
                            </a>
                        </li>
                        <li class="nav-item" data-target-form="#profileForm">
                            <a href="#second" data-bs-toggle="tab" data-toggle="tab"
                                class="nav-link rounded-0 py-2">
                                <i class="mdi mdi-face-man-profile font-18 align-middle me-1"></i>
                                <span class="d-none d-sm-inline">Profile</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content mb-0 b-0">

                        <div class="tab-pane" id="first">
                            <form id="accountForm" method="post" action="#" class="form-horizontal">
                                @csrf
                                <div class="row">
                                    <input type="hidden" class="user_id" name="user_id" id="user_id">
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="name1" class="form-label">Name*</label>
                                            <input class="form-control name1" type="text" id="name1"
                                                placeholder="Enter your name" name="name" required>
                                        </div>
                                        <div class="col">
                                            <label for="surname1" class="form-label">Surname*</label>
                                            <input class="form-control surname1" type="text" id="surname1"
                                                placeholder="Enter your  surname" name="sname" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="city1" class="form-label">City*</label>
                                            <input class="form-control city1" type="text" id="city1"
                                                placeholder="Enter your city" name="city" required>
                                        </div>
                                        <div class="col">
                                            <label for="inputState1" class="form-label">Student*</label>
                                            <select id="inputState1" name="student" class="form-control inputState1">
                                                <option selected>Choose student type...</option>
                                                <option value="adult"> adult</option>
                                                <option value="student"> student</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="gender1" class="form-label">Gender*</label>
                                            <select id="gender1" name="gender" class="form-control gender1">
                                                <option selected disabled>Select Gender...</option>
                                                <option value="male"> male</option>
                                                <option value="female">female</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="telephone1" class="form-label">Telephone*</label>
                                            <input class="form-control telephone1" type="number" id="telephone1"
                                                placeholder="Enter your Telephone number" name="telephone"
                                                minlength="10" maxlength="15" required>
                                            <small class="form-text text-muted">Minimum 10 and maximum 15 digits
                                                allowed.</small>
                                            <div class="invalid-feedback name-error">Plz enter Telephone number</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="emailaddress1" class="form-label">Email
                                                address*</label>
                                            <input class="form-control emailaddress1" type="email" name="email"
                                                id="emailaddress1" required placeholder="Enter your email">
                                        </div>

                                        <div class="col">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="password" class="form-control"
                                                    name="password" placeholder="Enter your password" required>
                                                <div class="input-group-text" data-password="false">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="dob1" class="form-label">Date of Birth*</label>
                                            <input class="form-control dob1" type="date" name="dob"
                                                id="dob1" required>
                                        </div>
                                        <div class="col">
                                            <label for="wallet1" class="form-label">Wallet Account Status</label>
                                            <input class="form-control wallet1" type="number" name="wallet"
                                                id="wallet1" minlength="3" maxlength="10">
                                            <small class="form-text text-muted">Minimum 3 and maximum 10 digits
                                                allowed.</small>
                                            <div class="invalid-feedback name-error">PLz enter Wallet number</div>
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="">What kind of fitness?</label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck11"
                                                    value="Labour" name="fitness[]" checked>
                                                <label class="form-check-label" for="customCheck11">Labour</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck21"
                                                    value="Other" name="fitness[]">
                                                <label class="form-check-label" for="customCheck21">Other</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check form-switch">
                                                <input type="checkbox" class="form-check-input customSwitch11"
                                                    id="customSwitch11" checked name="active">
                                                <label class="form-check-label" for="customSwitch11">Active</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">

                                            <label for="card_code1" class="form-label">Card Code*</label>
                                            <input class="form-control card_code1" type="number" name="card_code"
                                                id="card_code1" maxlength="3" required>
                                            <small class="form-text text-muted"> maximum 3 digits allowed.</small>
                                            <div class="invalid-feedback name-error">plz enter Card Code</div>
                                        </div>
                                        <div class="col">
                                            <label for="card_number1" class="form-label">Card number*</label>
                                            <input class="form-control card_number1" type="number"
                                                name="card_number" id="card_number1" minlength="12" maxlength="15"
                                                required>
                                            <small class="form-text text-muted">Minimum 12 and maximum 15 digits
                                                allowed.</small>
                                            <div class="invalid-feedback name-error">plz enter Card Number</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="internal1" class="form-label">Note internal</label>
                                            <textarea class="form-control internal1" id="internal1" rows="5" name="internal"></textarea>
                                        </div>
                                        <div class="col">
                                            <label for="visible1" class="form-label">Note visible</label>
                                            <textarea class="form-control visible1" id="visible1" rows="5" name="visible"></textarea>
                                        </div>
                                    </div>
                                </div> <!-- end row -->
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="checkbox" class="form-check-input" name="mark"
                                            id="mark">
                                        <label class="form-check-label" for="mark">Mark the note as urgent
                                            and highlight!</label>
                                    </div>
                                </div>

                            </form>
                            <ul class="list-inline wizard mb-0">
                                <li class="next list-inline-item float-end">
                                    <a href="javascript:void(0);" class="btn btn-info">Save <i
                                            class="mdi mdi-arrow-right ms-1"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="second">
                            <form id="profileForm" method="post" action="#" class="form-horizontal">
                                @csrf
                                <div class="row">
                                    {{-- <input type="hidden" name="user_id" id="user_id"> --}}


                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="start" class="form-label">Start Date:*</label>
                                            <input class="form-control start" type="date" id="start"
                                                name="start" required>
                                        </div>
                                        <div class="col">
                                            <label for="end" class="form-label">End Date:*</label>
                                            <input class="form-control" type="date" id="end" name="end"
                                                required>
                                        </div>

                                    </div>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="emailaddress" class="form-label">Prefill</label>
                                            <div class="month_button">
                                                <button type="button" class="btn add-month" data-months="1"> <i
                                                        class=" ri-time-fill"></i> Month</button>
                                                <button type="button" class="btn add-month" data-months="2"><i
                                                        class=" ri-time-fill"></i> 2 Month</button>
                                                <button type="button" class="btn add-month" data-months="3"><i
                                                        class=" ri-time-fill"></i> 3 Month</button>
                                                <button type="button" class="btn add-month" data-months="4"><i
                                                        class=" ri-time-fill"></i> 4 Month</button>
                                                <button type="button" class="btn add-month" data-months="6"><i
                                                        class=" ri-time-fill"></i> Half yearly</button>
                                                <button type="button" class="btn add-month" data-months="12"><i
                                                        class=" ri-time-fill"></i> Annual</button>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <div class="col ">
                                            <label for="Price" class="form-label">Price Perm</label>
                                            <div class="input-group">
                                                <label class="input-group-text" for="inputGroupSelect01">CZK</label>
                                                <label class="input-group-text" for="inputGroupSelect01">0.00</label>
                                                <input class="form-control" type="number" name="price"
                                                    id="Price" required>
                                            </div>

                                        </div>


                                    </div>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="entries" class="form-label">Number of one-time
                                                entries:</label>
                                            <input class="form-control" type="text" id="entries" name="entries"
                                                required>
                                            <!-- <textarea class="form-control"
                                                placeholder="Note is optional. If you fill it out, it will be added to the client's card" id="note"
                                                rows="5" name="note"></textarea> -->
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="emailaddress" class="form-label">Prefill</label>
                                            <div class="month_button">
                                                <button type="button" class="btn add-month1" data-months="10"> <i
                                                        class=" ri-time-fill"></i> 10</button>
                                                <button type="button" class="btn add-month1" data-months="20"><i
                                                        class=" ri-time-fill"></i> 20</button>
                                                <button type="button" class="btn add-month1" data-months="30"><i
                                                        class=" ri-time-fill"></i> 30</button>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="solarium" class="form-label">Solarium minutes:</label>
                                            <input class="form-control" type="text" id="solarium"
                                                name="solarium" required>
                                            <!-- <textarea class="form-control"
                                                placeholder="Note is optional. If you fill it out, it will be added to the client's card" id="note"
                                                rows="5" name="note"></textarea> -->
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="emailaddress" class="form-label">Prefill</label>
                                            <div class="month_button">
                                                <button type="button" class="btn add-month2" data-months="100"> <i
                                                        class=" ri-time-fill"></i>100</button>


                                            </div>

                                        </div>
                                    </div>
                                </div> <!-- end row -->
                                <!-- end row -->
                            </form>
                            <ul class="pager wizard mb-0 list-inline">
                                <!-- <li class="previous list-inline-item">
                                    <button type="button" class="btn btn-light"><i class="mdi mdi-arrow-left me-1"></i> Back to Account</button>
                                </li> -->
                                {{-- <li class="next list-inline-item float-end">
                                    <button type="button" class="btn btn-info">Add More Info <i class="mdi mdi-arrow-right ms-1"></i></button>
                                </li> --}}
                                <li class="next list-inline-item float-end">
                                    <button type="submit" class="btn btn-info submit_btn"> Save <i
                                            class="mdi mdi-arrow-right ms-1"></i></button>
                                </li>
                            </ul>
                        </div>




                    </div> <!-- tab-content -->
                </div> <!-- end #rootwizard-->
                </form>
                {{-- <h4 class="header-title mb-3"> Basic Wizard</h4> --}}





            </div>
            {{-- <div class="modal-footer border-top-0">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div id="user-details" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <div class="text-center  mb-2">
                    <a href="javascript:void(0);" class="text-success">
                        <span><img src="{{ asset('myimage/logo2.png') }}"></span>
                    </a>
                </div>
                <div class="row" id="show-user-details">



                </div>







            </div>
            {{-- <div class="modal-footer border-top-0">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="success-alert-noti" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content modal-filled bg-success">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="ri-check-line h1"></i>
                    <h4 class="mt-2"> Edit Successfully!</h4>

                    <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<div id="danger-card" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content modal-filled bg-danger">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="ri-close-circle-line h1"></i>
                    <h4 class="mt-2">Opps Card Not Found!</h4>
                    <p class="mt-3"></p>
                    <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<style>
    .ri-recycle-fill:before {
        content: "\f05d";
        position: relative;
        top: 5px;
        font-size: 23px;
        /* margin-bottom: -23px; */
    }
</style>
<script>
    $(document).ready(function() {
        $("input[type='number'], input[type='text']").on("input", function() {
            var minLength = parseInt($(this).attr("minlength"));
            var maxLength = parseInt($(this).attr("maxlength"));
            var inputValue = $(this).val();
            var errorContainer = $(this).siblings(".invalid-feedback");

            if (inputValue.length < minLength || inputValue.length > maxLength) {
                errorContainer.text("Input should be between " + minLength + " and " + maxLength +
                    " characters.");
                $(this).addClass("is-invalid");
            } else {
                errorContainer.empty();
                $(this).removeClass("is-invalid");
            }
        });
    });
    $(document).on('click', '.viewicon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        // console.log(id);
        // $('#password_add').remove();
        $.ajax({
            url: "{{ route('get_customer_details') }}",
            method: 'get',
            data: {
                id: id,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                let customer = response.user;
                let orders = response.plans;


                let today = new Date(); // Get today's date

                let endDate = new Date(orders.end_date);
                // console.log(today);
                // console.log(endDate);
                endDate.setHours(0, 0, 0, 0); // Set time to midnight
                today.setHours(0, 0, 0, 0); // Set time to midnight

                let timeDiff = endDate.getTime() - today.getTime(); // Difference in milliseconds
                let daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
                if (endDate < today) {
                    // console.log("0 days");
                    daysDiff = 0;
                }
                $('#show-user-details').html(`
                <div class="col-xl-12">
                        <!-- Personal-Information -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mt-0 mb-3">Customer Information</h4>
                                <p class="text-muted font-13">
                                    Hye, I’m ${customer.name} ${customer.surname} residing in this beautiful world.
                                </p>

                                <hr/>

                                <div class="text-start">
                                    <p class="text-muted"><strong>Full Name :</strong> <span class="ms-2">${customer.name} ${customer.surname}</span></p>

                                    <p class="text-muted"><strong>Telephone :</strong><span class="ms-2">${customer.telephone}</span></p>

                                    <p class="text-muted"><strong>Email :</strong> <span class="ms-2">${customer.email}</span></p>

                                    <p class="text-muted"><strong>Location :</strong> <span class="ms-2">${customer.city}</span></p>
                                    <p class="text-muted"><strong>Date of birth :</strong>
                                        <span class="ms-2">${customer.dob}</span>
                                    </p>
                                    <p class="text-muted"><strong>Gender :</strong>
                                        <span class="ms-2">${customer.gender}</span>
                                    </p>
                                    <p class="text-muted"><strong>Student type :</strong>
                                        <span class="ms-2">${customer.student}</span>
                                    </p>
                                    <p class="text-muted"><strong>fitness type :</strong>
                                        <span class="ms-2">${customer.fitness}</span>
                                    </p>
                                    <p class="text-muted"><strong>Internal note :</strong>
                                        <span class="ms-2">${customer.note_internal !== null ? customer.note_internal : ''}</span>
                                    </p>
                                    <p class="text-muted"><strong>Visible note :</strong>
                                        <span class="ms-2">${customer.note_visible !== null ? customer.note_visible : ''}</span>
                                    </p>


                                </div>
                            </div>
                        </div>
                        <!-- Personal-Information -->





                    </div>
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-6">

                        <!-- Chart-->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3">Card Details</h4>
                                    <p class="text-muted"><strong> Wallet :</strong>
                                        <span class="ms-2">${customer.wallet_account_status !== null ? customer.wallet_account_status : ''}</span>
                                    </p>
                                    <p class="text-muted"><strong>Card number  :</strong>
                                        <span class="ms-2">${customer.card_number}</span>
                                    </p>
                                    <p class="text-muted"><strong>Card code:</strong>
                                        <span class="ms-2">${customer.card_code}</span>
                                    </p>
                            </div>
                        </div>
                        <!-- End Chart-->
                        </div>
                        <div class="col-xl-6">
                        <!-- Messages-->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3">Order</h4>

                                <p class="text-muted"><strong>Price :</strong>
                                        <span class="ms-2">${orders.price}</span>
                                    </p>
                                    <p class="text-muted"><strong>start date :</strong>
                                        <span class="ms-2">${orders.start_date}</span>
                                    </p>
                                    <p class="text-muted"><strong>End Date :</strong>
                                        <span class="ms-2">${orders.end_date}</span>
                                    </p>
                                    <p class="text-muted"><strong>No of Entries :</strong>
                                        <span class="ms-2">${orders.no_entries}</span>
                                    </p>
                                    <p class="text-muted"><strong>Solarium minutes :</strong>
                                        <span class="ms-2">${orders.solarium_min}</span>
                                    </p>
                                    <p class="text-muted"><strong>Validity left :</strong>
                                        <span class="ms-2">${daysDiff} days left</span>
                                    </p>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                        </div>
                        </div>




                    </div>
            `);

            },
            error: function(error) {
                // Handle error response
                console.error("Error submitting data", error);
            }
        });
    });
    const entriesInput = document.getElementById("entries");
    const buttons = document.querySelectorAll(".add-month1");

    // Add click event listeners to the buttons
    buttons.forEach(button => {
        button.addEventListener("click", function() {
            const months = this.getAttribute("data-months");
            entriesInput.value = months;
        });
    });
    const entriesInput1 = document.getElementById("solarium");
    const buttons1 = document.querySelectorAll(".add-month2");

    // Add click event listeners to the buttons
    buttons1.forEach(button => {
        button.addEventListener("click", function() {
            const months1 = this.getAttribute("data-months");
            entriesInput1.value = months1;
        });
    });

    // var currentUrl = window.location.href;
    // console.log(currentUrl);
    @if (isset($users))
        var users = @json($users); // Convert PHP array to JavaScript object


        // console.log(users);
        $(document).ready(function() {
            // Update the address bar URL without navigation

            if (users != null) {
                function reloadContent(clickedId) {
                    // console.log(clickedId);
                    if (clickedId !== null) {
                        $.ajax({
                            url: "{{ route('getuserentry') }}",
                            method: "GET",
                            data: {
                                id: clickedId,
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {

                                // Process and display users' data here
                                var userList = $("#active_customer_with_same_user");
                                userList.empty();
                                // console.log(response);

                                if (response != "") {
                                    $("#active_customers").show();
                                } else {
                                    // userList.empty();
                                    $("#active_customers").show();
                                    userList.append(
                                        '<h5 class="text-center">No Active User were found</h5>'
                                    );
                                }



                                // if (response.user.id == response.plans.user_id) {
                                var count = 0

                                $.each(response, function(index, user) {
                                    count++;

                                    var givenDate = new Date(user.created_at);
                                    // Get the current time
                                    var currentTime = new Date();

                                    // Calculate the time difference in milliseconds
                                    var timeDifference = currentTime - givenDate;

                                    // Convert the time difference to seconds, minutes, and hours
                                    var totalSeconds = Math.floor(timeDifference /
                                        1000);
                                    var hours = Math.floor(totalSeconds / 3600);
                                    var minutes = Math.floor((totalSeconds % 3600) /
                                        60);
                                    var seconds = totalSeconds % 60;

                                    // Format the time components to have leading zeros if necessary
                                    var formattedTime = ('0' + hours).slice(-2) + ':' +
                                        ('0' + minutes).slice(-2) + ':' +
                                        ('0' + seconds).slice(-2);

                                    if (user.solarium != null) {
                                        userList.append(
                                            '<div class="alert border bg-warning bg-gradient border-bottom-1 d-flex justify-content-between" role="alert"><div class="align-self-center"><strong class="text-capitalize">Solarium : </strong></div><div class="align-self-center"><strong class="text-muted">' +
                                            user.solarium +
                                            ' minutes </strong></div><div class="end_btn"></button><button class="btn btn-soft-primary rounded-pill btn-sm solariumexit" id="' +
                                            user.id +
                                            '" data-time="' + formattedTime +
                                            '" >End</button></div></div>'
                                        );
                                    } else {
                                        userList.append(
                                            '<div class="alert border border-bottom-1 d-flex justify-content-between" role="alert"><div class="align-self-center"><strong class="text-capitalize">Locker Key: ' +
                                            user.key_locker +
                                            '</strong></div><div class="align-self-center"><strong class="text-muted">' +
                                            formattedTime +
                                            '</strong></div><div class="end_btn"></button><button class="btn btn-soft-primary rounded-pill btn-sm exiticon" id="' +
                                            user.id +
                                            '" data-time="' + formattedTime +
                                            '" >End</button></div></div>'
                                        );
                                    }

                                    // Add more properties as needed
                                });
                                if ($('.active_user').length > 3) {
                                    $('.active_user').css({
                                        'height': '250px',
                                    });
                                } else {
                                    $('.active_user').css({
                                        'height': 'auto',
                                    });
                                }
                                // console.log(count);


                            },
                            error: function(error) {
                                console.error("Error fetching users", error);
                            }
                        });
                    }
                }
                $('#entry-details').modal('show');
                $.ajax({
                    url: "{{ route('entryicon') }}",
                    method: 'get',
                    data: {
                        id: users.id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        // Store response data in variables
                        // window.history.replaceState({}, '', previousUrl);
                        // console.log(response);
                        // $(".key_locker").focus();
                        let customer = response.user;
                        let orders = response.plans;
                        let last = response.last;

                        reloadContent(clickedId = customer.id);
                        if (last != null) {
                            $('.last-entry').text(`${last.start_time}`);
                        } else {
                            $('.last-entry').text(`No entry available`);
                        }
                        let today = new Date(); // Get today's date

                        let endDate = new Date(orders.end_date);
                        // console.log(today);
                        // console.log(endDate);
                        endDate.setHours(0, 0, 0, 0); // Set time to midnight
                        today.setHours(0, 0, 0, 0); // Set time to midnight

                        let timeDiff = endDate.getTime() - today
                    .getTime(); // Difference in milliseconds
                        let daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
                        // console.log(daysDiff);
                        if (endDate < today) {
                            // console.log("0 days");
                            daysDiff = 0;
                        }
                        $('.solarium_time').text(`${orders.solarium_min} min left`);
                        $('.entrance_tickets').text(`${orders.no_entries} tickets left`);
                        $('.user-name').text(`${customer.name} ${customer.surname}`);
                        $('.user_id').val(`${customer.id}`);
                        $('.user_id1').val(`${customer.id}`);

                        // Check if note_internal is null or not
                        $('.valid-date').html(
                            `<strong>Valid from </strong> : ${orders.start_date} to ${orders.end_date}`
                        )
                        let todayYear = today.getFullYear();
                        let todayMonth = today.getMonth();
                        let todayDate = today.getDate();

                        let endYear = endDate.getFullYear();
                        let endMonth = endDate.getMonth();
                        let endDate1 = endDate.getDate();
                        if (todayYear === endYear && todayMonth === endMonth && todayDate ===
                            endDate1) {
                            $('.xyz_image').html(
                                `<img  src="{{ asset('myimage/animation_ll3ldrwq_small.gif') }}" alt="">`
                            )
                            $('.submit_btn1').prop('disabled', false);

                            // $('.subit_btn1').attr('disabled', 'disabled');
                        } else if (daysDiff == 0) {
                            $('.xyz_image').html(
                                `<img  src="{{ asset('myimage/giphy.gif') }}" width="150" height="150" alt="">`
                            );
                            $('#plan_error').show();
                            $('.key_locker').prop('disabled', true);
                            $('.submit_btn1').prop('disabled', true);
                            $(".solarium_min").prop('disabled', true);
                            $(".btn_solarium").prop('disabled', true);


                        } else if (daysDiff > 0) {
                            $('.xyz_image').html(
                                `<img  src="{{ asset('myimage/animation_ll3ldrwq_small.gif') }}" alt="">`
                            );
                            $('.submit_btn1').prop('disabled', false);

                        }
                        //
                        $('.days-count').text(`${daysDiff} days left`);



                        let noteInternal = customer.note_internal !== null ? customer
                            .note_internal :
                            '';
                        $('.edit_btn').html(` <button type="button" class="btn btn-light editIcon" id="${customer.id}" data-bs-toggle="modal" data-bs-target="#user-modal" >
                                                <i class="mdi mdi-account-edit me-1 "></i> Edit Profile
                                            </button>`);

                        $('#entry-details').modal('show');
                        $("#loading-indicator").hide();
                        // Display customer details in HTML
                        // $('#entry-user-details').html(`

                        // `);
                    },
                    error: function(error) {
                        console.error("Error fetching data", error);
                    }
                });

            }


            // Function to open the modal

        });
        // You can now use the 'users' JavaScript variable in your script
    @endif
    @if (isset($message))
        var message = @json($message);
        $(document).ready(function() {
            $('#danger-card').modal('show');
        });
        // console.log(message);
    @endif








    $(document).ready(function() {
        $('#entry-details').on('shown.bs.modal', function() {


            $(document).on('keydown', function(event) {
                if (event.which === 13) { // 13 is the key code for Enter
                    if (!$('.submit_btn1').prop('disabled')) {
                        $('.submit_btn1').trigger('click');
                    }
                }
            });
        });

        $('#entry-details').on('hidden.bs.modal', function() {
            $(document).off('keydown');
        });
    });
</script>
