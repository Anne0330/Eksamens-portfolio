<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Kontakt</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="kontaktcss.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
    </head>
    <header>
        <h1>Kontakt</h1>
    </header>
    
    <body> 
        <!--til top knap-->
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
           <!-- php start-->
        <?php include "menu.inc"; ?>
            <!-- php slut-->
<section>  <!--e-mail-->      
            <div class="chip">
                <img src="kontaktform.png" alt="Person">
                <a href="mailto:anne.meh@hotmail.com">E-mail</a>
        </div>
 </section>  
        
<section> <!--social media-->
                <div class="flex-center">
                    <a href="https://www.instagram.com/mehlsen0330/" target="_blank"><i class="fa fa-instagram fa-4x icon-3d"></i>
                    <a href="https://github.com/Anne0330" target="_blank"><i class="fa fa-github fa-4x icon-3d"></i>
                    <a href="https://twitter.com/Eris0330" target="_blank"><i class="fa fa-twitter fa-4x icon-3d"></i>
                    <a href="https://www.facebook.com/Anne.meh0330" target="_blank"><i class="fa fa-facebook fa-4x icon-3d"></i>
                    <a href="#"></a>    
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