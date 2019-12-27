<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Photoshop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="photo.css">
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
        
        <div id="htmltitel"> 
            <img src="design.jpg" alt="Design" height="200px">
            </div>
            <div id="phototekst">
                
                <h2>Adobe Photoshop</h2>
                
                    <p>Adobe photoshop er populært i forhold til dens redigeringsprogram, da den har de nødvendige funktioner for at redigere i billeder. Der kan ændres i selve billedet med lys, mørke, saturation osv. Udover disse, er det muligt at lave clipping masks, blend mode og fritlægning.   
                    </p>
                <h2>Peer-to-Peer</h2>
                
                    <p>Vi har arbejdet med peer-to-peer undervisning, hvor det handler om at undervise andre studerende med det man har arbejdet med. Man fik en opgave om at studere et værktøj i illustrator eller photoshop, og arbejde med det til at kunne præsentere det i klassen. Det var en øvelse på at blive klogere på et værktøj og hvordan man kan arbejde med det, samt at kunne give hinanden feedback.<br>
                    Min øvelse der skulle vises til resten af studerende, var Blending modes. Titlen på mit forsøg med blending modes, har jeg valgt og kalde "Skull boy". Den præsenteres som én af de første, som er i mine eksempler nedenfor på siden.
                    </p>
        </div>
        
        <div id="eksempler">
        <h3>Mine projekter med Photoshop</h3>
            <p>Tryk på pilene som er nedenunder billederne, for at se diverse materialer som er brugt til projektet. Der kan navigeres til højre og venstre.<br>
            OBS: Materialerne vises først, og til sidst i billede rækkefølgen for hver kategori, er resultatet med photoshop.</p>
        </div>
        
        <div id="billeder">
        
        <div class="w3-content w3-display-container" style="margin-left:30%">
            <img class="mySlides1" src="mandmedkniv.jpg" style="width:100%">
            <img class="mySlides1" src="xrayslange.jpg" style="width:100%">
            <img class="mySlides1" src="skullboi.jpg" style="width:100%">
            <img class="mySlides1" src="kranie.JPG" style="width:100%">
          <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 0)">&#10094;</button>
          <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 0)">&#10095;</button>
        </div>

        <div class="w3-content w3-display-container" style="margin-left:30%">
            <img class="mySlides2" src="taeoriginal.JPG" style="width:100%">
            <img class="mySlides2" src="taephotoshop.jpg" style="width:100%">
          <img class="mySlides2" src="tae1.JPG" style="width:100%">
          <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 1)">&#10094;</button>
          <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 1)">&#10095;</button>
        </div>
        
        <div class="w3-content w3-display-container" style="margin-left:30%">
            <img class="mySlides3" src="tae3original.JPG" style="width:100%">
            <img class="mySlides3" src="tae2photoshop.jpg" style="width:100%">
            <img class="mySlides3" src="tae2.2original.JPG" style="width:100%">
          <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 2)">&#10094;</button>
          <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 2)">&#10095;</button>
        </div>
        
        <div class="w3-content w3-display-container" style="margin-left:30%">
            <img class="mySlides4" src="pige.JPG" style="width:100%">
            <img class="mySlides4" src="fakeyoutube.jpg" style="width:100%">
          <img class="mySlides4" src="youtubeoriginal.PNG" style="width:100%">
          <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 3)">&#10094;</button>
          <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 3)">&#10095;</button>
        </div>
        
        <div class="w3-content w3-display-container" style="margin-left:30%">
            <img class="mySlides5" src="blomster.JPG" style="width:100%">
            <img class="mySlides5" src="deer.jpg" style="width:100%">
            <img class="mySlides5" src="deer2.PNG" style="width:100%">
          <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 4)">&#10094;</button>
          <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 4)">&#10095;</button>
        </div>
        
        </div>
   
            <div id="photokilder">
                <p> Kilder: Carsten Kjeldsen Bogner tavle undervisning "Photoshop: grundlæggende" 20/9.<br>
                <a href="https://www.linkedin.com/learning/photoshop-cc-2019-essential-training-the-basics/a-tour-of-the-photoshop-interface">A tour of the Photoshop interface - Julieanne Kost - Linkedin Learning</a><br>
                <a href="https://www.youtube.com/watch?v=1GpY3Uh50jQ">The Power of Using Blending Modes in Photoshop - PHLEARN - 16/10/2014</a></p>
            </div>
        
        <div class="footer">
            <p>Anne Mehlsen &#169; Læringsportfolio 2019-</p>
        </div>
        
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
             var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2", "mySlides3", "mySlides4", "mySlides5"]
showDivs(-1, 0);
showDivs(-1, 1);
showDivs(-1, 2);
showDivs(-1, 3);
showDivs(-1, 4);
            
function plusDivs(n, no) {
  showDivs(slideIndex[no] += n, no);
}

function showDivs(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
    </script>

    </body>
</html>