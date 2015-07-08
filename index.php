<?php 

$page = "Home";
require_once('includes/header.php');

?>

<main class="cf">

<h1> Artwalk NTC </h1>

<h2> August 16 & 17,2014 10AM - 6PM </h2>

<h2> Free Admission - Free Parking </h2>

<h3> Location: NTC Liberty Station at Ingram Plaza </h3>

<h3><a href="#directions">2645 Historic Decatur, San Diego, CA 92106</a></h3>

<p>Celebrate Creativity at ArtWalk NTC.  This 9th annual festival moved to NTC @ Liberty Station in 2013, and the venue was a tremendous success. Artists love the flat grassy park with easy load-in and strike access, and the layout provides every artist with a corner space.</p>

<p>Attendees will enjoy the opportunity to purchase artwork from more than 175 fine artists, all in a beautiful al fresco setting, plus live music, interactive art for adults and kids, and delicious street food options.</p>

<h4>FREE ATTENDANCE. FREE PARKING, MARK YOUR CALENDAR AND PLAN TO ATTEND!</h4>

</main>

<aside>
<h2>Here’s a video recap of last year’s festival:</h2>

<div class="video">

<iframe width="560" height="315" src="http://www.youtube.com/embed/DQq8oE3o7dw" allowfullscreen></iframe>

</div>	

</aside>

<section id="directions">
<h2>Directions to Liberty Station</h2>

<h3>From the North:</h3>
<p>From Interstate 5, take Rosecrans South. Enter NTC at Liberty Station at Roosevelt and Rosecrans (Gate 3). Free parking is available in all parking lots.</p>

<h3>From the South:</h3>
<p>From Interstate 5, take the Pacific Highway exit. Stay to the left and take the Barnett Avenue exit. Continue straight onto Lytton. Take a left on Sellers Plaza (Gate 1). Sellers Plaza will merge to Truxtun. The NTC at Liberty Station buildings start at the corner of Truxtun and Dewey. Free parking is available in all parking lots.</p>

<h3>From the East:</h3>
<p>From Interstate 8, take the Rosecrans exit. Continue on Rosecrans to Roosevelt. Enter NTC at Liberty Station by taking a left on Roosevelt (Gate 3). Free parking is available in all parking lots.</p>

<h3>From Downtown or the Airport:</h3>
<p>From Downtown, take Harbor Drive past airport to Laning Road. Turn Right and take it to Rosecrans. Right on Rosecrans and right on Roosevelt (Gate 3). Free parking is available in all parking lot</p>

<h3>Bus & Trolley Access:</h3>
<p>Take the MTS Bus or Trolley to the Old Town Trolley Station. At the station, board the 28 bus and exit at the Roosevelt & Rosecrans stop</p>
</section>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script>


  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });


</script>

<?php include_once('includes/footer.php') ?>