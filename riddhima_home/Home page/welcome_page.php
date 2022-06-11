

<!DOCTYPE html>
<html>
<title>Home page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<style media="screen">
/*creating slider*/

  .carousel-cell {
    width: 100%;
    }

    /* cell number */
    .carousel-cell:before {
      display: block;
    }
 




html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}

.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
.w3-col {
  background-color:grey;
}
.w3-top{
  font-family: Impact, Charcoal, sans-serif;
  
}
.w3-button{
  color:white;
  font-size:25px;
 
}
.w3-content{
  background-color:blueviolet;
}
body{
  background-color:black;

/*trying slider*/
* {box-sizing:border-box}

.w3-container{
  background-color:sienna;
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-large w3-light-grey">
    <div class="w3-col s3">
      <a href="./home_page_new.html" class="w3-button w3-block">Home</a>
    </div>
    <div class="w3-col s3">
      <a href="./index1.php" class=
      "w3-button w3-block">Attendance</a>
     
      </div>
    <div class="w3-col s3">
      <a href="./contact.php" class=
      "w3-button w3-block">Contact</a>
     
      </div>
    <div class="w3-col s3">
      <a href="#" class=
      "w3-button w3-block">My Profile</a>
    </div>
  

  </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel">
    <h1 style = "text-align:center;font-size:100px;">Welcome </h1>

    
  </div>

    
  
  <!-- Grid -->
  <div class="w3-row w3-container">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">What We Offer</span>
    </div>
    <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
      <h3>Design</h3>
      <p>Employbility is of aim that we conduct</p>
    </div>

    <div class="w3-col l3 m6 w3-grey w3-container w3-padding-16">
      <h3>Teamwork</h3>
      <p>
        Talent wins games, but teamwork and intelligence wins championships.
       <br> 
        –Michael Jordan
 </p>
    </div>

    <div class="w3-col l3 m6 w3-dark-grey w3-container w3-padding-16">
      <h3>Consultation</h3>
      <p>


It is possible for ordinary people to choose to be extraordinary..</p>
    </div>

    <div class="w3-col l3 m6 w3-black w3-container w3-padding-16">
      <h3>Promises</h3>
      <p>“When it comes
        to privacy and accountability, 
        people always demand the former
         for themselves and the latter for
          everyone else.”
          <br> 
          ― David Brin.</p>
    </div>
  </div>

  <!-- Grid -->
  
  <!-- Grid -->
  <div class="w3-row-padding" id="about">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Who We Are</span>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="./lli1.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>Jane Doe</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>
Employee motivational quotes are an absolute necessity for maintaining a sense of wonder, pride, and zeal in their work.

For a leader, motivation must remain a permanent concern and he must continually work to motivate his teams.

 </p>
          <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="./o1.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Mike Ross</h3>
          <p class="w3-opacity">Art Director</p>
          <p>If you do not chane the direction , you mau end with heading.</p>
          <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="./office2.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Nikesh Arora</h3>
          <p class="w3-opacity">Designer</p>
          <p>Sucess of company is what our motto</p>
          <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact -->
  

</div>

<!-- Footer -->

<footer class="w3-container w3-padding-32 w3-light-grey w3-center">

  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>About Us</a>
  <div class="w3-xlarge w3-section">
   Proud to be associated with
   

   <i class="fa fa-instagram w3-hover-opacity">infosys</i> </p>  <i class="fa fa-facebook-official w3-hover-opacity"></i>
      Join our team: We are Hiring!</p>

      <p> Syed Bajaj -<i class="fa fa-linkedin w3-hover-opacity">  Founder of Our Company</i>
     
      </p> 
   
     
     <P><i class="fa fa-twitter w3-hover-opacity"></i>Connect with users after they leave our website.
     
     </P> 
        
 
  
  Privacy Policy
  
  
  Copyright © 2009 - 2020 . All Rights Reserved.Our Company is a registered trademark.
  
  
    

  

  
    
  </div>
  
</footer>


<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}


</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>
</html>