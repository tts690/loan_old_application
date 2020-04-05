<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Bussiness Loan Create', 'cssFiles' => array())); ?>

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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/BusinessLoan/Business_Loan'); ?>">Business Loans</a></li>                      
                                <li class="active">Business Loans Create</li>  
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
            <!--content-->
            <form action="<?php echo site_url('admin/BusinessLoan/Business_Loan_Bank/Create_Bank'); ?>" method="POST">
                <div class="personal-loan">
                    <div class="row">
                        <div class="col-md-2 col-xs-12">                  
                            <p> Create Bank</p>
                        </div>
                        <div class="col-md-4">   
                            <input type="text" name="bank_name"/></div>                                            
                    </div>
                </div>
                <br>
                <!--content-->
                <div class="pbutton">

                    <input type="submit" value="Create" class="sbutton">
                    <input type="reset" value="Reset" class="sbutton">

                </div>

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