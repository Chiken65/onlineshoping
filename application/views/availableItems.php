<head>
    </head>
        <!-- <script type="text/javascript">
            function myFunction() {
                if (!window.location.hash) {
                    window.location = window.location + '#loaded';
                    window.location.reload();
                }
            }
        </script>
        
        <script type="text/javascript" language="javascript" >
    
            if (localStorage.getItem('type')  != 'receiver' && localStorage.getItem('type')  != 'hospital') {
                document.cookie = "user_type = a " 
            } else {
                document.cookie = "user_type = " + localStorage.getItem('type') 
            }
            document.cookie = "user_email = " + localStorage.getItem('user_email') 
        </script>
        <script>
            <?php
            $user_type = $_COOKIE['user_type'];
            $user_email = $_COOKIE['user_email'];
            ?> 
        </script> -->

        <body onload="myFunction()">

        <br><br><br><br><br> 

            <!-- <div class="container-fluid">
                <h2>  Available Items </h2>

                <div class="row">
                    <?php foreach ($availableItems as $det) { ?>
                        <div class="col-md-4">
                            <?php foreach (explode(",", $det->images) as $val) { ?>
                            <img src="<?php echo base_url() . 'assets/products/' . $val ?>">
                            <?php 
                        } ?>
                            <br/>
                            <b>Item Name :</b><?php echo $det->item_name; ?><br/>
                            <b>Description :</b> <?php echo $det->description; ?><br/>
                            <b>Available Items :</b> <?php echo $det->item_available; ?><br/>
                            <b>Expected days to deliver :</b> <?php echo $det->no_of_days_to_make; ?><br/>
                            <b>Amount :</b> <?php echo $det->cost; ?><br/>
                        </div>
                    <?php 
                } ?>
                </div>            
            </div> -->

            <div class="event-area section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>OUR Items</h3><br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $count = 1;
            foreach ($availableItems as $ne) { ?>
            <div class="col-md-4 col-sm-6">
                <div class="single-event-item">
                    <div class="single-event-image">
                        <a>
                            <img src="<?php echo base_url() . 'assets/products/' . $ne->single_image ?>" alt="" style="width: 370px; height: 244px;">
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3>
                            <a href="#"> <?php echo $ne->item_name; ?></a>
                        </h3>
                        <div class="single-item-comment-view">
                                <i class="zmdi zmdi-pin"></i><?= $ne->description; ?></span>
                        </div>
                        <?= substr($ne->description, 0, 150) . '...'; ?>
                        <a class="button-default" href="<?php echo base_url() . 'news_events_detials/' . $ne->aid ?>">View More</a>
                    </div>
                </div>
            </div>
            <?php if ($count == 3) {
                $count = 1; ?>
            <?php 
        } else {
            $count++;
        }
    } ?>
        </div>
    </div>
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
 