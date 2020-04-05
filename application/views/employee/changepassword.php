<?php $this->load->view('employee/components/page_head', array('pageTitle' => 'ChangePassword', 'cssFiles' => array())); ?>
<style>
    #input_text{
        padding: 0px !important;
    }
</style>


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
                                <li class="active">Change Password</li> 
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


            <div class="col-md-5 center-block">          
                <div class="change-password"> 
                    <h2>Change The Password</h2>
                    <?php echo form_open('employee/Changepassword', array('class' => 'col s12')); ?>   

                    <div class="form-group">

                        <input id="input_text" type="password" name="oldpassword" id="pwd" placeholder="Old password"/>
                    </div>

                    <div class="form-group">

                        <input id="input_text" type="password" name="newpassword" id="pwd" placeholder="Newpassword"/>
                    </div>

                    <div class="form-group">

                        <input id="input_text" type="password" name="confirmpassword" id="pwd" placeholder="Confirmpassword"/>
                    </div>

                    <button type="submit" class="btn sbutton">Submit</button>

                    <?php echo form_close(); ?>    

                </div>
            </div>
        </div>
</body>



<?php $this->load->view('employee/components/page_tail', array('jsFiles' => array())); ?>