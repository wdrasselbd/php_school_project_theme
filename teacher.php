<!DOCTYPE html>
<html>

<head>
  
  <!-- head link -->
  <?php include "alllink.php"?>
  <!-- head link -->

</head>

<body>
  <!-- start header section -->
<?php include "header.php"?>
  <!-- end header section -->

  <!-- teacher section -->
  <section class="teacher_section layout_padding-bottom">
    <div class="container">
      <h2 class="main-heading ">
        Our Teachers
      </h2>
      <p class="text-center">
        Ipsum available, but the majority h
      </p>
      <div class="teacher_container layout_padding2">
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="images/teacher-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Den Mark</h5>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/teacher-2.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Leena jorj</h5>
            </div>

          </div>
          <div class="card">
            <img class="card-img-top" src="images/teacher-3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Magi Den</h5>

            </div>

          </div>

          <div class="card">
            <img class="card-img-top" src="images/teacher-4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">jonson mark</h5>

            </div>

          </div>
        </div>
      </div>


      <div class="d-flex justify-content-center mt-3">
        <a href="" class="call_to-btn  ">

          <span>
            See More
          </span>
          <img src="images/right-arrow.png" alt="">
        </a>
      </div>
    </div>
  </section>

  <!-- teacher section -->


  <!-- footer section -->
  <?php include "footer.php"?>
  <!-- footer section -->

  <!-- footer section script-->
  <?php include "alllink.php"?>
  <!-- progreesbar script -->

  </script>
  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <?php include "alllink.php"?>
  </script>
  <!-- end google map js -->
</body>

</html>