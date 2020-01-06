<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Transskribering</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="transskriberingcss.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
    </head>
    <header>
        <h1>Transskribering</h1>
        
        <div id="introtekst">
             <p>Her kan du læse om hvad transskribering er, og hvad det kan bruges til.</p>
        </div>
    </header>
    
    <body> 
        <!-- til top knap-->
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
           <!-- php start-->
        <?php include "menu.inc"; ?>
            <!-- php slut-->
        
        <div id="htmltitel"> <!--banner-->
            <img src="communication.jpg" alt="Design" height="200px">
        </div>
        
<section><!--indhold-->
            <div id="transtekst">
                <h2>"At transskribere"</h2>
                    <p>Det betyder man transformere noget om til skrift, som kunne være en video til artikel. Eventuelt hvis man har haft et interview med en person, som har gået med til at interviewet bliver filmet. Der har man lyd og video at arbejde med, for at lave det om til tekst. Det at man vælger at fremhæve noget bestemt, som hvad personen siger eller hvad personen gør undervejs.<br>
                    Under et Onepage projekt skulle vi lave et interview, hvor det hele blev optaget. Der blev taget noter, men samtidig havde vi næsten 3-4 timers optagelse. Vi kunne bruge noget af det til vores projekt, men der skete mange uventede ting undervejs i interviewet. Det endte med at blive et mindre projekt for mig selv, at tage nogle highlights og klippe dem sammen.<br>
                    Da vores projekt ikke omhandlede at det skulle være sjovt, er dette et eksempel på hvordan man IKKE skal transskribere. Grundet at det der er highlighted, ikke havde relevans for den originale ide fra starten. Det var dog stadig et kæmpe hit for dem der var med i interviewet, og vi bruger det med glæde til nogle ”inside jokes” som kun Erhvervsakademiet Dania’s 1 semestres multimediedesignere kan relatere til.    
                    </p>
        </div>
      
        <div id="video">
            
            <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FAnne.meh0330%2Fvideos%2F10206156114419944%2F&show_text=0&width=560" width="560" height="409" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
        </div>
        
        <!-- der er et kæmpe mellemrum i mobil version og kan ikke fikse det.-->
        
        <div id="mening">
            <h2>Meningskondensering</h2>
                <p>Det er en form for interviewanalyse, som også kan indgå inden under transskribering. For at kunne lave en transskribering, skal man kunne analysere sit fimet/optaget materiale. Det er at finde det svar man ledte efter i interviewet, eller finde hovedpunkter der skal highlightes. Der er en metode ved at bruge denne, at kunne lave hovepunkter/emner, og indsætte sætninger personen har sagt for at se hvilke der er brugbare, i forhold til resultatet. </p>
        </div>
</section> 
        <!--kilder-->
            <div id="kilder">
                <h5>Øvrige kilder</h5>
                <p>"Kommunikation i multimediedesign" 2015, Anne Mette Busch: Kapitel 6, s. 92<br>
                <a href="https://tovejs.dk/2019/07/17/transskribere/">"Det får du ud af at transskribere dine interviews", 17/07/2019, Albert Munsell.</a></p>
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