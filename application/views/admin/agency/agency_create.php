<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Create Agency', 'cssFiles' => array())); ?>
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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/agency/Agency_Control'); ?>">Agency</a></li>                      
                                <li class="active">Agency Edit</li>  
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

            <form action="<?php echo site_url('admin/agency_create'); ?>" method="POST">
                <h3>Agency Registration</h3>
                <div class="row">
                    <div class="col-md-2 col-xs-12"> State</div>
                    <div class="col-md-4">
                        <select name="state_id" id="state_id">
                            <option>Select</option>
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
                    <div class="col-md-2 col-xs-12"> City</div> <div class="col-md-4">
                        <select  name="selected_city[]" id="selected_city">
                            <option>Select</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-12"> Bank</div> 
                    <div class="col-md-4"> 
                        <select  name="selected_bank[]" id="selected_bank">
                            <option>Select</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 col-xs-12">   Agency Name</div> <div class="col-md-4"> 
                        <input type="text" name="agency_name" value="<?php echo $value1->agency_name; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 col-xs-12">Agency Address </div> <div class="col-md-4"> 
                        <textarea name="address"><?php echo $value1->agency_address; ?></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 col-xs-12">Contact Person Name
                    </div> <div class="col-md-4"> 
                        <input type="text" name="contact_name" value="<?php echo $value1->contact_person; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 col-xs-12">Phone No  </div> <div class="col-md-4"> 
                        <input name="phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "10" value="<?php echo $value1->phone; ?>"/>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2 col-xs-12">Mobile No</div> <div class="col-md-4"> 
                        <input name="mobile" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "10" value="<?php echo $value1->mobile; ?>"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 col-xs-12">Email ID </div> <div class="col-md-4"> 
                        <input type="text" name="email" value="<?php echo $value1->email; ?>">
                    </div>
                </div>

                <input type="hidden" value="<?php echo $id = $this->uri->segment(5); ?>" name="editing_id"/>
                <h3>User Login Details</h3>
                <hr/>
                <div class="row">
                    <div class="col-md-2 col-xs-12">User Name</div> <div class="col-md-4"> 
                        <input type="text" name="username" value="<?php echo $value1->username; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 col-xs-12"> Password</div> <div class="col-md-4">
                        <input type="password" name="password" value="<?php echo $value1->password; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 col-xs-12" >Confirm Password  </div>
                    <div class="col-md-4" ><input type="password" name="cpassword" id="cpassword" class="" placeholder="" required/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 col-xs-12">  Status</div> <div class="col-md-4">
                        <select name="status">
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select> 
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 col-xs-12">SMS Approve</div> <div class="col-md-4">
                        <select name="sms_approve">
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-12">Email Approve</div> <div class="col-md-4">
                        <select name="email_approve">
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                    </div>
                </div>
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