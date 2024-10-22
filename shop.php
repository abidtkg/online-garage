<?php require_once('layouts/header.php'); ?>
 <!-- navbar-start -->
<?php require_once('layouts/navbar.php');?>

<!-- banner-area -->
<?php require_once('layouts/banner.php');?>

<div id="demo">

</div>

<button onclick="getLocation()">Try It</button>


<script>
    var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
    x.innerHTML = `<iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen 
    src="https://maps.google.com/maps?key=AIzaSyBQ_3Ab9HTgR5CUeB6Sgj6TI_JAbikBT14&q=${position.coords.latitude},${position.coords.longitude}&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0">
</iframe>`;
//   x.innerHTML = "Latitude: " + position.coords.latitude + 
//   "<br>Longitude: " + position.coords.longitude;
}
</script>

<!-- footer-area -->
<?php require_once('layouts/footer.php');?>