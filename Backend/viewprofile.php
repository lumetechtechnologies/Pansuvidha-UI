<?php include_once("header.php"); ?>
<div class="main-container form-page">
    <div class="headview">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-7 col-sm-7 col-12">
                <h1 class="view_txt m-0">View Profile</h1>
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
            <div class="col-lg-3">
                <div class="imgprofile">
                    <img src="assets/img/imgprofile.png" alt="#">
                    <div class="editdiv">
                        <input type="file" id="imgupload" style="display:none" />
                        <label for="imgupload" style="display:block;">
                            <img class="editpro" style="cursor:pointer;" src="assets/img/proedit.png" alt="#">
                        </label>
                    </div>
                </div>
                <div class="profile-name">
                    <h4 class="text-center mt-0">Rahul Kumar</h4>
                </div>
                <div class="profile-info">
                    <p><i class="ti ti-user-filled mr-2" style='color:green;'></i> <strong>Branch Code:</strong>
                        PANSUV963267</p>
                    <p><i class="ti ti-phone-filled mr-2" style='color:green;'></i> <strong>Phone :</strong>
                        8958895832</p>
                    <p><i class="ti ti-mail mr-2" style='color:green;'></i> <strong>Email :</strong>
                        suvidhakender@gmail.com</p>
                    <p><i class="ti ti-clipboard-check mr-2" style='color:green;'></i> <strong>Status :</strong>
                        <span class="badge text-bg-info">Active</span>
                    </p>
                </div>
                <hr>
                <div class="profile-info">
                    <h4>Your Distributer Details</h4>
                    <p><i class="ti ti-user-filled mr-2" style='color:green;'></i> <strong>Name :</strong> Self
                        Registration By Retailer</p>
                    <p><i class="ti ti-phone-filled mr-2" style='color:green;'></i> <strong>Phone :</strong>
                        8958895832</p>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="form-container pb-5 side_bg"
                    style=" border-left: 2px solid #8C89898C;padding-inline: 24px 24px;">
                    <div class="row">
                        <div class="col-lg-6 col-xs-12 col-md-6 col-md-6">
                            <div class="form-group">
                                <label for>Retailer Name <span>*</span></label>
                                <input type="text" class="form-control" name placeholder="Enter Full Name " id>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-12 col-md-6 col-md-6">
                            <div class="form-group">
                                <label for>Shop Name <span>*</span></label>
                                <input type="text" class="form-control" name placeholder="Enter Shop Name" id>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-12 col-md-6 col-md-6">
                            <div class="form-group">
                                <label for="">State<span>*</span> </label>
                                <select name="" class="form-control" id="">
                                    <option value="">Select State</option>
                                    <option value="">Option1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-12 col-md-6 col-md-6">
                            <div class="form-group">
                                <label for>District <span>*</span></label>
                                <input type="text" class="form-control" name placeholder="Enter City" id>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-12 col-md-6 col-md-6">
                            <div class="form-group">
                                <label for>Home Address <span>*</span></label>
                                <textarea name="" id="" class="form-control addresstext"
                                    placeholder="Enter Home Address"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-12 col-md-6 col-md-6">
                            <div class="form-group">
                                <label for>Retailer Shop Address<span>*</span></label>
                                <textarea name="" id="" class="form-control addresstext"
                                    placeholder="Enter Retailer Shop Address"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-12 col-md-6 col-md-6">
                            <div class="form-group">
                                <label for>Profile Picture <span>*</span></label>
                                <input type="file" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-12 col-md-6 col-md-6">
                            <div class="form-group">
                                <button type="button" style="width:350px;margin-top: 42px;"
                                    class="btn btn-primary paynow-btn"> Update Profile</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <?php include_once("footer.php"); ?>