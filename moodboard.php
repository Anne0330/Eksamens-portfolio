<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Moodboards</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="moodcss.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
    </head>
    <header>
        <h1>Moodboards</h1>
        
        <div id="introtekst">
             <p>Her kan du læse om hvad moodboards er og hvorfor det ikke er det samme som styletiles.</p>
        </div>
    </header>
    
    <body> 
        <!--til top knap-->
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
           <!-- php start-->
        <?php include "menu.inc"; ?>
            <!-- php slut-->
        
        <div id="htmltitel"><!--banner-->
            <img src="nummer2banner.jpg" alt="Design" height="200px">
        </div>
        
<section><!--indhold-->
        <div id="tekstmood">
            <h2>Farve og følelser</h2>
                <p>Kort forklaret, er det et board med billeder der giver en form for følelse, eksempelvis glæde, hygge, had osv. Et moodboard er baseret på analog farver, hvor den primære/eller fokuserede farve vil være dominant i alle billeder eller på objekter i billedet. </p>
        </div>
        
        <div id="moodboards">
            <h3>Eksempler</h3>
                <img src="golden.jpg" alt="guld" width="50%">
                    <a href="https://kihyunsbabe.tumblr.com/post/189451208382/even-the-gods-know-how-golden-your-soul-is">Kilde</a>
                        <h4><q>Even the Gods know how golden your soul is</q> – Kihyunsbabe, tumblr.</h4>
                            <p>Dette er et eksempel på et moodboard, hvor farven spiller en rolle. Den gyldne farve dominerer, ved udstråling af værdighed og kongelighed. Objekterne af harpen, vingerne, skyerne og spejlet, giver også en følelse af håb. </p>
            
                <img src="red.jpg" alt="red" width="50%">
                    <a href="https://cheshirecatbyul.tumblr.com/post/188747607495/vampirejaehyun-moodboard-tell-me-how-bad-i-am">Kilde</a>
                        <h4><q>Vampire!Jaehyun Moodboard</q> – Cheshirecatbyul, tumblr.</h4>
                            <p>Dette er et eksempel på et moodboard, som ikke kun er baseret på farve men også objekter, eller tema. Det er ikke kun farver eller objekter som moodboards, der afgør om et moodboard kan udvikles. Det basale er at finde et tema, som kunne være en ide for en kunde. Skal de føle sig eller forestille sig på en klub? Et middagsselskab? Det er kun fantasien der sætter grænser, men det er vigtigt og lytte til sin kunde på hvad DE har i tankerne.</p>
        </div>
 </section>
        <!--kilder-->
            <div id="kilder">
                <h5>Øvrige kilder</h5>
                    <p><a href="https://designmodo.com/moodboards/">"Mood Boards for Product Designers", 12/11/2018, Gleb Kuznetsov</a><br>
                    <a href="https://munsell.com/color-blog/sir-isaac-newton-color-wheel/">"Sir Isaac Newton’s Influence on the Color Wheel", Albert Munsell.</a><br>
                    <a hrf="https://line25.com/inspiration/create-mood-board-inspire-website-design">How to Create a Mood Board to Inspire Your Website Design, Line25</a><br>
                    <a href="https://vanseodesign.com/web-design/style-guides-mood-boards-style-tiles/">"Style Guides, Mood Boards, And Style Tiles: 3 Tools To Keep Design Projects On Track, 7/5/2012, Steven Bradley</a><br>
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