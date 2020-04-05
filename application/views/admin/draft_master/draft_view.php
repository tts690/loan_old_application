<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Draft View', 'cssFiles' => array())); ?>

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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Dashboard'); ?>">Home</a></li>                                               
                                 <li class="active">Draft Master</li>                      
                             
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <div class="col-md-6">
              
                <div class="table-menu">
                    <a href="<?php echo site_url('admin/draft_creation_category_manage'); ?>" class="btn btn-primary">Create Category</a>
                </div>

                <div class="table-content table-responsive">    
                    <table id="examples" class="display tvalues" cellspacing="0" width="100%" name="tabel">
                        <thead>
                            <tr>
                                <th>Draft Category</th>
                                <th>Document Title</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Draft Category</th>
                                <th>Document Title</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php if ($data) { ?>
                                <?php foreach ($data as $value) { ?>
                                    <tr>
                                        <td><?php echo $value->draft_category_name; ?></td>
                                        <td><?php echo $value->draft_agreement_title; ?></td>
                                        <td><a href="<?php echo site_url('admin/manage_draft/Draft_Control/EDIT_Draft/' . $value->sr_draft_id ."/".$value->sr_draft_settings_id) ?>" class="btn btn-primary">Edit</a></td>
                                        <td><a href="<?php echo site_url('admin/manage_draft/Draft_Control/Delete_Draft/' . $value->sr_draft_id ."/".$value->sr_draft_settings_id) ?>" class="btn btn-primary">Delete</a></td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <h2>Draft File Upload</h2>
                  <?php if (!empty($error)) { ?>
                    <div class="alert alert-danger" id="success-alert">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong><?php echo $error; ?> </strong>
                    </div>
                <?php } ?>

                <form action="<?php echo site_url('admin/draft_create'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Draft Category</h5>
                        </div>
                        <div class="col-md-8">
                            <?php
                            $this->db->select('*');
                            $this->db->from('sr_draft');
                            $query = $this->db->get();
                            $datas = $query->result();
                            ?>    
                            <select class="category" name="category_name">
                                <option>Select</option>
                                <?php foreach ($datas as $resulting) { ?>
                                    <option value="<?php echo $resulting->sr_draft_id; ?>"><?php echo $resulting->draft_category_name; ?></option>
                                <?php } ?>
                                <!--option value="-1">Other New</option-->
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h5>Draft Agreement Title</h5></div>
                        <div class="col-md-4"> 
                            <div class="form-group">
                                <input type="text" class="" id="fname" value="" name="draft_agreement_title"/> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h5>Select Draft File</h5></div>
                        <div class="col-md-4">
                            <input type="file" name="select_draft_file">
                        </div>
                    </div>
                    <input type="submit" value="Upload" class="sbutton pull-right">
                </form>
            </div>
        </div>
    </div>
</body>
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $(".category").change(function () {
            var selected = $(this).find("option:selected").text();
            if (selected == "Other New") {
                $('#new_category').show();
            } else {
                $('#new_category').hide();
            }
        });

    });
</script>
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
