
        
    
    <!-- Page title -->
    <section class="page-title" style="background-image:url(<?=base_url()?>asset/images/background/3.jpg)">
        <div class="container">
            <div class="outer-box">
                <h1>Covid-19</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?=base_url()?>welcome">Home</a></li>
                    <li class="active"><a href="<?=base_url()?>welcome/covid_19">Covid-19</a></li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="covid-19 sp-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="covid-image">
                        <img class="rotate-me" src="<?=base_url()?>asset/images/resource/covid.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="covid-content">
                        <div class="sec-title left-ti">
                            <h1>Coronavirus (Covid-19)</h1>
                        </div>

                        <h3>Coronavirus disease (COVID-19) is an infectious disease caused by a new virus.</h3>
                        <div class="text mb-30">Coronaviruses are a large family of viruses which may cause illness in animals or humans. <br>In humans, several coronaviruses are known to cause respiratory infections ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19.</div>

                        <h3>Symptoms</h3>
                        <div class="text">The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms are usually mild and begin gradually. Some people become infected but don’t develop any symptoms and don't feel unwell. Most people (about 80%) recover from the disease without needing special treatment. Around 1 out of every 6 people who gets COVID-19 becomes seriously ill and develops difficulty breathing. Older people, and those with underlying medical problems like high blood pressure, heart problems or diabetes, are more likely to develop serious illness. People with fever, cough and difficulty breathing should seek medical attention.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <div class="call-to-action" style="background-image:url(<?=base_url()?>asset/images/background/bg2.jpg);">
        <div class="container">
            <div class="wrapper-box">
                <h1>Contact us immediately if there are signs <br>of the Coronavirus</h1>
                <div class="read-more">
                    <?php  if(empty($this->session->userdata('username'))){ ?>
                                          <a href="<?=base_url()?>welcome/contact1" class="theme-btn btn-style-two small-btn">Contact Us</a>
                                        <?php }
                                    else{?>
                                         <a href="<?=base_url()?>user/contact2" class="theme-btn btn-style-two small-btn">Contact</a>

                                    <?php } ?></div>
                </div>
            </div>
        </div>
    </div>

    