<html lang="en">

<head>
    <title>Registration | Online Shoping</title>
    <link rel="icon" href="Images/title-icon.png" type="image/png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Online Shoping">
    <meta name="author" content="Ravi Shankar Dubey">
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <script src="bootstrap-3.3.7/jquery-3.1.1.js"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/myStyle.css">
</head>

<body>
     <div class="container" style="text-align: center;">
        <div class="col-sm-12">
            <h2> Register</h2>
            <?php echo $this->session->flashdata('msg1'); ?> 

 
            <form action="<?php echo base_url().'registerUserInfo.html'?>" method="post">   
            <div class="panel-group">
                <div class="panel panel-primary">
                    <div class="panel-heading">Login Information</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email ID*</label>
                                        <input type="email" class="form-control" name='email' id="email" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pass">Password*</label>
                                        <input type="password" class="form-control" name="pass" id="pass" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><br>

                    <!-- Other details -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">Other Information</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name *</label>
                                        <input type="text" class="form-control" name="name" id="name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone_no">Mobile Number *</label>
                                        <input type="number" class="form-control" name="phone_no" id="phone_no" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="gender">Gender *</label>
                                        <br>
                                        <input type="radio" name="gender" value="Male" required> Male 
                                        <input type="radio" name="gender" value="Female" required> FeMale 
                                        <input type="radio" name="gender" value="Other" required> Other 
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="dob">Date of birth *</label>
                                        <input type="date" class="form-control" name="dob" id="dob" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="add">Address *</label>
                                        <textarea class="form-control" rows="5" name="add" id="add" required></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <input type="hidden" name="type" id="type" value="user">
                <div class="col-sm-12" style="text-align:center;">
                    <input type="submit" class="btn btn-primary" value="Register">
                </div>
            </form>
        </div> 
    </div>
 </body>

</html>
