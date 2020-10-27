<!DOCTYPE html>
<html>
<head>
<title>CODE | Apeejay School NOIDA</title>
<meta name="description" content="Code is an annual IT symposium hosted by Apeejay School, Noida. Ever since our founding in 1999 we have retained the position of Delhi-NCR's most awaited IT symposium. With over 50 schools from across Delhi-NCR, we make it bigger and better each year. ">
<meta name="viewport" content="width=device-width, initial-scale=1.0,viewport-fit=cover">
<meta charset="utf-8">
<meta name="theme-color" content="#040a14">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel= "stylesheet" href="styles/style.css"/>
<script src="scripts/script.js"></script>
</head>
<body style="background-color:black;">
    <section id="header"></section> 
  <header >
    <div class="container" id="navbar">
      <div class="header-top">
        <div class="header-flex"> 
          <img src="assets/translogo1.png" alt="height:100px; width:100px;">
        <a href="#header">  <h1 class="showCode">CODE 2020</h1></a>
          <button class="drop-btn" onclick="$('.header-right').toggle(); $('.showCode').toggle(); ">&#9776;</button>
        </div>
        <div class="header-right">
            <ul class="ul">
              <li class="li"><a href="#about">About</a></li>
              <li class="li"><a href="#Events">Events</a></li>  
              <li class="li"><a href="#schedule">Schedule</a></li>
              <li class="li"><a href="registration.php">Register</a></li>
              <li class="li"><a href="#footer">Contact</a></li>

            </ul>
        </div>
    </div>
  </header>

<div id = "bg-full" >
<div  id="center-text-start" style="padding-top:50px;" >
  <div><h1>CODE</h1></div>
  <div class="p1"> Veni . Vidi . Vici</div>
  <div> November 2020</div><br>
  <div>
<a href="day1.php"><button class="button-hov" style="font-family:'Roboto';">Day 1 Results</button></a>
<a href="day2.php"><button class="button-hov" style="font-family:'Roboto';">Day 2 Results</button></a>
</div>
</div>

  <canvas class="background"></canvas>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>

</div><span id="about" style="margin-top:100px;"></span>
<script>
  $(".showCode").hide();
  $(".header-right").hide();
  window.onscroll = function () {
    console.log(document.body.scrollTop)
    if (document.documentElement.scrollTop > 100) {
      $(".header-right").fadeIn()
      $(".showCode").fadeIn();
      $("#center-text-start").fadeOut(150);
    } else {
      $(".showCode").fadeOut();
      $(".header-right").fadeOut()
      $("#center-text-start").fadeIn(150);
    }
  }
  
</script>


<div id="intro">


<div>
    <h1 style="text-align:center;font-weight: bold;font-size: 2em" class="header-top">Guidelines</h1>
    <br>
    <li>Rules are subject to change without any prior information.</li><br>
    <li>Schools must report at the Registration Desk latest by 8.30AM.</li><br>
    <li>Participants must report in proper school uniform and carry their ID cards.</li><br>
    <li>The decision of the Host School and the Judges will be final.</li><br>
    <li>A participant can participate in one event only.</li><br>
    <li>EncredX will be an online event, keep checking our website for more updates.</li><br>
    <li>No points will be awarded for qualifying the Prelim Round.</li><br>
</div>

</div>
<div id="intro2">

<div><h1>80+</h1><br> Members</div>
<div><h1>50+ </h1><br>Schools</div>

<div><h1>900+</h1><br> Participants</div>
<div><h1>20+</h1><br> Awards</div>

</div>  


