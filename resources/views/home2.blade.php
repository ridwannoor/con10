@extends('layouts.app1')


@section('feature')

<div id="feature">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="text-wrapper">
            <div>
              <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s">We are helping to grow <br> your business.</h2>
              <p class="mb-4">A digital studio specialising in User Experience & eCommerce, we combine innovation with digital craftsmanship to help brands fulfill their potential.</p>
              <a href="#" class="btn btn-common">More About Us</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 padding-none feature-bg">
          <div class="feature-thumb">
            <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="icon">
                <i class="lni-microphone"></i>
              </div>
              <div class="feature-content">
                <h3>What we do</h3>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores </p>
              </div>
            </div>
            <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="icon">
                <i class="lni-users"></i>
              </div>
              <div class="feature-content">
                <h3>Meet our team</h3>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores </p>
              </div>
            </div>
            <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="700ms">
              <div class="icon">
                <i class="lni-medall-alt"></i>
              </div>
              <div class="feature-content">
                <h3>Our Creation</h3>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('services')
<section id="services" class="section-padding bg-gray">
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Our Services</h2>
        <p>A desire to help and empower others between community contributors in technology <br> began to grow in 2020.</p>
      </div>
      <div class="row">
        <!-- Services item -->
        <div class="col-md-6 col-lg-4 col-xs-12">
          <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
            <div class="icon">
              <i class="lni-pencil"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">Content Writing</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-4 col-xs-12">
          <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
            <div class="icon">
              <i class="lni-briefcase"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">Digital Marketing</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-4 col-xs-12">
          <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
            <div class="icon">
              <i class="lni-cog"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">Web Development</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-4 col-xs-12">
          <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
            <div class="icon">
              <i class="lni-mobile"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">IOS & Android</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-4 col-xs-12">
          <div class="services-item wow fadeInRight" data-wow-delay="1.5s">
            <div class="icon">
              <i class="lni-layers"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">UI/UX Design</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-4 col-xs-12">
          <div class="services-item wow fadeInRight" data-wow-delay="1.8s">
            <div class="icon">
              <i class="lni-rocket"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">Branding & Identity</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('video-promo')
<section class="video-promo section-padding">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="video-promo-content text-center wow fadeInUp" data-wow-delay="0.3s">
            <a href="https://www.youtube.com/watch?v=yP6kdOZHids" class="video-popup"><i class="lni-film-play"></i></a>
            <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Watch Video</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('team')
<section id="team" class="section-padding text-center">
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Meet our team</h2>
        <p>A desire to help and empower others between community contributors in technology <br> began to grow in 2020.</p>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-3">
          <!-- Team Item Starts -->
          <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">
            <div class="team-img">
              <img class="img-fluid" src="assets/img/team/team-01.png" alt="">
              <div class="team-overlay">
                <div class="overlay-social-icon text-center">
                  <ul class="social-icons">
                    <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="info-text">
              <h3><a href="#">David Smith</a></h3>
              <p>Chief Operating Officer</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3">
          <!-- Team Item Starts -->
          <div class="team-item text-center wow fadeInRight" data-wow-delay="0.6s">
            <div class="team-img">
              <img class="img-fluid" src="assets/img/team/team-02.png" alt="">
              <div class="team-overlay">
                <div class="overlay-social-icon text-center">
                  <ul class="social-icons">
                    <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="info-text">
              <h3><a href="#">Eric Peterson</a></h3>
              <p>Product Designer</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>

        <div class="col-sm-6 col-md-6 col-lg-3">
          <!-- Team Item Starts -->
          <div class="team-item text-center wow fadeInRight" data-wow-delay="0.9s">
            <div class="team-img">
              <img class="img-fluid" src="assets/img/team/team-03.png" alt="">
              <div class="team-overlay">
                <div class="overlay-social-icon text-center">
                  <ul class="social-icons">
                    <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="info-text">
              <h3><a href="#">Durwin Babb</a></h3>
              <p>Lead Designer</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>

        <div class="col-sm-6 col-md-6 col-lg-3">
          <!-- Team Item Starts -->
          <div class="team-item text-center wow fadeInRight" data-wow-delay="1.2s">
            <div class="team-img">
              <img class="img-fluid" src="assets/img/team/team-04.png" alt="">
              <div class="team-overlay">
                <div class="overlay-social-icon text-center">
                  <ul class="social-icons">
                    <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="info-text">
              <h3><a href="#">Marijn Otte</a></h3>
              <p>Front-end Developer</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>
        
      </div>
    </div>
  </section>
