	@extends('front.app')
 @section('index')

	<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url({{asset('front/images/4.jpg')}});">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Yeniliklər</h1>
				   					
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		


		<div class="colorlib-blog colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Yeniliklər</h2>
					</div>
				</div>
				<div class="row">
					 @foreach($M as $m)
                <div class="event-flex row-pb-sm">
               <div class="half event-img animate-box" style="background-image: url({{asset($m->sekil)}})">
                    </div>
                    <div class="half">
                        <div class="row">
                        
                            <div class="col-md-12 animate-box">
                                <div class="event-entry">
                                    <div class="desc">
                                        <p class="meta"><span class="day">{{$m->vaxt[0]}}</span><span class="month">{{$m->vaxt[1]}}</span></p>
                                        <p class="organizer"><span>Organized by:</span>{{$m->muellif}}<span></span></p>
                                        <h2><a href="{{route('new.details',$m->id)}}">{{$m->basliq}}</a></h2>
                                    </div>
                                    <div class="location">
                                        <span class="icon"><i class="icon-map"></i></span>
                                        <p>{{$m->adres}}</p>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                 @endforeach

	
       @endsection

@section('css')


@endsection

@section('js')


@endsection

