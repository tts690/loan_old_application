<?php $this->load->view('dsa/components/page_head', array('pageTitle' => 'Login', 'cssFiles' => array())); ?>
<link rel="stylesheet" href="<?php echo $staticContent; ?>css/admin/css/jquery_ui.css">
<?php $staticContent = base_url(); ?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('dsa/sidemenu'); ?>
        </div>
        <div class="right_col" role="main" style="min-height: 1296px;">
            <section class="page-top badmin">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li><a href="<?php echo site_url('dsa/Dashboard'); ?>" style="color:black">DSA</a></li>
                                <li class="active">Login</li>
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
            <!--content-->
            <div class="row">
                <div class="col-md-12">
                    <h1>Generate URC | Login File</h1>
                </div>
            </div>
            <form action="<?php echo site_url('dsa/generate_URC'); ?>" method="POST">
                <div class="urclogin">
                    <div class="col-md-8 center-block">
                       
                        <div class="row"> 
                            <div class="col-md-4 col-xs-12">
                                <h5>Income State</h5>
                            </div>
                            <div class="col-md-6">
                                <select name="state_id" id="state_id">
                                    <option>Select State</option>
                                    <?php
                                    $this->db->select('*');
                                    $this->db->from('sr_state');
                                    $query = $this->db->get();
                                    $data = $query->result();
                                    foreach ($data as $value) {
                                        ?>
                                        <option name="state_id" value="<?php echo $value->sr_state_id; ?>"><?php echo $value->state_name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col-md-4 col-xs-12">
                                <h5>Select City</h5>
                            </div>
                            <div class="col-md-6">
                                <select name="selected_city[]" id="selected_city">
                                    <option>Select City</option>
                                </select>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col-md-4 col-xs-12">
                                <h5>Select Bank</h5>
                            </div>
                            <div class="col-md-6">
                                <select  name="selected_bank[]" id="selected_bank">
                                    <option>Select Bank</option>
                                </select>
                            </div>
                        </div>

                        <div class="row"> 
                            <div class="col-md-4 col-xs-12">
                                <h5>Select Loan</h5>
                            </div>
                            <div class="col-md-6">
                                <select name="sr_loan_id[]" id="selected_loan">
                                    <option>Select Loan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col-md-4 col-xs-12">
                                <h5>Select Income Source</h5>
                            </div>
                            <div class="col-md-6">
                                <select name="income_source_id">
                                    <option>Select Income Source</option>
                                    <option value="N">NRI - Salaried</option>
                                    <option value="R">Resident - Salaried</option>
                                    <option value="S">Resident - Self Employed</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="loginheader">
                                <div class="col-md-4"></div>
                                <div class="col-md-4"><h4>Applicant</h4></div>
                                <div class="col-md-4"><h4>Co- Applicant</h4></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><h5>Title</h5></div>
                            <div class="col-md-4">            
                                <select class="" name="a_title">
                                    <option value="mr">MR</option>
                                    <option value="mrs">MRS</option>                                    
                                    <option value="ms">MS</option>
                                </select>
                            </div>
                            <div class="col-md-4">            
                                <select class="" name="co_title">
                                    <option value="mr">MR</option>
                                    <option value="mrs">MRS</option>                                    
                                    <option value="ms">MS</option>
                                </select>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4 col-xs-12 col-sm-12"><h5>Name</h5></div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="text" id="a_name" name="a_name" placeholder="Applicant "/> 
                                </div>
                            </div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="text" id="co_name" name="co_name" placeholder="Co-Applicant"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-xs-12 col-sm-12"><h5>Fathers Name</h5></div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="text" id="fname" name="a_fname" placeholder="Applicant"/> 
                                </div>
                            </div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="text" id="fname" name="co_fname" placeholder="Co-Applicant"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-xs-12 col-sm-12"><h5>Spouse Name</h5></div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="text" id="sname" name="a_sname" placeholder="Applicant"/> 
                                </div>
                            </div>
                            <div class="col-md-4"> 
                                <div class="form-group">
                                    <input type="text" id="sname" name="co_sname" placeholder="Co-Applicant"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-xs-12 col-sm-12"><h5>Gender</h5></div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <label><input type="Radio" id="sname" value="male" name="a_gender" placeholder="Applicant"/>&nbsp;Male&nbsp;&nbsp;&nbsp;&nbsp;</label><label><input type="radio" class="" id="sname" value="female" name="a_gender"/>&nbsp;Female</label>
                                </div>
                            </div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <label><input type="radio" class="" id="sname" value="male" name="co_gender" placeholder="Co-Applicant"/>&nbsp;Male&nbsp;&nbsp;&nbsp;&nbsp;</label><label><input type="radio" class="" id="sname" value="female" name="co_gender"/>&nbsp;Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-xs-12 col-sm-12"><h5>Present Address</h5></div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" col="3" id="comment" name="a_present_address" placeholder="Applicant"></textarea> 
                                </div>
                            </div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" col="3" id="comment" name="co_present_address" placeholder="Co-Applicant"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-xs-12 col-sm-12"><h5>Permanent Address</h5></div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" col="3" id="comment" name="a_permanent_address" placeholder="Applicant"></textarea> 
                                </div>
                            </div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" col="3" id="comment" name="co_permanet_address" placeholder="Co-Applicant"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-xs-12 col-sm-12"><h5>Date of Birth</h5></div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="text" class="datepicker" name="a_dob" placeholder="Applicant"/> 
                                </div>
                            </div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="text" class="datepicker" name="co_dob" placeholder="Co-Applicant"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-xs-12 col-sm-12"><h5>PAN Number</h5></div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="text" id="sname"  name="a_pan_no" placeholder="Applicant"/> 
                                </div>
                            </div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="text" id="sname" name="co_pan_no" placeholder="Co-Applicant"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-xs-12 col-sm-12"><h5>Personal Email</h5></div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="email" id="sname" name="a_email" placeholder="Applicant"/> 
                                </div>
                            </div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="email" id="sname" name="co_email" placeholder="Co-Applicant"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-xs-12 col-sm-12"><h5>Personal Mobile</h5></div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="number" id="sname" name="a_mob" placeholder="Applicant"/> 
                                </div>
                            </div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="number" id="sname" name="co_mob" placeholder="Co-Applicant"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-xs-12 col-sm-12"><h5>Residence Landline</h5></div>
                            <div class="col-md-4">  <div class="form-group"><input type="number" class="" id="sname" value="" name="a_res_land" placeholder="Applicant"/> </div></div>
                            <div class="col-md-4">  <div class="form-group"><input type="number" class="" id="sname" value="" name="co_res_land" placeholder="Co-Applicant"/></div></div>
                        </div>        
                        <div class="row">
                            <div class="col-md-4 col-xs-12 col-sm-12"><h5>City</h5></div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="text" id="sname" name="a_city" placeholder="Applicant"/> 
                                </div>
                            </div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="text" id="sname" name="co_city" placeholder="Co-Applicant"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-xs-12 col-sm-12"><h5>Prefered Time of Contact</h5></div>
                            <div class="col-md-2">  
                                <div class="form-group">
                                    <input type="text" class="" id="sname" value="" name="a_time"/> 
                                </div>
                            </div>

                            <div class="col-md-2">            
                                <select class="" name="a_timmings">
                                    <option value="am">AM</option>
                                    <option value="pm">PM</option>                                    
                                </select>
                            </div>

                            <div class="col-md-2">  
                                <div class="">
                                    <input type="text" class="" id="sname" value="" name="co_time"/>
                                </div>
                            </div>
                            <div class="col-md-2">            
                                <select class="" name="co_timmings">
                                    <option value="am">AM</option>
                                    <option value="pm">PM</option>                                    
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-xs-12 col-sm-12"><h5>Adhar No</h5></div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="text" id="sname" name="a_adhar" placeholder="Applicant"/> 
                                </div>
                            </div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="text" id="sname" name="co_adhar" placeholder="Co-Applicant"/>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="header pull-left">
                            <h2><span>Employee Business details : </span></h2>   
                        </div>
                    </div>
                    <div class="col-md-8 center-block">        
                        <div class="row">
                            <div class="col-md-4 col-xs-12 col-sm-12"><h5>Employeer/ Business Name</h5></div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="text" id="name" name="a_bussiness_name" placeholder="Applicant"/>
                                </div>
                            </div>
                            <div class="col-md-4"> 
                                <div class="form-group">
                                    <input type="text" id="name" name="co_bussiness_name" placeholder="Co-Applicant"/>
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12 col-sm-12"><h5>Employeer Address</h5></div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" col="3" id="comment" name="a_employeer_address" placeholder="Applicant"></textarea> 
                                </div>
                            </div>
                            <div class="col-md-4"> 
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" col="3" id="comment" name="co_employeer_address" placeholder="Co-Applicant"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-12"><h5>Office Phone Number</h5></div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" id="name" name="a_office_no" placeholder="Applicant"/>
                                </div>
                            </div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="text" class="" id="name" value="" name="co_office_no" placeholder="Co-Applicant"/>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-12"><h5>Office Email Id</h5></div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="email" id="sname" name="a_office_email" placeholder="Applicant"/> 
                                </div>
                            </div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="email" id="sname" name="co_office_email" placeholder="Co-Applicant"/>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-12"><h5>HR  Mail Id</h5></div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="email" id="sname" name="a_hr_email" placeholder="Applicant"/> 
                                </div>
                            </div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <input type="email"  id="sname" name="co_hr_email" placeholder="Co-Applicant"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 header">
                            <h2 style="text-align: left"><span>Property Details :</span></h2>
                        </div>
                        <div class="col-md-4"> 
                            <input type="checkbox" id="property"> Not Applicable</div>
                    </div>
                    <div class="row" id="propertydetails">
                        <div class="col-md-3">
                            <p>Property Address</p>
                        </div>
                        <div class="col-md-3">  
                            <div class="form-group">
                                <textarea class="form-control" rows="3" col="3" name="property_address" /></textarea> 
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <p>Flat/Plot No</p>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" id="sname" name="flat_plot"/>
                            </div>
                        </div>
                        <br>

                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <p>Area</p>
                        </div>
                        <div class="col-md-2">
                            <input type="text" id="sname" name="area"/>
                        </div>
                        <div class="col-md-1">
                            <select name="area_details"> 
                                <option value="sq_feet">Sq.Feet</option>
                                <option value="guntas">Guntas</option>
                                <option value="sq_metrs">Sq. Metrs</option>
                                <option value="sq_yard">Sq.Yard</option>
                            </select>
                        </div>
                    </div>  
                    <!--builder-->
                    <div class="row" id="propertydetail">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <p>Seller Address</p>
                        </div>
                        <div class="col-md-3">  
                            <div class="form-group">
                                <textarea class="form-control" rows="3" col="3" id="comment" name="seller_address"></textarea> 
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <p>Constructed  Area</p>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="text" id="sname" name="constructed_area"/>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <select name="constructed_area_details"> 
                                <option value="sq_feet">Sq.Feet</option>
                                <option value="guntas">Guntas</option>
                                <option value="sq_metrs">Sq.Metrs</option>
                                <option value="sq_yard">Sq.Yard</option>
                            </select>
                        </div><br>

                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <p>Property Cost</p>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="text" id="sname" name="property_cost"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">                         
                        <div class="header pull-left">
                            <h2><span>Loan Details : </span></h2>
                        </div>
                    </div>  

                    <div class="row">  
                        <div class="col-md-4">
                            <div class="col-md-6 col-sm-12 col-xs-12"> 
                                <p>Loan amount </p>
                            </div>
                            <div class="col-md-6 ">    
                                <div class="form-group">
                                    <input type="text" id="sname" name="loan_amount"/>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <p> Processing fee</p>                 
                            </div>
                            <div class="col-md-6">    
                                <div class="form-group">
                                    <input type="text" id="sname" name="processing_fee"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <p> Tenure </p>                    
                            </div>
                            <div class="col-md-6">  
                                <div class="form-group">
                                    <input type="text" id="sname" name="tenure"/>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <p> Cheque No  </p>               
                            </div>
                            <div class="col-md-6">  
                                <div class="form-group">
                                    <input type="text"  id="sname" name="cheque_no"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <p> Interest Rate  <p>      
                            </div>
                            <div class="col-md-6">  
                                <div class="form-group">
                                    <input type="text"id="sname" name="interest_rate"/></div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <p>Bank<p>
                            </div>
                            <div class="col-md-6">  
                                <div class="form-group">
                                    <input type="text" id="sname" name="bank_name"/>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12"> 
                                <p>Branch </p>
                            </div>
                            <div class="col-md-6">  
                                <div class="form-group ">
                                    <input type="text" id="sname" name="branch_name"/></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 center-block">
                    <div class="row">
                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <h5>Employee/Agency Name</h5>
                        </div>
                        <div class="col-md-4">  
                            <div class="form-group">
                                <input type="text" id="a_name" name="emp_agn_name"/> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <h5>Employee/Agency Email</h5>
                        </div>
                        <div class="col-md-4">  
                            <div class="form-group">
                                <input type="text" id="a_name" name="emp_agn_email"/> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <h5>Employee/Agency Mobile NO</h5>
                        </div>
                        <div class="col-md-4">  
                            <div class="form-group">
                                <input type="text" id="a_name" name="emp_agn_mob"/> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
                    <input type="submit" value="Generate URC" class="sbutton">
                    <input type="button" value="Reset" class="sbutton" name="urc">
                </div>
                <div class="form-group">
                    <input type="hidden" id="sname" value="<?php echo 'DSA' ?>" name="role"/>
                </div>     

            </form>
        </div>
        <!--content-->
    </div>
</body>

<?php $this->load->view('dsa/components/page_tail', array('jsFiles' => array())); ?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script>
    $(document).ready(function () {
        $('#state_id').change(function () {
            var selected_state = $('#state_id').val();
            $.ajax({
                url: siteurl + 'Dsa_Login/Get_State_City',
                type: 'POST',
                dataType: 'json',
                data: {'selected_state': selected_state},
                success: function (result) {

                    $('#selected_bank')
                            .empty()
                            .append('<option selected="selected" value="0">Select</option>');

                    $('#selected_city')
                            .empty()
                            .append('<option selected="selected" value="0">Select</option>');

                    $.each(result, function (resindex, resitem) {
                        $.each(this, function (resitem, cities_name) {
                            var resi;
                            var rescars = [cities_name];

                            var mySelect = $('#selected_city');

                            for (resi = 0; resi < rescars.length; resi++) {
                                if (rescars[resi]['city_name']) {
                                    var eachcity = "<option value='" + rescars[resi]['sr_state_id'] + "'>" + rescars[resi]['city_name'] + "</option>";
                                    $('#selected_city').append(eachcity);
                                }

                                if (rescars[resi]['income_source_id']) {

                                    var eachbank = "<option value='" + rescars[resi]['income_source_id'] + "'>" + rescars[resi]['income_source_name'] + "</option>";

                                    $('#selected_bank').append(eachbank);
                                }


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

<script>
    $('#property').click(function () {
        if ($(this).is(":checked")) {
            $("#propertydetails").hide();
            $("#propertydetail").hide();
        } else {
            $("#propertydetails").show();
            $("#propertydetail").show();
        }
    });
</script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script>
    $(function () {
        $("#datepicker").datepicker(
                {
            changeMonth: true,
            changeYear: true,
            yearRange: "-65:-10",
        });
    });
</script>
<!--- Extra code--->

<script>
    $(document).ready(function () {
        $('#selected_value').change(function () {
            var document_value_result = $(this).val();
            $.ajax({
                url: siteurl + 'admin/manage_documents/Document_Controlling_System/document_control_system',
                type: 'POST',
                dataType: 'json',
                data: {'income_source_value': document_value_result},
                success: function (value) {


                    $('#mytable')
                            .empty()
                            .append('<option selected="selected" value="0">Select</option>');


                    $.each(value, function (index, item) {
                        var i;
                        var cars = [item];

                        $(function () {

                            // add multiple select / deselect functionality
                            $("#selectall").click(function () {
                                $('.id').attr('checked', this.checked);
                            });

                            // if all checkbox are selected, check the selectall checkbox
                            // and viceversa
                            $(".id").click(function () {

                                if ($(".id").length == $(".id:checked").length) {
                                    $("#selectall").attr("checked", "checked");
                                } else {
                                    $("#selectall").removeAttr("checked");
                                }

                            });
                        });


                        for (i = 0; i < cars.length; i++) {
                            var eachrow = "<tr>"
                                    + '<td><input type="checkbox" class="id" name="selectall[]" value="' + cars[i]['id'] + '"/></td>'
                                    + "<td>" + cars[i]['doc_code'] + "</td>"
                                    + "<td>" + cars[i]['doc_name'] + "</td>"
                                    + "</tr>";
                            $('#mytable').append(eachrow);
                        }
                    });
                },
                error: function () {
                    alert("Fail")
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#selected_value').change(function () {
            $('#mytable').empty();
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#selected_bank').change(function () {
            var selected_bank = $(this).val();
            $.ajax({
                url: siteurl + 'Home_Loan_Application_NRI/selecting_bank',
                type: 'POST',
                dataType: 'json',
                data: {'selected_bank': selected_bank},
                success: function (result) {

                    $('#selected_loan')
                            .empty()
                            .append('<option selected="selected" value="0">Select</option>');

                    $.each(result, function (resindex, resitem) {
                        console.log(resindex);
                        var resi;
                        var rescars = [resitem];
                        var mySelect = $('#selected_loan');

                        for (resi = 0; resi < rescars.length; resi++) {
                            var eachres = "<option value='" + rescars[resi]['id'] + "'>" + rescars[resi]['LoanName'] + "</option>";
                            $('#selected_loan').append(eachres);
                        }
                    });
                },
                error: function () {
                    alert("Fail")
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#selected_loan').change(function () {
            var selected_income = $('#selected_value').val();
            var selected_bank = $('#selected_bank').val();
            var selected_loan = $('#selected_loan').val();

            $.ajax({
                url: siteurl + 'Home_Loan_Application_NRI/document_check',
                type: 'POST',
                dataType: 'json',
                data: {'selected_loan': selected_loan, 'selected_bank': selected_bank, 'selected_income': selected_income},
                success: function (result) {


                    $.each(result, function (index, item) {
                        var i;
                        var cars = [item];
                        for (i = 0; i < cars.length; i++) {

                            $("input:checkbox").each(function () {
                                var c = $(this).val();
                                if (c == cars[i]['document_id'])
                                {
                                    $(this).attr('checked', true);
                                }

                            });

                        }
                    });
                },
                error: function () {
                    alert("Fail")
                }
            });
        });
    });
</script>



<script>
    $('#property').click(function () {
        if ($(this).is(":checked")) {
            $("#propertydetails").hide();
            $("#propertydetail").hide();
        } else {
            $("#propertydetails").show();
            $("#propertydetail").show();
        }
    });
</script>



<script src="<?php echo $staticContent; ?>js/custom.js"></script>

<script src="<?php echo $staticContent; ?>js/section/cbpFWTabs.js"></script>
<script>
    (function () {

        [].slice.call(document.querySelectorAll('.tabs')).forEach(function (el) {
            new CBPFWTabs(el);
        });

    })();
</script>


<script>
    $(window).scroll(function () {
        var navTop = $(window).scrollTop();
        $('.model-0').css("top", navTop + 50);
    });
</script>
<!--validation-->
<script type="text/javascript" src="<?php echo $staticContent; ?>js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo $staticContent; ?>js/additional-methods.js"></script>

<script>

    $(document).ready(function () {
        $('.radio-option').click(function () {
            $(this).not(this).removeClass('click');
            $(this).toggleClass("click");
        });
    });
</script>