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
                <a href="{{ route('index') }}" class="btn btn-dark-gray btn-medium">Contact Now</a>
            </div>
            <div class="down-section text-center">
                <a href="#why" class="section-link up-down-ani"><i class="ti-mouse icon-small bounce text-deep-pink"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- end hero banner with parallax section -->
@endsection