<?php $this->load->view('employee/components/page_head', array('pageTitle' => 'Editing Profile', 'cssFiles' => array())); ?>


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<!--Bug Alerts--->
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('employee/sidemenu'); ?>
        </div>
        <div class="right_col" role="main" style="min-height: 1296px;">
             <section class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('employee/Dashboard'); ?>" >Home</a></li>                                               

                                <li class="active">Profile Edit</li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
              <?php if (!empty($error)) { ?>
                <div class="alert alert-success" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong><?php echo $error; ?> </strong>
                </div>
            <?php } ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="box-header with-border"> 
                        <h2 class="">Profile Editing</h2>  
                    </div> 

                    <?php echo form_open_multipart('employee/profile/save', array('class' => 'col s12')); ?>
                    <div class="profile-edit">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="test1">Employee Name</label>
                                <input class="form-control" id="input_text" type="text" name="emp_name" placeholder="Employee Name" value="<?php echo (isset($userdata[0]->emp_name)) ? $userdata[0]->emp_name : ''; ?>"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="test1">Father Name</label>
                                <input class="form-control" id="input_text" type="text" name="father_name" placeholder="Father Name" value="<?php echo (isset($userdata[0]->father_name)) ? $userdata[0]->father_name : ''; ?>"/>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <?php
                            if ($userdata[0]->gender == 'Male') {
                                $male_status = 'checked';
                                $female_status = '';
                            } else if ($userdata[0]->gender == 'Female') {
                                $female_status = 'checked';
                                $male_status = '';
                            } else {
                                $female_status = '';
                                $male_status = 'checked';
                            }
                            ?>
                            <div class="from-group">
                                <label for="test1">Gender</label>
                                <ul class="glist">
                                    <li>
                                        <input name="gender" type="radio" value="Male" id="test1"  <?php print $male_status; ?> />
                                        <label for="test1">Male</label>
                                    </li>
                                    <li>
                                        <input name="gender" type="radio" value="Female" id="test2" <?PHP print $female_status; ?> />
                                        <label for="test2">Female</label>
                                    </li>
                                </ul>
                            </div>    
                        </div>         
                        <div class="col-md-6 col-xs-12"> 
                            <label for="input_text">Date Of Birth</label>
                            <div class="form-group"><input type="text" id="datepicker" value="<?php echo (isset($userdata[0]->dob)) ? $userdata[0]->dob : ''; ?>" name="dob"/> 
                            </div>                           
                        </div>

                        <div class="col-md-6 col-xs-12">

                            <div class="form-group">
                                <label for="input_text">Permanent Address</label>
                                <textarea class="form-control" rows="4" name="parmenent_address" placeholder="Parmenent Address" value="<?php echo (isset($userdata[0]->parmenent_address)) ? $userdata[0]->parmenent_address : ''; ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="input_text">Present Address</label>
                                <textarea class="form-control" rows="4" name="present_address" placeholder="Present Address" value="<?php echo (isset($userdata[0]->present_address)) ? $userdata[0]->present_address : ''; ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="input_text">Mobile</label>
                                <input class="form-control" id="input_text" type="text" name="mobile" placeholder="Mobile" value="<?php echo (isset($userdata[0]->mobile)) ? $userdata[0]->mobile : ''; ?>"/>
                            </div>
                             <div class="form-group">
                                <label for="input_text">User Name</label>
                                <input class="form-control" id="input_text" type="text" name="username" placeholder="Username" value="<?php echo (isset($userdata[0]->username)) ? $userdata[0]->username : ''; ?>"/>
                            </div>                      

                        </div>
                        <div class="col-md-6 col-xs-12">
                              <div class="form-group">
                                <label for="input_text">Email</label>
                                <input class="form-control" id="input_text" type="text" name="email" placeholder="Email" value="<?php echo (isset($userdata[0]->email)) ? $userdata[0]->email : ''; ?>"/>
                            </div>   
                            <div class="form-group">
                                <label for="input_text">City</label>
                                <input class="form-control" id="input_text" type="text" name="city" placeholder="City" value="<?php echo (isset($userdata[0]->city)) ? $userdata[0]->city : ''; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="input_text">Region</label>
                                <input class="form-control" id="input_text" type="text" name="region" placeholder="Region" value="<?php echo (isset($userdata[0]->region)) ? $userdata[0]->region : ''; ?>"/>
                            </div>               
                            <div class="form-group">
                                <label for="input_text">Country</label>
                                <input class="form-control" id="input_text" type="text" name="country" placeholder="Country" value="<?php echo (isset($userdata[0]->country)) ? $userdata[0]->country : ''; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="input_text">Zip Code</label>
                                <input class="form-control" id="input_text" type="text" name="zipcode" placeholder="Zip Code" value="<?php echo (isset($userdata[0]->zipcode)) ? $userdata[0]->zipcode : ''; ?>"/>
                            </div> 
                              <br>
                             <br>
                            <br>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-2 label-control" for="photoUrl">Photo :</label>
                                <div class="col-md-4">
                                    <input type="file" id="photoUrl" name="photoUrl" value="<?php echo (isset($userdata[0]->photoUrl)) ? $userdata[0]->photoUrl : ''; ?>">
                                    <?php if (isset($userdata[0]->photoUrl)) { ?> 
                                        <img style="margin-top:10px; border-radius:50%; border: 3px solid #aaa; height:100px; width:100px;" 
                                             src="<?php
                                             if (!$var = $userdata[0]->photoUrl == Null && $userdata[0]->photoUrl == '') {
                                                 echo base_url('uploads/' . $userdata[0]->photoUrl);
                                             } else {
                                                 echo base_url('uploads/default.png');
                                             }
                                             ?>"/>
                                         <?php } ?>
                                </div> 
                            </div>
                        </div>                           
                        <div class="col-md-6 col-xs-12"></div>
                    </div>
                         <br>
                            <br>                          
                   <div class="col-md-6 col-xs-12">
                        <div class="pull-left">
                            <button class="btn sbutton" type="submit">Submit</button>
                            <button class="btn sbutton" type="reset">Reset</button>
                        </div>  
                    </div>
                </div>
                     <?php echo form_close(); ?>
            </div>  
        </div>
    </div>
    </div>
</body>

<!---End of Alert-->



<?php $this->load->view('employee/components/page_tail', array('jsFiles' => array())); ?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script>
    $(function () {
        $("#datepicker").datepicker();
    });
</script>