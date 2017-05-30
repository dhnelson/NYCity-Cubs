<div class="row">
    <div class="col-sm-12">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ url('images/logo.png') }}" class="img-responsive" alt="logo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ Request::is('/') ? "active" : ""}}"><a href="{{ route('home') }}">HOME</a></li>
                    <li class="dropdown {{ Request::is('responsibilities_cost', 'details') ? "active" : ""}}"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ABOUT<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a id="myDropdown" href="{{ route('responsibilities_cost') }}">RESPONSIBILITIES &amp; COST</a></li>
                            <li><a id="myDropdown" href="{{ route('details') }}">PROGRAM DETAILS</a></li>
                        </ul>
                    </li>
                    <li>{!! Html::link('download/NYCity_Cubs_Registration_Form.pdf', 'REGISTRATION FORM') !!}</a></li>
                    <li class="{{ Request::is('contact') ? "active" : ""}}"><a href="{{ route('contact') }}">CONTACT</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
