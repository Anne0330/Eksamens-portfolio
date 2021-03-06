<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Styletiles</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stylecss.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
    </head>
    <header>
        <h1>Styletiles</h1>
            <div id="introtekst">
                <p>Her kan du læse om hvad styletiles er og hvorfor det ikke er det samme som moodboards.</p>
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
        
 <section>   <!--indhold-->   
        <div id="styletiles">
            <h3>En ide der er illustreret</h3>
                <p>Selv om moodboards og Styletiles kan forveksles, er det to vidt forskellige ting. De bruges begge til en virksomheds præsentation, men den ene kan mere end det andet. Moodboards er farver, temaer og baseret på at give et humør. </p>
            
                    <img src="styletiles.jpg" alt="styletiles" width="70%">
                    <a href="https://www.creativebloq.com/web-design/style-tiles-4132333">Kilde</a>
            
                <p>Styletiles er også med farver, tema og typografi. En samtale med en kunde, kan give dig krav på hvad de gerne vil have på deres produkt, som multimediedesigneren skal kunne udføre et par prototyper.<br>
                Et styletile er for at kunne vise en kunde, hvad deres hjemmeside kan indeholde med overskifter, billeder, farver mm.</p>
            
                <p><q>For example, if a client has used the words 'reliable' or 'dependable' to describe their business, the style tile should visually represent this.</q>– Creative bloq</p>
        </div>
     
</section><!--kilder-->  
            <div id="kilder">
                <h5>Øvrige kilder</h5>
                    <p><a href="https://webdesign.tutsplus.com/articles/style-tiles-an-alternative-to-full-design-comps--webdesign-7232">"Style Tiles: An Alternative to Full Design Comps", 6/6/2012, Chris Brown</a><br>
                    <a href="http://styletil.es/">"WHAT ARE STYLE TILES?"</a><br>
                    <a href="https://www.mttr.io/web-design/process/style-tiles/">Web Design Style Tiles</a><br>
                    <a href="https://www.degdigital.com/insights/style-tiles/">"Why Adopting Style Tiles Can Improve Your Web Design", 23/8/2018, Alison Peterson</a><br>
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