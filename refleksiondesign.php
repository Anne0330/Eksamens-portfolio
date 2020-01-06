<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Refleksion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="refleksiondesign.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
    </head>
    <header>
        
        <!-- hovedtitel-->
        <h1>Refleksion</h1>
        
        <!--Summerings tekst -->
        <div id="introtekst">
             <p>Her kan du læse om mine refleksioner jeg har haft, ved at arbejde med design.</p>
        </div>
    </header>
    
    <body> 
        <!--til top knap-->
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
           <!-- php start-->
        <?php include "menu.inc"; ?>
            <!-- php slut-->
        
    <!--start på indhold-->  
    <section>
        <div id="tekst">
            <h2>Refleksion med design</h2>
                <p>Selv om jeg tegner eller laver kreative ting i min fritid som hobby, vidste jeg ikke der lå en så stor verden bag design. Det teoretiske man har lært under uddannelsen, følte mere som en selvfølge før jeg begyndte på uddannelsen. Emnerne har givet mig en bedre forståelse, på hvordan man kan ’appeal’ til en kunde med sit design. Jeg vil nok stadig have problemer med typografi, men det er bestemt åbnet mine øjne for at inviterer flere skrifttyper ind.</p> 
        </div>
            
    </section><!-- slut på indhold-->
    
    <section>
            
      <!-- footer -->
        <div class="footer">
            <p>Anne Mehlsen &#169; Læringsportfolio 2019-</p>
        </div>
        
    </section>
        
        <!-- alt javascript-->
        
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