<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'Home Loan Eligibility Calculator View', 'cssFiles' => array())); ?>
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                     <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>" style="color:#CCCCCC">Home</a></li> 
                        <li class="active">Eligibility calculators</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="eligibility_cal">
                <div class="col-md-8">
                    <div class="eligibility_cal_bg">
                        <div class="col-md-12">
                            <div class="col-lg-4">
                                <label>Bank</label>
                            </div>
                            <div class="col-md-8">
                                <select name="bankname">
                                    <option value="1">Banks Considering Gross Income</option>
                                    <option value="2">Banks Considering Net Income</option>
                                    <option selected="selected" value="">SELECT</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-lg-4">
                                <label>Loan 	</label>
                            </div>
                            <div class="col-md-8">
                                <select name="bankname">
                                    <option selected="selected" value="0">SELECT</option>
                                    <option value="1">New Purchase</option>
                                    <option value="2">Resale Purchase</option>
                                    <option value="11">Plot Purchase</option>
                                    <option value="3">Construction</option>
                                    <option value="4">Mortgage</option>
                                    <option value="5">Plot + Construction</option>
                                    <option value="6">Balance Transfer</option>
                                    <option value="7">Commerciel Mortgage</option>
                                    <option value="8">Plot Mortgage</option>
                                    <option value="9">Loan Extension</option>
                                    <option value="10">Top Up</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-lg-4">
                                <label>Rate of Interest</label>
                            </div>
                            <div class="col-md-8">
                                <select name="bankname">
                                    <option value="10">10.25</option>
                                    <option value="10">10.20</option>
                                    <option value="10">10.15</option>
                                    <option value="10">10.10</option>
                                    <option value="10">10.05</option>
                                    <option value="10">10.00</option>
                                    <option value="9">9.95</option>
                                    <option value="9">9.90</option>
                                    <option value="9">9.85</option>
                                    <option value="9">9.80</option>
                                    <option value="9">9.75</option>
                                    <option value="9">9.70</option>
                                    <option value="9">9.65</option>
                                    <option value="9">9.60</option>
                                    <option value="9">9.55</option>
                                    <option value="9">9.50</option>
                                    <option value="9">9.45</option>
                                    <option value="9">9.40</option>
                                    <option value="9">9.35</option>
                                    <option value="9">9.30</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="col-lg-4">
                                <label>Date of Birth</label>
                            </div>
                            <div class="col-md-8 padding_margin_zero">
                                <div class="col-md-4">
                                    <select name="dd">
                                        <option selected="selected" value="DD">DD</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>

                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="mm">
                                        <option selected="selected" value="MM">MM</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select name="yy">
                                        <option selected="selected" value="YYYY">YYYY</option>
                                        <option value="1961">1961</option>
                                        <option value="1962">1962</option>
                                        <option value="1963">1963</option>
                                        <option value="1964">1964</option>
                                        <option value="1965">1965</option>
                                        <option value="1966">1966</option>
                                        <option value="1967">1967</option>
                                        <option value="1968">1968</option>
                                        <option value="1969">1969</option>
                                        <option value="1970">1970</option>
                                        <option value="1971">1971</option>
                                        <option value="1972">1972</option>
                                        <option value="1973">1973</option>
                                        <option value="1974">1974</option>
                                        <option value="1975">1975</option>
                                        <option value="1976">1976</option>
                                        <option value="1977">1977</option>
                                        <option value="1978">1978</option>
                                        <option value="1979">1979</option>
                                        <option value="1980">1980</option>
                                        <option value="1981">1981</option>
                                        <option value="1982">1982</option>
                                        <option value="1983">1983</option>
                                        <option value="1984">1984</option>
                                        <option value="1985">1985</option>
                                        <option value="1986">1986</option>
                                        <option value="1987">1987</option>
                                        <option value="1988">1988</option>
                                        <option value="1989">1989</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="col-lg-4">
                                <label>Age in Years</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="age">
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="col-lg-4">
                                <label>Tenure (Years)</label>
                            </div>
                            <div class="col-md-8">
                                <select name="bankname">
                                    <option selected="selected" value="">SELECT</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="col-lg-4">
                                <label>Any Liabilities</label>
                            </div>
                            <div class="col-md-8">
                                <select name="bankname">
                                    <option selected="selected" value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-lg-4">
                                <label>if Yes Amount </label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="amount" value="0">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-lg-4">
                                <label>Monthly Gross Pay</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="grosspay">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-lg-4">
                                <label>Annual Variable Income</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="annualincome">
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="col-lg-4">
                                <label></label>
                            </div>
                            <div class="col-md-8">
                                <input type="submit" name="submit" value="Check Eligibility">
                            </div>
                        </div>



                        <div class="all_clear"></div>
                    </div>
                </div>
            </div>
            <br><br>
            <p>One of the most important stages in home loan processing is the calculation of the applicant's eligibility for the home loan. By taking the Fixed and variable income into consideration banks will calculate the eligibility and the sanction will be given upon all the verifications being positive which the customer have specified in the application form. It is suggested to give useful and applicable information only which is important in accordance to home loan application.
                It is the place where bank will take all your incomes and liabilities into consideration and check how much is your eligibility. Please take the advantage of our calculators to know your eligibility in which we tried to reach the eligibility which you get in the bank.</p>

            <div class="col-md-4">
                <aside class="sidebar">
                    <div class="calculator">
                        <div class="head">EMI Calculator</div>
                        <div class="body">
                            <div class="calform">
                                <label>Loan Amount</label>
                                <input type="text"  maxlength="100" class="form-control" value="200000" name="email" id="email">
                                <label>Interest Rate (%)</label>
                                <input type="text"  maxlength="100" class="form-control" value="9" name="email" id="email">
                                <label>Period in Years</label>
                                <input type="text"  maxlength="100" class="form-control" value="20" name="email" id="email">
                                <input type="submit" value="Calculate"  >
                            </div>
                            <div class="calanswer">
                                <div>
                                    1799.4 EMI
                                </div>
                                <div class="clear_cal"></div>
                                <div class="part_cal_50">431868
                                    <br>
                                    <span>Total Amount Payable
                                    </span>
                                    <div class="clear_cal"></div>
                                </div>
                                <div class="part_cal_50">231868
                                    <br>
                                    <span>Interest Amount
                                    </span>
                                    <div class="clear_cal"></div>
                                </div>
                                <div class="clear_cal"></div>
                            </div>
                            <div class="clear_cal"></div>
                        </div>
                    </div>
                    <br>

                    <div class="vticker">
                        <ul>
                            <li>
                                <h5><a href="#">Know your agreement</a></h5 ><hr class="small">
                                <p> It is the Agreement which a customer need to sign before going for disbursement of the loan which he requested to the bank to fund...</p>
                            </li>
                            <li>
                                <h5><a href="#"> Amortization</a></h5>
                                <hr class="small">
                                <p> One can calculate the EMI and the amount of principal and interest components in an EMI, and he/she can also calculate the...</p>
                            </li>
                            <li>
                                <h5><a href="#">Eligibility Calculator</a></h5>
                                <hr class="small">
                                <p> One of the most important stages in home loan processing is the calculation of the applicants' eligibility for the home loan. By taking...</p>
                            </li>
                            <li>
                                <h5><a href="#">List of documents</a></h5>
                                <hr class="small">
                                <p> To start with the home loan processing a customer need to submit the documents and this will vary depending on the product and...</p>
                            </li>
                            <li>
                                <h5><a href="#">Check your status</a></h5>
                                <hr class="small">
                                <p> Normally customers want to know their file status during the home loan process. But people face different types of situations where they wrongly...</p>
                            </li>
                            <li>
                                <h5><a href="#">Draft Agreements</a></h5>
                                <hr class="small">
                                <p> To complete the legal and technical process over a property which the customer is buying by taking the home loan need to have a sale...</p>
                            </li>
                        </ul>
                    </div>

                </aside>
            </div>
      <div class="row">
	  <div class="eligibility_cal">
        <div class="col-md-8">
          
          <div class="eligibility_cal_bg">
         
          <div class="col-md-12">
          <div class="col-lg-4">
          <label>Bank</label>
          </div>
          <div class="col-md-8">
          <select name="bankname">
              <option value="1">Banks Considering Gross Income</option>
            <option value="2">Banks Considering Net Income</option>
            <option selected="selected" value="">SELECT</option>
          </select>
          </div>
          </div>
          
           <div class="col-md-12">
          <div class="col-lg-4">
          <label>Loan 	</label>
          </div>
          <div class="col-md-8">
          <select name="bankname">
          <option selected="selected" value="0">SELECT</option>
          <option value="1">New Purchase</option>
		<option value="2">Resale Purchase</option>
        <option value="11">Plot Purchase</option>
