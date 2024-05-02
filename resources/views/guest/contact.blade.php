@extends('guest.layouts.app')
@section('title', 'Contact')
@section('content')
<section class="page-title page-title-4 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
  <div class="bg-section"><img src="assets/images/page-titles/10.jpg" alt="Background"/></div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="title text-lg-left"> 
          <div class="title-sub-heading">
            <p>24/7 Customer &amp; Services</p>
          </div>
          <div class="title-heading">
            <h1>Global Logistics Partner To World’s Famous Brands For Over 25 Years!</h1>
          </div>
          <div class="clearfix"></div>
         
        </div>
        <!-- End .title -->
      </div>
      <!-- End .col-lg-8 -->
    </div>
    <!-- End .row-->
  </div>
  <!-- End .container-->
</section>
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
                      <li><span class="fas fa-envelope"></span><a href="mailto::{{config('app.contact_email')}}">{{config('app.contact_email')}}</a></li>
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
     @endsection