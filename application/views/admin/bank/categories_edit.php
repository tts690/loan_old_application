<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Category Edit', 'cssFiles' => array())); ?>
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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Dashboard'); ?>">Home</a></li>                                               
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/bank/Bank_Creation'); ?>">Bank</a></li>                      
                                <li class="active">Category Edit</li>  
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--Bug Alerts--->     
            <?php if (!empty($error)) { ?>
                <div class="alert alert-success" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong><?php echo $error; ?> </strong>
                </div>
            <?php } ?>  
            <!---End of Alert-->

            <?php
            $id = $this->uri->segment(5);
            $this->db->select('*');
            $this->db->from('categories');
            $this->db->where(array('categories.id' => $id));
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                $data = $query->result();
                //print_r($data);
                //echo $this->db->last_query();
                //die();
                ?>
                <form action="<?php echo site_url('admin/edit_categories'); ?>" method="POST">

                    <div class="row">
                        <div class="col-md-2 col-xs-12 col-sm-12">Categories Name</div>
                        <div class="col-md-4">
                            <?php foreach ($data as $value) { ?>
                                <input class="form-control" type="text" name="categories_name" value="<?php echo $value->categories_name; ?>">
                            <?php } ?>
                        </div>
                    </div>
                    <br>

                    <input type="hidden" value="<?php echo $id = $this->uri->segment(5); ?>" name="editing_id"/>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info sbutton">Submit</button>
                    </div>
                </form>

            <?php } ?>

        </div>
    </div>
</body>
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
