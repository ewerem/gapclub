<?php
ob_start();
session_start();
include'../connect/connect.php';
if(!isset($_SESSION['admin'])){
  header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>GAPCLUB | Dashboard</title>
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
              <div class="col-lg-1 col-md-1 col-6">
                <p></p>
                <img src="../img/logo1.jpg" alt="Gapclub" style="border-radius:100%; border:2px solid white; height:65px; width:65px;">
              </div>
              <div class="col-lg-11 col-md-11 col-6">
                <br>
                <a href="dashboard.php" id="link">Registered Members</a>
                  <a href="" id="link" style="visibility: hidden">g</a>
                <a href="amember.php" id="link">Active Members</a>
                  <a href="" id="link" style="visibility: hidden">g</a>
                <a href="contact.php" id="link">Contacts</a>
                  <a href="" id="link" style="visibility: hidden">g</a>
                <a href="cert.php" id="link">Certificate</a>
                  <a href="" id="link" style="visibility: hidden">g</a>
                <a href="event.php" id="link">Next Event</a>
                  <a href="" id="link" style="visibility: hidden">g</a>
                <a href="gal.php" id="link">Gallery</a>
                  <a href="" id="link" style="visibility: hidden">g</a>
                <a href="setting.php" id="link">Setting</a>
                  <a href="" id="link" style="visibility: hidden">g</a>
                <a href="logout.php" id="link">Logout</a>

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

    <div class="container">
      <br>
      <h5>
        <i class="fas fa-scroll fa-2x"></i> - Events
      </h5>
      <hr>
      <br>

      <form method="post" enctype="multipart/form-data">

        <i>Upload Photo</i>
        <div class="md-form">
          <input type="file" name="photo" id="form1" class="form-control" required>
        </div>
        <div class="md-form">
          <input type="text" name="word" id="form1" class="form-control" required>
          <label for="form1">Description</label>
        </div>
        <p></p>
        <button class="btn btn-lg btn-block" name="sub" type="submit" style="background: #887000;">
          Submit Event
        </button>

      </form>

      <?php

              if(isset($_POST['sub'])){

                $word = $_POST['word'];

                    $photo = $_FILES['photo']['tmp_name'];
                    $photo_name = $_FILES['photo']['name'];
                    $photo_size = $_FILES['photo']['size'];
                    $location = "event-pix/". $photo_name;

                  $chk = $pdo->prepare("SELECT * FROM event");
                  $chk->execute();

                    if($chk->rowCount() > 0){
                      echo'<script>swal("Wrong", "Please delete existing event first !", "error");</script>';
                    }else{
                              
                    if($photo_size == 0 || $photo_size >2699877){

                      echo'<script>swal("Wrong", "PHOTO SIZE SHOULD BE LESS THAN 2 MB. PLEASE CHECK PHOTO SIZE BEFORE UPLOADING !!", "success");</script>';

                    }else{
                      move_uploaded_file($photo, $location);

                      $ins = $pdo->prepare("INSERT INTO event (photo,word,time) VALUES ('$location','$word',CURRENT_TIMESTAMP)");
                      $ins->execute();

                      if($ins){
                        echo'<script>swal("Successful", "Event Uploaded !", "success");</script>';
                        echo'<meta http-equiv="refresh" content="2; url=event.php">';
                      }
                  }
                }

              }

            ?>

      <hr>
      <?php
        $get = $pdo->prepare("SELECT * FROM event ORDER BY id DESC");
        $get->execute();
        if($get->rowCount() > 0){
          while($f = $get->fetch()){
      ?>

      <table id="table" class="table table-striped table-bordered">
        <tr>
          <td>
            <img src="<?=$f['photo']?>" style="width: 100%;">
          </td>
        </tr>
        <tr>
          <td>
            <p>
              <?=$f['word']?>
            </p>
            <a data-toggle="modal" data-target="#deletemodal<?=$f['id']?>" class="btn btn-sm btn-danger" style="padding: 5px;color: white;float: right;margin-top: -50px;">
              <i class="fas fa-times fa-2x"></i>
            </a>
          </td>
        </tr>
      </table>

      <!-- modal contact -->
    <div class="modal fade" id="deletemodal<?=$f['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">

      <!-- Change class .modal-sm to change the size of the modal -->
      <div class="modal-dialog modal-sm" role="document">

        <div class="modal-content">
          <div class="modal-body">
            <p></p>
            <center>
              DO YOU WANT TO DELETE THIS EVENT
              <br>
              <a class="btn btn-success" data-dismiss="modal" aria-label="Close">NO</a>
              <a href="event.php?delete&id=<?=$f['id']?>" class="btn btn-danger">YES</a>
            </center>
            <p></p>
          </div>
        </div>
      </div>

    </div>
    <!-- Central Modal Small Contact -->

      <?php
          }
        }else{
          echo'<h4 style="color:red"> No Data !! </h4>';
        }
      ?>
    </div>

    <!-- activate section -->
    <?php
      if(isset($_GET['delete'])){
        $id = $_GET['id'];

        $get = $pdo->prepare("SELECT * FROM event WHERE id = '$id'");
        $get->execute();
        if($get->rowCount() > 0){
          while($f = $get->fetch()){
            $photo =  $f['photo'];
          }
        }
        unlink($photo);
        $ins = $pdo->prepare("DELETE FROM event WHERE id = '$id'");
        $ins->execute();
        if($ins){
           echo'<script>swal("Deleted", "Event deleted Successfully !", "success");</script>';
           echo'<meta http-equiv="refresh" content="2; url=event.php">';
        }


      }
    ?>

    <!-- -------->
    <br><br>
    <p></p>

  
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
                <a href="dashboard.php" id="slink">REGISTERED MEMBERS</a>
              </p>
              <p style="border-bottom: 1px solid #ccc;">
                <a href="cert.php" id="slink">UPLOADED CERTIFICATE</a>
              </p>
              <p style="border-bottom: 1px solid #ccc;">
                <a href="amember.php" id="slink">ACTIVE MEMBERS</a>
              </p>
              <p style="border-bottom: 1px solid #ccc;">
                <a href="contact.php" id="slink">CONTACTS</a>
              </p>
              <p style="border-bottom: 1px solid #ccc;">
                <a href="event.php" id="slink">NEXT EVENT</a>
              </p>
              <p style="border-bottom: 1px solid #ccc;">
                <a href="gal.php" id="slink">GALLERY</a>
              </p>
               <p style="border-bottom: 1px solid #ccc;">
                <a href="setting.php" id="slink">SETTINGS</a>
              </p>
              <p style="border-bottom: 1px solid #ccc;">
                <a href="logout.php" id="slink">LOGOUT</a>
              </p>
            </center>
            <p></p>
          </div>
        </div>
      </div>

    </div>
    <!-- Central Modal Small Contact -->

    <!-- MDB -->
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/mdb.min.js"></script>

  </body>
</html>
