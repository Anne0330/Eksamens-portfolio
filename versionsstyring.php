<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Versionsstyring</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="versioncss.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <header>
        <h1>Versionsstyring</h1>
        
        <div id="introtekst">
             <p>Her kan du læse om hvad verssionsstyring er, og hvilken indflydelse det har.</p>
        </div>
    </header>
    
    <body> 
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
           <!-- php start-->
        <?php include "menu.inc"; ?>
            <!-- php slut-->
        
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
        
        <div id="htmltitel"> 
            <img src="htmltitelbillede1.jpg" alt="eye code" height="200px">
            </div>
            <div id="versiontekst">
                
                <h2>Versionsstyring</h2>
                
                    <p>Versionsstyring er et værktøj der gør man kan undgå fejl, og kunne gå tilbage hvis der er opstået en fejl eller man er endt med noget man er utilfreds med. Det bruges også til delprojekter, der gør man får et overblik og samarbejde. Det kan være simple ting, såsom at navngive filer og mapper, samt supplere med noter eller en kommentar, om hvad der er blevet ændret i projektet undervejs.</p>
        </div>
        
        <div id="git">
            <h3>Git</h3>
            
            <p>Git er et versionssystem, som er baseret på en standard protokol. Linus Thorsvald skrev systemet, for at kunne holde styr på Linux udviklingen. </p>
        </div>
        
        <div id="github">
        <h3>Github</h3>
            
            <img src="github.jpg" alt="Github">
            
            <a href="https://opensource.com/life/15/11/short-introduction-github">Kilde</a>
            
            <p>Vi bruger Github til versionsstyring, hvor man kan oprette repositites (projekter). Det er en webplatform, der er brugt til samarbejde med enten en egen valgt partner, eller give offentligheden mulighed for at ændre i projektet. I starten var det brugt til kodedeling, men efter årene er det blevet til et socialt medie.</p>
        </div>
        
            <div id="gitkilder">
                <p> Kilder: Niels Østergaard powerpoint præsentation "Versionsstyring".<br>
                <a href="https://help.github.com/en/desktop/contributing-to-projects">"Contributing to projects with GitHub Desktop" - github</a>
            </div>
        
        <div class="footer">
            <p>Anne Mehlsen &#169; Læringsportfolio 2019-</p>
        </div>

    </body>
</html>