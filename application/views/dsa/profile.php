<?php $this->load->view('dsa/components/page_head', array('pageTitle' => 'Profile', 'cssFiles' => array())); ?>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('dsa/sidemenu'); ?>
        </div>
        <div class="right_col" role="main" style="min-height: 1296px;">
           
            <div class="row">
                <div class="header">

                </div>
            </div>
             <section class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('dsa/Dashboard'); ?>" >Home</a></li>                                               
                                <li class="active">Profile </li> 
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
            <!---End of Alert-->
            
            <div class="row">
            <div class="col-md-8 center-block">           
                <b><u><h4>Login Information</h4></u></b>
                 <?php if (isset($data['photoUrl'])) { ?> 
                    <img style="margin-top:10px; border-radius:50%; border: 3px solid #aaa; height:100px; width:100px;" 
                         src="<?php
                         if (!$var = $data['photoUrl'] == Null && $data['photoUrl'] == '') {
                             echo base_url('uploads/' . $data['photoUrl']);
                         } else {
                             echo base_url('uploads/default.png');
                         }
                         ?>"/>
                <?php } ?>
                <p>Employee Name: <?php echo $data['agency_name']; ?></p>
                <p>Registered on: <?php echo mysql2englishDate($data['created_on']); ?></p>
                <p>Username : <?php echo $data['username']; ?></p>
                <br/>
                <h4>Profile Information</h4>
                <div class="right"> 
                    <a class="btn btn-primary sbutton" href="<?php echo site_url('dsa/profile/edit/' . $this->session->userdata('ei')); ?>">Edit</a>
                </div>
               
                <div class="left" style="margin-left:100px;">
                    <p>Date of Birth: <?php echo mysql2englishDate($data['dob']); ?></p>
                    <p>Gender: <?php echo ucfirst($data['gender']); ?></p>


                    <p>Permanent Address: <?php echo $data['parmenent_address']; ?></p>
                    <p>Present Address: <?php echo $data['parmenent_address']; ?></p>
                    <p>City: <?php echo $data['city']; ?></p>
                    <p>Region: <?php echo $data['region']; ?></p>
                    <p>Zipcode: <?php echo $data['zipcode']; ?></p>
                    <p>Country: <?php echo $data['country']; ?></p>
                    <p>Mobile: <?php echo $data['mobile']; ?></p>
                </div>
            </div>
            </div>
        </div>
</body>


<?php $this->load->view('dsa/components/page_tail', array('jsFiles' => array())); ?>