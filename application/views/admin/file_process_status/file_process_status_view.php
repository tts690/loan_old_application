<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'File Status View', 'cssFiles' => array())); ?>
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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Dashboard'); ?>" >Home</a></li>                                               
                                <li class="active">File Process Status</li>  
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <form action="<?php echo site_url('admin/create_file'); ?>" method="POST">
                <div class="row">
                    <div class="col-md-2 col-xs-12 col-sm-12">  Income Source</div>
                    <div class="col-md-4"><select name="income_source" id="income_source">                                
                            <option>Select</option>
                            <option value="R">Resident-Salaried</option>
                            <option value="S">Resident - SelfEmployed</option>
                            <option value="N">NRI - Salaried</option>
                        </select>
                    </div>
                </div>
            </form>
            <br/>
                <?php
                $this->db->select('*');
                $this->db->from('process');
                $query = $this->db->get();
                $data = $query->result();
                ?>
                <div class="row">
                    <div class="col-md-2 col-xs-12 col-sm-12"> Type of Process</div>
                    <div class="col-md-4"><select id="process_id" name="process_id[]">
                            <option>Select</option>
                            <?php foreach ($data as $value) { ?>
                                <option value="<?php echo $value->process_id; ?>"><?php echo $value->process_name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <br>
                <?php
                $this->db->select('*');
                $this->db->from('file_process');
                $query = $this->db->get();
                $data = $query->result();
                ?>
                <table border="1">
                    <tr>
                        <th><input type="checkbox" name="file_process_id[]" id="selectall"/></th>
                        <th>File Status ID</th>
                        <th>File Status Name</th>
                    </tr>
                    <?php foreach ($data as $value) { ?>
                        <tr>
                            <td><input type="checkbox" class="id" name="file_process_id[]" value="<?php echo $value->file_process_id; ?>" id="mytable"/></td>
                            <td><?php echo $value->file_process_id; ?></td>
                            <td><?php echo $value->file_status_name; ?></td>
                        </tr>
                    <?php } ?>
                </table><br/><br/>
              <input type="submit" value="Save" class="btn btn-primary sbutton"/>
            </form>
        </div>
    </div>
</body>
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script>
    $(function () {

        // add multiple select / deselect functionality
        $("#selectall").click(function () {
            $('.id').attr('checked', this.checked);
        });

        // if all checkbox are selected, check the selectall checkbox
        // and viceversa
        $(".id").click(function () {

            if ($(".id").length == $(".id:checked").length) {
                $("#selectall").attr("checked", "checked");
            } else {
                $("#selectall").removeAttr("checked");
            }

        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#process_id').change(function () {
            
            var process_id = $('#process_id').val();
            var income_source = $('#income_source').val();
            $("input:checkbox").attr('checked' , false);

            $.ajax({
                url: siteurl + 'admin/file_process_status/File_Process_Status_Control/Select_File_Process_Status',
                type: 'POST',
                dataType: 'json',
                data: {'process_id': process_id, 'income_source': income_source},
                success: function (result) {
                    $.each(result, function (index, item) {
                        var i;
                        for (i = 0; i < item.length; i++) {
                            $("input:checkbox").each(function () {
                                var c = $(this).val();
                                if (c == item[i]['file_process_id']) {
                                    $(this).attr('checked', true);
                                }
                            });
                        }
                    });
                },
                error: function () {
                    alert("Fail")
                }
            });
        });
    });

</script>
