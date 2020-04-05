<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Group Mail Upload', 'cssFiles' => array())); ?>
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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Dashboard'); ?>" style="color:#CCCCCC">Home</a></li>                                               
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/mail_group_setup'); ?>">Mail Group</a></li>                      
                                <li class="active">Multiple File Upload</li>  
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
            <div class="col-md-6 multi-mail-upload">
                <form action="<?php echo site_url('admin/group_multiuploading'); ?>" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                         <div class="row">
                        <div class="col-md-2">
                            <label for="exampleInputFile">File input</label>
                        </div>
                        <div class="col-md-10"> <input id="exampleInputFile" type="file" name="userfile">
                            <p class="help-block">Upload Excel File Here.</p></div>
                         </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info sbutton pull-r">Submit</button>
                        <button type="reset" class="btn btn-info sbutton pught">Reset</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</body>

<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
