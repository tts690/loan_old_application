<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Editing Profile', 'cssFiles' => array())); ?>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
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
                                <li class="active">Profile Edit</li>  
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
            <div class="row">
                <div class="col-md-12">
                    <div class="box-header with-border"> 
                        <h2 class="">Profile Editing</h2>  
                    </div> 

                    <?php echo form_open_multipart('admin/profile/save', array('class' => 'col s12')); ?>
                    <div class="profile-edit">
                        <div class="col-md-6 col-xs-12">
                                <h6>First Name</h6>
                            <div class="form-group">
                                <input class="form-control" id="input_text" type="text" name="firstName" placeholder="First Name" value="<?php echo (isset($userdata[0]->firstName)) ? $userdata[0]->firstName : ''; ?>"/>

                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                             <h6>Last Name</h6>
                            <div class="form-group">
                                <input class="form-control" id="input_text" type="text" name="lastName" placeholder="Last Name" value="<?php echo (isset($userdata[0]->lastName)) ? $userdata[0]->lastName : ''; ?>"/>
                            </div>
                        </div>

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

                        <div class="col-md-6 col-xs-12">
                            <div class="from-group">
                                <h6>Gender</h6>
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
                            <h6>Date Of Birth</h6>
                            <div class="form-group">                            
                            <input class="form-control" type="text" id="datepicker" value="<?php echo (isset($userdata[0]->dob)) ? $userdata[0]->dob : ''; ?>" name="dob"/> 
                            </div>
                        </div>

                        <div class="col-md-6 col-xs-12">
                             <h6>Mobile Number</h6>
                            <div class="form-group">
                                <input class="form-control" id="input_text" type="text" name="mobile" placeholder="Mobile" value="<?php echo (isset($userdata[0]->mobile)) ? $userdata[0]->mobile : ''; ?>"/>
                            </div>
                        </div>

                        <div class="col-md-6 col-xs-12">
                             <h6>Alternative Number</h6>
                            <div class="form-group">
                                <input class="form-control" id="input_text" type="text" name="alternative_mob" placeholder="Alternative Mobile" value="<?php echo (isset($userdata[0]->alternative_mob)) ? $userdata[0]->alternative_mob : ''; ?>"/>
                            </div>
                        </div>

                        <div class="col-md-6 col-xs-12">
                             <h6>Address</h6>
                            <div class="form-group">
                                <textarea class="form-control" rows="4" name="address" placeholder="Address"><?php echo (isset($userdata[0]->address)) ? $userdata[0]->address : ''; ?></textarea>
                            </div>
                        </div>

                        <div class="col-md-6 col-xs-12">
                             <h6>City</h6>
                            <div class="form-group">
                                <input class="form-control" id="input_text" type="text" name="city" placeholder="City" value="<?php echo (isset($userdata[0]->city)) ? $userdata[0]->city : ''; ?>"/>

                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                             <h6>Region</h6>
                            <div class="form-group">
                                <input class="form-control" id="input_text" type="text" name="region" placeholder="Region" value="<?php echo (isset($userdata[0]->region)) ? $userdata[0]->region : ''; ?>"/>
                            </div>  
                        </div>
                        <div class="col-md-6 col-xs-12">
                             <h6>Country</h6>
                            <div class="form-group">
                                <input class="form-control" id="input_text" type="text" name="country" placeholder="Country" value="<?php echo (isset($userdata[0]->country)) ? $userdata[0]->country : ''; ?>"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <h6>Zipcode</h6>
                            <div class="form-group">
                                <input class="form-control" id="input_text" type="text" name="zipcode" placeholder="Zip Code" value="<?php echo (isset($userdata[0]->zipcode)) ? $userdata[0]->zipcode : ''; ?>"/>
                            </div> 
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
                         <div class="col-md-6 col-xs-12">
                            <div class="align-right">
                                <button class="btn sbutton" type="submit">Submit</button>
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



<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script>
    $(function () {
        $("#datepicker").datepicker();
    });
</script>