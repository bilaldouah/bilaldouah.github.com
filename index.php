<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require 'phpmailer/vendor/phpmailer/phpmailer/src/Exception.php';
  require 'phpmailer/vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require 'phpmailer/vendor/phpmailer/phpmailer/src/SMTP.php';

  $mail = new PHPMailer();
  $mail->IsSMTP();

  $mail->SMTPDebug  = 0;  
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  $mail->Host       = "smtp.gmail.com";
  $mail->Username   = "douah.bilaal@gmail.com";
  $mail->Password   = "iacmydkyejsrfogu";
  $success="";
 
if(isset($_POST["name"]))
{
 
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];
    $subject=$_POST["subject"];
    $mail->IsHTML(true);
    $mail->AddAddress("douah.bilaal@gmail.com");
    $mail->SetFrom("$email", "$name");
    //$mail->AddReplyTo("badr.douah.us@gmail.com", "reply-to-name");
   // $mail->AddCC("cc-recipient-email", "cc-recipient-name");
    $mail->Subject = "$subject";
    $content = "$message.<br>send by $email";
  
    $mail->MsgHTML($content); 
    if(!$mail->Send()) {
      echo "Error while sending Email.";
      var_dump($mail);
    } else {
     // echo "Email sent successfully";
      $success="Email sent successfully Thank you!";
    }
  }

?>
      
<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Douah Bilal </title>
    <link rel="stylesheet" href="index.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,700;1,100&amp;display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HRHQB5VXM9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HRHQB5VXM9');
</script>

</head>

<body>

<div class="nav-bar-pc">
    <nav class="navbar" id="navbar" >
      
        <ul>
            <li><a  onclick="hideMenu()" href="#home">Startseite </a> </li>
            <li><a  onclick="hideMenu()" href="#??ber mich">??ber mich</a> </li>
            <li><a  onclick="hideMenu()" href="#Schulbildung">Schulbildung </a> </li>
            <li><a  onclick="hideMenu()" href="#erfahrung">Erfahrungen</a> </li>
            <li><a  onclick="hideMenu()" href="#Projekte">Projekte</a> </li>
            <li><a  onclick="hideMenu()" href="#interessen">Interessen</a> </li>
            <li><a  onclick="hideMenu()" href="#contact">CONTACT</a> </li>



        </ul>
 
    </nav>
</div>
<div class="nav-bar-mobile">
<div class="fixed-top">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <li><a  onclick="hideMenu()" href="#home">Startseite </a> </li>
      <li><a  onclick="hideMenu()" href="#??ber mich">??ber mich</a> </li>
      <li><a  onclick="hideMenu()" href="#Schulbildung">Schulbildung </a> </li>
      <li><a  onclick="hideMenu()" href="#erfahrung">Erfahrungen</a> </li>
      <li><a  onclick="hideMenu()" href="#Projekte">Projekte</a> </li>
      <li><a  onclick="hideMenu()" href="#interessen">Interessen</a> </li>
      <li><a  onclick="hideMenu()" href="#contact-form">CONTACT</a> </li>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>

