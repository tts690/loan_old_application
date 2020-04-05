<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Personal Loan View', 'cssFiles' => array())); ?>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css"/>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('admin/sidemenu'); ?>
        </div>
        <div class="right_col" role="main" style="min-height: 1296px;">

            <!--Bug Alerts--->
            <?php if (!empty($error)) { ?>
                <div class="alert alert-danger" id="success-alert">
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
                                <li class="active">Personal Loans</li>                      

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--content-->
            <div class="table-menu">
                <a href="<?php echo site_url('admin/personal_loan_create'); ?>" class="btn btn-primary">Personal Loan Create</a>               
            </div> 

            <div class="table-content table-responsive">    
                <table id="examples" class="display tvalues" cellspacing="0" width="100%" name="tabel">
                    <thead>
                        <tr>
                            <th>Bank</th>                      
                            <th>Self Employed</th>                        

                            <th>Processing Fee</th>

                            <th>Tenure</th>                               
                            <th>Pre-Closure</th>   
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Bank</th>                      
                            <th>Self Employed</th>                        

                            <th>Processing Fee</th>

                            <th>Tenure</th>                               
                            <th>Pre-Closure</th>   
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        if ($data) {
                            foreach ($data as $value) { ?>
                                <tr>
                                    <td><?php echo $value->bank_name; ?></td>
                                    <td><?php echo $value->self_employee1; ?></td>

                                    <td><?php echo $value->processing_fee1; ?></td>

                                    <td><?php echo $value->tenure1; ?></td>
                                    <td><?php echo $value->preclosure_charge1; ?></td>
                                    <td><a href="<?php echo site_url('admin/PersonalLoan/Personal_Loan/EDIT_Personal_loan/' . $value->personal_loan_id . "/" . $value->bank_id) ?>" class="btn btn-primary">Edit</a></td>
                                    <td><a href="<?php echo site_url('admin/PersonalLoan/Personal_Loan/Delete_Personal_Loan/' . $value->personal_loan_id . "/" . $value->bank_id) ?>" class="btn btn-primary">Delete</a></td>
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
