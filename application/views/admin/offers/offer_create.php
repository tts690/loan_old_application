<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Create Offer', 'cssFiles' => array())); ?>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
<!--Bug Alerts--->
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('admin/sidemenu'); ?>
        </div>
        <div class="right_col" role="main" style="min-height: 1296px;">
          
               <section class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Dashboard'); ?>" >Home</a></li>                                               
                                 <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Offers'); ?>">Offers</a></li>                      
                                <li class="active">Offers Create</li>  
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
              <?php if (!empty($error)) { ?>
                <div class="alert alert-danger" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong><?php echo $error; ?> </strong>
                </div>
            <?php } ?> 
            <!---End of Alert-->
            <form action="<?php echo site_url('admin/Offers/Create_Offer'); ?>" method="POST">
                <div class="row">
                    <div class="col-md-2 col-xs-12"><h5> Offer Name </h5></div> 
                    <div class="col-md-4"> <input type="text" name="offer_name"></div>
                </div>
                <br>
                <input type="submit" value="Create" class="btn btn-primary sbutton"/>
                <input type="reset" value="Reset" class="btn btn-primary sbutton"/>
            </form>
        </div>
    </div
</body>

<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>

<script>
    $(document).ready(function () {
        $('#state_id').change(function () {
            var selected_state = $('#state_id').val();
            $.ajax({
                url: siteurl + 'admin/agency/Agency_Control/Get_State_City',
                type: 'POST',
                dataType: 'json',
                data: {'selected_state': selected_state},
                success: function (result) {
                    console.log(result);
                    $.each(result, function (resindex, resitem) {
                        $.each(this, function (resitem, cities_name) {
                            var resi;
                            var rescars = [cities_name];
                            var mySelect = $('#selected_city');

                            for (resi = 0; resi < rescars.length; resi++) {
                                var eachcity = "<option value='" + rescars[resi]['sr_state_id'] + "'>" + rescars[resi]['city_name'] + "</option>";
                                var eachbank = "<option value='" + rescars[resi]['income_source_id'] + "'>" + rescars[resi]['income_source_name'] + "</option>";
                                $('#selected_city').append(eachcity);
                                $('#selected_bank').append(eachbank);
                            }
                        });
                    });
                },
                error: function () {
                    alert("Fail")
                }
            });
        });
    });
</script>