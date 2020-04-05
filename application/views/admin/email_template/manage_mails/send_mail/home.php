<?php $this->load->view('employee/components/page_head', array('pageTitle' => 'Home', 'cssFiles' => array())); ?>


<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('admin/sidemenu'); ?>
        </div>
        <div class="right_col" role="main" style="min-height: 1296px;">
          
            <section class="page-top badmin">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Dashboard'); ?>">Admin</a></li>   

                                <li class="active">Compose Mail</li>
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
                <h2 class="">Compose Mail</h2>  
            </div-->

            <form action="<?php echo site_url('admin/select_email'); ?>" method="POST">
                <div class="group-swapping">
                    <div class="form-group selDiv select-group">
                        <div class="col-md-2 col-xs-12 col-sm-6"> <label>Select Group</label></div>
                        <div class="col-md-8 col-xs-12 col-sm-6">
                            <select class="" name="group_selecting">
                                <?php foreach ($data as $value) { ?>
                                    <option value="<?php echo $value->group_id; ?>"><?php echo $value->group_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-md-2 col-xs-12 col-sm-6"> 
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary sbutton" id="clickmail" value="Click View Email"/>
                            </div>
                        </div>  
                    </div>   
                </div>
            </form> 

            <div class="grp-display">      
                <form action="<?php echo site_url('admin/send_email'); ?>" method="POST">

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
                                        <td><input type="checkbox" class="id" name ="id[]" value="<?php echo $group_res['email']; ?>"/></td>
                                        <!--td align="center"><input type="checkbox" class="id" name="id" value="1"/></td-->
                                        <td><?php echo $group_res['email']; ?></td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>    
                        </table>
                    </div>
                    <div class="mail-details">
                        <div class="col-md-12 mail-setup">     

                            <div class="form-group">                                    
                                <div class="col-md-2 col-xs-12 col-sm-12"><label>From </label></div>                                    
                                <div class="col-md-10"><input type="text" value="info@myloandetails.com" id="subject"  name="from"/></div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-md-2 col-xs-12 col-sm-12"> <label>To&nbsp; </label></div>

                                <div class="col-md-10"> <input type="text" name="to" id="subject" /></div>
                            </div>
                        </div>
                        <div class="col-md-12 mail-subject"> 
                            <div class="form-group">
                                <div class="col-md-2 col-xs-12 col-sm-12">  <label>Subject&nbsp;</label></div>                                    
                                <div class="col-md-10"> <input type="text" name="subject" id="subject" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-editor">
                        <textarea id="elm1" name="template" rows="15" cols="72" style="width: 82.33%" class="tinymce">
                       
                        </textarea>
                    </div>                        
                    <input type="submit" class="sbutton" id="cbutton" value="Submit" />
                    <input type="reset" name="reset" class="sbutton" id="cbutton" value="Reset" />
          
            </form>
                  </div>
        </div>
    </div>
</div>
</body>

<?php $this->load->view('employee/components/page_tail', array('jsFiles' => array())); ?>
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