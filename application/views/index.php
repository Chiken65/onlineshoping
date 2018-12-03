<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <?php foreach ($home_banners as $dt) { ?>
           <div class="item active">
            <img src="<?= 'assets/images/' . $dt; ?>" alt="Banner" />
         </div>
         <?php 
    } ?>
        </div>
</div>

<!-- <div class="slider-area">
    <div class="preview-2">
        <div id="nivoslider" class="slides">
            <?php foreach ($home_banners as $dt) { ?>
            <img src="<?= 'assets/images/' . $dt; ?>" alt="Banner" />
            <?php 
        } ?>
        </div>
    </div>
</div> -->



<div class="course-area section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>Courses</h3>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="single-item">
                    <div class="single-item-image overlay-effect">
                        <a>
                            <img src="assets/images/banner1.jpg">
                        </a>
                    </div>
                    <div class="single-item-text">
                        <h4 class="dept_home_head">
                            <a>Item Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        </h4>
                        <br/>
                        <div class="row pb-30">
                            <div class="col-md-12">
                                <div class="col-md-6">Intake</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-4">100</div>
                                
                                <div class="col-md-6">Program</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-4">Name</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="web_disigner">
    <div class="web_disigner_contain">  
        <div class="container">
            <div class='row'>
                <div class='col-md-12'>
                    <div class="carousel slide media-carousel" id="media" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <center><h1  style="display:inline;">Customer Review</h1></center>
                                <div class="row">                
                                    <div class="col-md-6 padtop30">
                                        <center>
                                            <div class="parent_circle">
                                                <div class="parent_circle_contain">
                                                    Rohith
                                                </div>
                                                <div class="child_round_circle child_round_circle_img1">
                                                <img src="assets/images/banner1.jpg" class="img-circle">                
                                                </div>                        
                                            </div>
                                        </center>
                                    </div>
                                    <div class="col-md-5 padtop100">
                                        Very much satisfied
                                    </div>
                                </div>                        
                            </div>
                  
                        </div>
                        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                        <a data-slide="next" href="#media" class="right carousel-control">›</a>
                    </div>                          
                </div>
            </div>
        </div>
    </div>
</div>