<section  id="Events" class="hero is-halfheight ">
    
  
  
  <div class="hero-body">
    
    <div class="container">
      <h1 >Events</h1>
      <hr width="50%">
      <div class="columns">
        <figure class="column image image1" data-toggle="modal" data-target="#webDModal"><h1><p>Web Design</p></h1><br> Open</h1></figure>
       <figure class="column image image2" data-toggle="modal"  data-target="#gamingModal"><h1><p>Gaming</p></h1><br><p> Open</p></h1></figure>
        <figure class="column image image3" data-toggle="modal" data-target="#programmingModal" ><h1><p>CODE++</p></h1><br><p> Open</p></h1></figure>
        <figure class="column image image4" data-toggle="modal" data-target="#djMixingModal"><h1><p>DJ Mixing</p></h1><br><p> Open</p></h1></figure>
      </div>
      <div class="columns">
        <figure class="column image image5" data-toggle="modal" data-target="#photoModal"><h1><p>Photography</p></h1><br><p> Open</p></h1></figure>
        <figure class="column image image6" data-toggle="modal" data-target="#movieModal"><h1><p>Movie Making</p></h1><br><p> Open</p></h1></figure>
        <figure class="column image image7" data-toggle="modal" data-target="#mswModal"><h1><p>Logo</p></h1><br><p> III-V </p></h1></figure>
        <figure class="column image image8" data-toggle="modal" data-target="#keynoteModal"><h1><p>Keynote</p></h1><br><p> Open</p></h1></figure>
      </div>
      <div class="columns">
        <figure class="column image image9"  data-toggle="modal" data-target="#trapModal"><h1><p>Robo Race</p></h1><br><p> Open</p></h1></figure>
        <figure class="column image image10" data-toggle="modal" data-target="#EncredxModal"><h1><p>Encredx</p></h1><br><p> Open</p></h1></figure>
        <figure class="column image image11" data-toggle="modal" data-target="#quizModal"><h1><p>Quiz</p></h1><br><p> Open</p></h1></figure>
        <figure class="column image image12" data-toggle="modal" data-target="#diModal"><h1><p>Digital Imaging</p></h1><br><p> Open</p></h1></figure>
      </div>
      <div class="columns">
          <figure class="column image image13" data-toggle="modal" data-target="#gdModal"><h1><p>Group Discussion</p></h1><br><p>Open</p></h1></figure>
      </div>
    </div>
  </div>
</section>


<div id="intro" style="text-align:center">
<h1 style="font-weight: bold;font-size: 2em" class="header-top">Updates</h1>

<div>
    <br>
    
    <li>Online Registration portal is open <a href="registration.php">Click Here</a> to register.</li>
    <li>Prelims entry portal is open <u><a href="/prelims">CLICK HERE</a></u> .</li>
    
</div>
</div>


<section  id="members" class="hero is-halfheight ">
    <div class="hero-body">
    
    <div class="container">
      <h1 >Members</h1>
      <hr width="50%">
      <div class="people">
          <div class ="imagePerson-mob person2"><p class="people-name">Sitaraman Subramanian</p><p style="font-size:1em">President</p></div>
          <div class ="imagePerson-mob person16"><p class="people-name">Parth Bansal</p><p style="font-size:1em">Robotics President</p></div>
          
      </div>
      <div class="people">
          <div class ="imagePerson-mob person14"><p class="people-name">Amaiya Singhal</p><p style="font-size:1em">Vice-President</p></div>
          <div class ="imagePerson-mob person15"><p class="people-name">Virtulya Rajput</p><p style="font-size:1em">Vice-President</p></div>
          <div class ="imagePerson-mob person4"><p class="people-name">Soumil Sinha</p><p style="font-size:1em">Vice-President</p></div>
      </div>
      <div class="people">
        <div class ="imagePerson-mob person7"><p class="people-name">Arnav Saxena</p><p style="font-size:1em">Director</p></div>
        <div class ="imagePerson-mob person1"><p class="people-name">Srihari Unnikrishnan</p><p style="font-size:1em">Director</p></div>
        <div class ="imagePerson-mob person9"><p class="people-name">Jayant Mittal</p><p style="font-size:1em">Director</p></div>
        <div class ="imagePerson-mob person8"><p class="people-name">Chirag Malhotra</p><p style="font-size:1em">Director</p></div>
        <div class ="imagePerson-mob person18"><p class="people-name">Vasu Verma</p><p style="font-size:1em">Director</p></div>
      </div>
    </div>
  </div>
</section>
<section id="schedule" style="display:flex; flex-direction:column; justrify-content:center; background-color: black;align-items: center;">
  
  <img src="assets/transschedule.png" style="padding:2%"/><br>
  <a href ="assets/CODE.pdf"><button class="button-hov" >Download Brochure</button></a>  <br>
