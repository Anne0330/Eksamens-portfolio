<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>One page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="onepage.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
    </head>
    <header>
        <h1>One page projekt</h1>
        
        <div id="introtekst">
             <p>En ”one page” er således en enkelt hovedside på et website, hvor alt information står uden undersider. Under dette forløb, skulle vi kode en side, der omhandlede et produkt vi havde trukket af tilfældighed.</p>
        </div>
    </header>
    
    <body> 
        <!--til top knap-->
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
           <!-- php start-->
        <?php include "menu.inc"; ?>
            <!-- php slut-->
        
  <section>   <!--indhold-->   
        <div id="baggrund">
                
                <h2>Baggrund</h2>

                    <p>En ”one page” er således en enkelt hovedside på et website, hvor alt information står uden undersider. Med vores erfaring og læringsforløb med design thinking, kunne vi bruge det til at lave en one page. Opgaven lød på at vi skulle trække en tilfældig pose, hvor der ville være en et produkt som vi skulle lave en one page ud fra. Med min studiegruppe på to-mand, arbejdede jeg sammen med Emilie. I vores tilfælde, fik vi trukket produktet ”Rugbrøds snacks”.</p>
                        
                        <img src="brodsnacks.jpg" alt="brødsnakcs" width="70%">
        </div>
        
        
        <div id="projekt">
            
            <h3>Brainstorming og problemstilling</h3>
            
                <p>Med design thinking metoden, kunne vi lave et skema omkring vores proces. Vi startede ud med at lave en brainstorm omkring vores produkt, hvor i kom med emner eller situationer hvor brød snacks kunne komme i spil. Det tog et par timer, da vi gerne ville have alle muligheder med som vi kunne. Dette er vores brainstorm, som vi skulle arbejde ud fra.</p>
                    
                    <img src="brainstorm.jpg" alt="brain storm" width="70%">
                
                <p>Vi lavede en af sortering, hvor vi sammen tog en beslutning at afskaffe emnerne vi ikke mente der var nok kød på. Vi kom lidt på afveje, da vi skulle vælge et emne der kunne virke interessant og vi ville gerne være unikke. Vi endte dog med til sidst at gå med ’Sundhed’ og ’DIY/Do it yourself’. Vi tog en kvalitativ tilgang ved at lave spørgsmål, for at vi kunne få noget data omkring vores brød snacks med en tilgang af sundhed og DIY.</p>
            
            <h3>Design og produktion</h3>
            
                <p>Efter en længere samtale med min partner, blev vi enige om at lave en one-page med opskrifter som havde en skjult promotion på vores brød snacks. Derfra skulle vi lave et moodboard og styletile, som skulle vise atmosfæren af ’hygge’, ’kreativitet’ og ’unisex’. Vi ville også gerne have et rustik, men stadig moderne tema til vores hjemmeside. Derfor gik vi op i at der var neutrale farver, med en typografi til overskriften skulle være i skråskrift og brødteksten skulle være nem at læse, da idéen var at børn også skulle kunne læse siden.<br> 
                Dette blev vores moodboard og styletyles, men se bort fra grøntsagerne da det var en inspiration til webudviklerne.</p>
            
                    <img src="design.jpg" alt="moodboard og styletiles" width="70%">
            
                <p>Det var et krav at vores hjemmeside skulle være responsiv, som skulle kunne passe til ’mobil’, ’tablet’ og ’desktop’. Der blev lavet wireframes på et design valg, som vi kunne gå ud fra og bruge som guide til kodning. Vores mål var at vi ville have at de tre skærmstørrelser, skulle have deres eget design af positionering. Da wireframes fylder, har jeg valgt at du kan trykke på disse links nedenfor og se vores wireframes i pdf-fil så du kan se forskellen.</p>
        </div>
        
        <div id="links">
            
                    <a href="one%20page%20hummus%20-%20mobil%20ver..pdf" target="_blank">Mobil version.</a>

                    <a href="one%20page%20hummus%20-%20tablet%20ver..pdf" target="_blank">Tablet version.</a> 
            
                    <a href="website%20wireframe%20.pdf" target="_blank">Desktop version.</a>
        </div>
        
        <div id="resten">
            
                <p>Da vi mente at en opskrift ikke var unik, eller havde sin egen personlige træk, besluttede vi os for at blive udfordret. Der skulle tages billeder med den rigtige setting, samt arbejdede vi med et personligt logo til hjemmesiden.</p>
                
                    <img src="logo.jpg" alt="logo" width="70%">
            
                <p>Efter mange dage i produktion af hjemmesiden, holdte vi på sporet af vores ide og skema. Der blev brugt et par dage på at kode, da vi ville have det til at fungere og vi stødte tit ind i problemer med vores programmer. Dog slog det os ikke ud, for vi endte med et produkt vi var fult tilfredse med.</p>
        </div>
        
        <div id="link">
            
                <p>Tryk på <a href="http://anne2p14.apache.eadania.dk/hummusonepage/onepage.html?fbclid=IwAR2vodESTMsc22Fnidj8tYoZn7d8AmDmyDuI_pXWyyYSVzmIaQhwYblDoUg" target="_blank">dette link her</a>, for at se vores resultat af one-page projektet. OBS: Baggrunden kan være splittet, da opløsning er høj.</p>
        </div>
    </section>   
        <!--footer-->
        <div class="footer">
            <p>Anne Mehlsen &#169; Læringsportfolio 2019-</p>
        </div>
    <!--javascript-->    
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