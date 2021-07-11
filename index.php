<?php
    include 'connectdb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Spectrum</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-sm  navbar-light  sticky-top">
        <div class="container-fluid">
            <img class="logo" src="images/logo.png"/></a>
            <!--<h3><b>Spectrum</b></h3>-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-center ml-lg-auto">
                    <li class="navitem active"><a class="nav-link" href="#Shome"><i class="fas fa-home"></i> <b>Home</b></a></li>
                    <li class="navitem active"><a class="nav-link" href="#Sabout"><i class="fas fa-address-book"></i> <b>About</b></a></li>
                    <li class="navitem active"><a class="nav-link" href="#Sproject"><i class="fa fa-book" aria-hidden="true"></i> <b>Projects</b></a></li>
                    <li class="navitem active"><a class="nav-link" href="#Sconnect"><i class="far fa-address-card"></i> <b>Connect</b></a></li>
                    <?php
                        if(isset($_SESSION['isLoggedin']) && $_SESSION['isLoggedin'] == true && isset($_SESSION['user_id'])) {
                            echo '
                            <li class="navitem active"><a class="nav-link" href="profile.php"><i class="fas fa-user"></i>
                             <b>Profile</b></a></li>
                            <li class="navitem active"><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>
                             <b>Logout</b></a></li>
                            ';
                        } else {
                            echo '<li class="navitem active"><a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> <b>Login</b></a></li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
<section class="banner" id="Shome" data-aos="fade-down">
     
</section>
<section class="About_us">
  <div class=" about container-fluid" id="Sabout">
      <h1 class="text-center" data-aos="fade-up" >ABOUT US</h1>
        <hr>
        <div class="row">
           <div class="col-md-6 col-12 p-5" data-aos="fade-up">
               <p class=" lead" >SPECTRUM ,Technical society of COLLEGE OF ENGINEERING AND TECHNOLOGY, BHUBANESWAR,a place for 
                            all technical enthusiasts to learn, discover and innovate new things in the field of Technology
                            and Design. The name of the club " SPECTRUM ", a contribution of our alumni of 2015 batch, is
                            particularly used to describe the characteristic colors of visible light after passing through 
                            a prism, similarly students of CET consist of different skills within them and Spectrum acts like
                            a prism, Spectrum recognises their skills helps them to strengthen it.<br><br>
                            This club was established by " Bikram Keshari Panda (2015 batch) ".Spectrum got its recognition in
                            the year 2016 and got its workspace, funding and other facilities. Primarily this was his idea to 
                            have an electronics society in our college but with the efforts of other members we established two 
                            other wings - Software and Design.The other seniors who had their valuable contribution for this 
                            initiative were: Ankit Mishra, Zighnesh Biswal, Abhishek Dash, Avinash Nayak,Tapan Kumar Pal, 
                            Krutikesh Sahoo, Abhilash Das.</p>
           </div>
           <div class="col-md-6 col-12  p-5" data-aos="flip-right">
             <div >
                 <img class="img-fluid" src="images/About_us.png"/>
              </div>
            </div>
        </div>
    </div>
</section>
<section class="Owings">
    <div class="wings_container">
         <h1 class="text-center"data-aos="fade-up" >OUR WINGS</h1>
         <hr>
        <div class="index p-5 mx-auto">
            <p class="lead">
                Our club SPECTRUM is so named as it provides us with different wings emitted by the hardwork from our members,
                 showing homologous transitions between Hardware, Software and Designing.<br>
                 <br>
                The HARDWARE team of the Club mainly focuses on VLSI, Embedded Systems and PCB Design. We have developed many
                projects with implementation and testing of circuits, components, systems, etc.<br>
                <br>
                The SOFTWARE team is continuously striving for growth in the domains of Web Development, App Development,
                 Competitive Programming, Machine Learning and Data Science. Working as a team, inspiring each other we quickly
                  develop viable solutions for a better outcome.<br>
                 <br>
                 The DESIGN Wing of our Club has proven their creativity in UI/UX Poster Designing. We believe visual communication
                  is a major tool to enhance various creative projects.<br>
            </p>
        </div> 
        <div class="container-fluid padding">
             <div class="row wings1 text-center">
                  <div class="col-md-4 col-12 wings p-3" data-aos="flip-right" >
                      <div class="inner p-5">
                        <h2>Hardware</h2>
                        <hr><br>
                        <h5>VLSI</h5>
                        
                        <h5>Embedded System</h5>
                        
                        <h5>PCB Design</h5>
                      </div>
                    </div>
                   <div class="col-md-4 col-12 wings" data-aos="flip-down" >
                       <div class="inner p-5">
                        <h2>Software</h2>
                        <hr><br>
                        <h5>Competitive Programming</h5>
                       
                        <h5>Web Development</h5>
                        
                        <h5>App Development</h5>
                        
                        <h5>Machine Learning</h5>
                       </div>
                    </div>
                    <div class="col-md-4 col-12 wings" data-aos="flip-right" >
                        <div class="inner p-5">
                            <h2>Design</h2>
                            <hr><br>
                            <h5>UI/UX Designing</h5>
                            
                            <h5>Poster Designing</h5>
                        </div>
                    </div>
           </div>
       </div>
    </div>
</section>  
<section class="Sproject">
    <div class="project_container" id="Sproject">
        <h1 class="text-center" data-aos="fade-up">PROJECTS</h1><hr>
             <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-md-4 col-12 mb-3" data-aos="flip-right">
                        <div class="card shadow" style="width: 20rem; height: 650px;" >
                            <div class="project">
                                  <img class="card-img-top" src="images/card5.jpg">
                                </div>      
                             <div class="card-body text-center" >
                                     <h5 class="card-title">FRIENDLY-MEDICO</h5>
                                     <p class="card-text">In this pandemic not everyone of us have the courage to go to hospitals and check our 
                                         own reports.this app will take some short details and keep it in a database. In future
                                         it can be used by medicals to get the health data of a person and if any issue is found 
                                         by the doctor they can directly contact them and problems can be solved over phones.</p>
                                         <a href="https://github.com/Ashishkumarpanda/FRIENDLY-MEDICO" class="btn btn-success"><i class="fab fa-github"></i> Link</a>
                             </div>
                        </div>
                    </div>
                       <div class="col-md-4 col-12  mb-3" data-aos="flip-up">
                               <div class="card shadow" style="width: 20rem; height: 650px;" >
                                   <div class="project">
                                         <img class="card-img-top" src="images/card3.jpg">
                                   </div>      
                                   <div class="card-body text-center">
                                       <h5 class="card-title">Extractive-Text-Summarization</h5>
                                       <p class="card-text">A simple python program which can find the most important sentences in a paragraph and
                                         can give them as the output. Quite useful for the tasks of reading short summaries of 
                                         news articles and such. Unlike machine learning models, this doesn't train but rather
                                         uses a graph based approach to rank the sentences based on their cosine similarities
                                         and give the desired output as a result.</p>
                                         <a href="https://github.com/C3Suryansu/Extractive-Text-Summarization" class="btn btn-success"><i class="fab fa-github"></i> Link</a>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3" data-aos="flip-right">
                            <div class="card shadow" style="width: 20rem; height: 650px;" >
                                <div class="project">
                                    <img class="card-img-top" src="images/card6.jpg">
                                </div>    
                                <div class="card-body text-center">
                                    <h5 class="card-title">BHAAVANA</h5>
                                    <p class="card-text">device helps physically imapired people to understand the emotions of the person they are
                                         talking to.</p>
                                         <a href="https://github.com/Spectrum-CETB" class="btn btn-success"><i class="fab fa-github"></i> Link</a>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-4 col-12 mb-3" data-aos="fade-up"  >
                               <div class="card shadow" style="width: 20rem; height: 650px;" >
                                    <div class="project">
                                        <img class="card-img-top" src="images/card4.jpg">
                                    </div>    
                                     <div class="card-body text-center">
                                       <h5 class="card-title">Ultrasonic Radar Based Horn System</h5>
                                       <p class="card-text">It is a noiseless horn system for the vehicles to communicate with each other using
                                            ultrasonic waves.</p>
                                            <a href="https://github.com/Spectrum-CETB" class="btn btn-success"><i class="fab fa-github"></i> Link</a>
                                     </div>
                                </div>
                        </div>
                        
                        <div class="col-md-4 col-12  mb-3" data-aos="fade-up" >
                            <div class="card shadow" style="width: 20rem; height: 650px;">
                                <div class="project">
                                    <img class="card-img-top" src="images/card1.jpg">
                                </div>
                                <div class="card-body text-center">
                                     <h5 class="card-title">SUPPLY BOT</h5>
                                     <p class="card-text">Robots help to deliver food and medicine aid in flood scenarios
                                     to the affected people in remote areas. Semi finalist at IIT bombay, Eyantra competition
                                     2019-20.</p>
                                    <a href="https://github.com/Spectrum-CETB" class="btn btn-success"><i class="fab fa-github"></i> Link</a>  
                               </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3" data-aos="fade-up" >
                            <div class="card shadow" style="width: 20rem; height: 650px;" >
                              <div class="project">
                                   <img class="card-img-top" src="images/card2.jpg">
                              </div>
                              <div class="card-body text-center">
                                   <h5 class="card-title">SMART TOILET FOR SENIOR CITIZENS AND PATIENTS</h5>
                                   <p class="card-text">A semi automated toilet that is designed for the elderly people and the patients.
                                   This toilet helps them defecate and urinate with ease and reduces the filthy labour
                                   for the hospital authorities. The use of embedded microcontroller Arduino Mega 2560
                                    makes the system smart.</p>
                                    <a href="https://github.com/Spectrum-CETB" class="btn btn-success"><i class="fab fa-github"></i> Link</a> 
                              </div>
                           </div>
                      </div>
                        
        </div>

    </div>
</div>

</section>
<section>
<div class="container-fluid padding">
    <div class="row connect text-center padding"  id="Sconnect">
        <div class="col-12">
            <h1 class="text-center" data-aos="fade-up">Connect</h1><hr><br>
        </div>
        <div class="col-12 social padding" data-aos="flip-left" >
            <a class="sol" href="https://www.facebook.com/spCETrum"><i class="fab fa-facebook"></i></a>
            <a class="sol" href="https://github.com/Spectrum-CETB"><i class="fab fa-github"></i></a>
            <a class="sol" href="https://www.linkedin.com/in/spectrum-cet-3b71431b1/"><i class="fab fa-linkedin"></i></a>
            <a class="sol" href="https://www.instagram.com/spectrum.cetb/?hl=en"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
</section>
<footer>
    <div class="container-fluid padding">
        <div class="row text-center padding">
             <div class="col-md-6">
                 <br><br><br>
                 <p><a href="#Shome" class="text-white">HOME</a></p>
                 <P><a href="#Sabout" class="text-white">ABOUT</a></P>
                 <P><a href="#Sproject" class="text-white">PROJECTS</a></P>
                 <P><a href="#Sconnect" class="text-white">CONNECT</a></P>
                 
             </div>
             <div class="col-md-6">
                 <!--<hr class="light">-->
                 <p>CONTACTS</p>
                 <!--<hr class="light">--><br>
                 <p><i class="fas fa-address-card"></i><a href="http://mapsgoogle.com/maps?q=Bhubaneswar" class="text-white"> College Of Engineering and Technology
                 <!--<p>Ghatikia,Bhubaneswar,751003</p>-->Ghatikia,Bhubaneswar,751003</a></p>
                 
                 <p><i class="fas fa-envelope"></i><a href="mailto:Spectrum.cetb@gmail.com" class="text-white">Spectrumclub.cetb@gmail.com</a></p>
                 <p><i class="fas fa-phone-square"></i><a href="tel:+91 8249063374" class="text-white">+91-8249063374</a></p>
             </div>
             <div class="col-12">
                 <hr class="light-100">
                 <h5>&copy;spectrumcet.com</h5>
             </div>
        </div>
    </div>
</footer>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        offset:400,
        duration:1000
        
    });
  </script>
  <script>
      $(document).ready(function(){
          $(".card").hover(
              function(){
                  $(this).animate({
                      marginTop:"-=5%",
                  },200);
              },
              function(){
                  $(this).animate({
                      marginTop:"0%"
                  },200);
              }

          );
      });
  </script>
  <script>
    $(document).ready(function(){
        $(".wings").hover(
            function(){
                $(this).animate({
                    marginTop:"-=1%",
                },200);
            },
            function(){
                $(this).animate({
                    marginTop:"0%"
                },200);
            }

        );
    });
</script>

</body>

</html>
</html>