@extends('backend.app')

@section('page')
	            <div class="content-body">

            	<!-- row -->

            	<div class="container">
            		<div class="row">
            			<div class="col-12">
            				<h3 class="content-heading mt-2">Yeni user elave etmek</h3>
            			</div>
            			<div class="col-xl-12 col-xxl-12">
            				<div class="card">
            					<div class="card-body">
            						<h4 class="card-title"></h4>
            						<div class="basic-form">
            							 <form method="POST" action="{{route('user.save')}}" enctype="multipart/form-data">
                                                          {{ csrf_field() }}
                                                          <div class="input-group mb-3">
                                                            <div class="custom-file">
                                                                <input name="sekil" type="file" class="custom-file-input">
                                                                <label class="custom-file-label">Şəkil Seç</label>
                                                          </div>
                                                          <div class="input-group-append">
                                                          </div>
                                                    </div>   

                                              </div>
                          <h4 class="card-title">Name</h4>
                          <div class="form-group">
                            <input type="text" name="name"class="form-control input-rounded" />
                          </div>
                
                          
                          
                                              <h4 class="card-title">Email</h4>
                            <div class="form-group">
                             <input type="email" name="email" class="form-control input-rounded" />
                           </div>

                                              <h4 class="card-title">Şifrə</h4>
                            <div class="form-group">
                             <input type="text" name="password" class="form-control input-rounded" />
                           </div>

                           
                         <button type="submit" class="btn btn-primary btn-block" name="elave_et">Elave Et</button>

                       </form>
                     </div>

                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
@endsection