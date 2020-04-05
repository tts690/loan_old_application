<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Create Documents', 'cssFiles' => array())); ?>
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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/manage_documents/Document_Control'); ?>">Manage Documents</a></li>                      
                                <li class="active">Document Create</li>  
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
            <form action="<?php echo site_url('admin/create_documents'); ?>" method="POST">
                <div class="row">
                    <div class="col-md-2 col-xs-12"> <h5>Documents For</h5></div>
                    <div class="col-md-4">            
                        <select name="income_source">
                            <option value="R">Resident - Salaried</option>
                            <option value="N">NRI - Salaried</option>
                            <option value="S">Resident - Self Employed</option>
                        </select>
                    </div>
                </div>
                 <br>
                <div class="row">
                    <div class="col-md-2 col-xs-12"> Documents Code</div> <div class="col-md-4"> <input type="text" name="doc_code"></div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-2 col-xs-12"> Documents Name </div> <div class="col-md-4"><input type="text" name="doc_name"></div>
                </div>
                <br>
                <br>
                <input type="submit" value="Create" class="btn btn-primary sbutton"/>
                <input type="reset" value="Reset" class="btn btn-primary sbutton"/>
            </form>
        </div>
    </div>
</body>
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
