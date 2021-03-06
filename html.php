<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>HTML</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="html.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <header><!-- intro tekst-->
        <h1>HTML</h1>
        
        <div id="introtekst">
             <p>Html betyder HyperText Markup Language, som er et kodesprog. Dens formål bruges til at ’markere’ tekst og billeder på en hjemmeside. Det er et sprog med struktur, og ligeledes kan det også have hierarki. På denne side kan du læse lidt om HTML og kodeskik.</p>
        </div>
    </header>
    
    <body> 
        <!-- til top knap-->
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
           <!-- php start-->
        <?php include "menu.inc"; ?>
            <!-- php slut-->
        
    <section><!--banner -->
        
        <div id="htmltitel"> 
            <img src="htmltitelbillede1.jpg" alt="eye code" height="200px">
            </div>
    </section>
        
    <section><!--indhold html-->
        
            <div id="htmltekst">
                <h2>Html</h2>
                    <p>Under vores læringsproces har vi kendskab til forskellige editors, såsom: Notepad++, Edge Code, Brackets, TextWrangler, Sublime Text, Atom, Ultra Edit, BBEdit og mange andre. Vi har startet ud med at bruge Brackets og eventuelt i fremtiden, bevæger vi os ind i andre editors.</p>
                    <p>Det man skriver ind i sit HTML, bliver som regel kaldt for elementer, som har egenskaber heraf tags, attributter og værdier mm. Alle elementer bliver oftest startet med et tag, og slutter med et tag.</p>
        </div>
    </section>
        
    <section><!-- kilder-->
        
            <div id="kilderhtml">
                <p> Kilde: Niels Østergaard powerpoint præsentation "Introduktion til HTML".<br>
                <a href="https://www.w3schools.com/">Kilde: w3schools</a></p> 
            </div>
    
               <div id="htmlelement">
                   
                    <img src="html-element.png" alt="HTML element" width="200px">
                   
                </div> 
        
                <div id="htmlkilde">
                    
                    <a href="https://docs.code.org/csd/html_tags/index.html">Kilde</a>
                    
                </div>
    </section>
        
    <section> <!--kodeskik indhold -->
                
                <h2>Kodeskik</h2>

            <div id="kodeskiktekst">
                <p>Udvikleren skal have et overblik, samt skal en kunde eller udviklings-partner kunne læse din kode uden problemer. Det vil sige, man skal navngive sine ID elementer der er i div tagget, i stedet for at bruge tal</p>
                
                <img src="div-id.png" alt="Id elementer" width="100px">
        
            <!-- kilder-->
            <div id="kildeid">
                <a href="https://www.ediciones-eni.com/open/mediabook.aspx?idR=2f06db4bea8b96b852047e02d72420c0">Kilde</a>
            </div>
                
                <p>Her kan en kunde/læser gennemskue hvad elementet er til, uden at de skal gå længere ind i kodens indhold for at få en forståelse. Kommentarer er også dyrebare i ens kodning, da det er en hjælpeguide for selve udvikleren og læseren. Et eksempel nedenfor er fra min egen kode, for denne side:</p>
            </div>
        
    </section>
    
    <section>
          <div id="kilderhtml"> <!-- kilde-->
                <p> Kilde: Niels Østergaard powerpoint præsentation "Introduktion til HTML".<br>
                <a href="https://www.w3schools.com/">Kilde: w3schools</a></p> 
            </div>
        <!-- billede-->
            <div id="kommentarbill">
                <img src="kommentar.png" alt="kommentarer" width="800px">
            </div>
        <!-- footer -->
        <div class="footer">
            <p>Anne Mehlsen &#169; Læringsportfolio 2019-</p>
        </div>
        
    </section>
        
        
<!-- start på javascript-->
        
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