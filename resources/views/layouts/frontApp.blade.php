<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Trading Journal"
        name="A website for Trading Jornal and keeping you trades in order and revision for better performance">

    <title>@yield('ttitle')</title>

    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="icon" type="image/x-icon" href="img/Logo_icon.jpg">



</head>

<body>

    <div class="tm-header">
        <div class="container-fluid">
            <div class="tm-header-inner">
                <a href="#" class="navbar-brand tm-site-name">{{ Auth::user()->name }}'s Trading Journal</a>
                {{-- <a href="#" class="navbar-brand tm-site-name">User's Trading Journal</a> --}}


                <!-- navbar -->
                <nav class="navbar tm-main-nav">

                    <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse"
                        data-target="#tmNavbar">
                        &#9776;
                    </button>

                    <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-item active">
                                <a href="{{ url('/') }}" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.tradingview.com/chart" target="_blank" class="nav-link">Trading
                                    View</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.forexfactory.com/" target="_blank" class="nav-link">News</a>
                            </li>
                            <li class="nav-item">
                                {{-- <a href="" class="nav-link">Logout</a> --}}
                                <div class="nav-item" aria-labelledby="navbar">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>

                </nav>

            </div>
        </div>
    </div>


    @yield('trading_content')

    <footer class="tm-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                    <div class="tm-footer-content-box">

                        <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Trading Journal</h3>
                        <p class="tm-margin-b-30">This is where you journal you all trades and study them</p>

                        {{-- <hr class="tm-margin-b-30">
                        <p class="tm-margin-b-30">type here</p>
                        <hr class="tm-margin-b-30">
                        <p class="tm-margin-b-30">type here</p>
                        <a href="#" class="tm-btn tm-btn-gray text-uppercase">type here</a> --}}

                    </div>

                </div>


                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="tm-footer-content-box tm-footer-links-container">

                        <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Links</h3>
                        <nav>
                            <ul class="nav">
                                <li><a href="https://www.tradingview.com/chart" target="_blank"
                                        class="tm-footer-link">Trading View</a></li>
                                <li><a href="https://www.forexfactory.com/" target="_blank"
                                        class="tm-footer-link">News</a></li>
                                <li><a href="https://my.exness.global/pa/" target="_blank" class="tm-footer-link">Broker
                                        Exness</a></li>
                            </ul>
                        </nav>

                    </div>

                </div>

                <div class="clearfix hidden-lg-up"></div>



                {{-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                    <div class="tm-footer-content-box">

                        <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Fusce non turpis</h3>
                        <div class="tm-margin-b-30">
                            <img src="img/tm-img-100x100-1.jpg" alt="Image" class="tm-footer-thumbnail">
                            <img src="img/tm-img-100x100-2.jpg" alt="Image" class="tm-footer-thumbnail">
                            <img src="img/tm-img-100x100-3.jpg" alt="Image" class="tm-footer-thumbnail">
                            <img src="img/tm-img-100x100-4.jpg" alt="Image" class="tm-footer-thumbnail">
                            <img src="img/tm-img-100x100-5.jpg" alt="Image" class="tm-footer-thumbnail">
                            <img src="img/tm-img-100x100-6.jpg" alt="Image" class="tm-footer-thumbnail">
                        </div>
                        <p class="tm-margin-b-20">Curabitur dui massa, aliquam quis mi sed, tempor vulputate tellus.
                            Sed vestibulum non neque.</p>
                        <a href="#" class="tm-btn tm-btn-gray text-uppercase">Browse</a>

                    </div>

                </div> --}}


            </div>

            <div class="row">
                <div class="col-xs-12 tm-copyright-col">
                    &copy; <a href="{{ url('/') }}">Trading Journal</a>. All Rights Reserved.</a>
                </div>
            </div>
        </div>
    </footer>


    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>
