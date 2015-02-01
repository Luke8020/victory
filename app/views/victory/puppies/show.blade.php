@extends('victory.layouts.detail')

@section('detail-content')

    <div class="col-sm-8 col-sm-offset-2 post-thumb wow fadeInLeft" data-wow-delay="0.5s">
        <img src="{{ $puppy->present()->mainPicture() }}" alt="" class="img-responsive" width="100%" />
    </div>

@stop

@section('main-image-preview')

    <div class="item">
        <div>
            <a href="{{ $puppy->present()->mainPicture() }}" class="fancybox" data-fancybox-group="group" title="">
                <img src="{{ $puppy->present()->thumbnailPath() }}" alt="" class="img-responsive" />
            </a>
        </div>
    </div>

@stop