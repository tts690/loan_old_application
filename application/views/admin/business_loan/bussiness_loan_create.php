<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Bussiness Loan Create', 'cssFiles' => array())); ?>

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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Dashboard'); ?>" >Home</a></li>                                               
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/BusinessLoan/Business_Loan'); ?>">Business Loans</a></li>                      
                                <li class="active">Business Loans Create</li>  
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
            <form action="<?php echo site_url('admin/BusinessLoan/Business_Loan/Create_Business_Loan'); ?>" method="POST">
                <div class="personal-loan">
                    <div class="row">
                        <div class="col-md-2">
                            <h4>Select Banks</h4>
                        </div>
                        <?php
                        $this->db->select('*');
                        $this->db->from('bussiness_loan_bank');
                        $query = $this->db->get();
                        $data = $query->result();
                        ?>
                        <div class="col-md-4">
                            <select name="bussiness_loan_bank_id">  
                                <option>Select</option>
                                <?php foreach ($data as $value) { ?>                                
                                    <option value="<?php echo $value->bussiness_loan_bank_id; ?>"><?php echo $value->bank_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div><!--row-->

                    <div class="row">
                        <div class="col-md-4">                      
                            <ul style="list-style: none">
                                <li><h4>TURN OVER</h4></li>
                                <li>  <div class="form-group"><input type="text" class="" id="co_name" value="" name="turn_over"/></div></li>
                            </ul>                        
                        </div>
                        <div class="col-md-4">                      
                            <ul style="list-style: none">
                                <li><h4>Profit</h4></li>
                                <li>  <div class="form-group"><input type="text" class="" id="co_name" value="" name="profit"/></div></li>
                            </ul>                        
                        </div>
                        <div class="col-md-4">                      
                            <ul style="list-style: none">
                                <li><h4>LOAN AMT</h4></li>
                                <li>  <div class="form-group"><input type="text" class="" id="co_name" value="" name="loan_amount"/></div></li>
                            </ul>                        
                        </div>

                    </div>

                    <!--row-->
                    <div class="row">
                        <div class="col-md-4">                      
                            <ul style="list-style: none">
                                <li><h4>IRR</h4></li>
                                <li>  <div class="form-group"><input type="text" class="" id="co_name" value="" name="irr"/></div></li>
                            </ul>                        
                        </div>

                        <div class="col-md-4">                      
                            <ul style="list-style: none">
                                <li> <h4>MINIMUM EXP</h4></li>
                                <li>  <div class="form-group"><input type="text" class="" id="co_name" value="" name="min_exp"/></div></li>
                            </ul>                        
                        </div>
                        <div class="col-md-4">                      
                            <ul style="list-style: none">
                                <li> <h4>AGE</h4></li>
                                <li>  <div class="form-group"><input type="text" class="" id="co_name" value="" name="age"/></div></li>
                            </ul>                        
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4">                      
                            <ul style="list-style: none">
                                <li><h4>OWN HOUSE / OFFICE</h4></li>
                                <li>  <textarea class="form-control" rows="5" col="3" id="comment" name="own_house_office"></textarea></li>
                            </ul>                        
                        </div>
                        <div class="col-md-4">                      
                            <ul style="list-style: none">
                                <li> <h4>INSURANCE</h4></li>
                                <li>  <textarea class="form-control" rows="5" col="3" id="comment" name="insurance"></textarea></li>
                            </ul>                        
                        </div>
                        <div class="col-md-4">                      
                            <ul style="list-style: none">
                                <li> <h4>PF</h4></li>
                                <li>  <textarea class="form-control" rows="5" col="3" id="comment" name="pf"></textarea></li>
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