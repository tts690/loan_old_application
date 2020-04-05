<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Faq Question Edit', 'cssFiles' => array())); ?>

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
                                <li class="active">FAQ'S Edit</li>  
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
<!---End of Alert-->
            <form action="<?php echo site_url('admin/faq_edit'); ?>" method="POST">
                <div class="form-group">

                    <?php
                    $id = $this->uri->segment('5');
                    $this->db->select('*');
                    $this->db->where('faq_question_id', $id);
                    $this->db->from('faq_answer');
                    //$this->db->join('faq_question', 'faq_question.faq_question_id = faq_answer.faq_question_id');
                    $query = $this->db->get();
                    //echo $this->db->last_query();
                    //die();
                    $data = $query->result();
                    foreach ($data as $value) { 
//                        print_r($value);
//                        die();
                    }
                        ?>
                    
                    <?php
                    $faq_Question_id = $this->uri->segment('5');
                    $this->db->select('*');
                    $this->db->where('faq_question_id', $id);
                    $this->db->from('faq_question');
                    $query = $this->db->get();
                    //echo $this->db->last_query();
                    $data1 = $query->result();
                    ?>

                    <div class="col-md-12">
                        <label>Query/Question</label> &nbsp;
                        <p style="color: red"><?php echo $data1[0]->question; ?><p><br/>
                       <!--textarea name="answer" row="10"><?php echo $value->answer ?></textarea-->
                        <!-- code-->
                        <div class="text-editor">
                            <label>Answer</label>
                            <textarea id="elm1" name="answer" rows="15" cols="72" style="width: 82.33%" class="tinymce">
                        <?php 
                        echo $value->answer; ?>
                            </textarea>
                        </div>                        
                        <!--code-->
                        <br/><br/>        
                        <input type="hidden" class="sbutton" value="<?php echo $this->uri->segment('5'); ?>" name="faq_id"/>

                        <input type="submit" class="sbutton" />
                        <input type="reset" name="reset" class="sbutton" id="sbutton" value="Reset" />
                    </div>    
            </form>
        </div>
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