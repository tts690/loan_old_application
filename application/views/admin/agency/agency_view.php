<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Agency View', 'cssFiles' => array())); ?>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css"/>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('admin/sidemenu'); ?>
        </div>
        <div class="right_col" role="main">
            <section class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Dashboard'); ?>" >Home</a></li>                                               
                                <li class="active">Agency   </li>  
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="table-menu">
                <a href="<?php echo site_url('admin/agency_create'); ?>" class="btn btn-primary">Create Manage Agency</a>
            </div> 

            <div class="table-content table-responsive">    
                <table id="examples" class="display tvalues" cellspacing="0" width="100%" name="tabel">
                    <thead>
                        <tr>
                            <!--th>State Name</th-->                            
                            <th>Bank Name</th>
                            <th>Agency Name</th>
                            <th>Agency Address</th>
                            <th>Contact Person</th>                            
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>User Name</th>
                            <th>Status</th>
                            <th>SMS</th>
                            <th>Email Approve</th>                            
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <!--th>State Name</th-->                            
                            <th>Bank Name</th>
                            <th>Agency Name</th>
                            <th>Agency Address</th>
                            <th>Contact Person</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>User Name</th>
                            <th>Status</th>
                            <th>SMS</th>
                            <th>Email Approve</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($data as $value) { ?>
                            <tr>
                                <!--td><?php
                                $state_id = $value->sr_state_id;
                                $this->db->select('*');
                                $this->db->from('sr_state');
                                $this->db->where(array('sr_state_id' => $state_id));
                                $query = $this->db->get();
                                $result_data = $query->result_array();
                                foreach ($result_data as $resulted_value) {
                                    echo $resulted_value['state_name'];
                                }
                                ?></td-->
                                <!--td><?php
                                $city_id = $value->cities_of_state_id;
                                $this->db->select('*');
                                $this->db->from('cities_of_state');
                                $this->db->where(array('sr_state_id' => $city_id));
                                $query = $this->db->get();
                                $result_datas = $query->result_array();
                                foreach ($result_datas as $resulted_values) {
                                    echo $resulted_values['city_name'];
                                }
                                ?></td-->
                                <td><?php
                                    $bank_id = $value->bank_id;
                                    $this->db->select('*');
                                    $this->db->from('sr_bank');
                                    $this->db->where(array('id' => $bank_id));
                                    $query = $this->db->get();
                                    $result_datass = $query->result_array();
                                    foreach ($result_datass as $resulted_valuess) {
                                        echo $resulted_valuess['BankName'];
                                    }
                                    ?></td>
                                <td><?php echo $value->agency_name; ?></td>
                                <td><?php echo $value->agency_address; ?></td>
                                <td><?php echo $value->contact_person; ?></td>
                                <td><?php echo $value->mobile; ?></td>
                                <td><?php echo $value->email; ?></td>
                                <td><?php echo $value->username; ?></td>
                                <td><?php
                                    $status = $value->status;
                                    switch ($status) {
                                        case $value->status = 1:
                                            echo "Active";
                                            break;
                                        default:
                                            echo "InActive";
                                    }
                                    ?>
                                </td>
                                <td><?php
                                    $sms_approve = $value->sms_approve;
                                    switch ($status) {
                                        case $value->sms_approve = 1:
                                            echo "Active";
                                            break;
                                        default:
                                            echo "InActive";
                                    }
                                    ?>
                                </td>
                                <td><?php
                                    $email_approve = $value->email_approve;
                                    switch ($status) {
                                        case $value->email_approve = 1:
                                            echo "Active";
                                            break;
                                        default:
                                            echo "InActive";
                                    }
                                    ?>
                                </td>

                                <td><a href="<?php echo site_url('admin/agency/Agency_Control/EDIT_Agency/' . $value->sr_agency_id) ?>" class="btn btn-primary">Edit</a></td>
                                <td><a href="<?php echo site_url('admin/agency/Agency_Control/Delete_Agency/' . $value->sr_agency_id) ?>" class="btn btn-primary">Delete</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
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
