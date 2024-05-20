<div class="col-12 px-0">
    <div id="navbar-menu" class="collapse navbar-collapse no-padding">
        <ul class="nav navbar-nav navbar-left-sidebar font-weight-500">
            <li class="dropdown">
                <a href="{{ route('index') }}" title="Home">Home</a>
            </li>
            <li class="dropdown">
                <a href="{{ route('index') }}" title="About">Who We Are</a>
            </li>
            <li class="dropdown">
                <a data-bs-toggle="dropdown" href="#" title="Surveys">Live Surveys <i class="fa-solid fa-angle-right"></i></a>
                <ul class="dropdown-menu second-level">
                    <li class="dropdown">
                        @forelse(surveys() as $key => $item)
                        <a href="{{ route('survey', str_replace(' ', '-', $item->name)) }}" title="{{ $item->name }}">{{ strtoupper($item->name) }}</a>
                        @empty
                        @endforelse
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="{{ route('index') }}" title="contact">Get In touch</a>
            </li>
            <li>
                <div class="side-left-menu-close close-side"></div>
            </li>
        </ul>
    </div>
</div>
<div class="col-12 position-absolute top-auto bottom-0 left-0 w-100 padding-20px-bottom sm-padding-15px-bottom">
    <div class="footer-holder">
        <form action="search-result.html" method="post" class="navbar-form no-padding search-box">
            <div class="input-group add-on">
                <input name="text" id="text" data-email="required" type="text" placeholder="Enter your keywords..." class="form-control">
                <div class="input-group-btn">
                    <button class="btn btn-default search-button" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </form>
        <div class="icon-social-medium margin-eleven-bottom padding-eight-top sm-padding-15px-top sm-margin-15px-bottom">
            <a href="https://twitter.com/" target="_blank" class="text-link-extra-dark-gray"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
            <a href="https://linkedin.com/" target="_blank" class="text-link-extra-dark-gray"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a>
            <a href="https://instagram.com/" target="_blank" class="text-link-extra-dark-gray"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
        </div>
        <div class="text-medium-gray text-extra-small border-top border-color-extra-light-gray padding-twelve-top sm-padding-15px-top">&copy; {{ date('Y') }} The Citizen. All rights reserved</div>
    </div>
</div>