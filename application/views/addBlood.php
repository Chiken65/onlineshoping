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

    <div class="container">
             
            <h3>Add Blood Sample</h3>
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6" style="text-align:center;">
                
                <div style="width:100%; text-align:center; font-size:20px; height:440px; background-color:#f8f8f8; border-radius: 5px 50px; padding-top:20px;">
                <form action="<?php echo base_url().'addBlood.html'?>" method="post">   
                
                        <table style="width:90%; text-align:center;" class="table">
                            <tr>
                                <td>A +ve</td>
                                <td><input type="number" class="form-control" name="a_plus" value="<?php echo $a_plus ?>"></td>
                            </tr>
                            <tr>
                                <td>B +ve</td>
                                <td><input type="number" class="form-control" name="b_plus" value="<?php echo $b_plus ?>"></td>
                            </tr>
                            <tr>
                                <td>O +ve</td>
                                <td><input type="number" class="form-control" name="o_plus" value="<?php echo $o_plus ?>"></td>
                            </tr>
                            <tr>
                                <td>A -ve</td>
                                <td><input type="number" class="form-control" name="a_neg" value="<?php echo $a_neg ?>"></td>
                            </tr>
                            <tr>
                                <td>B -ve</td>
                                <td><input type="number" class="form-control" name="b_neg" value="<?php echo $b_neg ?>"></td>
                            </tr>
                            <tr>
                                <td>O -ve</td>
                                <td><input type="number" class="form-control" name="o_neg" value="<?php echo $o_neg ?>"></td>
                            </tr>
                            <tr>
                                <td>AB +ve</td>
                                <td><input type="number" class="form-control" name="ab_plus" value="<?php echo $ab_plus ?>"></td>
                            </tr>
                            <tr>
                                <td>AB -ve</td>
                                <td><input type="number" class="form-control" name="ab_neg" value="<?php echo $ab_neg ?>"></td>
                            </tr>
                        </table>
                        <input type="hidden" name="email" value="<?php echo $email;?>">

                         <button type="submit" class="btn btn-primary"   >Add Blood</button>
                    </form>

                </div>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
        
</body>

</html>
