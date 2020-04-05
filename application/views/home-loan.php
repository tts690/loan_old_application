<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'Home Loan', 'cssFiles' => array())); ?>
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<style>
    /* Web Fonts*/ @font-face {
        font-family: "webfont";
        src: url("webfont.eot");
        font-weight: normal;
        font-style: normal;
    }
</style>


<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                      <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>" style="color:#CCCCCC">Home</a></li> 
                        <li class="active">Products Description</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2> Home Loan<strong> Products  </strong>Description</h2>
                <div class="row">
                    <div class="col-md-12">
                        <p>Knowing about the product will always make the home loan processing smooth to every customer. Before going for a home loan processing please be aware of your loan product and the terms and conditions that the Bank is asking to fulfil to have the loan done. There are different products for which bank are having different terms and conditions for each product. Check the interest rates, sanction conditions, legal and technical conditions, processing fees charges here by just selecting the required fields for the product that suits your needs.</p>
                    </div>
                </div>

                <form id="testform3" method="post">
                    <fieldset class="personal-data">
                        <div class="news-tagger-container">
                            <div class="row-fluid">
                                <div class="row">
                                    <div class="row ns-fixed-height">
                                        <div class="col-md-12">
                                            <h3><span>Income Of Source </span></h3>
                                        </div>
                                        <div class="col-md-12 news-tagger-content">
                                            <div class="row news-tagger-city">
                                                <div class="cityNameDiv col-md-4 text-center pad-none hover-icon ">
                                                    <div class="touch-icon touch-icon-active">
                                                        <label class="radio">
                                                            <label for="ResidentSalaried">
                                                                <div class="hvr-pulse">
                                                                    <span class="sprite-city icon-rs hvr-outline-out"></span> <span class="city-name">Resident Salaried</span>
                                                                    <div class="radio-box">
                                                                        <input type="radio" name="ResidentSalaried" data-selection="city" data-action="change:edit"
                                                                               id="ResidentSalaried"
                                                                               value="ResidentSalaried"
                                                                               data-toggle="radio" 
                                                                               class=" basic-required-options city-radio-options"/>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="cityNameDiv col-md-4 text-center">
                                                    <div class="touch-icon touch-icon-">
                                                        <label class="radio">
                                                            <label for="cityNameCHENNAI">
                                                                <div class="hvr-pulse">
                                                                    <span class="sprite-city icon-se hvr-outline-out"></span> <span class="city-name">Resident Self Employed </span>
                                                                    <div class="radio-box">
                                                                        <input type="radio" name="form.applicantPlaceHolder.residenceCity.value" data-selection="city" data-action="change:edit"

                                                                               id="cityNameCHENNAI"

                                                                               value="CHENNAI"

                                                                               data-toggle="radio" class=" basic-required-options city-radio-options" />
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="cityNameDiv col-md-4 text-center">
                                                    <div class="touch-icon touch-icon-">
                                                        <label class="radio">
                                                            <label for="cityNameNEW DELHI">
                                                                <div class="hvr-pulse">
                                                                    <span class="sprite-city icon-nri hvr-outline-out"></span> <span class="city-name">NRI Salaried </span>
                                                                    <div class="radio-box">
                                                                        <input type="radio" name="form.applicantPlaceHolder.residenceCity.value" data-selection="city" data-action="change:edit"

                                                                               id="cityNameNEW DELHI"

                                                                               value="NEW DELHI"

                                                                               data-toggle="radio" class=" basic-required-options city-radio-options" />
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="col-md-12 text-center news-tagger-btn">
          
                                  <a class="btn btn-wide apply" href="#newstaggered-carousel" data-slide="next" data-action="click:nextSlide">Continue
          
                                  </a>
          
                              </div>-->
                                </div>
                            </div>
                        </div>


                    </fieldset>

                    <fieldset class="address-data-inputs">
                        <div class="news-tagger-container">
                            <div class="row-fluid">
                                <div class="row">

                                    <div class="row ns-fixed-height">
                                        <div class="col-md-12">
                                            <h3><span>Bank </span></h3>
                                        </div>
                                        <div class="col-md-12 news-tagger-content">
                                            <div class="row news-tagger-city">
                                                <div class="cityNameDiv col-md-6 text-center pad-none hover-icon ">
                                                    <div class="touch-icon touch-icon-active">
                                                        <label class="radio">
                                                            <label for="cityNameMUMBAI">
                                                                <div class="hvr-pulse">
                                                                    <span class="sprite-city icon-gsincome hvr-outline-out"></span> <span class="city-name">Banks Considering Gross Income</span>
                                                                    <div class="radio-box">
                                                                        <input type="radio" name="form.applicantPlaceHolder.residenceCity.value" data-selection="city" data-action="change:edit"

                                                                               id="cityNameMUMBAI"

                                                                               value="MUMBAI"

                                                                               data-toggle="radio" class=" basic-required-options city-radio-options" />
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="cityNameDiv col-md-6 text-center">
                                                    <div class="touch-icon touch-icon-">
                                                        <label class="radio">
                                                            <label for="cityNameCHENNAI">
                                                                <div class="hvr-pulse">
                                                                    <span class="sprite-city icon-net_income hvr-outline-out"></span> <span class="city-name">Banks Considering Net Income </span>
                                                                    <div class="radio-box">
                                                                        <input type="radio" name="form.applicantPlaceHolder.residenceCity.value" data-selection="city" data-action="change:edit"

                                                                               id="cityNameCHENNAI"

                                                                               value="CHENNAI"

                                                                               data-toggle="radio" class=" basic-required-options city-radio-options" />
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </fieldset>

                    <fieldset class="personal-data">
                        <div class=" news-tagger-container" data-actionLoc="slideElig:salaryaccount">
                            <div class="row-fluid">
                                <div class="row">
                                    <div class="row ns-fixed-height">

                                        <div class="col-md-12">
                                            <h3><span>Loan</span></h3>
                                        </div>
                                        <div class="col-sm-11 col-md-12  pl-salary-account salary-bank">
                                            <div class="row news-tagger-content news-tagger-salary-deposited">
                                                <div class="col-md-3 col-sm-4 loan-select">
                                                    <div class="touch-icon">
                                                        <label class="radio">
                                                            <div class="hvr-pulse">
                                                                <label for="salaryAccount_radio_012"> <span class="sprite-bank-desk icon-bank-12 hvr-outline-out"> </span> <span class="bank-name">New Purchase (Flat Or Independent)</span> </label>
                                                                <div class="radio-box">
                                                                    <input type="radio" value="12" class="basic-required-options" slideNextOn="change" data-action="change:edit:inclData" id="salaryAccount_radio_012" name="form.details.applicant.existingBankAccounts[0].bank.id" data-toggle="radio"   />
                                                                </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 loan-select">
                                                <div class="touch-icon">
                                                    <label class="radio">
                                                        <div class="hvr-pulse">
                                                            <label for="salaryAccount_radio_057"> <span class="sprite-bank-desk icon-bank-57 hvr-outline-out"> </span> <span class="bank-name">Resale Purchase (Flat Or Independent House)</span> </label>
                                                            <div class="radio-box">
                                                                <input type="radio" value="57" class="basic-required-options" slideNextOn="change" data-action="change:edit:inclData" id="salaryAccount_radio_057" name="form.details.applicant.existingBankAccounts[0].bank.id" data-toggle="radio"   />
                                                            </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4 loan-select">
                                            <div class="touch-icon">
                                                <label class="radio">
                                                    <div class="hvr-pulse">
                                                        <label for="salaryAccount_radio_05"> <span class="sprite-bank-desk icon-bank-5 hvr-outline-out"> </span> <span class="bank-name">Plot Purchase</span> </label>
                                                        <div class="radio-box">
                                                            <input type="radio" value="5" class="basic-required-options" slideNextOn="change" data-action="change:edit:inclData" id="salaryAccount_radio_05" name="form.details.applicant.existingBankAccounts[0].bank.id" data-toggle="radio"   />
                                                        </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 loan-select">
                                        <div class="touch-icon">
                                            <label class="radio">
                                                <div class="hvr-pulse">
                                                    <label for="salaryAccount_radio_02"> <span class="sprite-bank-desk icon-bank-2 hvr-outline-out"> </span> <span class="bank-name">Construction</span> </label>
                                                    <div class="radio-box">
                                                        <input type="radio" value="2" class="basic-required-options" slideNextOn="change" data-action="change:edit:inclData" id="salaryAccount_radio_02" name="form.details.applicant.existingBankAccounts[0].bank.id" data-toggle="radio"   />
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-4 loan-select">
                                        <div class="touch-icon">
                                            <label class="radio">
                                                <div class="hvr-pulse">
                                                    <label for="salaryAccount_radio_092"> <span class="sprite-bank-desk icon-bank-92 hvr-outline-out"> </span> <span class="bank-name">Mortgage</span> </label>
                                                    <div class="radio-box">
                                                        <input type="radio" value="92" class="basic-required-options" slideNextOn="change" data-action="change:edit:inclData" id="salaryAccount_radio_092" name="form.details.applicant.existingBankAccounts[0].bank.id" data-toggle="radio"   />
                                                    </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 loan-select">
                                    <div class="touch-icon">
                                        <label class="radio">
                                            <div class="hvr-pulse">
                                                <label for="salaryAccount_radio_0999"> <span class="sprite-bank-desk icon-bank-999 hvr-outline-out"> </span> <span class="bank-name">Plot + Construction</span> </label>
                                                <div class="radio-box">
                                                    <input type="radio" value="999" class="basic-required-options" slideNextOn="change" data-action="change:edit:inclData" id="salaryAccount_radio_0999" name="form.details.applicant.existingBankAccounts[0].bank.id" data-toggle="radio"   />
                                                </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 loan-select">
                                <div class="touch-icon">
                                    <label class="radio">
                                        <div class="hvr-pulse">
                                            <label for="salaryAccount_radio_997"> <span class="sprite-bank-desk icon-receive-cash hvr-outline-out"> </span> <span class="bank-name">Balance Transfer</span> </label>
                                            <div class="radio-box">
                                                <input type="radio" value="997" id="salaryAccount_radio_997" data-action="change:edit:inclData"

                                                       name="form.details.applicant.existingBankAccounts[0].bank.id" class="validate basic-required-options" slideNextOn="change" data-toggle="radio"  />
                                            </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 loan-select">
                            <div class="touch-icon">
                                <label class="radio">
                                    <div class="hvr-pulse">
                                        <label for="salaryAccount_radio_998"> <span class="sprite-bank-desk icon-receive hvr-outline-out"> </span> <span class="bank-name">Loan Extension</span> </label>
                                        <div class="radio-box">
                                            <input type="radio" value="998" id="salaryAccount_radio_998" data-action="change:edit:inclData"

                                                   name="form.details.applicant.existingBankAccounts[0].bank.id" class="validate basic-required-options" slideNextOn="change" data-toggle="radio"  />
                                        </div>
                                </label>
                            </div>
                        </div>
                        </div>


                        </div>
                        </div>
                        </div>
                        <!--<div class="col-md-12 text-center news-tagger-btn">

                  <a class="btn btn-wide apply" id="continueButton" href="#newstaggered-carousel" data-slide="next" data-action="click:nextSlide">Continue

                  </a>

              </div>-->
                        </div>
                        </div>
                        </div>

                    </fieldset>


                    <fieldset class="message-details">
                        <div class=" news-tagger-container">
                            <div class="row-fluid">
                                <div class="row">
                                    <div class="row ns-fixed-height">
                                        <div class="col-md-12 contact-head">
                                            <h3><span>You Selected : Resident Salaried <img src="<?php echo $staticContent; ?>images/arruw_nav.png" class="nav_arrow_title" > Banks Considering Gross Income <img src="<?php echo $staticContent; ?>images/arruw_nav.png" class="nav_arrow_title" > Plot Purchase</span></h3>
                                        </div>
                                        <div class="news-tagger-content news-tagger-contact">
                                            <div class="col-md-12 contact-less-tab" data-actionLoc="slideElig:contactme">
                                                <div class="col-md-12">
                                                    <div class="col-md-3 left-side">Rate of Interest</div>
                                                    <div class="col-md-9 right-side">10.00% to 11.00%</div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-3 left-side">Maximum Tenure</div>
                                                    <div class="col-md-9 right-side">25 Years</div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-3 left-side">Processing Fee</div>
                                                    <div class="col-md-9 right-side">0.5 % of Loan Amount + 14% Service Tax</div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-3 left-side" style="padding: 1.95% 1%;">Description</div>
                                                    <div class="col-md-9 right-side">This loan will be given to those persons who wants to buy a resale Flat or independent house from a person who already owns it.</div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-3 left-side" style=" padding: 3.1% 1%;">Sanctions Conditions</div>
                                                    <div class="col-md-9 right-side">Age Min 21, Max 65, Min Income 10,000/ month. The property should be located with in the Geo limits of the bank. If any deviations are there then BRS copy (Building Regularisation) should be submitted. Bank will verify all the details mentioned in the application form.</div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-3 left-side" style="padding: 1.95% 1%;">Legal and Technical Conditions</div>
                                                    <div class="col-md-9 right-side">All the legal documents will be scrutinized by the panel advocates and the property will be evaluated by the Technical valuers. Bank reserves the right to ask for additional documents if needed to clear the title of the property.</div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-3 left-side" style="padding: 4.3% 1%;">Disbursement Conditions</div>
                                                    <div class="col-md-9 right-side">Funding will be done upto a maximum of 80% of the agreement of sale value, registration cost, technical value or the sanctioned amount which ever is less subject to all legal and technical verifications being Positive. All the original documents should be verified with the bank before disbursement only. Part payments will be accepted after 6 months of complete loan disbursement only. Tax exemption is applicable to this loan.</div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-3 left-side">Pre Closure Conditions</div>
                                                    <div class="col-md-9 right-side">Nil if paid from own sources for both pre payments and part payments.</div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-3 left-side">Rate of Interest</div>
                                                    <div class="col-md-9 right-side">10.00% to 11.00%</div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-3 left-side">Rate of Interest</div>
                                                    <div class="col-md-9 right-side">10.00% to 11.00%</div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-3 left-side" style=" padding: 2.85%;"></div>
                                                    <div class="col-md-9 right-side">
                                                        <input type="submit" value="Print" class="btn btn-primary" data-loading-text="Loading...">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contactme-slide-additional-line">We don't spam or sell your details to annoying people. Read our <a href="/privacy-policy.html" target="_blank">Privacy Policy</a>.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('Bootstrap/footer', array('jsFiles' => array())); ?>

<script src="<?php echo $staticContent; ?>vendor/jflickrfeed/jflickrfeed.js"></script>
<script src="<?php echo $staticContent; ?>vendor/magnific-popup/magnific-popup.js"></script>
<!-- Theme Initializer -->

<!-- Custom JS -->
<script src="<?php echo $staticContent; ?>js/custom.js"></script>

<script type="text/javascript" src="<?php echo $staticContent; ?>css/lwflatuiscripts.js" ></script>


