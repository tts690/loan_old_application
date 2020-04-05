<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Mail Group Edit', 'cssFiles' => array())); ?>
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
                                <li class="active">Mail Group Edit</li>  
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
            <form action="<?php echo site_url('admin/group_creation_edit'); ?>" method="POST">  

                <div class="form-group">
                    <div class="col-md-2"> <label for="email" class="">Group Name</label></div>
                    <div class="col-md-4">
                        <input class="" placeholder="Group Name" type="text" name="groupname" value="<?php echo $data->group_name; ?>">
                    </div>
                </div>
                <br>

                <input type="hidden" value="<?php echo $id = $this->uri->segment(6); ?>" name="editing_group_id"/>

                <!--div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Group ID</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="Group ID" type="text" name="groupid" value="<?php echo $data->group_id; ?>">
                    </div>
                </div-->

                <div class="box-footer">
                    <button type="submit" class="btn btn-info sbutton">Submit</button>
                    <button type="reset" class="btn btn-info sbutton">Reset</button>
                </div>
            </form>
        </div>
    </div>
</body>
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>