@extends('layouts.layout')
@section('title', 'Xidmətlər')
@section('head')
    <link href="{{ asset('/css/services.css')  }}" rel="stylesheet">
@endsection
@section('content')
	<section id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>Mütəxəssislərimizə aşağıdakı psixoloji problemlərin həlli ilə bağlı müraciət edə bilərsiniz:</h3>
				</div>	
				<ul>
                    @foreach($services as $service)
                    <div class="col-md-6">
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> {{$service->name}}</li>
                    </div>
                    @endforeach
                </ul>
			</div>
		</div>
	</section>
@endsection
@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection