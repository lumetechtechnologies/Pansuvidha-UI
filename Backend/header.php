<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAN Suvidha</title>
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tabler-icons/3.22.0/tabler-icons.min.css">
    <!-- DataTables and Other Plugin Styles -->
    <link rel="stylesheet" href="assets/css/datatable-bootstrap.css" />
    <link rel="stylesheet" href="assets/css/responsive-datatable-bootstrap.css" />
    <link rel="stylesheet" href="assets/css/scroller-datatable-bootstrap.css" />
    <link rel="stylesheet" href="assets/css/datatable.css" />
    <link rel="stylesheet" href="assets/css/buttons.dataTables.css">
    <link rel="stylesheet" href="assets/css/responsive.bootstrap4.min.css">
</head>

<body>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.72.0">
        <title>Dashboard Template · Bootstrap</title>

        <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/dashboard/">



        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
            integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
            integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
        </script>
    </head>

    <body>

        <div class="top-bar">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light mx-2">
                    <div class="container-fluid mx-2">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/img/logo.png" alt="pan suvidha logo" width="30%">
                        </a>
                        <div class="nav-overlay"></div>

                        <div class="right-top-wrapper  d-flex">
                            <div class="collapse navbar-collapse active" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="index.php"><img
                                                src="assets/img/home.svg" alt="Home">Home</a>
                                    </li>
                                    <li class="nav-item" data-bs-toggle="modal" data-bs-target="#linkaadharModal">
                                        <img src="assets/img/link.svg" alt="Link Aadhar to
                                        PAN">
                                        <a class="nav-link " aria-current="page" href="javascript:void(0)">Link
                                            Aadhar to
                                            PAN</a>
                                    </li>
                                    <li class="nav-item">
                                        <img src="assets/img/tracking link.svg" alt="Track PAN
                                        Status">
                                        <a class="nav-link " aria-current="page" href="index.php">Track PAN
                                            Status</a>
                                    </li>
                                    <li class="nav-item">
                                        <img src="assets/img/post office track.svg" alt="India Post
                                        Tracking">
                                        <a class="nav-link " aria-current="page" href="index.php">India Post
                                            Tracking</a>
                                    </li>
                                    <li class="nav-item" id="wallet-modal">
                                        <img src="assets/img/wallet.svg" alt="Home">
                                        <a href="" class="nav-link">Balance: &#8377;1234.00</a>
                                    </li>
                                </ul>

                            </div>
                            <div class="profile" id="profile-modal">
                                <div class="profile-img"> <img src="assets/img/profile.svg" alt="" srcset="">
                                </div>
                                <span>Profile</span>
                            </div>
                            <div class="mobile-login">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>

            <div class="top-service">
                <div class="row service_top_row">
                    <div class="col-lg-3 col-md- col-sm-6 col-12 service_wrapper">
                        <div class="card top-service-card applypanbtn" id="service1">
                            <h5>Apply New PAN Card</h5>
                            <img src="assets/img/top-service-icon1.svg" alt="">
                        </div>
                        <div class="apply-new-pan" id="service_custom_modal1" style="display:none;">
                            <div class="card">
                                <table class="table border">

                                    <tr>
                                        <th><a href="apply_new_pan_form.php" class="btn btn-primary btn-apply">Apply
                                            </a>
                                        </th>
                                        <th>
                                            <button class="btn btn-primary refresh-btn" id="refresh-btn1"> <img
                                                    class="refresh-img" src="assets/img/tabler_refresh.png" alt=""
                                                    srcset="">
                                            </button>
                                            <div>Refresh</div>
                                        </th>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a href="pending-slip.php">
                                                <div class="apply_items">
                                                    <img src="assets/img/pending-slip.svg" alt="" srcset="">
                                                    <span>Pending Slip</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td id="pending_slip1">(32)</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="reject-slip.php">
                                                <div class="apply_items">
                                                    <img src="assets/img/reject-slip.svg" alt="" srcset="">
                                                    <span>Reject Slip</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td id="reject_slip1">(40)</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="upload-document.php">
                                                <div class="apply_items">
                                                    <img src="assets/img/upload-document.svg" alt="" srcset="">
                                                    <span>Upload Document</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td id="upload_document1">(21)</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="under-pan-slip.php">
                                                <div class="apply_items">
                                                    <img src="assets/img/under-process-pan.svg" alt="" srcset="">
                                                    <span>Under Process PAN</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td id="under_process_pan1">(35)</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="objective-document.php">
                                                <div class="apply_items">
                                                    <img src="assets/img/objection-document.svg" alt="" srcset="">
                                                    <span>Objection Document</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td id="object_document1">(90)</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="approved-pan.php">
                                                <div class="apply_items">
                                                    <img src="assets/img/Approved-pan.svg" alt="" srcset="">
                                                    <span> Approved PAN</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td id="approved_pan1">(32)</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md- col-sm-6 col-12 service_wrapper">
                        <div class="card top-service-card applypanbtn" id="service2">
                            <h5>Apply Correction / Reprint PAN Card</h5>
                            <img src="assets/img/top-service-icon2.svg" alt="">
                        </div>
                        <div class="apply-new-pan" id="service_custom_modal2" style="display:none;">
                            <div class="card">
                                <table class="table border">

                                    <tr>
                                        <th><a href="apply_correction_reprint_form.php"
                                                class="btn btn-primary btn-apply">Apply
                                            </a>
                                        </th>
                                        <th>
                                            <button class="btn btn-primary refresh-btn" id="refresh-btn2"> <img
                                                    class="refresh-img" src="assets/img/tabler_refresh.png" alt=""
                                                    srcset="">
                                            </button>
                                            <div>Refresh</div>
                                        </th>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a href="pending-slip.php">
                                                <div class="apply_items">
                                                    <img src="assets/img/pending-slip.svg" alt="" srcset="">
                                                    <span>Pending Slip</span>
                                                </div>
                                            </a>

                                        </td>
                                        <td id="pending_slip2">(32)</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="reject-slip.php">
                                                <div class="apply_items">
                                                    <img src="assets/img/reject-slip.svg" alt="" srcset="">
                                                    <span>Reject Slip</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td id="reject_slip2">(40)</td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <a href="upload-document.php">
                                                <div class="apply_items">
                                                    <img src="assets/img/upload-document.svg" alt="" srcset="">
                                                    <span>Upload Document</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td id="upload_document2">(21)</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="under-pan-slip.php">
                                                <div class="apply_items">
                                                    <img src="assets/img/under-process-pan.svg" alt="" srcset="">
                                                    <span>Under Process PAN</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td id="under_process_pan2">(35)</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="objective-document.php">
                                                <div class="apply_items">
                                                    <img src="assets/img/objection-document.svg" alt="" srcset="">
                                                    <span>Objection Document</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td id="object_document2">(90)</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="approved-pan.php">
                                                <div class="apply_items">
                                                    <img src="assets/img/Approved-pan.svg" alt="" srcset="">
                                                    <span> Approved PAN</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td id="approved_pan2">(32)</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md- col-sm-6 col-12 service_wrapper">
                        <div class="card top-service-card applypanbtn" id="service3">
                            <h5>EKYC PAN Card</h5>
                            <img src="assets/img/top-service-icon3.svg" alt="">
                        </div>
                        <div class="apply-new-pan" id="service_custom_modal3" style="display:none;">
                            <div class="card">
                                <table class="table border">

                                    <tr>
                                        <th><a href="apply_ekyc_pan_form.php" class="btn btn-primary btn-apply">Apply
                                            </a>
                                        </th>
                                        <th>
                                            <button class="btn btn-primary refresh-btn" id="refresh-btn3"> <img
                                                    class="refresh-img" src="assets/img/tabler_refresh.png" alt=""
                                                    srcset="">
                                            </button>
                                            <div>Refresh</div>
                                        </th>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a href="pending-slip.php">
                                                <div class="apply_items">
                                                    <img src="assets/img/pending-slip.svg" alt="" srcset="">
                                                    <span>Pending Slip</span>
                                                </div>
                                            </a>

                                        </td>
                                        <td id="pending_slip3">(32)</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="reject-slip.php">
                                                <div class="apply_items">
                                                    <img src="assets/img/reject-slip.svg" alt="" srcset="">
                                                    <span>Reject Slip</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td id="reject_slip3">(40)</td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <a href="upload-document.php">
                                                <div class="apply_items">
                                                    <img src="assets/img/upload-document.svg" alt="" srcset="">
                                                    <span>Upload Document</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td id="upload_document3">(21)</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="under-pan-slip.php">
                                                <div class="apply_items">
                                                    <img src="assets/img/under-process-pan.svg" alt="" srcset="">
                                                    <span>Under Process PAN</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td id="under_process_pan3">(35)</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="objective-document.php">
                                                <div class="apply_items">
                                                    <img src="assets/img/objection-document.svg" alt="" srcset="">
                                                    <span>Objection Document</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td id="object_document3">(90)</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="approved-pan.php">
                                                <div class="apply_items">
                                                    <img src="assets/img/Approved-pan.svg" alt="" srcset="">
                                                    <span> Approved PAN</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td id="approved_pan3">(32)</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md- col-sm-6 col-12 service_wrapper">
                        <div class="card top-service-card applypanbtn" id="service4">
                            <h5>PAN Training and Support</h5>
                            <img src="assets/img/top-service-icon4.svg" alt="">
                        </div>
                        <div class="apply-new-pan pan-training" id="service_custom_modal4" style="display:none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-pan-training" style="background:#d0d4c6;">
                                        <img src="assets/img/video.svg" alt="">
                                        <h5>Training Video</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-pan-training" style="background:#d0d4c6;">
                                        <img src="assets/img/software-engineer.svg" alt="">
                                        <h5>Software & Tools</h5>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card-pan-training" style="background:#ffc683;">
                                        <img src="assets/img/fast-delivery.svg" alt="">
                                        <h5>PAN Hardcopy Dispatch Address</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-pan-training" style="background:#ffc683;">
                                        <img src="assets/img/Photo Rules.svg" alt="">
                                        <h5>Photo Guidelines for PAN Application</h5>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card-pan-training">
                                        <img src="assets/img/minor.svg" alt="">
                                        <h5>Minor PAN Application Sample <br> नाबालिग पैन आवेदन सैंपल</h5>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card-pan-training">
                                        <img src="assets/img/girl.svg" alt="">
                                        <h5>Girl PAN Application Sample <br> लड़की पैन आवेदन सेंपल</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-pan-training">
                                        <img src="assets/img/inlitrate.svg" alt="">
                                        <h5>Illiterate PAN Application Sample <br> अनपढ़ पेन आवेदन सेंपल</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-pan-training">
                                        <img src="assets/img/id-card.svg" alt="">
                                        <h5>Correction/Reprint PAN Application Sample <br> सुधार/रिप्रिंट पैन आवेदन
                                            सेंपल
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-pan-training">
                                        <img src="assets/img/woman.svg" alt="">
                                        <h5>Women PAN Application Sample <br> महिला पैन आवेदन सैंपल</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-pan-training">
                                        <img src="assets/img/man.svg" alt="">
                                        <h5>Men PAN Application Sample <br> पुरुष पेन आवेदन सेंपल</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>







            </div>
            <div class="marqee">
                <div class="marquee-content d-flex">
                    <marquee class="marq" bgcolor="white" direction="left" loop="" scrollamount="5">
                        पैन सुविधा पर पैन कार्ड बनाना बहुत आसान है। यदि आपको पैन अप्लाई करने में कोई समस्या आए,
                        तो तुरंत हमें
                        <span>8958 8958 61</span> पर व्हाट्सएप करें या कॉल करें।
                    </marquee>
                </div>
            </div>
            <div class="modal fade" id="WalletModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="WalletLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h1 class="modal-title fs-5" id="forgetModalLabel">Main Wallet Balance: &#8377;440 </h1> -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="title-modal">Main Wallet Balance: &#8377;440 </h2>
                                </div>
                                <div class="col-lg-12">
                                    <a href="wallet-recharge.php">
                                        <div class="wallet-minicard">
                                            <img src="assets/img/wallet_recharge.png" alt="">
                                            <h5>Recharge Wallet</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-12">
                                    <a href="recharge-history.php">
                                        <div class="wallet-minicard">
                                            <img src="assets/img/recharge_report.png" alt="">
                                            <h5>Recharge Report</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-12">
                                    <a href="wallet-transaction.php">
                                        <div class="wallet-minicard">
                                            <img src="assets/img/wallet_use_report.png" alt="">
                                            <h5>Wallet use Report</h5>
                                        </div>
                                    </a>
                                </div>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">

                                    <h2 class="title-modal commission-title">Commission Wallet Balance:
                                        &#8377;440
                                    </h2>
                                </div>
                                <div class="col-lg-12">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                        <div class="wallet-minicard">
                                            <img src="assets/img/wallet_recharge.png" alt="">
                                            <h5>Move Commission in Main wellet</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-12">
                                    <a href="debit.php">
                                        <div class="wallet-minicard">
                                            <img src="assets/img/wallet_recharge.png" alt="">
                                            <h5>Commission Credit/Debit History</h5>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="linkaadharModal" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="linkaadharLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h1 class="modal-title fs-5" id="forgetModalLabel">Main Wallet Balance: &#8377;440 </h1> -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="title-modal linkaadhar">Link PAN Card</h2>
                                    <hr>
                                </div>
                                <div class="col-lg-8">
                                    <div class="linkaadhar-card">
                                        <div class="linkaadhar-content ">
                                            <p>पैन कार्ड आधार कार्ड से लिंक है या नहीं पता करने के लिए सामने दिए
                                                गए
                                                बटन पर
                                                क्लिक करें</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="linkaadhar-btn">
                                        <a href="#" class="btn btn-primary">
                                            click Here!
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-8">
                                    <div class="linkaadhar-card">
                                        <div class="linkaadhar-content dark">
                                            <p>पैन कार्ड को आधार कार्ड से लिंक करने के लिए सामने दिए गए
                                                बटन पर क्लिक करें</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="linkaadhar-btn">
                                        <a href="#" class="btn btn-primary" id="apply-to-aadhar">
                                            click Here!
                                        </a>
                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade linktoaadharModal" id="linktoaadharModal" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="linkaadharLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="title-modal linkaadhar">Link PAN Card</h2>
                                    <hr>
                                </div>
                                <div class="col-lg-8">
                                    <div class="linkaadhar-card">
                                        <div class="linkaadhar-content light">
                                            <p>जिस ग्राहक का पैन कार्ड ड्राइवर लाइसेंस या पहचान पत्र से बना था
                                                उनको
                                                अपना पैन
                                                कार्ड 31 मार्च 2022 तक आधार कार्ड से लिंक करना जरूरी था फिलहाल
                                                पैन
                                                कार्ड को
                                                आधार कार्ड से लिंक करने के लिए दंड के रुप में 1000 रू. का चालान
                                                जमा
                                                करना
                                                होगा 1000 रू. का चालान जमा करने के लिए नीचे दिए गए बटन पर क्लिक
                                                करें।</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="linkaadhar-btn">
                                        <a href="#" class="btn btn-primary btn-yellow">
                                            click Here!
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-8">
                                    <div class="linkaadhar-card">
                                        <div class="linkaadhar-content light">
                                            <p>चालान कैसे जमा करें ट्रेनिंग वीडियो देखने के लिए नीचे दिए गए बटन
                                                पर
                                                क्लिक
                                                करें</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="linkaadhar-btn">
                                        <a href="#" class="btn btn-primary dark-btn">
                                            click Here!
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade profilemodal" id="profilemodal" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="profileLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h1 class="modal-title fs-5" id="forgetModalLabel">Main Wallet Balance: &#8377;440 </h1> -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row mt-2">

                                <div class="col-lg-6 px-2">
                                    <a href="viewprofile.php">
                                        <div class="profile-modal-card">
                                            <img src="assets/img/profile_icon.svg" alt="">
                                            <h5>View Profile</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 px-2">
                                    <a href="change-password.php">
                                        <div class="profile-modal-card">
                                            <img src="assets/img/change_password.svg" alt="">
                                            <h5>Change Password</h5>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-6 px-2">
                                    <a href="#">
                                        <div class="profile-modal-card">
                                            <img src="assets/img/wallet_use_report.png" alt="">
                                            <div class="walcome-profile">
                                                <h5>Welcome Sound</h5>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 px-2">
                                    <a href="#">
                                        <div class="profile-modal-card">
                                            <img src="assets/img/logout_profile.svg" alt="">
                                            <h5>Logout</h5>
                                        </div>
                                    </a>
                                </div>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="title-modal download-profile-title">Download Certificate & Banner
                                    </h2>
                                </div>
                                <div class="col-lg-6 px-1">
                                    <a href="#">
                                        <div class="download-profile-modal-card">
                                            <img src="assets/img/certificate.svg" alt="">
                                            <h5>Certificate (in Hindi)</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 px-1">
                                    <a href="#">
                                        <div class="download-profile-modal-card">
                                            <img src="assets/img/certificate.svg" alt="">
                                            <h5>Certificate (in English)</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 px-1">
                                    <a href="#">
                                        <div class="download-profile-modal-card">
                                            <img src="assets/img/banner.svg" alt="">
                                            <h5>Banner (in Hindi)</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 px-1">
                                    <a href="#">
                                        <div class="download-profile-modal-card">
                                            <img src="assets/img/banner.svg" alt="">
                                            <h5>Banner (in English)</h5>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade walletmodal" id="exampleModalToggle" aria-hidden="true"
                aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-1" id="exampleModalToggleLabel"><i
                                    class="ti ti-alert-circle-filled"></i></h1>
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body text-center">
                            <h4>Confirm</h4>
                            <p>Are you sure you want to Redeem Commission Wallet to Main Wallet?</p>
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-xs-12">
                                    <div class="form-group d-flex">
                                        <button type="button" style="width:350px;margin-top: 10px;"
                                            class="btn btn-primary paynow-btn" data-bs-target="#exampleModalToggle2"
                                            data-bs-toggle="modal">
                                            Continue</button>
                                        <button type="button" style="width:150px;margin-top: 10px; "
                                            class="btn btn-primary paynow-btn nobtn  mx-3"
                                            data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">No</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal fade walletsec" id="exampleModalToggle2" aria-hidden="true"
                aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h1 class="modal-title fs-5" id="exampleModalToggleLabel2"><img src="assets/img/Success.png"
                                    alt=""></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <h4 style="color: #34C759;">Successful</h4>
                            <p class="mb-5">Funds successfully moved from commission to main wallet.</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal fade walletsec" id="exampleModalToggle3" aria-hidden="true"
                aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h1 class="modal-title fs-5" id="exampleModalToggleLabel3"><i class="ti ti-circle-x-filled"
                                    style="color: red;font-size: 45px;"></i></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <h4 style="color: #E12C2C;">Failed</h4>
                            <p class="">No Balance in commission Wallet.</p>
                            <button type="button" style="width: 250px;margin-top: 10px;"
                                class="btn btn-primary paynow-btn">
                                Ok, Got It!</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade banner_modal" id="bannerModalToggle4" aria-hidden="true"
                aria-labelledby="bannerModalToggleLabel4" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body mt-4">
                            <img src="assets/img/modalbanner.jpg" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>