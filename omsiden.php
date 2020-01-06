<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Om siden</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="omsiden.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
    </head>
    <header><!-- intro-->
        <h1>Om siden</h1>
        
        <div id="introtekst">
             <p>Her kan du læse om siden's udvikling og tankerne bag valgte elementer, samt en refleksion fra at lave denne eksamens projekt.</p>
        </div>
    </header>
    
    <body> 
        <!-- til top knap-->
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
           <!-- php start-->
        <?php include "menu.inc"; ?>
            <!-- php slut-->
        
<section><!-- om udvikleren-->
        
        <div id="profil">
                
                    <img src="profil.jpg" alt="profil" width="70%">
        
                        <p>Mit navn er Anne og jeg er 22 år gammel. Det sted billedet er taget, har været min 'arbejdsplads' når jeg ikke var på skolen. Det er her, alle de dage med frustrationer og forfærdelige beslutninger blev taget. Dette er mit udarbejdede portfolio, som jeg har haft en måned til at færdiggøre. Denne enkelte side omhandler om min udvikling med dette portfolio, på både godt og ondt.</p>
        </div>
            
</section>

        <!-- Siden's historie-->
<section>
    
        <div id="historie">
            
                <p>Jeg vil starte med at sige, at hvis jeg havde tid nok, havde denne side set meget mere anderledes ud. Kodningen havde set væsentlig pænere ud, men det må jeg leve med fra nu af. Jeg regner med at arbejde videre med dette portfolio, eller laver et helt spritnyt design. Jeg kan komme med mange ting der kunne ændres på denne side, men taget betragtning af at det vil tage et par dage at lave om og den skal afleveres indenfor 50 timer, er det nok ikke det bedste valg.</p>
            
                <p>Startede med alt det teoretiske der skulle skrives, da vi fik offentliggjort projektet den 2. december. Lavede en tidsplan der holdte stik med det teoretiske, men gik lidt ned af bakke da jeg nåede kodningen. Delte mine emner op ved hjælp af kortsortering &#40;Tak til familien derhjemme&#41;, hvor jeg kunne starte med et hovedemne ad gangen og færdiggøre på den måde.</p>
            
                <p>Da alt det skriftlige var på plads, kunne jeg lave et moodboard og wireframe. Det tog ikke lang tid, før jeg besluttede mig for at vælge et specifikt billede at gå efter.</p>
            
                    <img src="bts%20tear.jpg" alt="bts tear album" width="70%">
                
                <p>Da jeg kiggede efter inspiration, var jeg opsat på at det skulle være personligt og ikke bare en farve uden betydning. Så det slog mig, at dette billede er fra et album på BTS – Love yourself: Tear hvor jeg var til koncert i Amsterdam. Det var den fedeste oplevelse, men ikke mindst farverne. Jeg husker farverne blev vist på en lightstick under koncerten, hvilket kunne ligne en idyllisk stjerne nat. Der blev modificeret i nogle af farverne til at kunne passe bedre sammen, men er tilfreds med dem det blev til.</p>
            
                    <img src="color-palette.png" alt="color palette" width="70%">
                
                <p>Da jeg ville starte med at kode, var mit primære mål at det bare skulle passe til diverse skærmstørrelser. Det betyder at der er breakpoints men der er IKKE brugt grids. Selvfølgelig ærgrer jeg over det den dag i dag, men så længe den passede til en average mobil, tablet og desktop, så var jeg nogenlunde tilfreds. Set tilbage, skulle jeg nok have brugt grids, selv hvis tingene er ovenpå hinanden. Brugte min egen mobil &#40;Iphone 8 plus&#41;, Ipad og Desktop til at vurdere. Oplevede alt for mange problemer igennem kodningen, hvor billeder stoppede med at blive ændret medmindre jeg lavede et nyt php-dokument. Der har været aggressive situationer og forfærdeligt mange stressmomenter, hvor det lykkedes at holde mig selv vågen til sent på natten når intet virkede. Men det slog mig ikke ud, da kodning har lært mig at være stædig og finde fejlen.</p>
    </div>
    
<section><!-- video sektion-->
    
    <div id="video">
            <h3>Siden's layout før der blev kasseret ting</h3>
                
                <video width="320" height="240" controls>
                      <source src="video2.mp4" type="video/mp4">
                </video>
                
                <video width="320" height="240" controls>
                      <source src="video1.mp4" type="video/mp4">
                </video>
    </div>
        
</section><!-- slut på video sektion-->
    
<section><!--billede sektion forklaring-->
    <div id="billede">
            
            <h3>Valg af billeder</h3>
            
                <p>Først og fremmest, er jeg godt klar over det kunne godt virke som en narcissistisk side med alle de billeder af mig selv. Der er en forklaring til de fleste, men når jeg ser tilbage på det, gør de billeder også hjemmesiden personlig. Der er ingen grund til at gemme udvikleren, right?</p>
            
                    <img src="chillforside.jpg" alt="profil" width="70%">
            
                <p>Dette billede skulle slet ikke bruges, men da jeg havde sat det ind på mit skelet og udformet det til resultat, stoppede det hele med at virke. Der kunne ikke ændres på billedet, men tanken om at skulle lave et nyt php-dokument bare for at skifte et billede jeg egentlig ikke var utilfreds med, virkede som spildt tid.</p>
                
                    <img src="htmltitelbillede1.jpg" alt="html profil" width="70%">
                
                <p>Fik inspiration af at lave dette billede, fordi jeg så en video på instagram.<br>Den kan ses hvis
                    <!--link-->
                    <a href="https://www.instagram.com/p/BNpVccthJ7N/?utm_source=ig_web_copy_link">du klikker her.</a></p>
            
                <p>Der står informationer om udvikleren i små hints, hvis man altså ved hvordan html skal læses. Det var et sjovt forsøg på at lege både med photoshop og illustrator, for at få dette resultat. Humor blev også smidt ind, da det har lidt af en betydning hvordan jeg fremstiller ting eller laver dem. Idéen var nu også en form for indflydelse, at fra nu af har jeg webudvikling i blodet/på hjernen.</p>
                
                <p>Under hele den her proces, har jeg bestemt lært en masse og specielt på fag jeg var usikker på i starten. Der er klart nogle ting jeg vil ændre, i forhold til dette portfolio og det er essensen af at lære. Man skal fejle, før det sidder på rygraden.</p>
        </div>
    
</section>
        
           
        <div class="footer">
            <p>Anne Mehlsen &#169; Læringsportfolio 2019-</p>
        </div>
    
<!-- start på javascript-->
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
    
    <!--slut med javascript -->

    </body>
</html>