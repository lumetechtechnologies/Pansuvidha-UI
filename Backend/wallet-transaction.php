<?php include_once("header.php"); ?>
<div class="main-container form-page">
    <div class="headview">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-7 col-sm-7 col-12">
                <h1 class="view_txt m-0">Wallet Transactions</h1>
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
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for>From <span>*</span></label>
                                <input type="date" class="form-control" name placeholder="Enter Old Password " id>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for>To <span>*</span></label>
                                <input type="date" class="form-control" name placeholder="Enter New Password" id>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for>Transaction ID <span>*</span></label>
                                <input type="text" class="form-control" name placeholder="Enter Transaction ID" id>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12 col-md-3">
                            <div class="form-group">
                                <label for="">Type<span>*</span> </label>
                                <select name="" class="form-control" id="">
                                    <option value="">Select Type</option>
                                    <option value="">Option1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <button type="button" style="width:100%;margin-top: 32px;"
                                    class="btn btn-info search_btn">Search</button>
                            </div>

                        </div>
                    </div>
                </div>



            </div>
            <div class="col-lg-5">
                <div class="history_div">
                    <p>3 महीने से पुरानी ट्रांजैक्शन देखने के लिए यहां क्लिक करने करें</p>
                    <p>Click here to view transactions older than 3 months</p>
                </div>
            </div>
            <div class="col-lg-12 mt-5">
                <table id="AccountActivation_table" class="display table" style="width:100%">
                    <thead>
                        <tr>

                            <th>
                                S. No.
                            </th>
                            <th>Transaction ID</th>
                            <th>Amount(₹)</th>
                            <th>Type</th>
                            <th>Old Bal.</th>
                            <th>New Bal.</th>
                            <th>Description</th>

                            <th>Date</th>
                            <th>Action</th>



                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                01
                            </td>
                            <td>PANSUVFIN98025819</td>
                            <td>20.00</td>
                            <td>DEBIT</td>
                            <td>
                                275.00
                            </td>
                            <td>255.00
                            </td>
                            <td>PAN Card Find Request Applied</td>
                            <td> 14-01- 2025 | 12:56 PM</td>
                            <td>
                                <p class="succes_btn m-0">Success</p>
                            </td>


                        </tr>
                        <tr>
                            <td>
                                01
                            </td>
                            <td>PANSUVFIN98025819</td>
                            <td>20.00</td>
                            <td>DEBIT</td>
                            <td>
                                275.00
                            </td>
                            <td>255.00
                            </td>
                            <td>PAN Card Find Request Applied</td>
                            <td> 14-01- 2025 | 12:56 PM</td>
                            <td>
                                <p class="succes_btn m-0 failedbtn">Failed</p>
                            </td>


                        </tr>
                        <tr>
                            <td>
                                01
                            </td>
                            <td>PANSUVFIN98025819</td>
                            <td>20.00</td>
                            <td>DEBIT</td>
                            <td>
                                275.00
                            </td>
                            <td>255.00
                            </td>
                            <td>PAN Card Find Request Applied</td>
                            <td> 14-01- 2025 | 12:56 PM</td>
                            <td>
                                <p class="succes_btn m-0 pendingbtn">Pending</p>
                            </td>


                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>

    </section>

    <?php
include_once("footer.php");
?>
    <script>
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
    </script>