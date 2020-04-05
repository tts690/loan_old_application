<?php $this->load->view('employee/components/page_head', array('pageTitle' => 'Disbursment', 'cssFiles' => array())); ?>

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">


<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('employee/sidemenu'); ?>
        </div>
        <div class="right_col" role="main" style="min-height: 1296px;">
         
            <!--content-->
            <div class="row">
                <div class="col-md-12">
                    <br>
                </div>
            </div>
            <section class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('employee/Dashboard'); ?>" >Home</a></li>                                               
                                <li class="active">Disbursement</li> 
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
            <div class="row" >
                <div class="col-md-6">                
                    <div class="dlet">
                        <form>
                            <div class="row">   
                                <div class="col-md-3"><h5>Month</h5></div>
                                <div class="col-md-6">
                                    <select name="">
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
                                <div class="col-md-3"><h5>Year</h5></div>
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
                        </form>
                        <form action="<?php echo site_url('employee/disbursment_create'); ?>" method="POST">

                            <div class="urc">
                                <div class="row">
                                    <div class="col-md-3"><h5>Income Source</h5></div>
                                    <div class="col-md-6"> <select class="" name="income_source_id" id="income_source">
                                            <option>Select</option>
                                            <option value="R">Resident - Salaried</option>
                                            <option value="N">NRI - Salaried</option>
                                            <option value="S">Resident - Self Employed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5>Select URC </h5>
                                    </div>
                                    <div class="col-md-6">
                                        <select name="urc_no" id="urc_no">
                                            <option>SELECT</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div>    
                                <div class="row">    
                                    <div class="col-md-3"><h5>Disbursement </h5></div>
                                    <div class="col-md-6">
                                        <select name="file_process_id">
                                            <option>Select</option>
                                            <option value="1">Pending</option>
                                            <option value="13">Disbursed</option>
                                        </select>  
                                    </div> 
                                </div>
                                <div class="row">    
                                    <div class="col-md-3">Remarks </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="4" col="3" id="comment" name="remarks"></textarea> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">    
                                    <div class="col-md-3">Amount </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="" id="sname" value="" name="amount"/> 
                                        </div>
                                    </div>
                                </div>   
                                <div class="coll">  
                                    <div class="form-group"><input type="hidden" class="" id="sname" value="<?php echo 'emp' ?>" name="role"/></div>
                                </div>

                                <input type="Submit" value="Update" class="sbutton">
                                <input type="Reset" class="sbutton">
                                </form>   
                            </div>
                    </div>
                </div>
                <div class="">
                    <div class="col-md">   

                        <div class="table-menu">
                            <a href="<?php echo site_url('employee/disbursment_creation_doc'); ?>" class="btn btn-primary">Create </a>
                        </div> 
                        <div class="table-content table-responsive">   
                            <table id="examples" class="display tvalues" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <!--th>ID</th-->                            
                                        <th>Documents Name</th>
                                        <th>Status</th>
                                        <th>Created on</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <!--th>ID</th-->  
                                        <th>Documents Name</th>
                                        <th>Status</th>
                                        <th>Created on</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ($data) { ?>
                                        <?php foreach ($data as $value) { ?>
                                            <tr>
                                                <!--td><?php //echo $value->disbursment_document_id;  ?></td-->
                                                <td><?php echo $value->disbursment_document_name; ?></td>
                                                <td><?php
                                    if ($value->status == 0) {
                                        echo "Required";
                                    } else {
                                        echo "Received";
                                    }
                                            ?></td>
                                                <td><?php echo $value->created_on; ?></td>
                                                <td><a href="<?php echo site_url('employee/Disbursement/EDIT_disbursement_doc/' . $value->disbursment_document_id) ?>" class="btn btn-primary sbutton">Edit</a></td>
                                                <td><a href="<?php echo site_url('employee/Disbursement/Deleteing_disbursement_doc/' . $value->disbursment_document_id) ?>" class="btn btn-primary sbutton">Delete</a></td>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
            </div>
            <br>
            <!--content-->
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