</div>


    <section id="home">

        <div class="main">
            <h1 class="headings">ICH BIN <br> BILAL DOUAH</h1>
            <a class="btn" href="#contact-form">
               <p> Kontaktiere mich </p>
            </a>

        </div>

    </section>
    <div class="marged-content">
    <section class="article" id="??ber mich">

        <h2 class="headings"><img src="Image/icons8-person-64 (1).png" width="40px" /> ??BER MICH</h2>
        <div class="articlebody">
            <div class="slider_2">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="Image/Bewerbung.jpg"  >
                  </div>
                  <div class="carousel-item">
                    <img src="Image/colored.jpg"  >
                  </div>
                  <div class="carousel-item">
                    <img src="Image/White.JPG"  >
                  </div>
                </div>
               <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                  <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                  <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </button>
              </div>
            </div>
            <div class="resume">
                <h2> BILAL DOUAH</h2>
                <p> Mein Name ist Bilal Douah, ich bin 23 Jahre alt, stamme aus Marokko. Ich habe im Juni 2016 mein
                    Abitur in der Wissenschaft von Bio- und Geologie abgeschlossen, Da Englisch der Schl??ssel zum IT
                    Bereich ist,
                    habe ich Englisch an der Fakult??t studiert, um meine Sprachkenntnisse zu verbessern.
                </p>
                <p style=" padding-top: 30px;">
                    Ein Jahr sp??ter habe ich im Fachinstitut f??r angewandte Technologie mein Studium angefangen und im
                    Juni 2019 erlangte ich mein Diplom als Spezialisierter Techniker im Fachbereich: Techniken der
                    IT-Netzwerke. Schon als Sch??ler,
                    hatte ich mir als Ziel gesetzt, eine Ausbildung in Deutschland zu absolvieren, denn die deutschen
                    Firmen bieten durch ihre modernen Ausstattungen und effiziente Organisation optimal
                    rahmenbedingungen f??r Auszubildender an,
                    um sich selbst zu entfalten.
                    <br> Deshalb habe ich entschieden, die deutsche sprache zu lernen und im Mai 2021 habe ich die B1
                    Pr??fung erfolgreich bestanden.
                </p>
            </div>

        </div>

    </section>
</div>
<div class="marged-content-col">
 
<div class="article" id="Schulbildung" >
        <h2 class="headings"><img src="Image/school.png" width="56px" /> SCHULBILDUNG </h2>
        <div class="schulbildung">
          
            <div class="box">
                <h2 class="headings">GOETHE-ZERTIFIKAT B1 </h2>
                <p><strong> Wo:</strong> Goethe institut Rabat <br><br>
                    <strong> Abschlussdatum:</strong> Mai 2021<br> <br>
                    Abschluss Goethe-Zertifikat B1
                </p>
            </div>
            <div class="box">

                <h2 class="headings">Spezialisierter Techniker im Fachbereich:<br> Techniken der IT-Netzwerke</h2>
                <p><strong>Wo:</strong> Fachinstitut f??r Angewandte Technologie Lazaret <br><br>
                    <strong> Abschlussdatum: </strong> Juni 2019<br> <br>
                    Diplom als Spezialisierter Techniker im Fachbereich: Techniken der IT-Netzwerke
                </p>
            </div>
            <div class="box">

                <h2 class="secondaryheadings">Englisch-Abteilung</h2>
                <p><strong>Wo: </strong>Fakult??t f??r leteratur Mohamed 1 <br>
                    <br>
                    Englisch Sprache: Grammatik, Shchreiben, Sprechen und Lesen
                </p>
            </div>
            <div class="box">

                <h2 class="secondaryheadings">Gymnasium</h2>
                <p><strong>Wo:</strong> Abd Almoumen <br><br>
                    <strong> Abschlussdatum: </strong> Juni 2016<br> <br>
                    Abitur in Wissenschaft vom Bio- und Geologie
                </p>
            </div>
         
        </div>
    </div>

        <dic id="erfahrung"></dic>
         
        <h2 class="headings" ><img src="Image/icons8-experience-64.png" width="50px" /> ERFAHRUNGEN </h2>
        <div class="marged-content" >
            <div class="card" >
              <img class="card-img-top" src="Image/Untitled-1.jpg"  style="width:100%">
              <div class="card-body">
                <div class="text-box">
                    <h3> Praktikum in der Universit??tsklinikum Mohammed VI, Oujda </h3>
                    <p>ich habe ein ein Monatige Praktikum in der Abteilung Informatique und Edv-System gemacht und
                        ich habe gelernt :<br> -Konfiguration von Hardware<br>
                        -Zusammenschaltung der Netzewerke<br>
                        -Grundlagen des Routing und Switching </p>

                    </div>

              
              </div>

            </div>
        
            <div class="card" >
              <img class="card-img-top" src="Image/about me 2.jpg"  style="width:100%">
              <div class="card-body">
                <div class="text-box">
                    <h3> Praktikum in der Stiftung Orient-Occident , Oujda </h3>
                    <p>ich habe ein Vier Monatige Praktikum in der IT-Abteilung gemacht und ich habe gelernt :<br>
                        -Flosts installieren und konfigurieren<br>
                        -Netzwerkadministrator: Linux (Ubuntu-Suse)-Windows Server 2012<br>
                        -Leitweglenkung und Schaltung in Rechnernetze<br>
                        -Sicherheit im IT-Netzwerk </p>
                    </div>
              
               
              </div>
            </div>
      </div>
    </div>
      <div class="Projekt" id="Projekte"> 
        <h2 class="headings">  <img src="Image/icons8-project-management-50.png" width="50px" /> Meine Projekte  </h2>
        <div class="marged-content" > 
          <div class="first-slider">
          <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
    
       
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Image/pro 1.jpg"  >
              </div>
              <div class="carousel-item">
                <img src="Image/pro2.jpg"  >
              </div>
            
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
              <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
              <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>
        </div>
</div>       
<div class="marged-content" > 
<div class="container-parent">
 
 
    <div class="card" >
   
      <img class="card-img-top img-wrapper inner-img" src="Image/ex1.png" >
      <div class="card-body">
          <div class="project-card-text">
        <h4 class="card-title">EXERCISE 1</h4>
        <p class="card-text">A program that allows you to calculate the VAT of a product</p>
        <a href="https://bilaldouah.github.io/exerice1/"  class="btn btn-danger">EXERCISE 1</a>
    </div>
      </div>
    </div>
    
    <div class="card" >
      <img class="card-img-top img-wrapper inner-img" src="Image/ex2-copie.png">
      <div class="card-body">
        <div class="project-card-text">
        <h4 class="card-title">EXERCISE 2</h4>
        <p class="card-text">A program who can change currency from dirham to dollar and vice versa</p>
        <a   href="https://bilaldouah.github.io/exercice2/"  class="btn btn-danger">EXERCISE 2</a> 
    </div>
      </div>
    </div>
    <div class="card" >
      <img class="card-img-top img-wrapper inner-img" src="Image/Sans titre.png">
      <div class="card-body">
        <div class="project-card-text">
        <h4 class="card-title">EXERCISE 3</h4>
        <p class="card-text">with this project you can define if the verb you entered is first group in French</p>
        <a href="https://bilaldouah.github.io/EXERSISE5/"  class="btn btn-danger">EXERCISE 3</a>
      </div>
    </div>
    </div>
    <div class="card" >
      <img class="card-img-top img-wrapper inner-img" src="Image/ex4-copie.png">
      <div class="card-body">
        <div class="project-card-text">
        <h4 class="card-title">EXERCISE 4</h4>
        <p class="card-text">a table containing notes and within you can calculate the average, max value and extra...</p>
        <a href="https://bilaldouah.github.io/exercice4/" class="btn btn-danger">EXERCISE 4</a>
      </div>
    </div>
    </div>
    
    </div>




 </div>         

                    
</div>  

      
        
<div class="marged-content" >  
            <div id="interessen">
                <h2 class="headings" ><img src="Image/icons8-activity-64.png" width="50px" /> INTERESSEN
                </h2>

                <div class="reisen">

                    <div class="football" >
                        <h4> VIDEOBEARBEITUNG UND REISEN </h4>

                        <iframe src="https://www.youtube.com/embed/RBNvERk4hQo">
                        </iframe>


                    </div>
                    <div class="football">
                        <h4> FU??BALL </h4>

                        <img src="Image/footbal copy 2.jpg" />


                    </div>
  
                </div>
                <div class="reisen">

                    <div class="football" >
                        <h4> VIDEOBEARBEITUNG </h4>
        
                        <iframe src="https://www.youtube.com/embed/K5eyS5Zrs40">
                        </iframe>
     
                </div>  
            </div>
                
         </div>

           


        </div>

      </div>
        <h1 class="headings" ><img src="Image/icons8-contact-58.png" width="40px" /> CONTACT </h1>
   
        <section id="contact">
			<div class="section-content">
				<h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with Me</span></h1>
 <h3 class="text-success"  style="font-size:26px"><?=$success?></h3>
			</div>
			<div class="contact-section">
			<div class="container">
      <form class="contact" action="" method="post">
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Your name</label>
					    	<input type="text" class="form-control" name="name" placeholder=" Enter Full Name" required>
    
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Email Address</label>
					    	<input type="email" class="form-control" name="email" placeholder=" Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
   
					  	</div>	
					  	<div class="form-group">
					    	<label for="telephone">subject</label>
					    	<input type="tel" class="form-control" name="subject" placeholder=" Enter Subject" required>
   
			  			</div>
			  		</div>
			  		<div class="col-md-6">
			  			<div class="form-group">
			  				<label for ="description"> Message</label>
			  			 	<textarea  class="form-control"  rows="9" name="message" placeholder="Enter Your Message"></textarea required>
             
			  			</div>
			  			<div>

			  				<button type="submit" class="btn btn-default submit bg-light"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
			  			</div>
             
      </div>
			  			
					</div>

