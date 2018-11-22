<html lang="en">
<head>
  
</head>
<script type="text/javascript">
function myFunction()   
{
    
        if (!window.location.hash) {
            window.location = window.location + '#loaded';
            window.location.reload();
        }
   
}
//-->
</script>
        <body onload="myFunction()">
        
        <!--<div class="container-rXd" style="width:100%;"></div>-->
 <br><br><br><br><br>
        <div class="container-fluid">

            <h3>Blood Requests</h3>
            <div class="col-sm-12">
                

                  
                    <table class="table table-hover">
                        <tr>
                            <th>Name</th>
                            <th>City</th>
                            <th>Blood Group</th>
                            <th>Requested On</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        <?php foreach($viewRequest as $det){ ?>


                            <tr class="success">
                                <td>
                                    <!-- <a href="receiver.php?rec=<?php echo $r_e;?>&b_group=<?php echo $row1['blood_group'];?>&req_approval=no"> -->
                                    <?php echo($det->name); ?>
                                    <!-- </a> -->
                                </td>
                                <td>
                                <?php echo($det->city); ?>
                                </td>
                                <td>
                                <?php echo($det->bg); ?>
                                </td>
                                <td>
                                <?php echo($det->time_stamp); ?>
                                </td>
                                <td>
                                <form action="<?php echo base_url().'update_status.html'?>" method="post"> 
                                <input type="hidden" name="br_accept" value="<?php echo $det->sn;?>">
                                   <button class="btn btn-primary" type="submit">Accept</button> 
                        </form>  
                                </td>
                                <!-- <td><a href="receiver.php?rec=<?php echo $r_e?>&req_approval=approve&sno=<?php echo $rows['sn'];?>"><button type="button" class="btn btn-success" name="req_aproval" value="approve">Approve</button></a></td> -->
                            </tr> 
                            <?php  } ?> 
                              
                    </table>
                     
            </div>
        </div>
 </body>

</html>