@endsection

@section('counter')
<section id="counter" class="section-padding">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-12 col-md-12 col-xs-12">
          <div class="row">
            <!-- Start counter -->
            <div class="col-lg-3 col-md-6 col-xs-12">
              <div class="counter-box wow fadeInUp" data-wow-delay="0.2s">
                <div class="icon-o"><i class="lni-users"></i></div>
                <div class="fact-count">
                  <h3><span class="counter">23576</span></h3>
                  <p>Users</p>
                </div>
              </div>
            </div>
            <!-- End counter -->
            <!-- Start counter -->
            <div class="col-lg-3 col-md-6 col-xs-12">
              <div class="counter-box wow fadeInUp" data-wow-delay="0.4s">
                <div class="icon-o"><i class="lni-emoji-smile"></i></div>
                <div class="fact-count">
                  <h3><span class="counter">2124</span></h3>
                  <p>Positive Reviews</p>
                </div>
              </div>
            </div>
            <!-- End counter -->
            <!-- Start counter -->
            <div class="col-lg-3 col-md-6 col-xs-12">
              <div class="counter-box wow fadeInUp" data-wow-delay="0.6s">
                <div class="icon-o"><i class="lni-download"></i></div>
                <div class="fact-count">
                  <h3><span class="counter">54598</span></h3>
                  <p>Downloads</p>
                </div>
              </div>
            </div>
            <!-- End counter -->
            <!-- Start counter -->
            <div class="col-lg-3 col-md-6 col-xs-12">
              <div class="counter-box wow fadeInUp" data-wow-delay="0.8s">
                <div class="icon-o"><i class="lni-thumbs-up"></i></div>
                <div class="fact-count">
                  <h3><span class="counter">3212</span></h3>
                  <p>Followers</p>
                </div>
              </div>
            </div>
            <!-- End counter -->
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('pricing')
<section id="pricing" class="section-padding bg-gray">
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Best Pricing</h2>
        <p>A desire to help and empower others between community contributors in technology <br> began to grow in 2020.</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="table wow fadeInLeft" data-wow-delay="1.2s">
            <div class="title">
              <h3>Basic</h3>
            </div>
            <div class="pricing-header">
              <p class="price-value">$12.90<span>/ Month</span></p>
            </div>
            <ul class="description">
              <li>Business Analyzing</li>
              <li>24/7 Tech Suport</li>
              <li>Operational Excellence</li>
              <li>Business Idea Ready</li>
              <li>2 Database</li>
              <li>Customer Support</li>
            </ul>
            <button class="btn btn-common">Get It</button>
          </div> 
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12 active">
          <div class="table wow fadeInUp" id="active-tb" data-wow-delay="1.2s">
            <div class="title">
              <h3>Profesional</h3>
            </div>
             <div class="pricing-header">
                <p class="price-value">$49.90<span>/ Month</span></p>
             </div>
            <ul class="description">
              <li>Business Analyzing</li>
              <li>24/7 Tech Suport</li>
              <li>Operational Excellence</li>
              <li>Business Idea Ready</li>
              <li>2 Database</li>
              <li>Customer Support</li>
            </ul>
            <button class="btn btn-common">Get It</button>
         </div> 
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="table wow fadeInRight" data-wow-delay="1.2s">
            <div class="title">
              <h3>Expert</h3>
            </div>
             <div class="pricing-header">
                <p class="price-value">$89.90<span>/ Month</span></p>
             </div>
            <ul class="description">
              <li>Business Analyzing</li>
              <li>24/7 Tech Suport</li>
              <li>Operational Excellence</li>
              <li>Business Idea Ready</li>
              <li>2 Database</li>
              <li>Customer Support</li>
            </ul>
            <button class="btn btn-common">Get It</button>
          </div> 
        </div>
      </div>
    </div>
  </section>
