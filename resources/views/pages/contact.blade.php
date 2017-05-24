@extends('layouts.layout')

@section('title', 'NYCity Cubs | Contact')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="well">
            <div class="row">
                <div class="col-sm-5 col-sm-offset-1">
                    <h2>CONTACT</h2>
                        <p>Contact us and we'll get back to you within 24 hours.</p>
                        <p><span class="glyphicon glyphicon-user"></span> Logan &amp; Adriana, Queens, New York</p>
                        <p><span class="glyphicon glyphicon-phone"></span> <a href="tel:9176836854">(917) 683-6854</a></p>
                        <p><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:nycitycubs@gmail.com">nycitycubs@gmail.com</a></p>
                        <p><span class="glyphicon glyphicon-map-marker"></span> Drop off/Pick up location:<br>
                                                                                David Rubenstein Atrium, 61 West 62nd Street (Broadway)</p>
                </div><br>
                <div class="col-sm-5 col-sm-offset-1">
                    <div id="map"></div>

                    <!-- Add Google Maps -->
                    <script>
                        function initMap() {
                          var mapDiv = document.getElementById('map');
                          var map = new google.maps.Map(mapDiv, {
                              center: {lat: 40.771395, lng: -73.982914},
                              zoom: 17
                          });

                          var marker = new google.maps.Marker({
                            position: {lat: 40.771395, lng: -73.982914},
                            map: map,
                            title: 'NYCity Cubs'
                          });

                        }
                    </script>
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9nvN7A9Qly-oQrw7N3QkbVOaR3sB8nJw&callback=initMap">
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
