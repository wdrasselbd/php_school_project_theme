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

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">

      <h2 class="main-heading">
        Contact Now

      </h2>
      <p class="text-center">
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla

      </p>
      <div class="">
        <div class="contact_section-container">
          <div class="row">
            <div class="col-md-6 mx-auto">
              <div class="contact-form">
                <form action="">
                  <div>
                    <input type="text" placeholder="Name">
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number">
                  </div>
                  <div>
                    <input type="email" placeholder="Email">
                  </div>
                  <div>
                    <input type="text" placeholder="Message" class="input_message">
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn_on-hover">
                      Send
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- end contact section -->

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