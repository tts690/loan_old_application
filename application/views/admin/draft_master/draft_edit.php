<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Draft Edit', 'cssFiles' => array())); ?>

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
                                <li class="active">Draft Edit</li>  
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

            <form action="<?php echo site_url('admin/manage_draft/Draft_Control/EDIT_Draft'); ?>" method="POST">
                <?php
                $sr_draft_id = $this->uri->segment(5);
                $this->db->select('*');
                $this->db->from('sr_draft');
                $this->db->where(array('sr_draft_id' => $sr_draft_id));
                $query = $this->db->get();
                $data = $query->result();
                foreach ($data as $value) {
                    
                }
                ?>
                <?php
                $sr_draft_settings_id = $this->uri->segment(6);
                $this->db->select('*');
                $this->db->from('sr_draft_settings');
                $this->db->where(array('sr_draft_settings_id' => $sr_draft_settings_id));
                $query = $this->db->get();
                $datas = $query->result();
                foreach ($datas as $values) {
                    
                }
                ?>
                <div class="row">
                    <div class="col-md-2 col-xs-12">Draft Category</div><div class="col-md-4"> <input type="text" name="draft_category_name" value="<?php echo $value->draft_category_name; ?>"><br/><br/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-12"> Document Title</div>
                    <div class="col-md-4">  <input type="text" name="draft_agreement_title" value="<?php echo $values->draft_agreement_title; ?>"></div>
                </div>
                <br>
                <input type="hidden" value="<?php echo $sr_draft_id = $this->uri->segment(5); ?>" name="sr_draft_id"/>
                <input type="hidden" value="<?php echo $sr_draft_settings_id = $this->uri->segment(6); ?>" name="sr_draft_settings_id"/>
                <input type="submit" value="Editting" class="btn btn-primary sbutton"/>
            </form>
        </div>
    </div>
</body>

<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
