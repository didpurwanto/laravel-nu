@extends('main')

@section('title', '| Contact')

@section('content')

 <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
          <div class="container">
              <div class="banner_content text-center">
                  <h2>Contact Us</h2>
              </div>
          </div>
      </div>
  </section>

  <section class="section-margin">
    <div class="container">
       <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Send us a message</h2>
        </div>
        <div class="col-lg-8 mb-4 mb-lg-0">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                </div>
              </div>
            </div>

            <div class="form-group mt-lg-3">
              <button type="submit" class="genric-btn info">Send</button>
            </div>
          </form>


        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <p>Suite 304, Level 2-UL40, 1341 Dandenong Rd. CHADSTONE VIC 3148. Australia.</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654"> (+61) 0427668340</a></h3>
                <p>Monday to Friday 9 AM to 6 PM</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:info@joinaustralian.com">info@joinaustralian.com</a></h3>
                <p>Contact me here!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop

