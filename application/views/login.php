<html lang="en">

<head>
    <title>Hospital Registration | Blood Bank System</title>
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
     <div class="container-fluid">
 <div class="row-fluid" >
 <div class="col-md-offset-4 col-md-4" ></div>
       
 <div class="container">
 <div class="row main">

   <div class="main-login main-center">
   <form action="<?php echo base_url().'login_check.html'?>" method="post">   
   <div class="form-group">
   <h4><span class="glyphicon glyphicon-log-in"></span> Login</h4>

         <label for="username" class="cols-sm-2 control-label">Username</label>
         <div class="cols-sm-10">
           <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
             <input type="email" class="form-control inputEmail" name="email" placeholder="Email" data-error="That email address is invalid" required="" value="">
             <?php echo form_error('email','<span class="help-block">','</span>'); ?>            </div>
         </div>
       </div>

       <div class="form-group">
         <label for="password" class="cols-sm-2 control-label">Password</label>
         <div class="cols-sm-10">
           <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-lock " aria-hidden="true"></i></span>
             <input type="password" class="form-control inputPassword" name="password" placeholder="Password" required="">
             </div>
             <?php echo form_error('password','<span class="help-block">','</span>'); ?>
               <?php echo $this->session->flashdata('msg'); ?>           
               
         </div>
       </div>

       <div class="form-group ">
       <input type="submit" name="loginSubmit" class="btn btn-lg btn-primary btn-block" value="Submit"/>
       
       </div>
       
     </form>
   </div>
 </div>
</div> 

 </body>

</html>
<style>

body, html{
  height: 100%;
background-repeat: no-repeat;
background-color: #d3d3d3;
font-family: 'Oxygen', sans-serif;
}

.main{
margin-top: 70px;
}

h1.title { 
font-size: 50px;
font-family: 'Passion One', cursive; 
font-weight: 400; 
}

hr{
width: 10%;
color: #fff;
}

.form-group{
margin-bottom: 15px;
}

label{
margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
 font-size: 11px;
 padding-top: 3px;
}

.main-login{
background-color: #fff;
 /* shadows and rounded borders */
 -moz-border-radius: 2px;
 -webkit-border-radius: 2px;
 border-radius: 2px;
 -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
 -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
 box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
margin-top: 30px;
margin: 0 auto;
max-width: 330px;
 padding: 40px 40px;

}

.login-button{
margin-top: 5px;
}

.login-register{
font-size: 11px;
text-align: center;
}
</style>
