<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'Faq Answer Reply', 'cssFiles' => array())); ?>
<?php $staticContent = base_url(); ?>
<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                     <h1><img src="<?php echo $staticContent; ?>images/icons/question.png"></h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>">Home</a></li> 
                        <li class="active">Home Loan FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="faq-reply">
        <div class="container">
            <div class="row">	
                <div class="col-md-12">
                    <div class="col-md-8 ">
                        <!-- faq grid-->	
                        <div class="questiongrid">
                             <div class="">
                            <!--Bug Alerts--->     
                            <?php if (!empty($error)) { ?>
                                <div class="alert alert-success" id="success-alert">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong><?php echo $error; ?> </strong>
                                </div>
                            <?php } ?>  
                            <!---End of Alert-->

                            <div class="dropdown">
                                <button onclick="myFunction()" class="dropbtn"> <?php echo ucfirst($this->session->userdata('uu')); ?></button>
                                <div id="myDropdown" class="dropdown-content">

                                    <a href="<?php echo site_url('changepassword'); ?>">Change Password</a>   
                                    <a href="<?php echo site_url('Home_Loan_Faq/logout'); ?>">Logout</a>
                                </div>
                            </div>  

                            <div class="question">
                                <h4><a href="#">Question : <?php
                                        $faq_Question_id = $this->uri->segment(3);
                                        $this->db->from('faq_question');
                                        $this->db->where('faq_question_id', $faq_Question_id);
                                        $query = $this->db->get();
                                        $datas = $query->result();
                                        //print_r($datas);
                                        foreach ($datas as $results) {
                                            echo "<strong>" . ucwords($results->question) . "</strong>";
                                            ?></a></h4>
                                </div>
                                <div class="well">
                                    <div class="author pull-right">
                                        Posted By :<strong> <?php
                                            echo $results->name;
                                        }
                                        ?></strong>
                                    </div>	
                                <?php if ($data) { ?>
                                    <?php foreach ($data as $result) { ?> 

                                        Replied By :
                                        <strong><?php echo ucfirst($result->answered_by); ?></strong><?php echo "   " ?>
                                        <?php echo ucwords($result->answer); ?>
                                        <div class="rates ">Rating : <div data-id="<?php echo $result->rating; ?>" class="users_rating"><?php echo $result->rating; ?></div></div>
                                </div>
                                <?php } ?>
                            <?php } ?><br>
                            <br>
                            <br>
  </div>
                           
                            <form action="<?php echo site_url('Home_Loan_Faq/Commenting_Reply_Answer/' . $this->uri->segment(3)); ?>" method="POST">
                                <textarea name="user_reply" placeholder="Reply Your Answer" style="" cols="100" rows="4"></textarea>
                                <div id="jRate">Rate : </div>
                                <p></p>
                                <div id="demo-onchange-value">
                                    <input type="hidden" id="user_rate" name="user_rate">
                                </div>
                                <button type="submit" id="save" class="btn btn-primary">Submit</button>
                            </form>
                          
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('Bootstrap/footer', array('jsFiles' => array())); ?>
    <?php $staticContent = base_url(); ?>
    <script src="<?php echo $staticContent; ?>js/jRate.min.js"></script>
    <script>
                                    var that = this;
                                    var toolitup = $("#jRate").jRate({
                                        rating: 0,
                                        strokeColor: 'black',
                                        width: 25,
                                        height: 25,
                                        precision: 0.5,
                                        minSelected: 1,
                                        onChange: function (rating) {
                                            $('#user_rate').val(rating);
                                        }

                                    });

    </script>
    
    <script type="text/javascript">
        $('#button').toolbar({
            content: '#toolbar-options',
            position: 'top',
            style: 'primary'
        });
    </script>
    <script>
        /* When the user clicks on the button,
         toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

// Close the dropdown if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {

                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
<script>
	// Rating system jquery
    $(document).ready(function () {       
		$('.question-grid .rating').each(function(e) {			
			var ele = $(this).find('p.rating_system').attr('id','rating_system_'+e);					
			var r_id = ele.attr('id');				
			var ra = ele.data('id');
			$('#'+r_id).jRate({				
                rating: ra			
			});								
		});					
    });

	
	// FAQ modal script
	var modal = document.getElementById('myModal');
	
	$('.question-grid .links').each(function(e){
		var btn = $(this).find('ul li button').attr('id','myid_'+e);
		
		$(btn).click(function(){
			$('#myModal').modal('show');	
		});		
	});
	
</script>



<script>
	// Rating system jquery
   $(document).ready(function () {	  
	  $('.faq-reply .rates').each(function(e) {			
			var ele = $(this).find('div.users_rating').attr('id','users_rating_'+e);					
			var r_id = ele.attr('id');
			var ra = ele.data('id');			
			$('#'+r_id).jRate({				
                rating: ra			
			});								
		});
   })
</script>