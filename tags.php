<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Tags</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="tagscss.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <header><!-- into-->
        <h1>Tags</h1>
        
        <div id="introtekst">
             <p>Her kan du læse om tags i forhold til webudvikling. Du vil kunne læse om almindelige tags, samt hvad semantiske tags er og deres forhold til hvorfor de er vigtige til at udivkle en hjemmeside.</p>
        </div>
    </header>
    
    <body> 
        <!-- til top knap-->
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
           <!-- php start-->
        <?php include "menu.inc"; ?>
            <!-- php slut-->
        
<section><!--banner-->
    
        <div id="htmltitel"> 
            <img src="htmltitelbillede1.jpg" alt="eye code" height="200px">
            </div>
</section>        

<section><!-- inhold på tags-->
            <div id="tagstekst">
                
                <h2>Tags</h2>
                
                    <p>Tags er i bund og grund elementer, som vi kalder for ”kode” i hverdagens sprog. Tags er symboler med tegnet ”&lt;" og ”&gt;”, så et tag kan således se sådan her ud: &lt;love&gt; 
                    </p>
                    <p>Tags som &lt;section&gt; definerer sektioner i et html dokument, såsom kapitler, intro, footer osv. Det giver et overblik for udvikler og læser, på hvad der er ment til at blive sammensat.</p>
                    <p>Semantiske tags/elementer, er elementer som har en mening. Det giver en forståelse eller beskrivelse, for både browseren og udvikleren af hvad inholdet er.</p>
                    <p>Eksempler på ikke-semantiske tags er: &lt;div&gt; og &lt;span&gt; - fordi de ikke fortæller om indholdet.</p>
                    <p>Eksempler på semantiske tags er: &lt;form&gt;, &lt;table&gt; og &lt;article&gt; - fordi de fortæller hvad indholdet er.</p>
                
            </div>

            <div id="kildertags"><!-- kilder-->
                <p> Kilde: Niels Østergaard powerpoint præsentation "Introduktion til HTML".<br>
                <a href="https://www.w3schools.com/">Kilde: w3schools</a></p> 
            </div>
        
    <!-- billede-->
    
            <div id="semantiskbill">
                   
                <img src="semantisketags.png" alt="semantiske elementer" width="200px">
                   
            </div>
    
        <!--kilde-->
                <div id="tagskilde">
                    
                    <a href="https://medium.com/teleporthq-io/understanding-the-web-parsing-web-pages-semantically-805ef857854d">Kilde</a>
                    
                </div>
        
                    <h2>Andre semantiske tags</h2>
    
        <!--eksempler-->
            <div id="tagseksempler">
                <ul>
                    <li>&lt;h1&gt;, &lt;h2&gt;,&lt;h3&gt;... - Titler/h1 er størst og bør kun bruges én gang på en side.</li>
                    <li>&lt;p&gt; = Paragraf</li>
                    <li>&lt;ol type="A/1/I"&gt; = 'Ordered list', Nummer, alfabet liste</li>
                    <li>&lt;ul&gt;&lt;/ul&gt; = punkteret liste</li>
                    <li>&lt;ul>&lt;/ul> = punkteret liste uden orden. 'un-ordered list'</li>
                    <li>&lt;Li>Et punkt&lt;/li> = Et punkt på en liste.</li>
                    <li>&lt;a href=""> Link til diverse hjemmesider eller andre html dokumenter.</li>
                    <li>&lt;dl> er en beskrivelses liste. Det er brugt til at definere et ord, ligesom når man skal finde en beskrivelse på et ord. Fx ordbøger</li>
                    <li>&lt;dt> bruges sammen med &lt;dl> tagget, da det bruges til at 'highlight' ordet man foreksemepel gerne vil have en beskrivelse på.</li>
                    <li>&lt;dd> bruges til at beskrive ordet du har valgt i dit &lt;dt></li>
                    <li>&lt;img src="img_girl.jpg" alt="Girl in a jacket". Bruges til billeder.</li>
                </ul>
            </div>
</section>
                <!--kilder-->
        <div id="kildertags">
            <p> Kilde: Niels Østergaard powerpoint præsentation "Introduktion til HTML".<br>
                <a href="https://www.w3schools.com/">Kilde: w3schools</a></p> 
        </div>
        
        <!--footer-->
        <div class="footer">
            
            <p>Anne Mehlsen &#169; Læringsportfolio 2019-</p>
            
        </div>
        
    <!-- start på javascritp-->
        
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