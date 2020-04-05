<?php $this->load->view('dsa/components/page_head', array('pageTitle' => 'Editing Profile', 'cssFiles' => array())); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('dsa/sidemenu'); ?>
        </div>
        <div class="right_col" role="main" style="min-height: 1296px;">

            <section class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('dsa/Dashboard'); ?>" >Home</a></li>                                               

                                <li class="active">Profile Edit</li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!--Bug Alerts--->
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

                    <?php echo form_open_multipart('dsa/profile/save', array('class' => 'col s12')); ?>
                    <div class="profile-edit">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="test1">Agency Name</label>
                                <input class="form-control" id="input_text" type="text" name="agency_name" placeholder="Agency Name" value="<?php echo (isset($userdata[0]->agency_name)) ? $userdata[0]->agency_name : ''; ?>"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input_text">Alternative Mobile</label>
                                <input class="form-control" id="input_text" type="text" name="alternative_mob" placeholder="Alternative Mobile" value="<?php echo (isset($userdata[0]->alternative_mob)) ? $userdata[0]->alternative_mob : ''; ?>"/>
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

                            <div class="form-group">
                                <label for="test1">Gender</label>
                                <ul class="glist">
                                    <li>
                                        <input name="gender" type="radio" value="Male" id="test1"  <?php print $male_status; ?> />
                                        <label for="test1">Male</label>
                                    </li>
                                    <li>
                                        <input name="gender" type="radio" value="Female" id="test2" <?php print $female_status; ?> />
                                        <label for="test2">Female</label>
                                    </li>
                                </ul>
                            </div> 
                        </div>

                        <div class="col-md-6 col-xs-12"> 
                            <div class="form-group">
                                <label for="input_text">Date Of Birth</label>
                                <input class="form-control" type="text" id="datepicker" value="<?php echo (isset($userdata[0]->dob)) ? $userdata[0]->dob : ''; ?>" name="dob"/> 
                            </div>                           
                        </div>

                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="input_text">Permanent Address</label>
                                <textarea class="form-control" rows="4" name="parmenent_address" placeholder="Parmenent Address"><?php echo (isset($userdata[0]->parmenent_address)) ? $userdata[0]->parmenent_address : ''; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="input_text">Present Address</label>
                                <textarea class="form-control" rows="4" name="present_address" placeholder="Present Address"><?php echo (isset($userdata[0]->present_address)) ? $userdata[0]->present_address : ''; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="input_text">City</label>
                                <input class="form-control" id="input_text" type="text" name="city" placeholder="City" value="<?php echo (isset($userdata[0]->city)) ? $userdata[0]->city : ''; ?>"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="input_text">Region</label>
                                <input class="form-control" id="input_text" type="text" name="region" placeholder="Region" value="<?php echo (isset($userdata[0]->region)) ? $userdata[0]->region : ''; ?>"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="input_text">Country</label>
                                <input class="form-control" id="input_text" type="text" name="country" placeholder="Country" value="<?php echo (isset($userdata[0]->country)) ? $userdata[0]->country : ''; ?>"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="input_text">Zip Code</label>
                                <input class="form-control" id="input_text" type="text" name="zipcode" placeholder="Zip Code" value="<?php echo (isset($userdata[0]->zipcode)) ? $userdata[0]->zipcode : ''; ?>"/>
                            </div> 
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="input_text">Mobile</label>
                                <input class="form-control" id="input_text" type="text" name="mobile" placeholder="Mobile" value="<?php echo (isset($userdata[0]->mobile)) ? $userdata[0]->mobile : ''; ?>"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12"> 
                            <div class="form-group">
                                <label for="input_text">Email</label>
                                <input class="form-control" id="input_text" type="text" name="email" placeholder="Email" value="<?php echo (isset($userdata[0]->email)) ? $userdata[0]->email : ''; ?>"/>
                            </div>     
                        </div>
                        <div class="row1">   
                            <div class="col-md-6 col-xs-12"> 
                                <div class="form-group">
                                    <label for="input_text">User Name</label>
                                    <input class="form-control" id="input_text" type="text" name="username" placeholder="Username" value="<?php echo (isset($userdata[0]->username)) ? $userdata[0]->username : ''; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-2 label-control" for="photoUrl">Photo :</label>
                                    <div class="col-md-4">
                                        <input type="file" id="photoUrl" name="photoUrl" value="<?php echo (isset($userdata[0]->photoUrl)) ? $userdata[0]->photoUrl : ''; ?>" >
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

                            <br>
                        </div>                                            
                        <br>
                        <br>

                        <div class="col-md-6 col-xs-12">
                            <div class="">
                                <button class="btn sbutton" type="submit">Submit</button>
                                <button class="btn sbutton" type="reset">Reset</button>
                            </div>  
                        </div>
                        <?php echo form_close(); ?>
                    </div>    
                </div>  
            </div>
        </div>
    </div>
</body>

<?php $this->load->view('dsa/components/page_tail', array('jsFiles' => array())); ?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script>
    $(function () {
        $("#datepicker").datepicker();
    });
</script>