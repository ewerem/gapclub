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
              <div class="col-lg-2 col-md-2 col-6">
                <p></p>
                <img src="img/logo1.jpg" alt="Gapclub" style="border-radius:100%; border:2px solid white; height:65px; width:65px;">
              </div>
              <div class="col-lg-10 col-md-10 col-6">
                <br>
                <a href="reg.php" id="link">Back</a>

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
          <br><br>

         <div class="row">
	         <div class="col-sm-12 col-md-2 col-lg-3"></div>
	         <div class="col-sm-12 col-md-8 col-lg-6">
		         <center>
		         	<img src="img/success.gif" style="border-radius: 100%;width: 150px; height: 150px;">
		         	<br><br>
		         	<h4><?=strtoupper($_GET['name'])?>, Your Information Has Been Recieved. Contact the registrar </h4>
		         	<br>
		         	<h2><i class="fas fa-phone"></i> 09028771042</h2>
              <br>
              <a href="reg.php" class="btn btn-success">Go back to registration page</a>
		         </center>
	     	</div>
	     	<div class="col-sm-12 col-md-2 col-lg-3"></div>
	     </div>

      </div>
    <!-- -------->
    <br><br>


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
                <a href="reg.php" id="slink">BACK</a>
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
