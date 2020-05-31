@extends('main')

@section('title', '| Blog')

@section('content')

 <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
          <div class="container">
              <div class="banner_content text-center">
                  <h2>Testimonials</h2>
                  
              </div>
          </div>
      </div>
  </section>

  <!--================ Start Testimonial Area =================-->
  <section class="testimonial_area">
    <div class="container">
     

      <div class="owl-carousel owl-theme testimonial-slider ">
        

        <div class="testimonial-item">
          <div class="row">
            <div class="col-lg-6">
              <div class="testi-img mb-4 mb-lg-0">
                <img src="imgs/testimonial1.png" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="testi-right">
                <h4>Jason Chang </h4>
                <p><small> Finance broker in China</small></p>

                <p><i>Because of Australia's environment and climate, as well as freehold property rights, we have always considered wanting to invest in a property. However, the information and situation is limited. Elma has given us great help. The professional business level is excellent. We are very familiar with the surroundings and accessories we need to understand. The service is serious and intimate. Many things are considered in front of us. The most important thing is to be reliable. You do n’t have to worry about unfamiliar situations, but worry about losses.</i> </p>
                
              </div>
            </div>
          </div>
        </div>

        <div class="testimonial-item">
          <div class="row">
            <div class="col-lg-6">
              <div class="testi-img mb-4 mb-lg-0">
                <img src="imgs/testimonial2.png" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="testi-right">
                <h4>Alice Kao</h4>
                <p><small> Sous  Chef </small></p>

                <p><i>
                  It ’s been a while since I met Elma. In fact, I have been listening to no other ideas.
                  After all, the amount of real estate entry is not low, I always find it difficult to invest
                  Fortunately, Elma always encouraged me with his own experience and took me to take that first step
                  We are going to hand over the first investment house, thank you so much</i></p>
                
              </div>
            </div>
          </div>
        </div>

        <div class="testimonial-item">
          <div class="row">
            <div class="col-lg-6">
              <div class="testi-img mb-4 mb-lg-0">
                <img src="imgs/testimonial3.png" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="testi-right">
                <h4>Bella Liu </h4>
                <p><small> 百貨業人員</small></p>

                <p><i>
                Elma is not only professional but also very patient with us. She not only listens to meet our needs, she also provides a more long-term plan.
                Let us feel at ease.</i> </p>
                        
              </div>
            </div>
          </div>
        </div>

        
      </div>
    </div>
  </section>
  <!--================ End Testimonial Area =================-->

  @stop

