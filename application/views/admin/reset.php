<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Reset Password', 'cssFiles' => array())); ?>

<!--Bug Alerts--->
<?php if (!empty($error)) { ?>
    <div class="alert alert-success" id="success-alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong><?php echo $error; ?> </strong>
    </div>
<?php } ?>   
<!---End of Alert-->
<div class="container">
    <div class="col-md-12 align-center">
        <div class="row">
            <?php if ($autherror == 1) { ?>
                <p>Unauthorized Access</p> 
            <?php } else if ($autherror == 0) { ?>
                <div class="form-group">
                    <form class="form-group" method="POST" action="<?php echo site_url('admin/reset/password/' . $this->uri->segment(4)); ?>">
                        <div class="form-group">
                            <input id="password" type="password" name="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                        <div class="form-group">
                            <input id="cpassword" type="password" name="cpassword" class="validate">
                            <label for="password">Confirm Password</label>
                        </div>
                        <div class="row">
                            <input type="hidden" name="<?php echo $csrf['name']; ?>" value="<?php echo $csrf['hash']; ?>" />
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </div>
                    </form>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>