@extends('layouts.layout')

@section('title', 'NYCity Cubs | Home')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="well">
            <div class="row" id="landing-container">
                <div class="col-sm-3">
                      <img src="{{ url('images/landingimg3.png') }}" class="img-responsive center-block" id="landingimg1" alt="landing img"></a>
                </div>
                <div class="col-sm-3">
                      <img src="{{ url('images/landingimg4.png') }}" class="img-responsive center-block" id="landingimg2" alt="landing img"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                      <img src="{{ url('images/landingimg2.png') }}" class="img-responsive center-block" id="landingimg3" alt="landing img"></a>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
