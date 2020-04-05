<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Employee View', 'cssFiles' => array())); ?>
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
                                <li><a href="<?php echo site_url('admin/Dashboard'); ?>" style="color:black">Admin</a></li>
                                <li class="active">Manage Employee</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="table-menu">
                <a href="<?php echo site_url('admin/create_employee'); ?>" class="btn btn-primary">Create Manage Employee</a>
            </div> 
            <div class="table-content table-responsive">    
                <table id="examples" class="display tvalues" cellspacing="0" width="100%" name="tabel">
                    <thead>
                        <tr>
                            <th>Employee Name</th>
                            <!--th>Father Name</th-->
                            <th>DOB</th>
                            <th>Permanent Address</th>
                            <th>Present Address</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>User Name</th>
                            <th>Status</th>
                            <!--th>Created On</th-->
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Employee Name</th>
                            <!--th>Father Name</th-->
                            <th>DOB</th>
                            <th>Permanent Address</th>
                            <th>Present Address</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>User Name</th>
                            <th>Status</th>
                            <!--th>Created On</th-->
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($data as $value) { ?>
                            <tr>
                                <td><?php echo $value->emp_name; ?></td>
                                <!--td><?php //echo $value->father_name; ?></td-->
                                <td><?php echo $value->dob; ?></td>
                                <td><?php echo $value->parmenent_address; ?></td>
                                <td><?php echo $value->present_address; ?></td>
                                <td><?php echo $value->mobile; ?></td>
                                <td><?php echo $value->email; ?></td>
                                <td><?php echo $value->username; ?></td>
                                <td><?php
                                    $status = $value->status;
                                    switch ($status) {
                                        case $value->status = 1:
                                            echo "Active";
                                            break;
                                        default:
                                            echo "InActive";
                                    }
                                    ?></td>
                                <!--td><?php //echo $value->created_on; ?></td-->
                                <td><a href="<?php echo site_url('admin/employee/Employee_Control/EDIT_Employee/' . $value->sr_employee_id) ?>" class="btn btn-primary">Edit</a></td>
                                <td><a href="<?php echo site_url('admin/employee/Employee_Control/Delete_Employee/' . $value->sr_employee_id) ?>" class="btn btn-primary">Delete</a></td>
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
