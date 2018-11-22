<html lang="en">

<head> 
</head>

<body>
    <br>
    <br><br><br><br><br>
 <?php 
 $blood_max = 100;
 ?>

        <!--<div class="container-rXd" style="width:100%;"></div>-->
        <!-- <img src=" Images/hospital-home.jpg" style="width:100%;"> -->

        <div class="container-fluid">

            <h3><b> </b> <?php echo $hname?> : Current Blood Samples</h4>
                <!-- <div class="col-sm-12">
                     
                    <div style="width:100%; text-align:center; font-size:20px; height:200px; background-color:#ffe5e5; border-radius: 5px 50px; padding-top:80px;">No Blood Sample Available<br><br><a href="addBlood.php"><button type="button" class="btn btn-danger">Add Blood Samples</button></a></div>

                     
                </div> -->
                <div class="col-sm-1">
                </div>
                <div class="col-sm-4">
                    <?php 
                    {
                          print_r($a_plus);  
                        
                         
                        $a_plus = $a_plus;
                        $a_bb = ($a_plus * 100)/($blood_max);
                    ?>
                    <label for="a_plus"><h4>A +ve : <?php echo $a_plus; ?> /Units</h4></label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $a_bb; ?>%">
                        </div>
                    </div>
                    <?php }?>

                    <?php 
                    {
                        $a_plus = $b_plus;
                        $a_bb = ($b_plus * 100)/($blood_max);
                    ?>
                    <label for="b_plus"><h4>B +ve : <?php echo $b_plus; ?> /Units</h4></label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $a_bb; ?>%">
                        </div>
                    </div>
                    <?php }?>

                    <?php 
                    {
                        $a_plus = $o_plus;
                        $a_bb = ($o_plus * 100)/($blood_max);
                    ?>
                    <label for="o_plus"><h4>O +ve : <?php echo $o_plus; ?> /Units</h4></label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $a_bb; ?>%">
                        </div>
                    </div>
                    <?php }?>

                    <?php 
                    {
                        $a_plus = $ab_plus;
                        $a_bb = ($ab_plus * 100)/($blood_max);
                    ?>
                    <label for="ab_plus"><h4>AB +ve : <?php echo $ab_plus; ?> /Units</h4></label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $a_bb; ?>%">
                        </div>
                    </div>
                    <?php }?>



                </div>
                <div class="col-sm-2">
                </div>
                <div class="col-sm-4">
                    <?php 
                    {
                        $a_plus = $a_neg;
                        $a_bb = ($a_neg * 100)/($blood_max);
                    ?>
                    <label for="a_neg"><h4>A -ve : <?php echo $a_neg; ?> /Units</h4></label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $a_bb; ?>%">
                        </div>
                    </div>
                    <?php }?>

                    <?php 
                    {
                        $a_plus = $b_neg;
                        $a_bb = ($b_neg * 100)/($blood_max);
                    ?>
                    <label for="b_neg"><h4>B -ve : <?php echo $b_neg; ?> /Units</h4></label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $a_bb; ?>%">
                        </div>
                    </div>
                    <?php }?>

                    <?php 
                    {
                        $a_plus = $o_neg;
                        $a_bb = ($o_neg * 100)/($blood_max);
                    ?>
                    <label for="o_neg"><h4>O -ve : <?php echo $o_neg; ?> /Units</h4></label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $a_bb; ?>%">
                        </div>
                    </div>
                    <?php }?>

                    <?php 
                    {
                        $a_plus = $ab_neg;
                        $a_bb = ($ab_neg * 100)/($blood_max);
                    ?>
                    <label for="ab_neg"><h4>AB -ve : <?php echo $ab_neg; ?> /Units</h4></label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $a_bb; ?>%">
                        </div>
                    </div>
                    <?php }?>
                </div>

                <div class="col-sm-1">
                </div>
                <br><br>
                <br><br>

                <div class="row">
                </div>
                <div class="col-sm-4">
                </div>
                
                <div class="col-sm-4">
                </div>
        </div>

       
            </div>
            </div>
 </body>

</html>
