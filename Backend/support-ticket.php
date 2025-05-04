<?php include_once("header.php"); ?>
<div class="main-container form-page">
    <div class="headview">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-7 col-sm-7 col-12">
                <h1 class="view_txt m-0">My Support Tickets</h1>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-5 col-12">
                <a href="index.php" style="text-decoration: none;">
                    <div class="form-group d-flex back_tobtn">
                        <button type="button" style="width:350px;" class="btn btn-primary paynow-btn ">Back to Home
                            <i class="ti ti-arrow-back-up"></i></button>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="headview vieticket_div" style="display: none;">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="view_txt m-0">View Ticket</h1>
            </div>
            <div class="col-lg-4 ">
                <a href="index.php" style="text-decoration: none;">
                    <div class="form-group d-flex justify-content-end ">
                        <button type="button" style="width:350px;" class="btn btn-primary paynow-btn">Back to Home
                            <i class="ti ti-arrow-back-up"></i></button>
                    </div>
                </a>

            </div>
        </div>

    </div>
    <div class="applynewpan-form">
        <div class="row">
            <div class="col-lg-2">
                <a href="complant-form.php" class=" combtn "> शिकायत लिखे
                    <img src="assets/img/editimg.png" alt width="52px"></a>

            </div>
            <div class="col-lg-10">
                <ul class="nav navtab1 nav-pills mb-3" id="pills-tab" role="tablist">

                    <li class="nav-item m-0" role="presentation">
                        <button class="nav-link yellow_btn" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="false">Your Pending Complaint</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link redlink" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Your Closed Complaint (7)</button>
                    </li>

                </ul>

            </div>
        </div>


    </div>
    <div class="container-fluid">
        <div class="tab-content mt-4 support_div" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab"
                tabindex="0"></div>
            <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div class="box_div">
                    <h3><b>Pending Complaint List</b></h3>
                    <table id="pendintable" class="display table" style="width:100%">
                        <thead>
                            <tr>

                                <th>
                                    <p class="m-0 text-center">शिकायत नं.</p>
                                </th>
                                <th>शिकायत दिनांक और समय</th>
                                <th>शिकायत का प्रकार</th>
                                <th>शिकायत का विषय</th>
                                <th>शिकायत विवरण</th>
                                <th>Your Screenshot</th>
                                <th>Your Audio File</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>

                                </td>
                                <td></td>
                                <td>

                                </td>
                                <td>


                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>


            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                tabindex="0">
                <div class="box_div">
                    <h3><b>Closed Complaint List</b></h3>
                    <table id="AccountActivation_table" class="display table" style="width:100%">
                        <thead>
                            <tr>

                                <th>
                                    <p class="m-0 text-center">शिकायत नं.</p>
                                </th>
                                <th>शिकायत दिनांक और समय</th>
                                <th>शिकायत का प्रकार</th>
                                <th>शिकायत का विषय</th>
                                <th>शिकायत विवरण</th>
                                <th>Your Screenshot</th>
                                <th>Your Audio File</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="text-center m-0">
                                        <p class="m-0 tab_p">CMP3395</p><button class="tabbtn clickbtn">पैन सुविधा
                                            की
                                            तरफ से
                                            क्या जवाब आया है <span>देखने के लिए</span> यहां क्लिक करें</button>
                                    </div>
                                </td>
                                <td>10-Jul-2024 02:20 PM</td>
                                <td>
                                    Others
                                </td>
                                <td>

                                    Others
                                </td>
                                <td>recharge nhi kr pa rhe hain</td>
                                <td>NA</td>
                                <td>NA</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <div class="vieticket_div" style="display: none;">
            <div class="complaint-container">
                <div class="complaint-header">
                    complaint - <span class="complaint-id">#CMP3395</span>
                </div>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>शिकायत नं.</td>
                                <td>CMP3395</td>
                                <td>शिकायत दिनांक और समय</td>
                                <td>10-Jul-2024 02:20 PM</td>
                                <td>वर्तमान स्थिति</td>
                                <td><span class="status-closed">Closed</span></td>
                            </tr>
                            <tr>
                                <td>शिकायत का प्रकार</td>
                                <td>Others</td>
                                <td>शिकायत का विषय</td>
                                <td>Others</td>
                            </tr>
                            <tr>
                                <td>शिकायत विवरण</td>
                                <td colspan="5">recharge nhi kr pa rhe hain</td>
                            </tr>
                            <tr>
                                <td>Your Screenshot</td>
                                <td>NA</td>
                                <td>Your Audio File</td>
                                <td>NA</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="complaint-container p-0">
                <div class="sup_box">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-xs-12 col-md-6 text-left">
                            <h5 class="callsup m-0"> <img class="mx-3" src="assets/img/callsupport.png" alt="">
                                Support
                                Team</h5>
                        </div>
                        <div class="col-lg-6 col-xs-12 col-md-6 text-right mob">
                            <h6 class="text-white m-0"><i class="ti ti-clock"></i> 10-Jul-2024 02:20 PM</h6>
                        </div>
                    </div>
                </div>
                <div class="text_p">
                    <p>यदि आपको payment getaway के माध्यम से Wallet Recharge करने में यदि कोई असुविधा हो रही है</p>
                    <p>हमने आपको QR भेजा है उसमें Balance Transfer कर सकते हैं</p>
                    <p>Balance Transfer करने के बाद हमें 8958-8958-61 पर Screenshot WhatsApp कर देना।</p>
                    <p>और PAN SUVIDHA का रजिस्टर्ड Mobile Number भी लिख देना।</p>
                    <p>2 Minute के अंदर आपके Commission wallet में Balance आ जाएगा।</p>
                    <img src="assets/img/supimg.png" alt="" width="80px">
                </div>

            </div>
        </div>


    </div>

    </section>

    <?php
