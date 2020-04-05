<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Interest Rate View', 'cssFiles' => array())); ?>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css"/>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('admin/sidemenu'); ?>
        </div>
        <div class="right_col" role="main" style="min-height: 1296px;">
            <section class="page-top badmin">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Dashboard'); ?>">Admin</a></li>                              
                                <li class="active"> Interest Rates</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="table-menu">
                <a href="<?php echo site_url('admin/intrest_rate_creation'); ?>" class="btn btn-primary">Create Interest Rate</a>
            </div> 
            <div class="table-content table-responsive">    
                <table id="examples" class="display tvalues" cellspacing="0" width="100%" name="tabel">
                    <thead>
                        <tr>
                            <!--th>ID</th-->
                            <th>Bank Name</th>
                            <th>Interest Rate</th>
                            <!--th>Tenure</th>
                            <th>About</th>
                            <th>Feature</th>
                            <th>title</th>
                            <th>description</th>
                            <th>keyword</th-->
                            <!--th>Created On</th-->
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <!--th>ID</th-->
                            <th>Bank Name</th>
                            <th>Interest Rate</th>
                            <!--th>Tenure</th>
                            <th>About</th>
                            <th>Feature</th>
                            <!--th>title</th>
                            <th>description</th>
                            <th>keyword</th-->
                            <!--th>Created On</th-->
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($data as $value) {
                            ?>
                            <tr>
                                <!--td><?php //echo $value->intrest_rate_id; ?></td-->
                                <td><?php echo $value->bank_name; ?></td>
                                <td><?php echo $value->interest_rate; ?></td>
                                <!--td><?php //echo $value->tenure; ?></td>
                                <td><?php //echo $value->about; ?></td>
                                <td><?php //echo $value->feature; ?></td>
                                <!--td><?php //echo $value->title; ?></td>
                                <td><?php //echo $value->description; ?></td>
                                <td><?php //echo $value->keyword; ?></td-->
                                <!--td><?php //echo $value->created_on; ?></td-->
                                <td><a href="<?php echo site_url('admin/manage_interest_rate/Interest_rate_Control/EDIT_Interest_Rate/' . $value->intrest_rate_id) ?>" class="btn btn-primary">Edit</a></td>
                                <td><a href="<?php echo site_url('admin/manage_interest_rate/Interest_rate_Control/Delete_Interest_Rate/' . $value->intrest_rate_id) ?>" class="btn btn-primary">Delete</a></td>
                            </tr>
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
