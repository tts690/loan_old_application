<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Main Value Setting', 'cssFiles' => array())); ?>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
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

                                <li class="active">Main Value Setting</li>
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
            <form action="<?php echo site_url('value_setting'); ?>" method="POST">
                <div class="row">                
                    <div class="col-md-2 col-xs-12 col-sm-12"> Tax Exemption Amount:</div>
                    <div class="col-md-4">  
                        <input type="text" name="tax_exemption_amount" value="<?php echo $data['tax_exemption_amount']; ?>">
                    </div>
                </div>
      
                <div class="row">   
                    <div class="col-md-2 col-xs-12 col-sm-12">TDS: </div>
                    <div class="col-md-4"> 
                        <input type="text" name="tds" value="<?php echo $data['tds']; ?>">
                    </div>
                </div>
             

                <div class="row">
                    <div class="col-md-2 col-xs-12 col-sm-12"> Max Age Of Resident: </div>
                    <div class="col-md-4"> 
                        <input type="text" name="max_age_of_resident" value="<?php echo $data['max_age_of_resident']; ?>">
                    </div>
                </div>
           

                <div class="row">
                    <div class="col-md-2 col-xs-12 col-sm-12">Max Age Of NRI:</div>            
                    <div class="col-md-4">
                        <input type="text" name="max_age_of_nri" value="<?php echo $data['max_age_of_nri']; ?>">
                    </div>
                </div>
              

                <div class="row">
                    <div class="col-md-2 col-xs-12 col-sm-12"> Max Age Of Self Employee:  </div>
                    <div class="col-md-4"> 
                        <input type="text" name="max_age_of_self_employee" value="<?php echo $data['max_age_of_self_employee']; ?>"></div>
                </div>
             
                <input type="submit" class="btn-primary sbutton"  value="Submit" class="btn btn-primary"/>
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
