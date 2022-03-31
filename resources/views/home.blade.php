@extends('layout')
@section('content')
    <div class="home-page" id="home-page">
        <div class="left show-on-scroll">
        <img src="images/Logo.png">
        </div>
        <div class="right show-on-scroll">
            <div class="moto">
                <span class="top">Book </span>
                <span class="center show-on-scroll">RYDER</span>
                <span class="bottom">Now!</span>
        
            </div>
            <a href="{{route('book')}}">
                <div class="first rect"></div>
                <div class="text">Book A Ride!</div>
                <div class="second rect"></div>
            </a>
        </div>
    </div>

    <div class="aboutus" id="aboutus">
        <div class="left">
            <div id="slider" class="slider">
                <ul class="slideWrap" id="slideWrap">
                    <li><img src="images/aboutus (1).jpg" alt=""></li>
                    <li><img src="images/aboutus (2).jpg" alt=""></li>
                    <li><img src="images/aboutus (3).jpg" alt=""></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <h1 class="title show-on-scroll">How we started?</h1>
            <hr class="show-on-scroll">
            <p class="show-on-scroll">Helping people reach their destination is a noble deed one can do and with this vision we thought of Ryder and how it can help in connecting people physically.</p>
            <a href="{{route('about')}}" class="show-on-scroll know-more">Know More -></a>
        </div>
    </div>

    <div class="services" id="services">
        <div class="book-a-ride section" id="bookaride">
            <h1>Book Now!</h1>
            <p>haven't booked a Ryder before?</p>
            <a href="{{route('book')}}" class="bookaride">Book A Ride</a>
        </div>
        <div class="become-a-vendor section" id="joinus">
            <h1>Become A Vendor!</h1>
            <p>There's always room for family!</p>
            <a href="{{route('join')}}" class="vendor">Join Us</a></div>
    </div>
    <div class="testimonials">
        <div class="cover"></div>
        <section>
            <div class="container">
                <div class="section-title">
                    <h2 class="show-on-scroll">Testimonials</h2>
                    <span class="section-separator show-on-scroll"></span>
                    <p class="show-on-scroll">Not only us but our customers also believe in Ryder!</p>
                </div>
            </div>
            <div class="testimonials-carousel-wrap">
                <div class="listing-carousel-button listing-carousel-button-next show-on-scroll"><i class="fa fa-caret-right"></i></div>
                <div class="listing-carousel-button listing-carousel-button-prev show-on-scroll"><i class="fa fa-caret-left"></i></div>
                <div class="testimonials-carousel">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-item">
                                    <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                                    <div class="testimonials-text">
                                        <p>Excellent service, car and driver. Went with Ryder to nashik with family. Memorable road journey. Will definately recommend services from Ryder.</p>
                                        <div class="testi-avatar"><img src="https://library.kissclipart.com/20180928/xcw/kissclipart-facebook-profile-icon-clipart-computer-icons-faceb-6ed40a87bdc2b722.png"></div>
                                        <div class="testimonials-avatar">
                                            <h3>Shailendra Sonawane</h3>
                                            <h4>Pune</h4>
                                        </div>
                                        <div class="listing-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="swiper-slide">
                                <div class="testi-item">
                                    <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                                    <div class="testimonials-text">
                                        
                                        <p>Service is very good and dependable. Neat and clean car condition. Puncutality is biggest plus point of this agency very unlikely found in car rental services. In summary it was good experience. Highly recommended.</p>
                                        <div class="testi-avatar"><img src="https://library.kissclipart.com/20180928/xcw/kissclipart-facebook-profile-icon-clipart-computer-icons-faceb-6ed40a87bdc2b722.png"></div>
                                    
                                        <div class="testimonials-avatar">
                                            <h3>Bhushan Kumar</h3>
                                            <h4>New Delhi</h4>
                                        </div>
                                        <div class="listing-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="swiper-slide">
                                <div class="testi-item">
                                    <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                                    <div class="testimonials-text">
                                        
                                        <p>Definately impressed with your service. Booked a cab from Ahmedabad International airport to baroda. My flight arrived early and I was at the airport two hours prior to my booking time. Called the center and the driver was actually at the airport. Reached my destination safe and sound! Love love love it. Thank You.</p>
                                        <div class="testi-avatar"><img src="https://library.kissclipart.com/20180928/xcw/kissclipart-facebook-profile-icon-clipart-computer-icons-faceb-6ed40a87bdc2b722.png"></div>
                                    
                                        <div class="testimonials-avatar">
                                            <h3>Boksy Dutia</h3>
                                            <h4>Baroda</h4>
                                        </div>
                                        <div class="listing-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="swiper-slide">
                                <div class="testi-item">
                                    <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                                    <div class="testimonials-text">
                                        
                                        <p>I would highly recommend everyone to use Ryder, and in our little way, encourage the thought and effort put to start the service.</p>
                                        <div class="testi-avatar"><img src="https://library.kissclipart.com/20180928/xcw/kissclipart-facebook-profile-icon-clipart-computer-icons-faceb-6ed40a87bdc2b722.png"></div>
                                    
                                        <div class="testimonials-avatar">
                                            <h3>Neha sardana</h3>
                                            <h4>dehradun</h4>
                                        </div>
                                        <div class="listing-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
        
            </div>
        </section>
    </div> 

    <div class="contact-us" id="contactus">
        <p>Call 24 hour Service Available</p>
        <h1>Have any doubts? Call us or Write to us...</h1>
        <a href="{{route('contact.show')}}" class="contact-button">Let's Talk!</a>
    </div>
@endsection