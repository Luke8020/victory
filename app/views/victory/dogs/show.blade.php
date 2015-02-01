@extends('victory.layouts.detail')

@section('stylesheets')
    <style>

  .node circle {
    fill: #333;
    stroke: steelblue;
    stroke-width: 1px;
  }

  .node text { font: 14px sans-serif; fill: #fff!important;}

  .link {
    fill: none;
    stroke: #333;
    stroke-width: 2px;
  }

  #pedigree-tree-container
  {
    width: 100%!important;
    overflow: hidden;
    overflow-x: scroll;
  }
  
    </style>
@stop

@section('detail-content')

    <div class="col-sm-4 post-thumb wow fadeInLeft" data-wow-delay="0.5s">
        <img src="{{ $dog->present()->mainPicture() }}" alt="" class="img-responsive" width="100%" />
    </div>

    <div class="col-sm-8 entry-content wow fadeInRight" data-wow-delay="0.5s">
        <ul class="profile">
            <li class="row">
                <div class="col-xs-12">
                    <p>
                        <strong>Name:</strong> &nbsp;&nbsp;
                        {{ $dog->name }}
                    </p>
                </div>
            </li>

            <li class="row">
                <div class="col-xs-12">
                    <p>
                        <strong>Breed:</strong> &nbsp;&nbsp;
                        {{ $dog->breed }}
                    </p>
                </div>
            </li>

            <li class="row">
                <div class="col-xs-12">
                    <p>
                        <strong>Gender:</strong> &nbsp;&nbsp;
                        {{ $dog->present()->gender }}
                    </p>
                </div>
            </li>

            @if ( !is_null($dog->about) && $dog->about !== '' )
              <li class="row">
                  <div class="col-xs-12">
                      <p>
                          <strong>About:</strong> &nbsp;&nbsp;
                          {{ $dog->about }}
                      </p>
                  </div>
              </li>
            @endif
        </ul>
       
    </div>

@stop

@section('main-image-preview')

    <div class="item">
        <div>
            <a href="{{ $dog->present()->mainPicture() }}" class="fancybox" data-fancybox-group="group" title="">
                <img src="{{ $dog->present()->mainPicture() }}" alt="" class="img-responsive" />
            </a>
        </div>
    </div>

@stop

@section('detail-pedigree')
  
  <div id="pedigree-tree-container">
    <div id="pedigree-tree"></div>
  </div>
@stop

@section('scripts')

    <script src="http://d3js.org/d3.v3.min.js"></script>
  
    @include('victory.dogs.partials._pedigree_tree_scripts')

@stop