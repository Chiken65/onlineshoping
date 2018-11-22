<head>
<style>
    .modal-header-login,
    .close {
        background-color: #5cb85c;
        color: white !important;
        text-align: center;
        font-size: 30px;
    }
    
    .modal-header-register,
    .close {
        background-color: #7e7e7d;
        color: white !important;
        text-align: center;
        font-size: 30px;
    }
    
    .modal-footer {
        background-color: #f9f9f9;
    }
    
    .modal-content {
        min-height: 138px;
    }
    
    .modal-content a {
        text-decoration: none;
        color: inherit;
    }

</style>

</head>


<nav class="navbar navbar-default navbar-fixed-top">
<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
              <h1>Blood Bank System</h1>
        <!-- <a class="navbar-brand" href="#"><img src="Images/IS-bbs-new.png" class="img-rounded" width=200px;></a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
         
    <ul class="nav navbar-nav navbar-right">
    <li><a href="<?php echo base_url().'homeReceiver.html';?>">Home</a></li>

    <li><a href="<?php echo base_url().'availableBlood.html';?>">Available Blood</a></li>
     <li><a href="<?php echo base_url().'login.html';?>">logout</a></li>

    <!-- <li><a href="#" id="regModal">Register</a></li> -->
</ul>
    </div>
</div>
</nav>


 

<script>
$(document).ready(function() {
    $("#regModal").click(function() {
        $("#myModalReg").modal();
    });
});

</script>

 

<script>
$(document).ready(function() {

    $("#logIn").click(function() {
        var p = $("#email").val();
        var q = $("#pass").val();
        $.ajax({
            type: "GET",
            data: "email=" + p + "&pass=" + q,
            dataType: "html",
            url: "validate.php",
            success: function(result) {


                if (result == "correct-receiver") {
                    $("#err").html("<font color='green'><span class='glyphicon glyphicon-ok'></span> Validated! Logging In</font>");
                    window.location = "homeReceiver.php";
                } else if (result == "correct-hospital") {
                    $("#err").html("<font color='green'><span class='glyphicon glyphicon-ok'></span> Validated! Logging In</font>");
                    window.location = "homeHospital.php";
                } else if (result == "invalid")
                    $("#err").html("<font color='red'><span class='glyphicon glyphicon-ok'></span> Invalid ID-Pass.</font>");
                else if (result == "not")
                    $("#err").html("<font color='red'><span class='glyphicon glyphicon-ok'></span> Not Registred Yet!</font>");

            }
        });
    });
});

</script>
<script>
$(document).ready(function() {
    $("#loginModal").click(function() {
        $("#myModalLogin").modal();
    });
});

</script>
