<?php $this->load->view('dsa/components/page_head', array('pageTitle' => 'Create Disbursement', 'cssFiles' => array())); ?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('dsa/sidemenu'); ?>
        </div>
        <div class="right_col" role="main" style="min-height: 1296px;">
           
            <section class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('dsa/Dashboard'); ?>" >Home</a></li>                                               
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('dsa/Disbursement'); ?>">Disbursement</a></li>                      
                                <li class="active">Disbursement Create</li> 
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
            <form action="<?php site_url('dsa/Disbursement/create_document'); ?>" method="POST">
                <div class="urc">
                    <div class="row">
                        <div class="col-md-3">Income Source</div>
                        <div class="col-md-3"><select class="" name="income_source_id" id="income_source">
                                <option>Select</option>
                                <option value="R">Resident - Salaried</option>
                                <option value="N">NRI - Salaried</option>
                                <option value="S">Resident - Self Employed</option>
                            </select></div>
                    </div>
                    <br/>
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
                    <div class="col-md-3"><h5>Document Name</h5></div>  
                    <div class="col-md-3"><input type="text" name="document_name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">Status</label></div>
                    <div class="col-md-3"><select name="status">    
                            <option>Select</option>
                            <option value="1">Received</option>
                            <option value="0">Required</option>
                        </select>
                    </div>
                </div>
                <br/>
                <div class="col-md-12">  
                    <div class="form-group"><input type="hidden" class="" id="sname" value="<?php echo 'DSA' ?>" name="role"/></div>
                </div>
                <input type="submit" value="Submit" class="sbutton"/>
            </form>
        </div>
</body>
<?php $this->load->view('dsa/components/page_tail', array('jsFiles' => array())); ?>
<script>
    $(document).ready(function () {
        $('#income_source').change(function () {
            var income_source = $('#income_source').val();
            $.ajax({
                url: siteurl + 'dsa/File_process/Select_File_Process_URC',
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