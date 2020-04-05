<?php $this->load->view('dsa/components/page_head', array('pageTitle' => 'Search', 'cssFiles' => array())); ?>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css"/>
<?php $staticContent = base_url(); ?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('dsa/sidemenu'); ?>
        </div>
        <div class="right_col" role="main" style="min-height: 1296px;">
            <!--content-->

            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
            <section class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('dsa/Dashboard'); ?>" >Home</a></li>                                               
                                <li class="active">Disbursement</li> 
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
            <div class="table-content table-responsive">    
                <table id="examples" class="display tvalues" cellspacing="0" width="100%" name="tabel">
                    <thead>
                        <tr>
                            <th>URC No</th>                            
                            <th>Applicant Name</th>
                            <th>Co-Applicant Name</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Loan Amount</th>
                            <th>City</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>URC No</th>                            
                            <th>Applicant Name</th>
                            <th>Co-Applicant Name</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Loan Amount</th>
                            <th>City(Area)</th>
                            <th>Edit</th>                            
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($data as $value) { ?>
                            <tr>
                                <td><?php echo $value->urc_no; ?></td>
                                <td><?php echo $value->applicant_name; ?></td>
                                <td><?php echo $value->co_applicant_name; ?></td>
                                <td><?php echo $value->a_office_phone; ?></td>
                                <td><?php echo $value->a_personal_email; ?></td>
                                <td><?php echo $value->loan_amount; ?></td>
                                <td><?php echo $value->a_city; ?></td>
                                <td><a href="<?php echo site_url('dsa/Search/EDIT_file/' . $value->generate_file_id) ?>" class="btn btn-primary">Edit</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>



            <!--content-->
        </div>
    </div>
</body>

<?php $this->load->view('dsa/components/page_tail', array('jsFiles' => array())); ?>
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