include_once("footer.php");
?>
    <script>
    $(".clickbtn").click(function() {
        $(".support_div").hide();
        $(".vieticket_div").show();
    });
    $(".btnaddbalancceback").click(function() {
        $(".hidebalancetable").show();
        $(".AddBlance").hide();
    });
    $('#AccountActivation_table').DataTable({
        "bInfo": true,
        "bPaginate": true,
        "ordering": true,


        language: {
            search: '',
            lengthMenu: "_MENU_  Show Entries",
            searchPlaceholder: "Search",
            paginate: {

                "next": '<i class="ti ti-chevron-right " aria-hidden="true"></i>  ',
                "previous": '<i class="ti ti-chevron-left" aria-hidden="true"></i>'
            },
        },

        dom: '<"row"<"col-lg-4 col-sm-6"l><"col-lg-8 col-xs-12  dflex"Bf>><"row"<"col-md-12 table-responsive"t>><"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7" p>>',
        buttons: [{
                extend: 'csvHtml5',
                text: '<img src="assets/img/csv.png" alt="">',
                titleAttr: 'CSV'
            },
            {
                extend: 'pdfHtml5',
                text: '<img src="assets/img/pdf.png" alt="">',
                titleAttr: 'PDF'
            },
            {
                extend: 'excelHtml5',
                text: '<img src="assets/img/excel.png" alt="">',
                titleAttr: 'Excel'
            },


        ]
    });
    $('#pendintable').DataTable({
        "bInfo": true,
        "bPaginate": true,
        "ordering": true,


        language: {
            search: '',
            lengthMenu: "_MENU_  Show Entries",
            searchPlaceholder: "Search",
            paginate: {

                "next": '<i class="ti ti-chevron-right " aria-hidden="true"></i>  ',
                "previous": '<i class="ti ti-chevron-left" aria-hidden="true"></i>'
            },
        },

        dom: '<"row"<"col-lg-4 col-sm-6"l><"col-lg-8 col-xs-12 dflex"Bf>><"row"<"col-md-12 table-responsive"t>><"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7" p>>',
        buttons: [{
                extend: 'csvHtml5',
                text: '<img src="assets/img/csv.png" alt="">',
                titleAttr: 'CSV'
            },
            {
                extend: 'pdfHtml5',
                text: '<img src="assets/img/pdf.png" alt="">',
                titleAttr: 'PDF'
            },
            {
                extend: 'excelHtml5',
                text: '<img src="assets/img/excel.png" alt="">',
                titleAttr: 'Excel'
            },


        ]
    });
    </script>