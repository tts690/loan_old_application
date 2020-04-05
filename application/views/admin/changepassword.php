<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'ChangePassword', 'cssFiles' => array())); ?>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

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
                                <li class="active">Change Password</li>  
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

            <div class="col-md-5 center-block">          
                <div class="change-password"> 
                    <h2>Change The Password</h2>
                    <?php echo form_open('admin/change_password', array('class' => 'col s12')); ?>   

                    <div class="form-group">

                        <input id="input_text" type="password" name="oldpassword" id="pwd" placeholder="Old Password"/>
                    </div>

                    <div class="form-group">

                        <input id="input_text" type="password" name="newpassword" id="pwd" placeholder="New Password"/>
                    </div>

                    <div class="form-group">

                        <input id="input_text" type="password" name="confirmpassword" id="pwd" placeholder="Confirm Password"/>
                    </div>

                    <button type="submit" class="btn sbutton">Submit</button>

                    <?php echo form_close(); ?>    

                </div>
            </div>
        </div>
</body>



<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>