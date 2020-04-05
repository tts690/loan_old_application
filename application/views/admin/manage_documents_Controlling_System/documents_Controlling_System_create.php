<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Documents Controlling Create', 'cssFiles' => array())); ?>
<style>
    .row{
        margin-bottom: 10px;
    }
</style>
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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/manage_documents/Document_Control'); ?>">Manage Documents</a></li>                      
                                <li class="active">Document Create</li>  
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

            <form action="<?php echo site_url('admin/save_documents'); ?>" method="POST">
                <div class="row">
                    <div class="col-md-2 col-xs-12"> Income Source</div>
                    <div class="col-md-4">            
                        <select name="income_source" id="selected_value">
                            <option>Select</option>
                            <option value="R">Resident - Salaried</option>
                            <option value="N">NRI - Salaried</option>
                            <option value="S">Resident - Self Employed</option>
                        </select>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-2  col-xs-12"> Bank</div>
                    <div class="col-md-4">            
                        <select name="selected_bank" id="selected_bank">
                            <option>Select</option>
                            <option value="1">Banks Considering Gross Income</option>
                            <option value="2">Banks Considering Net Income</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2  col-xs-12">Loan</div>
                    <div class="col-md-4">            
                        <select name="selected_loan[]" id="selected_loan">
                            <option>Select</option>
                        </select>
                    </div>
                </div>
                <br>
                
                <div id="div1"> 
                    <table id="mytable" border="1">
                        <th><input type="checkbox" name="selectall[]" id="selectall"/></th>
                        <th>Document Code</th>
                        <th>Document Name</th>
                    </table>
                </div><br/>
                <input type="submit" value="Save" class="btn btn-primary sbutton"/>
            </form>
        </div>
    </div>
</body>
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#selected_value').change(function () {
            var document_value_result = $(this).val();
            $.ajax({
                url: siteurl + 'admin/manage_documents/Document_Controlling_System/document_control_system',
                type: 'POST',
                dataType: 'json',
                data: {'income_source_value': document_value_result},
                success: function (value) {
                    $.each(value, function (index, item) {
                        var i;
                        var cars = [item];

                        $(function () {

                            // add multiple select / deselect functionality
                            $("#selectall").click(function () {
                                $('.id').attr('checked', this.checked);
                            });

                            // if all checkbox are selected, check the selectall checkbox
                            // and viceversa
                            $(".id").click(function () {

                                if ($(".id").length == $(".id:checked").length) {
                                    $("#selectall").attr("checked", "checked");
                                } else {
                                    $("#selectall").removeAttr("checked");
                                }

                            });
                        });


                        for (i = 0; i < cars.length; i++) {
                            var eachrow = "<tr>"
                                    + '<td><input type="checkbox" class="id" name="selectall[]" value="' + cars[i]['id'] + '"/></td>'
                                    + "<td>" + cars[i]['doc_code'] + "</td>"
                                    + "<td>" + cars[i]['doc_name'] + "</td>"
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
        $('#selected_value').change(function () {
            $('#mytable').empty();
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#selected_bank').change(function () {
            var selected_bank = $(this).val();
            $.ajax({
                url: siteurl + 'admin/manage_documents/Document_Controlling_System/selecting_bank',
                type: 'POST',
                dataType: 'json',
                data: {'selected_bank': selected_bank},
                success: function (result) {
                    $.each(result, function (resindex, resitem) {
                        console.log(resindex);
                        var resi;
                        var rescars = [resitem];
                        var mySelect = $('#selected_loan');

                        for (resi = 0; resi < rescars.length; resi++) {
                            var eachres = "<option value='" + rescars[resi]['id'] + "'>" + rescars[resi]['LoanName'] + "</option>";
                            $('#selected_loan').append(eachres);
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
        $('#selected_loan').change(function () {
            var selected_income = $('#selected_value').val();
            var selected_bank = $('#selected_bank').val();
            var selected_loan = $('#selected_loan').val();

            $.ajax({
                url: siteurl + 'admin/manage_documents/Document_Controlling_System/document_check',
                type: 'POST',
                dataType: 'json',
                data: {'selected_loan': selected_loan, 'selected_bank': selected_bank, 'selected_income': selected_income},
                success: function (result) {
                    console.log(result);
                    $.each(result, function (index, item) {
                        var i;
                        var cars = [item];
                        for (i = 0; i < cars.length; i++) {

                            $("input:checkbox").each(function () {
                                var c = $(this).val();
                                if (c == cars[i]['document_id'])
                                {
                                    $(this).attr('checked', true);
                                }

                            });

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