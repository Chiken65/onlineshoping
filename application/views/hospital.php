<html lang="en">

<head>
     
</head>

<body>
 
<br><br>
<br>
<br>
<br>

     
<form action="<?php echo base_url().'request_sample.html'?>" method="post">   
<div class="container-fluid">
            <h3><b>Hospital :      <?php echo $hospital->hname;?></b></h3>
           
            <div class="col-sm-5">
                            
                
                <table class="table table-bordered">
                    <tr>
                        <td><span class="glyphicon glyphicon-user"></span> Contact Person</td>
                        <td>
                            <?php echo $hospital->cname; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="glyphicon glyphicon-envelope"></span> Email ID</td>
                        <td>
                            <?php echo $hospital->email; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="glyphicon glyphicon-phone-alt"></span> Hospital Phone</td>
                        <td>
                            <?php echo $hospital->phone; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="glyphicon glyphicon-phone"></span> Emergency Contact (Mob.)</td>
                        <td>
                            <?php echo $hospital->mob; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="glyphicon glyphicon-map-marker"></span> Address</td>
                        <td>
                            <?php echo $hospital->address; echo "<br>"; echo $hospital->city; echo ", "; echo $hospital->pin; ?></td>
                    </tr>

                </table>
               
            </div>
         
            <div class="col-sm-5">
            <table class="table table-hover">
    <thead>
      <tr>
        <th>Blood Group</th>
        <th>Units</th>
       </tr>
    </thead>
    <tbody>
    <tr <?php if($hospital->a_plus==0){?> bgcolor="#f98484"  <?php } ?>>
    <td>A +</td> 
        <td><?php echo $hospital->a_plus; ?></td> 
       </tr> 
       <tr <?php if($hospital->b_plus==0){?> bgcolor="#f98484"  <?php } ?>>
        <td >B +</td> 
        <td><?php echo $hospital->b_plus; ?></td> 
       </tr> 
       <tr <?php if($hospital->o_plus==0){?> bgcolor="#f98484"  <?php } ?>>
        <td>O +</td> 
        <td><?php echo $hospital->o_plus; ?></td> 
       </tr> 
       <tr <?php if($hospital->a_neg==0){?> bgcolor="#f98484"  <?php } ?>>
        <td>A -</td> 
        <td><?php echo $hospital->a_neg; ?></td> 
       </tr> 
       <tr <?php if($hospital->b_neg==0){?> bgcolor="#f98484"  <?php } ?>>
        <td>B -</td> 
        <td><?php echo $hospital->b_neg; ?></td> 
       </tr> 
       <tr <?php if($hospital->o_neg==0){?> bgcolor="#f98484"  <?php } ?>>
        <td>O -</td> 
        <td><?php echo $hospital->o_neg; ?></td> 
       </tr> 
       <tr <?php if($hospital->ab_plus==0){?> bgcolor="#f98484"  <?php } ?>>
        <td>AB +</td> 
        <td><?php echo $hospital->ab_plus; ?></td> 
       </tr> 
       <tr <?php if($hospital->ab_neg==0){?> bgcolor="#f98484"  <?php } ?>>
        <td>AB -</td> 
        <td><?php echo $hospital->ab_neg; ?></td> 
       </tr> 
       
    </tbody>
  </table>
            </div>


            <div class="col-sm-2">
            <div class="form-group">
    <label for="exampleFormControlSelect1"> Select Blood Group</label>
    <select class="form-control" name="b_group"  id="mySelect" onchange="myFunction()">
    <option select value="" > select  </option> 
      <option <?php if($hospital->a_plus==0){?> disabled="disabled"  <?php } else {?> value="<?php echo  "A+" ;} ?>" > A+  </option>
      <option <?php if($hospital->b_plus==0){?> disabled="disabled"  <?php } else {?> value="<?php echo  "B+" ;} ?>" > B+  </option>
      <option <?php if($hospital->o_plus==0){?> disabled="disabled"  <?php } else {?> value="<?php echo  "O+" ;} ?>" > O+  </option>
      <option <?php if($hospital->a_neg==0){?> disabled="disabled"  <?php } else {?> value="<?php echo  "A-" ;} ?>" > A-  </option>
      <option <?php if($hospital->b_neg==0){?> disabled="disabled"  <?php } else {?> value="<?php echo  "B-" ;} ?>" > B-  </option>
      <option <?php if($hospital->o_neg==0){?> disabled="disabled"  <?php } else {?> value="<?php echo  "O-" ;} ?>" > O-  </option>
      <option <?php if($hospital->ab_plus==0){?> disabled="disabled"  <?php } else {?> value="<?php echo  "AB+" ;} ?>" > AB+  </option>
      <option <?php if($hospital->ab_neg==0){?> disabled="disabled"  <?php } else {?> value="<?php echo  "AB-" ;} ?>" > AB-  </option>
       
    </select>
  </div>
            </div>
            
        </div>

        
        <input type="hidden" name="blood_group" value="<?php echo $hospital->email;?>">

                    <input type="hidden" name="hosp_email" value="<?php echo $hospital->email;?>">
                    <input type="hidden" name="user_email" value="<?php echo $user_details->email;?>">

                    <center><button type="submit" class="btn btn-danger" >Request Blood </button></center>
                </form>
        
            
</body>

</html>


<script>
function myFunction() {
    var x = document.getElementById("mySelect").value;
    // document.getElementById("demo").innerHTML = "You selected: " + x;
    console.log(x)
}
</script>