<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Process Edit', 'cssFiles' => array())); ?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('admin/sidemenu'); ?>
        </div>
        <div class="right_col" role="main" style="min-height: 1296px;">

            <!--Bug Alerts--->
            <?php if (!empty($error)) { ?>
                <div class="alert alert-danger" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong><?php echo $error; ?> </strong>
                </div>
            <?php } ?> 
            <!---End of Alert-->
             <section class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Dashboard'); ?>" >Home</a></li>                                               
                                 <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/manage_file_status_master/File_Status_Master_Control'); ?>">Process Master</a></li>                      
                                <li class="active">Process Master Edit</li>  
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <form action="<?php echo site_url('admin/master_file_edit'); ?>" method="POST">
                <?php
                $id = $this->uri->segment(5);
                $this->db->select('*');
                $this->db->from('process');
                $this->db->where(array('process_id' => $id));
                $query = $this->db->get();
                $data = $query->result();
                foreach ($data as $value) {  
                }
                ?> 
                <div class="row">
                <div class="col-md-2 col-xs-12 col-sm-12">Process Name</div>
                <div class="col-md-4">
                   <input type="text" name="process_name" value="<?php echo $value->process_name; ?>"> 
                </div>               
                </div>
                <br/>
                <input type="hidden" value="<?php echo $id = $this->uri->segment(5); ?>" name="editing_id"/>
                <input type="submit" value="Editting" class="btn btn-primary sbutton"/>
            </form>
        </div>
    </div>
</body>

<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
