<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Kommunikation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="antagelsercss.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
    </head>
    <header>
        <h1>Kommunikation</h1>
        
        <div id="introtekst">
             <p>Det er vigtigt at kunne kommunikere med sine kunder, da man skal være på samme spor i anledning af arbejdet. Som multimediedesigner, skal man kunne vide kundens ide og visualisere det. Derfra skal man også kunne indsamle data, ud fra interviews og spørgeskemaer. Der er forskellige kommunikationsmodeller, som er essentiel i forhold til hvordan man vil indsamle data. Her kan du læse om de fem grundantagelser, som er forskellige typer af kommunikation.</p>
        </div>
    </header>
    
    <body> 
        <!--til top knap-->
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
           <!-- php start-->
        <?php include "menu.inc"; ?>
            <!-- php slut-->
        
        <div id="htmltitel"> <!--banner-->
            <img src="communication.jpg" alt="kommunikation" height="200px">
        </div>
        
 <section>   <!--indhold-->   
        <div id="kommunikationtekst">
            <h2>Forskellige former for kommunikation</h2>
                <p>Der er forskellige typer for kommunikation, som er Skriftlig, Verbal, Non-verbal og det visuelle.<br> 
                Skriftlig kommunikation er alle former for skriftlige samtaler, e-mails og bøger. Verbal kommunikation er alle former for talte samtaler, som er den mest udbredte form for kommunikation.<br> 
                Non-verbal kommunikation er alt det man ikke siger, men ser. Det er alt fra kropssprog til gimmick og tøjstil. Der er en væsentlig del i det non-verbale, der præger troværdigheden inden for den verbale kommunikation og hvordan den skal tolkes.<br> 
                Den visuelle kommunikation er alt det grafiske, såsom billeder, grafer, moodboards og styletiles. 
                </p>
        </div>
        
        <div id="grundantagelser">
            <h2>De 5 grundantagelser</h2>
                <dl>
                    <dt>1. Man kan ikke ikke-kommunikere</dt>
                    <dd>Enhver form for adfærd kommunikere noget.</dd>
                    <dd>Kropssprog, øjenkontakt eller mangel på, tøj, ubevidste handlinger, vaner.</dd>
                    <dd>Omverden reagerer så på den tilstedeværelse de observerer, selvom personen ikke bevidst kommunikerer noget.</dd>

                    <dt>2. Kommunikationens to dele: Selve indholdet om emnet og oplysninger om det indbyrdes forhold mellem de som kommunikere.</dt>
                    <dd>Opfattelsen af kommunikationen er afhængig af relationen mellem de parter der kommunikerer - kollegaer, venner mm.</dd>
                    <dd>Inside-jokes fortolkes forskelligt fra din bedste ven, end til din chef.</dd>
                    <dd>Kommunikationen har en base-line med gensidig respekt fra da man starter med ikke at kende hinanden fx. lighed mellem elever - den respekt fortsætter så i et arbejdsmiljø med et hierarki man genkender.</dd>

                    <dt>3. Fortolkning og forhold</dt>
                    <dd>Tonefald, mimik, kultur påvirker hvordan kommunikationen fortolkes af parterne.</dd>
                    <dd>Kulturchok.</dd>

                    <dt>4. Digital og analog kode</dt>
                    <dd>Forskellen på hvad der faktisk siges og hvordan man siger det.</dd>
                    <dd>Fungerer samme måde på skrift.</dd>

                    <dt>5. Symmetrisk og asymmetrisk kommunikation, lighed eller magt</dt>
                    <dd>Formel ligestilling fx. på arbejdesmiljø.</dd>
                    <dd>Uformel ligestilling fx. mellem venner.</dd>
                    <dd>Ydre ramme, mentale indstilling.</dd>
                </dl>
        </div>
</section> 
 <!--kilder-->
            <div id="kilder">
                <h5>Øvrige kilder</h5>
                    <p>Morten Kluw Wøldike Schmith PDF præsentation "Kommunikationsteori MMD 1. semester" - 12/9/2019<br>
                    
                    Morten Kluw Wøldike Schmith PDF præsentation "Præsentationsteknik - præsentation" - 19/9/2019<br>
                    "Kommunikation i multimediedesign" 2015, Anne Mette Busch: Kapitel 1, 5, 7, 8, og kapitel 22.<br>
                    
                    <a href="Present%203%20pp.%2027-44.pdf">"Present and perform" kapitel 3, Mette hald</a><br>
                    
                    <a href="Mette%20Hald.pdf">"Præsentation og formidling", 2008, Mette Hald.</a><br>
                    
                    <a href="https://www.dr.dk/drtv/episode/taler-du-kropssprog_47355">"Taler du kropssprog?", 7/5/2017, DR.dk</a><br>
                    
                    <a href="https://www.youtube.com/watch?v=htjumQCdTnY">"Johari Vinduet", 8/7/2013, Forklar mig lige</a><br>
                    
                    <a href="https://www.youtube.com/watch?v=KbSPPFYxx3o">"Life After Death by Powerpoint -Corporate Comedy Video", 9/11/2009, Don McMillan</a><br>
                   </p>
            </div>
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