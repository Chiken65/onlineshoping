<html lang="en">

<head>
    <title>Receiver Registration | Online Shoping</title>
    <link rel="icon" href="Images/title-icon.png" type="image/png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Online Shoping">
    <meta name="author" content="Ravi Shankar Dubey">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap-3.3.7/css/bootstrap.min.css' ?>">
    <script src="<?php echo base_url() . 'assets/bootstrap-3.3.7/jquery-3.1.1.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/bootstrap-3.3.7/js/bootstrap.min.js' ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/myStyle.css' ?>">
    <script>
        $(document).ready(function() {
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();

            if (month < 10)
                month = '0' + month.toString();
            if (day < 10)
                day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;
            $('#dob').attr('max', maxDate);
        });

    </script>
</head>

<body>
        <div class="container">
        <div class="col-sm-9">
            <h2>Register as a Blood Receiver</h2>
            <form action="<?php echo base_url() . 'receiver_data.html' ?>" method="post">   
                         <div class="panel-group">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Login Information</div>
                        <div class="panel-body">


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="fname">Full Name*</label>
                                        <input type="text" class="form-control" name="fname" id="fname" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email ID*</label>
                                        <input type="email" class="form-control" name='email' id="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pass">Password*</label>
                                        <input type="password" class="form-control" name="pass" id="pass" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">

                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><br>

                    <div class="panel panel-primary">
                        <div class="panel-heading">Receiver Information</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="dob">Date Of Birth*</label>
                                        <input type="date" class="form-control" name="dob" id="dob" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="dob">Gender*</label>
                                        <div class="radio">
                                            <label><input type="radio" name="gender" value="Male" required>Male</label> &nbsp;&nbsp;&nbsp;
                                            <label><input type="radio" name="gender" value="Female">Female</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Your Blood Group*</label>
                                        <select class="form-control" name="blood_group" id="blood_group">
                                    <option> --- Select --- </option>
                                    <option value="A+">A+</option>
                                    <option value="B+">B+</option>
                                    <option value="O+">O+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                  </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pass">Weight (Kg.)*</label>
                                        <input type="number" class="form-control" name="weight" id="pass" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><br>


                    <div class="panel panel-primary">
                        <div class="panel-heading">Contact Information</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Residence Phone</label>
                                        <input type="number" class="form-control" name="phone" id="phone" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="mob">Mobile*</label>
                                        <input type="number" class="form-control" name="mob" id="mob" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="city">City*</label>
                                        <input type="text" class="form-control" name="city" id="city" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pin">Pincode (ZIP)*</label>
                                        <input type="number" class="form-control" name="pin" id="pin" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="add">Address*</label>
                                        <textarea class="form-control" rows="5" name="add" id="add"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <?php echo $this->session->flashdata('msg'); ?>
                <input type="hidden" name="type" id="type" value="receiver">
                <div class="col-sm-12" style="text-align:center;"><input type="submit" class="btn btn-primary" value="Register"></div>
            </form>
        </div>





         
    </div>
 </body>

</html>
