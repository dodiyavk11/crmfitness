<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid ">

            <!-- start page title -->
            <div class="row ">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Crmfitness</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Admin Dashboard</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            {{-- <div class="row">
                <div class="col-12">
                    <div class="card widget-inline">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card rounded-0 shadow-none m-0">
                                        <div class="card-body text-center">
                                            <i class="ri-briefcase-line text-muted font-24"></i>
                                            <h3><span>29</span></h3>
                                            <p class="text-muted font-15 mb-0">Total Projects</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3">
                                    <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                        <div class="card-body text-center">
                                            <i class="ri-list-check-2 text-muted font-24"></i>
                                            <h3><span>715</span></h3>
                                            <p class="text-muted font-15 mb-0">Total Tasks</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3">
                                    <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                        <div class="card-body text-center">
                                            <i class="ri-group-line text-muted font-24"></i>
                                            <h3><span>31</span></h3>
                                            <p class="text-muted font-15 mb-0">Members</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3">
                                    <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                        <div class="card-body text-center">
                                            <i class="ri-line-chart-line text-muted font-24"></i>
                                            <h3><span>93%</span> <i class="mdi mdi-arrow-up text-success"></i></h3>
                                            <p class="text-muted font-15 mb-0">Productivity</p>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- end row -->
                        </div>
                    </div> <!-- end card-box-->
                </div> <!-- end col-->
            </div> --}}
            <!-- end row-->


            <div class="row ">
                <div class="col-lg-6">
                    <div class="card" style="height:450px">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="header-title">Female Customers</h4>


                        </div>

                        <div class="card-body pt-0 overflow-auto" id="female-list">




                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->

                <div class="col-lg-6 ">
                    <div class="card " style="height:450px">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="header-title">Male Customers</h4>
                            <p class="text-muted">message board update every 5-10 sec.</p>

                        </div>

                        <div class="card-body pt-0 overflow-auto " id="male-list">





                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->



            <div class="row">
                <div class="col-xl-4">
                    <div class="card" style="height:95%">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="header-title">Daily Overview</h4>
                            <p class="text-muted fs-6 text-capitilize">Follow the current daily development</p>
                        </div>

                        <div class="card-body pt-0">
                            <div class="row mb-3">
                                <div class="col d-flex">
                                    <i class="mdi mdi-basket bg-primary-subtle text-primary myicons"></i>
                                    <div style="margin-left:10px ">
                                        <h5 class="order_count"></h5>
                                        <h5 class="text-muted">Orders</h5>
                                    </div>

                                </div>
                                <div class="col d-flex">

                                    <i class="mdi mdi-mirror-rectangle bg-info-subtle text-info myicons"></i>
                                    <div style="margin-left:10px ">
                                        <h5>110</h5>
                                        <h5 class="text-muted">Inputs</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col d-flex">
                                    <i class="mdi mdi-account-plus
                                    bg-success-subtle text-success myicons"></i>
                                    <div style="margin-left:10px ">
                                        <h5 class="user_count"></h5>
                                        <h5 class="text-muted">New registrations</h5>
                                    </div>

                                </div>
                                <div class="col d-flex">

                                    <i class="uil uil-signal bg-danger-subtle text-danger myicons"></i>
                                    <div style="margin-left:10px ">
                                        <h5 class="present_count"></h5>
                                        <h5 class="text-muted">Those present</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body py-0 mb-3" data-simplebar="init" style="max-height: 175px;">
                                <div class="simplebar-wrapper" style="margin: 0px -24px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 0px 24px;">
                                                    <div class="timeline-alt py-0">
                                                        <!-- <div class="holiday active">

                                                        </div>
                                                        <div class="upcoming_holiday holiday">

                                                        </div> -->
                                                    </div>
                                                    <!-- end timeline -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 623px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="height: 260px; transform: translate3d(0px, 0px, 0px); display: block;">
                                    </div>
                                </div>
                            </div> <!-- end slimscroll -->


                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
                <div class="col-xl-4">
                    <div class="card" style="height:95%">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="header-title">Upcoming Birthday

                            </h4>
                            <p class="text-muted fs-6 text-capitilize">Limited to 15 active clients</p>
                        </div>

                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                                    <thead>
                                        <tr>
                                            <th>UID</th>
                                            <th>Name</th>
                                            <th>Activity</th>
                                            <th>Birthday</th>
                                        </tr>
                                    </thead>
                                    <tbody class="birthday_details">

                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
                <div class="col-xl-4">
                    <div class="card" style="height:95%">
                        <div class="d-flex card-header justify-content-between align-items-center">
                            <h4 class="header-title">Activites</h4>

                        </div>

                        <div class="card-body py-0 mb-3" data-simplebar="init" style="max-height: 403px;">
                            <div class="simplebar-wrapper" style="margin: 0px -24px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden scroll;">
                                            <div class="simplebar-content" style="padding: 0px 24px;">
                                                <div class="timeline-alt py-0" id="new_activity">

                                                </div>
                                                <!-- end timeline -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: auto; height: 623px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar" style="height: 260px; transform: translate3d(0px, 0px, 0px); display: block;">
                                </div>
                            </div>
                        </div> <!-- end slimscroll -->
                    </div><!-- end card -->
                </div><!-- end col-->

            </div>
            <!-- end row-->


        </div> <!-- container -->

    </div> <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © CrmFitness
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
<!-- content -->

