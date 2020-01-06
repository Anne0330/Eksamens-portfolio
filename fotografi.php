<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Fotografi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="fotocss.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
    </head>
    <header><!--introduktion-->
        <h1>Fotografi</h1>
        
        <div id="introtekst">
             <p>Dette er en kæmpe grey zone for mig, da det stadig er et helt 'nyt' emne. Har sjældent holdt et kamera, og specielt når den ikke har været på "auto". Her kan du læse lidt om fotografi og de forskellige egenskaber.</p>
        </div>
    </header>
    
    <body> 
        <!--til top knap-->
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
           <!-- php start-->
        <?php include "menu.inc"; ?>
            <!-- php slut-->
        
        <div id="htmltitel"> <!--banner-->
            <img src="nummer2banner.jpg" alt="Design" height="200px">
        </div>
<section><!--kamera indhold-->
        <div class="kameraanotomi">
                
                <h2>Kameraet og dens egenskaber</h2>
                
                    <img src="kameraautonom.png" alt="kamera anatomi" width="60%">
                    <img src="reflexspejl.png" alt="reflex spejl" width="70%">
                <ul>
                    <li>Kameratyper</li>
                    <li>Lukker</li>
                    <li>Lukkertid</li>
                    <li>Blænde</li><li>Dybdeskarphed</li>
                    <li>ISO</li>
                </ul>
        </div>
        
        <div id="objektiv">
            <h3>Objektiver</h3>
                <img src="kameraobjektiver.png" alt="Objektiver" width="70%">
                    <p> Der findes forskellige objektiver til kameraet, som kan give et boost i forhold til hvordan du tager billeder. Det vedrører længde/afstand, landskab, fritid osv.</p>
        </div>
        
        <div id="brendevidde">
            <h3>Brændevidde</h3>
                <img src="kameraview.png" alt="brændevidde" width="70%">
                    <p>Brændevidde på forskellige afstand, kan give forskellige resultater, om det er objektivet man bruger til at zoom eller flytter på kameraet's fysiske form.</p>
        </div>
        
        <div id="shutter">
            <h3>Lukker</h3>
                <img src="lukker.png"alt="lukker/shutter" width="70%">
                    <ul>
                        <li>Jo længere lukkertid, jo lysere billede</li>
                        <li>Jo længere lukkertid, jo mere bevægelsessløring og rystelser</li>
                        <li>Synkronisering med flash, typisk 1/125s</li>
                    </ul>
                        <img src="shutterspeed2.jpg" alt="shutter speed" width="70%">
            
            <h3>Lang eksponering</h3>
                <img src="eksponering.png" alt="lang eksponering" width="70%">
            
            <h3>Hurtig eksponering</h3>
                <img src="eksponering2.png" alt="hurtig eksponering" width="70%">
            
        </div>
        
        <div id="blende">
            
            <h3>Blænde</h3>
                <img src="blende.png" alt="blænde" width="70%">
            
            <h3>Dybdeskarphed</h3>
            
                <img src="lilleabning.png" alt="lille blænde" width="70%">
            
                    <p>Lille blændeåbning/højt brændetal / f22</p>
            
                        <img src="storabning.png" alt="stor åbning" width="70%;">
            
                            <p>Stor blændeåbning/lavt blændetal - f2.8</p>
          
        </div>
        
        <div id="iso">
            <h3>ISO - Følsomhed</h3>
            
                <ul>
                    <li>Filmen/kameraets lysfølsomhed</li>
                    <li>Film var fremstillet med højere ISO/ASA. Jo mere lysfølsom, jo grovere korn. En film kunne presses under fremkaldelsen.</li>
                    <li>Et digitalkamera har justerbar ISO.</li>
                    <li>Jo højere (hurtigere) ISO, jo mere “støj” fra sensoren ses i billedet.</li>
                </ul>
                    <img src="iso-hest.png" alt="iso grynet" width="70%">
        </div>
      
        <div class="begreber">
            <h3>Kamera indstillinger</h3>
                <dl>
                    <dt>Manuel / M</dt>
                    <dd>Manuel indstilling af både blænde og lukkertid </dd>
                    <dt>Tidsforvalg / Tv</dt>
                    <dd>Du indstiller lukkertiden, og kameraet beregner blænde.</dd>
                    <dt>Blændeforvalg / Av</dt>
                    <dd>Du indstiller blænde, og kameraet beregner lukkertiden.</dd>
                    <dt>Program / P</dt>
                    <dd>Kameraet forsøger at balancere blænde og lukkertid - etkompromis uden din medvirken.</dd>
                    <dt>Den grønne</dt>
                    <dd>Undgå den grønne, da du risikerer at flashen anvendes automatisk.</dd>
                    <dt>Øvrige programmer</dt>
                    <dd>Forskellige “shooting modes” hvor programmet er optimeret til en bestemt type billeder, men hvor du som fotograf ikke har kontrol - vi anvender dem ikke</dd>
                </dl>
            
        </div>
        
        <div class="billedehandtering">
            <h3>Billede håndtering</h3>
            
               <ul>
                    <li>RAW format er det som kameraets sensor “opfatter” uden at være bearbejdet, hvilket er fortrukket at bruge i redigering.</li>
                   <li>JPEG er et komprimeret og “glossy” format, som er behandlet af kameraet.</li>
                </ul>
        </div>
        
       
        <div id="lys">
            <h3>Blødt vs hårdt lys</h3>
            
                <img src="lys.png" alt="blødt og hårdt lys" width="70%">
          

        </div>
            
</section>       
            <div id="kilder">
                <h5>Øvrige kilder</h5>
                    <p>Niels Østergaard PDF præsentation "Introduktion til fotografering" - 15/11/2019<br>

                    <a href="https://www.linkedin.com/learning/learning-product-photography/welcome?u=37312532">"Learning Product Photography", 23,3,2016, Joseph "PhotoJoseph" Linaschke</a><br>

                    <a href="https://www.linkedin.com/learning/photography-for-graphic-designers/welcome?u=37312532">"Photography for Graphic Designers", 31/5/2017, Ben Long</a>
                    </p>
                
            </div>
        <!--footer-->
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