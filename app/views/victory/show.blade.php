@extends('victory.layouts.main')

@section('content')

<body>

    <div class="navbar navbar-fixed-top blog-nav">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="..">
                    <img src="{{ url("../images/logo.png") }}" alt="Victory Great Danes" class="img-responsive" />
                </a>
            </div>
            <div class="navbar-collapse ">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">GO BACK</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ========== BLOG START ========== -->

    <section id="model">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="wow fadeInLeftBig text-capitalize" data-wow-delay="0.3s">{{ $dog->name }}</h2>
                    <h4 class="wow fadeInRightBig" data-wow-delay="0.5s">DOG PROFILE</h4>
                    <div class="divider"><i class="fa fa-user"></i></div>
                </div>
            </div>

            <div class="row">

                <div class="col-sm-4 post-thumb wow fadeInLeft" data-wow-delay="0.5s">
                    <img src="../images/dogs/{{ $dog->id }}.jpg" alt="" class="img-responsive"  width="100%" />
                    <p>&nbsp;</p>
                </div>

                <div class="col-sm-8 entry-content wow fadeInRight" data-wow-delay="0.5s">
                    <ul class="profile">
                        <li class="row">
                            <div class="col-xs-4 col-lg-3">
                                <p><strong>Name:</strong></p>
                            </div>
                            <div class="col-xs-8 col-lg-9">
                                <p>{{ $dog->name }}</p>
                            </div>
                        </li>

                        <li class="row">
                            <div class="col-xs-4 col-lg-3">
                                <p><strong>Born:</strong></p>
                            </div>
                            <div class="col-xs-8 col-lg-9">
                                <p>{{ $dog->birthdate }}</p>
                            </div>
                        </li>

                        <li class="row">
                            <div class="col-xs-4 col-lg-3">
                                <p><strong>Height:</strong></p>
                            </div>
                            <div class="col-xs-8 col-lg-9">
                                <p>{{ $dog->height }}</p>
                            </div>
                        </li>

                        <li class="row">
                            <div class="col-xs-4 col-lg-3">
                                <p><strong>Weight:</strong></p>
                            </div>
                            <div class="col-xs-8 col-lg-9">
                                <p>{{ $dog->weight }}</p>
                            </div>
                        </li>

                        <li class="row">
                            <div class="col-xs-12">
                                <p><strong><br>About:</strong></p>
                            </div>
                            <div class="col-xs-12">
                                <p>{{ $dog->about }}</p>
                            </div>
                        </li>
                    </ul>
                   
                </div>

            </div>

        </div>
    </section>

    <!-- ========== BLOG END ========== -->

@stop