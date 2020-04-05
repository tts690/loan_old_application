<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Bussiness Loan View', 'cssFiles' => array())); ?>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css"/>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('admin/sidemenu'); ?>
        </div>
        <div class="right_col" role="main" style="min-height: 1296px;">

            <!--Bug Alerts--->
            <?php if (!empty($error)) { ?>
                <div class="alert alert-success" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong><?php echo $error; ?> </strong>
                </div>
            <?php } ?> 
            <!---End of Alert-->

            <section class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Dashboard'); ?>">Home</a></li>                                               
                                <li class="active">Business Loans</li>                      

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--content-->
            <div class="table-menu">
                <a href="<?php echo site_url('admin/BusinessLoan/Business_Loan_Bank/Create_Bank'); ?>" class="btn btn-primary">Bank Creation</a>             
            </div> 
            <div class="table-content table-responsive">    
                <table id="examples" class="display tvalues" cellspacing="0" width="100%" name="tabel">
                    <thead>
                        <tr>
                            <th>Bank Name</th>                      
                            <th>Created On</th>                      
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                           <th>Bank Name</th>                      
                            <th>Created On</th>                      
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        if ($data) {
                            foreach ($data as $value) { ?>
                                <tr>
                                    <td><?php echo ucfirst($value->bank_name); ?></td>
                                    <td><?php echo $value->created_on; ?></td>
                                    <td><a href="<?php echo site_url('admin/BusinessLoan/Business_Loan_Bank/EDIT_Bank/' . $value->bussiness_loan_bank_id . "/" . $value->bank_id) ?>" class="btn btn-primary">Edit</a></td>
                                    <td><a href="<?php echo site_url('admin/BusinessLoan/Business_Loan_Bank/Delete_bank/' . $value->bussiness_loan_bank_id . "/" . $value->bank_id) ?>" class="btn btn-primary">Delete</a></td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
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
