<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Photoshop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="photoshopcss.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <header>
        <h1>Photoshop</h1>
        
        <div id="introtekst">
             <p>Her kan du læse om hvad photoshop er, og hvad det bruges til.</p>
        </div>
    </header>
    
    <body> 
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
           <!-- php start-->
        <?php include "menu.inc"; ?>
            <!-- php slut-->
        
         <script>
        //DETTE ER TIL NAVIGATION
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
          } else {
          dropdownContent.style.display = "block";
          }
          });
        }
            //DETTE ER TIL TOP KNAPPEN 
            //Get the button:
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0; // For Safari
          document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
        
             //javascript til slideshow
           var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
    </script>
        
        <div id="htmltitel"> 
            <img src="design.jpg" alt="Design" height="200px">
            </div>
            <div id="illutekst">
                
                <h2>Photoshop</h2>
                
                    <p>Adobe photoshop er populært i forhold til dens redigeringsprogram, da den har de nødvendige funktioner for at redigere i billeder. Der kan ændres i selve billedet med lys, mørke, saturation osv. Udover disse, er det muligt at lave clipping masks, blend mode og fritlægning. Fremfor Adobe Lightroom, er photoshop brugt til mere hæftige redigeringer og effekter.   
                    </p>
        </div>
        
        <div id="eksempler">
        <h3>Mine projekter med Photoshop</h3>
            <p>Tryk på pilene i boksen nedenunder, for at se diverse billeder. Der kan navigeres til højre og venstre.<br>
            OBS: Hvis ingen billeder vises, så tryk en enkelt gang på en af pilene og så skulle billederne gerne dukke op.</p>
        </div>
        

                  <!-- Slideshow container -->
            <div class="slideshow-container">

              <!-- Full-width images with number and caption text -->
              <div class="mySlides fade">
                <div class="numbertext">1 / 2</div>
                <img src="photoshopfyr.jpg" style="width:100%">
              </div>

              <div class="mySlides fade">
                <div class="numbertext">2 / 2</div>
                <img src="skull.png" style="width:100%">
              </div>

              <!-- Next and previous buttons -->
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <span class="dot" onclick="currentSlide(7)"></span>
                <span class="dot" onclick="currentSlide(8)"></span>
                <span class="dot" onclick="currentSlide(9)"></span>
            </div>
        
            <div id="illukilder">
                <p> Kilder: Carsten Kjeldsen Bogner tavle undervisning "Illustrator: grundlæggende" 20/9.<br>
                <a href="https://www.linkedin.com/learning/illustrator-cc-2019-one-on-one-fundamentals/the-most-comprehensive-illustrator-training">"Illustrator CC 2019 One on One Fundamentals" Kapitel 1, 2, 3 - Linkedin Learning</a>
            </div>
        
        <div class="footer">
            <p>Anne Mehlsen &#169; Læringsportfolio 2019-</p>
        </div>

    </body>
</html>