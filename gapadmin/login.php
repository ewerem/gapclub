<?php
ob_start();
session_start();
include'../connect/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>GAPCLUB | Admin</title>
    <meta name="keywords" content="Gapclub, Melchizedek School, "/>
    <meta name="description" content="GAPCLUB means; a government that is in totality superhuman. it is a spiritual governmental organization. It is also an istitution or ministry to learn about God (Government).This is why we are defined as a UGO – Universe Governmental Organization. A Religio-Political organization by Melchizedek."/>
    <!-- MDB icon -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- MDB -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/mdb.min.css" rel="stylesheet">

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit.min.js"></script>
    <!--sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
body{
  font-family: lucida sans !important; 
}

html, body{
    margin:0px;
    height: 100%; 
}

#link{
  color:white;
  padding:5px;
}
#link:hover{
  background: white;
  color:black;
  text-decoration: none;
}

#link2{
  color:white;
  padding:10px;
  border:2px solid white;
  margin-top: -5px;

}
#link2:hover{
  background: white;
  color:black !important;
  text-decoration: none;
}

#slink{
  color: black;
  text-decoration: none;
  padding: 10px 20px;
}
#slink:hover{
  background: black !important;
  color: white;
}
@media screen and (max-width: 767px) {
     /*phone*/
  #link{ 
    display: none;
  }
  #bigsc{
    display: none;
  }
  #link2{
    display: none;
  }
  #fcontact{
    border-right:0px;
  }
}

@media screen and (min-width: 768px) {
    /*desktop*/
  #barlink{
    display: none;
  }  
  #screen-t{
    margin-top: 160px !important;
  }
  #smallsc{
    display: none;
  }
}

</style>
  </head>
  <body>
        
    <div id="fscreen"> 
      <div id="fsdiv"> 
          
        <div class="container-fluid" id="navigation" style="background:#887000;border-bottom: 1px solid white;">
          <div class="row">
              <div class="col-lg-12 col-md-12">
                <p></p>
                <img src="../img/logo1.jpg" alt="Gapclub" style="border-radius:100%; border:2px solid white; height:65px; width:65px;">
                <span style="color: white;">ADMIN LOGIN </span>
              </div>
          </div>
        </div>
       </div>
   </div>

        <!-- -->

        <div class="container-fluid">
          <br><br>
          <center>
          	<img src="../img/logo1.jpg" alt="Gapclub" style="border-radius:100%; border:2px solid white; height:80px; width:80px;">
          	<br>
          	<p></p>
          	<h4 style="color: black; font-weight: bold;">ADMIN LOGIN</h4>
          </center>

         <br><br>

         <div class="row">
	         <div class="col-sm-12 col-md-2 col-lg-3"></div>
	         <div class="col-sm-12 col-md-8 col-lg-6">

		         <form method="post" enctype="multipart/form-data" style="padding: 20px; border:1px solid #ccc;">
		         	<div class="md-form">
		               <input type="text" name="user" id="form1" class="form-control" required>
		             	<label for="form1">Username</label>
		            </div>
		            <div class="md-form">
		               <input type="password" name="pass" id="form1" class="form-control" required>
		             	<label for="form1">Password</label>
		            </div>

	                <p></p>

	                <button class="btn btn-lg btn-block" name="sub" type="submit" style="background: #887000;">
	                  Login <i class="fas fa-sign-in-alt"></i> 
	                </button>

		         </form>

             <?php

              if(isset($_POST['sub'])){

                $us = $_POST['user'];
                $pa = $_POST['pass'];
 
                $chk = $pdo->prepare("SELECT * FROM admin WHERE user = '$us' AND pass = '$pa'");
                $chk->execute();

                if($chk->rowCount() > 0){
                  $_SESSION['admin'] = $us;
                  header('location:dashboard.php'); 
                }else{
                  echo'<script>swal("Wrong", "Wrong Authentication !", "error");</script>';
               }

              }

            ?>

	     	</div>
	     	<div class="col-sm-12 col-md-2 col-lg-3"></div>
	     </div>

      </div>
    <!-- -------->
    <br><br>
    <p></p>

   <!-- -------->
    <footer class="center-on-small-only"> 
      <div class="footer-copyright" style="background: #887000;text-align: center;padding: 20px;color: white;">
        <div class="container-fluid">
          &copy; Copyright <script> var d = new Date();var n = d. getFullYear(); document.write(n);</script> Gapclub, All Right Reserved
        </div>
      </div>
    </footer>
  

    <!-- MDB -->
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <script>new WOW().init();</script>

  </body>
</html>
