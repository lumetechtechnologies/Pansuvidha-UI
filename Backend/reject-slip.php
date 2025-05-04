<?php include_once("header.php"); ?>
<div class="main-container form-page">
    <div class="headview">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-7 col-sm-7 col-12">
                <h1 class="view_txt m-0">Reject Slip</h1>
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
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="">From <span>*</span></label>
                                <input type="date" class="form-control" name="" placeholder="Enter Old Password " id="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="">To <span>*</span></label>
                                <input type="date" class="form-control" name="" placeholder="Enter New Password" id="">
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
        </div>

        <div class="container-fluid p-0">
            <div class="box_div">

                <table id="" class="display table pendintable" style="width:100%">
                    <thead>
                        <tr>


                            <th>S. No.</th>
                            <th>Apply Date & Time</th>
                            <th>Token Number</th>
                            <th>Customer Name</th>
                            <th>Reject reson</th>


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
    $('.pendintable').DataTable({
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