<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>CSS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
    </head>
    <header> <!--introduktion-->
        <h1>CSS</h1>
        
        <div id="introtekst">
             <p>Her kan du læse om CSS, Grids og responsiv layouts.</p>
        </div>
        
    </header>
    
    <body> 
        <!--til top knap-->
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
           <!-- php start-->
        <?php include "menu.inc"; ?>
            <!-- php slut-->
        
<section><!--banner-->
        <div id="htmltitel"> 
            <img src="communication.jpg" alt="Design" height="200px">
            </div>
</section>
        
<section><!--css tekst indhold--> 
        <div id="css">               
            <h2>Kort om CSS</h2>
                
                <p>CSS betyder Cascading Style sheets, som er et sprog der beskriver udseendet, hvor HTML understøtter det. I HTML handler det om struktur, hvor CSS handler om design og det gør det muligt at adskille dem fra hinanden. ’Styles’ angives som ’rules’, hvor det bliver refereret i HTML.<br>
                Et ’’stylesheet’’ er en samling af ’rules’, hvilket betyder at vores CSS er et dokument med en række regler, som vores HTML skal understøtte.<br>Håkon Wium Lie var den første til at udvikle CSS, som blev adopteret af W3C som overtog standardiseringsarbejdet. IE3 var den første reelle browser til at understøtte CSS, hvor Netscape 4.0 understøttede det kort tid efter med mange fejl. Standarden for understøttelsen af CSS blev yderligere udviklet gennem årene siden første version, og det har endt i at alle store browsere understøtter standarden.<br>Man vælger det der skal styles, ved at bruge ’selectors’. I vores HTML har vi bygget den op med ikke-semantiske tags og almindelige tags, hvor man udvælger hvilke elementer vi skal style.</p>
                
                <p>Udvalg af alle elementer: Vælger man at skrive eks. p i CSS, ender man med at vælge alle &lt;p> elementer i HTML til at være det samme design.</p>
            
                    <img src="eksempelp.png" alt="p element" width="70%">
            
                <p>Flere udvalg af elementer: Hvis vi har en eller flere Class=”indhold” elementer i vores HTML, bruger man .class til at udvælge disse elementer og styler.</p>
            
                    <img src="class.png" alt="class" width="70%">
            
                <p>Id selectors bruges til at vælge et specifikt element, hvor man har udvalgt en titel til den i sit HTML id=”Billede” så vil man skrive det som #billede i CSS.</p>
            
                    <img src="id.png" alt="id" width="70%">
            
                <p>Efter man har udvalgt et element man vil style, bruger man deklarationer. Et deklaration starter med et krøllet parentes &#123; og afsluttes således med &#125;. Man vælger en bestemt ting/egenskab man vil lave om, såsom baggrundsfarven på et element.</p>
            
                    <img src="css.png" alt="css" width="70%">
            
            <h3>Kaskaderegler</h3>
            
                <p>Det er et sæt regler som gør, der definerer hvordan modstridende CSS deklareringer løses.</p>
            
            <h4>Specificity</h4>
            
                <p>Betyder at css’en vælger den mest specifikke declaration på et element, hvor et eksempel vil være at man har selected specifikt et element såsom:</p>
            
                    <img src="specificity.png" alt="specificy" width="70%">
            
            <h4>Source order</h4>
            
                <p>Den seneste deklaration står i kraft, selv hvis der har været tidligere deklarationer i samme element.</p>
            
                    <img src="sourceorder.png" alt="source order" width="70%">
            
                <p>Der findes også !important, men den undlades at bruges da det ødelægger ideen med kaskaderegler.</p>
            
            <h3>Andet styling</h3>
            
                <img src="boxmodel.png" alt="box model" width="70%">
            
                    <p>Rammens egenskaber CSS Box properties</p>
            
                        <dl>
                            <dt>Content</dt>
                                <dd>Eks. tekst eller grafik.</dd>
                            <dt>Padding</dt>
                                <dd>Afstand mellem indhold og ramme.</dd>
                            <dt>Border</dt>
                                <dd>Kan være synlig eller ej.</dd>
                            <dt>Margin</dt>
                                <dd>Afstand mellem ramme og tilstødende elementer</dd>
                        </dl>
            
            <h3>Farver</h3>
            
                <ul>
                    <li>RGB: rgb &#40;255, 204, 0&#41;</li>
                    <li>HEX-kode: #ffcc00</li>
                    <li>HSL: hsl&#40;48%, 100%, 50%&#41;</li>
                </ul>
            
            <h3>Med opacitet - gennemsigtighed, alpha-channel</h3>
            
                <ul>
                    <li>RGBA: rgba&#40;255, 204, 0, 0.5&#41;</li>
                    <li>HSLA: hsla&#40;48%, 100%, 50%, 0.5&#41;</li>
                </ul>
            
            <h3>Google fonts</h3>
            
                <ul>
                    <li>En gratis løsning</li>
                    <li>Google hoster fonten</li>
                    <li>Den hentes når siden hentes</li>
                </ul>
            
        <h3>Positionering</h3>
            
            <h4>Page flow</h4>
                <ul>
                    <li>Fra toppen og ned</li>
                </ul>
            
            <h4>Relative</h4>
                <ul>
                    <li>Stadig flow, men forskudt</li>
                </ul>
            
            <h4>Absolute</h4>
                <ul>
                    <li>Ikke i flow, men følger med ved scroll</li>
                </ul>
            
            <h4>Fixed</h4>
                <ul>
                    <li>Ikke i flow, følger ikke med ved scroll</li>
                </ul>
            
            <h4>Float</h4>
                <ul>
                    <li>Ikke i flow, andre elementer kan “flyde” udenom</li>
                </ul>
            
            <h3>Float</h3>
                <ul>
                    <li>Elementet “flyder” i det overordnede element</li>
                    <li>Angiv hvilken siden elementet skal flyde til</li>
                    <li>Indhold i overordnet element flyder udenom</li>
                    <li>Bruges til at placere billeder i tekst og til at placere elementer ved siden af hinanden</li>
                </ul>
            
            <h3>Clear</h3>
                <ul>
                    <li>Afgrænser hvilke sider der må røre andre elementer i det overordnede element</li>
                    <li>Kan være: left, right, both og none</li>
                    <li>Kan bruges til at ophæve float</li>
                </ul>
        </div>
