@extends('layouts.frontApp')

@section('ttitle')
    Trading Journal
@endsection


@section('trading_content')
    <section class="tm-section">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                    <div class="tm-blog-post">
                        {{-- @foreach ($trade as $trades) --}}
                        <h3 class="tm-gold-text"><a href="" style="color: #CC9900"
                                target="_blank">{{ $trade->title }}</a>
                        </h3>
                        <img src="img/{{ $trade->image_path }}" alt="Image" class="img-fluid tm-img-post">

                        <p>{{ $trade->description }}</p>
                    </div>
                    {{-- @endforeach --}}


                </div>

            </div>

        </div>
    </section>
@endsection
