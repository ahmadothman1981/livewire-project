@extends('front.master')
@section('title','Home')
@section('index-active','active')


@section('hero')
                 @include('front.partials.hero')
           
               
            
@endsection
@section('content')

     <!-- Feature Start -->
     @livewire('front.components.services-component',['count' => 3])
        <!-- Feature End -->


        <!-- About Start -->
        @livewire('front.components.skills-componenet')
        <!-- About End -->


        <!-- Facts Start -->
        @livewire('front.components.counters-component')
        <!-- Facts End -->


        <!-- Service Start -->
        @livewire('front.components.services-component',['count' => 6])
        <!-- Service End -->


        <!-- Newsletter Start -->
        <div class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <p class="section-title text-white justify-content-center"><span></span>Newsletter<span></span></p>
                        <h1 class="text-center text-white mb-4">Stay Always In Touch</h1>
                        <p class="text-white mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo</p>
                        <div class="position-relative w-100 mt-3">
                           @livewire('front.components.subscribe-component')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


        <!-- Projects Start -->
       @livewire('front.components.projects-component')
        <!-- Projects End -->


        <!-- Testimonial Start -->
        @livewire('front.components.testmonials-component')
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Our Team<span></span></p>
                    <h1 class="text-center mb-5">Our Team Members</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" src="{{asset('front-assets')}}/img/team-1.jpg" alt="">
                                <h5>John Doe</h5>
                                <span>CEO & Founder</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" src="{{asset('front-assets')}}/img/team-2.jpg" alt="">
                                <h5>Jessica Brown</h5>
                                <span>Web Designer</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" src="{{asset('front-assets')}}/img/team-3.jpg" alt="">
                                <h5>Tony Johnson</h5>
                                <span>SEO Expert</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        

@endsection