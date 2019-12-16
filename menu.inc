<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<div class="sidenav">
  <a href="HTML-skelet.php">Forside</a>
        <button class="dropdown-btn">Webudvikling<i class="fa fa-caret-down"></i>
        </button>
  <div class="dropdown-container">
    <a href="#">HTML</a>
    <a href="#">Tags</a>
    <a href="#">Attributter</a>
    <a href="#">CSS</a>
    <a href="#">Internettets<br>historie</a>
    <a href="#">SEO</a>
    <a href="#">Server<br>begrebet</a>
    <a href="#">Verssions<br>styring</a>
    <a href="#">Serverside<br>scripting</a>
  </div>
      <button class="dropdown-btn">Design<i class="fa fa-caret-down"></i>
  </button>
    <div class="dropdown-container">
        <a href="#">IA</a>
        <a href="#">Fotografi</a>
        <a href="#">Illustrator</a>
        <a href="#">Photoshop</a>
        <a href="#">Farver</a>
        <a href="#">Typografi</a>
        <a href="#">Gestaltlove</a>
        <a href="#">Moodboards</a>
        <a href="#">Styletiles</a>
        <a href="#">Informations arkitektur</a>
    </div>
    <button class="dropdown-btn">Virksomheds forståelse<i class="fa fa-caret-down"></i>
  </button>
     <div class="dropdown-container">
         <a href="#">Præsentations teknik</a>
         <a href="#">Paradigmer</a>
         <a href="#">Kvantitativ</a>
         <a href="#">Kvalitativ</a>
         <a href="#">Brugertest</a>
         <a href="#">Tekst<br>produktion</a>
         <a href="#">BMC</a>
         <a href="#">Value<br>proposition</a>
         <a href="#">Ophavsret og<br>licens</a>
         <a href="#">Transkribering</a>
    </div>
        <a href="#">Om siden</a>
        <a href="#">Kontakt</a>
    </div>
</div>

<script>
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
          window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
    }
    }
            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
            document.body.scrollTop = 0; // For Chrome, Safari and Opera
            document.documentElement.scrollTop = 0; // For IE and Firefox
        }  
            
</script>