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
<script type="text/javascript" language="javascript" >
    
        if (localStorage.getItem('type')  != 'receiver' && localStorage.getItem('type')  != 'hospital') {
        document.cookie = "user_type = a " 
    } else {
        document.cookie = "user_type = " + localStorage.getItem('type') 
    }
    document.cookie = "user_email = " + localStorage.getItem('user_email') 
    // window.reload();
    


    </script>
    <script>
            <?php
        $user_type= $_COOKIE['user_type'];
        $user_email= $_COOKIE['user_email'];
        ?> 
</script>



            <body onload="myFunction()">
            

<br> 
<br> 
<br> 
<br> 
<br> 

<div class="container-fluid">
 

           <div <?php if ($user_type != 'hospital') { ?>
                <p style="color:red;"><b>Note :</b> You can only request blood of your own blood group! In emergency use another blood group </p>
                <?php  } ?> 
            </div> 
            <h2>  Available Blood </h2>
                <table class="table table-hover">
                    <tr>
                        <th>Hospital Name</th>
                        <th>City</th>
                        <th>A +ve</th>
                        <th>B +ve</th>
                        <th>O +ve</th>
                        <th>A -ve</th>
                        <th>B -ve</th>
                        <th>O -ve</th>
                        <th>AB +ve</th>
                        <th>AB -ve</th>
                        <th></th>
                     </tr>
 

                    <?php foreach($availableBlood as $det){ ?>
                        <tr>
                            <td>
                                <?php print_r($det->hname); ?>
                            </td>
                            <td>
                                <?php print_r($det->city); ?>
                            </td>
                            <td>
                                <?php print_r($det->a_plus); ?>
                            </td>
                            <td>
                                <?php print_r($det->b_plus); ?>
                            </td>
                            <td>
                                <?php print_r($det->o_plus); ?>
                            </td>
                            <td>
                                <?php print_r($det->a_neg); ?>
                            </td>
                            <td>
                                <?php print_r($det->b_neg); ?>
                            </td>
                            <td>
                                <?php print_r($det->o_neg); ?>
                            </td>
                            <td>
                                <?php print_r($det->ab_plus); ?>
                            </td>
                            <td>
                                <?php print_r($det->ab_neg);  ?> 
                            </td>
                            <td <?php 
                                if ($user_type === 'receiver') { ?>
                                    > <a href="<?php echo base_url().'hospital.html?hos='.$det->email.'&user='.$user_email;?>" 
                                     id="newpost" class="btn btn-success" name="request" >Request </a>
                                <?php  } ?> 
                            
                                
                             </td>
                             <td <?php 
                                if ($user_type === 'a') { ?>
                                    ><a href="<?php echo base_url().'login.html';?>" id="newpost"  class="btn btn-success" name="requests" >Requests </a>
                                <?php  } ?> 
                            

                             </td>

                            
                        </tr>
                    <?php  } ?>                         
                </table>


                
        </div>
 </body>

</html>



<script>
var retrievedData = localStorage.getItem('type');
console.log('type',retrievedData)
function showhide(email,user)
 {
    console.log("clicked ",email,user);
     localStorage.setItem('hosp_email',email);
      if (retrievedData=="receiver") {
        console.log("clicked receiver");
        // $this->load->view('index',$retrievedData);


          
      } else if (retrievedData=="hospital") {
        console.log(" clicked hospital");

      }
      else{
        console.log(" Please Login");
          
      }
 }
 </script>
 