<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <script>
                    document.write(new Date().getFullYear())
                </script> © CrmFitness
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
<script>
    // $(document).ready(function() {
    //     $.ajax({
    //         url: "{{ route('holidays') }}",
    //         method: "get",
    //         success: function(response) {
    //             // console.log(response);
    //             var currentTime = new Date();
    //             var today = new Date(currentTime.getFullYear(), currentTime.getMonth(), currentTime.getDate());
    //             var tomorrow = new Date(currentTime);
    //             tomorrow.setDate(tomorrow.getDate() + 1);

    //             var todayEvents = "";
    //             var tomorrowEvents = "";
    //             var holiday = $('.upcoming_holiday');

    //             $.each(response, function(index, event) {
    //                 var eventDate = new Date(event.date.iso);
    //                 // console.log(event.type);
    //                 if (eventDate >= today && eventDate < tomorrow && event.type.includes('Hinduism') | event.type.includes('National holiday')) {
    //                     if (eventDate.getDate() === today.getDate()) {
    //                         todayEvents = event.name;
    //                         $('.holiday.active').append(`<h5>Today is ${todayEvents}'s Holiday</h5>`);
    //                     } else {
    //                         tomorrowEvents = event.name;
    //                         holiday.append("<h5>Tomorrow is " + tomorrowEvents + "'s Holiday</h5>");
    //                     }
    //                 } else if(event.type.includes('Hinduism') | event.type.includes('National holiday')) {
    //                     holiday.append(`<h5>${event.name}'s Holiday on ${event.date.iso}</h5>`);
    //                 }

    //             });

    //         },
    //         error: function(error) {
    //             console.log("Error in code");
    //         }
    //     });
    // });

    $(document).ready(function() {
        // Function to load users' data and update the content
        function reloadContent() {
            $.ajax({
                url: "{{ route('getallentry') }}", // Replace with your route URL
                method: "GET",
                success: function(response) {
                    // Process and display users' data here
                    var userList = $("#male-list");
                    var femaleList = $("#female-list");
                    userList.empty();
                    femaleList.empty();
                    // console.log(response);

                    // if (response.user.id == response.plans.user_id) {
                    //     var count = 0
                    $.each(response, function(index, user) {
                        // count++;
                        var givenDate = new Date(user.active.created_at);
                        // Get the current time
                        var currentTime = new Date();

                        // Calculate the time difference in milliseconds
                        var timeDifference = currentTime - givenDate;

                        // Convert the time difference to seconds, minutes, and hours
                        var totalSeconds = Math.floor(timeDifference / 1000);
                        var hours = Math.floor(totalSeconds / 3600);
                        var minutes = Math.floor((totalSeconds % 3600) / 60);
                        var seconds = totalSeconds % 60;

                        // Format the time components to have leading zeros if necessary
                        var formattedTime = ('0' + hours).slice(-2) + ':' +
                            ('0' + minutes).slice(-2) + ':' +
                            ('0' + seconds).slice(-2);

                        if (user.customer.gender == "male") {
                            userList.append(
                                '<div class="alert mb-0 d-flex justify-content-between mycard" role="alert"><button type="button" class="btn btn-soft-info"><strong>' +
                                user.customer.id +
                                '</strong></button><div class="align-self-center"><strong class="text-capitalize">' +
                                user.customer.name + ' ' + user.customer.surname +
                                '</strong></div><div class="align-self-center"><strong class="text-muted">' +
                                formattedTime +
                                '</strong></div><DIV class=""><button class="btn btn-soft-primary  btn-sm me-1 viewicon" id="' +
                                user.customer.id +
                                '" data-bs-toggle="modal" data-bs-target="#user-details"><svg height="15px" width="15px" version="1.1" id="_x32_"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"viewBox="0 0 512 512" xml:space="preserve"><style type="text/css">.st0 {fill: #000000;}</style><g><path class="st0"d="M322.955,321.129c-5.486-10.041-6.367-20.364-5.445-29.227c15.434-13.062,27.082-32.489,36.516-58.126c13.746-7.182,23.277-22.605,23.277-40.526c0-11.001-3.594-21.063-9.541-28.866l0.549-4.853c5.418-20.518,20.332-92.317-25.529-125.949c-23.918-29.9-56.211-34.683-92.092-31.095c-17.85,1.784-35.006,7.099-48.707,5.109c-15.711-2.284-28.789-5.585-32.621-7.502c-2.209-1.108-8.508,7.666-15.188,22.296c-13.248,29.017-21.082,78.965-12.84,124.028l2.035,17.958c-5.95,7.803-9.547,17.869-9.547,28.873c0,17.488,9.076,32.602,22.287,39.998c9.272,26.872,21.764,46.885,38.537,60.034c0.684,8.543-0.396,18.33-5.602,27.846C178.787,339.91,69.334,365.126,69.334,468.326C69.334,484.241,122.666,512,256,512c133.336,0,186.666-27.759,186.666-43.674C442.666,365.126,333.215,339.91,322.955,321.129z" /></g></svg></button><button class="btn btn-soft-secondary  btn-sm entryicon" data-id="' +
                                user.customer.id + '" id="' +
                                user.customer.id +
                                '" data-bs-toggle="modal" data-bs-target="#entry-details"><strong >End</strong></button></DIV></div>'
                            );
                        } else {
                            femaleList.append(
                                '<div class="alert mb-0 d-flex justify-content-between mycard" role="alert"><button type="button" class="btn btn-soft-info"><strong>' +
                                user.customer.id +
                                '</strong></button><div class="align-self-center"><strong class="text-capitalize">' +
                                user.customer.name + ' ' + user.customer.surname +
                                '</strong></div><div class="align-self-center"><strong class="text-muted">' +
                                formattedTime +
                                '</strong></div><DIV class=""><button class="btn btn-soft-primary  btn-sm me-1 viewicon" id="' +
                                user.customer.id +
                                '" data-bs-toggle="modal" data-bs-target="#user-details"><svg height="15px" width="15px" version="1.1" id="_x32_"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"viewBox="0 0 512 512" xml:space="preserve"><style type="text/css">.st0 {fill: #000000;}</style><g><path class="st0"d="M322.955,321.129c-5.486-10.041-6.367-20.364-5.445-29.227c15.434-13.062,27.082-32.489,36.516-58.126c13.746-7.182,23.277-22.605,23.277-40.526c0-11.001-3.594-21.063-9.541-28.866l0.549-4.853c5.418-20.518,20.332-92.317-25.529-125.949c-23.918-29.9-56.211-34.683-92.092-31.095c-17.85,1.784-35.006,7.099-48.707,5.109c-15.711-2.284-28.789-5.585-32.621-7.502c-2.209-1.108-8.508,7.666-15.188,22.296c-13.248,29.017-21.082,78.965-12.84,124.028l2.035,17.958c-5.95,7.803-9.547,17.869-9.547,28.873c0,17.488,9.076,32.602,22.287,39.998c9.272,26.872,21.764,46.885,38.537,60.034c0.684,8.543-0.396,18.33-5.602,27.846C178.787,339.91,69.334,365.126,69.334,468.326C69.334,484.241,122.666,512,256,512c133.336,0,186.666-27.759,186.666-43.674C442.666,365.126,333.215,339.91,322.955,321.129z" /></g></svg></button><button class="btn btn-soft-secondary  btn-sm entryicon" data-time="' + minutes + '" data-id="' +
                                user.customer.id + '" id="' +
                                user.customer.id +
                                '" data-bs-toggle="modal" data-bs-target="#entry-details"><strong >End</strong></button></button></DIV></div>'
                            );
                        }

                        // Add more properties as needed
                    });


                },
                error: function(error) {
                    console.error("Error fetching users", error);
                }
            });
        }

        // Call reloadContent() initially
        reloadContent();

        // Set up the interval to reload content every 5 seconds
        setInterval(reloadContent, 5000); // 5000 milliseconds = 5 seconds
    });
    $(document).ready(function() {
        function fetchData() {
            $.ajax({
                url: "{{ route('orders') }}",
                method: "get",
                success: function(response) {
                    $('.order_count').text(response);
                },
                error: function(error) {
                    console.log("Error in code");
                }
            });
            $.ajax({
                url: "{{ route('count_new_users') }}",
                method: "get",
                success: function(response) {
                    $('.user_count').text(response);
                },
                error: function(error) {
                    console.log("Error in code");
                }
            });
            $.ajax({
                url: "{{ route('count_present') }}",
                method: "get",
                success: function(response) {
                    $('.present_count').text(response);
                },
                error: function(error) {
                    console.log("Error in code");
                }
            });
        }

        // Set the interval for running fetchData function every 5 seconds (adjust as needed)
        setInterval(fetchData, 2000);
    });
</script>