<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Faq Question View', 'cssFiles' => array())); ?>
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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Dashboard'); ?>" style="color:#CCCCCC">Home</a></li>                                               
                                <li class="active">FAQ'S</li>                      

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="tablemenu">
                <a href="#" class="btn"></a>
            </div> 
            <div class="table-content table-responsive">    
                <table id="examples" class="display tvalues" cellspacing="0" width="100%" name="tabel">
                    <thead>
                        <tr>
                            <!--th>ID</th-->                           
                            <!--th>Bank Name</th-->
                            <th>Categories ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Query</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <!--th>ID</th-->                       
                            <!--th>Bank Name</th-->
                            <th>Categories ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Query</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($data as $value) { ?>
                            <tr>
                                <!--td><?php //echo $value->id;     ?></td-->
                                <!--td>
                                    <?php
//                                    $bank_id = $value->bank_id;
//                                    $this->db->select('*');
//                                    $this->db->from('bank');
//                                    $this->db->where(array('bank_id' => $bank_id));
//                                    $query = $this->db->get();
//                                    $data = $query->result();
//                                    foreach ($data as $values) {
//                                        
//                                    }
//                                    echo $values->bank_name;
                                    ?></td-->
                                <td>
                                    <?php
                                    $categories_id = $value->categories_id;
                                    $this->db->select('*');
                                    $this->db->from('categories');
                                    $this->db->where(array('id' => $categories_id));
                                    $query = $this->db->get();
                                    $data = $query->result();
                                    foreach ($data as $valuess) {
                                        
                                    }
                                    echo $valuess->categories_name;
                                    ?>
                                </td>
                                <td><?php echo $value->name; ?></td>
                                <td><?php echo $value->email_id; ?></td>
                                <td><?php echo $value->question; ?></td>
                                <td><?php
                                    if ($value->status == 1) {
                                        echo "Need To Answer";
                                    } else {
                                        echo "Already Answer";
                                    }
                                    ?></td>
                                <td><a href="<?php echo site_url('admin/bank/Bank_Creation/Faq_Question_EDIT/' . $value->faq_question_id) ?>" class="btn btn-primary">Answer</a></td>
                                <td><a href="<?php echo site_url('admin/bank/Bank_Creation/Deleteing_Categories/' . $value->faq_question_id) ?>" class="btn btn-primary">Delete</a></td>
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
<!--script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script-->

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