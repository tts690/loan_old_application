<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'File Create', 'cssFiles' => array())); ?>
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
                                 <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/file_process_status/File_Process_Status_Control'); ?>">File Process</a></li>                      
                                <li class="active">File Process Status Create</li>  
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

            <form action="<?php echo site_url('admin/create_file'); ?>" method="POST">
                <div class="row">
                <div class="col-md-2 col-xs-12 col-sm-12"> File Status</div>
                <div class="col-md-4">            
                    <input type="text" name="file_name"/>
                </div>
                </div>
            
                <input type="submit" value="Save" class="btn btn-primary sbutton"/>
                  <input type="reset" value="Reset" class="btn btn-primary sbutton"/>
               
            </form>
        </div>
    </div>
</body>
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
