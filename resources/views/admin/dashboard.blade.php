<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | crmfittness</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" style="height: 100%;width:100%" href="{{ asset('myimage/image (4).png') }}">

    <link href="{{ asset('vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />



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
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}


</head>
<style>
    .mycard:last-child {
        border: 0px
    }

    .mycard {
        border-bottom: 1px solid #dee2e6;
        border-left: 0px;
        border-right: 0px;
    }

    /* Hide the default scrollbar */
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

    tbody.birthday_details td {
        padding: 0px;
        vertical-align: middle;
    }

    #scroll-horizontal-datatable thead th {
        padding: 10px 30px 10px 0px
    }

    .myicons {
        padding: 15px 15px;
        font-size: 24px;
        border-radius: 12px;
    }

    .holiday.active {

        background: #e4e4e4;
        padding: 1px 10px;

    }

    .holiday {

        padding: 1px 10px;
    }
</style>

<body onpaste="myFunction1()">
    <!-- Begin page -->
    <div id="preloader">
        <div id="status">
            <div class="bouncing-loader">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

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

        @include('admin/home')

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    @include('layout/themesetting')

    <!-- Vendor js -->
    <script src="{{ asset('vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>

    <script src="{{ asset('vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-datatables-checkboxes/js/dataTables.checkboxes.min.js') }}"></script>
    <script src="{{ asset('vendor/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('vendor/highlightjs/highlight.pack.min.js') }}"></script>
    <!-- Wizard Form Demo js -->
    <script src="{{ asset('js/pages/demo.form-wizard.js') }}"></script>
    <!-- {{-- <script src="{{ asset('js/pages/demo.customers.js') }}"></script> --}} -->
    <!-- App js -->
    <script src="{{ asset('js/app.min.js') }}"></script>
    <!-- {{-- <script src="{{ asset('js/pages/demo.materialdesignicons.js') }}"></script> --}} -->
    <!-- App js -->
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['dayGrid'],
                events: '/events' // Laravel route to fetch events
            });
            calendar.render();
        });
    </script> --}}
    <script>
        function myFunction1() {
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
            // console.log(pastedData);
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

        $(document).ready(function() {

            'use strict'

            $.ajax({
                url: "{{ route('activities') }}",
                method: 'get',

                success: function(response) {

                    // console.log(response);
                    var html = "";
                    $.each(response, function(index, item) {
                        const createdDate = new Date(item.created_at);
                        const currentDate = new Date();

                        const timeDifference = Math.floor((currentDate - createdDate) /
                            1000); // Time difference in seconds

                        let timeAgo = '';
                        if (timeDifference < 60) {
                            timeAgo = `${timeDifference} seconds ago`;
                        } else if (timeDifference < 3600) {
                            const minutes = Math.floor(timeDifference / 60);
                            timeAgo = `${minutes} ${minutes === 1 ? 'minute' : 'minutes'} ago`;
                        } else {
                            const hours = Math.floor(timeDifference / 3600);
                            timeAgo = `${hours} ${hours === 1 ? 'hour' : 'hours'} ago`;
                        }

                        const html = `<div class="timeline-item">
                    <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                    <div class="timeline-item-info">
                        <a href="javascript:void(0);" class="text-info fw-bold mb-1 d-block">${item.msg}</a>
                        <small></small>
                        <p class="mb-0 pb-2">
                            <small class="text-muted">${timeAgo}</small>
                        </p>
                    </div>
                </div>`;
                        $('#new_activity').append(html);
                    });

                    // $('#new_activity').html(html);

                },
                error: function(error) {
                    // Handle error response
                    console.error("Error submitting data", error);
                }
            });
            $.ajax({
                url: "{{ route('birthday') }}",
                method: 'get',

                success: function(response) {


                    // console.log(response.data);
                    var html = "";
                    $.each(response.data, function(index, item) {
                        const dob = new Date(item.dob);
                        const today = new Date();
                        const tomorrow = new Date(today);
                        tomorrow.setDate(today.getDate() + 1);
                        const dayAfterTomorrow = new Date(today);
                        dayAfterTomorrow.setDate(today.getDate() + 2);

                        let birthdayMessage = '';
                        if (dob.getDate() === today.getDate() && dob.getMonth() === today
                            .getMonth()) {
                            birthdayMessage = 'Today';
                        } else if (dob.getDate() === tomorrow.getDate() && dob.getMonth() ===
                            tomorrow.getMonth()) {
                            birthdayMessage = 'Tomorrow';
                        } else if (dob.getDate() === dayAfterTomorrow.getDate() && dob
                            .getMonth() === dayAfterTomorrow.getMonth()) {
                            birthdayMessage = 'Day After Tomorrow';
                        } else {
                            birthdayMessage = dob
                                .toDateString(); // Display full date if not today, tomorrow, or day after tomorrow
                        }
                        const html = `<tr class="viewicon" id='${item.id}' data-bs-toggle="modal" data-bs-target="#user-details" style="cursor:pointer">
            <td>${item.id}</td>
            <td class="text-info">${item.name} ${item.surname}</td>
            <td>New member</td>
            <td ><h5><span class="badge bg-info">${birthdayMessage}</span></h5></td>
        </tr>`;
                        $('.birthday_details').append(html);
                    });

                    // $('#new_activity').html(html);

                },
                error: function(error) {
                    // Handle error response
                    console.error("Error submitting data", error);
                }
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
                fetchAllEmployees(); // Call the fetchAllEmployees() function when the button is clicked
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

        function displayEmployees(notifications) {

            var html = ""
            if (notifications.length === 0) {
                html += '<p class="dropdown-item ">There are no new notifications</p>';
                // $(".noti-icon-badge").addClass("d-none");
            } else {
                // $(".notification").addClass("d-block");
                var newhtml = '<i class="ri-notification-3-line font-22" ></i><span class="noti-icon-badge "></span>';
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
                        notification.data.name + '<small class="fw-normal text-muted ms-1">' + formattedDate +
                        '</small></h5><small class="noti-item-subtitle text-muted">' + notification.data.email +
                        ' has just registered. </small></div></div></div></a>';
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

        fetchAllEmployees();

        function fetchAllEmployees() {
            $.ajax({
                url: "{{ route('get-notification') }}",
                method: 'get',
                success: function(response) {

                    // console.log(response);
                    displayEmployees(response.notifications);
                    // console.log(response);
                }
            });
        }
        $(document).on('click', '.unread-noti', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            $.ajax({
                url: "{{ route('noti-edit') }}",
                method: 'get',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $(".name1").val(response.name);
                    $(".surname1").val(response.surname);
                    $(".city1").val(response.city);
                    $(".inputState1").val(response.student);
                    $(".gender1").val(response.gender);
                    $(".telephone1").val(response.telephone);
                    $(".emailaddress1").val(response.email);
                    $(".dob1").val(response.dob);
                    $(".card_number1").val(response.card_number);
                    $(".fitness1").val(response.fitness);
                    $(".card_code1").val(response.card_code);
                    $(".internal1").val(response.note_internal);
                    $(".visible1").val(response.note_visible);
                    if (response.active == "1") {
                        $(".customSwitch11").prop("checked", true);
                    }
                    if (response.mark_note == "1") {
                        $("#mark").prop("checked", true);
                    }
                    // $("#customSwitch11").val(response.active);
                    $(".wallet1").val(response.wallet_account_status);

                    $(".user_id").val(response.id);
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
                    $("#start").val(response.start_date);
                    $("#end").val(response.end_date);
                    $("#Price").val(response.price);

                    // $("#mark").val(response.telephone);


                }
            });
        });



        $("#plans_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            // console.log(fd);

            let request = sendMarkRequest($(this).data('id'));
            request.done(() => {
                // $(this).parents('div.alert').remove();
                // console("sadadasd");
                fetchAllEmployees();
            });

            $("#plans_form_btn").text('Updating...');
            $.ajax({
                url: "{{ route('add_plans') }}",
                method: 'post',
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    fetchAllEmployees();
                    $("#plans_form_btn").text('Save');
                    $("#plans_form")[0].reset();
                    $("#user-modal").modal('hide');
                    $("#success-alert-noti").modal('show');
                    //      table.ajax.reload();
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
                    console.log(response.message);
                    fetchAllEmployees();
                    $(".submit_btn").text('Save');
                    $("#accountForm")[0].reset();
                    $("#profileForm")[0].reset();
                    $("#user-modal").modal('hide');

                    // table.ajax.reload();
                },
                error: function(error) {
                    // Handle error response
                    console.error("Error submitting data", error);
                }
            });
        });
        $(document).on('click', '.editIcon', function(e) {
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
                    $("#entries").val(response.no_entries);
                    $("#solarium").val(response.solarium_min);
                    $("#start").val(response.start_date);
                    $("#end").val(response.end_date);
                    $("#Price").val(response.price);

                    // $("#mark").val(response.telephone);



                }
            });
        });
        $(document).on('click', '.editIcon', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            // $('#password_add').css('display', 'none');
            // console.log(id);
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
                    console.log(response.active);
                    if (response.active == "1") {
                        $("#customSwitch11").prop("checked", true);
                    } else {
                        $("#customSwitch11").prop("checked", false);
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
    </script>

</body>

</html>
