<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'Home Loan FAQ', 'cssFiles' => array())); ?>
<?php $staticContent = base_url(); ?>
<head>
    <meta name="robot" content="index,follow"/>
    <meta name="copyright" content="Copyright © 2014 Myloandetails.com. All Rights Reserved."/>
    <meta name="author" content="Myloandetails."/>
    <meta name="generator" content="www.myloandetails.com"/>
    <meta http-equiv="Content-Language" content="en-US"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="expires" content="never"/>
    <link rel="canonical" href="http://www.myloandetails.com/home-loan-faqs.aspx"/>
    <meta name="revisit-after" content="7 days"/>

    <!-- Open Graph -->
    <meta property="og:title" content="Myloandetails.com - Home Loan FAQ's"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="#"/>
    <link rel="image_src" href="http://www.myloandetails.com/images001/logowithtitle.gif"/>
    <meta property="og:image" content="http://www.myloandetails.com/images001/logowithtitle.gif"/>
    <meta property="og:site_name" content="Myloandetails.com"/>
    <meta property="og:description" content="Get your query resolved by experts in short time on property purchase, home loan, mortgage loans and legality of your property."/>
    <!-- End of Open Graph -->

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@Myloandetails"/>
    <meta name="twitter:creator" content="@https://twitter.com/myloandetails"/>
    <meta property='og:locale' content='en_US'/>
    <meta name="twitter:title" content="Home Loans Frequently Asked Questions(FAQ's)">
    <meta name="twitter:description" content="Get your query resolved by experts in short time on property purchase, home loan, mortgage loans and legality of your property.">
    <meta name="twitter:image" content="http://www.myloandetails.com/images/logo-new.png">
    <meta name="twitter:url" content="#">
    <!-- Twitter Card Ends -->
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
            width: 40%; /* Could be more or less, depending on screen size */
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
                        <li class="active">FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="inner-content">
        <div class="container">
            <h2><strong>Home Loan FAQ's</strong></h2>
            <div class="row">
                <div class="col-md-12">
                    <p class="lead"> Have a doubt just post here and we will reply to your query with the appropriate answer and suggest the best way to solve all your home loan related issues. Also read what the other customers have posted about their home loan related queries.
                    </p>
                    <br>
                    <div class="faq-buttons">
                        <button type="button" class="btn" id="nbutton">New FAQ'S</button>
                        <button type="button" class="btn" id="tbutton">Top Results</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!--Bug Alerts--->     
        <?php if (!empty($error)) { ?>
            <div class="alert alert-success" id="success-alert">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong><?php echo $error; ?> </strong>
            </div>
        <?php } ?>  
        <!---End of Alert-->
        <?php
        $this->db->select('*');
        $this->db->from('faq_question');
        //$this->db->where('status', 0);
        //$this->db->join('faq_question', 'faq_question.faq_question_id = faq_answer.faq_question_id');
        $query = $this->db->get();
        $data = $query->result();
        //echo $this->db->last_query();
        //die();
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php
//                    $data = $query->result();
//                    echo "<pre>";
//                    print_r($data);
//                    echo "<pre>";
//                    die();?>
                    
                    <?php foreach ($data as $result) { ?>
                        <div class="question">
                                    <h4><a href="#">Question : <?php echo $result->question; ?></a></h4>
                                </div>
                                <?php                                    
                                    $this->db->select('*');
                                    $this->db->from('faq_answer')->join('faq_question', 'faq_question.faq_question_id = faq_answer.faq_question_id','left');
                                    $this->db->where('faq_answer.faq_question_id',$result->faq_question_id);
                                    $query_res = $this->db->get();
//                                    echo $this->db->last_query();
//                                    die();
                                    $data_res = $query_res->result();
//                                    echo "<pre>";
//                                    print_r($data_res);
//                                    echo "</pre>";
//                                    die();
                                    ?>
                    
                    <?php } ?>     
                    <?php foreach($data_res as $res_data) {
                        echo "<pre>";
                                    print_r($res_data);
                                    echo "</pre>";
                                    die();
                        ?>
                        <div class="question-grid col-md-12">
                           <div class="ans">
                                <div class="col-md-3 rating">                         
                                    <div class="stars">                           
                                        <center>  <i class="fa fa-star fa-5x" aria-hidden="true" style="color:#7f7f7f; margin-bottom: 15px; "></i></center>
                                    </div>
                                    <p data-id="<?php echo $res_data->rating; ?>" class="rating_system"><?php echo $res_data->rating; ?></p>   
                                </div>
                               <div class="author">
                                    Posted By : <?php echo ucfirst($res_data->name); ?>
                                </div>
                               <div class="answer">
                                    Replied By  <?php echo ucfirst($res_data->answered_by); ?><?php echo "  : " ?>
                                    <?php echo ucfirst($res_data->answer); ?>
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
                                                    <form id="login-form" action="<?php echo site_url('Home_Loan_Faq/signin/'.$res_data->faq_question_id); ?>" method="POST" role="form" style="display: block;">
                                                        <div class="form-group">
                                                            <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="hidden" name="faq_id" id="faq_id" tabindex="1" class="form-control" placeholder="faq_id" value="<?php echo $res_data->faq_question_id; ?>">
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
                        <?php } ?>                                
                                        
                                        
                                    </div>
                                </div>


                                <!--register-->
                            </div>

                        </div>

                        <!--model-->



                    <ul class="pagination pull-right">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul>
                </div>   
                <!-- -->

                <div class="col-md-3 col-sm-12">
                    <aside class="sidebar">        
                        <!-- categories -->
                        <div class="faqs-categories">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="#">Home Loans
                                        <?php
                                        $this->db->select('*');
                                        $this->db->where('categories_id', 1);
                                        $this->db->from('faq_question');
                                        $this->db->join('categories', 'categories.id = faq_question.categories_id');
                                        $result = $this->db->count_all_results();
                                        echo "(" . $result . ")";
                                        ?>
                                    </a></li>
                                <li><a href="#">Banks <?php
                                        $this->db->select('*');
                                        $this->db->where('categories_id', 8);
                                        $this->db->from('faq_question');
                                        $this->db->join('categories', 'categories.id = faq_question.categories_id');
                                        $result = $this->db->count_all_results();
                                        echo "(" . $result . ")";
                                        ?></a></li>
                                <li><a href="#">CIBIL <?php
                                        $this->db->select('*');
                                        $this->db->where('categories_id', 3);
                                        $this->db->from('faq_question');
                                        $this->db->join('categories', 'categories.id = faq_question.categories_id');
                                        $result = $this->db->count_all_results();
                                        echo "(" . $result . ")";
                                        ?>
                                    </a></li>
                                <li><a href="#">Eligibility <?php
                                        $this->db->select('*');
                                        $this->db->where('categories_id', 4);
                                        $this->db->from('faq_question');
                                        $this->db->join('categories', 'categories.id = faq_question.categories_id');
                                        $result = $this->db->count_all_results();
                                        echo "(" . $result . ")";
                                        ?></a></li>
                                <li><a href="#">Legal <?php
                                        $this->db->select('*');
                                        $this->db->where('categories_id', 5);
                                        $this->db->from('faq_question');
                                        $this->db->join('categories', 'categories.id = faq_question.categories_id');
                                        $result = $this->db->count_all_results();
                                        echo "(" . $result . ")";
                                        ?></a></li>
                                <li><a href="#">Technical <?php
                                        $this->db->select('*');
                                        $this->db->where('categories_id', 2);
                                        $this->db->from('faq_question');
                                        $this->db->join('categories', 'categories.id = faq_question.categories_id');
                                        $result = $this->db->count_all_results();
                                        echo "(" . $result . ")";
                                        ?></a></li>
                                <li><a href="#">Disbursement <?php
                                        $this->db->select('*');
                                        $this->db->where('categories_id', 6);
                                        $this->db->from('faq_question');
                                        $this->db->join('categories', 'categories.id = faq_question.categories_id');
                                        $result = $this->db->count_all_results();
                                        echo "(" . $result . ")";
                                        ?></a></li>
                                <li><a href="#">Registration <?php
                                        $this->db->select('*');
                                        $this->db->where('categories_id', 7);
                                        $this->db->from('faq_question');
                                        $this->db->join('categories', 'categories.id = faq_question.categories_id');
                                        $result = $this->db->count_all_results();
                                        echo "(" . $result . ")";
                                        ?></a></li>
                            </ul>
                        </div>  
                        <!-- categories -->

                        <!-- post a query -->
                        <div class="faq-post-query">
                            <h4>Post a Query</h4>
                            <form action="<?php echo site_url('posting-query'); ?>" method="POST">
                                <div class="form-group">
                                    <div> 
                                        <label>Enter Your Name</label>
                                    </div>
                                    <input type="text" class="form-control" name="user_name" id="name" required=""/> 
                                </div>
                                <div class="form-group">
                                    <div> 
                                        <label>Enter Your Email ID</label>
                                    </div>
                                    <input type="email" class="form-control" name="user_email" id="email" required=""/> 
                                </div>
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
                                                <option value="<?php //echo $value1->bank_id; ?>"><?php //echo $value1->bank_name; ?></option>
<?php //} ?>
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
                                    <textarea class="form-control" name="user_query" id="query" rows="" cols="" required=""></textarea>
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
            var ele = $(this).find('p.rating_system').attr('id', 'rating_system_' + e);
            var r_id = ele.attr('id');
            var ra = ele.data('id');
            $('#' + r_id).jRate({
                rating: ra
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
        window.open('https://www.facebook.com/sharer/sharer.php?u=http://demo.myloandetails.com/Home_Loan_Faq?[title]=FAQ Questions','_blank');
       
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

















































