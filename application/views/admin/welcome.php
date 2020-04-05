<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Welcome', 'cssFiles' => array())); ?>
<!--Bug Alerts--->
<?php if (!empty($error)) { ?>
    <div class="alert alert-success" id="success-alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong><?php echo $error; ?> </strong>
    </div>
<?php } ?>   
<!---End of Alert-->

<div class="welcome-bgc">
    <div class="row">
        <div class="col-md-4 center-block">
            <div class="welcome-login">
                <div class="admin-logo" align="center">
                    <img src="<?php echo base_url(); ?>images/myloandetailsogo.svg"/>
                </div>
                <?php $url = array('admin', 'Signin') ?>
                <div class="login_cont">
                    <form action="<?php echo site_url($url) ?>" method="POST">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Username" name="username" aria-describedby="basic-addon1">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" placeholder="Password" name="password" aria-describedby="basic-addon1">
                        </div>
                        <br>
                        <!--<div class="input-group">
                           
                            <input type="text" class="form-control" name="username" placeholder="Username"  aria-describedby="sizing-addon1">
                        </div>
    
                        <div class="input-group">
                           
                            <input type="password" class="form-control" name="password" placeholder="Password" aria-describedby="sizing-addon1">
                        </div>-->
                        <div class="lbutton">
                            <!--a class="btn fbutton" id="lbutton" href="<?php echo site_url('forgetting'); ?>">Forgot Password ?</a-->
                            <button type="submit" align="right" class="btn llbutton" id="lbutton">Login</button>                   

                        </div>
                        <!--button type="submit" class="btn btn-primary">Forgot Password</button-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
