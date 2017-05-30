@extends('layouts.layout')

@section('title', 'NYCity Cubs | Learning')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="well">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1" id="details-header">
                    <h2>This summer at NYCity Cubs LLC</h2>
                    <p id="justify">
                        children will participate in 3 experiential learning trips in locations across the city. Before each trip we will learn more about these places by conducting research using books and internet resources.  After each trip children will complete a project outlining what they have learned about the location. Additionally Cubs will receive daily academic support in reading, writing and math.
                    </p>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ url('images/detailsimg1.png') }}" class="img-responsive center-block" id="detailsimg" alt="details img"></a>
                    </div>
                    <div class="col-sm-4">
                        <div id="details-math">
                            <h3 id="dark-purple">M A T H</h3>
                            <p id="justify">
                                The best way to learn a concept is to apply it to real world situations. Cubs will practice and refine their math skills through real world problem solving involving money, time and scheduling.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ url('images/detailsimg2.png') }}" class="img-responsive center-block" id="detailsimg" alt="details img"></a>
                    </div>
                    <div class="col-sm-4">
                        <h3 id="dark-blue">R E A D I N G </h3>
                        <p id="justify">
                          <span id="dark-blue">INDEPENDENT:</span> Each day Cubs will enjoy independent, sacred reading time where they will receive 1-on-1 instruction to strengthen word decoding and text comprehension skills.
                        </p>
                        <p id="justify">
                          <span id="dark-blue">READ ALOUD:</span> Cubs will participate in teacher led read-alouds that will improve their fluency by listening to adult level reading. They will also improve their comprehension by contributing to discussions about the book.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ url('images/detailsimg3.png') }}" class="img-responsive center-block" id="detailsimg" alt="details img"></a>
                    </div>
                    <div class="col-sm-4">
                        <h3 id="dark-purple">W R I T I N G</h3>
                        <p id="justify">
                            Through daily creative and expository writing prompts Cubs will strengthen their sentence construction skills, spelling, handwriting and grammar.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-6">
                        <div id="details-research">
                            <h3 id="dark-blue">RESEARCH &amp; INVESTIGATION</h3>
                            <p id="justify">
                                Through research, projects and real life applications participants will learn vocabulary and improve general knowledge over the course of the program. Cubs will research and visit three NYC locations. By combining their book and online research with their impressions and notes taken during the visits, Cubs will present their findings through writing and art.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
