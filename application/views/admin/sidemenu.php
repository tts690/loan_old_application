<link href="https://fonts.googleapis.com/css?family=Prompt:400,600" rel="stylesheet">
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo site_url('admin/Dashboard'); ?>" class="site_title"><img src="<?php echo base_url(); ?>images/myloandetailsogo.svg" alt="..." class="img-responsive admin-logo"></a>
        </div>
        <div class="clearfix"></div>
        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <?php
                $id = $this->session->userdata('i');
                $query = $this->db->query("SELECT * FROM profiles WHERE id = '$id'");
                $data = $query->result();
                ?>
                <?php if (isset($data[0]->photoUrl)) { ?> 
                    <img style="margin-top:10px; border-radius:50%; border: 3px solid #aaa; height:70px; width:70px;" 
                         src="<?php
                         if (!$var = $data[0]->photoUrl == Null && $data[0]->photoUrl == '') {
                             echo base_url('uploads/' . $data[0]->photoUrl);
                         } else {
                             echo base_url('uploads/default.png');
                         }
                         ?>" class="img-circle profile_img"/>
                     <?php } ?>
    <!--img src="<?php echo base_url(); ?>images/ram_shreekanth.jpg" alt="..." class="img-circle profile_img"-->
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
               
                <ul class="nav side-menu">
                    <li><a href="<?php echo base_url('admin/Dashboard'); ?>"><i class="fa fa-home"></i>Home</a></li>


                    <li><a><i class="fa fa-envelope" aria-hidden="true"></i>Manage Mails <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu"> 
                            <li class="sub_menu"><a href="<?php echo site_url('admin/mailling_setup'); ?>">Mail Setup</a>
                            </li>
                            <li class="sub_menu"><a href="<?php echo site_url('admin/mail_group_setup'); ?>">Group Setup</a> </li>

                            <li class="sub_menu"><a href="<?php echo site_url('admin/sending_mail') ?>">Send Mail</a> </li>
                        </ul>
                    </li> 

                    <li><a><i class="fa fa-map-signs" aria-hidden="true"></i>State Master <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">              
                            <li><a href="<?php echo site_url('admin/manage_states'); ?>">Manage States</a></li> 
                        </ul>
                    </li>

                    <li><a><i class="fa fa-university" aria-hidden="true"></i>Bank & Loan Master <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo site_url('admin/bank_create'); ?>">Manage Banks</a></li>
                            <li><a href="<?php echo site_url('admin/mail_value_setting'); ?>">Mail Values</a></li>
                            <li><a href="<?php echo site_url('admin/foir_iir/foir_control'); ?>">FOIR & IIR</a></li>
                            <li><a href="<?php echo site_url('admin/loan_control'); ?>">Manage Loans</a></li>
                            <li class="sub_menu"><a href="<?php echo site_url('admin/product_description') ?>">Product Description</a> </li>
                            <li><a href="<?php echo site_url('admin/document_control'); ?>">Loan Documents</a></li>
                            <li><a href="<?php echo base_url('admin/personal_loan'); ?>"> Personal Loan </a></li>
                            <li><a href="<?php echo base_url('admin/business_loan'); ?>"> Business Loan </a></li>
                        </ul>
                    </li>


                    <li><a href="<?php echo site_url('admin/draft'); ?>"><i class="fa fa-files-o" aria-hidden="true"></i>Draft Agreements</a></li>
                    <li><a href="<?php echo site_url('admin/faqs'); ?>"><i class="fa fa-question" aria-hidden="true"></i>FAQ’s</a></li> 
                    <li><a href="<?php echo site_url('admin/Offers'); ?>"><i class="fa fa-gift" aria-hidden="true"></i>Offer’s</a></li> 

                    <li><a><i class="fa fa-sitemap" aria-hidden="true"></i>Applicants Master <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Applicant Details</a></li> 
                            <li><a href="#">Setup Applicant Mail</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-user-plus" aria-hidden="true"></i>User Master <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo site_url('admin/employee_control'); ?>">Manage Employee</a></li>
                            <li><a href="<?php echo site_url('admin/agency_control'); ?>">Manage Agency</a></li>
                            <!--li><a href="#">Manage Web User</a></li>    
                            <li><a href="#">Manage Signups</a></li--> 
                        </ul>
                    </li>


                    <li><a><i class="fa fa-file" aria-hidden="true"></i>File System Master<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo site_url('admin/file_status_control'); ?>">File Status Master</a></li>
                            <li><a href="<?php echo site_url('admin/file_process_control'); ?>">File Process Status</a></li>
                        </ul>
                    </li>

                    <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i><i class="fa fa-file-text-o" aria-hidden="true"></i>Logged in Files</a></li> 
<!--                    <li><a><i class="fa fa-cogs" aria-hidden="true"></i> Site Setting <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">




                            <li><a href="#">Subscribe Mails</a></li>


                            <li><a>Product Description<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">

                                    li class="sub_menu"><a href="">Update Email</a> </li>
                                     <li class="sub_menu"><a href="">Delete Email</a> </li

                                </ul>                                                                                
                            </li>

                            <li><a href="#"></a></li>
                        </ul>
                    </li>-->
                </ul>
            </div>


        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

                        <?php
                        $id = $this->session->userdata('i');
                        $query = $this->db->query("SELECT * FROM profiles WHERE id = '$id'");
                        $data = $query->result();
                        ?>
                        <?php if (isset($data[0]->photoUrl)) { ?> 
                            <img style="margin-top:10px; border-radius:50%; border: 3px solid #aaa; height:30px; width:30px;" 
                                 src="<?php
                                 if (!$var = $data[0]->photoUrl == Null && $data[0]->photoUrl == '') {
                                     echo base_url('uploads/' . $data[0]->photoUrl);
                                 } else {
                                     echo base_url('uploads/default.png');
                                 }
                                 ?>"/>
                             <?php } ?>
                             <?php echo ucfirst($this->session->userdata('n')); ?>
                        <span class=" fa fa-angle-down"></span>

                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="<?php echo site_url('admin/profile'); ?>"> Profile</a></li>
                        <li>
                            <a href="<?php echo site_url('admin/changepassword'); ?>">
                                <span>Change Password</span>
                            </a>
                        </li>
                        <li><a href="<?php echo site_url('admin/help_profile'); ?>">Help</a></li>
                        <li><a href="<?php echo site_url('admin/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                </li> 

            </ul>
        </nav>
    </div>
</div>