<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Edit', 'cssFiles' => array())); ?>
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
            <!--Bug Alerts--->     
            <?php if (!empty($error)) { ?>
                <div class="alert alert-danger" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong><?php echo $error; ?> </strong>
                </div>
            <?php } ?>  
            <!---End of Alert-->
            <?php
            $id = $this->uri->segment(6);
            $this->db->select('*');
            $this->db->from('group_system');
            $this->db->join('email', 'email.group_id = group_system.group_id');
            $this->db->where(array('email.id' => $id));
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                $data = $query->result();
                //print_r($data);
                //echo $this->db->last_query();
                //die();*/
                ?>
                <form action="<?php echo site_url('admin/group_setup_edit'); ?>" method="POST">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4"  ><label for="groupname">Group Name</label></div>
                            <div class="col-md-6">  <select class="form-control col-sm-6" id="sel1" name="group_name">
                                    <!--option>Select Group Name</option-->
                                    <?php foreach ($data as $value) { ?>
                                        <option value="<?php echo $value->group_name ?>"><?php echo $value->group_name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4" > <label for="email">Email</label>     </div>            
                            <div class="col-md-6">
                                <input class="form-control" placeholder="Email" type="email" name="email" value="<?php echo $value->email; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" value="<?php echo $id = $this->uri->segment(6); ?>" name="editing_id"/>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info  sbutton">Submit</button>
                    </div>
                </form>
            <?php } ?>

        </div>
</body>
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
