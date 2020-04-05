<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'Home Loan FAQ', 'cssFiles' => array())); ?>
<?php $staticContent = base_url(); ?>
<meta name="description" content="Have a doubt just post here and we will reply to your query with the appropriate answer and suggest the best way to solve all your home loan related issues. Also read what the other customers have posted about their home loan related queries">
<meta name="keywords" content="home loan faqs,personal loan faqs, business loan faqs,faqs,propertyfaqs,cibilfaqs,legalfaqs,technicalfaqs,loan track faqs,mortgage loan faqs,plot loan faqs">

<style>
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */

        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */

        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: white !important;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
      
    }

    /* The Close Button */
    .close {
        color: black !important;
        float: right;
        font-size: 28px;
        font-weight: bold;           
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
</head>

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><img src="<?php echo $staticContent; ?>images/icons/question.png"></h1>
                    <ul class="breadcrumb">                        
                        <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>">Home</a></li> 
                        <li class="active">Frequently Asked Question (FAQ's)</li>
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
    <div class="inner-content faq-grid">
        <div class="container">
            <h1><strong>Frequently Asked Question (FAQ's)</strong></h1>
            <div class="row">
                <div class="col-md-12">
                    <p class="lead"> Have a doubt just post here and we will reply to your query with the appropriate answer and suggest the best way to solve all your home loan related issues. Also read what the other customers have posted about their home loan related queries.
                    </p>
                    <br>
                    <div class="faq-buttons">
                        <a class="btn btn-primary" href="<?php echo site_url('new-faq'); ?>">New FAQ'S</a>
                        <a class="btn btn-primary" href="<?php echo site_url('top-faq'); ?>">Top Results</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
      
        <?php
        //$sql = $this->db->query("SELECT `faq_answer_id`, `faq_answer`.`faq_question_id`, `answer`, `answered_by`, `rating`, `question`, faq_question.`bank_id`, `name`, `email_id`, `question`, `status`, `bank_name` FROM `faq_answer` JOIN `faq_question` ON `faq_question`.`faq_question_id` = `faq_answer`.`faq_question_id` JOIN `bank` ON `bank`.`bank_id` = `faq_question`.`bank_id` WHERE faq_question.status = 0");        
        //echo $this->db->last_query();
        //die();
        $this->db->select('*');
        $this->db->distinct();
        $this->db->group_by('faq_answer.faq_question_id');
        $this->db->from('faq_answer');
        $this->db->where('status', 0);
        $this->db->join('faq_question', 'faq_question.faq_question_id = faq_answer.faq_question_id');
        //$this->db->join('bank', 'bank.bank_id = faq_question.bank_id');
        $query = $this->db->get();
        //echo $this->db->last_query();
        //die();
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php
                    $data = $query->result();
//                    echo "<pre>";
//                    print_r($data);
//                    echo "<pre>";
//                    die();
                    foreach ($data as $result) {
                        ?>
                        <div class="question-grid col-md-12">
                            <!-- faq grid-->	
                            <div class="ans">
                                <div class="col-md-3 rating">                         
                                    <div class="stars">                           
                                        <center>  <i class="fa fa-star fa-5x" aria-hidden="true" style="color:#7f7f7f; margin-bottom: 15px; "></i></center>
                                    </div>
                                    <p data-id="<?php echo $result->rating; ?>" class="rating_system"><?php echo $result->rating; ?></p>   
                                </div>
                            </div>
                            <div class="col-md-9 rquery">
                                <div class="question">
                                    <h4><a href="<?php echo site_url('Bank_Creation/commenting_view/' . $result->faq_question_id); ?>" target="_blank">Question : <span><?php echo ucfirst($result->question); ?></span></a></h4>
                                </div>
                                <div class="author">
                                    Posted By : <?php echo ucfirst($result->name); ?>
                                </div>
                                <div class="answer">
                                    Replied By  <?php echo ucfirst($result->answered_by); ?><?php echo "  : " ?>
                                    <span> <?php echo ucfirst($result->answer); ?></span>
                                </div>
                                <div class="links">
                                    <ul>
                                        <!--li><a href="#"><i class="fa fa-university" aria-hidden="true"></i>
                                                : <?php //echo $result->bank_name;    ?></a></li-->
                                        <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i>
                                                : <?php echo $result->answered_by; ?></a></li>
                                        <?php
                                        $username = $this->session->userdata('uu');
                                        $email = $this->session->userdata('ue');
                                        $user_id = $this->session->userdata('uui');

                                        //if ($username) {
                                        ?>
                                            <!--li><a href="<?php echo site_url("Home_Loan_Faq/Commenting_Reply_Answer/" . $result->faq_question_id); ?>" id="myBtn">
                                                    <i class="fa fa-reply-all" aria-hidden="true"></i></a></li>
                                        <?php //} else {   ?>
                                            <li><button id="myBtn"><i class="fa fa-reply-all" aria-hidden="true"></i></button></li-->
                                        <?php //}   ?>
                                        <li>Comments: (<?php
                                            $this->db->where('faq_question_id', $result->faq_question_id);
                                            $this->db->from('faq_answer');
                                            echo $this->db->count_all_results();
                                            ?>)</li>
                           <!--li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i></a></li-->
                                        <li>
                                            <div data-toolbar="content-option" id="" class="btn-toolbar button"><i class="fa fa-share-alt" aria-hidden="true"></i></div>  
                                            <div id="toolbar-options" class="hidden">
                                                <!--a href=" http://www.facebook.com/sharer/sharer.php?s=100;p[url]=;p[title]=<?php echo $result->question; ?>;p[summary]=<?php echo ucfirst($result->answer); ?>"></a-->
                                                 <!--a target=”_blank” href=”http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=http://demo.myloandetails.com/Home_Loan_Faq;p[title]=Creating Custom share buttons: Facebook, Twitter, Google+&amp;p[summary]=Build your custom share buttons from normal images with examples on each button”><i class="fa fa-facebook"></i></a-->
                                                <a onclick="return fb();" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <!--a href="https://www.facebook.com/sharer/sharer.php?u=http://demo.myloandetails.com/Home_Loan_Faq" target="_blank">share</a-->
                                                <a onclick="return twitter();"><i class="fa fa-twitter"></i></a>
                                                <!--a href="#"><i class="fa fa-whatsapp"></i></a-->
                                                <a onclick="return linkedin();"><i class="fa fa-linkedin-square"></i></a>
                                                <a onclick="return googleplus();"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                            <!-- Facebook Share-->
                                            <!--a href="http://www.facebook.com/sharer.php?u=<?php echo site_url('admin/bank/Bank_Creation/Commenting_Reply_Answer/' . $result->faq_id); ?>" target="_blank">
                                                Share:
                                            </a-->
                                            <!-- Facebook Share-->
                                        </li>
                                    </ul>                   
                                </div>	
                            </div>
                        </div>  
                        <!--model-->
                        <div id="myModal" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content">
                                <div class="row">
                                    <span><button type="button" class="close btn btn-default" data-dismiss="modal">x</button></span>
                                </div>
                                <!--regi-->
                                <div class="">
                                    <div class="panel panel-login">
                                        <div class="panel-heading  login-mod">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <a href="#" class="active" id="login-form-link">Login</a>
                                                </div>
                                                <div class="col-xs-6">
                                                    <a href="#" id="register-form-link">Register</a>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <form id="login-form" action="<?php echo site_url('Home_Loan_Faq/signin'); ?>" method="POST" role="form" style="display: block;">
                                                        <div class="form-group">
                                                            <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="hidden" name="faq_id" id="faq_id" tabindex="1" class="form-control" placeholder="faq_id" value="<?php echo $result->faq_question_id; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-sm-offset-3">
                                                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-primary" value="Log In">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <form id="register-form" action="Home_Loan_Faq/register" method="POST" role="form" style="display: none;">
                                                        <div class="form-group">
                                                            <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="confirmpassword" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-sm-offset-3">
                                                                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!--register-->
                            </div>

                        </div>

                        <!--model-->

                    <?php } ?>

                    <!--ul class="pagination pull-right">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul-->
                </div>   
                <!-- -->

                <div class="col-md-3 col-sm-12">
                    <aside class="sidebar">        
                        <!-- categories -->
                        <div class="faqs-categories">
                            <h4>Categories</h4>
                            <ul>
                                <li>
                                    <a href="#" id="home_loan" onclick="return home_loan();">Home Loans
                                        <?php
                                        $this->db->select('*');
                                        $this->db->where('categories_id', 1);
                                        $this->db->from('faq_question');
                                        $this->db->join('categories', 'categories.id = faq_question.categories_id');
                                        $result = $this->db->count_all_results();
                                        echo "(" . $result . ")";
                                        ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" id="banks" onclick="return banks();">Banks <?php
                                        $this->db->select('*');
                                        $this->db->where('categories_id', 8);
                                        $this->db->from('faq_question');
                                        $this->db->join('categories', 'categories.id = faq_question.categories_id');
                                        $result = $this->db->count_all_results();
                                        echo "(" . $result . ")";
                                        ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" id="cibil" onclick="return cibil();">CIBIL <?php
                                        $this->db->select('*');
                                        $this->db->where('categories_id', 3);
                                        $this->db->from('faq_question');
                                        $this->db->join('categories', 'categories.id = faq_question.categories_id');
                                        $result = $this->db->count_all_results();
                                        echo "(" . $result . ")";
                                        ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" id="eligibility" onclick="return eligibility();">Eligibility <?php
                                        $this->db->select('*');
                                        $this->db->where('categories_id', 4);
                                        $this->db->from('faq_question');
                                        $this->db->join('categories', 'categories.id = faq_question.categories_id');
                                        $result = $this->db->count_all_results();
                                        echo "(" . $result . ")";
                                        ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" id="legal" onclick="return legal();">Legal <?php
                                        $this->db->select('*');
                                        $this->db->where('categories_id', 5);
                                        $this->db->from('faq_question');
                                        $this->db->join('categories', 'categories.id = faq_question.categories_id');
                                        $result = $this->db->count_all_results();
                                        echo "(" . $result . ")";
                                        ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" id="technical" onclick="return technical();">Technical <?php
                                        $this->db->select('*');
                                        $this->db->where('categories_id', 2);
                                        $this->db->from('faq_question');
                                        $this->db->join('categories', 'categories.id = faq_question.categories_id');
                                        $result = $this->db->count_all_results();
                                        echo "(" . $result . ")";
                                        ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" id="disbursment" onclick="return disbursment();">Disbursement <?php
                                        $this->db->select('*');
                                        $this->db->where('categories_id', 6);
                                        $this->db->from('faq_question');
                                        $this->db->join('categories', 'categories.id = faq_question.categories_id');
                                        $result = $this->db->count_all_results();
                                        echo "(" . $result . ")";
                                        ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" id="registration" onclick="return registration();">Registration <?php
                                        $this->db->select('*');
                                        $this->db->where('categories_id', 7);
                                        $this->db->from('faq_question');
                                        $this->db->join('categories', 'categories.id = faq_question.categories_id');
                                        $result = $this->db->count_all_results();
                                        echo "(" . $result . ")";
                                        ?>
                                    </a>
                                </li>
                            </ul>
                        </div>  
                        <!-- categories -->

                        <!-- post a query -->
                        <?php
                        $faq_id_getting = $_GET['faq_id'];
                        $this->db->select('*');
                        $this->db->from('faq_question');
                        $this->db->where(array('faq_question_id' => $faq_id_getting));
                        $query = $this->db->get();
                        $data = $query->result();

                        //print_r($data);
                        ?>
                        <div class="faq-post-query">
                            <h4>Post a Query</h4>
                            <form action="<?php echo site_url('posting-query'); ?>" method="POST">
                                <div class="form-group">
                                    <div> 
                                        <label>Enter Your Name</label>
                                    </div>
                                    <input type="text" class="form-control" name="user_name" id="name" required="" value="<?php echo $data[0]->name; ?>"/> 
                                </div>
                                <div class="form-group">
                                    <div> 
                                        <label>Enter Your Email ID</label>
                                    </div>
                                    <input type="email" class="form-control" name="user_email" id="email" required="" value="<?php echo $data[0]->email_id; ?>"/> 
                                </div>
                                <input type="hidden" class="form-control" name="faq_id_update" id="email" value="<?php echo $faq_id_getting; ?>"/> 
                                <!--div class="form-group">
                                    <div> 
                                        <label>Select Bank</label>
                                    </div>
                                    <div class="">
                                        <select class="form-control" name="bank_selecting">
                                <?php
//                                            $this->db->select('*');
//                                            $this->db->from('bank');
//                                            $query = $this->db->get();
//                                            if ($query->num_rows() > 0) {
//                                                $datas = $query->result();
//                                            }
//                                            foreach ($datas as $value1) {
                                ?>
                                                <option value="<?php //echo $value1->bank_id;  ?>"><?php //echo $value1->bank_name;  ?></option>
                                <?php //}   ?>
                                        </select>
                                    </div>
                                </div--> 
                                <div class="form-group"> 
                                    <label>Select Category</label>
                                    <div class="col-md">
                                        <select class="form-control" name="category_selecting">
                                            <?php
                                            $this->db->select('*');
                                            $this->db->from('categories');
                                            $query = $this->db->get();
                                            if ($query->num_rows() > 0) {
                                                $data2 = $query->result();
                                            }
                                            foreach ($data2 as $value2) {
                                                ?>
                                                <option value="<?php echo $value2->id; ?>"><?php echo $value2->categories_name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Query</label>
                                    <textarea class="form-control" name="user_query" id="query" rows="" cols="" required=""><?php echo $data[0]->question; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="Submit"/>	
                                </div>	
                            </form>
                        </div>	
                    </aside>
                </div>
            </div>
        </div>
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
                                <li>Home Loans FAQs</li>
                                <li>Housing Loans FAQs</li>
                                <li>Home Loan Frequently Asked Questions</li>
                                <li>Housing Loan Frequently Asked Questions</li>
                                <li>Home Loan Queries</li>
                                <li>Housing Loan Queries</li>                                
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
<script>
    function home_loan() {
        //$('#home_loan').click(function () {
        window.location.href = "Faq_sorting?id=1";
        //});
    }
    function banks() {
        //$('#banks').click(function () {
        window.location.href = "Faq_sorting?id=8";
        //});
    }
    function cibil() {
        //$('#cibil').click(function () {
        window.location.href = "Faq_sorting?id=3";
        //});
    }
    function eligibility() {
        //$('#eligibility').click(function () {
        window.location.href = "Faq_sorting?id=4";
        //});
    }
    function legal() {
        //$('#legal').click(function () {
        window.location.href = "Faq_sorting?id=5";
        //});
    }

    function disbursement() {
        //$('#disbursement').click(function () {
        window.location.href = "Faq_sorting?id=6";
        //});
    }
    function registration() {
        //$('#registration').click(function () {
        window.location.href = "Faq_sorting?id=7";
        //});
    }
</script>

<script>
    function technical() {
        window.location.href = "Faq_sorting?id=2";
    }
</script>

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

<script type="text/javascript">
    $('.button').toolbar({
        content: '#toolbar-options',
        position: 'top',
        style: 'primary'
    });
</script>
<script>
    $(function () {

        $('#login-form-link').click(function (e) {
            $("#login-form").delay(100).fadeIn(100);
            $("#register-form").fadeOut(100);
            $('#register-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });
        $('#register-form-link').click(function (e) {
            $("#register-form").delay(100).fadeIn(100);
            $("#login-form").fadeOut(100);
            $('#login-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });

    });

</script>
<script>
    // Rating system jquery
    $(document).ready(function () {
        $('.question-grid .rating').each(function (e) {
            var stars = $(this).find('.rating_system').attr('id', 'rating_system_' + e);
            var r_id = stars.attr('id');

            var ele = $(this).find('.rate span.users_rating').data('id');
            $('#' + r_id).jRate({
                rating: ele
            });

        });
    });


    // FAQ modal script
    var modal = document.getElementById('myModal');

    $('.question-grid .links').each(function (e) {
        var btn = $(this).find('ul li button').attr('id', 'myid_' + e);

        $(btn).click(function () {
            $('#myModal').modal('show');
        });
    });

</script>



<script>
    // Rating system jquery
    $(document).ready(function () {
        $('.faq-reply .rates').each(function (e) {
            var ele = $(this).find('div.users_rating').attr('id', 'users_rating_' + e);
            var r_id = ele.attr('id');
            var ra = ele.data('id');
            $('#' + r_id).jRate({
                rating: ra
            });
        });
    })
</script>
<script>
    function fb() {
        window.open('https://www.facebook.com/sharer/sharer.php?u=http://demo.myloandetails.com/Home_Loan_Faq?[title]=FAQ Questions', '_blank');

    }
    function twitter() {
        window.open('http://twitter.com/intent/tweet?status=http://demo.myloandetails.com/Home_Loan_Faq?[title]=FAQ Questions', '_blank');
    }
    function linkedin() {
        window.open('http://www.linkedin.com/shareArticle?mini=true&url=http://demo.myloandetails.com/Home_Loan_Faq?&title=[FAQ Questions]', '_blank');
    }
    function googleplus() {
        window.open('https://plus.google.com/share?url= http://demo.myloandetails.com/Home_Loan_Faq?&title=[FAQ Questions]', '_blank');
    }
</script>