</section>
<section>   <!--tekst omkring grids-->
        <div id="grids">

       <h2>CSS grids og responsiv design </h2>
            
            <h3>Grids</h3>
            
                <p>Grids er delvist bygget ud fra flexbox, men har gjort det nemmere ved at man kan vælge hvilken række og kolonne elementet skal placeres. Ved at bruge grid, skal man have ”display: grid” i sit css, og derved også give sine elementer et bestående navn ved at bruge ”grid-area”. Den måde man navngiver sine elementer ville være f.eks. som dette:</p>
            
                    <img src="grid-area.png" alt="grid area" width="70%">
            
                <p>For at gøre det overskueligt, er det bedst at bruge titler frem for tal eller bogstaver. Derved er det nemt for både udvikler og andre, at kunne forstå placeringerne. Der tilføjes lidt mere til forståelsen:</p>
            
                    <img src="grid-area2.png" alt="grid area" width="70%">
            
                <p>For at finde ud af placering, og hvor mange rækker eller kolonner der skal være. Kan der således bruges enten ”grid-template-columns” eller ”grid-template-rows”. Ideen bag at kun bruge én af dem i stedet for begge, er fordi den selv regner ud antal kolonner eller rækker efter hvor meget plads der er. Et grid kan således ende med at se sådan her ud:</p>
            
                    <img src="mygrid.png" alt="my grid areas" width="70%">
            
                <p>fr betyder fractions, hvilke er brøkdele af hele containeren. Så man angiver hvor stor en brøkdel af siden, der skal fylde et element. Grids er også kun kvadratiske eller rektangulære, så der kan ikke udvikles specielle former som et L med grids.</p>
            
            <h3>Responsiv design og layouts</h3>
            
                <p>Der er 4 layoutformer på en hjemmeside.</p>
            
            <h4>Statisk layout</h4>
            
                <p>Dette er et layout som har en fast bredde, uanset skærmstørrelse. Layoutet virker til en specifik skærmstørrelse, men frabedes da den ikke kan rettes til andre skærmstørrelser.</p>
            
                    <img src="statisk.png" alt="statisk layout" width="70%">
            
            <h4>Flydende layout</h4>    
            
                <p>Dette layout passer til alle skærmer, men gør så også at designet har svært ved at forblive pænt. Elementer vil strække eller skrumpe, alt efter hvor meget de kan.</p>
            
                    <img src="flydende.png" alt="flydende layout" width="70%">
            
            <h4>Adaptiv layout</h4>
            
                <p>Dette er en layout som er delvist med statiske layouts. Det betyder man har kontrol over sit design, på specificerede skærmstørrelser. Med dette layout bruger man CSS @media quieres, hvor man anvender pixels til at styre hvordan designet ændres ved angivet pixel. Dog er dette tit et resultat i, at man ender med ’mobile last’.</p>
            
                    <img src="adaptiv.png" alt="adaptiv" width="70%">
            
            <h4>Responsiv layout</h4>
            
                <p>Dette er en blanding mellem flydende og adaptive layout, hvor der også bruges CSS @media quieres. Der bruges procenter til at angive bredden på elementerne, hvilket gør at den tilpasser sig selv til en skærmstørrelse man ikke har specificeret.</p>
            
            <h3>Mobile first</h3>
            
                <p>Det er anerkendt at bruge tilgangen Mobile first, da det er en strategi der indgår et indholds hierarki. Man tager overvejelser med mobile version, hvad der er vigtigt og have på siden eller for at kunne give en funktionel brugeroplevelse. Det gør det også nemmere i forhold til design, til at gå fra mindre til større frem for større til mindre.</p>
            
                    <img src="mobilefirst.png" alt="mobile first" width="70%">
            
        </div>
