<div class="leftside-menu">



    <!-- Brand Logo Light -->

    <a href="{{ route('dashboard') }}" class="logo logo-light">

        <span class="logo-lg">

            <img src="{{ asset('myimage/logo2.png') }}" style="width: 32%;
    height: 100%;" alt="logo">

        </span>

        <span class="logo-sm">

            <img src="{{ asset('myimage/image (4).png') }}" alt="small logo">

        </span>

    </a>



    <!-- Brand Logo Dark -->

    <a href="#" class="logo logo-dark">

        <span class="logo-lg">

            <img src="{{ asset('images/logo-dark.png') }}" alt="dark logo">

        </span>

        <span class="logo-sm">

            <img src="{{ asset('images/logo-dark-sm.png') }}" alt="small logo">

        </span>

    </a>



    <!-- Sidebar Hover Menu Toggle Button -->

    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">

        <i class="ri-checkbox-blank-circle-line align-middle"></i>

    </div>



    <!-- Full Sidebar Menu Close Button -->

    <div class="button-close-fullsidebar">

        <i class="ri-close-fill align-middle"></i>

    </div>



    <!-- Sidebar -left -->

    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!-- Leftbar User -->

        <div class="leftbar-user">

            <a href="{{ route('dashboard') }}">

                <img src="{{ asset('images/users/avatar-1.jpg') }}" alt="user-image" height="42" class="rounded-circle shadow-sm">

                <span class="leftbar-user-name mt-2">Dominic Keller</span>

            </a>

        </div>



        <!--- Sidemenu -->

        <ul class="side-nav">



            <li class="side-nav-title">Navigation</li>


            @if (Auth::user()->role == 'admin')
            <li class="side-nav-item">

                <a href="{{ route('dashboard') }}" class="side-nav-link">

                    <i class="uil-home-alt"></i>

                    <!-- <span class="badge bg-success float-end">5</span> -->

                    <span> Dashboards </span>

                </a>
            </li>
            @else
            <li class="side-nav-item">

                <a href="{{ route('user_dashboard') }}" class="side-nav-link">

                    <i class="uil-home-alt"></i>

                    <!-- <span class="badge bg-success float-end">5</span> -->

                    <span> Dashboards </span>

                </a>
            </li>
            @endif

            @if (Auth::user()->role == 'admin')
            <li class="side-nav-item">
                <a href="{{ route('user-details') }}" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span>User</span>
                </a>

            </li>
            <!-- <li class="side-nav-item">
                    <a href="{{ route('get-holidays') }}" class="side-nav-link">
                        <i class="uil-table"></i>
                        <span>Holidays</span>
                    </a>

                </li> -->
            @endif

            {{-- <!-- Help Box -->

            <div class="help-box text-white text-center">

                <a href="javascript: void(0);" class="float-end close-btn text-white">

                    <i class="mdi mdi-close"></i>

                </a>

                <img src="images/svg/help-icon.svg" height="90" alt="Helper Icon Image" />

                <h5 class="mt-3">Unlimited Access</h5>

                <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>

                <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Upgrade</a>

            </div>

            <!-- end Help Box --> --}}





        </ul>

        <!--- End Sidemenu -->



        <div class="clearfix"></div>

    </div>

</div>

