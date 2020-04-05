<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'FOIR View', 'cssFiles' => array())); ?>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css"/>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('admin/sidemenu'); ?>
        </div>
        <div class="right_col" role="main">
            <section class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                              <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Dashboard'); ?>" >Home</a></li>                                               
                                <li class="active">FOIR</li>                   

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="table-menu">
                <a href="<?php echo site_url('admin/foir_iir/Foir_Control/Create_Foir'); ?>" class="btn btn-primary">Create FOIR</a>
            </div> 

            <div class="table-content table-responsive">    
                <table id="examples" class="display tvalues" cellspacing="0" width="100%" name="tabel">
                    <thead>
                        <tr>               
                            <th>Bank</th>
                            <th>Income Source</th>
                            <th>Liabilities</th>                         
                            <th>From</th>
                            <th>To</th>
                            <th>Percentage</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>                        
                            <th>Bank</th>
                            <th>Income Source</th>
                            <th>Liabilities</th>                         
                            <th>From</th>
                            <th>To</th>
                            <th>Percentage</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($data as $value) { ?>
                            <tr>
                                <td>
                                    <?php
                                     if ($value->bank_id == "1") {
                                        echo "Banks Considering Gross Income";
                                    } else {
                                        echo "Banks Considering Net Income";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if ($value->income_source_id == "R") {
                                        echo "Resident - Salaried";
                                    } else if ($value->income_source_id == "N") {
                                        echo "NRI - Salaried";
                                    } else {
                                        echo "Resident - Self Employed";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                     if ($value->liabilities == "1") {
                                        echo "With";
                                    } else {
                                        echo "Without";
                                    }
                                    ?>
                                </td>
                                <td><?php echo $value->from; ?></td>
                                <td><?php echo $value->to; ?></td>
                                <td><?php echo $value->percentage; ?></td>
                                <td><a href="<?php echo site_url('admin/foir_iir/Foir_Control/EDIT_Foir/' . $value->foir_setting_id) ?>" class="btn btn-primary">Edit</a></td>
                                <td><a href="<?php echo site_url('admin/foir_iir/Foir_Control/Delete_Foir/' . $value->foir_setting_id) ?>" class="btn btn-primary">Delete</a></td>
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
