@extends('layouts.layout')
@section('title', 'Ana səhifə')
@section('head')
    <link href="{{ asset('/css/home.css')  }}" rel="stylesheet">
@endsection
@section('content')
    <section id="about" class="parallax-window" data-parallax="scroll">
        <div id="fluid" class="container-fluid">
            <div class="container">
                <div class="row text-center">
                    <h1>ASPERA</h1>
                    <h1>Psixoloji Yardım və İnkişaf Mərkəzi</h1>
                    <h3><i class="fa fa-check-square-o" aria-hidden="true"></i> Mərkəzimizdə istənilən yaş qrupuna aid uşaq və böyüklərin psixo-diaqnostikası, kompleks müayinəsi və psixo-korreksiyası aparılır.</h3>
                    <a href="/services" id="down"><i class="fa fa-angle-double-down fa-5x" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('/js/parallax.js') }}"></script>
    <script src="{{ asset('/js/home.js') }}"></script>
@endsection