<div id="entry-details" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-bottom-0 ">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-sm-12">
                        <!-- Profile -->
                        <div class="card bg-primary">
                            <div class="card-body profile-user-box">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="row align-items-center">

                                            <div class="col">
                                                <div>
                                                    <h4 class="mt-1 mb-1 text-white user-name text-capitalize"></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col-->

                                    <div class="col-sm-4">
                                        <div class="text-center mt-sm-0 mt-3 text-sm-end edit_btn">

                                        </div>
                                    </div> <!-- end col-->
                                </div> <!-- end row -->

                            </div> <!-- end card-body/ profile-user-box-->
                        </div><!--end profile/ card -->
                    </div> <!-- end col-->
                </div>
                <div class="row" id="active_customers">
                    <div class="col-sm-12">
                        <!-- Profile -->
                        <div class="card active_user">
                            <div class="card-body profile-user-box overflow-auto">
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-sm-12" id="active_customer_with_same_user">

                                    </div> <!-- end col-->

                                </div>
                                <div class="row">
                                    <!-- <div class="col justify-content-center" style="display: none;">
                                        <div class="spinner-border text-success justify-content-center" role="status"></div>
                                    </div> -->

                                    <div id="loading-indicator" class=" justify-content-center" style="display: none;">
                                        <div class="spinner-border text-success" role="status"></div>
                                    </div>

                                </div>

                            </div> <!-- end card-body/ profile-user-box-->
                        </div><!--end profile/ card -->
                    </div> <!-- end col-->
                </div>
                <div class="row">
                    <!-- end col-->


                    <div class="col-xl-4">
                        <!-- Personal-Information -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mt-0 mb-3">Expiration Validity</h4>
                                <p class="text-muted font-13">
                                    Hye, I’m <span class="user-name"></span> residing in this beautiful world.
                                </p>

                                <hr />

                                <div class="text-start">
                                    <div class=" p-2 mb-2 rounded" style="background: #87CEEB">
                                        <p class="text-dark"><strong>Limited Time:</strong></p>

                                        <p class="text-dark"><span class=" valid-date"></span></p>
                                        <h3 class="text-dark days-count">

                                        </h3>

                                    </div>
                                    <p class="text-dark"><strong>Last enrty:</strong><span class="ms-2 last-entry"></span></p>
                                </div>
                            </div>
                        </div>

                        <!-- Personal-Information -->

                    </div>
                    <div class="col-xl-4">

                        <!-- Chart-->
                        <div class="card">
                            <div class="card-body">

                                <div class="mx-auto">
                                    <div class="chartjs-chart xyz_image text-center">

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="invalid-feedback text-center" id="plan_error">
                            <h5>Your plan has been expired!!</h5>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3">Arrival</h4>


                                <div class="text-start">

                                    <form action="#" class="needs-validation entry-form" novalidate method="post">
                                        @csrf
                                        <input type="text" hidden class="user_id">
                                        {{-- <input type="text" hidden class="user_real_id"> --}}

                                        <label for="key" class="form-label">Enter locker key*</label>
                                        <input class="form-control key_locker" id="key" type="text" placeholder="Enter locker Key" name="key" required autofocus="autofocus">
                                        <div class="invalid-tooltip empty_key">
                                            plz entered key value
                                        </div>

                                    </form>
                                </div> <!-- end inbox-widget -->
                            </div> <!-- end card-body-->
                        </div>

                    </div>
                    <div class="col-xl-4">
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Messages-->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">solarium</h4>

                                        <div class="text-start">

                                            <p class="text-muted solarium_time"></p>
                                            <form action="#" id="solariumForm" class="solarium-form" method="post">
                                                @csrf
                                                <input type="text" hidden class="user_id">

                                                <div class="mb-2">
                                                    <label for="key" class="form-label">Enter Solarium
                                                        minutes:</label>
                                                    <input class="form-control solarium_min" type="number" placeholder="Enter Solarium Minutes" name="solarium" required>

                                                </div>
                                                <div class="invalid-feedback " id="solarium_error">
                                                    No Solarium left
                                                </div>
                                                <div class="invalid-feedback " id="solarium_error1">

                                                </div>


                                                <button type="submit" class="btn btn-primary btn_solarium">Add</button>
                                            </form>


                                        </div> <!-- end inbox-widget -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>

                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">entrance</h4>

                                        <div class="text-start">

                                            <p class="text-muted entrance_tickets"></p>

                                            <div class="invalid-feedback" id="entry_error">
                                                No Entrance ticket are left
                                            </div>
                                        </div> <!-- end inbox-widget -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                        </div>
                    </div>
                    <!-- End Chart-->


                    <!-- end row -->


                    <!-- end row-->

                    <!-- end col -->

                </div>

            </div>
            <div class="modal-footer border-top-0 mymodelfooter">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary submit_btn1">Save changes</button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="exit-details" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="danger-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title text-white" id="danger-header-modalLabel">Are you sure to Exit?</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <input type="text" hidden class="user_id">
            <input type="text" hidden id="keyLocker">
            <input type="text" hidden id="minutes_count">
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" id="sure" class="btn btn-danger">Exit</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<script src="{{ asset('js/pages/demo.form-wizard.js') }}"></script>
{{-- <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}
<script>
    $(document).ready(function() {
        'use strict'
        var table = $('#products-datatable').DataTable({
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
            ajax: "{{ route('fetchAll') }}",
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
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'surname',
                    name: 'surname'
                },
                {
                    data: 'telephone',
                    name: 'telephone'
                },
                {
                    data: 'time',
                    name: 'time'
                },
                {
                    data: 'days',
                    name: 'days'
                },
                {
                    data: 'solarium',
                    name: 'solarium'
                },
                {
                    data: 'card_number',
                    name: 'card_number'
                },

                {
                    data: 'active',
                    name: 'active'
                },
                {
                    data: 'entry',
                    name: 'entry'
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
                    $('#products-datatable_length label').addClass('form-label'),
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
        $("#basicwizard").bootstrapWizard();

        // Initialize the progress bar wizard
        $("#progressbarwizard").bootstrapWizard({
            onTabShow: function(t, r, a) {
                a = (a + 1) / r.find("li").length * 100;
                $("#progressbarwizard").find(".bar").css({
                    width: a + "%"
                });
            }
        });

        // Initialize the button wizard
        $("#btnwizard").bootstrapWizard({
            nextSelector: ".button-next",
            previousSelector: ".button-previous",
            firstSelector: ".button-first",
            lastSelector: ".button-last"
        });

        // Initialize the root wizard with validation
        $("#rootwizard").bootstrapWizard({
            onNext: function(t, r, a) {
                t = $($(t).data("targetForm"));
                if (t && (t.addClass("was-validated"), !t[0].checkValidity())) {
                    event.preventDefault();
                    event.stopPropagation();
                    return false;
                }
            }
        });
        $(".submit_btn").click(function() {
            // Serialize data from both forms
            var formData1 = $("#accountForm").serialize();
            var formData2 = $("#profileForm").serialize();

            // Combine the two sets of form data
            var combinedData = formData1 + '&' + formData2;
            let request = sendMarkRequest($(this).data('id'));
            request.done(() => {
                // $(this).parents('div.alert').remove();
                // console("sadadasd");
                fetchAllEmployees();
            });
            $(".submit_btn").text('Updating...');
            var wizardInstance = $('#rootwizard').data('bootstrapWizard');
            if (wizardInstance) {
                wizardInstance.resetWizard();
            }
            $("#rootwizard").bootstrapWizard("resetWizard");
            // Send AJAX request
            $.ajax({
                type: "POST", // or "GET" depending on your requirements
                url: "{{ route('add_plans') }}",
                data: combinedData,
                success: function(response) {
                    if (response.message == "new_user") {
                        $("#success-alert-add").modal('show');
                    } else {
                        $("#success-alert-noti").modal('show');
                    }
                    $('#password_add').css('display', 'none');
                    // console.log(response.message);
                    fetchAllEmployees();
                    $(".submit_btn").text('Save');
                    $("#accountForm")[0].reset();
                    $("#profileForm")[0].reset();
                    $("#user-modal").modal('hide');
                    table.ajax.reload();
                    // $("#rootwizard").bootstrapWizard('reset');

                    var wizardInstance = $('#rootwizard').data('bootstrapWizard');
                    if (wizardInstance) {
                        wizardInstance.resetWizard();
                    }
                    $("#rootwizard").bootstrapWizard("resetWizard");

                },
                error: function(error) {
                    // Handle error response
                    $(".submit_btn").text('Save');
                    console.error("Error submitting data", error);
                }
            });
        });

        $(document).on('click', '.editIcon', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            // $('#password_add').css('display', 'none');
            // console.log(id);
            $("#accountForm").removeClass("was-validated");
            $("#profileForm").removeClass("was-validated");
            $.ajax({
                url: "{{ route('user-edit') }}",
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
                    $("#password").val(response.password);
                    $('#password').prop('disabled', true);
                    $("#emailaddress1").val(response.email);
                    $("#dob1").val(response.dob);
                    $("#card_number1").val(response.card_number);
                    $("#fitness1").val(response.fitness);
                    $("#card_code1").val(response.card_code);
                    $("#internal1").val(response.note_internal);
                    $("#visible1").val(response.note_visible);
                    if (response.active == "1") {
                        $("#customSwitch11").prop("checked", true);
                    } else {
                        $("#customSwitch11").prop("checked", false);
                    }
                    // $("#customSwitch11").val(response.active);
                    $("#wallet1").val(response.wallet_account_status);

                    $("#user_id").val(response.id);

                    if (response.mark_note == "1") {
                        $("#mark").prop("checked", true);
                    }
                }
            });
        });
        $(document).on('click', '.add_customers', function(e) {
            e.preventDefault();
            // $('#password_add').add();
            $("#user_id").val(null);

            $("#accountForm")[0].reset();
            $("#profileForm")[0].reset();
            $("#accountForm").removeClass('was-validated');
            $("#profileForm").removeClass('was-validated');
            $('#password').prop('disabled', false);
            $('#password_add').css('display', 'block');
            var wizardInstance = $('#rootwizard').data('bootstrapWizard');
            if (wizardInstance) {
                wizardInstance.resetWizard();
            }
            $("#rootwizard").bootstrapWizard("resetWizard");

        });

        $(document).on('click', '.editIcon', function(e) {
            $("#accountForm").removeClass('was-validated');
            $("#profileForm").removeClass('was-validated');
            e.preventDefault();
            let id = $(this).attr('id');
            $('#password_add').css('display', 'none');
            $.ajax({
                url: "{{ route('user-edit_noti') }}",
                method: 'get',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $('#entries').val(response.no_entries);
                    $('#solarium').val(response.solarium_min);
                    $("#start").val(response.start_date);
                    $("#end").val(response.end_date);
                    $("#Price").val(response.price);

                    // $("#mark").val(response.telephone);


                }
            });
        });
        // update employee ajax request

        $(document).on('click', '.deleteIcon', function(e) {
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
                        $('.modal-backdrop').css('display', 'none');
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

        $(document).ready(function() {
            $('.add-month').click(function() {
                if ($('#start').val() == "") {
                    var currentDate = new Date();
                    var day = String(currentDate.getDate()).padStart(2, '0');
                    var month = String(currentDate.getMonth() + 1).padStart(2, '0');
                    var year = currentDate.getFullYear();
                    var formattedDate1 = year + '-' + month + '-' + day;
                    $('#start').val(formattedDate1);
                }


                const monthsToAdd = parseInt($(this).data('months'));
                const startDate = new Date($('#start').val());

                if (!isNaN(startDate.getTime())) {
                    const endDate = new Date(startDate);
                    endDate.setMonth(endDate.getMonth() + monthsToAdd);

                    const year = endDate.getFullYear();
                    let month = endDate.getMonth() + 1;
                    let day = endDate.getDate();

                    // Pad month and day with leading zeros if needed
                    if (month < 10) {
                        month = '0' + month;
                    }
                    if (day < 10) {
                        day = '0' + day;
                    }

                    const formattedDate = year + '-' + month + '-' + day;
                    $('#end').val(formattedDate);
                } else {
                    // Handle the case where the start date is not valid
                    console.log('Please enter a valid start date before prefilling.');
                }
            });
        });


        $('#solariumForm').submit(function(e) {
            e.preventDefault(); // Prevent default form submission
            var keyInput = $('.solarium_min').val();
            if (keyInput.trim() == "") {
                $(".solarium_error").show();
                return; // Stop further processing
            }
            $('#solarium_error1').css('display', 'none');

            $('#solarium_error').css('display', 'none');
            // Get form data
            var formData = {
                _token: $('input[name=_token]').val(),
                solarium: $('.solarium_min').val(),
                id: $('.user_id').val(),
            };
            $("#loading-indicator").css('display', 'flex');
            // Hide user list
            $("#active_customer_with_same_user").hide();

            // Send AJAX request
            $.ajax({
                type: 'POST',
                url: "{{ route('addsolarium') }}", // Replace with the actual route to handle the form submission
                data: formData,
                success: function(response) {
                    // console.log(response);
                    if (response.status == 400) {
                        $('#solarium_error').css('display', 'inline-block');

                        $("#active_customer_with_same_user").show();
                        $("#loading-indicator").hide();

                        reloadContent(clickedId = response.message.id);
                        $("#solariumForm")[0].reset();
                    } else if (response.status == 100) {
                        $('#solarium_error1').css('display', 'inline-block');
                        $.each(response.solarium, function(index, user) {

                            $('#solarium_error1').text(
                                ` You have only ${user.solarium_min} min of Solarium left!!!`
                            );
                        });

                        $("#loading-indicator").hide();
                        $("#active_customer_with_same_user").show();
                        reloadContent(clickedId = response.message.id);
                        $("#solariumForm")[0].reset();
                    } else {

                        // Hide user list
                        $("#active_customer_with_same_user").show();
                        // Handle success response
                        $("#solariumForm")[0].reset();
                        $('#solarium_error1').css('display', 'none');

                        $('#solarium_error').css('display', 'none');
                        // console.log(response);
                        $.toast({
                            text: response.solarium +
                                ' min Solarium is Succesfully Created..',
                            icon: 'warning',
                            position: 'top-right',
                            heading: 'User Id : ' + response.message.id,
                            showHideTransition: 'plain'
                        });
                        $.each(response.solarium1, function(index, user) {
                            $('.solarium_time').text(
                                `${user.solarium_min} min left`);

                        });
                        table.ajax.reload();

                        reloadContent(clickedId = response.message.id);
                        $("#loading-indicator").hide();
                    }

                },
                error: function(error) {
                    // Handle error response
                    console.error(error);
                }
            });


        });
        $(document).on('click', '.solariumexit', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            console.log(id);
            $.ajax({
                url: "{{ route('exitsolarium') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",

                    id: id
                },
                success: function(response) {
                    // Handle success response
                    // console.log(response);

                    // if (response.status == 400) {
                    //     $("#entry_error").show();
                    // } else {
                    $.toast({
                        text: response.solarium + 'min Solarium is detoryed for ' +
                            response.message.name + ' ' + response.message.surname +
                            '!!',
                        icon: 'error',
                        position: 'top-right',
                        heading: 'User Id : ' + response.message.id,
                        showHideTransition: 'plain'
                    });
                    table.ajax.reload();
                    //     $("#entry-details").modal('hide');
                    // }
                    $("#entry-details").modal('hide');
                    // // $("#entry-details").hide();
                    // $(".submit_btn1").text('Save changes');
                    $(".entry-form")[0].reset();
                    // $(".empty_key").hide();
                    // table.ajax.reload();





                    $("#loading-indicator").css('display', 'none');

                    // $("#loading-indicator").hide();
                    // Show user list
                    $("#active_customer_with_same_user").show();

                },
                error: function(error) {
                    // Handle error response
                    console.error("Error submitting entry", error);
                }
            });


        });
        var clickedId = null; // Variable to store the clicked id
        $('#solarium_error1').css('display', 'none');
        $('#solarium_error').css('display', 'none');

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
        $(document).on('click', '.entryicon', function(e) {
            e.preventDefault();
            clickedId = $(this).attr('id'); // Update the clicked id
            // console.log(clickedId);  
            $("#entry_error").hide();
            // $("#entry-details").modal('show');

            $("#loading-indicator").css('display', 'flex');

            $('#solarium_error1').css('display', 'none');
            $('#solarium_error').css('display', 'none');


            // Call reloadContent() initially
            reloadContent(clickedId);


            $("#loading-indicator").hide();

            // Set up the interval to reload content every 5 seconds
            // 5000 milliseconds = 5 seconds
        });
        $(".empty_key").hide();
        $(".submit_btn1").click(function() {
            var keyInput = $(".key_locker").val();
            var id = $(".user_id").val()

            if (keyInput.trim() == "") {
                $(".empty_key").show();
                return; // Stop further processing
            }
            $(".empty_key").hide();
            $("#active_customer_with_same_user").hide();
            $("#loading-indicator").css('display', 'flex');
            // Hide user list
            $('#solarium_error1').css('display', 'none');
            $('#solarium_error').css('display', 'none');
            // Send data using AJAX
            $(".submit_btn1").html(`
                 <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
                Loading...
            `);
            $.ajax({
                url: "{{ route('newentry') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    key: keyInput,
                    entryid: id
                },
                success: function(response) {
                    // Handle success response
                    // console.log(response);

                    if (response.status == 400) {
                        $("#entry_error").show();
                    } else {
                        $.toast({
                            text: response.message.name + ' ' + response.message
                                .surname + ' is Succesfully Entered..',
                            icon: 'success',
                            position: 'top-right',
                            heading: 'User Id : ' + response.message.id,
                            showHideTransition: 'plain'

                        });
                        $("#entry-details").modal('hide');
                    }
                    // $("#entry-details").modal('hide');
                    // $("#entry-details").hide();
                    $(".submit_btn1").text('Save changes');
                    $(".entry-form")[0].reset();
                    $(".empty_key").hide();
                    table.ajax.reload();





                    $("#loading-indicator").css('display', 'none');

                    // $("#loading-indicator").hide();
                    // Show user list
                    $("#active_customer_with_same_user").show();

                },
                error: function(error) {
                    // Handle error response
                    console.error("Error submitting entry", error);
                }
            });
        });
        $(document).on('click', '.exiticon', function(e) {
            e.preventDefault();

            $('.submit_btn1').css({
                'display': 'none',
            });
            $('.submit_btn2').css({
                'display': 'block',
            });
            let id = $(this).attr('id');
            var timeValue = $(this).attr('data-time');
            // console.log('Clicked element data-time:', timeValue);
            $.ajax({
                url: "{{ route('exiticon') }}",
                method: 'get',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {

                    // console.log(response.user.id);
                    // Store response data in variables
                    let customer = response.user;
                    let orders = response.plans;
                    let last = response.last;
                    if (last != null) {
                        $('.last-entry').text(`${last.start_time}`);
                    } else {
                        $('.last-entry').text(`No entry available`);
                    }
                    let active_user = response.active;
                    let startDate = new Date(orders.start_date);
                    let endDate = new Date(orders.end_date);
                    let timeDiff = Math.abs(endDate.getTime() - startDate.getTime());
                    let daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
                    // console.log(daysDiff);
                    $('.user-name').text(`${customer.name} ${customer.surname}`);
                    // console.log(active_user.id)
                    $('.user_id').val(`${active_user.id}`);
                    $('#keyLocker').val(`${active_user.key_locker}`);

                    var [hours, minutes, seconds] = timeValue.split(':').map(Number);

                    // Calculate total minutes
                    var totalMinutes = hours * 60 + minutes;
                    $("#minutes_count").val(totalMinutes);
                    // console.log('Total minutes:', totalMinutes);


                    // $('.user_real_id').val(response.user.id);

                    // Check if note_internal is null or not
                    $('.valid-date').html(
                        `<strong>Valid from </strong>: ${orders.start_date} to ${orders.end_date}`
                    )
                    $('.days-count').text(`${daysDiff} days left`);
                    // $('.last-entry').text(`${last.start_time}`);

                    let noteInternal = customer.note_internal !== null ? customer
                        .note_internal : '';

                    $('.edit_btn').html(` <button type="button" class="btn btn-light editIcon" id="${customer.id}" data-bs-toggle="modal" data-bs-target="#user-modal" >
                                                <i class="mdi mdi-account-edit me-1 "></i> Edit Profile
                                            </button>`);
                    var keyInput = $("#keyLocker").val();
                    var id = $(".user_id").val()

                    // console.log(minutes);
                    // console.log(keyInput);
                    // console.log(id);
                    if (keyInput.trim() == "") {
                        $(".empty_key").show();
                        return; // Stop further processing
                    }
                    $(".empty_key").hide();
                    $.ajax({
                        url: "{{ route('newentry') }}",
                        method: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            key: keyInput,
                            exitid: id,
                        },
                        success: function(response) {
                            // console.log(response);


                            table.ajax.reload();
                            $("#entry-details").modal('hide');

                            $(".entry-form")[0].reset();
                            $(".empty_key").hide();

                            // console.log(response.message);
                            // $("#entry-details").modal('show');
                            $('.user_id').val(`${response.message.id}`);
                            $('.submit_btn1').css({
                                'display': 'block',
                            });
                            $('.submit_btn2').css({
                                'display': 'none',
                            });

                            $.toast({
                                text: response.message.name + ' ' +
                                    response.message
                                    .surname +
                                    ' is Succesfully Exited..',
                                icon: 'error',
                                position: 'top-right',
                                heading: 'User Id : ' + response.message
                                    .id,
                                showHideTransition: 'plain'
                            });

                        },
                        error: function(error) {

                            // Handle error response
                            console.error("Error submitting entry", error);
                        }
                    });
                    // Display customer details in HTML
                    // $('#entry-user-details').html(`

                    // `);
                },
                error: function(error) {
                    console.error("Error fetching data", error);
                }
            });
        });
        $(document).on('click', '.entryicon', function(e) {

            e.preventDefault();
            $('.submit_btn1').css({
                'display': 'block',
            });
            $('.submit_btn2').css({
                'display': 'none',
            });
            $('#plan_error').hide();
            $('.key_locker').prop('disabled', false);
            $(".solarium_min").prop('disabled', false);
            $(".btn_solarium").prop('disabled', false);
            let id = $(this).attr('id');
            // console.log(id);

            $('.submit_btn').removeAttr('id');
            $('.submit_btn').attr('id', 'entry-submit');
            $.ajax({
                url: "{{ route('entryicon') }}",
                method: 'get',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    // Store response data in variables
                    // console.log(response);
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

                    $("#loading-indicator").hide();
                    // Display customer details in HTML
                    // $('#entry-user-details').html(`

                    // `);
                },
                error: function(error) {
                    console.error("Error fetching data", error);
                }
            });
        });
       
    });
    $(document).ready(function() {
        $('#entry-details').on('shown.bs.modal', function() {
            // alert('sdsdsd');
            console.log('hisdahdasd');
            $("#key").focus();
        });
    });


    // $(document).ready(function() {
    //     $(".next").click(function() {
    //         // Iterate through each input element within the form
    //         $("#accountForm input, #accountForm textarea, #accountForm [type='checkbox']").each(
    //             function() {
    //                 if ($(this).is(":checkbox")) {
    //                     // For checkboxes, check if it's checked or not
    //                     if (!$(this).prop("checked")) {
    //                         $(this).addClass("empty-input");
    //                     } else {
    //                         $(this).removeClass("empty-input");
    //                     }
    //                 } else {
    //                     var inputValue = $(this).val().trim();
    //                     if (inputValue === "" || inputValue === null) {
    //                         $(this).addClass("empty-input");
    //                     } else {
    //                         $(this).removeClass("empty-input");
    //                     }
    //                 }
    //             });

    //         // Add or remove the "empty-label" class for labels
    //         $("#accountForm label").each(function() {
    //             var inputId = $(this).attr("for");
    //             var relatedInput = $("#" + inputId);
    //             if (relatedInput.hasClass("empty-input")) {
    //                 $(this).addClass("empty-label");
    //             } else {
    //                 $(this).removeClass("empty-label");
    //             }
    //         });
    //     });
    // });
    $(document).ready(function() {
        $(".next").click(function() {
            // Iterate through each input element within the form
            $("#accountForm input, #accountForm textarea, #accountForm [type='checkbox']").each(
                function() {
                    if ($(this).is(":checkbox")) {
                        // For checkboxes, check if it's checked or not
                        if (!$(this).prop("checked")) {
                            $(this).addClass("empty-input");
                            $(this).siblings("label").addClass("empty-label"); // Add empty-label class to the label
                        } else {
                            $(this).removeClass("empty-input");
                            $(this).siblings("label").removeClass("empty-label"); // Remove empty-label class from the label
                        }
                    } else {
                        var inputValue = $(this).val().trim();
                        if (inputValue === "" || inputValue === null) {
                            $(this).addClass("empty-input");
                            $(this).siblings("label").addClass("empty-label"); // Add empty-label class to the label
                        } else {
                            $(this).removeClass("empty-input");
                            $(this).siblings("label").removeClass("empty-label"); // Remove empty-label class from the label
                        }
                    }
                });
        });
        $("#accountForm input, #accountForm textarea").on("click", function() {
        $(this).removeClass("empty-input");
        $(this).siblings("label").removeClass("empty-label");
    });
    });
</script>
<style>
    .empty-input {
        background: none !important;
        border: 1px solid #dee2e6 !important;
        background-image: none !important;
        border-color: #dee2e6 !important;
    }
    .empty-label{
        color: #6c757d !important;
    }
</style>