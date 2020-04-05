<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Interest Rate Create', 'cssFiles' => array())); ?>
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
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/manage_interest_rate/Interest_rate_Control'); ?>">Interest Rates</a></li>                      
                                <li class="active">Interest Rate Create</li>  
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

                <?php echo form_open_multipart('admin/intrest_rate_create', array('class' => 'col s12')); ?>
                <!--div class="form-group">
                  <label>Bank Name</label>
                  <input type="text" name="bank_name" placeholder="Enter Bank Name..."/>
                </div-->
                <div class="row">            
                    <div class="col-md-3">   <label>Bank Name</label></div>

                    <?php //echo $result->interest_rate;?>
                    <div class="col-md-6">  <select class="" name="bank_name">
                            <?php
                            $this->db->select('*');
                            $this->db->from('bank');
                            $query = $this->db->get();
                            $data = $query->result();
                            foreach ($data as $value) {
                                ?>
                                <option value="<?php echo $value->bank_id ?>"><?php echo $value->bank_name ?></option>
<?php } ?>    
                        </select>
                    </div>
                </div><br/>
                <div class="row" >
                    <div class="text-editor">
                        <div class="col-md-3">     <label>Interest Rates</label></div>
                        <div class="col-md-6">  <textarea id="elm1" name="interest_rate" rows="10" cols="72" style="width: 53.33%" class="tinymce">                       
                            </textarea></div>
                    </div> 
                </div> 
              

                <div class="row">                  
                        <div class="form-group">
                            <div class="col-md-3">
                                 <label class="label-control" for="photoUrl">Bank Logo</label>
                            </div>
                            <div class="col-md-4">
                                <input type="file" id="photoUrl" name="photoUrl">
                            </div> 
                        </div>                   
                </div>
                

                <div class="row" >
                    <div class="text-editor">
                        <div class="col-md-3">     <label>Tenure</label>       </div>             
                        <div class="col-md-6">  <textarea name="tenure" rows="10" cols="72" style="width: 53.33%" class="tinymce">                       
                            </textarea></div>
                    </div>
                </div> 
                
                <div class="row" >
                    <div class="text-editor">
                        <div class="col-md-3">    <label>About</label>      </div>              
                        <div class="col-md-6"> <textarea name="about" rows="10" cols="72" style="width: 53.33%" class="tinymce">                       
                            </textarea></div>
                    </div>
                </div> 
             
                <div class="row" >
                    <div class="text-editor">
                        <div class="col-md-3">   <label>Features</label>      </div>               
                        <div class="col-md-6"> <textarea name="features" rows="10" cols="72" style="width: 53.33%" class="tinymce">                       
                            </textarea></div>
                    </div>
                </div> 
               
                <h4>SEO Settings</h4>
                <hr>
                <div class="row" >
                    <div class="form-group">
                        <div class="col-md-3"><label>Title</label></div>
                        <div class="col-md-6"><input type="text" name="title" placeholder="Enter Title..."/></div>
                    </div>
                </div> 
                <div class="row" >
                    <div class="form-group">
                        <div class="col-md-3">    <label>Description</label></div>
                        <div class="col-md-6"> <textarea class="form-control" rows="3" placeholder="Enter Description..." name="description"></textarea></div>
                    </div>
                </div> 
               
                <div class="row" >
                    <div class="form-group">
                        <div class="col-md-3">  <label>Keywords</label></div>
                        <div class="col-md-6"><input type="text" name="keywords" placeholder="Enter Keywords..."/></div>
                    </div>
                </div>        

                <input type="submit" value="Create" class="btn btn-primary sbutton"/>
                <input type="reset" value="Reset" class="btn btn-primary sbutton"/>
            <?php echo form_close(); ?>
        </div>
    </div>
</body>
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>

<script>
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
            theme_advanced_buttons1: "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontsizeselect",
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

<!--Pagination--->

<!--script type='text/javascript'>
    jQuery(document).ready(function ($) {
        $('.table tbody').paginathing({
            perPage: 5,
            insertAfter: '.table'
        });
    });
</script-->

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