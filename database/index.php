<?php $myUrl = IMAGES; ?>
<!--Slider Area Start-->
<div class="slider-area">
    <div class="preview-2">
        <div id="nivoslider" class="slides">
            <?php foreach ($hame_banners as $dt) { ?>
            <img src="<?=$myUrl.'banners/'.$dt->image;?>" alt="<?=$dt->title ?>" />
            <?php } ?>
        </div>
    </div>
</div>
<!--End of Slider Area-->

<!--WHY REC Area Start-->
<div class="about-area blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="about-container">
                    <h3>WHY REC ?</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <?php foreach ($why_this as $dt) { ?>
            <div class="col-md-3">
                <div class="single-comment">
                    <div class="author-image">
                        <img src="<?= $myUrl . 'whyrec/' . $dt->img; ?>" alt="">
                    </div>
                    <div class="comment-text comment-text-border">
                        <div class="author-info">
                            <h3 class="bottom-mrg top-pad">
                                <a class="white-font"><?= $dt->subject ?></a>
                            </h3>
                        </div>
                        <p><?= $dt->message ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!--End of WHY REC Area-->

<!--Course Area Start-->
<div class="course-area section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>Courses</h3>
                        <br/>
                        <!-- <p>There are many variations of passages of Lorem Ipsum</p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $i = 1; foreach ($cource_list as $dt) { ?>
            <div class="col-md-4 col-sm-6">
                <div class="single-item">
                    <div class="single-item-image overlay-effect">
                        <a>
                            <img src="<?= $myUrl . 'courses/' . $dt->img; ?>" alt="REC - <?= $dt->fullname ?>">
                        </a>
                    </div>
                    <div class="single-item-text">
                        <h4 class="dept_home_head">
                            <a><?= $dt->fullname ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        </h4>
                        <br/>
                        <div class="row pb-30">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    Intake
                                </div>
                                <div class="col-md-1">
                                    :
                                </div>
                                <div class="col-md-4">
                                    <?= $dt->in_take ?>
                                </div>
                                <div class="col-md-6">
                                    Program
                                </div>
                                <div class="col-md-1">
                                    :
                                </div>
                                <div class="col-md-4">
                                    <?= $dt->course_name ?>
                                </div>
                                <div class="col-md-6">
                                    Course Duration
                                </div>
                                <div class="col-md-1">
                                    :
                                </div>
                                <div class="col-md-4">
                                    <?= $dt->duration ?> Years
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button-bottom">
                        <a href="<?php echo base_url() . 'department/' . $dt->page_name . '/profile.html'; ?>" class="button-default">View More
                        </a>
                    </div>
                </div>
            </div>
            <?php if ($i == 3) { ?>
                        <div class="clearfix"></div>
                        <br/>
                        <br/>
                        <br/>
            <?php } $i++; } ?>
            <div class="col-md-12 col-sm-12 text-center">
                <a href="<?php echo base_url() . 'courses.html'; ?>" class="button-default button-large">Browse All Courses
                    <i class="zmdi zmdi-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--End of Course Area-->

<!--Placements Area Start-->
<div class="fun-factor-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper white">
                    <div class="section-title">
                        <h3>Placements</h3><br/>
                        <!-- <p>There are many variations of passages of Lorem Ipsum</p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel slide media-carousels"  data-ride="carousel">
                    <div class="carousel-inner">
                            <?php $c = 0; foreach ($palcement_banners as $dt) { 
                                if ($c == 0) { $active = 'active'; }
                                else { $active = ''; } ?>
                            <div class="item <?= $active ?>">
                                <div class="col-md-12">
                                    <img src="<?= $myUrl . 'placements/banners/' . $dt->image; ?>" class="img-responsive" alt="<?= $dt->title ?>">
                                </div>                 
                            </div>
                            <?php $c++; } ?>                    
                    </div>
                    <a data-slide="prev" href="#media1" class="left carousel-control">‹</a>
                    <a data-slide="next" href="#media1" class="right carousel-control">›</a>
                </div>
                <br/>
            </div>
            <div class="col-md-12">
                <marquee behavior="scroll" scrollamount="3" direction="left">
                    <?php foreach ($palcement_logos as $dt) { ?>
                    <img src="<?= $myUrl . 'placements/logos/' . $dt->logo_img; ?>" width="70" class="placement-scroll">
                    <?php } ?>
                </marquee>
            </div>
        </div>
    </div>
</div>
<!--End of Placements Area-->

<!-- Videos Area Start-->
<div class="section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>Videos</h3><br/>
                        <!-- <p>There are many variations of passages</p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="gallery-area">
                <?php foreach ($home_videos as $dt) { ?>
                <div class="col-md-6 mb-10 col-sm-6">
                    <div class="video-gallery">
                        <iframe width="100%" height="290px" src="<?= $dt->video_link ?>" frameborder="0" allowfullscreen, autoPlay:true, mute:true></iframe>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- End of Videos Area-->

<!--Chairman Start-->
<div class="web_disigner">
    <div class="web_disigner_contain">  
        <div class="container">
            <div class='row'>
                <div class='col-md-12'>
                    <div class="carousel slide media-carousel" id="media" data-ride="carousel">
                        <div class="carousel-inner">
                        <?php $cn = 0; foreach ($stalwarts as $dt) {
                            if ($cn == 0) { $sactive = 'active'; }
                            else { $sactive = ''; } ?>
                            <div class="item <?= $sactive ?>">
                                <center><h1  style="display:inline;"><?= $dt->stalwart ?> </h1></center>
                                <div class="row">                
                                    <div class="col-md-6 padtop30">
                                        <center>
                                            <div class="parent_circle">
                                                <div class="parent_circle_contain">
                                                    <?= $dt->title ?>
                                                </div>
                                                <div class="child_round_circle child_round_circle_img1">
                                                    <img src="<?= $myUrl.'stalwarts/' . $dt->photo; ?>" alt="<?= $dt->stalwart ?>"  class="img-circle">                
                                                </div>                        
                                            </div>
                                        </center>
                                    </div>
                                    <div class="col-md-5 padtop100">
                                        <?= $dt->message ?>
                                    </div>
                                </div>                        
                            </div>
                        <?php $cn++; } ?>                    
                        </div>
                        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                        <a data-slide="next" href="#media" class="right carousel-control">›</a>
                    </div>                          
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Chairman-->     
<!--Event Area Start-->
<div class="event-area section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>OUR EVENTS</h3><br/>
                        <!-- <p>There are many variations of passages</p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $count = 1; foreach ($news_events as $ne) { ?>
            <div class="col-md-4 col-sm-6">
                <div class="single-event-item">
                    <div class="single-event-image">
                        <a href="<?php echo base_url() . 'news_events_detials/' .$ne->id ?>">
                            <img src="<?=$myUrl.'news_events/'.$ne->cover_image; ?>" alt="" style="width: 370px; height: 244px;">
                            <span>
                                <span><?php echo date('d', strtotime($ne->event_date)) ?></span>
                                <span><?php echo date('M', strtotime($ne->event_date)) ?></span>
                                <span><?php echo date('Y', strtotime($ne->event_date)) ?></span>
                            </span>
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3>
                            <a href="#"><?php echo substr($ne->title, 0, 18) .'..'; ?></a>
                        </h3>
                        <div class="single-item-comment-view">
                            <span>
                                <i class="zmdi zmdi-time"></i><?php echo date('g:i a',strtotime($ne->event_date)) ?></span>
                            <span>
                                <i class="zmdi zmdi-pin"></i><?= $ne->place; ?></span>
                        </div>
                        <?= substr($ne->message, 0, 150) . '...'; ?>
                        <a class="button-default" href="<?php echo base_url() .'news_events_detials/' . $ne->id ?>">View More</a>
                    </div>
                </div>
            </div>
            <?php if ($count == 3) { $count = 1; ?>
            <?php } else { $count++; } } ?>
        </div>
    </div>
</div>

<!--End of Event Area-->

<!--Newsletter Area Start-->
<div class="newsletter-area">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <div class="newsletter-content">
                    <h3>SUBSCRIBE</h3>
                    <h2>TO OUR NEWSLETTER</h2>
                </div>
            </div>
            <div class="col-md-7 col-sm-7">
                <div class="newsletter-form angle">
                    <form action="#" id="mc-form" class="mc-form footer-newsletter fix">
                        <div class="subscribe-form">
                            <input id="mc-email" type="email" name="email" placeholder="Enter your email address...">
                            <button id="mc-submit" type="submit">SUBSCRIBE</button>
                        </div>
                    </form>
                    <!-- mailchimp-alerts Start -->
                    <div class="mailchimp-alerts text-centre fix pull-right">
                        <div class="mailchimp-submitting"></div>
                        <!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div>
                        <!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div>
                        <!-- mailchimp-error end -->
                    </div>
                    <!-- mailchimp-alerts end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Newsletter Area-->

<script>
    $(document).ready(function() {
        $('#media').carousel({
            pause: true,
            interval: false,
            slideDelay: 4000,
            fadeDelay: 35,
            wrapperID: "slideShowImages",
            buttonID: "slideShowButton",
            buttonStartText: "Start Slides",
            buttonStopText: "Stop Slides",
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#media1').carousel({
            pause: true,
            interval: false,
        });
    });
</script>