@extends('backend.app')
@section('page')
            <div class="content-body">

            	<div class="container">

            		<div class="col-xl-12 col-xxl-12">
            			<div class="card">
            				<div class="card-body">
            					<h4 class="card-title mb-3">Kateqoriyalar</h4>
            					<div align="right">
            						<a href="{{route('category.insert')}}"><button class="btn btn-outline-info">Əlavə Et</button></a>
            					</div>
            					<div class="table-responsive">
            						<table class="table mb-0 market-cap table-responsive-sm">
            							<thead>
            								<tr>
            									
                                                                  <th>Kateqoriya</th>
                                                                 
                                                                  
                                                                  <th>Əməliyyatlar</th>
                                                            </tr>
                                                      </thead>
                                                      <tbody>
                                                            @foreach($category as $data)
                                                                <tr>
                                                                 
                                                                  
      
                                                                  <td>{{$data->category}}</td>
                                                                 
                                                                  <td>
                                                                     
                                                                       
                                                                       <a
                                                                     class="delete_category_btn btn btn-danger"  href="{{route('category.delete',$data->id)}}">Sil</a>
                                                                  </td>
                                                            </tr>
                                                            @endforeach
                                                </tbody>
                                          </table>
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
<script type="text/javascript">

       $('.delete_category_btn').on('click', function(e){

      e.preventDefault();

      const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false,
    })

    swalWithBootstrapButtons.fire({
      title: 'Silmek isteyirsiniz?',
      text: "Silsez qaytara bilmeyeceksiniz!!!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Sil',
      cancelButtonText: 'Yox, silme',
      reverseButtons: true
    }).then((result) => {
      if (result.value) {



        var btn = $(this);
        var link = btn.attr('href');

        $.ajax({
          url : link,
          success : function(data){
            if(data=='ok'){
              btn.closest('tr').remove();

              swalWithBootstrapButtons.fire(
                'Silindi!',
                'Slider ugurla silindi. Bir daha onu gormeyeceksiniz.',
                'success'
              )

            }
          },
          error : function(e){
            console.log(e);
          }
        })



        
      } else if (
        // Read more about handling dismissals
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          'Imtina',
          'Slideriniz oldugu yerdedir :)',
          'error'
        )
      }
    });


    })


</script>
@endsection