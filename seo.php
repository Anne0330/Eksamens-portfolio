<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>SEO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="seocss.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <header><!--introduktion-->
        <h1>SEO</h1>
        
        <div id="introtekst">
             <p>Her kan du læse om hvad SEO er, og hvordan det har betydning i forhold til webudvikling.</p>
        </div>
    </header>
    
    <body> 
        <!--til top knap-->
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
           <!-- php start-->
        <?php include "menu.inc"; ?>
            <!-- php slut-->
        <!--banner-->
        <div id="htmltitel"> 
            <img src="htmltitelbillede1.jpg" alt="eye code" height="200px">
        </div>
<section><!--inhold-->
            <div id="seotekst">
                <h2>SEO</h2>
                    <p>SEO betyder “Search engine optimization” der gør at en hjemmeside kommer som en af de første, på en søgemaskine såsom Google, Bing osv. Det er vigtigt at være observant omkring sin SEO, når man bygger sin hjemmeside op. Når Google eller andre søge maskiner sorterer i hjemmesider, vælger de som regel dem som har bestemte informationer. Hvis du har formået at få den information ind i hjemmesiden ved hjælp af semantiske tags, så er der større chance for at søge maskinen vælger din til at komme i toppen. SEO betyder også, at hjemmesiden er valgt ud fra sortering der ikke er blevet kompromitteret, ved at det er betalt reklame.</p>
                
                    <p>Der er også noget der hedder SEA, som betyder ”Search Engine Advertising”. Der gør at en virksomhed betaler for at komme i toppen, ved at folk klikker på deres link først. I et hierarki vil SEA være over SEO, da betalte annoncer kommer først i forhold til SEO som er gratis. </p>
            </div>
</section>
<section><!--kilder og bill-->
            <div id="kilderseo">
                <p> Kilder: Niels Østergaard powerpoint præsentation "Introduktion til HTML".<br>
                <a href="https://moz.com/beginners-guide-to-seo">The Beginner's Guide to SEO - MOZ</a><br>
                <a href="https://searchengineland.com/guide/what-is-seo">What Is SEO / Search Engine Optimization? - Searchengineland</a></p> 
            </div>
               <div id="seobill">
            <img src="SEObill.jpg" alt="SEO" width="200px">
                   </div> 
                <div id="seobillkilde">
                <a href="https://www.globaltechpie.com/SEO_Company_In_Pune.aspx">Kilde</a>
                </div>  
</section>
<section><!--video-->
        <div id="titeltilseovid">
            <h2>Video omkring SEO</h2>
        </div>
    
        <div id="seovideo">
            <iframe width="560px" height="315px" src="https://www.youtube.com/embed/hF515-0Tduk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    
        <div id="seovideokilde">
            <a href="https://www.youtube.com/watch?v=hF515-0Tduk">Kilde: What Is Search Engine Optimization - Searchengineland - Youtube</a>
        </div>
</section>
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