</section>
<footer id="footer">
    <div class="social">
        <a href="https://www.facebook.com/codeapjn/"><div class="fa fa-facebook-official"></div></a>
        <a href="https://www.instagram.com/codeapjn/"><div class="fa fa-instagram"></div></a>
  </div>
    <p><strong><a style = "font-size:1.2em; "href="https://goo.gl/maps/jciwDeBEKDDd9PmY6">Address</a> : </strong>Apeejay School NOIDA,Film City, Sector 16A, Noida, Uttar Pradesh 201301</p>
    <p>School Email: <a href="mailto:skool.ms.nvd@apj.edu">skool.ms.nvd@apj.edu</a> </p>

  </footer>
 <!-- Web Design -->
 <div class="modal fade" id="webDModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Web Designing</h4>
          <button type="button" class="close" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          
          <p><strong>Domain: </strong>Open</p>
          <p><strong>No. of participants: </strong>2</p>
          <p><strong>Time Allotted: </strong>1 hour</p>
          <p><strong>Software Provided: </strong>Sublime Text, Brackets, GIMP</p>
          <li>Only HTML, CSS, JavaScript and Jquery should be used.</li>
          <li>No Internet Access will be provided</li>
          <li>Topic would be given on-the-spot.</li>
          <h6>:</h6>
          <div class ="people">
          <div class ="imagePerson person1"><p class="people-name">Srihari Unnikrishnan</p><p style="font-size:1em">+91 7303672885</p></div>
          <div class ="imagePerson person2"><p class="people-name">Sitaraman Subramanian</p><p style="font-size:1em">+91 9810705237</p></div>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">Close</button>
        </div>

      </div>
    </div>
  </div>
 <!--DJ Mixing -->
 <div class="modal fade" id="djMixingModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">DJ Mixing </h4>
          <button type="button" class="close" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          
          <p><strong>Domain: </strong>IX-XII</p>
          <p><strong>No. of Participants: </strong>1</p>
          <p><strong>Time Allotted: </strong>1 hour</p>
          <p><strong>Software Provided: </strong>FL Studio</p>
          <li>Participants are requested to carry their own headphones.</li>
          <li>Samples will be provided on-the-spot.</li>
           
          <div class ="people">
          <div class ="imagePerson person3"><p class="people-name">Aditya Phukan</p><p style="font-size:1em">+91 9205859289 </p></div>
          <div class ="imagePerson person4"><p class="people-name">Soumil Sinha</p><p style="font-size:1em">+91 8799709865</p></div>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">Close</button>
        </div>

      </div>
    </div>
  </div>
 <!--Gaming -->
 <div class="modal fade" id="gamingModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Gaming </h4>
          <button type="button" class="close" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          
          <p><strong>Domain: </strong>Open</p>
          <p><strong>No. of participants: </strong>1</p>

          <li>Participants are requested to carry their own controllers, keyboards, mouse and headphones / earphones.</li>
           
          <div class ="people">
          <div class ="imagePerson person5"><p class="people-name">Soham Choudhury</p><p style="font-size:1em">+91 8700090359</p></div>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">Close</button>
        </div>

      </div>
    </div>
  </div>
 <!--Programming -->
 <div class="modal fade" id="programmingModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">CODE++ </h4>
          <button type="button" class="close" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          
          <p><strong>Domain: </strong>XI-XII</p>
          <p><strong>No. of participants: </strong>2</p>
          <p><strong>Software Provided: </strong>Turbo C++, G++, Sublime Text, Python 3.4 </p>
          <p><strong>Time allotted: </strong>1 hour</p>

          <!--<li>Use of helper tools such as right clicking etc. are prohibited and would lead to direct disqualification</li>-->
          <li>Participants have to use only one language to program in (C++ or Python).</li>
          <!--<li>You will be provided with questions on the spot. You will be allowed to attempt all the questions in only one language</li> -->
        </div>
 
          <div class ="people">
            <div class ="imagePerson person7"><p class="people-name">Arnav Saxena</p><p style="font-size:1em">+91 8800872358</p></div>
            <div class ="imagePerson person13"><p class="people-name">Hetal Sharma</p><p style="font-size:1em">+91 9999398116</p></div>
          </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">Close</button>
        </div>

      </div>
    </div>
  </div>

 <!--Photography -->
 <div class="modal fade" id="photoModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Photography</h4>
          <button type="button" class="close" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          
          <p><strong>Domain: </strong>Open</p>
          <p><strong>No. of participants: </strong>2</p>
          <p><strong>Time Allotted: </strong>1.5 hours</p>
          
          
          <li>Topic would be given on-the-spot.</li>
          <li>Participants are requested to carry their own camera , laptop and a pendrive.</li>
          <li>Only soft editing will be allowed.</li>
           
          <div class ="people">
            <div class ="imagePerson person8"><p class="people-name">Chirag Malhotra</p><p style="font-size:1em">+91 9811437242</p></div>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">Close</button>
        </div>

      </div>
    </div>
  </div>
