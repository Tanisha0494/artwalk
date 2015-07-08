<footer class="cf">
  <nav class="cf">

  	<ul id="fnav" class="cf">

  		<li class="fhome"><a href="index.php">Home</a></li>

      <li class="fkids"><a href="kidswalk.php">Kidswalk</a></li>

      <li class="fartist"><a href="artist.php">Artists</a></li>

      <li class="fcontact"><a href="contact.php">Contact</a></li>

      <li class="fterms"><a href="terms.php">Terms of Services & Privacy Policy</a></li>
      
      <li class="fart"><a href="http://www.artwalksandiego.org/ntc/" target="_blank" title="ArtWalk NTC - Official Site">ArtWalk NTC</a></li>

  	</ul>

    </nav>

  <section class="social cf">

    <h2 class="hide">Social Media Icons</h2>
    
    <a href="https://www.facebook.com/ArtWalkSD" target="_blank"><img src="images/face-05.jpg" title="Facebook" alt="Facebook icon"></a>

    <a href="https://twitter.com/ArtWalkSD" target="_blank"><img src="images/twit-03.jpg" title="Twitter" alt="Twitter icon"></a>

    <a href="http://www.pinterest.com/artwalksandiego/" target="_blank"><img src="images/pin-04.jpg" title="Pintrest" alt="Pinterest icon"></a>

    <a href="http://www.instagram.com/artwalksd" target="_blank"><img src="images/insta-02.jpg" title="Instagram" alt="Instagram icon"></a>
  
  </section>

</footer>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script src="js/responsiveslides.js"></script>

<script>

  $(function() {

    $(".rslides").responsiveSlides();

  });

  $(".rslides").responsiveSlides({

  auto: true,             // Boolean: Animate automatically, true or false
  speed: 500,            // Integer: Speed of the transition, in milliseconds
  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: false,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: false,           // Boolean: Pause on hover, true or false
  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
  prevText: "Previous",   // String: Text for the "previous" button
  nextText: "Next",       // String: Text for the "next" button
  maxwidth: "1000px",           // Integer: Max-width of the slideshow, in pixels
  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
  manualControls: "",     // Selector: Declare custom pager navigation
  namespace: "rslides",   // String: Change the default namespace used
  before: function(){},   // Function: Before callback
  after: function(){}     // Function: After callback
  
});

document.querySelector( "#nav-toggle" ).addEventListener( "click", function() {
  this.classList.toggle( "active" );
});



</script>

</body>
    
</html>