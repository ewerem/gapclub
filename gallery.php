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
    <title>GAPCLUB | Gallery</title>
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
    <!-- Sweet alert -->
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
    margin-top: 160px !important;
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
              <div class="col-lg-1 col-md-1 col-6">
                <p></p>
                <img src="img/logo1.jpg" alt="Gapclub" style="border-radius:100%; border:2px solid white; height:65px; width:65px;">
              </div>
              <div class="col-lg-11 col-md-11 col-6">
                <br>
                <a href="index.php" id="link"><i class="fas fa-arrow-left"></i> Back</a>
                  <a href="" id="link" style="visibility: hidden">g</a>
                <a href="#aboutus" uk-scroll id="link">About Us</a>
                  <a href="" id="link" style="visibility: hidden">g</a>
                <a href="#contacts" uk-scroll id="link">Contact</a>
                  <a href="" id="link" style="visibility: hidden">g</a>
                <a data-toggle="modal" data-target="#eventmodal" id="link">Next Event</a>
                  <a href="" id="link" style="visibility: hidden">g</a>
                <a href="gallery.php" id="link">Gallery</a>
                  <a href="" id="link" style="visibility: hidden">g</a>
                <a href="smember.php" id="link">Search Members</a>

                <!-- --> 
                <a href="#" data-toggle="modal" data-target="#contactmodal" id="barlink" style="float:right;color: white; text-decoration: none;">
                  <i class="fas fa-bars fa-2x"></i>
                </a>
                <!-- -->

              </div>
          </div>
        </div>

        <!-- -->

        <div class="container">
          <br>
          <div class="row">

              <div class="col-md-4 col-lg-4 col-sm-12 text-center text-md-left margins">
                <div id="screen-t">
                  <div>
                    
                    <h1 class="h1-responsive font-bold wow bounceInDown" data-wow-delay="0.1s" style="font-size: 45px; color:white;letter-spacing: 2px;">GAPCLUB </h1>
                    <h3 class="h1-responsive font-bold wow bounceInUp" data-wow-delay="0.1s" style="font-size: 35px; color:white;letter-spacing: 2px;">Gallery </h3>
                    <br>
                  </div>
                  <br>
                </div>
              </div>
              <div class="col-md-8 col-lg-8 col-sm-12">
                <br>
                <img src="img/gal2.jpg" class="wow bounceInUp" data-wow-delay="0.6s" style="width: 100%;border:1px solid white;">
              </div>

          </div>
        </div>

      </div>
    </div>
    <!-- -------->
    <br>

    <div class="container">

      <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
          aria-selected="true">Photos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
          aria-selected="false">Videos</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <br>
        <div class="row">
        <?php
        $get = $pdo->prepare("SELECT * FROM pix_album ORDER BY id DESC");
        $get->execute();
        if($get->rowCount() > 0){
          while($f = $get->fetch()){
        ?>
        <div class="col-sm-12 col-md-4 col-lg-3">
          <table id="table" class="table table-striped table-bordered">
            <tr>
              <td>
                <center>
                  <a href="galpix2.php?name=<?=$f['name']?>">
                    <i class="fas fa-image fa-6x"></i>
                  </a>
                  <h5><?=strtoupper($f['name'])?></h5>
                </center>
              </td>
            </tr>
          </table>
        </div>

        <?php
          }
          }else{
            echo'<h4 style="color:red"> No Data !! </h4>';
          }
        ?>
        </div>

      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        
        <div class="row">

          <?php
          $get = $pdo->prepare("SELECT * FROM videos ORDER BY id DESC");
            $get->execute();
            if($get->rowCount() > 0){
              while($v = $get->fetch()){
          ?>

          <div class="col-sm-12 col-md-6 col-lg-6">
            <br>
            <center>
                 <?=$v['link']?>
            </center>
          </div>

          <?php
            }
            }else{
              echo'<h4 style="color:red"> No Video !! </h4>';
            }
          ?>
          
        </div>

      </div>
    </div>
      
    </div>

    <br><br>
    <p></p>
    <footer class="center-on-small-only pt-4 mt-0" style="background: #fad390;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4">

            <h4 style="padding: 6px; border-left:4px solid black;font-weight: bold;letter-spacing: 1px;">GAPCLUB</h4>
            <p style="text-align: justify;">
              We train youth on self governance and enhance their revelation of the Universe Governance.
            </p>
            
          </div>

          <div class="col-sm-12 col-md-4 col-lg-4">

            <p style="padding: 5px;border-bottom: 1px solid black;">USEFUL LINKS</p>
            <p>
              <a href="gapf.php?#aboutus" style="color: black;">
                <i class="fas fa-arrow-alt-circle-right"></i> About us
              </a>
            </p>
            <p>
              <a href="gapf.php?#mission" style="color: black;">
                <i class="fas fa-arrow-alt-circle-right"></i> Mission
              </a>
            </p>

            <p>
              <a href="gapf.php?#wwd" style="color: black;">
                <i class="fas fa-arrow-alt-circle-right"></i> What we do
              </a>
            </p>
            
          </div>

          <div class="col-sm-12 col-md-4 col-lg-4">

            <p style="padding: 5px;border-bottom: 1px solid black;">WHAT WE DO</p>
            <p>
              <i class="far fa-arrow-alt-circle-right"></i> We Teach
               <br>
               <i class="far fa-arrow-alt-circle-right"></i> We Serve
               <br>
               <i class="far fa-arrow-alt-circle-right"></i> We Partner
            </p>
            
          </div>
        </div>
      </div>
      <br>
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
                <a href="index.php" id="slink">BACK TO HOMEPAGE</a>
              </p>
               <p style="border-bottom: 1px solid #ccc;">
                <a href="gallery.php" id="slink">GALLERY</a>
              </p>
              <p style="border-bottom: 1px solid #ccc;">
                <a data-toggle="modal" data-target="#eventmodal" id="slink">NEXT EVENT</a>
              </p>
              <p style="border-bottom: 1px solid #ccc;">
                <a href="gapf.php?#contacts" id="slink">CONTACTS</a>
              </p>
              <p style="border-bottom: 1px solid #ccc;">
                <a href="gapf.php?#aboutus" id="slink">ABOUT US</a>
              </p>
              <p style="border-bottom: 1px solid #ccc;">
                <a href="smember.php" id="slink">SEARCH MEMBER</a>
              </p>
            </center>
            <p></p>
          </div>
        </div>
      </div>

    </div>
    <!-- Central Modal Small Contact -->

    <!---------------------------------------------------------------->

    <!-- modal event -->
    <div class="modal fade" id="eventmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">

      <!-- Change class .modal-sm to change the size of the modal -->
      <div class="modal-dialog" role="document">

        <div class="modal-content">
          <div class="modal-body">
            <?php
              $get = $pdo->prepare("SELECT * FROM event ORDER BY id DESC");
              $get->execute();
              if($get->rowCount() > 0){
                while($f = $get->fetch()){
            ?>

            <table id="table" class="table table-striped table-bordered">
              <tr>
                <td>
                  <img src="gapadmin/<?=$f['photo']?>" style="width: 100%;">
                </td>
              </tr>
              <tr>
                <td>
                  <p>
                    <?=$f['word']?>
                  </p>
                </td>
              </tr>
            </table>

            <?php
                }
              }else{
                echo'<h4 style="color:red;text-align:center;"> No Event Now !! </h4>';
              }
            ?>
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
