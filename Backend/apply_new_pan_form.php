<?php
include_once("header.php");
?>
<div class="main-container form-page" style="background-color: #eaeaec;">
    <div class="headview">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-7 col-sm-7 col-12">
                <h1 class="view_txt m-0">Apply New PAN Card</h1>
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
        <div class="card">
            <div class="form-container my-3">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group gender-top-form">
                            <div class="gender-box">
                                <div>
                                    <input type="radio" name="gender" id="">
                                    <label for=""> श्री (Mr.)</label>
                                </div>
                                <div>
                                    <input type="radio" name="gender" id="">
                                    <label for=""> श्रीमती (Mrs.)</label>
                                </div>
                                <div>
                                    <input type="radio" name="gender" id="">
                                    <label for=""> कुमारी (Miss.)</label>
                                </div>

                                <div>
                                    <input type="radio" name="gender" id="">
                                    <label for=""> ट्रांसजेंडर (Transgender)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="">Customer Name <span>*</span></label>
                            <input type="text" class="form-control" name=""
                                placeholder="Enter Full Name as per Your Aadhar Card" id="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="">Address Type <span>*</span> </label>
                            <select name="" class="form-control" id="">
                                <option value="">Select Address Type</option>
                                <option value="">Option1</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="">Father Name <span>*</span></label>
                            <input type="text" class="form-control" name="" placeholder="Enter Full Name of Your Father"
                                id="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4">
                        <div class="form-group">
                            <label for="" style="position: absolute; ">Relationship
                                <span style="color:red;">*</span> </label>
                            <label for="" style="opacity:0;">-
                            </label>

                            <input type="text" class="form-control" name="" placeholder="S/O" id="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-8">
                        <div class="form-group">
                            <label for="" style="opacity:0;">-
                            </label>
                            <input type="text" class="form-control" name=""
                                placeholder="पिता का नाम भरें (Enter Father Name)" id="">
                        </div>
                    </div>

                    <div class="col-2 col-md-2 col-sm-4 col-4">
                        <div class="form-group">

                            <label for="" style="position: absolute; ">Aadhar Number
                                <span style="color:red;">*</span> </label>
                            <label for="" style="opacity:0;">-
                            </label>
                            <input type="text" class="form-control" name="" placeholder="XXXX" id="">
                        </div>
                    </div>
                    <div class="col-2 col-md-2 col-sm-4 col-4">
                        <div class="form-group">
                            <label for="" style="opacity:0;"> -</label>
                            <input type="text" class="form-control" name="" placeholder="XXXX" id="">
                        </div>
                    </div>
                    <div class="col-2 col-md-2 col-sm-4 col-4">
                        <div class="form-group">
                            <label for="" style="opacity:0;">- </label>
                            <input type="text" class="form-control" name="" placeholder="XXXX" id="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label for="">Village <span>*</span> </label>
                            <input type="text" class="form-control" name="" placeholder="Enter Your Village" id="">
                        </div>
                    </div>


                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label for="">Mobile Number <span>*</span> </label>
                            <input type="text" class="form-control" name="" placeholder="Enter Your Mobile Number"
                                id="">
                        </div>
                    </div>
                    <div class="col-lg-6  col-12">
                        <div class="form-group">
                            <label for="">Post Office <span>*</span> </label>
                            <input type="text" class="form-control" name="" placeholder="--" id="">
                        </div>
                    </div>

                    <div class="col-lg-1 col-sm-3">
                        <div class="form-group">
                            <label for="" style="position: absolute; ">Date of Birth
                                <span style="color:red;">*</span> </label>
                            <label for="" style="opacity:0;">-
                            </label>
                            <input type="text" class="form-control" name="" placeholder="DD" id="">
                        </div>
                    </div>
                    <div class="col-lg-1 col-sm-3">
                        <div class="form-group">
                            <label for="" style="opacity:0;">- </label>
                            <input type="text" class="form-control" name="" placeholder="MM" id="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <label for="" style="opacity:0;">-</label>
                            <input type="text" class="form-control" name="" placeholder="YYYY" id="">
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="">Tehsil <span>*</span> </label>
                            <input type="text" class="form-control" name="" placeholder="--" id="">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Gender <span>*</span> </label>
                            <select name="" class="form-control" id="">
                                <option value="">Select Gender</option>
                                <option value="">Option1</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">State <span>*</span> </label>
                            <select name="" class="form-control" id="">
                                <option value="">Select State</option>
                                <option value="">Option1</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group inside-bnt">
                            <label for="">Email ID <span>*</span> </label>
                            <input type="text" class="form-control" name="" disabled
                                placeholder="suvidhakender@gmail.com" id="">
                            <button class="edit inner-button">Edit</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="">District <span>*</span> </label>
                            <input type="text" class="form-control" name="" disabled
                                placeholder="Enter Select State First" id="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6  col-12">
                        <div class="form-group">
                            <label for="">Pincode <span>*</span> </label>
                            <input type="text" class="form-control" name="" placeholder="Enter 6-digit Area Pincode"
                                id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-md-6 ">
                        <div class="form-group">
                            <button type="button" style="width:350px;" class="btn btn-primary paynow-btn mt-3"> Pay
                                Now</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>


        <?php
        include_once("footer.php");
        ?>