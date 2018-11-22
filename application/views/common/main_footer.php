<?php $myUrl = IMAGES; ?>
 <!--Footer Widget Area Start-->
 <div class="footer-widget-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="single-footer-widget">
                        <div class="footer-logo">
                            <a href="<?php echo base_url().'home.html';?>">
                                <img src="<?=$myUrl.'logo/'.$profile->footer_logo?>" alt="RAGHU ENGINEERING COLLEGE">
                            </a>
                        </div>
                        <!-- <p>A CONSUMMATE ENVIRONMENT FOR PURSUIT OF ENGINEERING EDUCATION </p> -->
                        <p><?=$profile->footer_slogan?></p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/RaghuEduInstitutions/" target="_blank">
                                <i class="zmdi zmdi-facebook"></i>
                            </a>
                            <a href="https://twitter.com/login" target="_blank">
                                <i class="zmdi zmdi-twitter"></i>
                            </a>
                            <a href="https://plus.google.com/" target="_blank">
                                <i class="zmdi zmdi-google-plus"></i>
                            </a>
                            <a href="https://www.instagram.com/?hl=en" target="_blank">
                                <i class="zmdi zmdi-instagram"></i>
                            </a>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-md-offset-1">
                    <div class="single-footer-widget">
                        <h3>GET IN TOUCH</h3>
                        <span>
                            <i class="fa fa-phone"></i><?=$profile->phone1?>,<br/> <span class="footer-phone"><?=$profile->phone2?>.</span></span>
                        <span>
                            <i class="fa fa-envelope"></i><?=$profile->contact_email?></span>                        
                        <span>
                            <i class="fa fa-map-marker"></i>Raghu Engineering College<br/> <span class="footer-phone">Dakamarri (v), Bheemunipatnam</span> <br/><span class="footer-phone">Mandal, Visakhapatnam - 531162</span></span>
                    </div>
                </div>
                <div class="col-md-3  col-sm-4">
                    <div class="single-footer-widget">
                        <h3>Useful Links</h3>
                        <ul class="footer-list">
                            <li>
                                <a href="http://sports.raghueducational.org/" target="_blank">Sports</a>
                            </li>
                            <li>
                                <a href="http://www.raghuerp.in/" target="_blank">ERP</a>
                            </li>
                            <li>
                                <a href="http://raghueducational.org/alumni/" target="_blank">Alumini</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url().'newsandevents.html';?>">Events</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url().'newsandevents.html';?>">News</a>
                            </li>
                        </ul>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!--End of Footer Widget Area-->

<!--Footer Area Start-->
            <footer class="footer-area">
                <div class="container">
                    <div class="row">
                        <!-- <div class="col-md-6 col-sm-7">
                            <span>Raghu Engineering College</span>
                        </div> -->
                        <div class="col-md-6 col-sm-5 ">
                            <div class="column-left">
                                <span><?=$profile->copy_right?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--End of Footer Area-->
        </div>
        <!--End of Bg White-->
    </div>
    <!--End of Main Wrapper Area-->