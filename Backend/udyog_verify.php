<?php
include_once("header.php");
?>
<div class="main-container form-page">
    <div class="headview">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-7 col-sm-7 col-12">
                <h1 class="view_txt m-0">Udyog Verify</h1>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-5 col-12">
                <a href="index.php" style="text-decoration: none;">
                    <div class="form-group d-flex back_tobtn">
                        <button type="button" style="width:350px;" class="btn btn-primary paynow-btn ">Back to Home <i
                                class="ti ti-arrow-back-up"></i></button>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="service-form ">
        <div class="card">
            <div class="form-container my-3">
                <div class="row">

                    <div class="col-lg-6 col-xs-12 col-md-6 ">
                        <div class="form-group">
                            <label for="">Udyog Aadhaar Number<span>*</span></label>
                            <input type="text" class="form-control" name="" placeholder="Enter Udyog Aadhaar Number"
                                id="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-md-6 ">
                        <div class="form-group">
                            <button type="button" style="width:350px;" class="btn btn-primary paynow-btn mt-3"
                                id="service_verify_btn"> Pay
                                &#8377;5/-
                                Now</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>



        <div class="modal fade serviceverifyModal" id="serviceverifyModal" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="linkaadharLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-modal linkaadhar">Udyog Verify</h2>
                                <hr>
                            </div>
                            <div class="col-lg-6">
                                <h5>Customer Name:</h5>
                            </div>
                            <div class="col-lg-6">
                                <p>NA</p>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-6">
                                <h5>Registration Number:</h5>
                            </div>
                            <div class="col-lg-6">
                                <p>UP14DJ2333</p>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-6">
                                <h5>Registration Date:</h5>
                            </div>
                            <div class="col-lg-6">
                                <p>25-09-2017</p>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-6">
                                <h5>State:</h5>
                            </div>
                            <div class="col-lg-6">
                                <p>--</p>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <h5>Udyog Aadhaar Number:</h5>
                            </div>
                            <div class="col-lg-6">
                                <p>MAT626201HKHXXXX</p>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

        <?php
        include_once("footer.php");
        ?>
        <script>
        $('#service_verify_btn').click(function($e) {
            $e.preventDefault();
            $('#serviceverifyModal').modal('show');
            $('#linkaadharModal .btn-close').trigger('click');
            // $('#WalletModal .btn-close').trigger('click');
        });
        </script>