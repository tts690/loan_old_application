<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Bank Loan', 'cssFiles' => array())); ?>

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
                                 <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/bank/Bank_Creation'); ?>">Bank</a></li>                      
                                <li class="active">Bank Loan</li>  
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
              <!--Bug Alerts--->
            <?php if (!empty($error)) { ?>
                <div class="alert alert-success" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong><?php echo $error; ?> </strong>
                </div>
            <?php } ?>   

            <body class="nav-md">
                <div class="container body">
                    <div class="main_container">
                        <?php //$this->load->view('admin/sidemenu'); ?>
                    </div>
                    <form action="<?php echo site_url('admin/creating_bank_loan') ?>" method="POST">
                        <div class="row"> 
                            <div class="form-group">
                                <div class="col-md-2 col-xs-12">  <label for="sel1">Bank :</label></div>
                                <div class="col-md-4">
                                    <select id="selecting_bank_id" name="income_source_id">
                                        <option>Select</option>
                                        <?php foreach ($sr_bank_result as $value) { ?>
                                            <option value="<?php echo $value->id; ?>"><?php echo $value->BankName; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>   
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-2">  <label for="sel1">Loan :</label>  </div>  
                                <div class="col-md-4">  
                                    <select id="selecting_loan_id" name="loan_id">
                                        <option>Select</option>
                                        <?php foreach ($sr_loan_result as $values) { ?>
                                            Loan : <option value="<?php echo $values->id; ?>"><?php echo $values->LoanName; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        Resident Candidates<hr/>
                        Rate of Interest<br/><br/>
                        <div class="row">

                            <div class="form-group">
                                <div class="col-md-2 col-xs-12"><label for="sel1">Minimum(%) :</label></div>
                                <div class="col-md-4"><input type="text" name="res_min"/>
                                </div>
                            </div>
                        </div>
                  
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-2 col-xs-12"> <label for="sel1">Maximum(%) :</label></div>
                                    <div class="col-md-4"> <input type="text" name="res_max"/>
                                    </div>
                                </div>
                            </div>
                      
                            <div class="row">

                                <div class="form-group">
                                    <div class="col-md-2 col-xs-12">  <label for="sel1">Maximum Tenure :</label></div>
                                    <div class="col-md-4">  <input type="text" name="res_tenure"/>
                                    </div>
                                </div>
                            </div>
                     
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-2 col-xs-12">  <label for="sel1">AddBack IT :</label></div>
                                    <div class="col-md-4">   <input type="text" name="res_addbank"/>
                                    </div>
                                </div>
                            </div>
                      
                            <div class="checkbox" id="nri_appli">
                                <label><input type="checkbox" name="nri_app" class="coupon_question" onchange="valueChanged()">Applicable to NRI</label>
                            </div>
                        <div id="nri_app" style="display:none;">
                                NRI Candidates<hr/>
                                Rate of Interest<br/><br/>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-2 col-xs-12"> <label for="sel1">Minimum(%) :</label></div>
                                        <div class="col-md-4"><input type="text" name="nri_min" value="0"/>
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="row">

                                    <div class="form-group">
                                        <div class="col-md-2 col-xs-12">  <label for="sel1">Maximum(%) :</label></div>
                                        <div class="col-md-4"> <input type="text" name="nri_max" value="0"/>
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-2 col-xs-12">   <label for="sel1">Maximum Tenure :</label></div>
                                        <div class="col-md-4">   <input type="text" name="nri_tenure" value="0"/>
                                        </div>
                                    </div>
                                </div>
                             
                            </div>
                            <input type="submit" class="btn btn-primary sbutton"/>
                    </form>
                    <div id="div1"> 
                        <table class="table-responsive" id="mytable" border="1">
                            <th>Remove</th>
                            <th>Loan</th>
                            <th>Res Min ROI</th>
                            <th>Res Max ROI</th>
                            <th>Res Tenure</th>
                            <th>IT Amt</th>
                            <th>NRI Min ROI</th>
                            <th>NRI Max ROI</th>
                            <th>NRI Tenure</th>
                            <th>Applicable to NRI</th>
                        </table>
                    </div>
                </div>
                <div>
                </div>
        </div>
    </div>
</body>
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
<script type="text/javascript">
function valueChanged(){
    if($('.coupon_question').is(":checked"))   
        $("#nri_app").show();
    else
        $("#nri_app").hide();
}
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#selecting_bank_id').change(function () {
            var bank_id = $(this).val();
            $.ajax({
                url: siteurl + 'admin/manage_bank_loan/bank_loan/create_bank',
                type: 'POST',
                dataType: 'json',
                data: {'bank_id': bank_id},
                success: function (value) {
                    $.each(value, function (index, item) {
                        var i;
                        var cars = [item];
                        for (i = 0; i < cars.length; i++) {
                            var eachrow = "<tr>"
                                    + "<td><a href='" + siteurl + "admin/manage_bank_loan/bank_loan/remove_bank/" + cars[i]['sr_bank_loan_id'] + "'>" + "Remove" + "</a></td>"
                                    + "<td>" + cars[i]['LoanName'] + "</td>"
                                    + "<td>" + cars[i]['res_min_interest'] + "</td>"
                                    + "<td>" + cars[i]['res_max_interest'] + "</td>"
                                    + "<td>" + cars[i]['res_max_tenure'] + "</td>"
                                    + "<td>" + cars[i]['add_bank_it'] + "</td>"
                                    + "<td>" + cars[i]['nri_min_interest'] + "</td>"
                                    + "<td>" + cars[i]['nri_max_interest'] + "</td>"
                                    + "<td>" + cars[i]['nri_max_tenure'] + "</td>"
                                    + "<td>" + cars[i]['applicable_to_nri'] + "</td>"
                                    + "</tr>";
                            $('#mytable').append(eachrow);
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
        $('#selecting_bank_id').change(function () {
            $('#mytable').empty();
        });
    });
</script>
