<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'Online Home Loan File Status Tracking Tool – Myloandetails.com', 'cssFiles' => array())); ?>
<meta name="description" content="Usually customers want to know their file status during the home loan process. But people face different types of situations where they are wrongly communicated about their application status in the bank. To avoid this and to give status of the file at each and every step of the process we are giving this facility to customers where they will be provided with a Unique Reference Code (URC) number with which they track their file.">
<meta name="keywords" content="home loan file status, home loan file tracker, home loan application tracker, loan application tracker, loan application status">
<?php $staticContent = base_url(); ?>
<!--Bug Alerts--->     
<?php if (!empty($error)) { ?>
    <div class="alert alert-success" id="success-alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong><?php echo $error; ?> </strong>
    </div>
<?php } ?>  
<!---End of Alert-->

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><img src="<?php echo $staticContent; ?>images/icons/file_status.png"></h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>">Home</a></li> 
                        <li class="active">File Status</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="inner-content">
        <div class="container">
            <h2><strong>Home Loan File Status</strong></h2>
            <div class="row">
                <div class="col-md-12">

                    <p class="lead"> Normally customers want to know their file status during the home loan process. But people face different types of situations where they wrongly communicated about their application in the bank. To avoid this and to give status of the file at each step of the process we are giving this facility to customers where they will be provided with a Unique Reference Code (URC) number with which they track their file. 
                    </p>
                    <br>
                    <form action="<?php echo site_url('Home_Loan_File_Status'); ?>" method="POST">
                        <div class="file-buttons">
                            <label style="font-weight: 600">Enter Your URC Code</label>
                            <input type="text" name="urc_code" required>                       
                            <button type="submit" class="fbuttons btn" id="nbutton">Submit</button>
                            <button type="button" class="fbuttons btn" id="tbutton">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <?php if ($result) { ?>
            <div class="container">
                <div class="row">

                    <div class="col-md-9 file_status">
                        <div class="row" style="text-align: center">

                            <div class="update-head">                           
                                <h4> File Last Updated  </h4>
                            </div>
                            <!--file status -->
                            <div class="table-responsive">
                                <div class="update-head">
                                    <table class="table">
                                        <thead>                                
                                            <tr>                              
                                                <th class="subhead"><h4>Employee Name</h4></th>
                                        <th class="subhead"><h4>Mobile Number</h4></th>
                                        <th class="subhead"><h4>Email Id</h4></th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td class="tvalue"><p><?php echo $result[0]->emp_agn_name; ?><p></td>
                                                <td class="tvalue"> <p> <?php echo $result[0]->emp_agn_mob; ?> </p></td>
                                                <td class="tvalue"><p><?php echo $result[0]->emp_agn_email; ?></p></td>                                          
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>  


                        <div class="first_row"> 
                            <div class="row">
                                <div class="">
                                    <div class="col-md-6">
                                        <div class="update-head">                           
                                            <h4>Applicant </h4>
                                        </div>
                                        <div class="table-responsive">
                                            <div class="update-head">
                                                <table class="table">
                                                    <thead>                                

                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td><p class="span">&nbsp;&nbsp;Name<p></td>
                                                            <td><p><?php echo $result[0]->applicant_name; ?></td>

                                                        </tr>
                                                        <tr>
                                                            <td><p class="span">&nbsp;&nbsp;Address<p></td>
                                                            <td> <p> <?php echo $result[0]->a_permanent_address; ?> </p></td>

                                                        </tr>
                                                        <tr>
                                                            <td><p class="span">&nbsp;&nbsp;Phone No<p></td>
                                                            <td> <p> <?php echo $result[0]->a_res_land; ?> </p></td>

                                                        </tr>
                                                        <tr>
                                                            <td><p class="span">&nbsp;&nbsp;Mobile No<p></td>
                                                            <td> <p><?php echo $result[0]->a_mob; ?> </p></td>

                                                        </tr>
                                                        <tr>
                                                            <td><p class="span">&nbsp;&nbsp;Mail Id<p></td>
                                                            <td> <p>  <?php echo $result[0]->a_personal_email; ?></p></td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="update-head">                         
                                            <h4>Co-Applicant </h4>
                                        </div>
                                        <div class="table-responsive">
                                            <div class="update-head">
                                                <table class="table">
                                                    <thead>                              

                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><p class="span">&nbsp;&nbsp;Name<p></td>
                                                            <td><p><?php echo $result[0]->co_applicant_name; ?></p></td>
                                                        </tr>
                                                        <tr>
                                                            <td><p class="span">&nbsp;&nbsp;Address<p></td>
                                                            <td> <p><?php echo $result[0]->co_permanent_address; ?> </p></td>
                                                        </tr>
                                                        <tr>
                                                            <td><p class="span">&nbsp;&nbsp;Phone No<p></td>
                                                            <td> <p> <?php echo $result[0]->co_res_land; ?> </p></td>
                                                        </tr>
                                                        <tr>
                                                            <td><p class="span">&nbsp;&nbsp;Mobile No<p></td>
                                                            <td> <p><?php echo $result[0]->co_mob; ?> </p></td>
                                                        </tr>
                                                        <tr>
                                                            <td><p class="span">&nbsp;&nbsp;Mail Id<p></td>
                                                            <td> <p><?php echo $result[0]->co_personal_email; ?></p></td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="">
                                <div class="update-head">                           
                                    <h4>Verification </h4>
                                </div>
                            </div>
                            <!--verification end-->
                            <div class="first_row"> 
                                <div class="upades">
                                    <div class="">

                                        <div class="update-head">
                                            <h4>Applicant Verification </h4>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="update-head">
                                            <table class="table">
                                                <thead>                                
                                                    <tr>                              
                                                        <th class="subhead"><h4>Process</h4></th>
                                                <th class="subhead"><h4>Status</h4></th>
                                                <th class="subhead"><h4>Reason</h4></th>                                                     
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="tvalue"><p><?php
                                                                $process_id = $result[0]->app_process_process_type_id;
                                                                $this->db->select('*');
                                                                $this->db->from('process');
                                                                $this->db->where('process_id', $process_id);
                                                                $query = $this->db->get();
                                                                $data1 = $query->result();
                                                                echo $data1[0]->process_name;
                                                                ?><p></td>
                                                        <td class="tvalue"> <p> <?php
                                                                $file_process_id = $result[0]->file_process_app_status;
                                                                $this->db->select('*');
                                                                $this->db->from('file_process');
                                                                $this->db->where('file_process_id', $file_process_id);
                                                                $query = $this->db->get();
                                                                $data1 = $query->result();
                                                                echo $data1[0]->file_status_name;
                                                                ?> </p></td>
                                                        <td class="tvalue"><p><?php
                                                                $file_process_id = $result[0]->file_process_app_status;
                                                                $this->db->select('*');
                                                                $this->db->from('file_process');
                                                                $this->db->where('file_process_id', $file_process_id);
                                                                $query = $this->db->get();
                                                                $data1 = $query->result();
                                                                echo $data1[0]->file_status_name;
                                                                ?></p></td>                                          
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="first_row"> 
                                <div class="upades">
                                    <div class="">
                                        <div class="update-head">
                                            <div class="sub-head">
                                                <h4>Co-Applicant Verification </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="update-head">
                                            <table class="table">
                                                <thead>                                
                                                    <tr>                              
                                                        <th class="subhead"><h4>Process</h4></th>
                                                <th class="subhead"><h4>Status</h4></th>                                          
                                                <th class="subhead"><h4>Reason</h4></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="tvalue"><p><?php
                                                                $process_id = $result[0]->co_process_process_type_id;
                                                                $this->db->select('*');
                                                                $this->db->from('process');
                                                                $this->db->where('process_id', $process_id);
                                                                $query = $this->db->get();
                                                                $data1 = $query->result();
                                                                echo $data1[0]->process_name;
                                                                ?><p></td>
                                                        <td class="tvalue"> <p> <?php
                                                                $file_process_id = $result[0]->file_process_co_status;
                                                                $this->db->select('*');
                                                                $this->db->from('file_process');
                                                                $this->db->where('file_process_id', $file_process_id);
                                                                $query = $this->db->get();
                                                                $data1 = $query->result();
                                                                echo $data1[0]->file_status_name;
                                                                ?> </p></td>
                                                        <td class="tvalue"><p><?php echo $result[0]->co_remarks; ?></p></td>                                          
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>   
                            </div>
                        </div>  
                        <!--ELIGIBILITY AND SANCTION :-->
                        <div class="row">
                            <div class="">
                                <div class="update-head">                           
                                    <h4> ELIGIBILITY AND SANCTION  </h4>
                                </div>
                            </div>

                            <!--verification end-->
                            <div class="first_row"> 
                                <div class="upades">
                                    <div class="">

                                        <div class="update-head">
                                            <h4>Applicant ELIGIBILITY AND SANCTION  </h4>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="update-head">
                                            <table class="table">
                                                <thead>                                
                                                    <tr>                              
                                                        <th class="subhead"><h4>Process</h4></th>
                                                <th class="subhead"><h4>Status</h4></th>                                          
                                                <th class="subhead"><h4>Reason</h4></th>                                                                        
                                                </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td class="tvalue"><p><?php
                                                                $process_id = $result[0]->eli_app_process_type_process_id;
                                                                $this->db->select('*');
                                                                $this->db->from('process');
                                                                $this->db->where('process_id', $process_id);
                                                                $query = $this->db->get();
                                                                $data1 = $query->result();
                                                                echo $data1[0]->process_name;
                                                                ?><p></td>
                                                        <td class="tvalue"> <p><?php
                                                                $file_process_id = $result[0]->eli_file_process_app_status;
                                                                $this->db->select('*');
                                                                $this->db->from('file_process');
                                                                $this->db->where('file_process_id', $file_process_id);
                                                                $query = $this->db->get();
                                                                $data1 = $query->result();
                                                                echo $data1[0]->file_status_name;
                                                                ?> </p></td>
                                                        <td class="tvalue"><p><?php echo $result[0]->eli_app_remarks; ?></p></td>                                          
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>  
                            </div>
                            <div class="first_row"> 
                                <div class="upades">
                                    <div class="">
                                        <div class="update-head">
                                            <h4>Co-Applicant ELIGIBILITY AND SANCTION </h4>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="update-head">
                                            <table class="table">
                                                <thead>                                
                                                    <tr>                              
                                                        <th class="subhead"><h4>Process</h4></th>
                                                <th class="subhead"><h4>Status</h4></th>
                                                <th class="subhead"><h4>Reason</h4></th>

                                                </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td class="tvalue"><p><?php
                                                                $process_id = $result[0]->eli_co_process_type_process_id;
                                                                $this->db->select('*');
                                                                $this->db->from('process');
                                                                $this->db->where('process_id', $process_id);
                                                                $query = $this->db->get();
                                                                $data1 = $query->result();
                                                                echo $data1[0]->process_name;
                                                                ?> <p></td>
                                                        <td class="tvalue"> <p><?php
                                                                $file_process_id = $result[0]->eli_file_process_co_status;
                                                                $this->db->select('*');
                                                                $this->db->from('file_process');
                                                                $this->db->where('file_process_id', $file_process_id);
                                                                $query = $this->db->get();
                                                                $data1 = $query->result();
                                                                echo $data1[0]->file_status_name;
                                                                ?></p></td>
                                                        <td class="tvalue"><p><?php echo $result[0]->eli_co_remarks; ?></p></td>                                          
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>   
                            </div>
                        </div>  
                        <!--veri end-->
                        <!--LEGAL AND TECHNICAL: -->
                        <div class="row">
                            <div class="">
                                <div class="update-head">                           
                                    <h4> LEGAL AND TECHNICAL  </h4>
                                </div>
                            </div>
                            <!--verification end-->
                            <div class="first_row"> 
                                <div class="upades">
                                    <div class="">
                                        <div class="update-head">
                                            <h4>Applicant LEGAL AND TECHNICAL:  </h4>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="update-head">
                                            <table class="table">
                                                <thead>                                
                                                    <tr>                              
                                                        <th class="subhead"><h4>Process</h4></th>
                                                <th class="subhead"><h4>Status</h4></th>
                                                <th class="subhead"><h4>Reason</h4></th>

                                                </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td class="tvalue"><p><?php
                                                                $process_id = $result[0]->leg_app_process_type_process_id;
                                                                $this->db->select('*');
                                                                $this->db->from('process');
                                                                $this->db->where('process_id', $process_id);
                                                                $query = $this->db->get();
                                                                $data1 = $query->result();
                                                                echo $data1[0]->process_name;
                                                                ?><p></td>
                                                        <td class="tvalue"> <p><?php
                                                                $file_process_id = $result[0]->leg_file_process_app_status;
                                                                $this->db->select('*');
                                                                $this->db->from('file_process');
                                                                $this->db->where('file_process_id', $file_process_id);
                                                                $query = $this->db->get();
                                                                $data1 = $query->result();
                                                                echo $data1[0]->file_status_name;
                                                                ?> </p></td>
                                                        <td class="tvalue"><p><?php echo $result[0]->leg_app_remarks; ?></p></td>                                          
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>  
                            </div>
                            <div class="first_row"> 
                                <div class="upades">
                                    <div class="">
                                        <div class="update-head">
                                            <h4>Co-Applicant LEGAL AND TECHNICAL </h4>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="update-head">
                                            <table class="table">
                                                <thead>                                
                                                    <tr>                              
                                                        <th class="subhead"><h4>Process</h4></th>
                                                         <th class="subhead"><h4>Status</h4></th>
                                                         <th class="subhead"><h4>Reason</h4></th>

                                                     </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="tvalue"><p><?php
                                                                $process_id = $result[0]->leg_co_process_type_process_id;
                                                                $this->db->select('*');
                                                                $this->db->from('process');
                                                                $this->db->where('process_id', $process_id);
                                                                $query = $this->db->get();
                                                                $data1 = $query->result();
                                                                echo $data1[0]->process_name;
                                                                ?> <p></td>
                                                        <td class="tvalue"> <p><?php
                                                                $file_process_id = $result[0]->leg_file_process_co_status;
                                                                $this->db->select('*');
                                                                $this->db->from('file_process');
                                                                $this->db->where('file_process_id', $file_process_id);
                                                                $query = $this->db->get();
                                                                $data1 = $query->result();
                                                                echo $data1[0]->file_status_name;
                                                                ?> </p></td>
                                                        <td class="tvalue"><p><?php echo $result[0]->leg_co_remarks; ?></p></td>                                          
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>           
                                </div>   
                            </div>
                        </div>  
                        <!-- LEGAL AND TECHNICAL:-->
                        <!--disbursement-->
                        <div class="row align-center">
                            <div class="update-head">                           
                                <h4> Disbursement  </h4>
                            </div>
                            <!--verification end-->
                            <div class="table-responsive">
                                <div class="update-head">
                                    <table class="table">
                                        <thead>                                
                                            <tr>                             
                                                <th class="subhead"><h4>Document Name</h4></th>
                                        <th class="subhead"><h4>Status</h4></th>
                                        <th class="subhead"><h4>Reason</h4></th>
                                        <th class="subhead"><h4>Amount</h4></th>                             
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $generated_file_id = $result[0]->generate_file_id;
                                            $sql = "SELECT `remarks`, `amount`, `disbursment_document_name`, `status` FROM `file_disbursment_details` JOIN `disbursment_document` ON `disbursment_document`.`generate_file_id` = `file_disbursment_details`.`generate_file_id` WHERE file_disbursment_details.generate_file_id = '$generated_file_id'";
                                            $query23 = $this->db->query($sql);
                                            $data = $query->result();
                                            //echo $this->db->last_query();
                                            //die();
                                            $data21 = $query23->result();
//                                        echo "<pre>";
//                                        print_r($data21);
//                                        echo "</pre>";
//                                        die();
                                            foreach ($data21 as $value21) {
                                                ?>
                                                <tr>
                                                    <td  class="tvalue"><p><?php echo $value21->disbursment_document_name; ?><p></td>
                                                    <td> <p> 
                                                            <?php
                                                            if ($value21->status == 1) {
                                                                echo "Received";
                                                            } else {
                                                                echo "Required";
                                                            }
                                                            ?></p></td>
                                                    <td class="tvalue"><p><?php echo $value21->remarks; ?></p></td>
                                                    <td class="tvalue"><p><?php echo $value21->amount; ?></p></td>      
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>  
                        <!--disbursement-->
                    </div>
                    <!-- -->


                    <div class="col-md-3 col-sm-12">
                        <aside class="sidebar">        
                            <!-- categories -->
                            <div class="faqs-categories">
                                <h4>File Status</h4>
                                <ul>
                                    <li><h6>File Created ON :</h6></li>
                                    <p><?php echo $result[0]->created_on; ?></p>
                            <hr class="tall">
                                    <li><h6>Employee Or Agency Name :</h6></li>
                                    <p><?php echo ucfirst($result[0]->emp_agn_name); ?></p>
<hr class="tall">
                                    <li><h6>Email Id :</h6></li>
                                    <p><?php echo $result[0]->emp_agn_email; ?></p>

                                </ul>
                            </div>  
                            <!-- categories -->
                        </aside>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>  
</div>
<footer id="footer">
     <div class="ftop">
        <div class="container">
            <div class="fcontent">
               
                <div class="col-md-5 col-sm-8">                       	
                    <spanl> NEWSLETTER</spanl>                      
                    <form role="search" method="POST" id="newsletter" action="<?php echo site_url('Welcome'); ?>" class="">
                        <div class="input-group">
                            <input type="email" placeholder="Enter Your E-mail Address" autocomplete="off" class="form-control smail" id="send-email" name="email" required>
                            <span class="input-group-btn"><button type="submit" class="btn btn-default" id="subscrib">SUBSCRIBE </button></span>
                        </div>                        
                    </form>                  
                </div>
                
                <div class="col-md-3 col-sm-6 mailblock">   
                    <div class="mails">

                        <h2><a href="mailto:info@myloandetails.com" style="color: #333"> info@myloandetails.com</a> </h2>  
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 rit">    
                    <div class="socialtab">
                        <spanl>FOLLOW US  </spanl>                  
                        <ul class="social-icons">                         
                            <a href="https://www.facebook.com/myloandetails" target="_blank"><li> <i class="fa fa-facebook" aria-hidden="true" id="facebook"></i></li></a>
                            <a href="https://twitter.com/myloandetails" target="_blank"> <li>  <i class="fa fa-twitter" aria-hidden="true" id="twitter"></i></li></a>                          
                            <!--a href="#"> <li> <i class="fa fa-tumblr" aria-hidden="true" id="tumblr"></i></li></a-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fmiddle">
        <div class="container">
            <div class="row">	
                <div class="footer-menu">                
                    <div class="col-md-3">
                        <div class="newsletter">
                            <h4>Home Loans</h4>
                            <ul>
                                <li>Home Loan File Status</li>
                                <li>Housing Loan File Status</li>
                                <li>Home Loan File Tracking</li>
                                <li>Housing Loan File Tracking</li>
                                <li>Home Loan Status online</li>
                                <li>Online File Status</li> 
                                <li>Home Loan File Tracker Online</li>
                            </ul>
                            <div class="alert alert-success hidden" id="newsletterSuccess">
                                <strong>Success!</strong> You've been added to our email list.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 home-menu">
                        <h4>Main Menu</h4>
                        <ul>
                             <li><a href="<?php echo site_url('home-loan-products-details-terms-conditions'); ?>">Products</a></li>
                                <li><a href="<?php echo site_url('home-mortgage-loan-required-documents-checklist'); ?>">Documents</a></li>
                                <li><a href="<?php echo site_url('home-loan-interest-rates-tenures-features'); ?>">Interest Rates</a></li>
                                <li><a href="<?php echo site_url('home-loan-salaried-eligibility-calculator'); ?>"> Eligibility Calculators</a></li>
                                <li><a href="<?php echo site_url('home-loan-agreement-terms-conditions'); ?>"> Agreements</a></li>                              
                                <li><a href="<?php echo site_url('home-loan-file-status-online-tracking'); ?>">File Status</a></li>
                                <li><a href="<?php echo site_url('post-a-query'); ?>">FAQ's</a></li>
                                 <li><a href="<?php echo site_url('home-loan-application'); ?>">Apply</a></li>
                           </ul>

                    </div>
                     <div class="col-md-3 company-menu">
                        <div class="contact-details">
                            <h4>Company</h4>
                            <ul>
                                <li><a href="<?php echo site_url('About'); ?>">About Us</a></li>
                                <li><a href="<?php echo site_url('Enquiry'); ?>">Enquiry</a></li>
                                <li><a href="<?php echo site_url('terms-conditions'); ?>">Terms & Conditions</a></li>
                                <li><a href="<?php echo site_url('privacy-policy'); ?>">Privacy Policy</a></li>
                            </ul>

                            <h4 style="color:#FFF; padding-top:14px; margin-bottom:0px">DSA's</h4>
                            <ul>
                                <li><a href="<?php echo site_url('dsa-registration'); ?>">Register</a></li>
                                <li><a href="<?php echo site_url('Dsa_Login'); ?>">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 disclaimer">
                        <h4>Location</h4>
                        <div class="addh" id="addh">                           	 	 	 
                            <p>HYDERABAD</p>
                            <p>  1-8-732/17, First Floor, Vegitable Market Road, Nallakunta,  New Nallakunta, Hyderabad, Telangana 500044.</p>
                        </div>
                        <div class="addh" id="addb">
                            <p>BANGALORE</p>
                            <p>#24/3, 2nd Floor, Manju Residency, Muniyappa Gardens, 6th Phase, JP Nagar, Bangalore - 560078</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <h4>Disclaimer</h4>
                <p>All loans at the sole discretion of the Bank / Financial Institution. Myloandetails.com is just a facilitator which brings home loan seekers and home loan providers at one place, by using of which if any issue raises we are not responsible for it. All the details mentioned in the website are collected from different sources and user's are requested to cross check the details before applying for a home loan with any bank / financial institution.</p>                   

            </div>
        </div>
    </div>
    <div class="footer-submenu">
    </div>

    <div class="footer-copyright">
        <div class="container">
            <p>Copyright © 2008-2016, Myloandetails.com All Rights Reserved. </p>
        </div>
        <div class="pull-right">
            <a href="#0" class="cd-top"></a>
        </div> 
    </div>
</footer> 
<?php $this->load->view('Bootstrap/footer', array('jsFiles' => array())); ?>


<script src="<?php echo $staticContent; ?>vendor/jflickrfeed/jflickrfeed.js"></script>
<script src="<?php echo $staticContent; ?>vendor/magnific-popup/magnific-popup.js"></script>

<script type="text/javascript" src="<?php echo $staticContent; ?>js/jquery.easy-ticker.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#demo').hide();
        $('.vticker').easyTicker();
    });
</script>
<!-- Custom JS -->
<script src="<?php echo $staticContent; ?>js/custom.js"></script>
<script src="<?php echo $staticContent; ?>js/jRate.min.js"></script>
<script>
    $(document).ready(function () {
        var rating_data = document.getElementsByClassName('rating_system').innerHTML;
        $(".rating_system").jRate({
            rating: 2.4
        });
    })

</script>
<script type="text/javascript">
    $('.button').toolbar({
        content: '#toolbar-options',
        position: 'top',
        style: 'primary'
    });
</script>

