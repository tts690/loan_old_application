<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Group Create', 'cssFiles' => array())); ?>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'> 

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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/mail_group_setup'); ?>">Mail Group</a></li>                      
                                <li class="active">Mail Group Create</li>  
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
            <!-- -->
            <form action="<?php echo site_url('admin/creation_groupping'); ?>" method="POST">

                <div class="form-group">
                    <div class="col-md-8 center-block create-group-block">
                        <div class="col-md-2 col-xs-12">
                            <label for="group" class="control-label">Group</label>
                        </div>
                        <div class="col-md-8">
                            <input class="" placeholder="Group Name" type="text" name="group_name">
                        </div>
                        <div class="col-md-2 box-footer">
                            <button type="submit" class="btn btn-info sbutton pull-right">Submit</button>
                        </div>
                    </div>
                </div>

            </form>   
            <div class="table-content table-responsive">
                <table id="examples" class="display tvalues" cellspacing="0" width="100%" name="tabel">
                    <thead>
                        <tr>
                            <!--th>Group ID</th-->
                            <th>Group Name</th>
                            <!--th>Group Created</th-->
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <!--th>Group ID</th-->
                            <th>Group Name</th>
                            <!--th>Group Created</th-->
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($data as $value) { ?>
                            <tr>
                                <!--td><?php //echo $value->group_id;  ?></td-->
                                <td><?php echo $value->group_name; ?></td>
                                <!--td><?php //echo $value->group_created;  ?></td-->
                                <td><a href="<?php echo site_url('admin/manage_mails/mail_group/Mail_Group_Creation/edit/' . $value->group_id) ?>" class="btn btn-primary">Edit</a></td>
                                <td><a href="<?php echo site_url('admin/manage_mails/mail_group/Mail_Group_Creation/delete/' . $value->group_id) ?>" class="btn btn-primary">Delete</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>    
</body>
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>       
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