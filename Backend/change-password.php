<?php include_once("header.php"); ?>
<div class="main-container form-page">
    <div class="headview">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-7 col-sm-7 col-12">
                <h1 class="view_txt m-0">Change Password</h1>
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
    <div class="applynewpan-form">
        <div class="row">

            <div class="col-lg-12">
                <div class="form-container pb-5 changepass">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for>Old Password <span>*</span></label>
                                <input type="text" class="form-control" name placeholder="Enter Old Password " id>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for>New Password <span>*</span></label>
                                <input type="text" class="form-control" name placeholder="Enter New Password" id>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                <label for>Confirmed New Password <span>*</span></label>
                                <input type="text" class="form-control" name placeholder="Enter Confirmed New Password"
                                    id>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                <button type="button" style="width:100%;margin-top: 15px;"
                                    class="btn btn-primary paynow-btn"> Update Password</button>
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