<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Brugertest</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="brugercss.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
    </head>
    <header>
        <h1>Brugertest</h1>
        
        <div id="introtekst">
             <p>Her kan du læse om hvad brugertest er, og hvilke forskellige metoder der, for at kunne lave en brugertest.</p>
        </div>
    </header>
    
    <body> 
        <!--til top knap-->
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
           <!-- php start-->
        <?php include "menu.inc"; ?>
            <!-- php slut-->
        
        <div id="htmltitel"> <!--banner-->
            <img src="communication.jpg" alt="Design" height="200px">
        </div>

<section>
        <div id="brugertekst">
            <h2>Målet med brugertest</h2>
                <p>En brugertest er en metode der bruges under hele forløbet med sit projekt, eller udviklingen. Det viser om brugeren kan bruge dit produkt, eller et produkt som du laver research på. En brugertest bruger ofte metoden at få brugeren til at ”tænke højt”, hvor de skal fortælle alle sine tanker imens de går igennem brugertesten. Derfra kan man få nye ideer, udvidelser, finde fejl og overvejelser.<br>
                Det handler om at forstå brugerens behov, adfærd, motivation og antagelser. Der bruges tit denne undersøgelse, for at finde fejl i produktet eller blive bekræftet for en ny ting man har tilføjet. Når man inddrager brugeren, bliver de en del af projektet som en medudvikler. Det er en tommelfingerregel at bruge brugertesten så tit som muligt, når man er i gang med forløbet.</p>
                
                <p><q>Fail fast</q> - Niels Østergaard</p>
                
                <p>Ved at fejle tidligt i forløbet, hjælper det med at få identificeret fejlen før det er for sent. Derfor er det vigtigt at teste, efter hver fase.<br>
                Formålene med en brugertest er også om de kan finde rundt i indholdsstrukturen, forstå navigationen og de anvendte funktioner. Der skal understreges, at én brugertest er ikke nok til at kunne bruge det som det eneste resultat. Mennesker opfatter ting forskelligt, og det er vigtigt at have flere resultater at kunne gå igennem.</p>
        </div>
        
        <div id="modeller">
            <h2>Brugertest modeller</h2>
            
                <img src="brugertest.jpg" alt="brugertest" width="70%">
            
            <h3>Gangstertesten</h3>
                <p>Grunden til det hedder en ’gangster’ test, er fordi det er opfundet efter at man forestiller sig at man bliver kidnappet. Bind for øjnene og smidt i et bagagerum, hvor du så bliver kørt langt væk. Man bliver så sluppet fri igen, men du har ingen anelse om hvor du befinder dig. Derfor kræver det dine sanser, til at antage hvilken vej er hjem.<br>
                Det gælder også for denne gangster test inden for hjemmesider, hvor man ligger fokus på informationsarkitekturen. Du skal kunne smide en person ind på en hjemmeside, for at teste om de kan navigere rundt eller tilbage til forsiden (hjem). Det hjælper dig med at finde ud af, om der mangler en stifinder, søgemaskine eller en anden form for navigation. Der skal være hjælpeværktøjer, til at kunne give brugeren en forståelse på hvor de er.</p>
            
                <p>
                Mere præcist, undersøger man om der er:<br>
                En samlet struktur, der gør der er en sammenhæng. Som kan være vores informationsarkitektur, hvor det fortæller om der er hierarkier, niveauer og grupperinger.<br>
                Værktøjer til at bevæge sig rundt i strukturen, hvilket der udgør om der er en menu, navigation eller sitemap.<br>
                Navngivning og sprog: Om hvorvidt titlen hænger sammen med indholdet, eller andre hjælpemidler som har en titel.<br>
                Søgning: Er det muligt at kunne søge sig frem til målet, hvis der ikke er brødkrummer nok?</p>
            
            <h4>Man kan stille sig disse spørgsmål, når man laver brugertesten</h4>
            
                <dl>
                    <dt>Hvilken hjemmeside er du på?</dt>
                    <dd>Er der logo, der erkender hvem der ejer den?</dd>
                    <dt>Hvad er der på hjemmesiden?</dt>
                    <dd>Skab et overblik, hvad kan du spotte på hjemmesiden?</dd>
                    <dt>Hvilken underside er du på?</dt>
                    <dd>Er der en titel, eller kategori?</dd>
                    <dt>Hvilke muligheder har du på denne side?</dt>
                    <dd>Er der en menu, links, knapper eller andre funktioner?</dd>
                    <dt>Hvordan er du kommet hertil?</dt>
                    <dd>Er der brødkrummer der fortæller dig hvordan du er kommet dertil?</dd>
                    <dt>Er det muligt at kunne søge efter målet?</dt>
                    <dd>Er søgefeltet nemt at finde?</dd>
                </dl>
            
            <h3>Kortsortering</h3>
            
                <p>Kortsortering er en nem måde at gruppere sine emner, eller elementer på sin hjemmeside. Det har en sammenhæng med informationsarkitektur, hvor ved kortsortering giver en test på om den metode der er brugt (LATCH) er til at forstå for brugeren.<br>
                En metode hvor man tager brugeren med ind på hjemmesiden, før den er udviklet. En stak kort med emner bliver lagt foran en testbruger, hvor de således skal gruppere dem i forskellige grupper, efter hvad brugeren mener der hænger sammen. Brugeren får også lov til at give sine grupper en titel, som man så kan forholde sig til. Det giver et overblik for udvikleren, så der er en bedre forståelse på hvordan brugeren sorterer det. Det kan give en afkræftelse eller bekræftelse, på sine antagelser med navigation.</p>
        </div> 
        
        <div id="videnskab">
            <h2>Videnskabsteori</h2>
            
                <p><q>Vi ser ikke alle sammen ens på hele verdenen. Derfor må vi antage at noget er som vi selv ser det. Vi må antage at andre har andre synspunkter/meninger</q> - Morten Kluw Wøldike Schmith</p>
            
                <p>Videnskabsteori defineres om videnskab. Det bekræfter sig med spørgsmålet, hvad er videnskab egentlig og hvordan producerer man viden? I teorien, er det søgen efter sandheden. Videnskabsteorien hjælper med at gøre sig bevidst om sine (ubevidste) valg og fravalg. Til at man kan komme bagom den umiddelbare viden, og afkode de forudsætninger der ligger grund til det.</p>
            
            <h3>Positivisme</h3>
            
                <p>Beskæftiger sig med hårde fakta, som består af sikker viden, og det der er tilbage efter vi har fjernet det, vi tror at vide.Viden er indsamlet baseret af en objektiv dataindsamling med henblik på at analysere sig frem til at formulere regelmæssigheder. Der bruges teorier og hypoteser, som kan testes.</p>
            
            <h3>Hermeneutik</h3>
            
                <p>Beskæftiger sig med humanistiske videnskaber, og fortolkning. Det er baseret på empati/indføling og subjektiv fortolkning af omverdenen, hvor der er ingen endegyldig sandhed. Der vil være flere fortolkninger som komplimenterer hinanden frem for at udelukke hinanden.</p>
            
            
            <img src="understand.png" alt="forstå og fortolkning" width="70%">
        </div>
    
 </section> <!--kilder-->      
        <div id="kilder">
                <h5>Øvrige kilder</h5>
                    <p>Brugertest billede: "Usability" - Ole Gregersen og Ian Wisler-Poulsen, 2018, s. 26<br>
                    "Usability - Testmetoder til mere brugervenlige websites på internettet" 2018, Ole Gregersen og Ian Wisle-Poulsen<br>
                    "Research paradigme" og "Data kilder" billeder er lånt fra Morten Kluw Wøldike Schmith Powerpoint præsentation "Brugertest og metode", 1/10/2019.<br>
                    "Brugertest og metode" powerpoint præsentation, 1/10/2019, Morten Kluw Wøldike Schmith<br>
                    <a href="https://tovejs.dk/2017/01/26/dine-respondenter-kan-ikke-svare-paa-dit-spoergeskema/">"Videnskab.dk - Videnskabsteori: Videnskabelige Metoder", 25/11/2019, Videnskabdk.</a><br>
                    <a href="https://videnskab.dk/miljo-naturvidenskab/hvad-er-videnskabelig-metode">"Hvad er videnskabelig metode?", 3/3/2015, Niels Ebdrup</a>
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