<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS%20skelet.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
    </head>
    <header>
        <h1>Mit portfolio</h1>
        <!-- skal mit logo måske være et banner???-->
        <img src="logo.png" alt="logo" width="200px">
        <!-- malplaceret undertitel-->
        <p>Undertitel</p>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        
        <!-- Her starter mit javascript-->
        <script>
          window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
    }
    }
            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
            document.body.scrollTop = 0; // For Chrome, Safari and Opera
            document.documentElement.scrollTop = 0; // For IE and Firefox
        }  
        </script>
        <!-- her slutter mit javascript-->
    </header>
    <body>
         <!-- php-->
    <?php include "menu.inc"; ?>
    <!-- php slut-->
    <div class="content">
        <!-- forhåbentlig kommer der en menu bar her-->
        <p>Menubar</p>
        <!-- Her skal kategorierne være som billeder med beskrivelse, hvis man ikke vil bruge menu baren. Det skal stå som titel, info og billede-->
    <section>
        <img src="Billede1.jpg" alt ="bill til webudvikling" width="400px"> 
        <h2>Webudvikling</h2>
        <p>Info omkring webudvikling</p>
    </section>
    <section>
        <img src="billede2.png" alt="bill til kommunikation" width="400px">
        <h2>Kommunikation</h2>
        <p>Info omkring kommunikation</p>
    </section>
    <section>
        <img src="billede3.jpg" alt="bill til Design" width="400px">
        <h2>Design</h2>
        <p>Info omkring Design</p>
    </section>
    <section>
        <img src="billede4.jpg" alt="bill til Projekter" width="400px">
        <h2>Projekter</h2>
        <p>Info omkring Projekter</p>
    </section>
    <section>
        <img src="billede5.jpg" alt="bill til om siden" width="400px">
        <h2>Om siden</h2>
        <p>Info omkring siden</p>
    </section>
        <!-- Her skal min footer være-->
    <section>
        <img src="logo.png" alt="bill til logo" width="200px">
        
        <p>tilbage til toppen</p>
        <p>kontakt info</p>
    </section>
        </div>
 
    </body>
    
</html>