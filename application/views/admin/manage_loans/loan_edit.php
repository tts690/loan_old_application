<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Loan Edit', 'cssFiles' => array())); ?>

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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/manage_loans/Loan_Control'); ?>">Manage Loans</a></li>                      
                                <li class="active">Loan Edit</li>  
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
            <form action="<?php echo site_url('admin/edit_loan'); ?>" method="POST">
                <?php
                $id = $this->uri->segment(5);
                $this->db->select('*');
                $this->db->from('sr_loan');
                $this->db->where(array('id' => $id));
                $query = $this->db->get();
                $data = $query->result();
                foreach ($data as $value) {
                    
                }
                ?>
                <div class="row">
                    <div class="col-md-2">Loan Code</div>
                    <div class="col-md-4"> 
                        <input type="text" name="LoanCode" value="<?php echo $value->LoanCode; ?>">
                    </div>
                </div>
              
                <div class="row">
                    <div class="col-md-2">Loan Name</div>
                    <div class="col-md-4">  <input type="text" name="LoanName" value="<?php echo $value->LoanName; ?>">
                    </div>
                </div>
               
                <input type="hidden" value="<?php echo $id = $this->uri->segment(5); ?>" name="editing_id"/>
                <input type="submit" value="Editting" class="btn btn-primary sbutton"/>
            </form>
        </div>
    </div>
</body>

<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
