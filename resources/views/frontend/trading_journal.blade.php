@extends('layouts.frontApp')

@section('ttitle')
    Trading Journal
@endsection


@section('trading_content')
    <div class="tm-home-img-container">
        <img src="img/tm-home-img.jpg" alt="Image" class="hidden-lg-up img-fluid">
    </div>

    <section class="tm-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                    <h2 class="tm-gold-text tm-title">Trading Journal</h2>
                    <p class="tm-subtitle">This is where you journal you all trades and study them</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                    {{-- @foreach ($trade as $trades) --}}
                    <div class="tm-content-box">
                        <img src="img/1.png" alt="Image" class="tm-margin-b-20 img-fluid">

                        <h4 class="tm-margin-b-20 tm-gold-text" style="text-align: center; color: green"><a
                                href="/details/id" style="color: green">GBPJPY</a>
                        </h4>
                    </div>
                    {{-- @endforeach --}}

                </div>

                <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-aside-r" style="float: right;">
                    <div class="tm-aside-container">
                        <h1><a href="{{ url('/add') }}">Add Journal</a></h1>
                        <h3 class="tm-gold-text tm-title">Categories</h3>
                        <nav>
                            <ul class="nav">
                                <li>
                                    <a href="/" style="text-decoration: none;" class="tm-text-link">All
                                        Trades</a>
                                </li>
                                <li>
                                    <a href="/success" style="text-decoration: none;" class="tm-text-link">Success
                                        Trades</a>
                                </li>
                                <li>
                                    <a href="/failure" style="text-decoration: none;" class="tm-text-link">Failure Trade</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </aside>


            </div>
        </div>
    </section>
@endsection
