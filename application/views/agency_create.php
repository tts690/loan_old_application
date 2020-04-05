<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Create Agency', 'cssFiles' => array())); ?>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
<!--Bug Alerts--->
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('admin/sidemenu'); ?>
        </div>
        <div class="right_col" role="main" style="min-height: 1296px;">
            <?php if (!empty($error)) { ?>
                <div class="alert alert-success" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong><?php echo $error; ?> </strong>
                </div>
            <?php } ?> 
            <!---End of Alert-->
            <section class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li><a href="<?php echo $staticContent; ?>" style="color:#CCCCCC">Home</a></li>
                                <li><a href="<?php echo $staticContent; ?>" style="color:#CCCCCC">Manage Banks</a></li>                        
                                <li class="active">Create Bank</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <form action="<?php echo site_url('admin/agency_create'); ?>" method="POST">
                <h3>Agency Registration</h3>
                State: <select class="form-control" name="state_id" id="state_id">
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
                City: <select class="form-control" name="selected_city[]" id="selected_city">
                    <option>Select</option>
                </select>
                Bank: <select class="form-control" name="selected_bank[]" id="selected_bank">
                    <option>Select</option>
                </select>
                Agency Name: <input type="text" name="agency_name" value="<?php echo $value1->agency_name; ?>"><br/><br/>
                Agency Address : - <textarea name="address"><?php echo $value1->agency_address; ?></textarea><br/><br/>
                Contact Person Name: <input type="text" name="contact_name" value="<?php echo $value1->contact_person; ?>"><br/><br/>
                Phone No : <input name="phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "10" value="<?php echo $value1->phone; ?>"/><br/><br/>
                Mobile No: <input name="mobile" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "10" value="<?php echo $value1->mobile; ?>"/><br/><br/>
                Email ID: - <input type="text" name="email" value="<?php echo $value1->email; ?>"><br/><br/>
                <h3>User Login Details</h3>
                <hr/>
                User Id: - <input type="text" name="username" value="<?php echo $value1->username; ?>"><br/><br/>
                Password: - <input type="password" name="password" value="<?php echo $value1->password; ?>"><br/><br/>
                Confirm Password: - <input type="password" name="confirmpassword"><br/><br/>
                <div class="form-group"> <div class="col-md-3" ><label>Need to send leads  </label></div>
                    <div class="col-md-8" >                       
                        <input type="Radio" class="" id="sname" value="male" name="a_gender"/>&nbsp;Yes&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" class="" id="sname" value="female" name="a_gender"/>&nbsp;No</div>
                </div>
                <div class="form-group">
                    <div class="chek"> <input type="checkbox" value="" id="property">I accept the Terms and Conditions </div>
                </div>
                <input type="submit" value="Create" class="btn btn-primary sbutton"/>
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