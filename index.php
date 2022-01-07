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
    <title>GAPCLUB</title>
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

#fscreen{
    background-image: url('img/c5.jpg'); 
    background-size: cover;
    height: auto;
    overflow: hidden;
    border-bottom: 20px solid #887000;
}

#fsdiv{
    height: auto;
    background:rgba(0,0,0,0.5);
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
    margin-top: 100px !important;
  }
  #smallsc{
    display: none;
  }
  #fcontact{
    border-right:1px solid #ccc;
  }
}

</style>
  </head>
  <body>
    

    <div id="fscreen"> 
      <div id="fsdiv"> 
          
        <div class="container-fluid" id="navigation" style="background:rgba(100,100,0,0.2);border-bottom: 1px solid white;">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 ">
                <p></p>
                <img src="img/logo1.jpg" alt="Gapclub" style="border-radius:100%; border:2px solid white; height:65px; width:65px;">
                <span style="text-align: center;color: white;font-size: 25px;letter-spacing: 2px;">
                  GAPCLUB
                </span>
                <br>
                <p style="font-size: 10px;color: white;margin-left: 70px;margin-top: -20px !important;font-style: italic;">A spiritual Governmental organisation</p>
              </div>
          </div>
        </div>

        <!-- -->

        <div class="container">
          <br>
          <div class="row">

              <div class="col-md-12 col-lg-12 col-sm-12 text-center text-md-centers margins">
                <div id="screen-t">
                  <div>
                    <h4 style="font-size: 18px; color:yellow">Welcome To</h4>
                    <h1 class="h1-responsive font-bold wow bounceInDown" data-wow-delay="0.1s" style="font-size: 60px; color:white;letter-spacing: 2px;">
                    GAPCLUB
                    </h1>
                    <br>
                    <div class="h5 wow fadeInRight" data-wow-delay="0.3s" style="color: yellow;">
                      The most powerful and biggest <br> family of the universal Father, bringing the union of <br> mortals, immortals and spirits into unison
                    </div>
                  </div>
                  <br><br><br>

                  <div class="row">
                    <div class="col-sm wow fadeInLeft">
                      <a class="btn btn-outline-white btn-outline-light btn-lg" href="melsch.php" style="background:#990000;font-size: 25px;">MELCHIZEDEK <br> SCHOOL </i>
                      </a>
                      <br><br>
                    </div>
                    <div class="col-sm wow fadeInUp" data-wow-delay="0.5s">
                      <a class="btn btn-outline-white btn-outline-light btn-lg" data-toggle="modal" data-target="#contactmodal" style="background:#990000;font-size: 25px;">GAPCLUB <br> FAMILY</i>
                      </a>
                      <br><br>
                    </div>
                    <div class="col-sm wow fadeInRight">
                      <a class="btn btn-outline-white btn-outline-light btn-lg" href="pat.php" style="background:#990000;font-size: 25px;">GAPCLUB <br> PARTNERSHIP </i>
                      </a>
                      <br>
                    </div>
                  </div>

                  <br>
                  <br><br>
                </div>
              </div>

          </div>
        </div>

      </div>
    </div>
    <!-- -------->
    <footer class="center-on-small-only"> 
      <div class="footer-copyright" style="background: #887000;text-align: center;padding: 20px;color: white;">
        <div class="container-fluid">
          &copy; Copyright <script> var d = new Date();var n = d. getFullYear(); document.write(n);</script> <a href="gapclub.com.ng/gapadmin/login.php" target="_blank" style="color: white;text-decoration: none;">Gapclub</a>, All Right Reserved
        </div>
      </div>
    </footer>




    <!-- -------------------------------------------->

    <!-- modal contact -->
    <div class="modal fade" id="contactmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">

      <!-- Change class .modal-sm to change the size of the modal -->
      <div class="modal-dialog" role="document">

        <div class="modal-content">
          <div class="modal-body">
           <p></p>

               <a href="gapf.php" class="btn btn-lg btn-block btn-danger">
                 Explore Gapclub
               </a>

               <br><br>

               <div class="accordion" id="accordionExample275">
                <div class="card z-depth-0 bordered">
                  <div class="card-header" id="headingOne2">
                    <h5 class="mb-0">
                      <button class="btn btn-danger btn-block btn-lg" type="button" data-toggle="collapse" data-target="#collapseOne2"
                        aria-expanded="true" aria-controls="collapseOne2">
                        Upload Your Certificate
                      </button>
                    </h5>
                  </div>
                  <div id="collapseOne2" class="collapse" aria-labelledby="headingOne2"
                    data-parent="#accordionExample275">
                    <div class="card-body" style="padding: 5px;border:1px solid black;">

                      <form method="post" enctype="multipart/form-data">
                        <h6 style="font-weight: bold; color: black;">UPLOAD CERTIFICATE HERE</h6>
                        <br>
                        <i>Upload Certificate</i>
                        <div class="md-form">
                          <input type="file" name="photo" accept=".pdf,.doc" id="form1" class="form-control" required>
                        </div>
                        <i>Upload Profile Picture</i>
                        <div class="md-form">
                          <input type="file" name="photo2" accept=".jpg,.jpeg,.png" id="form1" class="form-control" required>
                        </div>
                        <div class="md-form">
                          <input type="text" name="cname" id="form1" class="form-control" required>
                          <label for="form1">Certificate Name</label>
                        </div>
                        <div class="md-form">
                          <input type="number" name="phone" id="form1" class="form-control" required>
                          <label for="form1">Phone Number</label>
                        </div>
                        <p></p>
                        <button class="btn btn-block btn-dark" name="sub" type="submit" style="background:">
                          Upload Certificate
                        </button>

                      </form>

                      <?php

                        if(isset($_POST['sub'])){

                          $cname = $_POST['cname'];
                          $phone = $_POST['phone'];


                              $photo = $_FILES['photo']['tmp_name'];
                              $photo_name = $_FILES['photo']['name'];
                              $photo_size = $_FILES['photo']['size'];
                              $location = "certificate/". $photo_name;

                              $photo2 = $_FILES['photo2']['tmp_name'];
                              $photo_name2 = $_FILES['photo2']['name'];
                              $photo_size2 = $_FILES['photo2']['size'];
                              $location2 = "member-pix/". $photo_name2;

                            $chk = $pdo->prepare("SELECT * FROM cert WHERE cphoto = '$location' AND cname = '$cname'");
                            $chk->execute();

                              if($chk->rowCount() > 0){
                                echo'<script>swal("Wrong", "This Certificate has been uploaded before !", "error");</script>';
                              }else{
                                        
                              if($photo_size == 0 || $photo_size >2699877 || $photo_size2 == 0 || $photo_size2 >2699877){

                                echo'<script>swal("Wrong", "CERTIFICATE & PHOTO SIZE SHOULD BE LESS THAN 2 MB. PLEASE CERTIFICATE OR PHOTO SIZE BEFORE UPLOADING !!", "error");</script>';

                              }else{
                                move_uploaded_file($photo, $location);
                                move_uploaded_file($photo2, $location2);

                                $ins = $pdo->prepare("INSERT INTO cert (cphoto,photo,phone,cname,time) VALUES ('$location','$location2','$phone','$cname',CURRENT_TIMESTAMP)");
                                $ins->execute();

                                if($ins){
                                  echo'<script>swal("Successful", "Certificate Uploaded !!", "success");</script>';
                                  echo'<meta http-equiv="refresh" content="2; url=index.php">';
                                }
                            }
                          }

                        }

                      ?>
                      
                    </div>
                  </div>
                </div>
              </div>

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



