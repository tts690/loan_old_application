<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Personal Loan Edit', 'cssFiles' => array())); ?>

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css"/>

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
                               <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/PersonalLoan/Personal_Loan'); ?>">Personal Loans</a></li>                      
                                <li class="active">Personal Loans Edit</li>                    

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

            <!--content-->
            <form action="<?php echo site_url('admin/edit_personal_loan'); ?>" method="POST">
                <div class="personal-loan">
                    <div class="row">
                        <div class="col-md-2">
                            <h4>Bank Name</h4>
                        </div>
                        <?php
                        $bank_id = $this->uri->segment(6);
                        $this->db->select('*');
                        $this->db->from('bank');
                        $this->db->where(array('bank_id' => $bank_id));
                        $query = $this->db->get();
                        $data = $query->result();
                        foreach ($data as $value) {
                            
                        }
                        ?>

                        <?php
                        $personal_loan_id = $this->uri->segment(5);
                        $this->db->select('*');
                        $this->db->from('personal_loan');
                        $this->db->where(array('personal_loan_id' => $personal_loan_id));
                        $querys = $this->db->get();
                        $datas = $querys->result();
                        foreach ($datas as $values) {
                            
                        }
                        ?>

                        <div class="col-md-4">
                            <input type="text" value="<?php echo $value->bank_name; ?>"/>
                        </div>
                    </div><!--row-->
                    <div class="row">
                        <div class="col-md-3">                      
                            <ul style="list-style: none">
                                <li><h3>Salary</h3></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="salary1" value="<?php echo $values->salary1; ?>"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="salary2" value="<?php echo $values->salary2; ?>"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="salary3" value="<?php echo $values->salary3; ?>"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="salary4" value="<?php echo $values->salary4; ?>"/></div></li>
                            </ul>                        
                        </div>
                        <div class="col-md-3">                      
                            <ul style="list-style: none">
                                <li><h3>Cat A</h3></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_a1" value="<?php echo $values->cat_a1; ?>"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_a2" value="<?php echo $values->cat_a2; ?>"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_a3" value="<?php echo $values->cat_a3; ?>"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_a4" value="<?php echo $values->cat_a4; ?>"/></div></li>
                            </ul>                        
                        </div>
                        <div class="col-md-3">                      
                            <ul style="list-style: none">
                                <li><h3>Cat B</h3></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_b1" value="<?php echo $values->cat_b1; ?>"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_b2" value="<?php echo $values->cat_b2; ?>"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_b3" value="<?php echo $values->cat_b3; ?>"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_b4" value="<?php echo $values->cat_b4; ?>"/></div></li>
                            </ul>                        
                        </div>
                        <div class="col-md-3">                      
                            <ul style="list-style: none">
                                <li><h3>Cat C</h3></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_c1" value="<?php echo $values->cat_c1; ?>"/></div></li>            
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_c2" value="<?php echo $values->cat_c2; ?>"/></div></li>            
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_c3" value="<?php echo $values->cat_c3; ?>"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_c4" value="<?php echo $values->cat_c4; ?>"/></div></li>
                            </ul>                        
                        </div>
                    </div>
                    <div class="divide" style="border: 1px solid #2A3F54">

                    </div>
                    <!--row-->
                    <div class="row">
                        <div class="col-md-3">                      
                            <ul style="list-style: none">
                                <li><h3>Self Employed</h3></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="self_employee1" value="<?php echo $values->self_employee1; ?>"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="self_employee2" value="<?php echo $values->self_employee2; ?>"/></div></li>
                            </ul>                        
                        </div>
                        <div class="col-md-3">                      
                            <ul style="list-style: none">
                                <li><h3>Processing Fee</h3></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="processing_fee1" value="<?php echo $values->processing_fee1; ?>"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="processing_fee2" value="<?php echo $values->processing_fee2; ?>"/></div></li>
                            </ul>                        
                        </div>
                        <div class="col-md-3">                      
                            <ul style="list-style: none">
                                <li><h3>Tenure</h3></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="tenure1" value="<?php echo $values->tenure1; ?>"/></div></li>
                            </ul>                        
                        </div>
                        <div class="col-md-3">                      
                            <ul style="list-style: none">
                                <li><h3>Pre-Closure Charge</h3></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="preclosure_charge1" value="<?php echo $values->preclosure_charge1; ?>"/></div></li>
                            </ul>                        
                        </div>
                    </div>
                    <input type="hidden" value="<?php echo $id = $this->uri->segment(5); ?>" name="editing_id"/>
                    <!--content-->
                    <div class="pbutton">
                        <input type="submit" value="Edit" class="sbutton">
                    </div>
                </div>

            </form>
        </div>
</body>
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var table = $('#examples').DataTable();
        $('a.toggle-vis').on('click', function (e) {
            e.preventDefault();

            var column = table.column($(this).attr('data-column'));
            column.visible(!column.visible());
        });

        $('#examples tfoot th').each(function () {
            var title = $('#examples thead th').eq($(this).index()).text();
            $(this).html('<input tyepe="text" placeholder="Search ' + title + '"/>');
        });
        table.columns().eq(0).each(function (colIdx) {
            $('input', table.column(colIdx).footer()).on('keyup change', function () {
                table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
            });
        });
    });
</script>
