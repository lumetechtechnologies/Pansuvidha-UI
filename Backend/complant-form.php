<?php include_once("header.php"); ?>
<div class="main-container form-page">
    <div class="headview">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-7 col-sm-7 col-12">
                <h1 class="view_txt m-0">शिकायत दर्ज करे</h1>
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

    <div class="applynewpan-form mb-5">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="form-container  changepass from_pss" style="">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3>कृपया अपनी शिकायत दर्ज करे</h3>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="">Category <span>*</span> </label>
                            <select name="" class="form-control" id="">
                                <option value="">Select Category</option>
                                <option value="">Option1</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="">Problem<span>*</span> </label>
                            <select name="" class="form-control" id="">
                                <option value="">Select Problem</option>
                                <option value="">Option1</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for>Message <span>*</span></label>
                            <textarea name="" id="" class="form-control addresstext"
                                placeholder="अपनी शिकायत लिखें"></textarea>

                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for><span>Recording भी भेजे</span> (यदि उपलब्ध हो तो) </label>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-md-6 ">
                        <div class="form-group">
                            <label for><span>Screenshot भी भेजे</span> (यदि उपलब्ध हो तो) </label>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-8 col-xs-12">
                        <div class="form-group d-flex">
                            <button type="button" style="width:350px;margin-top: 10px;"
                                class="btn btn-primary paynow-btn"> शिकायत दर्ज करे</button>
                            <button type="button" style="width:150px;margin-top: 10px;"
                                class="btn btn-primary paynow-btn cancel_btn mx-3"> रद्द करे</button>
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