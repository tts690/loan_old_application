<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Forgot Password', 'cssFiles' => array())); ?>


<section class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Dashboard'); ?>" >Home</a></li>                                               
                    <li class="active">Forgot Password</li>  
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Bug Alerts--->
<?php if (!empty($error)) { ?>
    <div class="alert alert-danger" id="success-alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong><?php echo $error; ?> </strong>
    </div>
<?php } ?>   
<!---End of Alert-->
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 center-block">
        <?php if ($forgotStatus !== 'SUCCESS') { ?>
            <form class="col s12" method="POST" action="<?php echo site_url('admin/forgot'); ?>">
                <h5> Forgot Password</h5>
                <div class="form-group">
                    <input id="email" type="email" name="email" class="validate">
                    <label for="email">Email</label>
                </div>
                <div class="row">
                    <input type="hidden" name="<?php echo $csrf['name']; ?>" value="<?php echo $csrf['hash']; ?>" />
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        <?php } else { ?>
            <p> Please check your mail for further details. </p>
        <?php } ?>
        <div class="col-md-3"></div>
    </div>
</div>
<br/>
<?php
//echo anchor('hauth/login/LinkedIn','Login With LinkedIn.').'<br />';
//echo anchor('hauth/login/Google','Login With Google.').'<br />';
$this->load->view('admin/components/page_tail', array('jsFiles' => array()));
?>