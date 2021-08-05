<?php

/*
Template name:contact-us

*/


?>
<?php get_header();?>

<div class="content">
	<div class="embed-responsive">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d35818.719732048536!2d-4.25169!3d55.868392!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488815562056ceeb%3A0x71e683b805ef511e!2sGlasgow%2C+Glasgow+City%2C+UK!5e0!3m2!1sen!2sus!4v1448625188752" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
    
  
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-8">
          <div class="form h-100">
            <h3>Contact Us</h3>
            <form class="mb-5" method="post" id="contactForm" name="contactForm">
              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Name *</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Email *</label>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="Your email">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Phone</label>
                  <input type="text" class="form-control" name="phone" id="phone"  placeholder="Phone #">
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Company</label>
                  <input type="text" class="form-control" name="company" id="company"  placeholder="Company  name">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-5">
                  <label for="message" class="col-form-label">Message *</label>
                  <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="Write your message"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>

            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
              Your message was sent, thank you!
            </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-info h-100">
            <h3>Contact Information</h3>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, magnam!</p>
            <ul class="list-unstyled">
              <li class="d-flex">
                <span class="wrap-icon icon-room mr-3"></span>
                <span class="text">9757 Aspen Lane South Richmond Hill, NY 11419</span>
              </li>
              <li class="d-flex">
                <span class="wrap-icon icon-phone mr-3"></span>
                <span class="text">+1 (291) 939 9321</span>
              </li>
              <li class="d-flex">
                <span class="wrap-icon icon-envelope mr-3"></span>
                <span class="text">info@mywebsite.com</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    

  </div>

