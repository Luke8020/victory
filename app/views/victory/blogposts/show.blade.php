@extends('victory.layouts.detail')

@section('detail-content')

    <div class="col-sm-4 post-thumb wow fadeInLeft" data-wow-delay="0.5s">
        <img src="{{ $blogPost->present()->mainPicture() }}" alt="" class="img-responsive" width="100%" />
    </div>

    <div class="col-sm-8 entry-content wow fadeInRight" data-wow-delay="0.5s">
        <ul class="profile">

            <li class="row">
                <div class="col-xs-12">
                    <div class="blog-full">
                        {{ $blogPost->body }}
                    </div>
                </div>
            </li>
        </ul>
       
    </div>

@stop

@section('main-image-preview')

    <div class="item">
        <div>
            <a href="{{ $blogPost->present()->mainPicture() }}" class="fancybox" data-fancybox-group="group" title="">
                <img src="{{ $blogPost->present()->thumbnailPath() }}" alt="" class="img-responsive" />
            </a>
        </div>
    </div>

@stop