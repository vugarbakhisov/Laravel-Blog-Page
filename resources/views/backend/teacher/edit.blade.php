@extends('backend.app')
@section('page')



        <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">

            	<!-- row -->

            	<div class="container">
            		<div class="row">
            			<div class="col-12">
            				<h3 class="content-heading mt-2">Teacher Əlavə</h3>
            			</div>
            			<div class="col-xl-12 col-xxl-12">
            				<div class="card">
            					<div class="card-body">
            						<h4 class="card-title"></h4>



            						<div class="basic-form">
            							<form method="POST" action="{{route('teacher.edit.save',$data->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}

                            					<h4 class="card-title">Cari Şəkil</h4>
                            <div class="form-group">
                             <img style="width: 200px; border-radius: 25%;" src="{{asset($data->sekil)}}" />
                           </div>
                                                         <div class="basic-form custom_file_input">

                                                          <div class="input-group mb-3">
                                                            <div class="custom-file">
                                                                <input  name="sekil" type="file" class="custom-file-input">
                                                                <label class="custom-file-label">Şəkil Seç</label>
                                                          </div>
                                                          <div class="input-group-append">
                                                          </div>
                                                    </div>   

                                              </div>
                                              <h4 class="card-title">Ad</h4>
                                              <span style="color:red"></span>
                                              <div class="form-group">
                                                   <input type="text" name="ad" value="{{$data->ad}}" class="form-control input-rounded" />
                                             </div>
                                               
 												</div>
 														<input type="hidden" name="status" value="{{$data->status}}">
                                            
                                             <h4 class="card-title">Vəzifə</h4>
                                              <span style="color:red"></span>
                                              <div class="form-group">
                                                   <input type="text" name="vezife" value="{{$data->vezife}}" class="form-control input-rounded" />
                                             </div>
                                               
                                           
                                             
                                             <button type="submit" class="btn btn-primary btn-block">Əlavə Et</button>

                                       </form>
                                 </div>

                           </div>
                     </div>
               </div>
         </div>
   </div>
</div>

@endsection()
@section('css')
@endsection()
@section('js')
@endsection()