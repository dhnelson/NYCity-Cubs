@extends('layouts.layout')

@section('title', 'NYCity Cubs | Home')

@section('content')

@if ($agent->isMobile())

<div class="row">
    <div class="col-sm-12">
        <div class="well">
            <div class="row">
                <div class="col-sm-12">
                      <img src="{{ url('images/landingimg1.png') }}" class="img-responsive center-block" alt="landing img"></a>
                </div>
                <div class="col-sm-12">
                      <img src="{{ url('images/landingimg2.png') }}" class="img-responsive center-block" alt="landing img"></a>
                </div>
                <div class="col-sm-12">
                      <img src="{{ url('images/landingimg3.png') }}" class="img-responsive center-block" alt="landing img"></a>
                </div>
                <div class="col-sm-12">
                      <img src="{{ url('images/landingimg4.png') }}" class="img-responsive center-block" alt="landing img"></a>
                </div>
            </div>
        </div>
    </div>
</div>

@else

<div class="row">
    <div class="col-sm-12">
        <div class="well">
            <img src="{{ url('images/landingimg.png') }}" class="img-responsive center-block" id="landingimg" alt="landing img"></a>
        </div>
    </div>
</div>

@endif

@stop
