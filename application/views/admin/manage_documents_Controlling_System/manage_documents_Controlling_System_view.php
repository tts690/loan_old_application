<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Documents Controlling View', 'cssFiles' => array())); ?>
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
                        <li class="breadcrumbtxt"><a href="<?php echo $staticContent; ?>" style="color:black">Admin</a></li>                           
                        <li class="active"> Manage Document Controlling system</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
            
            
            <div class="table-menu">
                <a href="<?php echo site_url('admin/manage_document_create'); ?>" class="btn btn-primary">Create Manage Documents</a>
                 <a href="<?php echo site_url('admin/document_create'); ?>" class="btn btn-primary">Documents Controlling System</a>
            </div> 
            <div class="table-content table-responsive">    
                <table id="examples" class="display tvalues" cellspacing="0" width="100%" name="tabel">
                    <thead>
                        <tr>
                            <!--th>ID</th-->
                            <th>Documents Code</th>
                            <th>Documents Name</th>
                            <th>Income Source</th>
                            <!--th>Created On</th-->
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <!--th>ID</th-->
                            <th>Documents Code</th>
                            <th>Documents Name</th>
                            <th>Income Source</th>
                            <!--th>Created On</th-->
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($data as $value) { ?>
                            <tr>
                                <!--td><?php //echo $value->id; ?></td-->
                                <td><?php echo $value->doc_code; ?></td>
                                <td><?php echo $value->doc_name; ?></td>
                                <td><?php
                                    $income_source = $value->income_source;

                                    switch ($income_source) {
                                        case $income_source = "R":
                                            echo "Resident - Salaried";
                                            break;
                                        case $income_source = "N":
                                            echo "NRI - Salaried";
                                            break;
                                        default:
                                            echo "Resident - Self Employed";
                                    }
                                    ?></td>
                                <!--td><?php //echo $value->created_on; ?></td-->
                                <td><a href="<?php echo site_url('admin/manage_documents/Document_Control/EDIT_Documents/' . $value->id) ?>" class="btn btn-primary">Edit</a></td>
                                <td><a href="<?php echo site_url('admin/manage_documents/Document_Control/Delete_Documents/' . $value->id) ?>" class="btn btn-primary">Delete</a></td>
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

<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
