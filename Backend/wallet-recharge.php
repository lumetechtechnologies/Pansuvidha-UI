<?php include_once("header.php"); ?>
<div class="main-container form-page">
    <div class="headview">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-7 col-sm-7 col-12">
                <h1 class="view_txt m-0">Wallet Recharge</h1>
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
    <div class="applynewpan-form">
        <div class="row">

            <div class="col-lg-12">
                <div class="form-container pb-5 changepass">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for>Amount (₹)<span>*</span></label>
                                        <input type="text" class="form-control" name
                                            placeholder="Enter Amount 250 to 5000" id>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <button type="button" style="width:100%;margin-top: 15px;"
                                            class="btn btn-primary paynow-btn">Submit</button>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="complaint-container p-0">
                                <div class="sup_box" style="background-color: #2066B64F ; ">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12 col-xs-12">
                                            <h3 class="callsup m-0" style="color: #414149;"> Payment Gateway Charges
                                            </h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="text_p">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Net Banking :</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p class="txt_p">1.55% OF RECHARGE AMOUNT</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>UPI Charges:</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p class="text-info"><b>Free</b></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Debit Card (Rupay):</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p class="text-info"><b>Free</b></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Debit Card (Other):</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p class="txt_p">0.90% OF RECHARGE AMOUNT</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Credit Card:</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p class="txt_p">1.95% OF RECHARGE AMOUNT</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>

    </div>

    </section>

    <?php
include_once("footer.php");
?>