<option value="3">Construction</option>
<option value="4">Mortgage</option>
<option value="5">Plot + Construction</option>
<option value="6">Balance Transfer</option>
<option value="7">Commerciel Mortgage</option>
<option value="8">Plot Mortgage</option>
<option value="9">Loan Extension</option>
<option value="10">Top Up</option>
		
          </select>
          </div>
          </div>
          
           <div class="col-md-12">
          <div class="col-lg-4">
          <label>Rate of Interest</label>
          </div>
          <div class="col-md-8">
          <select name="bankname">
    <option value="10">10.25</option>
    <option value="10">10.20</option>
    <option value="10">10.15</option>
    <option value="10">10.10</option>
    <option value="10">10.05</option>
    <option value="10">10.00</option>
    <option value="9">9.95</option>
    <option value="9">9.90</option>
    <option value="9">9.85</option>
    <option value="9">9.80</option>
    <option value="9">9.75</option>
    <option value="9">9.70</option>
    <option value="9">9.65</option>
    <option value="9">9.60</option>
    <option value="9">9.55</option>
    <option value="9">9.50</option>
    <option value="9">9.45</option>
    <option value="9">9.40</option>
    <option value="9">9.35</option>
    <option value="9">9.30</option>
          </select>
          </div>
          </div>
          
          
          <div class="col-md-12">
          <div class="col-lg-4">
          <label>Date of Birth</label>
          </div>
          <div class="col-md-8 padding_margin_zero">
          <div class="col-md-4">
          <select name="dd">
         <option selected="selected" value="DD">DD</option>
		<option value="01">01</option>
		<option value="02">02</option>
		<option value="03">03</option>
		<option value="04">04</option>
		<option value="05">05</option>
		<option value="06">06</option>
		<option value="07">07</option>
		<option value="08">08</option>
		<option value="09">09</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>

          </select>
          </div>
          <div class="col-md-4">
          <select name="mm">
          <option selected="selected" value="MM">MM</option>
		<option value="01">01</option>
		<option value="02">02</option>
		<option value="03">03</option>
		<option value="04">04</option>
		<option value="05">05</option>
		<option value="06">06</option>
		<option value="07">07</option>
		<option value="08">08</option>
		<option value="09">09</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
          </select>
          </div>
          
          <div class="col-md-4">
          <select name="yy">
          <option selected="selected" value="YYYY">YYYY</option>
		<option value="1961">1961</option>
		<option value="1962">1962</option>
		<option value="1963">1963</option>
		<option value="1964">1964</option>
		<option value="1965">1965</option>
		<option value="1966">1966</option>
		<option value="1967">1967</option>
		<option value="1968">1968</option>
		<option value="1969">1969</option>
		<option value="1970">1970</option>
		<option value="1971">1971</option>
		<option value="1972">1972</option>
		<option value="1973">1973</option>
		<option value="1974">1974</option>
		<option value="1975">1975</option>
		<option value="1976">1976</option>
		<option value="1977">1977</option>
		<option value="1978">1978</option>
		<option value="1979">1979</option>
		<option value="1980">1980</option>
		<option value="1981">1981</option>
		<option value="1982">1982</option>
		<option value="1983">1983</option>
		<option value="1984">1984</option>
		<option value="1985">1985</option>
		<option value="1986">1986</option>
		<option value="1987">1987</option>
		<option value="1988">1988</option>
		<option value="1989">1989</option>
		<option value="1990">1990</option>
		<option value="1991">1991</option>
		<option value="1992">1992</option>
		<option value="1993">1993</option>
		<option value="1994">1994</option>
		<option value="1995">1995</option>
		<option value="1996">1996</option>
		<option value="1997">1997</option>
          </select>
          </div>
          
          
          </div>
          </div>
          
          
          <div class="col-md-12">
          <div class="col-lg-4">
          <label>Age in Years</label>
          </div>
          <div class="col-md-8">
          <input type="text" name="age">
          </div>
          </div>
          
          
          <div class="col-md-12">
          <div class="col-lg-4">
          <label>Tenure (Years)</label>
          </div>
          <div class="col-md-8">
          <select name="bankname">
          <option selected="selected" value="">SELECT</option>
          </select>
          </div>
          </div>
          
          
           <div class="col-md-12">
          <div class="col-lg-4">
          <label>Any Liabilities</label>
          </div>
          <div class="col-md-8">
          <select name="bankname">
          <option selected="selected" value="No">No</option>
          <option value="Yes">Yes</option>
          </select>
          </div>
          </div>
          
          <div class="col-md-12">
          <div class="col-lg-4">
          <label>if Yes Amount </label>
          </div>
          <div class="col-md-8">
          <input type="text" name="amount" value="0">
          </div>
          </div>
          
          <div class="col-md-12">
          <div class="col-lg-4">
          <label>Monthly Gross Pay</label>
          </div>
          <div class="col-md-8">
          <input type="text" name="grosspay">
          </div>
          </div>
          
          <div class="col-md-12">
          <div class="col-lg-4">
          <label>Annual Variable Income</label>
          </div>
          <div class="col-md-8">
          <input type="text" name="annualincome">
          </div>
          </div>
          
          
          <div class="col-md-12">
          <div class="col-lg-4">
          <label></label>
          </div>
          <div class="col-md-8">
          <input type="submit" name="submit" value="Check Eligibility">
          </div>
          </div>
          
          
          
          <div class="all_clear"></div>
          </div>
		  </div>
		  </div>
          <br><br>
          <p>One of the most important stages in home loan processing is the calculation of the applicant's eligibility for the home loan. By taking the Fixed and variable income into consideration banks will calculate the eligibility and the sanction will be given upon all the verifications being positive which the customer have specified in the application form. It is suggested to give useful and applicable information only which is important in accordance to home loan application.
    It is the place where bank will take all your incomes and liabilities into consideration and check how much is your eligibility. Please take the advantage of our calculators to know your eligibility in which we tried to reach the eligibility which you get in the bank.</p>
          
        
        
        
        
        
        <div class="col-md-4">
          <aside class="sidebar">
            
			<div class="calculator">
          <div class="head">EMI Calculator</div>
          <div class="body">
          <div class="calform">
          <label>Loan Amount</label>
          <input type="text"  maxlength="100" class="form-control" value="200000" name="email" id="email">
          <label>Interest Rate (%)</label>
          <input type="text"  maxlength="100" class="form-control" value="9" name="email" id="email">
          <label>Period in Years</label>
          <input type="text"  maxlength="100" class="form-control" value="20" name="email" id="email">
           <input type="submit" value="Calculate"  >
          </div>
           <div class="calanswer">
          <div>
          1799.4 EMI
          </div>
          <div class="clear_cal"></div>
          <div class="part_cal_50">431868
          <br>
          <span>Total Amount Payable
