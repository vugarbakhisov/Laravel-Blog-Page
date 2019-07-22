@extends('backend.app')
@section('page')

<script type="text/javascript" src="{{asset('backend/tinymce/js/tinymce/tinymce.min.js')}}">
</script>

<script type="text/javascript">
	tinymce.init({
    entity_encoding : "raw",
		selector: "textarea",
		theme: "modern",
		plugins: [
		"advlist autolink lists link image charmap print preview hr anchor pagebreak",
		"searchreplace wordcount visualblocks visualchars code fullscreen",
		"insertdatetime media nonbreaking save table contextmenu directionality",
		"emoticons template paste textcolor colorpicker textpattern imagetools"
		],
		toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		toolbar2: "print preview media | forecolor backcolor emoticons | ltr rtl",
		image_advtab: true,
		templates: [
		{ title: 'Test template 1', content: 'Test 1' },
		{ title: 'Test template 2', content: 'Test 2' }
		],

	});
</script>

        <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">

            	<!-- row -->

            	<div class="container">
            		<div class="row">
            			<div class="col-12">
            				<h3 class="content-heading mt-2">Məqalə Əlavə</h3>
            			</div>
            			<div class="col-xl-12 col-xxl-12">
            				<div class="card">
            					<div class="card-body">
            						<h4 class="card-title"></h4>



            						<div class="basic-form">
            							<form method="POST" action="{{route('reyler.edit.save',$data->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}

                            					<h4 class="card-title">Cari Şəkil</h4>
                            <div class="form-group">
                             <img style="width: 200px; border-radius: 25%;" src="{{asset($data->image)}}" />
                           </div>
                                                         <div class="basic-form custom_file_input">

                                                          <div class="input-group mb-3">
                                                            <div class="custom-file">
                                                                <input  name="image" type="file" class="custom-file-input">
                                                                <label class="custom-file-label">Şəkil Seç</label>
                                                          </div>
                                                          <div class="input-group-append">
                                                          </div>
                                                    </div>   

                                              </div>
                                              <h4 class="card-title">Ad</h4>
                                              <span style="color:red"></span>
                                              <div class="form-group">
                                                   <input type="text" name="name" value="{{$data->name}}" class="form-control input-rounded" />
                                             </div>
                                               
 												</div>
 														<input type="hidden" name="status" value="{{$data->status}}">
                                             <h4 class="card-title">Məzmun</h4>
                                             <div class="form-group">
                                                    <textarea class="form-control" rows="15" name="comment">{{$H->comment}}
                                                   </textarea>
                                               
                                           
                                             
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