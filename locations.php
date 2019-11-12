<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Locations</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="page">
    <nav id="colorlib-main-nav" role="navigation">
      <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
      <div class="js-fullheight colorlib-table">
      	<div class="img" style="background-image: url(images/vv.jpg);"></div>
          <div class="row no-gutters">
            <div class="col-md-12 text-center">
              <h1 class="mb-4"><a href="index.html" class="logo">Satellites</a></h1>
              <ul>
                        <li><a href="index.html"><span>The Globe</span></a></li>
                        <li><a href="satellites.html"><span>NASA`s Satellites </span></a></li>
                        <li class="active"><a href="locations.php"><span>Locations</span></a></li>
						
                        <li><a href="gallery.html"><span>Gallery</span></a></li>
                        <li><a href="tests.html"><span>Test Yourself</span></a></li>					
                        <li><a href="about.php"><span>About Us</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div id="colorlib-page">
      <header>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="colorlib-navbar-brand">
                <a class="colorlib-logo" href="index.html"><span class="logo-img" style="background-image: url(images/person_1.png);"></span>Satdata</a>
              </div>
              <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
            </div>
          </div>
        </div>
      </header>
      <section class="ftco-section about-section">
	  "><center>
            <div class="container">
                <h2>Press this button to see the closest satellite to you.</h2>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Press Here!</button>
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                      <?php
                  $locations = array (
                      array (
                          "name" =>"AIRS",
                          "lat" => "32.15",
                          "lon" => "17.32"
                      )
                      ,
                      array (
                          "name" =>"CLOUDSAT",
                          "lat" => "-58.63",
                          "lon" => "-42.42"
                      )
                      ,
                      array (
                          "name" =>"MLS",
                          "lat" => "-44.32",
                          "lon" => "23.79"
                      )
                      ,
                      array (
                          "name" =>"MISR",
                          "lat" => "86.22",
                          "lon" => "55.82"
                      )
                      ,
                      array (
                          "name" =>"OCO-2",
                          "lat" => "18.35",
                          "lon" => "144.41"
                      )
                      ,
                      array (
                          "name" =>"SEAWIND",
                          "lat" => "44.15",
                          "lon" => "66.32"
                      )
                      
                      ,
                      array (
                          "name" =>"ASE",
                          "lat" => "72.73",
                          "lon" => "12.32"
                      )
                      
                      ,
                      array (
                          "name" =>"SMAP",
                          "lat" => "10.21",
                          "lon" => "-148.76"
                      )
                      
                      ,
                      array (
                          "name" =>"JASON-3",
                          "lat" => "-63.61",
                          "lon" => "-2.09"
                      )
                      
                      ,
                      array (
                          "name" =>"OCO-3",
                          "lat" => "67.15",
                          "lon" => "14.32"
                      )
                      
                      ,
                      array (
                          "name" =>"OPALS",
                          "lat" => "79.18",
                          "lon" => "-93.72"
                      )
                      
                      ,
                      array (
                          "name" =>"GRACE-FO",
                          "lat" => "-25.70",
                          "lon" => "95.09"
                      )
                      ,
                      array (
                          "name" =>"ASTERIA",
                          "lat" => "-22.86",
                          "lon" => "161.30"
                      ),
                      array (
                          "name" =>"CUBERRT",
                          "lat" => "-32.16",
                          "lon" => "-162.68"
                      ),
                      array (
                          "name" =>"GRIFEX",
                          "lat" => "-28.44",
                          "lon" => "21.15"
                      ),
                      array (
                          "name" =>"IPEX",
                          "lat" => "3.6",
                          "lon" => "-60.35"
                      ),
                      array (
                          "name" =>"ISARA",
                          "lat" => "41.49",
                          "lon" => "121.08"
                      ),
                      array (
                          "name" =>"COVE-2",
                          "lat" => "14.15",
                          "lon" => "14.32"
                      ),
                      array (
                          "name" =>"RAINCUBE",
                          "lat" => "48.2",
                          "lon" => "-77.37"
                      ),
                      array (
                          "name" =>"TEMPEST-D",
                          "lat" => "-3.02",
                          "lon" => "-1.68"
                      )
                     );
              function get_ip(){
              if(isset($_SERVER['HTTP_CLIENT_IP'])){
                return $_SERVER['HTTP_CLIENT_IP'];
              }
              elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
                return $_SERVER['HTTP_X_FORWARDED_FOR'];
              }
              else
              {return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
              }
              }
              $ip=get_ip();
              $query=@unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
              $base_location = array(
                  'lat' => $query['lat'],
                  'lng' => $query['lon']
                );
                $distances = array();
                foreach ($locations as $key => $location)
                {
                  $a = $base_location['lat'] - $location['lat'];
                  $b = $base_location['lng'] - $location['lng'];
                  $distance = sqrt(($a**2) + ($b**2));
                  $distances[$key] = $distance;
                }
                asort($distances);
                $closest = $locations[key($distances)];
                echo "Closest satellite is: " . $closest['name'];
              ?>.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </center>
          <div class="container">
              <center>
                 <h1 style="margin:40px">Real Time Locations Of Satellites</h1>
                  <h2>International Space Station</h2>
                  <script>
                      var norad_n2yo = '25544';
                      var size_n2yo = 'large';
                    </script>
                    <script type="text/javascript" src="https://www.n2yo.com/js/widget-tracker.js"></script>
                  <h2>Aeolus Location</h2>
                  <script>
                      var norad_n2yo = '43600';
                      var size_n2yo = 'large';
                    </script>
                    <script type="text/javascript" src="https://www.n2yo.com/js/widget-tracker.js"></script>
                    <h2>Asteria Location</h2>
                    <script>
                        var norad_n2yo = '43020';
                        var size_n2yo = 'large';
                      </script>
                      <script type="text/javascript" src="https://www.n2yo.com/js/widget-tracker.js"></script>
                      <h2>Cloudsat Location</h2>
                      <script>
                          var norad_n2yo = '29107';
                          var size_n2yo = 'large';
                        </script>
                        <script type="text/javascript" src="https://www.n2yo.com/js/widget-tracker.js"></script>
                        <h2>OCO-2 Location</h2>
                        <script>
                            var norad_n2yo = '40059';
                            var size_n2yo = 'large';
                          </script>
                          <script type="text/javascript" src="https://www.n2yo.com/js/widget-tracker.js"></script>
                          <h2>SMAP Location</h2>
                          <script>
                              var norad_n2yo = '40376';
                              var size_n2yo = 'large';
                            </script>
                            <script type="text/javascript" src="https://www.n2yo.com/js/widget-tracker.js"></script>
                            <h2>Jason-3 Location</h2>
                          <script>
                              var norad_n2yo = '41240';
                              var size_n2yo = 'large';
                            </script>
                            <script type="text/javascript" src="https://www.n2yo.com/js/widget-tracker.js"></script>
                            <h2>Opals Location</h2>
                          <script>
                              var norad_n2yo = '26063';
                              var size_n2yo = 'large';
                            </script>
                            <script type="text/javascript" src="https://www.n2yo.com/js/widget-tracker.js"></script>
                            <h2>GRACE-FO Location</h2>
                          <script>
                              var norad_n2yo = '43476';
                              var size_n2yo = 'large';
                            </script>
                            <script type="text/javascript" src="https://www.n2yo.com/js/widget-tracker.js"></script>
                            <h2>CUBERRT Location</h2>
                          <script>
                              var norad_n2yo = '43546';
                              var size_n2yo = 'large';
                            </script>
                            <script type="text/javascript" src="https://www.n2yo.com/js/widget-tracker.js"></script>
                            <h2>GRIFEX Location</h2>
                          <script>
                              var norad_n2yo = '40379';
                              var size_n2yo = 'large';
                            </script>
                            <script type="text/javascript" src="https://www.n2yo.com/js/widget-tracker.js"></script>
                            <h2>IPEX Location</h2>
                          <script>
                              var norad_n2yo = '39471';
                              var size_n2yo = 'large';
                            </script>
                            <script type="text/javascript" src="https://www.n2yo.com/js/widget-tracker.js"></script>
                            <h2>ISARA Location</h2>
                          <script>
                              var norad_n2yo = '43050';
                              var size_n2yo = 'large';
                            </script>
                            <script type="text/javascript" src="https://www.n2yo.com/js/widget-tracker.js"></script>
                            <h2>MCUBED-2 Location</h2>
                          <script>
                              var norad_n2yo = '39469';
                              var size_n2yo = 'large';
                            </script>
                            <script type="text/javascript" src="https://www.n2yo.com/js/widget-tracker.js"></script>
                            <h2>RAINCUBE Location</h2>
                          <script>
                              var norad_n2yo = '39469';
                              var size_n2yo = 'large';
                            </script>
                            <script type="text/javascript" src="https://www.n2yo.com/js/widget-tracker.js"></script>
                            <h2>TEMPEST-D Location</h2>
                          <script>
                              var norad_n2yo = '43547';
                              var size_n2yo = 'large';
                            </script>
                            <script type="text/javascript" src="https://www.n2yo.com/js/widget-tracker.js"></script>
                      </center>
          </div>
        </section>
      <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-5 text-center">
           
              <div class="ftco-footer-widget">
                <h2 class="mb-3">Contact Us</h2>
                <p class="h3 email"><a href="#">satdata12@gmail.com</a></p>
              </div>
              <div class="ftco-footer-widget mb-5">
                  <ul class="ftco-footer-social list-unstyled">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
            </div>
          </div>
        </div>
      </footer>
      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
      </div>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    
  </body>
</html>