<!--Movie Making-->
<div class="modal fade" id="movieModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Movie Making  </h4>
          <button type="button" class="close" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          
          <p><strong>Domain: </strong>Open</p>
          <p><strong>No. of participants: </strong>2</p>

            <ol style="margin-left:10px">
              <li>"Noor sat on the floor, holding that in her hands. She looked into it and with a whimper, she died."</li>
              <li>The participants are free to interpret the prompt and make a film revolving around the theme. </li>

              
              <li>Creative Complication: The meaning of word "Noor" should stand out in the film.</li>
              <li>However, participants may use optional bonus complication, which would surely fetch them more marks.</li>
              <li>Bonus Optional Complication: No use of Dialogues, Quotes or Text of any kind is permitted. It is mandatory to showcase the Creative Complication.</li>
            </ol>
          </li>
          <li>The movie shouldn't exceed 6 minutes runtime including credits and information.</li>
          <li>8 teams will be shortlisted for the Finals.</li>
       
          <div class ="people">
          <div class ="imagePerson person9"><p class="people-name">Jayant Mittal</p><p style="font-size:1em">+91 9958503519</p></div>
          <div class ="imagePerson person18"><p class="people-name">Vasu Verma</p><p style="font-size:1em">+91 8800500721</p></div>
          </div>
      
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">Close</button>
        </div>

      </div>
    </div>
  </div>
  <!--Keynote-->
<div class="modal fade" id="keynoteModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Keynote </h4>
          <button type="button" class="close" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          
          <p><strong>Domain: </strong>Open</p>
          <p><strong>No. Of Participants: </strong>2</p>
          <p><strong>Topic: </strong>Launch an innovative product for recycling of waste</p>
          <p><strong>Time Allotted: </strong>3 mins + Q&A </p>
          <!--<h3>Finals</h3>-->
          <li>The participants are required to bring a softcopy of their presentation on a USB drive and launch their product through the presentation.</li>
           
          <div class ="people">
          <div class ="imagePerson person10"><p class="people-name">Raghavi Nagpaul</p><p style="font-size:1em">+91 9560684148</p></div>
          <!--<div class ="imagePerson person2"><p class="people-name">Sitaraman Subramanian</p><p style="font-size:1em">+91 9810705237</p></div>-->
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">Close</button>
        </div>

      </div>
    </div>
  </div>
  <!--Digital Imaging-->
<div class="modal fade" id="diModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Digital Imaging </h4>
          <button type="button" class="close" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          
          <p><strong>Domain: </strong>Open</p>
          <p><strong>No. of participants: </strong>2</p>
          <li>Design a poster on the topic "Travel to Mars" for an advertisement in a newspaper.</li>
          <li>The .psd and .jpeg/jpg files have to be submitted on the prelims page <a href="https://codeapj.club/prelims">https://codeapj.club/prelims<a> or emailed at codedigitalimage@gmail.com latest by July 23, 2019 17:00 hrs.</li>
          <li>8 best entries will be shortlisted for the  Finals.</li>
           
              <div class ="people">
            <div class ="imagePerson person11"><p class="people-name">Dhruv Rajak</p><p style="font-size:1em">+91 8851880306</p></div>
            <div class ="imagePerson person17"><p class="people-name">Pranav Balaji</p><p style="font-size:1em">+91 8700810001</p></div>    
            </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">Close</button>
        </div>

      </div>
    </div>
  </div>
  <!--Encredx-->
