<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Create FOIR', 'cssFiles' => array())); ?>

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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/foir_iir/Foir_Control'); ?>">FOIR</a></li>                      
                                <li class="active">FOIR Edit</li> 
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
            <form action="<?php echo site_url('admin/foir_iir/Foir_Control/Create_Foir'); ?>" method="POST">
                <h3>FOIR Creation</h3>
                <div class="row">
                    <div class="col-md-2 col-xs-12"> <h5>Income Source</h5></div>
                    <div class="col-md-4">            
                        <select  name="income_source_id" id="selected_value">
                            <option>Select</option>
                            <option value="R">Resident - Salaried</option>
                            <option value="N">NRI - Salaried</option>
                            <option value="S">Resident - Self Employed</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 col-xs-12"> <h5>Bank</h5></div>
                    <div class="col-md-4">            
                        <select  name="bank_id" id="selected_bank">
                            <option>Select</option>
                            <option value="1">Banks Considering Gross Income</option>
                            <option value="2">Banks Considering Net Income</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-12"> <h5>Liabilities</h5></div>
                    <div class="col-md-4">            
                        <select name="liabilities" id="liabilities">
                            <option value="1">With</option>
                            <option value="2">Without</option>
                        </select>
                    </div>
                </div>          
                <div class="row">
                    <div class="col-md-2 col-xs-12"> From</div> 
                    <div class="col-md-4">  
                        <input type="text" name="from_amount">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-12"> To</div> 
                    <div class="col-md-4">  
                        <input type="text" name="to_amount">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-12"> Percentage</div> 
                    <div class="col-md-4">  
                        <input type="text" name="percentage">
                    </div>
                </div>
                <input type="submit" value="Create" class="btn btn-primary sbutton"/>
                <input type="reset" value="Reset" class="btn btn-primary sbutton"/>
            </form>
        </div>
    </div>
</body>

<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>