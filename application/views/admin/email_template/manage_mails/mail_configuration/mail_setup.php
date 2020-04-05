<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Mail Setup', 'cssFiles' => array())); ?>

<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<!---End of Alert-->

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('admin/sidemenu'); ?>
        </div>
        <div class="right_col" role="main" style="min-height: 1296px;">
          
             <section class="page-top badmin">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Dashboard'); ?>">Admin</a></li>   
                         <li>Manage Mails</li>                    
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
<?php $config = $this->config; ?>

            <form class="form-horizontal" action="<?php echo site_url('admin/mail_setup'); ?>" method="POST">
                <div class="box-body">
                    <!--div class="box-header with-border">
                        <h2 class="box-title">Mail Configuration</h2>
                    </div-->
                    <div class="col-md-12 mail-setup ">          
                        <div class="">
                            <div class="col-md-6">     
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 col-xs-12 col-sm-12 control-label">Protocol &nbsp; </label>
                                    <div class="col-sm-8">
                                        <input class="form-control"  type="text" name="protocal" value="<?php echo $config->config['mail_config']['protocol'];?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-4 col-xs-12 col-sm-12 control-label">Charset &nbsp;  </label>
                                    <div class="col-sm-8">
                                        <input class="form-control"  type="text" name="charset" value="<?php echo $config->config['mail_config']['charset'];?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-4 col-xs-12 col-sm-12 control-label">Smtp Host&nbsp; </label>
                                    <div class="col-sm-8">
                                        <input class="form-control"  type="text" name="smtp_host" value="<?php echo $config->config['mail_config']['smtp_host'];?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-4 col-xs-12 col-sm-12 control-label">Smtp User&nbsp; </label>
                                    <div class="col-sm-8">
                                        <input class="form-control"  type="email" name="smtp_user" value="<?php echo $config->config['mail_config']['smtp_user'];?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">     
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-4 col-xs-12 col-sm-12 control-label">Smtp Password&nbsp; </label>
                                    <div class="col-sm-8">
                                        <input class="form-control"  type="password" name="smtp_password" value="<?php echo $config->config['mail_config']['smtp_pass'];?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-4 col-xs-12 col-sm-12 control-label">Smtp Port&nbsp; </label>
                                    <div class="col-sm-8">
                                        <input class="form-control"  type="number" name="smtp_port" value="<?php echo $config->config['mail_config']['smtp_port'];?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-4 col-xs-12 col-sm-12 control-label">Smtp Timeout&nbsp; </label>
                                    <div class="col-sm-8">
                                        <input class="form-control"  type="number" name="smtp_timeout" value="<?php echo $config->config['mail_config']['smtp_timeout'];?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-4 col-xs-12 col-sm-12 control-label">Web Admin Email ID&nbsp; </label>
                                    <div class="col-sm-8">
                                        <input class="form-control"  type="email" name="web_email" value="<?php echo $config->config['web_admin_email_id'];?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </form>
    </div>
</body>


<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>