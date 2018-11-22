 <!--Breadcrumb Banner Area Start-->
 <div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">ABOUT US</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li>
                                <a href="<?=base_url()?>">Home</a>
                            </li>
                            <li>ABOUT US</li>
                            <li>Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->
<!--Institution Profile Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>Institution Profile</h3><br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?=$profile->college_profile?>
        </div>
    </div>
</div>
<!--End of Institution Profile Page Area-->
<!--Administration Area Start-->
<div class="skill-and-experience-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>Administration</h3><br/>
                        <!-- <p>There are many variations of passages</p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <?=$profile->administration?>
            </div>
            
        </div>
    </div>
</div>
<!--End of Administration Area-->
<!--Features Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>Features</h3><br/>
                        <!-- <p>There are many variations of passages</p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="about-us">
                    <?php foreach($features as $dt) { ?>
                    <span><?=$dt->feature?></span>
                    <?php } ?>
                </div>    
            </div>
        </div>
    </div>
</div>
<!--End of Features Area-->