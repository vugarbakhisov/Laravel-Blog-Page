	   @extends('front.app')
 @section('index')

	<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url({{asset($new->sekil)}});">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Daha Ətraflı</h1>
				   					<h2><span><a href="{{route('index')}}">Ana Səyfə</a></span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		
                <div class="colorlib-classes">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="row row-pb-lg">
                            <div class="col-md-12 animate-box">
                                <div class="classes class-single">
                                    <div class="classes-img" style="background-image: url({{asset($new->sekil)}});">
                                      
                                    </div>
                                    <div class="desc desc2">
                                        <h3><a href="#">{{$new->basliq}}</a></h3>
                                        <p>{!!$new->mezmun!!}</p>
                                       
                                       
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    
                    </div>
                </div>
            </div>  
        </div>
    
        <div id="colorlib-subscribe" class="subs-img" style="background-image: url({{asset($new->sekil)}})" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                        <h2>Subscribe Newsletter</h2>
                        <p>Subscribe our newsletter and get latest update</p>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="row">
                            <div class="col-md-12">
                            <form class="form-inline qbstp-header-subscribe">
                                <div class="col-three-forth">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="email" placeholder="Enter your email">
                                    </div>
                                </div>
                                <div class="col-one-third">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Subscribe Now</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
       @endsection

@section('css')


@endsection

@section('js')


@endsection