</div>
				</form>
       
 
  </div>
		</section>
  
    <div class="contact-icons">    
  <div class="row">
    
    <div class="col-md-4 col-sm-6 col-xs-6 d-flex column justify-content-center align-items-center">
    <img src="Image/gmailLogo.png">
   <a style="color:white" href="https://mail.google.com/mail/u/2/#inbox" >douah.bilaal@gmail.com</a>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-6 d-flex column justify-content-center align-items-center">
    <img src="Image/LinkedLogo.png">
   <a style="color:white" href="https://www.linkedin.com/in/bilal-douah-aaa9ab1b6/">MY LINKEDIN</a>
    </div>
    <div class="col-md-4 col-sm-12 col-xs-12 d-flex column justify-content-center align-items-center">
    <img  src="Image/whatsLogo.png" >
   <a style="color:white">+212695963381</a>
    </div>
 
</div>
     
</div>
    <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
     
     <!--
      <h1>LET'S GET IN TOUCH</h1>
    <div class="con-img ">
 
      <div class="sm-icon-holder ">
      
        <div class="sm-icon"><i class=" fa fa-whatsapp "  > </i></div>
        <a>  +212695963381   </a>
        <p>Wenn Sie mich telefonisch erreichen m??chten, <br>k??nnen Sie mich unter der folgenden Nummer anrufen +212695963381</p>
      </div>
 
      <div class="sm-icon-holder">
 
        <div class="sm-icon"><i class=" fa fa-linkedin-square "  ></i></div>
        <a  href="https://www.linkedin.com/in/bilal-douah-aaa9ab1b6/">MY LINKEDIN</a>
        <p>Sie k??nnen mich auch auf Linkedin finden. Dr??cken Sie auf mein Linkedin, um mehr ??ber mich zu sehen</p>
      </div>
      <div class="sm-icon-holder">  
        <div class="sm-icon"><i class=" fa fa-google "  ></i></div>
        <a  href="https://mail.google.com/mail/u/2/#inbox" >douah.bilaal@gmail.com</a>
        <p>Sie k??nnen mir eine E-Mail senden, wann immer Sie m??chten. Ich freue mich sehr, von Ihnen zu h??ren</p>
      </div>
    </div>
      </div>
      

 
   
        <div class=" contactbtn "> 
              <img src="Image/linkedin-logo-hd-png-3.png">
            <a  href="https://www.linkedin.com/in/bilal-douah-aaa9ab1b6/">   MY LINKEDIN    </a>
        </div>

 
        <div class=" contactbtn "> 
            <img  src="Image/Gmail-logo.png"  >
            <a  href="https://mail.google.com/mail/u/2/#inbox" >     douah.bilaal@gmail.com    </a>
      </div>
      <div class=" contactbtn "> 
        <img  src="Image/Phone-icon.png" text ></a>
        <a   > +212695963381 </a>
        -->
<!--  <footer>
    
    <div class="footer-bottom">
        <p>Copyright &copy;2021. Designed by Douah Bilal </p>

      </div>

      
  </footer>
-->
 

      
    </div>

    <script>
        var navbar = document.getElementById("navbar");
        function showMenu(){
            navbar.style.right = "0";
           document.getElementsByClassName("fa-bars")[0].style.display="none";
    
        }
        function hideMenu(){
            if(window.innerWidth<=790){
                navbar.style.right = "-200px";
            document.getElementsByClassName("fa-bars")[0].style.display="block";
            }
    
    
        }
    </script>
 
</body>

</html>