</section>   
<section>   <!--kilder-->
        <div id="kilder">
                <h5>Øvrige kilder</h5>
            
                    <p>Billeder: Niels Østergaard PDF præsentation "intro til css" - 4/10/2019<br>
                        
                    Billeder: Niels Østergaard PDF præsentation "responsive i praksis" - 16/9/2019<br> 
                        
                    Niels Østergaard PDF præsentation "intro til css" - 11/9/2019<br>
                        
                    Niels Østergaard PDF præsentation "Grids" - 16/9/2019<br>
                        
                    Niels Østergaard PDF præsentation "responsive i praksis" - 16/9/2019 <br>  
                        
                    <a href="https://www.youtube.com/watch?v=ne6tB2KiZuk&feature=emb_title">"Bobby McFerrin Demonstrates the Power of the Pentatonic Scale", 23/7/2009, World Science Festival</a><br>
                        
                    <a href="https://alistapart.com/article/the-new-css-layout-excerpt/">"The New CSS Layout, An Excerpt", 24/10/2017, Rachel Andres</a><br>
                    
                    <a href="https://alistapart.com/article/the-story-of-css-grid-from-its-creators/">"The Story of CSS Grid, from Its Creators", 19/10/2017, Aaron Gustafson</a><br>
                    
                    <a href="https://gridbyexample.com/">"Grid by Example", gridbyexample.com</a><br>
                        
                    <a href="https://www.youtube.com/watch?v=N5Lt1SLqBmQ&feature=youtu.be">"CSS Grid Layout - Rachel Andrew | February 2017", 16/2/2017, Frontend NE</a><br>
                    
                    <a href="https://www.youtube.com/watch?v=HgwCeNVPlo0&feature=youtu.be">"How to Create Website Layouts Using CSS Grid | Learn HTML and CSS | HTML Tutorial", 30/7/2017, mmtuts</a>
                        
                    <a href="https://www.lynda.com/CSS-tutorials/CSS-Selectors/192036-2.html">"CSS-Selectors", 29/5/2015, James Williamson</a><br>
                    
                    <a href="https://www.lynda.com/CSS-tutorials/What-CSS-box-model/372544/419405-4.html">"What is the CSS box model?", 16/7/2015, Morten Rand-Henriksen</a>
                    </p>
            </div>
</section>    
        
        <!--footer-->
        <div class="footer">
            <p>Anne Mehlsen &#169; Læringsportfolio 2019-</p>
        </div>
        
      <!--start på javascript-->  
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