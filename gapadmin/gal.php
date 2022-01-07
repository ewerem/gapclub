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
        <i class="fas fa-images fa-2x"></i> - Gallery
      </h5>
      <hr>
      <br>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
          aria-selected="true">Upload Photos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
          aria-selected="false">Upload Youtube Videos</a>
      </li>
    </ul>

    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <br>

              <div class="accordion" id="accordionExample275">
                <div class="card z-depth-0 bordered">
                  <div class="card-header" id="headingOne2">
                    <h5 class="mb-0">
                      <button class="btn btn-block btn-lg" type="button" style="background: #887000;" data-toggle="collapse" data-target="#collapseOne2"
                        aria-expanded="true" aria-controls="collapseOne2">
                        Upload Photo
                      </button>
                    </h5>
                  </div>
                  <div id="collapseOne2" class="collapse" aria-labelledby="headingOne2"
                    data-parent="#accordionExample275">
                    <div class="card-body" style="padding: 5px;border:1px solid black;">

                      <form method="post" enctype="multipart/form-data">

                        <i>Upload Photo</i>
                        <div class="md-form">
                          <input type="file" name="photo" id="form1" class="form-control" required>
                        </div>
                        <div class="md-form">
                          <select name="album" class="form-control">
                            <option value="default">Choose Album</option>
                            <?php
                              $sel = $pdo->prepare("SELECT * FROM pix_album");
                              $sel->execute();
                              if($sel->rowCount() > 0){
                                while($f = $sel->fetch()){
                                  echo'<option value='.$f['name'].'>'.$f['name'].'</option>';
                                }
                              }else{
                                echo'<option value="default">No Album</option>';
                              }
                            ?>
                          </select>
                        </div>
                        <p></p>
                        <button class="btn btn-lg btn-block" name="sub" type="submit" style="background: #887000;">
                          Upload
                        </button>

                      </form>

                      <?php

                        if(isset($_POST['sub'])){

                                $photo = $_FILES['photo']['tmp_name'];
                                $photo_name = $_FILES['photo']['name'];
                                $photo_size = $_FILES['photo']['size'];
                                $location = "gallery/". $photo_name;

                                $cat = $_POST['album'];
                                          
                                if($photo_size == 0 || $photo_size >2699877 || $cat == 'default'){

                                  echo'<script>swal("Wrong", "PHOTO SIZE SHOULD BE LESS THAN 2 MB. PLEASE CHECK PHOTO SIZE BEFORE UPLOADING ALSO CHECK IF ALBUM IS EMPTY!!", "error");</script>';

                                }else{
                                  move_uploaded_file($photo, $location);

                                  $ins = $pdo->prepare("INSERT INTO gallery (photo,album) VALUES ('$location','$cat')");
                                  $ins->execute();

                                  if($ins){
                                    echo'<script>swal("Successful", "Photo Uploaded !", "success");</script>';
                                    echo'<meta http-equiv="refresh" content="2; url=gal.php">';
                                }
                            }

                          }

                      ?>

                      
                    </div>
                  </div>
                </div>
              </div>

              <!------------->

              <div class="accordion" id="accordionExample275">
                <div class="card z-depth-0 bordered">
                  <div class="card-header" id="headingOne2">
                    <h5 class="mb-0">
                      <button class="btn btn-warning btn-block btn-lg" type="button" data-toggle="collapse" data-target="#collapseOne3"
                        aria-expanded="true" aria-controls="collapseOne2">
                        Create Album
                      </button>
                    </h5>
                  </div>
                  <div id="collapseOne3" class="collapse" aria-labelledby="headingOne2"
                    data-parent="#accordionExample275">
                    <div class="card-body" style="padding: 5px;border:1px solid black;">

                       <form method="post">

                        <i>Create An Album</i>
                        <div class="md-form">
                          <input type="text" name="album" placeholder="Enter name of album" id="form1" class="form-control" required>
                        </div>
                        <p></p>
                        <button class="btn btn-lg btn-block" name="suba" type="submit" style="background: #887000;">
                          Submit
                        </button>

                      </form>

                      <?php

                        if(isset($_POST['suba'])){

                                $album = $_POST['album'];

                                $chk = $pdo->prepare("SELECT * FROM pix_album WHERE name = '$album'");
                                $chk->execute();
                                          
                                if($chk->rowCount() > 0){

                                  echo'<script>swal("Wrong", "ALBUM EXIST ALREADY, CANNOT CREATE ALBUM !!", "error");</script>';

                                }else{

                                  $ins = $pdo->prepare("INSERT INTO pix_album (name) VALUES ('$album')");
                                  $ins->execute();

                                  if($ins){
                                    echo'<script>swal("Successful", "ALBUM CREATED !", "success");</script>';
                                    echo'<meta http-equiv="refresh" content="2; url=gal.php">';
                                }
                            }

                          }

                      ?>
                      
                    </div>
                  </div>
                </div>
              </div>

      </div>

        <div class="tab-pane fadeIn" id="profile" role="tabpanel" aria-labelledby="home-tab">
          <br>
        <form method="post" enctype="multipart/form-data">

          <i>Upload Youtube Video</i>
          <div class="md-form">
            <input type="text" name="link" id="form1" class="form-control" required>
          </div>
          <p></p>
          <button class="btn btn-lg btn-block" name="subv" type="submit" style="background: #880000;">
            Upload Youtube Video
          </button>

        </form>

        <?php

              if(isset($_POST['subv'])){

                $link  = $_POST['link'];

                        $ins = $pdo->prepare("INSERT INTO videos (link,time) VALUES ('$link',CURRENT_TIMESTAMP)");
                        $ins->execute();

                        if($ins){
                          echo'<script>swal("Successful", "Youtube Video Uploaded !", "success");</script>';
                          echo'<meta http-equiv="refresh" content="2; url=gal.php">';
                      }

                }

            ?>
        </div>

      <!------>

      </div>

      <hr>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="photo-tab" data-toggle="tab" href="#photo" role="tab" aria-controls="photo"
          aria-selected="true">Photos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video"
          aria-selected="false">Youtube Videos</a>
      </li>
    </ul>

    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="photo" role="tabpanel" aria-labelledby="photo-tab">
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
              <a href="galpix.php?name=<?=$f['name']?>">
                <i class="fas fa-image fa-6x"></i>
              </a>
              <h5><?=strtoupper($f['name'])?></h5>
            </center>
            </td>
          </tr>
          <tr>
            <td>
              <center>
                <a data-toggle="modal" data-target="#deletemodal<?=$f['id']?>" class="btn btn-sm btn-danger" style="padding: 5px;color: white;">
                <i class="fas fa-times fa-2x"></i>
                </a>
              </center>
            </td>
          </tr>
        </table>
      </div>

    <!-- modal contact -->
    <div class="modal fade" id="deletemodal<?=$f['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">

      <!-- Change class .modal-sm to change the size of the modal -->
      <div class="modal-dialog modal-sm" role="document">

        <div class="modal-content">
          <div class="modal-body">
            <p></p>
            <center>
              DO YOU WANT TO DELETE THIS ALBUM, IT WILL DELETE ALL PHOTO INSIDE THIS ALBUM
              <br>
              <a class="btn btn-success" data-dismiss="modal" aria-label="Close">NO</a>
              <a href="gal.php?delete&id=<?=$f['id']?>&album=<?=$f['name']?>" class="btn btn-danger">YES</a>
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
  </div>

    <div class="tab-pane fadeIn" id="video" role="tabpanel" aria-labelledby="video-tab">
      <br>
      <div class="row">
      <?php
        $get = $pdo->prepare("SELECT * FROM videos ORDER BY id DESC");
        $get->execute();
        if($get->rowCount() > 0){
          while($f = $get->fetch()){
      ?>
      <div class="col-sm-12 col-md-6 col-lg-6">
        <table id="table" class="table table-striped table-bordered">
          <tr>
            <td>
               <center>
                    <?=$f['link']?>
                </center>
            </td>
          </tr>
          <tr>
            <td>
              <center>
                <a data-toggle="modal" data-target="#deletemodalvid<?=$f['id']?>" class="btn btn-sm btn-danger" style="padding: 5px;color: white;">
                <i class="fas fa-times fa-2x"></i>
                </a>
              </center>
            </td>
          </tr>
        </table>
      </div>

    <!-- modal contact -->
    <div class="modal fade" id="deletemodalvid<?=$f['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">

      <!-- Change class .modal-sm to change the size of the modal -->
      <div class="modal-dialog modal-sm" role="document">

        <div class="modal-content">
          <div class="modal-body">
            <p></p>
            <center>
              DO YOU WANT TO DELETE THIS VIDEO
              <br>
              <a class="btn btn-success" data-dismiss="modal" aria-label="Close">NO</a>
              <a href="gal.php?deletevid&id=<?=$f['id']?>" class="btn btn-danger">YES</a>
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
          echo'<h4 style="color:red"> No Video !! </h4>';
        }
      ?>
    </div>

  </div>


  </div>

  </div>

    <!-- activate section -->
    <?php
      if(isset($_GET['delete'])){
        $id = $_GET['id'];
        $album = $_GET['album'];

        $get = $pdo->prepare("SELECT * FROM gallery WHERE album = '$album'");
        $get->execute();
        if($get->rowCount() > 0){
          while($f = $get->fetch()){
            $photo =  $f['photo'];
          }
        }
        unlink($photo);
        $ins = $pdo->prepare("DELETE FROM gallery WHERE album = '$album'");
        $ins->execute();

        $del = $pdo->prepare("DELETE FROM pix_album WHERE id = '$id'");
        $del->execute();

        if($del){
           echo'<script>swal("Deleted", "Album deleted Successfully !", "success");</script>';
           echo'<meta http-equiv="refresh" content="2; url=gal.php">';
        }


      }
      //------------------

      if(isset($_GET['deletevid'])){
        $id = $_GET['id'];
        $ins = $pdo->prepare("DELETE FROM videos WHERE id = '$id'");
        $ins->execute();
        if($ins){
           echo'<script>swal("Deleted", "Youtube Video Removed Successfully !", "success");</script>';
           echo'<meta http-equiv="refresh" content="2; url=gal.php">';
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
