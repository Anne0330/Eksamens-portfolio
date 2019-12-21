<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Internettet's historie</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="internet.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <header>
        <h1>Internettet's historie</h1>
        
        <div id="introtekst">
             <p>Her kan du læse om internettet's historie og dens værdifulde perioder, hvor design og brugertest kommer i "konflikt" med hinanden.</p>
        </div>
    </header>
    
    <body> 
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
        
        <div id="htmltitel"> 
            <img src="htmltitelbillede1.jpg" alt="eye code" height="200px">
            </div>
            <div id="internettitel">
                <h2>Internettet's opstandelse</h2>
        </div>
        <div id="videointernet">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/21eFwbb48sE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
                
            <div id="videokilde">
                <a href="https://www.youtube.com/watch?v=21eFwbb48sE">Kilde</a>
                </div>
        
        <div id="internettettekst">
                
                <h3>World wide web</h3>
                
                    <p>Www er grundlagt af Tim Bernes-lee, hvor han blev inspireret af hans far som skrev artikler om hjernen. Tim blev nysgerrig omkring hvordan hjernen kommunikerede, hvorledes han begyndte og arbejde på www som kunne udvikle sig til at blive koblet sammen med computeren. Internettet er en fast struktur, hvor WWW (world wide web) kører på det. I forhold til standarderne for internettet kaldes for protokoller, hvor det er ligesom et regelsæt som fortæller hvordan computeren skal kommunikere. Ted Nelson var én af dem som udviklede systemet med hypertekst, som gør der er en forbindelse med forskellige elementer.</p>
                
                    <p>The world place of knowledge var et sted, hvor man kunne finde ALT viden. Det blev så udviklet til at blive den første søgemaskine, hvor der manuelt blev fundet info af medarbejdere som også tillod at angive der var andre informationer som kunne være relevant. Der blev så udviklet ”The Memex” som virker på samme måde som The world of knowledge, men hvor det var styret automatisk. Man navigerede sig rundt med nøgleord, hvor man så fik flere resultater med samme nøgleord.</p>
                
                <h3>Webbets perioder</h3>
                
                    <p>Som alt andet, er der perioder man er stolt over i sin fortid og andre gange er man skamfuld. Det skaber en nysgerrighed, på hvordan det gik for sig før man blev en del af den. Selv i internettets historie, var det først kun ’avaliable’ for få mennesker men efter noget tid blev det offentliggjort til alle. Det gjorde at mange fra forskellige lande, eksperimenterede med internettet. Internettet ændrer sig altid med design, funktion og kommunikation. For multimediedesignere er det vigtigt at vide hvad der er yt og hvad er nyt, så man kan tilpasse sig. </p>
        </div>
        
            <div id="internettekstendelto">
                <h4>Tidlige eksperimenter 1993-1995</h4>
                
                <img src="tidligereeksperiemnter.png" alt="tidligere eksperiementer">
                
                <p>&#8699;Mosaic (Den første browser med grafik) blev lanceret i samme år</p>
                <p>&#8699;Eksperimenterne om hvordan en hjemmeside skulle struktureres</p>
                <p>&#8699;Begrænsninger i HTML-sproget, som også gjorde det svært for browsere fortolkede siderne.</p>
                <p>&#8699;Kunstnere blev fascineret af platformen og gav bud på hvordan man kunne bruge hjemmesider til visuel fortælling.</p>
                
                <h4>Under konstruktion 1996-2000</h4>
                
                <p>&#8699;Virksomheder besluttede sig for at lave deres egen hjemmeside</p>
                <p>&#8699;Der var mange problemer, at der opstod en gif på hjemmesiden med en mand der graver, teksten ”under konstruktion”.</p>
                
                <h4>Webguruernes kamp</h4>
                
                <p>&#8699;David Siegel mente at man skulle designe hjemmesider med visuelt synspunkt.</p>
                
                <img src="gurubill.png" alt="guru periode">
                
                <p>&#8699;Jakob Nielsen mente hjemmesiden skulle være funktionel (brugervenlig) frem for visuel pæn.</p>
                
                <img src="nielsenbill.png" alt="Jakob nielsen">
                
                <h4>Semantisk søgning 2000-2003</h4>
                
                <p>&#8699;Google’s opstandelse.</p>
                <p>&#8699;Der blev anvendt en algoritme som kunne bedømme sidens indhold og betydning.</p>
                <p>&#8699;SEO blev anvendt.</p>
                <p>&#8699;Struktur og design skulle separeres, derved udviklede man CSS.</p>
                
                <h4>Det sociale web 2003-2010</h4>
                
                <p>&#8699;Ledelsen over internettet var ikke kun etablerede autoriteter, men brugerne.</p>
                <p>&#8699;Nyt web som hed web 2.0</p>
                <p>&#8699;Nyt begreb blev opfundet som hed ”den lange hale” af Chris Anderson.</p>
                <p>&#8699;Myspace udkom i samme periode, hvor derefter Facebook, youtube, twitter osv.</p>
                
                <h4>Det mobile web 2010-</h4>
                
                <p>&#8699;Da smartphones udkom, begyndte internettet at tage form.</p>
                <p>&#8699;Det betød at flere hjemmesider, skulle kunne tilpasse sig til de små skærme.</p>
                
        </div>
            <div id="kilderinternet">
                <p> Kilder: Niels Østergaard powerpoint præsentation "Internettet's historie og serverbegrebet".<br>
                <a href="historieonline.pdf">INKLUSIV BILLEDER - Hans-Christian Christiansen, "Online kommunikation" - ss. 346-371</a><br>
                <a href="https://www.history.com/news/who-invented-the-internet">Who Invented the Internet? - EVAN ANDREWS, OCT 28 2019</a></p> 
            </div>
 
        <div class="footer">
            <p>Anne Mehlsen &#169; Læringsportfolio 2019-</p>
        </div>

    </body>
</html>