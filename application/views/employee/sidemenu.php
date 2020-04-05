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
                $id = $this->session->userdata('ei');
                $query = $this->db->query("SELECT * FROM sr_employee WHERE sr_employee_id = '$id'");
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
                         ?>"/>
                     <?php } ?>
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->userdata('eu'); ?></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br>
           <br>
              <br>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
           
                <ul class="nav side-menu">
                    <li><a href="<?php echo base_url('employee/dashboard'); ?>"><i class="fa fa-home"></i> Home </a></li>
                    <li><a href="<?php echo base_url('employee/login'); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i>Login </a></li>
                    <li><a href="<?php echo base_url('employee/file_process'); ?>"><i class="fa fa-cogs" aria-hidden="true"></i>File Process </a></li>
                    <li><a href="<?php echo base_url('employee/disbursement'); ?>"><i class="fa fa-rupee" aria-hidden="true"></i>Disbursement </a></li>
                    <li><a href="<?php echo base_url('employee/search'); ?>"><i class="fa fa-search" aria-hidden="true"></i>Search</a></li>
                    <!--li><a href="<?php echo base_url('employee/Lead'); ?>"><i class="fa fa-hand-lizard-o" aria-hidden="true"></i>Leads<span class="fa fa-chevron-down"></span></a></li-->                   
                </ul>
            </div>
            <div class="menu_section">

                <ul class="nav side-menu">



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
                        $id = $this->session->userdata('ei');
                        $query = $this->db->query("SELECT * FROM sr_employee WHERE sr_employee_id = '$id'");
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
                             <?php echo $this->session->userdata('eu'); ?>
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="<?php echo site_url('employee/profile'); ?>"> Profile</a></li>
                        <li>
                            <a href="<?php echo site_url('employee/changepassword'); ?>">
                                <span>Change Password</span>
                            </a>
                        </li>
                        <li><a href="<?php echo site_url('employee/Help_Profile'); ?>">Help</a></li>
                        <li><a href="<?php echo site_url('employee/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                </li>           
            </ul>
        </nav>
    </div>
</div>