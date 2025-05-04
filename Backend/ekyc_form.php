<?php
include_once("header.php");
?>
<div class="main-container" style="background-color: #eaeaec;">
    <div class="applynewpan-form">
        <div class="card">
            <div>
                <h1>Apply New PAN Card</h1>
                <hr>
            </div>
            <div class="form-container">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group gender-top-form">
                            <input type="radio" name="gender" id="">
                            <label for=""> श्री (Mr.)</label>

                            <input type="radio" name="gender" id="">
                            <label for=""> श्रीमती (Mrs.)</label>

                            <input type="radio" name="gender" id="">
                            <label for=""> कुमारी (Miss.)</label>

                            <input type="radio" name="gender" id="">
                            <label for=""> ट्रांसजेंडर (Transgender)</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-md-6 ">
                        <div class="form-group">
                            <label for="">Customer Name <span>*</span></label>
                            <input type="text" class="form-control" name=""
                                placeholder="Enter Full Name as per Your Aadhar Card" id="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-md-6 ">
                        <div class="form-group">
                            <label for="">Address Type<span>*</span> </label>
                            <select name="" class="form-control" id="">
                                <option value="">Select Address Type</option>
                                <option value="">Option1</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-md-6 ">
                        <div class="form-group">
                            <label for="">Father Name <span>*</span></label>
                            <input type="text" class="form-control" name="" placeholder="Enter Full Name of Your Father"
                                id="">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="">Relationship <span>*</span> </label>
                            <input type="text" class="form-control" name="" placeholder="S/O" id="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for=""> </label>
                            <input type="text" class="form-control" name=""
                                placeholder="पिता का नाम भरें (Enter Father Name)" id="">
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="form-group">
                            <label for="">Aadhar Number <span>*</span> </label>
                            <input type="text" class="form-control" name="" placeholder="XXXX" id="">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="" style="opacity:0;"> -</label>
                            <input type="text" class="form-control" name="" placeholder="XXXX" id="">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="" style="opacity:0;">- </label>
                            <input type="text" class="form-control" name="" placeholder="XXXX" id="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-md-6 ">
                        <div class="form-group">
                            <label for="">Village <span>*</span> </label>
                            <input type="text" class="form-control" name="" placeholder="Enter Your Village" id="">
                        </div>
                    </div>


                    <div class="col-lg-6 col-xs-12 col-md-6 ">
                        <div class="form-group">
                            <label for="">Mobile Number <span>*</span> </label>
                            <input type="text" class="form-control" name="" placeholder="Enter Your Mobile Number"
                                id="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-md-6 ">
                        <div class="form-group">
                            <label for="">Post Office <span>*</span> </label>
                            <input type="text" class="form-control" name="" placeholder="--" id="">
                        </div>
                    </div>

                    <div class="col-1">
                        <div class="form-group">
                            <label for="" style="position: absolute; ">Date of Birth
                                <span style="color:red;">*</span> </label>
                            <label for="" style="opacity:0;">-
                            </label>
                            <input type="text" class="form-control" name="" placeholder="DD" id="">
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="form-group">
                            <label for="" style="opacity:0;">- </label>
                            <input type="text" class="form-control" name="" placeholder="MM" id="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="" style="opacity:0;">-</label>
                            <input type="text" class="form-control" name="" placeholder="YYYY" id="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-md-6 ">
                        <div class="form-group">
                            <label for="">Tehsil <span>*</span> </label>
                            <input type="text" class="form-control" name="" placeholder="--" id="">
                        </div>
                    </div>

                    <div class="col-lg-6 col-xs-12 col-md-6 ">
                        <div class="form-group">
                            <label for="">Gender <span>*</span> </label>
                            <select name="" class="form-control" id="">
                                <option value="">Select Gender</option>
                                <option value="">Option1</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-md-6 ">
                        <div class="form-group">
                            <label for="">State <span>*</span> </label>
                            <select name="" class="form-control" id="">
                                <option value="">Select State</option>
                                <option value="">Option1</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xs-12 col-md-6 ">
                        <div class="form-group inside-bnt">
                            <label for="">Email ID <span>*</span> </label>
                            <input type="text" class="form-control" name="" disabled
                                placeholder="suvidhakender@gmail.com" id="">
                            <button class="edit inner-button">Edit</button>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="">District <span>*</span> </label>
                            <input type="text" class="form-control" name="" disabled
                                placeholder="Enter Select State First" id="">
                        </div>
                    </div>
                    <div class="col-3">
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
                            <button type="button" style="width:350px;" class="btn btn-primary paynow-btn"> Pay
                                Now</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>


        <?php
        include_once("footer.php");
        ?>