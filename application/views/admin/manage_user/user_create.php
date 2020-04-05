<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Manage States Bank Create', 'cssFiles' => array())); ?>
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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/manage_states/State_Bank'); ?>">State Bank</a></li>                      
                                <li class="active">State Bank Create</li>  
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
            <form action="<?php echo site_url('admin/state_bank_controlling_system'); ?>" method="POST">
                <div class="form-group">
                    <label for="sel1">State :</label>
                    <select id="selecting_state_id" name="state_id">
                        <option>Select</option>
                        <?php foreach ($data as $result) { ?>                        
                            <option value="<?php echo $result->sr_state_id; ?>"><?php echo $result->state_name; ?></option>
                        <?php } ?>
                    </select>
                </div>    
                <div id="div1"> 
                    <table id="mytable" border="1" name="selectall[]">
                        <th><input type="checkbox" name="selectall[]" id="selectall"/></th>
                        <th>Bank Name</th>
                        <?php
                        $this->db->select('*');
                        $this->db->from('income_source');
                        $query = $this->db->get();
                        $bank_result = $query->result();
                        ?>
                        <?php foreach ($bank_result as $result_bank) { ?>
                            <tr>
                                <td><input type="checkbox" name="selectall[]" id="selectall" class="id" value="<?php echo $result_bank->income_source_id; ?>"/></td>
                                <td>
                                    <?php echo $result_bank->income_source_name; ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div><br/><br/>
                <input type="submit" value="Save" class="btn btn-primary sbutton"/>
                <input type="reset" value="Reset" class="btn btn-primary sbutton"/>
            </form>
        </div>
    </div>
</body>
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#selecting_state_id').change(function () {
            var state_id = $(this).val();
            //alert(siteurl);
            $.ajax({
                url: siteurl + 'admin/manage_states/State_Bank/Selecting_State_Bank',
                type: 'POST',
                dataType: 'json',
                data: {'state_id': state_id},
                success: function (result) {
                    console.log(result);
                    $.each(result, function (index, item) {
                        var i;
                        var cars = [item];
                        for (i = 0; i < cars.length; i++) {
                            $("input:checkbox").each(function () {
                                var c = $(this).val();
                                if (c == cars[i]['income_source_id'])
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
</script>
<script>
    $(function () {
        $("#selectall").click(function () {
            $('.id').attr('checked', this.checked);
        });
        $(".id").click(function () {

            if ($(".id").length == $(".id:checked").length) {
                $("#selectall").attr("checked", "checked");
            } else {
                $("#selectall").removeAttr("checked");
            }

        });
    });
</script>