@endsection

@section('skill-area')
<div class="skill-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
          <img class="img-fluid" src="assets/img/about/img-1.jpg" alt="" >
        </div>
        <div class="col-lg-6 col-md-12 col-xs-12 info wow fadeInRight" data-wow-delay="0.3s">
          <div class="site-heading">
            <h2 class="section-title">Our <span>Skill</span></h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus architecto laudantium dolorem, aut aspernatur modi minima alias provident obcaecati! Minima odio porro nemo magnam dolore minus asperiores veniam dolorum est!
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, nesciunt possimus quaerat ipsam, corporis architecto aspernatur non aut! Dolorum consectetur placeat excepturi, perspiciatis sunt.
            </p>
          </div>
          <div class="skills-section">
            <!-- Progress Bar Start -->
            <div class="progress-box">
              <h5>Strategy &amp; Analysis <span class="pull-right">88%</span></h5>
              <div class="progress" style="opacity: 1; left: 0px;">
                <div class="progress-bar" role="progressbar" data-width="87" style="width: 87%;"></div>
              </div>
            </div>
            <div class="progress-box">
              <h5>Eeconomic growth <span class="pull-right">95%</span></h5>
              <div class="progress" style="opacity: 1; left: 0px;">
                <div class="progress-bar" role="progressbar" data-width="96" style="width: 96%;"></div>
              </div>
            </div>
            <div class="progress-box">
              <h5>Achieves goals <span class="pull-right">70%</span></h5>
              <div class="progress" style="opacity: 1; left: 0px;">
                <div class="progress-bar" role="progressbar" data-width="52" style="width: 52%;"></div>
              </div>
            </div>
            <!-- End Progressbar -->
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('portfolios')
<section id="portfolios" class="section-padding">
    <!-- Container Starts -->
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Our Works</h2>
        <p>A desire to help and empower others between community contributors in technology <br> began to grow in 2020.</p>
      </div>
      <div class="row">          
        <div class="col-md-12">
          <!-- Portfolio Controller/Buttons -->
          <div class="controls text-center">
            <a class="filter active btn btn-common btn-effect" data-filter="all">
              All 
            </a>
            <a class="filter btn btn-common btn-effect" data-filter=".design">
              Design 
            </a>
            <a class="filter btn btn-common btn-effect" data-filter=".development">
              Development
            </a>
            <a class="filter btn btn-common btn-effect" data-filter=".print">
              Print 
            </a>
          </div>
          <!-- Portfolio Controller/Buttons Ends-->
        </div>
      </div>

      <!-- Portfolio Recent Projects -->
      <div id="portfolio" class="row">
        <div class="col-lg-4 col-md-6 col-xs-12 mix development print">
          <div class="portfolio-item">
            <div class="shot-item">
              <img src="assets/img/portfolio/img-1.jpg" alt="" />  
              <div class="single-content">
                <div class="fancy-table">
                  <div class="table-cell">
                    <div class="zoom-icon">
                      <a class="lightbox" href="assets/img/portfolio/img-1.jpg"><i class="lni-eye item-icon"></i></a>
                    </div>
                    <a href="#">Creative Design</a>
                  </div>
                </div>
              </div>
            </div>               
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12 mix design print">
          <div class="portfolio-item">
            <div class="shot-item">
              <img src="assets/img/portfolio/img-2.jpg" alt="" /> 
              <div class="single-content">
                <div class="fancy-table">
                  <div class="table-cell">
                    <div class="zoom-icon">
                      <a class="lightbox" href="assets/img/portfolio/img-2.jpg"><i class="lni-eye item-icon"></i></a>
                    </div>
                    <a href="#">Retina Ready</a>
                  </div>
                </div>
              </div>
            </div>               
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12 mix development">
          <div class="portfolio-item">
            <div class="shot-item">
              <img src="assets/img/portfolio/img-3.jpg" alt="" />  
              <div class="single-content">
                <div class="fancy-table">
                  <div class="table-cell">
                    <div class="zoom-icon">
                      <a class="lightbox" href="assets/img/portfolio/img-3.jpg"><i class="lni-eye item-icon"></i></a>
                    </div>
                    <a href="#">Responsive</a>
                  </div>
                </div>
              </div>
            </div>               
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12 mix development design">
          <div class="portfolio-item">
            <div class="shot-item">
              <img src="assets/img/portfolio/img-4.jpg" alt="" /> 
              <div class="single-content">
                <div class="fancy-table">
                  <div class="table-cell">
                    <div class="zoom-icon">
                      <a class="lightbox" href="assets/img/portfolio/img-4.jpg"><i class="lni-eye item-icon"></i></a>
                    </div>
                    <a href="#">Well Documented</a>
                  </div>
                </div>
              </div>
            </div>               
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12 mix development">
          <div class="portfolio-item">
            <div class="shot-item">
              <img src="assets/img/portfolio/img-5.jpg" alt="" />  
              <div class="single-content">
                <div class="fancy-table">
                  <div class="table-cell">
                    <div class="zoom-icon">
                      <a class="lightbox" href="assets/img/portfolio/img-5.jpg"><i class="lni-eye item-icon"></i></a>
                    </div>
                    <a href="#">Customer Support</a>
                  </div>
                </div>
              </div>
            </div>               
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12 mix print design">
          <div class="portfolio-item">
            <div class="shot-item">
              <img src="assets/img/portfolio/img-6.jpg" alt="" />  
              <div class="single-content">
                <div class="fancy-table">
                  <div class="table-cell">
                    <div class="zoom-icon">
                      <a class="lightbox" href="assets/img/portfolio/img-6.jpg"><i class="lni-eye item-icon"></i></a>
                    </div>
                    <a href="#">User Friendly</a>
                  </div>
                </div>
              </div>
            </div>               
          </div>
        </div>
      </div>
    </div>
    <!-- Container Ends -->
  </section>
