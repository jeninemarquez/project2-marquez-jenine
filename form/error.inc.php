<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link href="https://fonts.googleapis.com/css?family=Domine|Open+Sans|Trocchi&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="..css/styles.css">

  </head>
  <body>
    <header class="navbar">
    <h1 class="navlogo"><a href="home.html">North State Pizza</a></h1>
        <nav>
          <ul class="navlinks">
            <li><a href="menu.html">Menu</a></li>
            <li><a href="catering.html">Catering</a></li>
            <li><a href="https://www.grubhub.com/restaurant/north-state-pizza-549-n-state-rd-briarcliff-manor/317735">Order Online</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li class="call-now"><a href="tel:914-800-9100">Call Now!&nbsp;&nbsp;<i class="fa fa-phone" aria-hidden="true"></i></a><li>
          </ul>
        </nav>
      </header>

      <main>
        <figure class="background-image">
          <img src="images/pasta.jpg" alt="Pasta" title="Contact Us" class="header show-on-scroll">
          <figcaption class="center-text animated fadeInUp">Contact Us</figcaption>
        </figure>

        <h2 class="contact-h2">Please feel free to reach out to us. Any comments or suggestions are always welcome!</h2>

        <h2>Missing fields</h2>
        <p>Sorry, you have not completed all of the required fields.</p>
        <p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

        <ul>
        <?php
        	for($i=0; $i<count($this->missing_required_fields); $i++){
        		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
        	}
        ?>
        </ul>

        <p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>


<div class="review-box">
  <h2>Enjoyed your experience? Leave a review!</h2>
  <ul class="review-buttons">
    <li class="review-button"><a href="https://www.yelp.com/biz/north-state-pizza-briarcliff-manor-2"><i class="fa fa-yelp"></i></a></li>
    <li class="review-caption">Yelp</li>
    </ul>
    <ul class="review-buttons">
    <li class="review-button"><a href="https://www.tripadvisor.com/Restaurant_Review-g47359-d7251896-Reviews-North_State_Pizza-Briarcliff_Manor_New_York.html"><i class="fa fa-tripadvisor"></i></a></li>
    <li class="review-caption">TripAdvisor</li>
    </ul>
    <ul class="review-buttons">
    <li class="review-button"><a href="https://www.facebook.com/pages/category/Italian-Restaurant/North-State-Pizza-442855645816256/"><i class="fa fa-facebook"></i></a></li>
    <li class="review-caption">Facebook</li>
    </ul>
    <ul class="review-buttons">
    <li class="review-button"><a href="https://www.google.com/search?q=north+state+pizza+google+reviews&oq=north+state+pizza+google+reviews&aqs=chrome..69i57.13103j0j1&sourceid=chrome&ie=UTF-8#lrd=0x89c2b8b5a3f7aa05:0xbcdff84bf5814141,1,,,"><i class="fa fa-google"></i></a></li>
    <li class="review-caption">Google</li>
  </ul>
</div>
</main>
</body>
