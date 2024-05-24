@extends("base")
@section("content")
<!-- start hero with parallax section -->
<section class="wow animate__fadeIn p-0 parallax sm-background-image-center" data-parallax-background-ratio="0.5" style="background-image:url({{ asset('/web/images/citizen/bg.svg') }});">
    <div class="container full-screen position-relative">
        <div class="row m-0 h-100 align-items-center">
            <div class="col-xl-10 col-md-10 offset-md-1 text-center text-lg-start bg-white-opacity padding-six-all lg-padding-eight-all">
                <div class="alt-font text-extra-dark-gray text-uppercase font-weight-700 letter-spacing-minus-2 title-large">We create the trend</div>
                <div class="separator-line-horrizontal-full w-100 margin-35px-tb md-margin-25px-tb sm-margin-20px-tb bg-extra-dark-gray"></div>
                <span class="text-dark-gray text-extra-large font-weight-300 margin-35px-bottom d-block md-margin-25px-bottom sm-margin-15px-bottom">We design surveys that believe in the power of great ideas.</span>
                <a href="{{ route('contact') }}" class="btn btn-dark-gray btn-medium">Contact Now</a>
            </div>
            <div class="down-section text-center">
                <a href="#why" class="section-link up-down-ani"><i class="ti-mouse icon-small bounce text-deep-pink"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- end hero banner with parallax section -->
<!-- start feature box section  -->
<section id="why" class="wow animate__fadeIn bg-extra-dark-gray wow animate__fadeIn lg-padding-two-lr sm-no-padding-lr">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
            <!-- start feature box item -->
            <div class="col-sm-8 feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeIn">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300 mb-0">01.</h3>
                    <span class="text-large line-height-22 padding-20px-left padding-20px-left w-100">Creativity.<br> Discover talent.</span>
                </div>
                <p class="w-90 lg-w-100">Empowering communities to achieve sustainable development and social justice through innovative surveys and community engagement. We envision a world where every individual has the opportunity to thrive and contribute to a just society.</p>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col-sm-8 feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300 mb-0">02.</h3>
                    <span class="text-large line-height-22 padding-20px-left w-100">Technology.<br> Expert analysis.</span>
                </div>
                <p class="w-90 lg-w-100">Transforming lives through innovative technology solutions that simplify and enhance everyday experiences. We aim to be a global leader in creating smart, sustainable, and connected communities.</p>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col-sm-8 feature-box-1 wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300 mb-0">03.</h3>
                    <span class="text-large line-height-22 padding-20px-left w-100">Discover.<br> Explore work.</span>
                </div>
                <p class="w-90 lg-w-100">Fostering a culture of excellence and inclusivity where students are inspired to reach their full potential. We envision a future where education is accessible, personalized, and prepares individuals for a rapidly changing world.</p>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
            </div>
            <!-- end feature box item -->
        </div>
    </div>
</section>
<!-- end feature box section -->
@endsection