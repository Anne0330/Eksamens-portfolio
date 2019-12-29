<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Informations arkitektur</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="iacss.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
    </head>
    <header>
        <h1>Informationsarkitektur</h1>
        
        <div id="introtekst">
             <p>Her kan du læse om informationsarkitektur/IA, for at finde den bedste måde at organisere dine ting på. </p>
        </div>
    </header>
    
    <body> 
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
           <!-- php start-->
        <?php include "menu.inc"; ?>
            <!-- php slut-->
        
        <div id="htmltitel"> 
            <img src="nummer2banner.jpg" alt="Design" height="200px">
            </div>
        
            <div id="tekstlatch">
                
                <h2>LATCH</h2>
                
                    <p>Informations arkitektur er et begreb, som man bruger til organisering og strukturering af information inden for et produkt eller service. Det gør det nemmere for brugeren at finde deres mål, ved at bruge mindst tid og på en effektiv måde.</p>
        </div>
        
        <div id="quotes">
            <p><q>Good information architecture enables people to find and do what they came for. Great information architecture takes find out of the equation: The site behaves as the visitor expects. Poor or missing information architecture neuters content, design, and programming and devalues the site for its owners as well as the audience it was created to serve. It's like a film with no director. The actors may be good, the sets may be lovely, but audiences will leave soon after the opening credits.</q>– Jeffrey Zeldman</p>
            
            <a href="http://archive.iainstitute.org/en/learn/resources/testimonials.php">Kilde</a>
        </div>
        
        
    
        <div id="latch">
            <p>Der er fem måder at organisere sig på og det er LATCH.</p>
            
            <dl>
               <dt>Lokation</dt>
               <dd>Kan være et sted, eller visuelt. Eksempel kan være metro kort, akupunktur krops punkter, ikea manual.</dd>
               <dt>Alfabet</dt>
               <dd>Kategorisering kan være efter fornavn, efternavn, relevans for bogstavet. En hurtig mulighed, men en kompliceret måde at gøre det på. Da det kan skabe problemer.</dd>
               <dt>Time</dt>
               <dd>- Chronology eller sequence. Opskrifter kan være et eksempel, da du gør det kronologisk. Et eksempel kan også være ligesom Venice, hvor de byggede huse og derefter gav dem et hus nummer alt efter hvornår de blev bygget først. Timelines, familie stamtræer.</dd>
                <dt>Category</dt>
                <dd>De har en mening med hinanden. De har ligheder, såsom grønsager samlet af agurker osv. Men folk har forskellige meninger, alt efter hvordan de ser lighederne. Så det kan skabe misforståelser. </dd>
                <dt>Hierarchy</dt>
                <dd>Grafer, popularitet etc. Det der kan nummer kategoriseres, eller skabe data. </dd>
            </dl>
            
        </div>
        
        
        <div id="video">
            
            <iframe width="560" height="315" src="https://www.youtube.com/embed/TsH8y5fbfX8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
        
            <div id="kilder">
                <h5>Øvrige kilder</h5>
                <p>Niels Østergaard PDF præsentation "Informationsarkitektur" - 5/11/2019<br>
                "Interfacedesign" 2019, Morten Rold: s. 165-180<br>
                "Kommunikation i multimediedesign", 2015<br>
                "interfacedesign", Morten Rold, s. 215-230. 
                <a href="https://www.youtube.com/watch?v=TsH8y5fbfX8&feature=emb_title">"All you need to know about Information Architecture in 10 minutes", Chris How</a><br>
                <a href="https://www.youtube.com/watch?v=ylvITZEAHX0&feature=emb_title">"Sir Isaac Newton’s Influence on the Color Wheel", Albert Munsell.</a><br>
                    <a hrf="https://www.interaction-design.org/literature/article/flow-design-processes-focusing-on-the-user-s-needs">"Flow Design Processes - Focusing on the Users' Needs"</a><br>
                    <a href="https://webstyleguide.com/wsg3/3-information-architecture/2-organizing-information.html">"Organizing Your Information",</a>
                    </p>
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