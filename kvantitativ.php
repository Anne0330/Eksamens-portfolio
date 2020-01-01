<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Kvantitativ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="kvantitativcss.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
    </head>
    <header>
        <h1>Kvantitative metoder</h1>
        
        <div id="introtekst">
             <p>Her kan du læse om hvad kvantitative metoder er, og hvordan man indsamler data.</p>
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
            <div id="kvantekst">
                
                <h2>Kendetegnelser i kvantitative undersøgelser</h2>
                
                    <p>Kendetegnet for kvantitative metoder, er således en form for spørgeskema. Kvantitative metoder bliver brugt formentlig i en anledning af markedsundersøgelse, som når Yousee sender en mail omkring hvor godt du synes om deres abonnement, ved at krydse et elektronisk spørgeskema af. Under disse spørgeskemaer, er det svært at få et præcist svar da deres svar bliver udregnet som en statistik. Da spørgeskemaet primært er berørt at man sætter et kryds i det der er tættest på det man føler, i stedet for hvis man lavede et interview/Kvalitativ metode.<br>
                    Dette er et eksempel på et spørgeskema, som kunne være fra hvilket som helst firma, der ville have en brugerundersøgelse. Der kan man analysere sig frem til, du har kun 1 kryds til at uddybe din tilfredshed. Hvad nu hvis du var i mellem 5 og 6? Så vil man tænke over, hvordan ens svar bliver behandlet af modtageren. Derfor, kan man ikke altid stole på at det er oprindelige svar man får, ved at lave online spørgeskemaer.</p>
                
                <img src="sporgeskema.png" alt="spørgeskema" width="100%">
                
                <a href="https://tovejs.dk/2017/01/26/dine-respondenter-kan-ikke-svare-paa-dit-spoergeskema/">Kilde</a>
                
                <p>Der bliver yderligt nævnt I artiklen, at spørgsmålet er svært at forstå. Hvilket kan være en svær ting, når det gælder den kvantitative metode med spørgeskema. Hvis afsender ikke har uddybet sit spørgsmål ”nok”, vil modtageren kunne læse det på en anden facon.<br>
                Fordelen ved kvantitative metoder, er at man kan nemt række ud til folk og hurtigere svar. Det eneste modtageren skal gøre, er at svare kort til enkelte spørgsmål og endda behøver man ikke engang at have menneskelig kontakt. Det tager kun 5 minutter, og så er man fri igen til at gøre det man har lyst til. Det er perfekt i forhold til at lave en statistik, for at få et overblik af det man vil have svar omkring.<br>
                Ulempen ved kvantitative metoder, er at man aldrig kan være helt sikker på det svar brugeren giver. Der kan opstå misforståelser, eller andre forstyrrelser som afsender ingen kontrol har. Der er mange brugere, som giver et svar ud fra hvor de er, hvem de er sammen med eller usikkerhed i spørgsmålet.</p>
        </div>
      
        
        <!-- der er et kæmpe mellemrum i mobil version og kan ikke fikse det.-->
        
        <div id="research">
            <h2>Research paradigmer</h2>
            
            <img src="researchparadigmer.png" alt="Research paradigmer" width="70%">
            
            <a href="researchparadigmer.pdf" target="_blank">Tryk her for at se en større format.</a>
            
            <h3>Data indsamling</h3>
                <p>Primær data er data der er opnået ved direkte kontakt med en målgruppe, så som observationer, personlige interviews mm.<br> 
                Sekundær data er opnået hvor der ikke er direkte kontakt imellem målgruppen og afsender/researcher. Det kan være alt fra online spørgeskemaer, databaser, statistikker mm.</p>
            
            <img src="datakilder.png" alt="data kilder" width="70%">
            
        </div>
 
            <div id="kilder">
                <h5>Øvrige kilder</h5>
                    <p>"Kommunikation i multimediedesign" 2015, Anne Mette Busch: Kapitel 6<br>
                    "Research paradigme" og "Data kilder" billeder er lånt fra Morten Kluw Wøldike Schmith Powerpoint præsentation "Brugertest og metode", 1/10/2019.<br>
                    <a href="https://tovejs.dk/2017/01/26/dine-respondenter-kan-ikke-svare-paa-dit-spoergeskema/">"Dine respondenter kan ikke svare på dit spørgeskema", 26/7/2017, Charlotte Albrechtsen.</a><br>
                </p>
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