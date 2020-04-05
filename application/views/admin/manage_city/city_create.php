<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'City Create', 'cssFiles' => array())); ?>
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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/manage_states/City_Control'); ?>">Manage City</a></li>                      
                                <li class="active">City Create</li>  
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
            <form action="<?php echo site_url('admin/create_city'); ?>" method="POST">
                <?php
                $this->db->select('*');
                $this->db->from('sr_state');
                $query = $this->db->get();
                $data = $query->result();
                ?>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-2 col-xs-12 col-sm-12">State Name</div>
                        <div class="col-md-4">  
                            <select id="selecting_bank_id" name="state_id">
                                <?php foreach ($data as $value) { ?>
                                    <option value="<?php echo $value->sr_state_id; ?>"><?php echo $value->state_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>  
                </div>  
                
                <div class="row">
                    <div class="col-md-2 col-xs-12 col-sm-12"> City Name</div> 
                    <div class="col-md-4">                          
                        <input type="text" name="City_Name">
                    </div>
                </div>
              
                <div class="row col-md-10 center-block">
                    <input type="submit" value="Create" class="btn btn-primary sbutton "/>
                     <input type="reset" value="Reset" class="btn btn-primary sbutton "/>
                </div>
            </form>

        </div>
    </div>
</body>
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
<script type="text/javascript" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>