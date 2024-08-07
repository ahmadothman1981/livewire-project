<div class="row g-5">
<div class="col-md-6 col-lg-3">
    @foreach($settings as $setting)
                        <p class="section-title text-white h5 mb-4">{{$setting->name}}<span></span></p>
                        <p><i class="fa fa-map-marker-alt me-3"></i>{{$setting->address}}</p>
                        <p><i class="fa fa-phone-alt me-3"></i>{{$setting->phone}}</p>
                        <p><i class="fa fa-envelope me-3"></i>{{$setting->email}}</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="{{$setting->twitter}}"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="{{$setting->instagram}}"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="{{$setting->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    @endforeach
<div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                        <a class="btn btn-link" href="{{route('front.about')}}">About Us</a>
                        <a class="btn btn-link" href="{{route('front.contact')}}">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    