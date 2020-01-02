<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Serverside scripting</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="serversidecss.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
    </head>
    <header>
        <h1>Serverside scripting</h1>
        
        <div id="introtekst">
             <p>Her kan du læse om hvad serverside scripting er, og hvad det kan bruges til.</p>
        </div>
    </header>
    
    <body> 
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
           <!-- php start-->
        <?php include "menu.inc"; ?>
            <!-- php slut-->
        
        <div id="htmltitel"> 
            <img src="communication.jpg" alt="Design" height="200px">
            </div>
            <div id="script">
                
                <h2>Bootstrap</h2>
                
                    <p>Bootstrap er et open source værktøjskasse, hvor man finder frameworks til navigation, css, hele websites eller javascript. Læs mere om bootstrap <a href="https://getbootstrap.com/docs/4.4/getting-started/introduction/">her.</a></p>
                
                    <p>Med frameworks skal man ikke starte fra bunden af, som man plejer at gøre. Det er fin justeringer, men betyder så også en risiko for at skulle gå på kompromis med designet. Det er en hurtig mulighed, for at kunne få en pæn hjemmeside.</p>
                
                <h2>PHP</h2>
                <p>Ved brug af php include, gør det nemmere og overskueligt at kode. I stedet for at kode det samme ind, hvis man har flere sider at arbejde med, kan php include gøre det nemmere ved at man kun koder på ét dokument. Ulempen ved php include, er at alle filer undtagen css'en bliver til php-filer. Det gør at man kun kan se på serveren, hvad der er blevet ændret.</p>
        </div>
 
            <div id="kilder">
                <h5>Øvrige kilder</h5>
                <p>Niels Østergaard PDF præsentation "serverside" - 8/11/2019<br>
                   Niels Østergaard PDF præsentation "bootstrapintro" - 8/11/2019<br> 
                <a href="https://getbootstrap.com/docs/4.4/getting-started/introduction/">"Introduction", Bootstrap.</a></p>
            </div>
        
        <div class="footer">
            <p>Anne Mehlsen &#169; Læringsportfolio 2019-</p>
        </div>
        
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