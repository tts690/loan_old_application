<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Loan Create', 'cssFiles' => array())); ?>


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
                                <li class="active">Loan Create</li>  
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

            <form action="<?php echo site_url('admin/create_manage_loan'); ?>" method="POST">
                <div class="row">
                    <div class="col-md-2"> Loan Code</div>
                    <div class="col-md-4">  <input type="text" name="LoanCode">
                    </div>
                </div>
             
                <div class="row">
                    <div class="col-md-2">Loan Name</div>
                    <div class="col-md-4">  <input type="text" name="LoanName">
                    </div>
                </div>
                <br>
             
                <input type="submit" value="Create" class="btn btn-primary sbutton"/>
                <input type="reset" value="Reset" class="btn btn-primary sbutton"/>
            </form>

        </div>
    </div>
</body>
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>