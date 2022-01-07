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
        <i class="fas fa-file-pdf fa-2x"></i>
        (<?php
          $get = $pdo->prepare("SELECT * FROM cert");
          $get->execute();
          echo $get->rowCount();
        ?>) - Uploaded Certificates
      </h5>
      <hr>

      <?php
        $get = $pdo->prepare("SELECT * FROM cert ORDER BY id DESC");
        $get->execute();
        if($get->rowCount() > 0){
          $i=1;
          while($f = $get->fetch()){
      ?>

      
      <table id="table" class="table table-striped table-bordered">
        <tr>
          <td style="width: 35px;color: black;">
            <?=$i++?>
          </td>
          <td style="width: 40px;color: black;">
            <a href="../<?=$f['cphoto']?>">
              <i class="far fa-file-pdf fa-3x"></i>
            </a>
          </td>
          <td style="color: black;">
            <a href="../<?=$f['photo']?>">
                <img src="../<?=$f['photo']?>" style="width: 50px; height: 50px;border-radius: 5px;">
            </a>
            <p></p>
            <i class="fas fa-phone"></i> <?php echo $f['phone']?> 
            <br>
            <i class="fas fa-user"></i> <?php echo $f['cname']?>

            <a data-toggle="modal" data-target="#deletemodal<?=$f['id']?>" title="Delete" class="btn btn-sm btn-danger" style="float: right;margin-right:10px;padding: 5px;color: white;margin-top: -70px;">
              <i class="fas fa-times fa-2x"></i>
            </a>
            <a data-toggle="modal" data-target="#activemodal<?=$f['id']?>" title="Create Profile" class="btn btn-sm btn-success" style="float: right;margin-right:10px;padding: 5px;color: white;margin-top: -20px;">
              <i class="fas fa-user-check fa-2x"></i>
            </a>

          </td>
        </tr>
      </table>

      <!-- modal active -->
      <div class="modal fade" id="activemodal<?=$f['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">

        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-sm" role="document">

          <div class="modal-content">
            <div class="modal-body">
              <p></p>
              <center>
                CREATE PROFILE FOR <?=strtoupper($f['cname'])?>?
                <br>
                <a class="btn btn-danger" data-dismiss="modal" aria-label="Close">NO</a>
                <a href="cert.php?activate&id=<?=$f['id']?>" class="btn btn-success">YES</a>
              </center>
              <p></p>
            </div>
          </div>
        </div>

      </div>
      <!-- Central Modal active -->

      <!-- modal delete -->
      <div class="modal fade" id="deletemodal<?=$f['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">

        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-sm" role="document">

          <div class="modal-content">
            <div class="modal-body">
              <p></p>
              <center>
                DO YOU WANT TO DELETE THIS CERTIFICATE FILE?
                <br>
                <a class="btn btn-danger" data-dismiss="modal" aria-label="Close">NO</a>
                <a href="cert.php?deactivate&id=<?=$f['id']?>" class="btn btn-success">YES</a>
              </center>
              <p></p>
            </div>
          </div>
        </div>

      </div>
      <!-- Central Modal Small Contact -->

      <?php
          }
          $i++;
        }else{
          echo'<h4 style="color:red"> No Data !! </h4>';
        }
      ?>
    </div>

    <!-- delete section -->
    <?php
       if(isset($_GET['deactivate'])){
        $id = $_GET['id'];

        $get = $pdo->prepare("SELECT * FROM cert WHERE id = '$id'");
        $get->execute();
        if($get->rowCount() > 0){
          while($f = $get->fetch()){
            $cphoto =  '../'.$f['cphoto'];
            $photo =  '../'.$f['photo'];
          }
        }
        unlink($cphoto);
        unlink($photo);
        $ins = $pdo->prepare("DELETE FROM cert WHERE id = '$id'");
        $ins->execute();
        if($ins){
           echo'<script>swal("Deleted", "Certificate deleted Successfully !", "success");</script>';
           echo'<meta http-equiv="refresh" content="2; url=cert.php">';
        }


      }
      //------------------------activate
      if(isset($_GET['activate'])){
        $id = $_GET['id'];

        $get = $pdo->prepare("SELECT * FROM cert WHERE id = '$id'");
        $get->execute();
        if($get->rowCount() > 0){
          while($f = $get->fetch()){
            $cphoto =  $f['cphoto'];
            $photo =  $f['photo'];
            $phone =  $f['phone'];
            $cname =  $f['cname'];
          }
        }
        //echo $cphoto;
        $ins = $pdo->prepare("INSERT INTO member (cphoto,photo,phone,cname,time) VALUES ('$cphoto','$photo','$phone','$cname',CURRENT_TIMESTAMP)");
        $ins->execute();

        $del = $pdo->prepare("DELETE FROM cert WHERE id = '$id'");
        $del->execute();

        if($ins){
           echo'<script>swal("Successful", "Profile Created Successfully !", "success");</script>';
           echo'<meta http-equiv="refresh" content="2; url=cert.php">';
        }


      }
    ?>

    <!-- -------->
    <br><br>
    <p></p>

   <!-- -------->
  
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
