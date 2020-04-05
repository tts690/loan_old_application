<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Product Description View', 'cssFiles' => array())); ?>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
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
                                <li class="active">Product Description</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="table-menu">
                <a href="<?php echo site_url('admin/product_create'); ?>" class="btn btn-primary">Product Description Create</a>
            </div> 
            <div class="table-content table-responsive">    
                <table id="examples" class="display tvalues" cellspacing="0" width="100%" name="tabel">
                    <thead>
                        <tr>
                            <th>Income Source</th>
                            <th>Selected Bank</th>
                            <th>Loan</th>
                            <th>Admin and Processing Fee</th>
                            <th>Description</th>
                            <th>Sanction Conditions</th>
                            <th>Legal and Technical Conditions</th>
                            <th>Disbursement Conditions</th>
                            <th>Pre Closure Conditions</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Income Source</th>
                            <th>Selected Bank</th>
                            <th>Loan</th>
                            <th>Admin and Processing Fee</th>
                            <th>Description</th>
                            <th>Sanction Conditions</th>
                            <th>Legal and Technical Conditions</th>
                            <th>Disbursement Conditions</th>
                            <th>Pre Closure Conditions</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                            <?php foreach ($data as $value) { 
                            //echo "<pre>";
                            //print_r($data);
                            //echo "</pre>";    
                                ?>
                            <tr>
                                <td><?php 
                                if($value['income_source_id'] == "R"){
                                    echo "Residence Salried";
                                }elseif($value['income_source_id' ==  "S"]){
                                    echo "Residence Self Employed";
                                }else{
                                    echo "NRI";
                                }
                                ?></td>
                                <td><?php 
                                if($value['sr_bank_id'] == 1){
                                    echo "Banks Considering Gross Income";
                                }else{
                                    echo "Banks Considering Net Income";
                                }
                                 ?></td>
                                <td><?php 
                                $this->db->select('LoanCode,LoanName');
                                $this->db->from('sr_loan');
                                $this->db->where('id', $value['sr_loan_id']);
                                $query = $this->db->get();
                                $data = $query->result();
                                echo $data[0]->LoanName;                                
                                 ?></td>
                                <td><?php echo $value['adminprocessingfee']; ?></td>
                                <td><?php echo $value['description']; ?></td>
                                <td><?php echo $value['sanction_conditions']; ?></td>
                                <td><?php echo $value['legal_technical']; ?></td>
                                <td><?php echo $value['disbursement']; ?></td>
                                <td><?php echo $value['pre_closure']; ?></td>
                                <td><a href="<?php echo site_url('admin/product_description/Product_Description_Control/EDIT_Product/' . $value['sr_product_description_id']) ?>" class="btn btn-primary">Edit</a></td>
                                <td><a href="<?php echo site_url('admin/product_description/Product_Description_Control/Delete_Product/' . $value['sr_product_description_id']) ?>" class="btn btn-primary">Delete</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
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