</span>
<div class="clear_cal"></div>
          </div>
          <div class="part_cal_50">231868
          <br>
          <span>Interest Amount
</span>
<div class="clear_cal"></div>
          </div>
          <div class="clear_cal"></div>
          </div>
          <div class="clear_cal"></div>
          </div>
          </div>
		  <br>
			
			<div class="vticker">
            <ul>
			<li>
            <h5><a href="#">Know your agreement</a></h5 ><hr class="small">
            <p> It is the Agreement which a customer need to sign before going for disbursement of the loan which he requested to the bank to fund...</p>
			</li>
            <li>
            <h5><a href="#"> Amortization</a></h5>
            <hr class="small">
            <p> One can calculate the EMI and the amount of principal and interest components in an EMI, and he/she can also calculate the...</p>
			</li>
            <li>
            <h5><a href="#">Eligibility Calculator</a></h5>
            <hr class="small">
            <p> One of the most important stages in home loan processing is the calculation of the applicants' eligibility for the home loan. By taking...</p>
            </li>
            <li>
			<h5><a href="#">List of documents</a></h5>
            <hr class="small">
            <p> To start with the home loan processing a customer need to submit the documents and this will vary depending on the product and...</p>
            </li>
            <li>
			<h5><a href="#">Check your status</a></h5>
            <hr class="small">
            <p> Normally customers want to know their file status during the home loan process. But people face different types of situations where they wrongly...</p>
            </li>
            <li>
			<h5><a href="#">Draft Agreements</a></h5>
            <hr class="small">
            <p> To complete the legal and technical process over a property which the customer is buying by taking the home loan need to have a sale...</p>
          </li>
            </ul>
			</div>
		  
		  </aside>

        </div>
    </div>

