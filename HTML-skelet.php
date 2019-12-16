<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS%20skelet.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <header>
        <h1>Mit portfolio</h1>
        <!-- malplaceret undertitel-->
        <p>Undertitel</p>
        <!-- skal mit logo måske være et banner???-->
        <img src="logo.png" alt="logo" width="200px">
    </header>
    
    <body>
         <!-- php start-->
    <?php include "menu.inc"; ?>
    <!-- php slut-->
        
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