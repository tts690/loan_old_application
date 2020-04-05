<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'FOIR Edit', 'cssFiles' => array())); ?>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
<!--Bug Alerts--->
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('admin/sidemenu'); ?>
        </div>
        <div class="right_col" role="main" style="min-height: 1296px;">

            <!---End of Alert-->
            <section class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Dashboard'); ?>" >Home</a></li>                                               
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/foir_iir/Foir_Control'); ?>">FOIR</a></li>                      
                                <li class="active">FOIR Edit</li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            <!--Bug Alerts--->
            <?php if (!empty($error)) { ?>
                <div class="alert alert-danger" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong><?php echo $error; ?> </strong>
                </div>
            <?php } ?> 
            <!---End of Alert-->
           
            <form action="<?php echo site_url('admin/foir_iir/Foir_Control/EDIT_Foir'); ?>" method="POST">
                <?php
                $id = $this->uri->segment(5);
                $this->db->select('*');
                $this->db->from('foir_setting');
                $this->db->where(array('foir_setting_id' => $id));
                $query = $this->db->get();
                $data1 = $query->result();
                foreach ($data1 as $value1) {
                    
                }
                ?>
                <h3>FOIR Edit</h3>
                <div class="row">
                    <div class="col-md-2 col-xs-12"> <h5>Income Source</h5></div>
                    <div class="col-md-4">            
                        <select  name="income_source_id" id="selected_value">
                            <option>Select</option>
                            <option value="R">Resident - Salaried</option>
                            <option value="N">NRI - Salaried</option>
                            <option value="S">Resident - Self Employed</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 col-xs-12"> <h5>Bank</h5></div>
                    <div class="col-md-4">            
                        <select name="bank_id" id="selected_bank">
                            <option>Select</option>
                            <option value="1">Banks Considering Gross Income</option>
                            <option value="2">Banks Considering Net Income</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-12"> <h5>Liabilities</h5></div>
                    <div class="col-md-4">            
                        <select name="liabilities" id="liabilities">
                            <option value="1">With</option>
                            <option value="2">Without</option>
                        </select>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md-2 col-xs-12"> From</div> 
                    <div class="col-md-4">  
                        <input type="text" name="from_amount">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-12"> To</div> 
                    <div class="col-md-4">  
                        <input type="text" name="to_amount">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-12"> Percentage</div> 
                    <div class="col-md-4">  
                        <input type="text" name="percentage">
                    </div>
                </div>
                <input type="submit" value="Create" class="btn btn-primary sbutton"/>
                <input type="hidden" value="<?php echo $id = $this->uri->segment(5); ?>" name="editing_id"/>
                <input type="submit" value="Update" class="btn btn-primary sbutton"/>
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