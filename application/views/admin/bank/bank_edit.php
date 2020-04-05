<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Bank Edit', 'cssFiles' => array())); ?>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/bank/Bank_Creation'); ?>">Bank</a></li>                      
                                <li class="active">Bank Edit</li>  
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


            <form action="<?php echo site_url('admin/edit_banks'); ?>" method="POST">
                <?php
                $id = $this->uri->segment(5);
                $this->db->select('*');
                $this->db->from('bank');
                $this->db->where('bank_id', $id);
                $query = $this->db->get();
                $this->db->last_query();
                if ($query->num_rows() > 0) {
                    $data = $query->result();
                    foreach ($data as $value) {
                        
                    }
                    ?>
                    <div class="row">
                        <div class="col-md-2">Bank Name</div>
                        <div class="col-md-4"> <input type="text" name="bankname" value="<?php echo $value->bank_name; ?>"/></div>
                    </div>
                <br>
                
                    <input type="hidden" value="<?php echo $id = $this->uri->segment(5); ?>" name="editing_id"/>
                    <input type="submit" value="Edit" class="sbutton"/>
                </form>
<?php } ?>
        </div>
    </div>
</body>
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

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