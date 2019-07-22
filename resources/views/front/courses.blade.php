@extends('front.app')
 @section('index')


<aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                <li style="background-image: url({{asset('front/images/img_bg_2.jpg')}})">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>Kurslarımız</h1>
                                    <h2><span><a href="{{route('index')}}">Home</a> </span></h2>
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
                    <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                       
                      
                    </div>
                </div>
                <div class="row">
                    @foreach($courses as $c)
                    <div class="col-md-4 animate-box">
                        <div class="classes">
                            <div class="classes-img" style="background-image: url({{asset($c->sekil)}})">
                                <span class="price text-center"><small>{{$c->odenis}}‎&nbsp;<sup>₼</sup></small></span>
                            </div>
                            <div class="desc">
                                <h3><a href="#">{{$c->basliq}}</a></h3>
                                
                                <p><a href="{{route('course.detail',$c->id)}}" class="btn-learn">Etraflı<i class="icon-arrow-right3"></i></a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                    
                  
                   
            </div>  
        </div>
    
        <div id="colorlib-subscribe" class="subs-img" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                        <h2>BÜLTENE ABONE OL</h2>
                        <p>Bültenimize abone olun ve en son güncellemeleri alın.</p>
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

