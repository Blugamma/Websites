<?php 

echo '<head>
    <title>Working with veterans and students to create new accommodation - Project Equinox</title>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.png" type="image/xicon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="./scripts/jquery.anyslider.js"></script>
    <script src="./scripts/menuButton.js"></script>
    <meta http-equiv="refresh" content="5;url=http://test.projectequinox.co.uk/contact-us">
 

</head>';

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent="From: $name \n$mobile\nMessage: $message";
$recipient = "blugammadesign@gmail.com";
$subject = "$subject";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo
    '<header>
        <div class="wrap">
            <img id="logo" src="images/logo.png">
            <nav>
                <div id="home"><a href="http://test.projectequinox.co.uk">Home</a></div>
                <div id="difference"><a href="what-difference-will-it-make">The Difference</a></div>
                <div id="building"><a href="our-building">Our Building</a></div>
                <div id="supporters"><a href="our-supporters">Supporters</a></div>
                <div id="case_studies"><a href="case-studies">Case Studies</a></div>
                <div id="funding"><a href="funding">Funding</a></div>
                <div id="evaluation"><a href="evaluation">Evaluation</a></div>
            </nav>
            <a href="#" id="menuButtonScript"><img id="menuButton" src="./images/menuButton.png"></a>
        </div>
    </header>
<body>

    <div id="colorbar1"></div>
    <div id="colorbar2"></div>
    <div id="colorbar3"></div>
    <div id="colorbar4"></div>
    <div id="mobileNav">
        <a id="mobilehome" href="http://test.projectequinox.co.uk">Home</a>
        <a id="mobilediff" href="what-difference-will-it-make">The Difference</a>
        <a id="mobilebuilding" href="our-building">Our Building</a>
        <a id="mobilesupporters" href="our-supporters">Supporters</a>
        <a id="mobilecase" href="case-studies">Case Studies</a>
        <a id="mobilefunding" href="funding">Funding</a>
        <a id="mobileevaluation" href="evaluation">Evaluation</a>
    </div>
    
    <div class="wrap">
        <div id="webContent">
            <center><p class="emailRedirect">Email has been sent! You will be redirected back in 5 seconds!</p></center>
            
       </div>
    </div>
    
    
    
    
    <div id="colorbar1"></div>
    <div id="colorbar2"></div>
    <div id="colorbar3"></div>
    <div id="colorbar4"></div>
    </body>
<footer>
    
    <div class="wrap">
        <div class="footerPR"><p>&copy 2016 projectequinox.co.uk, All Rights Reserved</p><p>Website created by <a href="http://blugammadesign.com">blugammadesign.com<a></p></div>
        <div id="supportersLogos">
        <div id="pup"></div>
        <div id="pfp"></div>
        <div id="livewell"></div>
        </div>
        
    </div>
</footer>
<script>
//mobileNav slider
    $(document).ready(function(){
      $(".slider").anyslider();
        $("#menuButtonScript").click(function(){
            $("#mobileNav").css("overflow", "hidden");
            $("#mobileNav").slideToggle(1000);
            
            
            
         });
    });

</script>


<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

</script>

</html>'; ?>