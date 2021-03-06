<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Bank Edit', 'cssFiles' => array())); ?>

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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Dashboard'); ?>" >Home</a></li>                                               
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/manage_banks/Bank_Control'); ?>">Manage Banks</a> </li>                      
                                <li class="active">Manage Banks Edit</li>  
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
            <form action="<?php echo site_url('admin/edit_bank'); ?>" method="POST">
                <?php
                $id = $this->uri->segment(5);
                $this->db->select('*');
                $this->db->from('sr_bank');
                $this->db->where(array('id' => $id));
                $query = $this->db->get();
                $data = $query->result();
                foreach ($data as $value) {
                    
                }
                ?>
                <div class="row">
                    <div class="col-md-2 col-xs-12">  Bank Code </div> <div class="col-md-4"> 
                        <input type="text" name="BankCode" value="<?php echo $value->BankCode; ?>">
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md-2 col-xs-12">  Bank Name </div> <div class="col-md-4">
                        <input type="text" name="BankName" value="<?php echo $value->BankName; ?>">
                    </div>
                </div>
                <input type="hidden" value="<?php echo $id = $this->uri->segment(5); ?>" name="editing_id"/>
                <div class="row">
                    <div class="col-md-2 col-xs-12"> Compute On</div> <div class="col-md-4">
                             
                        <select name="Computeon">
                            <option value="G">Gross Pay</option>
                            <option value="N"> Net Pay</option>
                        </select>
                    </div>
                </div>
                <input type="submit" value="Edit" class="btn btn-primary sbutton"/>
            </form>
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

