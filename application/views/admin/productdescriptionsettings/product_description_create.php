<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Create Product description', 'cssFiles' => array())); ?>

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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/product_description/Product_Description_Control'); ?>">Product Description</a></li>                      
                                <li class="active">Product Description Create</li>  
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
            <!--div class="box-header with-border"> 
                <h2 class=""> Product Description Creation</h2>  
            </div-->

            <form action="<?php echo site_url('admin/product_createion'); ?>" method="POST">
                <div class="group-swapping">
                  
                         <div class="row">
                        <div class="form-group selDiv select-group">                        
                            <div class="col-md-4 col-xs-12"> <label> Income Source </label></div>
                            <div class="col-md-6 col-xs-12">
                                <select name="income_source" id="income_source">
                                    <option value="R">Resident-Salaried</option>
                                    <option value="S">Resident - SelfEmployed</option>
                                    <option value="N">NRI - Salaried</option>
                                    <option selected="selected" value="Select">Select</option>
                                </select>                       
                            </div>
                        </div> 
                         </div>
                        <div class="row">
                        <div class="form-group selDiv select-group">                        
                            <div class="col-md-4 col-xs-12"><label> Select Bank </label></div>
                            <div class="col-md-6 col-xs-12">
                                <select name="bank_id" id="bank_id">
                                    <option value="1">Banks Considering Gross Income</option>
                                    <option value="2">Banks Considering Net Income</option>
                                    <option selected="selected" value="0">Select</option>
                                </select>                      
                            </div>
                        </div>   
                        </div>
                         <div class="row">
                        <div class="form-group selDiv select-group">                        
                            <div class="col-md-4 col-xs-12"><label> Loan </label></div>
                            <div class="col-md-6 col-xs-12">
                                <select name="selected_loan[]" id="selected_loan">
                                    <option>Select</option>
                                </select>
                            </div>
                        </div>  
                    </div>
                 
                </div>
                <div class="row">
                    <div class="form-group selDiv select-group">                        
                        <div class="text-editor">
                            <div class="col-md-4"> <label>Admin and Processing Fee </label> </div>                   
                            <div class="col-md-6">  
                                <textarea id="" name="processing_fee" rows="15" cols="72" style="width: 82.33%" class="tinymce">                       
                                </textarea>
                            </div>
                        </div>          
                    </div>
                </div>
                 <div class="row">
                    <div class="form-group selDiv select-group">                        
                        <div class="text-editor">
                            <div class="col-md-4"><label>Description </label></div>                    
                            <div class="col-md-6">  
                                <textarea id="" name="description" rows="15" cols="72" style="width: 82.33%" class="tinymce">                       
                                </textarea>
                            </div>
                        </div>           
                    </div>
                 </div>
                 <div class="row">
                    <div class="form-group selDiv select-group">                        
                        <div class="text-editor">
                            <div class="col-md-4"><label>Sanction Conditions </label>   </div>                 
                            <div class="col-md-8">
                                <textarea id="" name="sanction" rows="15" cols="72" style="width: 82.33%" class="tinymce">                       
                                </textarea>
                            </div>
                        </div>           
                    </div>
                 </div>
                 <div class="row">
                    <div class="form-group selDiv select-group">                        
                        <div class="text-editor">
                            <div class="col-md-4"><label>Legal and Technical Conditions</label> </div>                   
                            <div class="col-md-8"> 
                                <textarea id="" name="legal" rows="15" cols="72" style="width: 82.33%" class="tinymce">                       
                                </textarea>
                            </div>
                        </div> 
                    </div>
                    </div>
                 <div class="row">
                    <div class="form-group selDiv select-group">                       
                        <div class="text-editor">
                            <div class="col-md-4"><label>Disbursement Conditions </label> </div>                   
                            <div class="col-md-8">  
                                <textarea id="" name="disbursement" rows="15" cols="72" style="width: 60.33%" class="tinymce">                       
                                </textarea>
                            </div>
                        </div>                     
                    </div> 
                 </div>
                 <div class="row">
                    <div class="form-group selDiv select-group">                        
                        <div class="text-editor">
                            <div class="col-md-4"> <label>Pre Closure Conditions </label></div>                    

                            <div class="col-md-8"><textarea id="" name="closure" rows="15" cols="72" style="width: 82.33%" class="tinymce">                       
                                </textarea>  </div>               
                        </div>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" class="sbutton" id="cutton" value="Submit" />
                    <input type="reset" name="reset" class="sbutton" id="cbuton" value="Reset" />
                </div>
            </form>    
        </div>
</body>

<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>
<script type="text/javascript">
    if (document.location.protocol == 'file:') {
        alert("The examples might not work properly on the local file system due to security settings in your browser. Please use a real webserver.");
    }
</script>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("jquery", "1");
</script>
<!-- Load TinyMCE -->
<script type="text/javascript" src="<?php echo base_url(); ?>tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>tinymce/jscripts/tiny_mce/jquery.tinymce.js"></script>
<script type="text/javascript">
    $().ready(function () {
        $('textarea.tinymce').tinymce({
            // Location of TinyMCE script
            script_url: "<?php echo base_url(); ?>tinymce/jscripts/tiny_mce/jquery.tinymce.js",
            // General options
            theme: "advanced",
            plugins: "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist",
            // Theme options
            theme_advanced_buttons1: "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
            theme_advanced_buttons2: "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
            theme_advanced_buttons3: "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
            theme_advanced_buttons4: "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
            theme_advanced_toolbar_location: "top",
            theme_advanced_toolbar_align: "left",
            theme_advanced_statusbar_location: "bottom",
            theme_advanced_resizing: true,
            // Example content CSS (should be your site CSS)

            // Drop lists for link/image/media/template dialogs
            template_external_list_url: "lists/template_list.js",
            external_link_list_url: "lists/link_list.js",
            external_image_list_url: "lists/image_list.js",
            media_external_list_url: "lists/media_list.js",
            // Replace values for the template plugin
            template_replace_values: {
                username: "Some User",
                staffid: "991234"
            }
        });
    });
</script>

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

<script>
    $(document).ready(function () {
        $('#bank_id').change(function () {
            var bank_id = $('#bank_id').val();
            $.ajax({
                url: siteurl + 'admin/product_description/Product_Description_Control/Get_Product_Loan',
                type: 'POST',
                dataType: 'json',
                data: {'bank_id': bank_id},
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
        $('#bank_id').change(function () {
            $('#selected_loan').empty();
        });
    });
</script>