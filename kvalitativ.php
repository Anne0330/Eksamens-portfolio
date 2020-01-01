<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Kvalitativ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="kvalitativcss.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
    </head>
    <header>
        <h1>Kvalitative metoder</h1>
        
        <div id="introtekst">
             <p>Her kan du læse om hvad kvalitative metoder er, og hvordan man indsamler data.</p>
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
            <div id="kvaltekst">
                
                <h2>Kendetegnelser i kvalitativ undersøgelser</h2>
                
                    <p>Kvalitative metoder, kendetegnes ved et personligt interview. Det er hvor man vælger en fokusgruppe at kunne stille spørgsmål som virker mere som en venlig snak. Det er et interview med holdninger, tanker og debat. Interviewet kan også således gå lang tid, da man kan nemt komme ind på andre emner end man havde planlagt. Under interviewet kan man komme ind under flere emner, der kan enden kan tilføjes til det følgende start-emne eller man kan ende ud i ubrugelighed.<br>
                    Kvalitativ virker mere personligt og mere brugerbevidst, da det viser en form for interesse. Det viser at man gerne præcist vil vide, om brugeren er tilfreds; med hvad? Hvor tilfreds? Er der en specifik episode der gjorde det til en tilfreds oplevelse? Det er ledende svar, med flere ledende spørgsmål. Derimod vil det give stor mulighed for at afsender kan styre samtalen, og brugeren kan således spørge hvis de ikke forstod det. Det er et struktureret interview, som således skal fortolkes efterfølgende.<br>
                    Fordelen ved at bruge denne metode, er at kunne få reelle svar fra brugeren. Det er svar der kan forundres, fortolkes og analyseret. Der er mere detalje og mere at kunne arbejde med, hvor der således skal have et fiks. En dybere analysering af ansigtsudtryk, stemmefortolkning og kropssprog.<br>
                    Problemet ved disse metoder, kan således være at man ikke når at få alle svar. Derfor er kvantitative metoder bedre, hvis man skal have et ”aim” for at finde ud af hvor de kan blive bedre men på en overordnet basis. Men med kvalitativ, kan de specifik udpege et sted de kunne arbejde på.    
                    </p>
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
                    <a href="https://tovejs.dk/2019/07/17/transskribere/">"Det får du ud af at transskribere dine interviews", 17/07/2019, Albert Munsell.</a><br>
                    <a href="https://videnskab.dk/kultur-samfund/hvad-i-alverden-kan-man-bruge-kvalitativ-forskning-til">"Hvad i alverden kan man bruge kvalitativ forskning til?", 5/9/2013, Thomas Hoffmann</a><br>
                    <a href="https://tovejs.dk/2018/12/05/digital-analyse-2/">"Skal din kvalitative analyse være digital eller analog?", 5/12/2018, Charlotte Albrechtsen</a><br>
                    <a href="https://tovejs.dk/2019/12/12/feedback-paa-spoergsmaal-2/">"Derfor kan du ikke undvære feedback på dine spørgsmål", 12/12/2019, Charlotte Albrechtsen</a>
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