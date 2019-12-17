<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSSskelet.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <header>
        <h1>Mit portfolio</h1>
        <!-- malplaceret undertitel-->
        <p>Undertitel</p>
        <!-- skal mit logo måske være et banner???-->
        <img src="logo.png" alt="logo" width="200px">
    </header>
    
    <body>
        <!-- til top knap-->
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
</script>
        
        <!-- Her skal kategorierne være som billeder med beskrivelse, hvis man ikke vil bruge menu baren. Det skal stå som titel, info og billede-->
    <section>
        <img src="Billede1.jpg" alt ="bill til webudvikling" width="400px"> 
        <h2>Webudvikling</h2>
        <p>Info omkring webudvikling</p>
    </section>
    <section>
        <img src="billede2.png" alt="bill til kommunikation" width="400px">
        <h2>Kommunikation</h2>
        <p>Info omkring kommunikation</p>
    </section>
    <section>
        <img src="billede3.jpg" alt="bill til Design" width="400px">
        <h2>Design</h2>
        <p>Info omkring Design</p>
    </section>
    <section>
        <img src="billede4.jpg" alt="bill til Projekter" width="400px">
        <h2>Projekter</h2>
        <p>Info omkring Projekter</p>
    </section>
    <section>
        <img src="billede5.jpg" alt="bill til om siden" width="400px">
        <h2>Om siden</h2>
        <p>Info omkring siden</p>
    </section>
        <!-- Her skal min footer være-->
    <section>
        <img src="logo.png" alt="bill til logo" width="200px">
        
        <p>tilbage til toppen</p>
        <p>kontakt info</p>
    </section>

 
    </body>
    
</html>