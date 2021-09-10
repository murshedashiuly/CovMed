

       
    <!-- Page title -->
    <section class="page-title" style="background-image:url(<?=base_url()?>asset/images/background/3.jpg)">
        <div class="container">
            <div class="outer-box">
                <h1>Faq's</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?=base_url()?>welcome">Home</a></li>
                    <li class="active"><a href="<?=base_url()?>welcome/faq">Faq's</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Faq section -->
    <section class="faq-section sp-two">
        <div class="container"> 
            <div class="sec-title left-ti">
                <h4>FAQ</h4>
                <h1>Frequently Asked Questions</h1>
            </div>     
            <ul class="accordion-box mb-30">
                <!--Accordion Block-->
                <li class="accordion block">
                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon_plus fas fa-angle-up"></span> <span class="icon icon_minus fas fa-angle-down"></span></div>What is the Coronavirus?</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text fadeInUp animated" data-wow-duration="1s">On February 11, 2020 the World Health Organization announced an official name for the disease that is causing the 2019 novel coronavirus outbreak, first identified in Wuhan China. The new name of this disease is coronavirus disease 2019, abbreviated as COVID-19. In COVID-19, ‘CO’ stands for ‘corona,’ ‘VI’ for ‘virus,’ and ‘D’ for disease. Formerly, this disease was referred to as “2019 novel coronavirus” or “2019-nCoV”.
                       A novel coronavirus is a new coronavirus that has not been previously identified. The virus causing coronavirus disease 2019 (COVID-19), is not the same as the coronaviruses that commonly circulate among humans and cause mild illness, like the common cold.
                            </div>
                            
                        </div>
                    </div>
                </li>

                <!--Accordion Block-->
                <li class="accordion block">
                    <div class="acc-btn active"><div class="icon-outer"><span class="icon icon_plus fas fa-angle-up"></span> <span class="icon icon_minus fas fa-angle-down"></span></div>How does Corona get infected?</div>
                    <div class="acc-content current">
                        <div class="content">
                            <div class="text fadeInUp animated" data-wow-duration="1s">We know that the disease is caused by the SARS-CoV-2 virus, which spreads between people in several different ways.

                         The virus can spread from an infected person’s mouth or nose in small liquid particles when they cough, sneeze, speak, sing or breathe. These particles range from larger respiratory droplets to smaller aerosols.
                        People may also become infected by touching surfaces that have been contaminated by the virus when touching their eyes, nose or mouth without cleaning their hands.

                        Further research is ongoing to better understand the spread of the virus and which settings are most risky and why. Research is also under way to study virus variants that are emerging and why some are more transmissible.
                        ebx-fkzt-hus
                            </div>
                            
                        </div>
                    </div>
                </li>

                <!--Accordion Block-->
                <li class="accordion block">
                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon_plus fas fa-angle-up"></span> <span class="icon icon_minus fas fa-angle-down"></span></div>Ways to Prevent Coronavirus?</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text fadeInUp animated" data-wow-duration="1s">There is currently no vaccine to prevent coronavirus disease 2019 (COVID-19). The best way to prevent illness is to avoid being exposed to this virus. Stay aware of the latest information on the COVID-19 outbreak, available on the WHO website and through your national and local public health authority.
                            </div>
                            
                        </div>
                    </div>
                </li>

                <!--Accordion Block-->
                <li class="accordion block">
                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon_plus fas fa-angle-up"></span> <span class="icon icon_minus fas fa-angle-down"></span></div>How to consult a doctor?</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text fadeInUp animated" data-wow-duration="1s">Ask your doctor about telemedicine appointment options, such as a video consult. It can be an effective way for you to follow-up with your doctor from home. Or you may be able to have a telemedicine appointment instead of an in-person visit. You also may be able to have a phone consult with your doctor.
                            </div>
                        </div>
                    </div>
                </li>

                <!--Accordion Block-->
                <li class="accordion block">
                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon_plus fas fa-angle-up"></span> <span class="icon icon_minus fas fa-angle-down"></span></div>How to raise social awareness?</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text fadeInUp animated" data-wow-duration="1s">Stay informed about the local COVID-19 situation. Be aware of temporary school dismissals in your area, as this may affect your household’s daily routine.
                        Continue practicing everyday preventive actions. Cover coughs and sneezes with a tissue and wash your hands often with soap and water for at least 20 seconds. If soap and water are not available, use a hand sanitizer that contains 60% alcohol. Clean frequently touched surfaces and objects daily using a regular household detergent and water.
                            </div>
                        </div>
                    </div>
                </li> 
            </ul>

        </div>
    </section>

    <!-- Call to Action -->
    <div class="call-to-action" style="background-image:url(<?=base_url()?>asset/images/background/bg2.jpg);">
        <div class="container">
            <div class="wrapper-box">
                <h1>Contact us immediately if there are signs <br>of the Coronavirus</h1>
                <div class="read-more"> <?php  if(empty($this->session->userdata('username'))){ ?>
                                          <a href="<?=base_url()?>welcome/contact1" class="theme-btn btn-style-two small-btn">Contact Us</a>
                                        <?php }
                                    else{?>
                                         <a href="<?=base_url()?>user/contact2" class="theme-btn btn-style-two small-btn">Contact</a>

                                    <?php } ?></div>
            </div>
        </div>
    </div>
    
   

   