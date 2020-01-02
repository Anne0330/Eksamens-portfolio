<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Value proposition</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="valuecss.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
    </head>
    <header>
        <h1>Value proposition</h1>
        
        <div id="introtekst">
             <p>Her kan du læse om value proposition canvas, som forklarer faktorerne indenfor kundeprofiler og hvordan man kortlægger en kundeforståelse.</p>
        </div>
    </header>
    
    <body> 
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
           <!-- php start-->
        <?php include "menu.inc"; ?>
            <!-- php slut-->
        
        <div id="htmltitel"> 
            <img src="communication.jpg" alt="Design" height="200px">
            </div>
        
        <div id="value">
                
                <h2>Value proposition canvas</h2>
            
            <img src="bmcvsvpc.jpg" alt="bmc og value propostion" width="70%">
                
                <p>Med en Value proposition canvas, kan man kortlægge en kundeprofil for at få en kundeforståelse. Med værdikortet, kan man beskrive hvordan man har tænkt sig at skabe en værdi. Når disse to ting møder hinanden, opstår der et såkaldt Match.</p>
                
                <h3>Customer segment</h3>
            
            <img src="customersegment.png" alt="customer segment" width="70%">
            
            <h4>Ved en kundeprofil er der tre hovedpunkter, man bør overveje</h4>
            
                <dl>
                    <dt>Customer jobs/Job</dt>
                    <dd>Hvilke ønsker har de, for at kunne fuldføre det job de ønsker? Et eksempel kan være at en telefon bør kunne ringe, sende beskeder mm.</dd>
                    <dt>Pains</dt>
                    <dd>Hvilke ting frustrerer dine kunder, af hvad de ikke har. Om det er budgettet der er for lavt, eller om produktet ikke lever op til kundens behov.</dd>
                    <dt>Gains</dt>
                    <dd>Hvad forventer de? Et kvalitetsprodukt? Designet? Hvilken følelse giver produktet til kunden?</dd>
                </dl>
            
            <h3>Value map</h3>
            
            <h4>Value proposition giver et overblik af dit produkt, hvor der er 3 hovedpunkter man bør undersøge.</h4>
            
            <dl>
                <dt>Produkter og service</dt>
                <dd>Hvilke former for produkter eller servicer kan løses kundens.</dd>
                <dt>’jobs’/problemer</dt>
                <dd>Det kan også bruges, til hvis man vil udvikle noget nyt.</dd>
                <dt>Pain relievers</dt>
                <dd>Hvordan hjælper dit produkt med de ’pains’ som kunden har?</dd>
                <dt>Gain creators</dt>
                <dd>Hvordan hjælper dit produkt med at skabe en værdi for dine kunder?</dd>
                <dt>I midten hvor pilene mødes/match</dt>
                <dd>Et match er således at man mødes på midten, hvor de 3 hovedpunkter balancerer med hinanden. Det sker når kunden er tilfreds eller bliver begejstret over dine produkter, eller service (value proposition). Man stræber efter et match, ved at bruge værdifaktorer. De er svære at vedligeholde, men kunderne er altid dem der bestemmer. Hvis du ikke har et match, bør man overveje sine designs for sin value proposition.</dd>
            </dl>
        
        </div>
        
        <div id="kilder">
                <h5>Øvrige kilder</h5>
                    <p>Morten Kluw Wøldike Schmith powerpoint præsentation "BMC" - 9/10/2019<br>
                        
                    "Den digitale virksomhed – Syv arketyper", 10/11/2014, ERHVERVSSTYRELSEN<br>
                        
                    "Business Model Generation" 2015, Alexander Osterwalder og Yves Pigneur<br>
                        
                    Billeder: Morten Kluw Wøldike Schmith powerpoint præsentation "BMC" - 9/10/2019<br>
                    
                    <a href="https://www.youtube.com/watch?v=WzGhFmiB9G0">"Airbnb Business Model : What makes Airbnb so successful?", 4/8/2017, Business Disruptors</a><br>
                        
                    <a href="https://www.youtube.com/watch?v=IP0cUBWTgpY">"The Business Model Canvas - 9 Steps to Creating a Successful Business Model - Startup Tips", 5/9/2016, The Business Channel</a><br>
                     
                    <a href="https://www.youtube.com/watch?v=QgICyLzZ3og">"Business Model Canvas - et værktøj til at udvikle og disrupte forretningsmodeller", 5/1/2017, Josefine Campbell</a></p>
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