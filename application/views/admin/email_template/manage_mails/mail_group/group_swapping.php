<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Group Swapping', 'cssFiles' => array())); ?>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'> 

<style>
    table, th, td {
        border: 1px solid gray;
        padding: 0 30px;
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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Dashboard'); ?>">Home</a></li>                                               
                                 <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/mail_group_setup'); ?>">Mail Group</a></li>                      
                                <li class="active">Mail Group Swapping</li>  
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--end-->
              <!--Bug Alerts--->     
            <?php if (!empty($error)) { ?>
                <div class="alert alert-danger" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong><?php echo $error; ?> </strong>
                </div>
            <?php } ?>  
            <!---End of Alert-->
            <!--div class="box-header with-border"> 
                <h2 class="">Group Swapping</h2>  
            </div--> 
            <form action="<?php echo site_url('admin/selected_email'); ?>" method="POST">
                <div class="group-swapping">
                    <div class="form-group selDiv select-group">
                        <div class="col-md-2"> <label>Select Group</label></div>
                        <div class="col-md-8">
                            <select class="" name="group_selecting">
                                <?php foreach ($data as $ms) { ?>
                                    <option value="<?php echo $ms->group_id; ?>"><?php echo $ms->group_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary sbutton" value="Display Email"/>
                            </div>
                        </div>  
                    </div>   
                </div>
            </form>      
            <div class="grp-display">      
                <form action="<?php echo site_url('admin/selecting_email'); ?>" method="POST">
                    <div class="col-md-8 center-block">
                        <table border="1" class="table table-bordered">
                            <tr>
                                <th><input type="checkbox" id="selectall" name="id[]"/></th>
                                <!--th><input type="checkbox" id="selectall"/></th-->
                                <th>Email</th>
                            </tr>
                            <?php if ($group_data) { ?>
                                <?php foreach ($group_data as $group_res) { ?>
                                    <tr>
                                        <td><input type="checkbox" class="id" name ="id[]" value="<?php echo $group_res['id']; ?>"/></td>
                                        <!--td align="center"><input type="checkbox" class="id" name="id" value="1"/></td-->
                                        <td><?php echo $group_res['email']; ?></td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>    
                        </table>
                    </div>
                    <!--grp-display -->
                    <div class="form-group selDiv swap-grp">
                        <div class="col-md-2"> <label>Swap Your Group</label></div>
                        <div class="col-md-8"> 
                            <select class="" name="group_id">
                                <?php foreach ($data as $value) { ?>
                                    <option value="<?php echo $value->group_id; ?>"><?php echo $value->group_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="submit" id="swap_submit" class="btn sbutton" value="Swap Email"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>



<!--Pagination--->

<!--script type='text/javascript'>
    jQuery(document).ready(function ($) {
        $('.table tbody').paginathing({
            perPage: 5,
            insertAfter: '.table'
        });
    });
</script-->
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
<!--Selectig Check--->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<!--- Selecting checkbox-->
<script>
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
</script>