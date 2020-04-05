<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Employee Edit', 'cssFiles' => array())); ?>
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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Employee/Employee_Control'); ?>">Manage Employee</a></li>                      
                                <li class="active">Manage Employee Edit</li>  
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
            <form action="<?php echo site_url('admin/edit_employee'); ?>" method="POST">
                <?php
                $id = $this->uri->segment(5);
                $this->db->select('*');
                $this->db->from('sr_employee');
                $this->db->where(array('sr_employee_id' => $id));
                $query = $this->db->get();
                $data = $query->result();
                foreach ($data as $value) {
                    
                }
                ?>

                <h3>Employee Registration</h3>


                <div class="row">
                    <div class="col-md-2 col-xs-12">Employee Name</div><div class="col-md-4"> <input type="text" name="emp_name" value="<?php echo $value->emp_name; ?>"></div>
                </div>
             
                <div class="row">
                    <div class="col-md-2 col-xs-12">Father Name </div><div class="col-md-4"> <input type="text" name="father_name" value="<?php echo $value->father_name; ?>"></div>
                </div>
              
                <div class="row">
                    <div class="col-md-2 col-xs-12">DOB</div><div class="col-md-4"> <input type="text" class="datepicker" name="dob" value="<?php echo $value->dob; ?>"></div>
                </div>
                <hr/>
            
                <h3>Contact Details</h3>

                <div class="row">
                    <div class="col-md-2 col-xs-12">Permanent Address  </div><div class="col-md-4"> <textarea name="permanent"><?php echo $value->parmenent_address; ?></textarea></div>
                </div>
      
                <div class="row">
                    <div class="col-md-2 col-xs-12">Present Address  </div><div class="col-md-4"><textarea name="present"><?php echo $value->present_address; ?></textarea></div>
                </div>
               
                <div class="row">
                    <div class="col-md-2 col-xs-12"> Mobile </div><div class="col-md-4"> <input type="number" name="mobile" value="<?php echo $value->mobile; ?>"></div>
                </div>
         
                <div class="row">
                    <div class="col-md-2 col-xs-12"> Email ID </div><div class="col-md-4"><input type="text" name="email" value="<?php echo $value->email; ?>"></div>
                </div>
              
                <hr/>
                <h3>User Login Details</h3>

                <input type="hidden" value="<?php echo $id = $this->uri->segment(5); ?>" name="editing_id"/>
                <div class="row">
                    <div class="col-md-2 col-xs-12"> User Id</div> <div class="col-md-4"> <input type="text" name="username" value="<?php echo $value->user_name; ?>"></div>
                </div>
             
                <div class="row">
                    <div class="col-md-2 col-xs-12"> Password </div>
                    <div class="col-md-4"> <input type="password" name="password" value="<?php echo $value->user_name; ?>">
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-2 col-xs-12"> Status </div> <div class="col-md-4">
                        <select name="status">
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select></div>
                </div>
                <input type="submit" value="Save" class="btn btn-primary sbutton"/>
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
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script>
    $(function () {
        $("#datepicker").datepicker(
                {
            changeMonth: true,
            changeYear: true,
            yearRange: "-65:-10",
        });
    });
</script>