</div>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="footer-ribon"> <span>Get in Touch</span> </div>
            <div class="col-md-3">
                <div class="newsletter">
                    <h4>Home Loans</h4>
                    <ul>
                        <li><a href="#">Home Loan Products</a></li>
                        <li><a href="#">Home Loan Documents</a></li>
                        <li><a href="#">Home Loan Interest Rates</a></li>
                        <li><a href="#">Home Loan Eligibility Calculators</a></li>
                        <li><a href="home-loan-agreement.html">Home loan agreement</a></li>
                        <li><a href="#">Draft Sale and Rental Agreements</a></li>
                        <li><a href="#">Home Loan File Status</a></li>
                        <li><a href="#">News & FAQ's</a></li>
                    </ul>
                    <div class="alert alert-success hidden" id="newsletterSuccess"> <strong>Success!</strong> You've been added to our email list. </div>
                </div>
            </div>
            <div class="col-md-3">
                <h4>Main Menu</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home Loans</a></li>
                    <li><a href="#">Personal Loans</a></li>
                    <li><a href="#">Business Loans</a></li>
                    <li><a href="#">Properties</a></li>
                    <li><a href="#">FAQ's</a></li>
                    <li><a href="#">EMI Calculator</a></li>
                    <li><a href="#">DSA</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <div class="contact-details">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Enquiry</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                    <h4 style="color:#FFF; padding-top:14px; margin-bottom:0px">DSA's</h4>
                    <ul>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <h4>Contact Us</h4>
                <span style="color:#FFF"> <b>Hyderabad</b> <br>
                    1-8-732/17, First Floor, Vegitable Market Road, Nallakunta,  New Nallakunta, Hyderabad, Telangana 500044. <br>
                    <br>
                    <b>Bangalore</b> #24/3, 2nd Floor, Manju Residency, Muniyappa Gardens, 6th Phase, JP Nagar, Bangalore - 560078 </span> </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-9"> <span style="color:#FFF"><b>Disclaimer</b><br>
                        <p>All loans at the sole discretion of the Bank / Financial Institution. Myloandetails.com is just a facilitator which brings home loan seekers and home loan providers at one place, by using of which if any issue raises we are not responsible for it. All the details mentioned in the website are collected from different sources and user's are requested to cross check the details before applying for a home loan with any bank / financial institution.</p>
                    </span> </div>
                <div class="col-md-3">
                    <nav id="sub-menu">
                        <p class="em"><b>Email</b>: info@myloandetails.com</p>
                        <p class="em">© 2008-2015 Myloandetails.com</p>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
  </div>
  
</div>
<!-- Libs -->
<?php $this->load->view('Bootstrap/footer', array('jsFiles' => array())); ?>

<script src="<?php echo $staticContent; ?>vendor/jflickrfeed/jflickrfeed.js"></script>
<script src="<?php echo $staticContent; ?>vendor/magnific-popup/magnific-popup.js"></script>



<script type="text/javascript" src="js/jquery.easy-ticker.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#demo').hide();
        $('.vticker').easyTicker();
    });
</script>
<script src="js/custom.js"></script>
<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.

                <script type="text/javascript">



                        var _gaq = _gaq || [];

                        _gaq.push(['_setAccount', 'UA-12345678-1']);

                        _gaq.push(['_trackPageview']);



                        (function() {

                        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

                        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

                        })();



                </script>

-->
<!--SHARE WITH SCRIPTS-->
<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51120a573a36c183" async="async"></script>
<script type="text/javascript">stLight.options({publisher: "c8e95659-7770-4c4c-81e0-24b6ce763b46", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script>
var options={ "publisher": "c8e95659-7770-4c4c-81e0-24b6ce763b46", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "linkedin", "email", "googleplus", "pinterest"]}};
var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
</script>-->
