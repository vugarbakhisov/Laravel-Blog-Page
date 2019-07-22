@extends('backend.app')
@section('page')
<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js">
</script>




        <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">

            	<!-- row -->

            	<div class="container">
            		<div class="row">
            			<div class="col-12">
            				<h3 class="content-heading mt-2">Katoqori elavə</h3>
            			</div>
            			<div class="col-xl-12 col-xxl-12">
            				<div class="card">
            					<div class="card-body">
            						<h4 class="card-title"></h4>
            						<div class="basic-form">
            							<form method="POST" action="{{route('category.save')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                            <h4 class="card-title">Kateqoriya_adi</h4>
                            <div class="form-group">
                             <input type="text" name="category" placeholder="Yeməyin Kateqoriyasini daxil edin..." class="form-control input-rounded" />
                           </div>
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
      

@endsection
@section('css')
@endsection
@section('js')
@endsection