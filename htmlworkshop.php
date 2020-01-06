<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>HTML/CSS Work shop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="workshop.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
    </head>
    <header>
        <h1>HTML/CSS Workshop</h1>
        
        <div id="introtekst">
             <p>Her kan du læse om vores HTML og CSS workshop projekt, som var vores første store projekt.</p>
        </div>
    </header>
    
    <body> 
        <!--til top knap-->
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
           <!-- php start-->
        <?php include "menu.inc"; ?>
            <!-- php slut-->
 
<section><!--indhold-->
            <div id="tekst">
                <h2>Float og clear</h2>
                    <p>Et af vores første gruppe opgaver, blev på to-mands grupper hvor vi skulle lave en form for ”work shop” website. Dette skulle være en lærings-guide e-bog til de studerende på første semester, der omhandler alt ved HTML og CSS. Der er forskellige funktioner i HTML og CSS, der gør det kan være overskueligt eller umuligt at finde. Ved at lave denne form for e-bog, kan vi bruge den under vores uddannelse til når vi har brug for at søge hjælp med en funktion.<br>
                    Da HTML og CSS vedrører mange funktioner, blev emnerne delt ud på de forskellige to-mands grupper. I mit tilfælde, fik vi emnet ”Float og Clear”. Vores opgave var at lave research på emnet, hvor vi skulle kode en one-page til at præsentere mulighederne i ”Float og clear”.</p>
                    <p>Du kan se den specifikke side med float og clear, ved at klikke <a href="http://majx0750.web.eadania.dk/float%20og%20clear/">her.</a> Eller eventuelt tjekke hele vores e-bog ud ved at klikke <a href="http://jesp883f.apache.eadania.dk/webbog/?fbclid=IwAR26EN0hW4hnlZqBhpJ4EDJzDIeke-VDg7Ho6eNcyjK-u3zN-tUth6gq-Vw">her.</a></p>
                
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