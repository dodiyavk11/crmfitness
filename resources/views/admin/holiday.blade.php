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
    <link href="{{ asset('vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Theme Config Js -->
    <script src="{{ asset('js/hyper-config.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('vendor/jquery-toast-plugin/jquery.toast.min.css') }}">

    <!-- App css -->
    <link href="{{ asset('css/app-saas.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <link href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/icons.min.css.map') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/vendor.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-toast-plugin/jquery.toast.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

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

<body>
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
                                            <h4 class="page-title">Holidays</h4>
                                        </div>

                                        <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                    <div class="modal-body">
                                                        <div class="text-center mt-2 mb-4">
                                                            <a href="javascript:void(0);" class="text-success">
                                                                <span><img src="{{ asset('images/logo-dark.png') }}" alt="" height="18"></span>
                                                            </a>
                                                        </div>



                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                        <div class="col-sm-7 text-end">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#Add_holidays" class="btn btn-danger mb-2 add_holidays ">
                                                <i class="mdi mdi-plus-circle me-2"></i> Add Holidays
                                            </button>
                                            {{-- <div class="text-sm-end">
                                                <button type="button" class="btn btn-success mb-2 me-1"><i
                                                        class="mdi mdi-cog"></i></button>
                                                <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                                <button type="button" class="btn btn-light mb-2">Export</button>
                                            </div> --}}
                                        </div><!-- end col-->
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-striped dt-responsive nowrap w-100" id="holiday-datatable">
                                            <thead>
                                                <tr>
                                                    <th style="width: 20px;">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                                            <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                        </div>
                                                    </th>
                                                    <th>Holiday Title</th>
                                                    <th>Holiday Date</th>
                                                    <th style="width: 75px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>



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

        <div id="Add_holidays" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="primary-header-modalLabel" aria-hidden="true">
            <div class="modal-dialog model-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white holiday-header" id="primary-header-modalLabel">Add Holiday</h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" method="post" id="holiday_add" novalidate>
                            @csrf
                            <input type="text" hidden id="holiday_id">
                            <div class="mb-3">
                                <label class="form-label" for="holiday_name">Holiday name*</label>
                                <input type="text" class="form-control" name="holiday_name" id="holiday_name" placeholder="Enter holiday name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="mb-3 position-relative" id="datepicker1">
                                <label class="form-label" for="holiday_date">Date Picker</label>
                                <input type="text" class="form-control" id="holiday_date" data-provide="datepicker" data-date-container="#datepicker1" name="holiday_date" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="submit_holiday" class="btn btn-primary">Save</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <div id="danger-holiday" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="danger-header-modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h4 class="modal-title text-white" id="danger-header-modalLabel">Are you sure to delete the Holiday Event?</h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="confirm" class="btn btn-danger">Delete</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <div id="success-alert-holiday" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content modal-filled bg-success">
                    <div class="modal-body p-4">
                        <div class="text-center">
                            <i class="ri-check-line h1"></i>
                            <h4 class="mt-2">New Holiday event Successfully added!</h4>

                            <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>
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

                            <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>
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
        $(document).ready(function() {
            'use strict'
            var table = $('#holiday-datatable').DataTable({
                processing: true,
                serverSide: true,
                language: {
                    paginate: {
                        previous: "<i class='mdi mdi-chevron-left'>",
                        next: "<i class='mdi mdi-chevron-right'>"
                    },
                    info: 'Showing customers _START_ to _END_ of _TOTAL_',
                    lengthMenu: 'Display <select class=\'form-select form-select-sm ms-1 me-1\'><option value="10">10</option><option value="20">20</option><option value="-1">All</option></select> customers'
                },
                ajax: "{{ route('holiday-fetchall') }}",
                select: {
                    style: 'multi'
                },
                columns: [{
                        orderable: false,
                        searchable: false,
                        data: 'check',
                        name: 'check',
                        render: function(e, l, a, o) {
                            return (e =
                                'display' === l ?
                                '<div class="form-check"><input type="checkbox" class="form-check-input dt-checkboxes"><label class="form-check-label">&nbsp;</label></div>' :
                                e)
                        },
                        checkboxes: {
                            selectRow: !0,
                            selectAllRender: '<div class="form-check"><input type="checkbox" class="form-check-input dt-checkboxes"><label class="form-check-label">&nbsp;</label></div>'
                        }
                    },
                    {
                        data: 'holiday_name',
                        name: 'holiday_name'
                    },
                    {
                        data: 'holiday_date',
                        name: 'holiday_date'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },

                ],
                drawCallback: function() {
                    $('.dataTables_paginate > .pagination').addClass(
                            'pagination-rounded'
                        ),
                        $('#holiday-datatable_length label').addClass('form-label'),
                        document
                        .querySelector('.dataTables_wrapper .row')
                        .querySelectorAll('.col-md-6')
                        .forEach(function(e) {
                            e.classList.add('col-sm-6'),
                                e.classList.remove('col-sm-12'),
                                e.classList.remove('col-md-6')
                        })
                }
            });



            $("#submit_holiday").click(function() {
                // Serialize data from both forms
                var formData1 = $("#holiday_add").serialize();
              
                console.log(formData1);
                // Combine the two sets of form data
            
              
                $("#submit_holiday").text('Updating...');
                // Send AJAX request
                $.ajax({
                    type: "POST", // or "GET" depending on your requirements
                    url: "{{ route('add_holiday') }}",
                    data: formData1,
                    success: function(response) {
                       
                            $("#success-alert-holiday").modal('show');
                    
                    
                        // console.log(response.message);
                        // fetchAllEmployees();
                        $("#submit_holiday").text('Save');
                        $("#holiday_add")[0].reset();
                        // $("#profileForm")[0].reset();
                        $("#Add_holidays").modal('hide');
                        table.ajax.reload();
                        // $("#rootwizard").bootstrapWizard('reset');


                    },
                    error: function(error) {
                        // Handle error response
                        console.error("Error submitting data", error);
                    }
                });
            });

            
            $(document).on('click', '.add_holidays', function(e) {
                e.preventDefault();
                // $('#password_add').add();
                $("#holiday_id").val(null);
                $(".holiday-header").text('Add Holiday');

                $("#holiday_add")[0].reset();

            });

            $(document).on('click', '.holieditIcon', function(e) {
                e.preventDefault();
                let id = $(this).attr('id');
                $(".holiday-header").text('Edit Holiday');
                $.ajax({
                    url: "{{ route('edit_holiday') }}",
                    method: 'get',
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                            console.log(response);

                         $('#holiday_date').val(response.holiday_date);
                         $('#holiday_name').val(response.holiday_name);
                         $("#holiday_id").val(response.id);
                        // $("#end").val(response.end_date);
                        // $("#Price").val(response.price);

                        // $("#mark").val(response.telephone);


                    }
                });
            });
            // update employee ajax request

            $(document).on('click', '.holideleteIcon', function(e) {
                e.preventDefault();
                let id = $(this).attr('id');
                let csrf = '{{ csrf_token() }}';

                $(document).on('click', '#confirm', function() {
                    $.ajax({
                        url: "{{ route('user-delete') }}",
                        method: 'delete',
                        data: {
                            id: id,
                            _token: csrf
                        },
                        success: function(response) {
                            $("#success-alert-delete").modal('show');
                            $("#danger-header-modal").modal('hide');
                            table.ajax.reload();
                        }
                    });
                });
            });


            function sendMarkRequest(id = null) {
                return $.ajax("{{ route('markNotification') }}", {
                    method: 'POST',

                    data: {
                        _token: '{{ csrf_token() }}',
                        id
                    }
                });
            }
            $(function() {
                $('.mark-as-read').click(function() {
                    let request = sendMarkRequest($(this).data('id'));
                    request.done(() => {
                        // $(this).parents('div.alert').remove();
                        fetchAllEmployees();
                    });
                });
                $('#mark-all').click(function() {
                    let request = sendMarkRequest();
                    request.done(() => {
                        // $('div.alert').remove();
                        fetchAllEmployees();
                    })
                });
            });
            $(document).ready(function() {
                $(".notification").click(function() {
                    fetchAllEmployees
                        (); // Call the fetchAllEmployees() function when the button is clicked
                });
            });

            function formatDate(dateString) {
                var date = new Date(dateString);
                var options = {
                    year: 'numeric',
                    month: 'short',
                    day: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit'
                };
                return date.toLocaleDateString('en-US', options);
            }

            function displayEmployees(notifications, user) {

                var html = ""
                if (notifications.length === 0 && user.length === 0) {
                    html += '<p class="dropdown-item ">There are no new notifications</p>';
                    // $(".noti-icon-badge").addClass("d-none");
                } else {
                    // $(".notification").addClass("d-block");
                    var newhtml =
                        '<i class="ri-notification-3-line font-22" ></i><span class="noti-icon-badge"></span>';
                    $(".notification").html(newhtml);
                    $.each(notifications, function(index, notification) {
                        var formattedDate = formatDate(notification.created_at);
                        html +=
                            '  <a href="#" id="' + notification.data.email +
                            '" data-bs-toggle="modal" data-id="' +
                            notification.id +
                            '" data-bs-target="#user-modal" class="dropdown-item p-0 notify-item card mark-as-read unread-noti shadow-none mb-2"><div class="card-body"><span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close mark-as-read" ></i></span><div class="d-flex align-items-center  mark-as-read" data-id="' +
                            notification.id +
                            '"><div class="flex-shrink-0"><div class="notify-icon bg-primary"><i class="mdi mdi-comment-account-outline"></i></div></div><div class="flex-grow-1 text-truncate ms-2"><h5 class="noti-item-title fw-semibold font-14">' +
                            notification.data.name + '<small class="fw-normal text-muted ms-1">' +
                            formattedDate +
                            '</small></h5><small class="noti-item-subtitle text-muted">' + notification.data
                            .email +
                            ' has just registered. </small></div></div></div></a>';

                    });
                    $.each(user, function(index, users) {
                        html += ' <a href="#" id="' + users.email +
                            '" data-bs-toggle="modal" data-id="' +
                            users.id +
                            '" data-bs-target="#user-modal" class="dropdown-item p-0 notify-item card  unread-noti shadow-none mb-2"><div class="card-body"><span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close mark-as-read" ></i></span><div class="d-flex align-items-center"><div class="flex-shrink-0"><div class="notify-icon bg-primary"><i class="mdi mdi-comment-account-outline"></i></div></div><div class="flex-grow-1 text-truncate ms-2"><h5 class="noti-item-title fw-semibold font-14">' +
                            users.name +
                            '<small class="fw-normal text-muted ms-1"></small></h5><small class="noti-item-subtitle text-muted">' +
                            users.email + ' is inactive. </small></div></div></div></a>'
                    });


                    // Add the generated HTML to the "show_all_employees" div

                }
                $("#all_notification").html(html);

                // If you want to use DataTables for better display and interactivity:
                // $("table").DataTable({
                //   order: [0, 'desc']
                // });
            }
            window.onload = fetchAllEmployees;

            // fetchAllEmployees();

            function fetchAllEmployees() {
                $.ajax({
                    url: "{{ route('get-notification') }}",
                    method: 'get',
                    success: function(response) {

                        // console.log(response.user);
                        displayEmployees(response.notifications, response.user);
                        // console.log(response);
                    }
                });
            }
            $(document).on('click', '.unread-noti', function(e) {
                e.preventDefault();
                let id = $(this).attr('id');
                $('#password_add').remove();
                $.ajax({
                    url: "{{ route('noti-edit') }}",
                    method: 'get',
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        // console.log(response);
                        $("#name1").val(response.name);
                        $("#surname1").val(response.surname);
                        $("#city1").val(response.city);
                        $("#inputState1").val(response.student);
                        $("#gender1").val(response.gender);
                        $("#telephone1").val(response.telephone);
                        $("#emailaddress1").val(response.email);
                        $("#dob1").val(response.dob);
                        $("#password").val(response.password);
                        $('#password').prop('disabled', true);
                        $("#card_number1").val(response.card_number);
                        $("#fitness1").val(response.fitness);
                        $("#card_code1").val(response.card_code);
                        $("#internal1").val(response.note_internal);
                        $("#visible1").val(response.note_visible);
                        if (response.active == "1") {
                            $("#customSwitch11").prop("checked", true);
                        } else {
                            $("#customSwitch11").prop("unchecked", true);
                            $("#customSwitch11").val(response.active);
                        }
                        if (response.mark_note == "1") {
                            $("#mark").prop("checked", true);
                        }

                        // $("#customSwitch11").val(response.active);
                        $("#wallet1").val(response.wallet_account_status);

                        $("#user_id").val(response.id);
                    }
                });
            });
            $(document).on('click', '.unread-noti', function(e) {
                e.preventDefault();
                let id = $(this).attr('id');
                $('#password_add').remove();
                $.ajax({
                    url: "{{ route('user-edit_noti') }}",
                    method: 'get',
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $("#entries").val(response.no_entries);
                        $("#solarium").val(response.solarium_min);
                        $("#end").val(response.end_date);
                        $("#Price").val(response.price);

                        // $("#mark").val(response.telephone);


                    }
                });
            });
        })
    </script>



</body>

</html>