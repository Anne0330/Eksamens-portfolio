<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Forside</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="fcss.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Girassol&display=swap" rel="stylesheet">
    </head>
    <header>
        <h1>Anne's portfolio</h1>
        <!-- malplaceret undertitel???-->
        <p>Dette er mit portfolio, der viser hvad jeg har lært på første semester hos Erhvervsakademiet Dania. Brug navigationsbaren til at navigere rundt på siden, da det tog mig flere timer i ren frustration og højt blodtryk, at få den op og køre.</p>
    </header>
    
        <body>
        
        <!-- til top knap--> 
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        
        <!-- her skal der være en php navigations bar-->
 
        
         <!-- php start-->
    <?php include "menu.inc"; ?>
    <!-- php slut-->
        
        <div id="billede">
            <img src="chillforside-1.jpg" alt="profil" width="70%">
        </div>
        
            <div id="tekst">
                <p>Tekst TekstTekstTekstTek</p>
            
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
        
    </script> 
         
        
    </body>
    
</html>