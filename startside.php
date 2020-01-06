<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Forside</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="startside.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Girassol&display=swap" rel="stylesheet">
    </head>
    <header><!--Introduktion -->
        <h1>Anne's portfolio</h1>
        
            <p>Dette er mit portfolio, der viser hvad jeg har lært på første semester hos Erhvervsakademiet Dania som Multimediedesigner. Brug navigationsbaren til at navigere rundt på siden, da det tog mig flere timer i ren frustration og højt blodtryk, at få den op og køre.</p>
        
    </header>
    
    
    <body>
        
        <!-- til top knap--> 
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        
        <!-- her skal der være en php navigations bar-->
 
        
            <!-- php start-->
            <?php include "menu.inc"; ?>
            <!-- php slut-->
        
<section><!-- beskrivelse med billede-->
        <div id="billede">
            <img src="chillforside.jpg" alt="profil" width="70%">
        </div>
        
            <div id="tekst">
                <p>I dette portfolio kan du læse om de forskellige fag, som vi har skulle arbejde med i teori og praktisk. Det omhandler webudvikling som er html, css, informations arkitektur, SEO mm. Vi har også arbejdet med virksomhedsforståelse, hvor vi har skulle analysere modeller indenfor Business model canvas/BMC, paradigmer, brugertest mm. I design har vi øvet os i photoshop, illustrator og teoretisk viden omkring farver, typografi, gestaltlovene mm. Derudover kan du læse og se vores projekter vi har lavet i samarbejde med hinanden i grupper, som gælder primært om at få lavet et produkt eller prototype. Der er rig mulighed for at læse et afsnit omkring mine reflektioner ved at arbejde med dette portfolio, hvor jeg fik afklaret hvor meget denne uddannelse har lært mig siden September 2019.</p>
            
            </div>
</section>

    <section><!--footer-->
        <div class="footer">
            <p>Anne Mehlsen &#169; Læringsportfolio 2019-</p>
        </div>

    </section>

<!-- alt javascript-->
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
        
    