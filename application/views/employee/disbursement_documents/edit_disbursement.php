<?php $this->load->view('employee/components/page_head', array('pageTitle' => 'Edit Disbursment', 'cssFiles' => array())); ?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('employee/sidemenu'); ?>
        </div>
        <div class="right_col" role="main" style="min-height: 1296px;">
            <section class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('employee/Dashboard'); ?>" >Home</a></li>                                               
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('employee/Disbursement'); ?>">Disbursement</a></li>                      
                                <li class="active">Disbursement Edit</li> 
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
            <div class="col-block">
                <?php
                $id = $this->uri->segment(4);
                $this->db->select('*');
                $this->db->from('disbursment_document');
                $this->db->where('role', "emp");
                $this->db->where('disbursment_document_id', $id);
                $query = $this->db->get();
                if ($query->num_rows() > 0) {
                    $data = $query->result();
                    ?>
                    <form action="<?php site_url('employee/create_disbursement'); ?>" method="POST">
                        <input type="hidden" value="<?php echo $id = $this->uri->segment(4); ?>" name="editing_id"/>

                        <div class="urc">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Income Source</h5>
                                </div>
                                <div class="col-md-3">
                                    <select class="" name="income_source_id" id="income_source">
                                        <option>Select</option>
                                        <?php foreach ($data as $value) { ?>
                                            <option value="<?php echo $value->income_source_id; ?>">
                                                <?php
                                                if ($value->income_source_id == 'R') {
                                                    echo "Resident - Salaried";
                                                } else if ($value->income_source_id == 'N') {
                                                    echo "NRI - Salaried";
                                                } else {
                                                    echo "Resident - Self Employed";
                                                }
                                                ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Select URC </h5>
                                </div>
                                <div class="col-md-3">
                                    <select name="urc_no" id="urc_no">
                                        <option>SELECT</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Document Name</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="document_name" value="<?php echo $value->disbursment_document_name; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Status</h5>
                            </div>
                            <div class="col-md-3">
                                <select name="status">    
                                    <option value="1">Received</option>
                                    <option value="0">Required</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <input type="submit" class="sbutton" value="Submit"/>
                    </form>
                <?php } ?>
            </div>
        </div>
</body>
<?php $this->load->view('employee/components/page_tail', array('jsFiles' => array())); ?>
<script>
    $(document).ready(function () {
        $('#income_source').change(function () {
            var income_source = $('#income_source').val();
            $.ajax({
                url: siteurl + 'employee/File_process/Select_File_Process_URC',
                type: 'POST',
                dataType: 'json',
                data: {'income_source': income_source},
                success: function (result) {
                    console.log(result);
                    $.each(result, function (resindex, resitem) {
                        var resi;
                        var mySelect = $('#urc_no');

                        for (resi = 0; resi < resitem.length; resi++) {
                            var eachres = "<option value='" + resitem[resi]['generate_file_id'] + "'>" + resitem[resi]['urc_no'] + "</option>";
                            $('#urc_no').append(eachres);
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