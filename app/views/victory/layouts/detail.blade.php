@extends('victory.layouts.main')

@section('content')

<body>

    @include('victory.layouts.partials._detail_navbar')

    <section id="model">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="wow fadeInLeftBig text-capitalize" data-wow-delay="0.3s">
                        {{ $pageName }}
                    </h2>

                    @if ( isset($pageDescription) )
                        <h4 class="wow fadeInRightBig" data-wow-delay="0.5s">
                            {{ $pageDescription }}
                        </h4>
                    @endif

                    <div class="divider">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
            </div>

            <div class="row">

                @yield('detail-content')

            </div>

        </div>
    </section>

    <section id="about">
        <div class="container text-center">
            <div class="row wow bounceInUp" data-wow-delay="0.5s">
                <div class="col-md-12">
                    <h2>PICTURES</h2>

                    <div class="divider">
                        <i class="fa fa-bookmark"></i>
                    </div>
                </div>
            </div>
            
            <div class="row wow bounceInUp" data-wow-delay="0.5s">
                <div class="col-md-12">
                    <div class="owl-carousel">

                        @yield('main-image-preview')

                        @foreach ($pictures as $picture)

                            <div class="item">
                                <div>
                                    <a href="{{ $picture->present()->picturePath($picturePath) }}" class="fancybox" data-fancybox-group="group" title="">
                                        <img src="{{ $picture->present()->thumbnailPath($picturePath) }}" alt="" class="img-responsive" />
                                    </a>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    @if( $currentRoute == 'dogs/{id}' )

        <section id="pedigree">
            <div class="container text-center">
                <div class="row wow bounceInUp" data-wow-delay="0.5s">
                    <div class="col-md-12">
                        <h2>PEDIGREE</h2>

                        <div class="divider">
                            <i class="fa fa-sitemap"></i>
                        </div>
                    </div>
                </div>
                
                <div class="row wow bounceInUp" data-wow-delay="0.5s">
                    <div class="col-md-12">
                        
                        @yield('detail-pedigree')

                    </div>
                </div>
            </div>
        </section>
        
    @endif

@stop