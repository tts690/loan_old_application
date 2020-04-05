<?php $this->load->view('employee/components/page_head', array('pageTitle' => 'File Process', 'cssFiles' => array())); ?>
<?php $staticContent = base_url(); ?>
<style>    
    .row{
        margin: 8px 0px !important;
    }   
</style>
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
                                <li class="active">File Process</li> 
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

            <div class="row">
                <div class="header">
                    <h1>File Process Details</h1>
                </div>
            </div>
            <div class="col-md-8 center-block">
                <div class="row">    
                     <div class="row">  
                        <div class="col-md-4"><p>Month</p></div>
                        <div class="col-md-6"><select name="">
                                <option value="">January </option>
                                <option value="">February  </option>
                                <option value="">March  </option> 
                                <option value="">April  </option>
                                <option value="">May  </option>
                                <option value="">June  </option>
                                <option value="">July  </option>
                                <option value="">August  </option>
                                <option value="">September </option>
                                <option value="">October </option>
                                <option value=""> November</option>
                                <option value="">December </option>
                            </select></div>
                    </div>
                     <div class="row"> 
                        <div class="col-md-4"><p>Year</p></div>
                        <div class="col-md-6"><select name="">
                                <option value="">2006 </option>
                                <option value="">2007 </option>
                                <option value="">2008 </option>
                                <option value="">2009 </option>
                                <option value="">2010 </option>
                                <option value="">2011 </option>
                                <option value="">2012 </option>
                                <option value="">2013 </option>
                                <option value="">2014 </option>
                                <option value="">2015 </option>
                            </select></div>
                     </div>
                  
                </div>
                <form action="<?php echo site_url('employee/File_process'); ?>" method="POST"> 
                    <div class="row"> 
                        <div class="col-md-4"><p> Income Source</p> </div>
                        <div class="col-md-6">
                            <select class="form-crol" name="income_source" id="income_source">
                                <option>Select</option>
                                <option value="R">Resident - Salaried</option>
                                <option value="N">NRI - Salaried</option>
                                <option value="S">Resident - Self Employed</option>
                            </select>
                        </div>
                        <div class="col-md-2">  </div>
                    </div>

                    <div class="row align-center">   
                        <div class="col-md-4 col-sm-12 col-xs-12"><p>Select URC</p></div>
                        <div class="col-md-6">
                            <select name="generate_file_id" id="urc_no">
                                <option>SELECT</option>
                            </select>
                        </div>
                         <div class="col-md-2">  </div>
                    </div>
            </div>
                    <div class="row">  
                        <div class="col-md-3 header">
                            <h2><span>Verification : </span></h2>
                        </div>
                    </div>     
                    <!--                    <div class="row align-center">   
                    <?php
                    $this->db->select('*');
                    $this->db->from('generate_file');
                    $this->db->where('role', "emp");
                    $query = $this->db->get();
                    $data = $query->result();
                    ?>
                                            <div class="col-md-2"><h5>Select Income Source</h5></div>
                                            <div class="col-md-6">
                                                <select name="income_source_id">
                    <?php foreach ($data as $value) { ?>
                                                                    <option value="<?php echo $value->income_source_id; ?>"><?php
                        if ($value->income_source_id == "R") {
                            echo "Resident-Salaried";
                        } else if ($value->income_source_id == "S") {
                            echo "Resident - SelfEmployed";
                        } else {
                            echo "NRI - Salaried";
                        }
                        ?></option>
                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>-->

                <div class="col-md-8 center-block">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><h4>Applicant</h4></div>
                            <div class="col-md-4"><h4>Co- Applicant</h4></div>
                        </div>
                        <div class="row">  
                            <div class="col-md-4 col-xs-12 col-sm-12"><p>Process Type</p></div>
                            <?php
//                            $this->db->select('*');
//                            $this->db->from('process');
//                            $query = $this->db->get();
//                            $datas = $query->result();
                            ?>
                            <div class="col-md-4">
                                <select name="app_process_process_type_id" class="process_id_verification" id="app_process_process_type_id">
                                    <option>Select</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select name="co_process_process_type_id" class="process_id_verification" id="co_process_process_type_id">
                                    <option>Select</option>
                                </select>
                            </div>  
                        </div>
                        <div class="row">  
                            <div class="col-md-4 col-xs-12 col-sm-12"><p>Status</p></div>
                            <div class="col-md-4">
                                <select name="file_process_app_status" class = "processs" id="file_process_app_status">
                                    <option>Select</option>
                                </select>
                            </div>
                            <div class="col-md-4 ">
                                <select name="file_process_co_status" class = "processs" id="file_process_co_status">
                                    <option>Select</option>
                                </select>
                            </div>                                    
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-xs-12 col-sm-12"><p>Remarks</p></div>
                            <div class="col-md-4">  <div class="form-group"><textarea class="form-control" rows="2" col="3" id="comment" name="app_remarks"></textarea> </div></div>
                            <div class="col-md-4">  <div class="form-group"><textarea class="form-control" rows="2" col="3" id="comment" name="co_remarks"></textarea></div></div>
                        </div>
                        <!--sanction-->
                    </div>
                    <div class="row">  
                        <div class="col-md-5 header">
                            <h2><span>Eligibility and Sanction : </span></h2>
                        </div>
                    </div>            
    <div class="col-md-8 center-block">
                    <div class="row">  
                        <div class="coler-block">
                            <div class="row">  
                                <div class="col-md-4 col-xs-12 col-sm-12"><p>Process Type</p></div>
                                <div class="col-md-4">
                                    <select name="eli_app_process_type_process_id" class="process_id2" id="eli_app_process_type_process_id">
                                        <option>select</option>
                                        <option value="8">Eligibility Process</option>
                                        <option value="9">Sanction Status</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="eli_co_process_type_process_id" class="process_id2" id="eli_co_process_type_process_id">
                                        <option>select</option>
                                        <option value="8">Eligibility Process</option>
                                        <option value="9">Sanction Status</option>
                                    </select>
                                </div>  
                            </div>
                             <div class="row"> 
                            <div class="col-md-4 col-xs-12 col-sm-12"><p>Eligibility </p></div>
                            <div class="col-md-2">
                                <select name="eli_file_process_app_status" class="filing_process_id2" id="eli_file_process_app_status">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-12"><p style="">Sanction :</p></div>
                            <div class="col-md-2">
                                <select name="eli_file_process_co_status" class="filing_process_id2" id="eli_file_process_co_status">
                                    <option value="">Select</option>
                                </select>
                            </div> 
                             </div>

                            <div class="col-md-4 col-xs-12 col-sm-12"><p>Remarks</p></div>
                            <div class="col-md-4">  <div class="form-group"><textarea class="form-control" rows="2" col="3" id="comment" name="eli_app_remarks"></textarea> </div></div>
                            <div class="col-md-4">  <div class="form-group"><textarea class="form-control" rows="2" col="3" id="comment" name="eli_co_remarks"></textarea></div></div>
                            <div class="col-md-4 col-xs-12 col-sm-12"><p>Amount</p></div>
                            <div class="col-md-4">  <div class="form-group"><input type="text" class="" id="sname" value="" name="eli_app_amount"/> </div></div>
                            <div class="col-md-4">  <div class="form-group"><input type="text" class="" id="sname" value="" name="eli_co_amount"/></div></div>
                        </div> 
                    </div>
        </div>
                    <!--Legal and Technical-->
                    <div class="row">
                        <div class="col-md-4 header"><h2 style="text-align: left"><span>Legal and Technical:</span></h2></div>       
                        <div class="col-md-4" style="margin:12px 0px;"> <input type="checkbox" value="" id="property"> Not Applicable</div>
                    </div>

                    <div class="col-md-8 center-block" id="propertydetails">
                        <div class="row">  
                            <div class="row">  
                                <div class="col-md-4 col-xs-12 col-sm-12"><p>Process Type</p></div>
                                <div class="col-md-4">
                                    <select name="leg_app_process_type_process_id" class="process_id3" id="leg_app_process_type_process_id">
                                        <option>select</option>
                                        <option value="10">Legal Scrutiny</option>
                                        <option value="11">Technical Verification</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="leg_co_process_type_process_id" class="process_id3" id="leg_co_process_type_process_id">
                                        <option>select</option>
                                        <option value="10">Legal Scrutiny</option>
                                        <option value="11">Technical Verification</option>
                                    </select>
                                </div>  
                            </div>
                             <div class="row"> 
                            <div class="col-md-4 col-xs-12 col-sm-12"><p>Eligibility</p></div>
                            <div class="col-md-2">
                                <select name="leg_file_process_app_status" class="filing_process_id3" id="leg_file_process_app_status">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-12"><p style="">Sanction</p></div>
                            <div class="col-md-2">
                                <select name="leg_file_process_co_status" class="filing_process_id3" id="leg_file_process_co_status">
                                    <option value="">Select</option>
                                </select>
                            </div> 
                             </div>

                            <div class="col-md-4  col-xs-12 col-sm-12"><p>Remarks</p></div>
                            <div class="col-md-4">  <div class="form-group"><textarea class="form-control" rows="2" col="3" id="comment" name="leg_app_remarks"></textarea> </div></div>
                            <div class="col-md-4">  <div class="form-group"><textarea class="form-control" rows="2" col="3" id="comment" name="leg_co_remarks"></textarea></div></div>
                            <div class="col-md-4 col-xs-12 col-sm-12"><p>Amount</p></div>
                            <div class="col-md-4">  <div class="form-group"><input type="text" class="" id="sname" value="" name="leg_app_amount"/> </div></div>
                            <div class="col-md-4">  <div class="form-group"><input type="text" class="" id="sname" value="" name="leg_co_amount"/></div></div>

                        </div> 
                    </div>
                    <!--content-->
                    
            <div class="col-md-12">  
                <div class="form-group"><input type="hidden" class="" id="sname" value="<?php echo 'emp' ?>" name="role"/></div>
            </div>
            <input type="submit" value="Update" class="sbutton">
            <a href="#"><button class="sbutton">Send Mail</button></a>
            </form>

        </div>
</body>

<?php $this->load->view('employee/components/page_tail', array('jsFiles' => array())); ?>

<!--<script>
    $(document).ready(function () {
        $('.process_id').change(function () {
            var process_id = $(this).val();
            $.ajax({
                url: siteurl + 'employee/Login/Select_File_Process_Status',
                type: 'POST',
                dataType: 'json',
                data: {'process_id': process_id},
                success: function (result) {
                    console.log(result);
                    $.each(result, function (resindex, resitem) {
                        var resi;
                        var mySelect = $('.filing_process_id');

                        for (resi = 0; resi < resitem.length; resi++) {
                            var eachres = "<option value='" + resitem[resi]['file_process_id'] + "'>" + resitem[resi]['file_status_name'] + "</option>";
                            $('.filing_process_id').append(eachres);
                        }
                    });
                },
                error: function () {
                    alert("Fail")
                }
            });
        });
    });
</script>-->

<!-- Elitibality Sansction applicant -->

<script>
    $(document).ready(function () {
        $('#eli_app_process_type_process_id').change(function () {
            var process_id2 = $('#eli_app_process_type_process_id').val();

            $.ajax({
                url: siteurl + 'employee/Login/Select_Eligibality_Status',
                type: 'POST',
                dataType: 'json',
                data: {'process_id': process_id2},
                success: function (result) {
                    console.log(result);
                    $.each(result, function (resindex, resitem) {
                        var resi;
                        var mySelect = $('#eli_file_process_app_status');

                        var mySelect = $('#eli_file_process_app_status');
                        $('#eli_file_process_app_status')
                                .empty()
                                .append('<option selected="selected" value="0">Select</option>')
                                ;

                        for (resi = 0; resi < resitem.length; resi++) {
                            var eachres = "<option value='" + resitem[resi]['file_process_id'] + "'>" + resitem[resi]['file_status_name'] + "</option>";
                            $('#eli_file_process_app_status').append(eachres);
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


<!-- Elitibality Sansction CO - Applicant -->

<script>
    $(document).ready(function () {
        $('#eli_co_process_type_process_id').change(function () {
            var process_id2 = $('#eli_co_process_type_process_id').val();

            $.ajax({
                url: siteurl + 'employee/Login/Select_Eligibality_Status',
                type: 'POST',
                dataType: 'json',
                data: {'process_id': process_id2},
                success: function (result) {
                    console.log(result);
                    $.each(result, function (resindex, resitem) {
                        var resi;
                        var mySelect = $('#eli_file_process_co_status');

                        var mySelect = $('#eli_file_process_co_status');
                        $('#eli_file_process_co_status')
                                .empty()
                                .append('<option selected="selected" value="0">Select</option>')
                                ;

                        for (resi = 0; resi < resitem.length; resi++) {
                            var eachres = "<option value='" + resitem[resi]['file_process_id'] + "'>" + resitem[resi]['file_status_name'] + "</option>";
                            $('#eli_file_process_co_status').append(eachres);
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





<!-- Applicant Legal And Technical-->
<script>
    $(document).ready(function () {
        $('#leg_app_process_type_process_id').change(function () {
            var process_id3 = $(this).val();
            
            $.ajax({
                url: siteurl + 'employee/Login/Select_Eligibality_Status',
                type: 'POST',
                dataType: 'json',
                data: {'process_id': process_id3},
                success: function (result) {
                    console.log(result);
                    $.each(result, function (resindex, resitem) {
                        var resi;
                        var mySelect = $('#leg_file_process_app_status');
                        
                         $('#leg_file_process_app_status')
                                .empty()
                                .append('<option selected="selected" value="0">Select</option>');

                        for (resi = 0; resi < resitem.length; resi++) {
                            var eachres = "<option value='" + resitem[resi]['file_process_id'] + "'>" + resitem[resi]['file_status_name'] + "</option>";
                            $('#leg_file_process_app_status').append(eachres);
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


<!-- Co - Applicant Legal And Technical-->
<script>
    $(document).ready(function () {
        $('#leg_co_process_type_process_id').change(function () {
            var process_id3 = $(this).val();
            
            $.ajax({
                url: siteurl + 'employee/Login/Select_Eligibality_Status',
                type: 'POST',
                dataType: 'json',
                data: {'process_id': process_id3},
                success: function (result) {
                    console.log(result);
                    $.each(result, function (resindex, resitem) {
                        var resi;
                        var mySelect = $('#leg_file_process_co_status');
                        
                         $('#leg_file_process_co_status')
                                .empty()
                                .append('<option selected="selected" value="0">Select</option>');

                        for (resi = 0; resi < resitem.length; resi++) {
                            var eachres = "<option value='" + resitem[resi]['file_process_id'] + "'>" + resitem[resi]['file_status_name'] + "</option>";
                            $('#leg_file_process_co_status').append(eachres);
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

<script>
    $('#property').click(function () {
        if ($(this).is(":checked")) {
            $("#propertydetails").hide();
            $("#propertydetail").hide();
        } else {
            $("#propertydetails").show();
            $("#propertydetail").show();
        }
    });
</script>

<!----process type applicant -->

<script>
    $(document).ready(function () {
        $('#income_source').change(function () {
            var income_source = $('#income_source').val();
            $.ajax({
                url: siteurl + 'employee/File_process/Select_File_Process_Verification',
                type: 'POST',
                dataType: 'json',
                data: {'income_source': income_source},
                success: function (result) {
                    console.log(result);
                    $('#app_process_process_type_id')
                        .empty()
                        .append('<option selected="selected" value="0">Select</option>');
                    $.each(result, function (resindex, resitem) {
                        var resi;
                        var mySelect = $('#app_process_process_type_id');

                        for (resi = 0; resi < resitem.length; resi++) {
                            var eachres = "<option value='" + resitem[resi]['process_id'] + "'>" + resitem[resi]['process_name'] + "</option>";
                            $('#app_process_process_type_id').append(eachres);
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

<!-- co applicant -->
<script>
    $(document).ready(function () {
        $('#income_source').change(function () {
            var income_source = $('#income_source').val();
            $.ajax({
                url: siteurl + 'employee/File_process/Select_File_Process_Verification',
                type: 'POST',
                dataType: 'json',
                data: {'income_source': income_source},
                success: function (result) {
                    console.log(result);
                    
                    $('#co_process_process_type_id')
                        .empty()
                        .append('<option selected="selected" value="0">Select</option>');
                
                    $.each(result, function (resindex, resitem) {
                        var resi;
                        var mySelect = $('#co_process_process_type_id');

                        for (resi = 0; resi < resitem.length; resi++) {
                            var eachres = "<option value='" + resitem[resi]['process_id'] + "'>" + resitem[resi]['process_name'] + "</option>";
                            $('#co_process_process_type_id').append(eachres);
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



<!-- CO -Applicant process type-->
<script>
    $(document).ready(function () {
        $('#co_process_process_type_id').change(function () {
            var process_id = $('#co_process_process_type_id').val();

            $.ajax({
                url: siteurl + 'employee/File_process/Select_File_Process_Verification_process',
                type: 'POST',
                dataType: 'json',
                data: {'process_id': process_id},
                success: function (result) {
                    console.log(result);
                    $.each(result, function (resindex, resitem) {
                        var resi;
                        var mySelect = $('#file_process_co_status');
                        
                        $('#file_process_co_status')
                        .empty()
                        .append('<option selected="selected" value="0">Select</option>');
                        
                        for (resi = 0; resi < resitem.length; resi++) {
                            var eachres = "<option value='" + resitem[resi]['file_process_id'] + "'>" + resitem[resi]['file_status_name'] + "</option>";
                            $('#file_process_co_status').append(eachres);
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


<!--  Applicant process type-->

<script>
    $(document).ready(function () {
        $('#app_process_process_type_id').change(function () {
            var process_id = $('#app_process_process_type_id').val();
            $.ajax({
                url: siteurl + 'employee/File_process/Select_File_Process_Verification_process',
                type: 'POST',
                dataType: 'json',
                data: {'process_id': process_id},
                success: function (result) {
                    console.log(result);
                    $.each(result, function (resindex, resitem) {
                        var resi;
                        var mySelect = $('#file_process_app_status');
                        $('#file_process_app_status')
                                .empty()
                                .append('<option selected="selected" value="0">Select</option>')
                                ;

                        for (resi = 0; resi < resitem.length; resi++) {
                            var eachres = "<option value='" + resitem[resi]['file_process_id'] + "'>" + resitem[resi]['file_status_name'] + "</option>";
                            $('#file_process_app_status').append(eachres);
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
