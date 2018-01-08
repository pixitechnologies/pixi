@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row" >
            <div class="col-md-6" id="us">
                <h1  id="me">CONTACT US TODAY</h1>
                    <i class="fa fa-mobile-phone fa-5x fa-fw"></i><br>
                    <i class="fa fa-inbox fa-5x fa-fw"></i><br>
                    <i class="fa fa-instagram fa-5x fa-fw"></i><br>
                    <i class="fa fa-twitter fa-5x fa-fw"></i><br>
                    <i class="fa fa-linkedin fa-5x fa-fw"></i><br>
                    <i class="fa fa-map-marker fa-5x fa-fw"></i><br>
<br>


            </div>

            <div class="col-md-6">
                <h3 id="me">OUR OFFICE LOCATION</h3>
                <div id="map">
                    <script>
                        function initMap() {
                            var uluru = {lat: -6.820765, lng: 39.275756};
                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 18,
                                center: uluru
                            });
                            var marker = new google.maps.Marker({
                                position: uluru,
                                map: map
                            });
                        }
                    </script>
                    <script async defer
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbvXQyB6Qp6XPl1W9urk_tEPbYKWn5_-8&callback=initMap">
                    </script>
                </div>
            </div>

        </div>
    </div>
  

    @endsection