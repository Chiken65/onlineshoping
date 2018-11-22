<html lang="en">

<head>
    <title>Available Blood | Blood Bank System</title>
    <link rel="icon" href="Images/title-icon.png" type="image/png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Blood Bank System">
    <meta name="author" content="Ravi Shankar Dubey">
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <script src="bootstrap-3.3.7/jquery-3.1.1.js"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/myStyle.css">

</head>

<body>


        <img src="<?php echo base_url().'assets/Images/hospital-home.jpg'?>" style="width:100%;">
        <br>
        <div class="container-fluid">

            <table class="table table-hover">
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                </tr>
                <?php foreach($blood_available as $det){ ?>
                <tr class="danger">
                    <td><?=$det->full_name;?> <?=$det->last_name;?></td>
                    <td><?=$det->gender;?></td>
                    <td><?=$det->age;?></td>
                </tr>
                <?php } ?>
            </table>


        </div>
</body>

</html>
