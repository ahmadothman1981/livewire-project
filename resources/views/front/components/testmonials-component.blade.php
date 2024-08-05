<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <p class="section-title text-secondary justify-content-center"><span></span>Testimonial<span></span></p>
                <h1 class="text-center mb-5">What Say Our Clients!</h1>
                <div class="owl-carousel testimonial-carousel">
@foreach($testmonials as $testmonial)
<div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>{{$testmonial->description}}</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset($testmonial->image)}}" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">{{$testmonial->name}}</h5>
                                <span>{{$testmonial->position}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
            </div>
       
