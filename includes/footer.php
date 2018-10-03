      <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
      <!-- ================ -->
      
      <footer id="footer" class="clearfix dark">

        <!-- .footer start -->
        <!-- ================ -->
        <div id="CONT" class="footer">
          <div class="mb-2 mt-1">
            <div class="footer-inner">
              <div class="row back_light" style="margin-right: 0.1px;">
                <div class="col-lg-3 col-sm-3">
                 <div class="footer-content">
                  </div>
                </div>
                <div class="col-lg-3 col">
                  <div class="footer-content" style="padding-bottom: 0px;" >
                    <div id="map" class="footer-map">
                      
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                  <div class="footer-content ">
                     <h2 class="montBold text-center mt-4"><strong style="color: black; font-size: 36px;">CONTACT</strong></h2>
                     <p class="fira text-center" style="font-size: 20px; color: black;">Bulevar Petra Cetinjskog 56</p>
                     <p class="fira text-center" style="font-size: 20px; color: black;">81000 , Podgorica, Montenegro</p>
                     <br>
                     <p class="fira text-center" style="font-size: 20px; color: black;">+382 223 240</p>
                     <p class="fira text-center" style="font-size: 20px; color: black;">info@amplitudo.me</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .footer end -->

        <!-- .subfooter start -->
        <!-- ================ -->
        <div class="subfooter">
          <div class="container">
            <div class="subfooter-inner">
              <div class="row">
                <div class="col-md-12">
                  <p class="montBold" style="color: #fff; font-size: 12px;">GLOBAL <span style="color: #f2cd29 "> | </span>ASIA EMEA THE AMERICAS</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container firaLight" style="color: #f2cd29; font-size: 12px;">
          <div class="row pb-3 pt-1">2018&copy; &nbsp;<spam class="firaBold">GOLIN PODGORICA</spam>&nbsp; &nbsp;All rights reserved</div>
        </div>
        <!-- .subfooter end -->

      </footer>
      <!-- footer end -->
    </div>
    <!-- page-wrapper end -->

    <!-- JavaScript files placed at the end of the document so the pages load faster -->
    <!-- ================================================== -->
    <!-- Jquery and Bootstap core js files -->
    <script src="css/plugins/jquery.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery Revolution Slider  -->
    <script src="css/plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js"></script>
    <script src="css/plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Isotope javascript -->
    <script src="css/plugins/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="css/plugins/isotope/isotope.pkgd.min.js"></script>
    <!-- Magnific Popup javascript -->
    <script src="css/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Appear javascript -->
    <script src="css/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="css/plugins/waypoints/sticky.min.js"></script>
    <!-- Count To javascript -->
    <script src="css/plugins/countTo/jquery.countTo.js"></script>
    <!-- Morphext -->
    <script src="css/plugins/typed/typed.min.js"></script>
    <!-- Slick carousel javascript -->
    <script src="css/plugins/slick/slick.min.js"></script>
    <!-- Initialization of Plugins -->
    <script src="css/js/template.js"></script>

    <script>
    // Initialize and add the map
    function initMap() {
      var place = {lat: 42.442440, lng: 19.248806};
      var map = new google.maps.Map(
          document.getElementById('map'), {zoom: 16, center: place}
          );
      var marker = new google.maps.Marker({position: place, map: map});
    }
    </script>
     <!-- Google Maps -->
    <script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAc2NxfPIxi5pE3A5Nfc6KQltljLFJTQUo&callback=initMap">
    </script>
    
    
    

    
    
  </body>
</html>
