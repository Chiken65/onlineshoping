<html lang="en">
<body>
<br><br>
<br>
<br>
<br>
        <!-- <img src="Images/hospital-home.jpg" style="width:100%;"> -->
         <div class="col-sm-1">

        </div>
        <div class="col-sm-5">


             
            <h3>Following are your details</h3>
            <div style="width:100%; text-align:center; font-size:20px; height:400px; background-color:#f8f8f8; border-radius: 5px 50px; padding-top:30px; overflow-y: auto;">
                <table class="table" style="width:90%; margin-left:20px;">
                <!-- <script>console.log($value  );</script> -->
                <?php foreach($receiver as $det){ ?>

                    <tr>
                        <td><span class="glyphicon glyphicon-calendar"></span> DOB </td>
                        <td>:
                            <?php print_r($det->dob); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="glyphicon glyphicon-envelope"></span> Email Id </td>
                        <td>:
                        <?php print_r($det->email); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="glyphicon glyphicon-tint"></span> Blood Group </td>
                        <td>:
                        <?php print_r($det->blood_group); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="glyphicon glyphicon-gift"></span> Weight </td>
                        <td>:
                        <?php print_r($det->weight);  echo " Kg(s)";?>

                         </td>
                    </tr>
                    <tr>
                        <td><span class="glyphicon glyphicon-phone-alt"></span> Phone </td>
                        <td>:
 
                            <?php echo "+91 - "; print_r($det->phone);?>

                        </td>
                    </tr>
                    <tr>
                        <td><span class="glyphicon glyphicon-phone"></span> Mobile </td>
                        <td>:
                        <?php echo "+91 - "; print_r($det->mob);?>

                         </td>
                    </tr>
                    <tr>
                        <td><span class="glyphicon glyphicon-map-marker"></span> Address </td>
                        <td>:
                        <?php  print_r($det->address); echo ", ";print_r($det->city); echo ", ";print_r($det->pin);?>

                            
                        </td>
                    </tr>
                    <tr>
                        <td><span class="glyphicon glyphicon-time"></span> Created At </td>
                        <td>:
                        <?php print_r($det->time_stamp); ?>

                         </td>
                    </tr>
                    <?php  } ?>                         

                </table>
            </div>
        </div>


        <div class="col-sm-5">
            <h3 style="text-align:right;">Blood Sample Request</h3>
 
                 <div style="width:100%; text-align:center; font-size:20px; height:400; background-color:#f8f8f8; border-radius: 50px 5px; padding-top:30px; padding-left:10px;padding-right:10px;overflow-y: auto;">
                    <table class="table table-hover">

                        <tr>
                            <th>Hospital</th>
                            <th>Blood Group / Units</th>
                            <th>Status</th>
                            <th>Request Date</th>
                        </tr>
                        <?php foreach($samples as $det){ ?>

                            <tr class="success">
                                <td>

                                        <?php print_r( $det->hospital_name)?>

                                </td>
                                <td>
                                    <?php echo $det->blood_group; echo" / "; echo $det->units;?> </td>
                                <td>
                                <?php echo $det->status?>
                                </td>
                                <td>
                                    <?php echo $det->time_stamp;?>
                                </td>
                            </tr>  
                            <?php  } ?>                         
 
                    </table>
                </div>
        </div>
        <div class="col-sm-1">
        </div>
         
         
</body>

</html>
