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
    <title>GAPCLUB | Family</title>
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
    height: 100vh;
    overflow: hidden;
    border-bottom: 20px solid #887000;
}

#fsdiv{
    height: 100vh;
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
              <div class="col-lg-1 col-md-1 col-3">
                <p></p>
                <img src="img/logo1.jpg" alt="Gapclub" style="border-radius:100%; border:2px solid white; height:65px; width:65px;">
              </div>
              <div class="col-lg-11 col-md-11 col-9">
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

              <div class="col-md-6 col-lg-6 col-sm-12 text-center text-md-left margins">
                <div id="screen-t">
                  <div>
                    <h4 style="font-size: 18px; color:yellow">Welcome To</h4>
                    <h1 class="h1-responsive font-bold wow bounceInDown" data-wow-delay="0.1s" style="font-size: 60px; color:white;letter-spacing: 2px;">GAPCLUB</h1>
                    <br>
                    <div class="h5 wow fadeInRight" data-wow-delay="0.3s" style="color: yellow;">
                      The most powerful and biggest <br> family of the universal Father, bringing the union of <br> mortals, immortals and spirits into unison
                    </div>
                  </div><br>
                  <br><br>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-sm-12">
                <img src="img/img2.jpg" class="wow bounceInUp" data-wow-delay="0.6s" style="width: 100%;">
              </div>

          </div>
        </div>

      </div>
    </div>
    <!-- -------->
    <br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-sm-12" style="padding: 20px;" id="mission">
            <center class="wow fadeInDown" data-wow-delay="0.4s">
              <i class="fas fa-book fa-3x" style="border-radius: 100%; background:#fff; color:#660000;padding: 30px;border:3px solid #660000;margin-bottom:0px;"></i>
            </center>
            <div class="wow fadeInUp" style="height: 300px; overflow: hidden; border:3px solid #660000;margin-top: -55px;padding: 10px;">
              <br><br>
              <center>
                <p style="color: black;font-weight: bold;">- MISSION -</p>
              </center>
              <p style="height: 180px; overflow: auto; color: black;text-align: center;">
                <i style="font-weight: bold;"> Members of UGO | GAPCLUB</i>
                <br>
                 We are empowered by the Holy Spirit for self governance and and to foster the revelation of the Universe Government. <br><br>

                <i>The UGO missionary’s will defend her citizens from imminent global threat that is soon to imprison humanity.</i>

              </p>
            </div>
        </div>
        <div class="col-md-6 col-sm-12" style="padding: 20px;" id="wwd">
          <center class="wow fadeInDown" data-wow-delay="0.4s">
              <i class="fas fa-bullhorn fa-3x" style="border-radius: 100%; background:#995000; color:#fff;padding: 30px;border:3px solid #995000;margin-bottom:0px;"></i>
            </center>
            <div class="wow fadeInUp" style="height: 300px; overflow: hidden; border:3px solid #995000;margin-top: -55px;padding: 10px;">
              <br><br>
              <center>
                <p style="color: black;font-weight: bold;">- WHAT WE DO -</p>
              </center>
              <p style="height: 180px; overflow: auto; color: black;text-align: center;">
                <i class="fas fa-arrow-circle-right"></i> We Teach <br>
                <i class="fas fa-arrow-circle-right"></i> We Serve <br>
                <i class="fas fa-arrow-circle-right"></i> We Partner <br><br>
               
                <i style="text-align: justify;">We are equipped with the knowledge to share with mankind on PARENTAL GOVERNANCE, COMMUNITY GOVERNANCE, STATE GOVERNANCE, NATIONAL GOVERNANCE and UNIVERSAL GOVERNANCE.</i>
              </p>

            </div>
        </div>
      </div>
    </div>

    <div style="height: 30px; background: #887000;"></div>
    <p></p><br>
    <!-- big screen -->

    <div class="container">
      
      <center class="wow fadeInUp">
        <a href="img/founder.jpeg" style="text-decoration: none;color: black">
          <img src="img/founder.jpeg" style="width:220px;height: 220px;border:4px solid white; box-shadow: 0 10px 10px;border-radius: 10px;">
        </a>
        <br><br>
        <h5 style="font-weight: bold; font-size: 25px;color: #880000;">  ABDUL OLAOLUWA <br> AROBOTO</h5>
        <p style="font-style: italic;font-weight: bold;">
          Director of Universe Govermental Organization. <br>
          Founder of Melchizedek Institution (GAPCLUB)
        </p>
        <hr>
      </center>
      <br>

      <p style="text-align: justify;font-size: 17px;" class="wow fadeInUp">
        We bring <em style="font-weight: bold;">GOODNEWS MESSAGE</em> to humanity from the Most High. I’m appointed as universe director on human affairs for spiritualisation. Sovereignty belongs to the Most High (God), the Creator of Heavens and the earth. I implore people to join our on going training to hear the GoodNews message. <br><br>

        After being trained and graduated at our Melchizedek school, you will automatically transit into GapClub family to serve in the brotherhood of men and Fatherhood of God. To aid transition from GapClub to a Universe Governmental Organisation for self governance, certified teens, youths and adults in our Melchizedek School are well trained and are implored to resolve personal issues without the use of psychologist, lawyers, police or any uniform oficers representing the world government 
        with high authority (local, national and international). <br><br>

        The fact that you need a lawyer or psychologist shows you are not quite ready to be self-independent (Self Governing).
      </p>

    </div>
    
    <!-- end of big screen -->
    <p></p><br>
    <div style="height: 5px; background: #887000;"></div>
    <p></p><br>

    <div class="container">
      <center>
        <h5 style="font-weight: bold;">The Big 4: The State of Transformation</h5>
        <p></p>
        <img src="img/book.PNG" style="height: 280px;;border:4px solid white; box-shadow: 0 10px 10px;border-radius: 10px;">
        <p></p>
        <a href="https://www.amazon.com/Big-4-State-Transformation-ebook/dp/B08793X8LK" target="_blank" class="btn" style="background: #880000;color: white;">
          GET THE BOOK <i class="fas fa-arrow-circle-right"></i>
        </a>
      </center>
    </div>

    <br><p></p>
    <div class="container-fluid" style="background: #887000;" id="aboutus">
      <div class="row">
        <div class="col-lg-2 col-md-1 col-sm-12"></div>
        <div class="col-lg-8 col-md-10 col-sm-12 wow fadeInUp" style="padding: 20px;">
          
          <center>
            <h1 style="color: white;font-family: candara;">ABOUT US</h1>
          </center>
          <div style="height: 475px;overflow: auto;">
          <p class="text-center" style="color: yellow; letter-spacing: 2px;">
            <i>With the inspiration of the Spirit of Truth, coupled with our
            high knowledge vent from the scripture,
            has allowed us to establish GAP CLUB.</i>
          </p>
          <p style="text-align: justify; color: white;font-weight: bold;">
            The meaning of GAP CLUB states thus; <br>
            GAP – GOD ALL POWERFUL <br>
            GOD - means Government <br>
            ALL – means everything in totality <br>
            POWERFUL – means superhuman <br>
            CLUB – means a party, a group, a class or an association of people (organization)
          </p>
          <p style="text-align: justify; color: white ;">
            GAPCLUB means; a government that is in totality superhuman. it is a spiritual governmental organization. It is also an istitution or ministry to learn about God (Government).
            This is why we are defined as a UGO – Universe Governmental Organization. A Religio-Political organization by Melchizedek.
          </p>

          <p style="text-align: justify; color: white ;">
            Gap Club is a mass media group focus on youths globally, set to build a Godly (Governance) minded people incorporated in the knowledge; filming, entertainment, teaching and lifestyle.With our high intelligence, creativity and knowledge vent from the records of man, we bring about more effective cooperation among the people, schools, organizations and business profession in the discharge of their special responsibilities in social activities; to create a platform of changing and redirecting the public to the important of Godly lifestyle through mass media; to make collective action possible on problems of common professional interest; and, in general, to maintain and advance the ideals and standards of mass media as means to Godliness.
          </p>

          <p style="text-align: justify; color: white ;">
            The Gap Club shall promote the interests of no man but the mandate of UGO through mass media by encouraging a spirit of fellowship among the masses, schools, business professionals and media personnel. Activities viewed as central to the organization's function include film documentary, entertainment tips, entrepreneurship skills, collaborative relationship among the people, spiritual forums, institutions and media professionals and organize competitions among people and social events. The membership of the organization will be based on anybody that is spiritually filled, who has interest in media and can read and decode the Holy Scripture. The Club continues to set high standards and strive to meet new goals for the advancement of UGO and Gap Club.
          </p>
          </div>

        </div>
        <div class="col-lg-2 col-md-1 col-sm-12"></div>
      </div>
    </div>
    <br>
    <p></p>

    <div class="container-fluid" id="contacts">
      <div class="row">
        <div class="col-lg-2 col-md-1 col-sm-12"></div>
        <div class="col-lg-8 col-md-10 col-sm-12" style="padding: 20px;">
          
          <center>
            <h1 class="wow fadeInDown" style="color: black;font-family: mv boli;font-weight: bold;"><i class="fas fa-contact"></i>Our Contacts</h1>
          </center>
          <br>
          <div class="row" style="height: auto;overflow: auto;box-shadow: 0 0 5px black; border-radius: 20px;padding: 15px">

            <div class="col-md-6 col-lg-5 col-sm-12 wow slideInLeft" id="fcontact">
              <br>
              <center>
                <i class="fas fa-phone fa-2x" style="color: #887000"></i>
                <br>
                <p></p>
                <p style="font-family: candara; font-size: 22px;letter-spacing: 2px;">
                  
                  +2349028771042
                </p>
              </center>
              <br>
              <center>
                <a href="mailto:gapclub001@gmail.com?subject=Enquring%20From%20Gapclub%20Website" style="color: black;">
                  <i class="fas fa-envelope fa-2x" style="color: #887000"></i>
                </a>
                <br>
                <p></p>
                <p style="font-family: candara; font-size: 22px;letter-spacing: 2px;">
                  <a href="mailto:gapclub001@gmail.com?subject=Enquring%20From%20Gapclub%20Website" style="color: black;">
                    gapclub001@gmail.com
                  </a>
                </p>
              </center>
              <br><br>
              <center>
                <a href="https://m.facebook.com/officialgapclub/?ref=bookmarks" target="_blank">
                  <i class="fab fa-facebook-square fa-4x" style="color: #887000"></i>
                </a>
                &nbsp;&nbsp;&nbsp;
                <a href="https://wa.me/2349028771042" target="_blank">
                  <i class="fab fa-whatsapp-square fa-4x" style="color: #887000"></i>
                </a>
                &nbsp;&nbsp;&nbsp;
                <a href="https://www.instagram.com/officialgapclub/" target="_blank">
                  <i class="fab fa-instagram-square fa-4x" style="color: #887000"></i>
                </a>
                <br>
              </center>

            </div>

            <div class="col-md-6 col-lg-7 col-sm-12 wow slideInRight">
              
              <br>
              <form method="post">
                <div class="md-form">
                  <input type="text" name="name" id="form1" class="form-control" required>
                  <label for="form1">Name</label>
                </div>

                <div class="md-form">
                  <input type="text" name="phone" id="form1" class="form-control" required>
                  <label for="form1">Phone</label>
                </div>

                <div class="md-form">
                  <input type="text" name="email" id="form1" class="form-control" required>
                  <label for="form1">Email</label>
                </div>

                <div class="md-form">
                  <textarea id="form7" name="message" class="md-textarea form-control" rows="3" required></textarea>
                  <label for="form7">Message</label>
                </div>
              
                <p></p>

                <button class="btn ml-0" name="sendmsg" type="submit" style="background: #887000;">
                  <i class="fas fa-paper-plane mr-2"></i> 
                  Send Message
                </button>
            </form>
            <br>

            <?php

              if(isset($_POST['sendmsg'])){

                $fn = $_POST['name'];
                $ph = $_POST['phone'];
                $em = $_POST['email'];
                $msg = $_POST['message'];

                contact($pdo, $fn, $ph, $em, $msg);

              }

            ?>

            </div>
          
          </div>

        </div>
        <div class="col-lg-2 col-md-1 col-sm-12"></div>
      </div>
    </div>

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
              <a href="#aboutus" style="color: black;" uk-scroll>
                <i class="fas fa-arrow-alt-circle-right"></i> About us
              </a>
            </p>
            <p>
              <a href="#mission" style="color: black;" uk-scroll>
                <i class="fas fa-arrow-alt-circle-right"></i> Mission
              </a>
            </p>

            <p>
              <a href="#wwd" style="color: black;" uk-scroll>
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
                <a href="index.php?#aboutus" id="slink">ABOUT US</a>
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
