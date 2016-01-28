<!-- Contact Section -->

<section id="contact" class="contact-section" style="background-image: url({{('img/map.png')}})" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12   section-title">
                <h2 style="color:#fff">Contact Us</h2>
                <img src="{{url('img/shape.png')}}" alt="">
                <br/><br/>
            </div>
        </div>

        @if(isset($values))
          <h3 style="color:#fff">Successfull</h3>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" method="POST" action="{{url('/contact#contact')}}" novalidate>
                  
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" name="name">

                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" name="email">

                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Your Phone *" name="phone">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message *" name="message"></textarea>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12  ">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-contact">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
