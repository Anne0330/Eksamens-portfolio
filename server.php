<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Server</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="servercss.css">
        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <header><!--introduktion-->
        <h1>Server</h1>
        
        <div id="introtekst">
             <p>Her kan du læse om serverbegrebet</p>
        </div>
    </header>
    
    <body> 
        <!--til top knap-->
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
           <!-- php start-->
        <?php include "menu.inc"; ?>
            <!-- php slut-->
   <!--banner-->
        <div id="htmltitel"> 
            <img src="htmltitelbillede1.jpg" alt="eye code" height="200px">
        </div>
<section><!--server tekst og video-->
            <div id="server">
                
                <h2>Server-begrebet</h2>
                
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/SwLdKeC8scE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
                <a href="https://www.youtube.com/watch?v=SwLdKeC8scE">Kilde</a>
                
                    <p>Serverbegrebet er en hardware med en særlig rolle og en et Software med en særlig rolle. Der kan kære flere server-programmer på samme tid, på én computer. Maskinen er typisk nævnt som ”server”, hvor programmet som regel er kaldet i denne formel ”[funktion]+server eks. Mailserver. En server kan være placeret i et datacenter eller på et skrivebord.</p>
        </div>
</section>   
<section> <!--server defintion-->
        <div id="typeserver">
            <h3>Der er forskellige typer servere</h3>
                <dl>
                    <dt>Fil-server</dt>
                        <dd>En computer som centralt lagre og leder datafilerne, så der andre computere på samme netværk kan komme til filerne.</dd>
                        <dd><a href="https://searchnetworking.techtarget.com/definition/file-server">Kilde</a></dd>
                    <dt>Print-server</dt>
                        <dd>En computer som kan printe, eller forbinde sig til en printer.</dd>
                        <dd><a href="https://www.techopedia.com/definition/3619/print-server-pserver">Kilde</a></dd>
                    <dt>Web-server</dt>
                        <dd>I hardware forstand, er det en webserver, som kan inholde flere softwaremæssig servere. Den leverer websider via http-protokollen - Hypertext Transfer Protocol.</dd>
                        <dd><a href="https://developer.mozilla.org/en-US/docs/Learn/Common_questions/What_is_a_web_server">Kilde</a></dd>
                        <dd><a href="https://www.w3schools.com/whatis/whatis_http.asp">Kilde</a></dd>
                    <dt>FTP-server</dt>
                        <dd>File transfer protocol – server. Den kommunikerer med en FTP-klient - eks filezilla</dd>
                        <dd><a href="https://titanftp.com/2018/09/11/what-is-an-ftp-server/">Kilde</a></dd>
                    <dt>Mail-server</dt>
                        <dd>Et computer system som sender og modtager emails.</dd>
                        <dd><a href="https://techterms.com/definition/mail_server">Kilde</a></dd>
                    <dt>Database-server</dt>
                        <dd>Modtagning af data fra, og leverer til webserver og andre klienter.</dd>
                        <dd><a href="http://ecomputernotes.com/fundamental/what-is-a-database/what-is-a-database-server">Kilde</a></dd>
                    <dt>SSH-server</dt>
                        <dd>Secure shell er netværks sikkerhed til at to computere kan kommunikere med hinanden, da der bruges enkryptering og autentikation teknikker. Filerne der bliver sendt, kan ikke læses af andre eller manipuleres med, medmindre man er modtager parten som er autentikeret. Der kan ske en direkte fil adgang med terminaladgang (SSH), hvis man ikke vil bruge FTP.</dd>
                        <dd><a href="https://www.ionos.com/digitalguide/server/tools/ssh-secure-shell/">Kilde</a></dd>
                    <dt>RDP-server</dt>
                        <dd>Remote desktop protocol, er en protokol udviklet af Microsoft. Der bruges RDS service til at kommunikere med en RDS klient. Det gør at IT konsulenter kan kontrollere ens computer, uanset placering i landet.</dd>
                        <dd><a href="https://www.parallels.com/blogs/ras/rdp-server/">Kilde</a></dd>
                </dl>
            
        </div>
</section>   
<section><!--klienter-->
        <div id="klient">
            <h3>klienter</h3>
                <p>En server har brug for en klient, hvor klienten er et program som kobler sig til serveren. Klienten udveksler informationer med hinanden. FTP er den mest udbredte metode, til at få adgang til en server.<br>
                I mit tilfælde, bruger jeg FileZilla som min klient.<br> 
                Webserveren kan levere i flere formater såsom HTML, CSS og Javascript samt billeder mv. til klienter (browsere). De nødvendige filer vil være lagret på serveren, med en IP-adresse som kan, eller er tilknyttet et domæne. En browser kan anvende ip-adresse eller domæne, hvor domænenavnet oversættes i en DNS-server til den rigtige ip-adresse.</p>
        </div>
        
            <div id="kilderserver">
                <p> Kilder: Niels Østergaard powerpoint præsentation "Internettets historie og serverbegrebet".<br>
                <a href="https://www.geeksforgeeks.org/client-server-model/">"Client-Server Model" - geeksforgeeks</a>
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