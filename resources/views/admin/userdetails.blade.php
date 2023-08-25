<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Customers | Crmfitness</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->


    <!-- Datatable css -->
    <link href="{{ asset('vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />

    <link rel="shortcut icon" style="height: 100%;width:100%" href="{{ asset('myimage/image (4).png') }}">

    <!-- Theme Config Js -->
    <script src="{{ asset('js/hyper-config.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('vendor/jquery-toast-plugin/jquery.toast.min.css') }}">

    <!-- App css -->
    <link href="{{ asset('css/app-saas.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/icons.min.css.map') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/vendor.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-toast-plugin/jquery.toast.min.js') }}"></script>

    <style>
        .card-body.overflow-auto::-webkit-scrollbar {
            width: 3px;
            /* This will hide the default scrollbar */
            background: transparent;

        }

        /* Define the custom scrollbar styles */
        .card-body.overflow-auto::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        /* Show the custom scrollbar when hovering over .card-body */
        .card-body.overflow-auto:hover::-webkit-scrollbar {
            width: 3px;
            /* Set the width of the scrollbar */
            transition: width 5s ease;
        }

        /* Set the custom scrollbar's track style */
        .card-body.overflow-auto::-webkit-scrollbar-track {
            background-color: rgba(0, 0, 0, 0.05);
            border-radius: 8px;
        }

        /* Set the custom scrollbar's thumb style when hovering */
        .card-body.overflow-auto:hover::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.6);
        }
    </style>
</head>

<body onpaste="myFunction()">
    <div id="preloader">
        <div id="status">
            <div class="bouncing-loader">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        @include('layout.header')
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('layout.leftside')
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

                                        <li class="breadcrumb-item active">Customers</li>
                                    </ol>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-2">

                                        <div class="col-sm-5">
                                            <h4 class="page-title">Customers</h4>
                                        </div>

                                        <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                    <div class="modal-body">
                                                        <div class="text-center mt-2 mb-4">
                                                            <a href="javascript:void(0);" class="text-success">
                                                                <span><img src="{{ asset('images/logo-dark.png') }}"
                                                                        alt="" height="18"></span>
                                                            </a>
                                                        </div>



                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                        <div class="col-sm-7 text-end">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#user-modal"
                                                class="btn btn-danger mb-2 add_customers ">
                                                <i class="mdi mdi-plus-circle me-2"></i> Add Customers
                                            </button>
                                            {{-- <div class="text-sm-end">
                                                <button type="button" class="btn btn-success mb-2 me-1"><i
                                                        class="mdi mdi-cog"></i></button>
                                                <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                                <button type="button" class="btn btn-light mb-2">Export</button>
                                            </div> --}}
                                        </div><!-- end col-->
                                    </div>
                                    {{-- <div id="show_all_employees">

                                    </div> --}}
                                    <div class="table-responsive">
                                        <table class="table table-centered table-striped dt-responsive nowrap w-100"
                                            id="products-datatable">
                                            <thead>
                                                <tr>
                                                    <th style="width: 20px;">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="customCheck1">
                                                            <label class="form-check-label"
                                                                for="customCheck1">&nbsp;</label>
                                                        </div>
                                                    </th>
                                                    <th>Customer Name</th>
                                                    <th>Surname</th>
                                                    <th>Telephone</th>
                                                    <th>Timewise</th>
                                                    <th>Entrance Tickets</th>
                                                    <th>No of Solarium</th>
                                                    <th>Card Number</th>
                                                    <th>Active</th>
                                                    <th>Start/End</th>

                                                    <th style="width: 75px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="show_all_employee">



                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>

                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Crmfiness
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <!-- <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>
        <div id="danger-header-modal" class="modal fade" tabindex="-1" role="dialog"
            aria-labelledby="danger-header-modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h4 class="modal-title text-white" id="danger-header-modalLabel">Are you sure to delete the
                            Customer data?</h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-hidden="true"></button>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="confirm" class="btn btn-danger">Delete</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <div id="success-alert-add" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content modal-filled bg-success">
                    <div class="modal-body p-4">
                        <div class="text-center">
                            <i class="ri-check-line h1"></i>
                            <h4 class="mt-2">New Customer Successfully added!</h4>

                            <button type="button" class="btn btn-light my-2"
                                data-bs-dismiss="modal">Continue</button>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <div id="success-alert-delete" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content modal-filled bg-success">
                    <div class="modal-body p-4">
                        <div class="text-center">
                            <i class="ri-check-line h1"></i>
                            <h4 class="mt-2">Successfully Deleted!</h4>

                            <button type="button" class="btn btn-light my-2"
                                data-bs-dismiss="modal">Continue</button>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>


        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    @include('layout.themesetting');

    {{-- <script src="https://code.jquery.com/jquery-latest.min.js"></script> --}}

    <!-- Datatable js -->
    <script src="{{ asset('vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>

    <script src="{{ asset('vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-datatables-checkboxes/js/dataTables.checkboxes.min.js') }}"></script>
    <script src="{{ asset('vendor/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('vendor/highlightjs/highlight.pack.min.js') }}"></script>
    <!-- Wizard Form Demo js -->
    <script src="{{ asset('js/pages/demo.form-wizard.js') }}"></script>
    {{-- <script src="{{ asset('js/pages/demo.customers.js') }}"></script> --}}
    <!-- App js -->
    <script src="{{ asset('js/app.min.js') }}"></script>
    <!-- Customers Demo App js -->


    <!-- App js -->
    <script>
    
    </script>
<script>
     function myFunction() {
            // Get the clipboard data
            var clipboardData = event.clipboardData || window.clipboardData;
            var pastedData = clipboardData.getData('text');
            $("#entry_error").hide();
            // $("#entry-details").modal('show');

            $("#loading-indicator").css('display', 'flex');

            $('#solarium_error1').css('display', 'none');
            $('#solarium_error').css('display', 'none');

            // console.log(pastedData);
            $('#plan_error').hide();
            $.ajax({
                url: "{{ route('paste') }}",
                method: 'get',
                data: {
                    id: pastedData,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    // Store response data in variables
                    // console.log(response);
                    if (response.status == 200) {
                        $('#danger-card').modal('show');
                    } else {
                        $('#entry-details').modal('show');

                        let customer = response.user;
                        let orders = response.plans;
                        let last = response.last;
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
                        if (endDate < today) {
                            // console.log("0 days");
                            daysDiff = 0;
                        }

                        // console.log(daysDiff + " days");
                        // console.log(daysDiff);
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
                            .note_internal : '';
                        $('.edit_btn').html(` <button type="button" class="btn btn-light editIcon" id="${customer.id}" data-bs-toggle="modal" data-bs-target="#user-modal" >
                                        <i class="mdi mdi-account-edit me-1 "></i> Edit Profile
                                    </button>`);
                        var clickedId = customer.id;
                        reloadContent(clickedId);
                        $("#loading-indicator").hide();
                    }

                    // Display customer details in HTML

                },
                error: function(error) {
                    console.error("Error fetching data", error);
                }
            });
        }

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

</script>


</body>

</html>
