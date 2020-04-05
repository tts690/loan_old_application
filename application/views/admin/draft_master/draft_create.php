<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Draft Create', 'cssFiles' => array())); ?>
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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Dashboard'); ?>">Home</a></li>                                               
                                 <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/manage_draft/Draft_Control'); ?>">Draft Master</a></li>                      
                                <li class="active">Draft Create</li>  
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
            <form action="<?php echo site_url('admin/draft_category'); ?>" method="POST">
                    <div class="col-md-2 col-xs-12">Draft Category Name</div>
                <div class="col-md-4">            
                    <input type="text" name="draft_category_name"/>
                </div><br/><br/><br/>
                <input type="submit" value="Submit" class="btn btn-primary sbutton"/>
                <input type="reset" value="Reset" class="btn btn-primary sbutton"/>
            </form>
        </div>
    </div>
</body>
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
