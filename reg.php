<?php
ob_start();
session_start();
include'connect/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>GAPCLUB | Register</title>
    <meta name="keywords" content="Gapclub, Melchizedek School, "/>
    <meta name="description" content="GAPCLUB means; a government that is in totality superhuman. it is a spiritual governmental organization. It is also an istitution or ministry to learn about God (Government).This is why we are defined as a UGO – Universe Governmental Organization. A Religio-Political organization by Melchizedek."/>
    <!-- MDB icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- MDB -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">

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
              <div class="col-lg-1 col-md-1 col-6">
                <p></p>
                <img src="img/logo1.jpg" alt="Gapclub" style="border-radius:100%; border:2px solid white; height:65px; width:65px;">
              </div>
              <div class="col-lg-11 col-md-11 col-6">
                <br>
                <a href="melsch.php" id="link">Back</a>
                  <a href="" id="link" style="visibility: hidden">gap</a>

                <!-- -->
                <a href="#" data-toggle="modal" data-target="#contactmodal" id="barlink" style="float:right;color: white; text-decoration: none;">
                  <i class="fas fa-bars fa-2x"></i>
                </a>
              </div>
          </div>
        </div>
       </div>
   </div>

        <!-- -->

        <div class="container-fluid">
          <br><br>
          <center>
          	<img src="img/logo1.jpg" alt="Gapclub" style="border-radius:100%; border:2px solid white; height:85px; width:85px;">
          	<br>
          	<p></p>
          	<h4 style="color: black; letter-spacing: 2px;font-weight: bold;">REGISTER HERE</h4>
          </center>

         <br><br>

         <div class="row">
	         <div class="col-sm-12 col-md-2 col-lg-3"></div>
	         <div class="col-sm-12 col-md-8 col-lg-6">

		         <form method="post" enctype="multipart/form-data" style="padding: 20px; border:1px solid #ccc;">
		         	<div class="md-form">
		               <input type="text" name="sname" id="form1" class="form-control" required>
		             	<label for="form1">Surname</label>
		            </div>

		            <div class="md-form">
		               <input type="text" name="oname" id="form1" class="form-control" required>
		             	<label for="form1">Other Names</label>
		            </div>

		            <div class="md-form">
		               <input type="number" name="phone" id="form1" class="form-control" required>
		             	<label for="form1">Phone</label>
		            </div>

		            <div class="md-form">
		               <input type="email" name="email" id="form1" class="form-control" required>
		             	<label for="form1">Email Address</label>
		            </div>

		            <i>Gender</i>
		            <p></p>
		            <div class="form-check form-check-inline">
					  <input type="radio" name="gender" value="Male" class="form-check-input" id="male" name="groupOfMaterialRadios">
					  <label class="form-check-label" for="male">Male</label>
					</div>

					<!-- Group of material radios - option 2 -->
					<div class="form-check form-check-inline">
					  <input type="radio" name="gender" value="Female" class="form-check-input" id="female" name="groupOfMaterialRadios">
					  <label class="form-check-label" for="female">Female</label>
					</div>
					<br><br>

					     <div class="md-form">
		               <input type="text" name="state" id="form1" class="form-control" required>
		             	<label for="form1">State</label>
		            </div>

		            <div class="md-form">
	                  <textarea id="form7" name="add" class="md-textarea form-control" rows="3" required></textarea>
	                  <label for="form7">Resident Address</label>
	                </div>

	                <p></p>

	                <button class="btn btn-lg btn-block" name="sub" type="submit" style="background: #887000;">
	                  <i class="fas fa-paper-plane mr-2"></i> 
	                  Submit
	                </button>

		         </form>

             <?php

              if(isset($_POST['sub'])){

                $sn = $_POST['sname'];
                $on = $_POST['oname'];
                $ph = $_POST['phone'];
                $em = $_POST['email'];
                $sex = $_POST['gender'];
                $st = $_POST['state'];
                $add = $_POST['add'];
 
                $chk = $pdo->prepare("SELECT * FROM register WHERE email = '$em' OR phone = '$ph'");
                $chk->execute();

                if($chk->rowCount() > 0){
                  echo'<script>swal("Wrong", "Email or Phone number already exist !!", "error");</script>';
                }else{

                      $ins = $pdo->prepare("INSERT INTO register (sname,oname,phone,email,gender,state,raddress,time) VALUES ('$sn','$on','$ph','$em','$sex','$st','$add',CURRENT_TIMESTAMP)");
                      $ins->execute();

                      if($ins){
                        header('location:successreg.php?name='.$sn);
                      }
                    
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



    <!-- -------------------------------------------->

    <!-- modal contact -->
    <div class="modal fade" id="contactmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">

      <!-- Change class .modal-sm to change the size of the modal -->
      <div class="modal-dialog modal-sm" role="document">

        <div class="modal-content">
          <div class="modal-body">
            <p></p>
            <center>
              <p style="border-bottom: 1px solid #ccc;">
                <a href="melsch.php" id="slink">BACK</a>
              </p>
              </p>
            </center>
            <p></p>
          </div>
        </div>
      </div>

    </div>
    <!-- Central Modal Small Contact -->
  

    <!-- MDB -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>new WOW().init();</script>

  </body>
</html>