@endsection

@section('testimonial')
<section id="testimonial" class="testimonial section-padding">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
          <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
            <div class="item">
              <div class="testimonial-item">
                <div class="img-thumb">
                  <img src="assets/img/testimonial/img1.jpg" alt="">
                </div>
                <div class="info">
                  <h2><a href="#">Grenchen Pearce</a></h2>
                  <h3><a href="#">Boston Brothers co.</a></h3>
                </div>
                <div class="content">
                  <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-item">
                <div class="img-thumb">
                  <img src="assets/img/testimonial/img2.jpg" alt="">
                </div>
                <div class="info">
                  <h2><a href="#">Domeni GEsson</a></h2>
                  <h3><a href="#">Awesome Technology co.</a></h3>
                </div>
                <div class="content">
                  <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-item">
                <div class="img-thumb">
                  <img src="assets/img/testimonial/img3.jpg" alt="">
                </div>
                <div class="info">
                  <h2><a href="#">Dommini Albert</a></h2>
                  <h3><a href="#">Nesnal Design co.</a></h3>
                </div>
                <div class="content">
                  <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-item">
                <div class="img-thumb">
                  <img src="assets/img/testimonial/img4.png" alt="">
                </div>
                <div class="info">
                  <h2><a href="#">Fernanda Anaya</a></h2>
                  <h3><a href="#">Developer</a></h3>
                </div>
                <div class="content">
                  <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-item">
                <div class="img-thumb">
                  <img src="assets/img/testimonial/img5.png" alt="">
                </div>
                <div class="info">
                  <h2><a href="#">Jason A.</a></h2>
                  <h3><a href="#">Designer</a></h3>
                </div>
                <div class="content">
                  <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('blog')
