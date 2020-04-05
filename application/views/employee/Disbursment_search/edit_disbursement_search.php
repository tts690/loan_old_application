<?php $this->load->view('employee/components/page_head', array('pageTitle' => 'Edit Disbursement Search', 'cssFiles' => array())); ?>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css"/>
<?php $staticContent = base_url(); ?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('employee/sidemenu'); ?>
        </div>
        <div class="right_col" role="main" style="min-height: 1296px;">
            <!--content-->
           
               <section class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('employee/Dashboard'); ?>" >Home</a></li>                                               
                                 <li class="breadcrumbtxt"><a href="<?php echo site_url('employee/Disbursement'); ?>">Disbursement</a></li>                      
                                 <li class="active">Disbursement search</li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
              <!--Bug Alerts--->
            <?php if (empty($error)) { ?>
                <div class="alert alert-danger" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong><?php echo $error; ?> </strong>
                </div>
            <?php } ?>  
            <!---End of Alert-->
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo site_url('employee/search_edit'); ?>" method="POST">
                        <?php
                        $id = $this->uri->segment(4);
                        $this->db->select('*');
                        $this->db->from('generate_file');
                        $this->db->where('role', "emp");
                        $this->db->where(array('generate_file_id' => $id));
                        $query = $this->db->get();
                        $data = $query->result();
                        foreach ($data as $value) {
                            
                        }
                        ?>
 <div class="row">
                        <div class="col-md-3 ">URC NO:</div> <div class="col-md-3"> <input type="text" value="<?php echo $value->urc_no; ?>" readonly></div><br/>
                        </div>
                        <br>
                          <div class="row">
                        <div class="col-md-3"> Applicant Name: </div> <div class="col-md-3"><input type="text" value="<?php echo $value->applicant_name; ?>" name="applicant_name"></div><br/>
                        </div>
                        <br>
                          <div class="row">
                        <div class="col-md-3">Co-Applicant Name:</div> <div class="col-md-3"> <input type="text" value="<?php echo $value->co_applicant_name; ?>" name="co_applicant_name"></div><br/>
                         </div>
                        <br>
                          <div class="row">
                        <div class="col-md-3">Contact Number:</div> <div class="col-md-3"> <input type="text" value="<?php echo $value->a_office_phone; ?>" name="a_office_phone"></div><br/>
                         </div>
                        <br>
                          <div class="row">
                        <div class="col-md-3">Email: </div> <div class="col-md-3"><input type="text" value="<?php echo $value->a_personal_email; ?>" name="a_personal_email"></div><br/>
                       </div>
                        <br>
                          <div class="row">
                        <div class="col-md-3">Loan Amount: </div> <div class="col-md-3"><input type="text" value="<?php echo $value->loan_amount; ?>" name="loan_amount"></div><br/>
                        </div>
                        <br>
                          <div class="row">
                        <div class="col-md-3">Applicant City:</div> <div class="col-md-3"> <input type="text" value="<?php echo $value->a_city; ?>" name="a_city"></div><br/>
                          </div>
                        <br>
                        <input type="hidden" value="<?php echo $id = $this->uri->segment(4); ?>" name="editing_id"/>
                        <input type="submit" value="Editting" class="btn btn-primary sbutton"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<?php $this->load->view('employee/components/page_tail', array('jsFiles' => array())); ?>
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