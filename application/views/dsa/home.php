<?php $this->load->view('dsa/components/page_head', array('pageTitle' => 'Home', 'cssFiles' => array())); ?>
<?php if (!empty($error)) { ?>
    <div class="alert alert-danger" id="success-alert">
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
                <?php $url = array('dsa', 'Signin') ?>
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

                        <div class="lbutton">
                             <a href="<?php echo site_url('#'); ?>">
                                 <input type="button" value="Forgot Password" id="lbutton" class="btn llbutton"/>
                            </a>
                            <!--a class="btn fbutton" id="lbutton" href="<?php echo site_url('forgetting'); ?>">Forgot Password ?</a-->
                            <button type="submit" class="btn llbutton" id="lbutton">Login</button>                   

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
