<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Mail Group Setup', 'cssFiles' => array())); ?>
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
                               <li class="active">Mail Group Setup</li>  
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
            <!-- content-->

            <form class="form-horizontal" action="<?php echo site_url('admin/group_mail'); ?>" method="POST">
                <div class="box-body">
                    <div class="box-header with-border">
                        <!--h2 class="box-title">Add To The Group</h2-->
                    </div>
                    <div class="col-md-6 group-setup">
                    <div class="form-group">
                       <label for="email" class="col-md-3">Email</label>
                        <div class="col-md-4">
                            <input class="" placeholder="Email" type="email" name="email">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3"><label for="groupname" class="control-label">Group Name</label></div>
                        <div class="col-md-4">
                            <select class="" id="sel1" name="groupname">
                                <option>Select Group Name</option>
                                <?php foreach ($data as $value) { ?>
                                    <option value="<?php echo $value->group_id ?>"><?php echo $value->group_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                   
                    <div class="box-footer pull-left">
                        <button type="submit" class="btn btn-info sbutton pull-right">Submit</button>
                        <a href="<?php echo site_url('admin/creation_groupping'); ?>" class="btn btn-primary sbutton">Create Group</a>
                    </div>
                </div>
                </div>
            </form>

            <script>
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

            <script>
                $(function () {

                    // add multiple select / deselect functionality
                    $("#selectall").click(function () {
                        $('.case').attr('checked', this.checked);
                    });

                    // if all checkbox are selected, check the selectall checkbox
                    // and viceversa
                    $(".case").click(function () {

                        if ($(".case").length == $(".case:checked").length) {
                            $("#selectall").attr("checked", "checked");
                        } else {
                            $("#selectall").removeAttr("checked");
                        }

                    });
                });
            </script>
        </div>
    </div>
</body>

<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>