<section id="blog" class="section-padding">
    <!-- Container Starts -->
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Latest blog</h2>
        <p>A desire to help and empower others between community contributors in technology <br> began to grow in 2020.</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
          <!-- Blog Item Starts -->
          <div class="blog-item-wrapper wow fadeInLeft" data-wow-delay="0.3s">
            <div class="blog-item-img">
              <a href="single-post.html">
                <img src="assets/img/blog/img1.jpg" alt="">
              </a>                
            </div>
            <div class="blog-item-text"> 
              <h3>
              <a href="single-post.html">Suspendisse dictum non velit</a>
              </h3>
              <p>
              Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum lacinia. Integer varius ornare egestas. 
              </p>
              <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
            </div>
          </div>
          <!-- Blog Item Wrapper Ends-->
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
          <!-- Blog Item Starts -->
          <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.6s">
            <div class="blog-item-img">
              <a href="single-post.html">
                <img src="assets/img/blog/img2.jpg" alt="">
              </a>                
            </div>
            <div class="blog-item-text"> 
              <h3>
              <a href="single-post.html">Remarkably Did Increasing</a>
              </h3>
              <p>
              Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum lacinia. Integer varius ornare egestas. 
              </p>
              <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
            </div>
          </div>
          <!-- Blog Item Wrapper Ends-->
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
          <!-- Blog Item Starts -->
          <div class="blog-item-wrapper wow fadeInRight" data-wow-delay="0.3s">
            <div class="blog-item-img">
              <a href="single-post.html">
                <img src="assets/img/blog/img3.jpg" alt="">
              </a>                
            </div>
            <div class="blog-item-text"> 
              <h3>
                <a href="single-post.html">Changing the topic scope</a>
              </h3>
              <p>
              Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum lacinia. Integer varius ornare egestas. 
              </p>
              <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
            </div>
          </div>
          <!-- Blog Item Wrapper Ends-->
        </div>
      </div>
    </div>
  </section>
@endsection

@section('clients')
<div id="clients" class="section-padding bg-gray">
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">NOTABLE CLIENTS</h2>
        <p>Over the last 20 years, we have helped and guided organisations to achieve outstanding results</p>
      </div>
      <div class="row text-align-">
        <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
          <div class="client-item-wrapper">
            <img class="img-fluid" src="assets/img/clients/img1.png" alt="">
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
          <div class="client-item-wrapper">
            <img class="img-fluid" src="assets/img/clients/img2.png" alt="">
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.9s">
          <div class="client-item-wrapper">
            <img class="img-fluid" src="assets/img/clients/img3.png" alt="">
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="1.2s">
          <div class="client-item-wrapper">
            <img class="img-fluid"  src="assets/img/clients/img4.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('contact')
<section id="contact" class="section-padding">    
    <div class="container">
      <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
        <div class="col-md-6 col-lg-6 col-sm-12">
          <div class="contact-block">
            <form id="contactForm">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                    <div class="help-block with-errors"></div>
                  </div>                                 
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                    <div class="help-block with-errors"></div>
                  </div> 
                </div>
                 <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group"> 
                    <textarea class="form-control" id="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="submit-button">
                    <button class="btn btn-common" id="form-submit" type="submit">Send Message</button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div> 
                    <div class="clearfix"></div> 
                  </div>
                </div>
              </div>            
            </form>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
          @foreach ($gens as $gen)
          <div class="contact-right-area wow fadeIn">
            <div class="contact-title">
              <h1>We're a friendly bunch..</h1>
              <p>We create projects for companies and startups with a passion for quality</p>
            </div>
            <h2>Contact Us</h2>
            <div class="contact-right">
              <div class="single-contact">
                <div class="contact-icon">
                  <i class="lni-map-marker"></i>
                </div>
                <p>ADDRESS: {{ $gen->alamat }}</p>
              </div>
              <div class="single-contact">
                <div class="contact-icon">
                  <i class="lni-envelope"></i>
                </div>
                <p>Email:  {{ $gen->email }}</p>
              </div>
              <div class="single-contact">
                <div class="contact-icon">
                  <i class="lni-phone-handset"></i>
                </div>
                <p>Phone:  {{ $gen->whatsapp }} </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div> 
  </section>

@endsection