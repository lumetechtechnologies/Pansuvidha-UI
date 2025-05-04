<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/fontawesome.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- <script src="assets/bootstrap/js/snippets.js"></script> -->
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
<script src="assets/bootstrap/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/dataTables.responsive.min.js"></script>
<script src="assets/js/dataTables.scroller.min.js"></script>
<script src="assets/js/pdfmake.min.js"></script>
<script src="assets/js/vfs_fonts.js"></script>
<script src="assets/js/datatables.min.js"></script>


<!-- Optional: External Bootstrap Switch Plugin (CDN) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.min.js"></script>

<script>
    $(document).ready(function() {
        const button = document.querySelector(".navbar-toggler");
        const navOverlay = document.querySelector(".nav-overlay");
        const navbarCollapse = document.querySelector(".navbar-collapse");
        button.addEventListener("click", function() {
            navOverlay.classList.toggle("active");
        });

        navOverlay.addEventListener("click", function(event) {
            if (event.target === navOverlay) {
                navOverlay.classList.remove("active");
                navbarCollapse.classList.remove("show");
            }
        });

        $('#apply-to-aadhar').click(function($e) {
            $e.preventDefault();
            $('#linktoaadharModal').modal('show');
            $('#linkaadharModal .btn-close').trigger('click');
            $('#WalletModal .btn-close').trigger('click');
        });

        $('#profile-modal').click(function($e) {
            $e.preventDefault();
            $('#profilemodal').modal('show');
            $('#linktoaadharModal .btn-close').trigger('click');
            $('#linkaadharModal .btn-close').trigger('click');
            $('#WalletModal .btn-close').trigger('click');
        });

        $('#wallet-modal').click(function($e) {
            $e.preventDefault();
            $('#WalletModal').modal('show');
            $('#linktoaadharModal .btn-close').trigger('click');
            $('#linkaadharModal .btn-close').trigger('click');
            $('#profilemodal .btn-close').trigger('click');

        });




    });



    $("#service1").click(function(e) {
        $("#service_custom_modal1").toggle();
        $("#service_custom_modal2").hide();
        $("#service_custom_modal3").hide();
        $("#service_custom_modal4").hide();
        e.stopPropagation();
    });

    $("#service2").click(function(e) {
        $("#service_custom_modal2").toggle();
        $("#service_custom_modal1").hide();
        $("#service_custom_modal3").hide();
        $("#service_custom_modal4").hide();
        e.stopPropagation();
    });

    $("#service3").click(function(e) {
        $("#service_custom_modal3").toggle();
        $("#service_custom_modal1").hide();
        $("#service_custom_modal2").hide();
        $("#service_custom_modal4").hide();
        e.stopPropagation();
    });

    $("#service4").click(function(e) {
        $("#service_custom_modal4").toggle();
        $("#service_custom_modal1").hide();
        $("#service_custom_modal2").hide();
        $("#service_custom_modal3").hide();
        e.stopPropagation();
    });

    $("#service_custom_modal1").click(function(e) {
        e.stopPropagation();
    });

    $("#service_custom_modal2").click(function(e) {
        e.stopPropagation();
    });

    $("#service_custom_modal3").click(function(e) {
        e.stopPropagation();
    });
    $("#service_custom_modal4").click(function(e) {
        e.stopPropagation();
    });

    $(document).click(function() {
        $(".apply-new-pan").hide();
    });
</script>
<script>
    $(document).ready(function() {
        $('#refresh-btn1').on('click', function() {
            $.ajax({
                url: 'data.json',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#pending_slip1').html("(" + data[0].pending_slip + ")");
                    $('#reject_slip1').html("(" + data[0].reject_slip + ")");
                    $('#upload_document1').html("(" + data[0].upload_document + ")");
                    $('#under_process_pan1').html("(" + data[0].under_process_pan + ")");
                    $('#object_document1').html("(" + data[0].object_document + ")");
                    $('#approved_pan1').html("(" + data[0].approved_pan + ")");
                },
                error: function() {
                    alert('Error loading JSON data');
                }
            });
        });


        $('#refresh-btn2').on('click', function() {
            $.ajax({
                url: 'data.json',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#pending_slip2').html("(" + data[0].pending_slip + ")");
                    $('#reject_slip2').html("(" + data[0].reject_slip + ")");
                    $('#upload_document2').html("(" + data[0].upload_document + ")");
                    $('#under_process_pan2').html("(" + data[0].under_process_pan + ")");
                    $('#object_document2').html("(" + data[0].object_document + ")");
                    $('#approved_pan2').html("(" + data[0].approved_pan + ")");
                },
                error: function() {
                    alert('Error loading JSON data');
                }
            });
        });

        $('#refresh-btn3').on('click', function() {
            $.ajax({
                url: 'data.json',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#pending_slip3').html("(" + data[0].pending_slip + ")");
                    $('#reject_slip3').html("(" + data[0].reject_slip + ")");
                    $('#upload_document3').html("(" + data[0].upload_document + ")");
                    $('#under_process_pan3').html("(" + data[0].under_process_pan + ")");
                    $('#object_document3').html("(" + data[0].object_document + ")");
                    $('#approved_pan3').html("(" + data[0].approved_pan + ")");
                },
                error: function() {
                    alert('Error loading JSON data');
                }
            });
        });


    });

    $(document).ready(function() {
        $("#myModal").modal('show');
    });
</script>
</body>

</html>