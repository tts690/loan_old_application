<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Personal Loan Create', 'cssFiles' => array())); ?>

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
                                <li><a href="<?php echo site_url('admin/Dashboard'); ?>" style="color:#CCCCCC">Home</a></li>                                               
                               <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/PersonalLoan/Personal_Loan'); ?>">Personal Loans</a></li>                      
                                <li class="active">Personal Loans Create</li>  
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
            <form action="<?php echo site_url('admin/personal_loan_creation');?>" method="POST">
                <div class="personal-loan">
                    <div class="row">
                        <div class="col-md-2">
                            <h4>Select Banks</h4>
                        </div>
                        <?php
                        $this->db->select('*');
                        $this->db->from('bank');
                        $query = $this->db->get();
                        $data = $query->result();
                        ?>
                        <div class="col-md-4">
                            <select name="bank_id">  
                                <option>Select</option>
                                <?php foreach ($data as $value) { ?>                                
                                <option value="<?php echo $value->bank_id; ?>"><?php echo $value->bank_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div><!--row-->
                    <div class="row">
                        <div class="col-md-3">                      
                            <ul style="list-style: none">
                                <li><h3>Salary</h3></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="salary1"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="salary2"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="salary3"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="salary4"/></div></li>
                            </ul>                        
                        </div>
                        <div class="col-md-3">                      
                            <ul style="list-style: none">
                                <li><h3>Cat A</h3></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_a1"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_a2"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_a3"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_a4"/></div></li>
                            </ul>                        
                        </div>
                        <div class="col-md-3">                      
                            <ul style="list-style: none">
                                <li><h3>Cat B</h3></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_b1"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_b2"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_b3"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_b4"/></div></li>
                            </ul>                        
                        </div>
                        <div class="col-md-3">                      
                            <ul style="list-style: none">
                                <li><h3>Cat C</h3></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_c1"/></div></li>            
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_c2"/></div></li>            
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_c3"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="cat_c4"/></div></li>
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
                                <li><div class="form-group"><input type="text" id="co_name" name="self_employee1"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="self_employee2"/></div></li>
                            </ul>                        
                        </div>
                        <div class="col-md-3">                      
                            <ul style="list-style: none">
                                <li><h3>Processing Fee</h3></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="processing_fee1"/></div></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="processing_fee2"/></div></li>
                            </ul>                        
                        </div>
                        <div class="col-md-3">                      
                            <ul style="list-style: none">
                                <li><h3>Tenure</h3></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="tenure1"/></div></li>
                            </ul>                        
                        </div>
                        <div class="col-md-3">                      
                            <ul style="list-style: none">
                                <li><h3>Preclosure Charge</h3></li>
                                <li><div class="form-group"><input type="text" id="co_name" name="preclosure_charge1"/></div></li>
                            </ul>                        
                        </div>
                    </div>

                    <!--content-->
                    <div class="pbutton">
                        <ul>
                        <li> <input type="submit" value="Create" class="sbutton"></li>
                        <li> <input type="reset" value="Reset" class="sbutton"></li>
                        </ul>
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
