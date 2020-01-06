<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Tags</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="attritbuttercss.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <header><!-- introduktion-->
        <h1>Attributter</h1>
        
        <div id="introtekst">
             <p>Her kan du læse om hvad attributter er, og hvordan det har betydning i forhold til elementet.</p>
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
            
            <img src="htmltitelbillede1.jpg" alt="eye code" height="200px">
            
        </div>
</section> 

<section><!--indhold-->
            <div id="tagstekst">
                
                <h2>Attributter</h2>
                
                    <p>Attributter er giver ekstra information til elementet, og er altid nævnt som det første i dit start tag. Som regel kommer attributer som “name/value” par såsom: Name=”value”.<br>
                    I HTML kan man bruge et &lt;imh> tag, til at få billeder frem. Tagget er i teorien tom, da der ikke er et lukke tag og den kun har en attribut i sit element. Ved at tilføje "src" ind i elementet, kan man linke til et billede med URL. Derved kan man tilføje "alt" ind i elementet, der gør at hvis brugeren ikke kan se billedet, kommer der en tekst frem som er inde i "alt" tagget.</p>
                
                    <p>Du får så derfor fx:<br> &lt;img_flower.jpg" alt="blomster der er farverige"</p>
                
                    <p>I bund og grund, gør attributter at det giver flere informationer for brugeren på hvad elementet indebærer.</p>
            </div>
</section>      
<section><!-- kilder-->
            <div id="kilderattribut">
                
                <p> Kilde: Niels Østergaard powerpoint præsentation "Introduktion til HTML".<br>
                <a href="https://www.w3schools.com/">Kilde: w3schools</a></p> 
                
            </div>
</section>
<section><!--atribut billede og kilde-->
            <div id="attributbill">
                <img src="attributterbill.png" alt="attributter" width="200px">
            </div> 
    
            <div id="attributkilde">
                <a href="https://www.onlinedesignteacher.com/2016/03/html-attributes.html">Kilde</a>
                
            </div>        
</section>
        <!-- footer-->
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