@extends('layouts.layout')

@section('title', 'Contact')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="well">
            <div class="row">
                <div class="col-sm-5 col-sm-offset-1">
                    <h2>CONTACT</h2>
                        <p>Contact us and we'll get back to you within 24 hours.</p>
                        <p><span class="glyphicon glyphicon-map-marker"></span> Logan &amp; Adriana, Queens, New York</p>
                        <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
                        <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
                </div>
                <div class="col-sm-5 col-sm-offset-1">
                    <div id="map" style="height:400px;width:100%;border-radius:15px;"></div>

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