<div class="modal fade" id="EncredxModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">EncredX</h4>
          <button type="button" class="close" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          
          <p><strong>Domain: </strong>Open</p>
          <p><strong>No. of participants: </strong>1</p>
          
          <li>This is an online cryptic hunt.</li>
          <li>Answers should be in lowercase and without spaces.</li>
          <li>The hunt will go live on the website https://encredx.codeapj.club from July 23, 2019 at 00:00hrs till July 23, 2019 00:00hrs.</li>
          <li>The participant at the top of the Leaderboard at the end of the hunt, will be declared winner.</li>
          <li>There can be only one winner.</li>
           
          <div class ="people">
          <div class ="imagePerson"><p class="people-name">Anonymous</p><p style="font-size:1em">476062 * 10<sup>-4</sup> 1223321 * 10 <sup>-4</sup></p></div>
    
          </div>
          
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">Close</button>
        </div>

      </div>
    </div>
  </div>

 
 <div class="modal fade" id="gdModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Group Discussion </h4>
          <button type="button" class="close" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          
          <p><strong>Domain: </strong>Open</p>
          <p><strong>No. of participants: </strong>1</p>
            
          <li>Participants will be given the topic on-the-spot.</li>
 
          <div class ="people">
          <div class ="imagePerson person12"><p class="people-name">Jaya Nayaran</p><p style="font-size:1em">+91 8447060452</p></div>
          <div class ="imagePerson person19"><p class="people-name">Manaal Azad</p><p style="font-size:1em">+91 9910825367</p></div>
          </div>
          
        </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">Close</button>
      </div>
    </div>
  </div>
</div>

 <!--Gaming -->
 <div class="modal fade" id="trapModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Robo Race </h4>
          <button type="button" class="close" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          
          <p><strong>Domain: </strong>Open</p>
          <p><strong>No. of participants: </strong>2</p>
          <li>The bot has to complete the track within minimum possible time.</li>
          <li>All bots must be wired or wireless.</li>
          <li>The voltage should not exceed 24 V.</li>
          <li>The dimension of the bot should not exceed 10 x 10 x 9 inches including wheels width and height of the bot should exceed 9 inches.</li>
          <li>The maximum weight should not exceed 4 kgs.</li>
          <li>The track will be multi-terrain and may include obstacles such as sand, water etc. The track will be disclosed on the day of the event.</li>
          <li>Use of pre-programmed kits and fully assembled kits is not allowed.</li>
          <li>The length of the wire for wired robots should be atleast 4 meters long.</li>
          <li>The Robot must be battery operated and no direct AC operated robots will be allowed. </li>
          <li>Height changing robots will not be allowed.</li>
           
          <div class ="people">
          <div class ="imagePerson person16"><p class="people-name">Parth Bansal</p><p style="font-size:1em">+91 9208571578</p></div>
          <div class ="imagePerson person17"><p class="people-name">Pranav Balaji</p><p style="font-size:1em">+91 8700810001</p></div>
          </div>
        </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">Close</button>
      </div>
    </div>
  </div>
</div>


  <!--Keynote-->
  <div class="modal fade" id="quizModal">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Quiz Rules</h4>
            <button type="button" class="close" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">&times;</button>
          </div>
  
          <!-- Modal body -->
          <div class="modal-body">
            
            <p><strong>Domain: </strong>Open</p>
            <p><strong>No. of Participants: </strong>2</p>
            
            <li>Prelims will be a pen-paper round.</li>
            <li>Top 5 Teams will qualify for the finals.</li>
             
          <div class ="people">
          <div class ="imagePerson person14"><p class="people-name">Amaiya Singhal</p><p style="font-size:1em"> +91 8527762934</p></div>
          <div class ="imagePerson person15"><p class="people-name">Virtulya Rajput</p><p style="font-size:1em">+91 8218110057</p></div>
          </div>
          </div>
  
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">Close</button>
          </div>
  
        </div>
      </div>
    </div>
<!-- MSW Logo -->
<div class="modal fade" id="mswModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Logo</h4>
          <button type="button" class="close" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          
          <p><strong>Domain: </strong>III-V</p>
          <p><strong>No. of Participants: </strong>2</p>
          <p><strong>Time allotted: </strong>1 hour</p>
          <p><strong>Software Provided: </strong>MSW Logo  </p>
          <!--<p><Strong>Rules:</Strong></p>-->
          <li>Challenge will be disclosed on-the-spot.</li>
           
          <div class ="people">
          <!--<div class ="imagePerson person1"><p class="people-name">Srihari Unnikrishnan</p><p style="font-size:1em">+91 7303672885</p></div>-->
          <div class ="imagePerson person2"><p class="people-name">Sitaraman Subramanian</p><p style="font-size:1em">+91 9810705237</p></div>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';" onclick="window.location.href = 'http://codeapj.club/index.php#Events';">Close</button>
        </div>

      </div>
    </div>
  </div>    
  </body>
</html>
