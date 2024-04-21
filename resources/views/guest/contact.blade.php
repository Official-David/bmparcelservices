@extends('guest.layouts.app')
@section('title', 'Contact')
@section('content')
      <!--
      ============================
      Google Maps Section
      ============================
      -->
      <section class="map map-2"> 
        <iframe class="map-gray" src="https://maps.google.com/maps?q=Pioneer%20Works&amp;t=m&amp;z=13&amp;output=embed&amp;iwloc=near" width="600" height="450" style="border:0;"></iframe>
      </section>
      <!--
      ============================
      Contact Information Section
      ============================
      -->
      <section class="contact-info"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-lg-4">
              <div class="row">
                <div class="col-12 col-sm-6 col-lg-12">
                  <div class="contact-details"> 
                    <h6>contact details</h6>
                    <ul class="list-unstyled info">
                      <li><span class="fas fa-map-marker-alt"></span><a href="javascript:void(0)">New York 11226 United States.</a></li>
                      <li><span class="fas fa-envelope"></span><a href="mailto::Equita@7oroof.com">Equita@7oroof.com</a></li>
                      <li><span class="fas fa-phone-alt"></span><a href="tel:01061245741">(002) 01061245741</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-12">
                  <div class="opening-hours"> 
                    <h6>opening hours</h6>
                    <ul class="list-unstyled"> 
                      <li> <span>Monday-friday</span><span>10:00 - 18:00</span></li>
                      <li> <span>saturday</span><span>10:00 - 14:00</span></li>
                      <li> <span>sunday</span><span>closed</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-8"> 
              <form class="contactForm" method="post" action="https://demo.zytheme.com/equita/assets/php/contact.php">
                <div class="row"> 
                  <div class="col-12 col-lg-4">
                    <input class="form-control" type="text" name="contact-name" placeholder="name" required=""/>
                  </div>
                  <div class="col-12 col-lg-4"> 
                    <input class="form-control" type="text" name="contact-email" placeholder="email" required=""/>
                  </div>
                  <div class="col-12 col-lg-4"> 
                    <input class="form-control" type="text" name="contact-website" placeholder="website" required=""/>
                  </div>
                  <div class="col-12"> 
                    <textarea class="form-control" name="contact-message" cols="30" rows="2" placeholder="message" required=""></textarea>
                  </div>
                  <div class="col-12">
                    <input class="btn btn--primary" type="submit" value="Submit"/>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- End .row-->
        </div>
        <!-- End .container-->
      </section>
      <!--
      ============================
      Footer #1
      ============================
      -->
      <footer class="footer footer-1">
        <div class="footer-top"> 
          <div class="container"> 
            <div class="row"> 
              <div class="col-12 col-lg-3 col-xl-4">
                <div class="footer-logo"><img class="footer-logo" src="assets/images/logo/logo-light.png" alt="logo"/></div>
              </div>
              <div class="col-12 col-lg-9 col-xl-8">
                <div class="widget-newsletter">
                  <div class="widget-content">
                    <p>Sign up for industry alerts,<br/>insights from Equita.</p>
                    <form class="form-newsletter mailchimp">
                      <input class="form-control" type="email" name="email" placeholder="Your Email Address"/>
                      <input class="btn btn--primary" type="submit" value="sign up!"/>
                      <div class="subscribe-alert"></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-center">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-3 footer-widget widget-about">
                <div class="footer-widget-title">
                  <h5>about</h5>
                </div>
                <div class="widget-content">
                  <p>Equita is a representative logistics operator providing full range of service in the sphere of customs cargo and transportation worldwide.</p>
                  <!-- Start .module-social-->
                  <div class="module module-social"><a class="share-facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"> </i></a><a class="share-instagram" href="javascript:void(0)"><i class="fab fa-instagram"></i></a><a class="share-twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i></a></div>
                  <!-- End .module-social-->
                </div>
              </div>
              <!--  End .col-lg-4 -->
              <div class="col-sm-6 col-md-6 col-lg-2 offset-lg-2 footer-widget widget-links">
                <div class="footer-widget-title">
                  <h5>services</h5>
                </div>
                <div class="widget-content">
                  <ul>
                    <li><a href="javascript:void(0)">warehouse</a></li>
                    <li><a href="javascript:void(0)">air freight</a></li>
                    <li><a href="javascript:void(0)">ocean freight</a></li>
                    <li><a href="javascript:void(0)">road freight</a></li>
                    <li><a href="javascript:void(0)">supply chain</a></li>
                    <li><a href="javascript:void(0)">packaging</a></li>
                  </ul>
                </div>
              </div>
              <!--  End .col-lg-2-->
              <div class="col-sm-6 col-md-6 col-lg-2 footer-widget widget-links">
                <div class="footer-widget-title">
                  <h5>industries</h5>
                </div>
                <div class="widget-content">
                  <ul>
                    <li><a href="javascript:void(0)">retail & consumer</a></li>
                    <li><a href="javascript:void(0)">sciences & healthcare</a></li>
                    <li><a href="javascript:void(0)">industrial & chemical</a></li>
                    <li><a href="javascript:void(0)">power generation</a></li>
                    <li><a href="javascript:void(0)">food & peverage</a></li>
                    <li><a href="javascript:void(0)">oil & gas</a></li>
                  </ul>
                </div>
              </div>
              <!--  End .col-lg-2-->
              <div class="col-sm-6 col-md-6 col-lg-3 footer-widget widget-contact">
                <div class="footer-widget-title">
                  <h5>quick contact</h5>
                </div>
                <div class="widget-content">
                  <p>If you have any questions or need help, feel free to contact with our team.</p>
                  <ul> 
                    <li class="phone"><a href="tel:+01061245741"><i class="fas fa-phone-alt"></i> 01061245741</a></li>
                    <li class="address"><a href="javascript:void(0)">2307 Beverley Rd Brooklyn, New York 11226 United States.</a></li>
                  </ul>
                </div>
              </div>
              <!--  End .col-lg-2-->
            </div>
            <div class="clearfix"></div>
          </div>
          <!--  End .container-->
        </div>
        <!--  End .footer-center-->
        <div class="footer-bottom">
          <div class="row">
            <div class="col-md-12 col-md-12 text--center footer-copyright">
              <div class="copyright"><span>&copy; Equita, With Love by</span><a href="https://1.envato.market/kP9BV"> Zytheme.com</a></div>
            </div>
          </div>
          <!--  End .row-->
        </div>
        <!--  End .footer-bottom-->
      </footer>
      <div class="backtop" id="back-to-top"><i class="fas fa-chevron-up"></i></div>
    </div>
    <!--  Footer Scripts==
    -->
    <script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/functions.js"></script>
  </body>
</html>