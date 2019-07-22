 @extends('backend.app')
 @section('page')
 
          <div class="content-body">
                  <!-- row -->

                  <div class="container">
                        <div class="row">
                              <div class="col-12">
                                    <h3 class="content-heading">Ümumi Nizamlamalar</h3>
                              </div>

                              <div class="col-lg-12">
                                    <div class="card">
                                          <div class="card-body">
                                                <h4 class="card-title">Səhifənin ümumi nizamlamalarını buradan dəyişdirə bilərsiniz!</h4>
                                                <div class="basic-form">
                                     <form class="form-valide-with-icon" action="{{route('nizam.save')}}" method="POST">
                                                       {{csrf_field()}}
                                    
                                                            <div class="form-group">
                                                                  <label class="text-label">Başlıq *</label>
                                                                  <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                              <span class="input-group-text"> <i class="fa fa-header" ></i> </span>
                                                                        </div>
                                                                        <input value="{{$N->title}}" name="title" type="text" class="form-control" id="val-username1" name="title" value="" >
                                                                  </div>
                                                            </div>

                                                            <div class="form-group">
                                                                  <label class="text-label">Açıqlama *</label>
                                                                  <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                              <span class="input-group-text"> <i class="fa fa-align-justify" ></i> </span>
                                                                        </div>
                                                                        <input value="{{$N->description}}" name="description" type="text" class="form-control" id="val-username1" name="description">
                                                                  </div>
                                                            </div>
                                                            <div class="form-group">
                                                                  <label class="text-label">Unvan *</label>
                                                                  <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                              <span class="input-group-text"> <i class="fas fa-map-marker-alt"></i> </span>
                                                                        </div>
                                                                        <input value="{{$N->unvan}}" name="unvan" type="text" class="form-control" id="val-username1" name="unvan" >
                                                                  </div>
                                                            </div>

                                                            <div class="form-group">
                                                                  <label class="text-label">Tel *</label>
                                                                  <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                              <span class="input-group-text"> <i class="fas fa-mobile"></i> </span>
                                                                        </div>
                                                                        <input value="{{$N->tel}}" name="tel" type="tel" class="form-control"  id="val-username1" name="tel" placeholder="Enter a username..">
                                                                  </div>
                                                            </div>
                                                             <div class="form-group">
                                                                  <label class="text-label">Ofis*</label>
                                                                  <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                              <span class="input-group-text"> <i class="far fa-building"></i> </span>
                                                                        </div>
                                                                        <input value="{{$N->ofis}}" name="ofis" type="text" class="form-control" id="val-username1" name="ofis" placeholder="Enter a username..">
                                                                  </div>
                                                            </div>
                                                              <div class="form-group">
                                                                  <label class="text-label">Email*</label>
                                                                  <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                              <span class="input-group-text"> <i class="fas fa-envelope-open-text"></i> </span>
                                                                        </div>
                                                                        <input  value="{{$N->email}}"   type="email" class="form-control"  id="val-username1" name="email" placeholder="Enter a username..">
                                                                  </div>
                                                            </div> 

                                                             <div class="form-group">
                                                                  <label class="text-label">Poct*</label>
                                                                  <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                              <span class="input-group-text"> <i class="fas fa-at"></i> </span>
                                                                        </div>
                                                                        <input  value="{{$N->poct}}"  name="poct" type="text" class="form-control" id="val-username1" name="poct" placeholder="Enter a username..">
                                                                  </div>
                                                            </div>
                                                           <div class="form-group">
                                                                  <label class="text-label">Facebook*</label>
                                                                  <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                              <span class="input-group-text"><i class="fab fa-facebook-f"></i></span>
                                                                        </div>
                                                                        <input  value="{{$N->facebook}}"  name="facebook" type="text" class="form-control" id="val-username1" name="facebook" >
                                                                  </div>
                                                            </div>

                                                            <div class="form-group">
                                                                  <label class="text-label">Instagram *</label>
                                                                  <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                              <span class="input-group-text"> <i class="fab fa-instagram"></i></span>
                                                                        </div>
                                                                        <input  value="{{$N->instagram}}"  name="instagram" type="text" class="form-control"  id="val-username1" name="instagram" placeholder="Enter a username..">
                                                                  </div>
                                                            </div>
                                                             <div class="form-group">
                                                                  <label class="text-label">Youtube*</label>
                                                                  <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                              <span class="input-group-text"> <i class="fab fa-youtube"></i> </span>
                                                                        </div>
                                                                        <input  value="{{$N->youtube}}"  name="youtube" type="text" class="form-control" id="val-username1" name="youtube" placeholder="Enter a username..">
                                                                  </div>
                                                            </div>
                                                             
                                                            <button  type="submit" class="btn btn-primary btn-block" name="u_yenile">Yenilə</button>
                                                      </form>
                                                </div>
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
