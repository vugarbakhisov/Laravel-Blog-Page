@extends('backend.app')
@section('page')

<div class="content-body">

            	<!-- row -->

            	<div class="container">
            		<div class="row">
            			<div class="col-12">
            				<h3 class="content-heading mt-2">SLIDER - EDIT</h3>
            			</div>
            			<div class="col-xl-12 col-xxl-12">
            				<div class="card">
            					<div class="card-body">
            						<h4 class="card-title"></h4>
            						<div class="basic-form">
            							<form method="POST" action="{{route('slider.edit.save',$data->id)}}" enctype="multipart/form-data">
            								{{csrf_field()}}
                          
                            <h4 class="card-title">Cari Şəkil</h4>
                            <div class="form-group">
                             <img style="width: 200px; border-radius: 25%;" src="{{asset($data->sekil)}}" />
                           </div>
                           <div class="basic-form custom_file_input">

                            <div class="input-group mb-3">
                              <div class="custom-file">
                                <input name="sekil" type="file" class="custom-file-input">
                                <label class="custom-file-label">Şəkil Seç</label>
                              </div>
                              <div class="input-group-append">
                              </div>
                            </div>   

                          </div>
                          <h4 class="card-title">Ad</h4>
                          <div class="form-group">
                            <input type="text" name="ad" value="{{$data->ad}}" class="form-control input-rounded" />
                          </div>
                          <h4 class="card-title">Sıra</h4>
                          <div class="form-group">
                           <input type="number" min="1" max="10" name="sira" value="{{$data->sira}}"  class="form-control input-rounded" />
                         </div>
                          <h4 class="card-title">Status</h4>
                          <div class="form-group">
                           <input type="number"  name="status" value="{{$data->status}}"  class="form-control input-rounded" />
                         </div>
                      
                       <input type="hidden" name="id" value="{{$data->id}}">
                         <button  type="submit"  class="btn btn-primary btn-block" >Yenilə</button>

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