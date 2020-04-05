<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Offer Edit', 'cssFiles' => array())); ?>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
<!--Bug Alerts--->
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
                                 <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Offers'); ?>">Offers</a></li>                      
                                <li class="active">Offers Edit</li>  
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
              <?php if (!empty($error)) { ?>
                <div class="alert alert-danger" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong><?php echo $error; ?> </strong>
                </div>
            <?php } ?> 
            <!---End of Alert-->
            <form action="<?php echo site_url('admin/Offers/EDIT_Offer'); ?>" method="POST">
                <?php
                $id = $this->uri->segment(4);
                $this->db->select('*');
                $this->db->from('offer');
                $this->db->where(array('offer_id' => $id));
                $query = $this->db->get();
                $data1 = $query->result();
                foreach ($data1 as $value1) {
                    
                }
                ?>
                <div class="row">            
               <div class="col-md-2 col-xs-12">
                   Offer Name</div> 
                <div class="col-md-4"><input type="text" name="offer_name" value="<?php echo $value1->offer_name; ?>"></div>
                </div>
                <br>
                <input type="hidden" value="<?php echo $id = $this->uri->segment(4); ?>" name="editing_id"/>
                <input type="submit" value="Update" class="btn btn-primary sbutton"/>
            </form>
        </div>
    </div
</body>

<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>