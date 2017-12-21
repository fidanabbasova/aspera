@extends('layouts.layout')
@section('title', 'Əlaqə')
@section('head')
    <link href="{{ asset('/css/address.css')  }}" rel="stylesheet">
@endsection
@section('content')
<section class="container-fluid" id="address">
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
    <div class="container-fluid" style='overflow:hidden; '>
        <div id='gmap_canvas' class="container-fluid" style="height: 600px;">
        </div>
    </div>
    <script type='text/javascript'>
        function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(40.38214,49.82961769999997),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.38214,49.82961769999997)});infowindow = new google.maps.InfoWindow({content:'<strong>Aspera Psixoloji Yardım və İnkişaf Mərkəzi</strong><br>Cəfər Cabbarlı 29<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
    </script>
</section>
@endsection
@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection

