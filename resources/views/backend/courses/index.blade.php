@extends('backend.app')
@section('page')
            <div class="content-body">

              <div class="container">

                <div class="col-xl-12 col-xxl-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title mb-3">Courses</h4>
                      <div align="right">
                        <a href="{{route('courses.insert')}}"><button class="btn btn-outline-info"><i class="fa fa-plus" aria-hidden="true"></i></button></a>
                      </div>
                      <div class="table-responsive">
                        <table class="table mb-0 market-cap table-responsive-sm">
                          <thead>
                            <tr>
                            									  <th>Şəkil</th>
                                                                  <th>Başlıq</th>
                                                                  <th>Category</th>
                                                                  <th>Ödəniş</th>
                                                                  <th>Status</th>
                                                                  <th>Əməliyyatlar</th>
                                                            </tr>
                                                      </thead>
                                                      <tbody>
                                                           @foreach($courses as $cours)
                                                                <tr>
                                                                  <td><img style="border-radius: 20%;" width="75" src="{{asset($cours->sekil)}}"></td>
                                                                  <td>{{$cours->basliq}}</td>

                                                                  <td>{{$cours->category->category}}</td>
                                                                  <td>{{$cours->odenis}}</td>


                                                                  <td>
                                                                        
                                                                             
                                                                                    <a href="{{route('courses.change_status',$cours->id)}}" class="change_status_btn btn btn-{{$cours->status == 0 ? 'success' : 'danger'}}">
                                                                        {{$cours->status == 0 ? 'Aktiv et' : 'Deaktiv Et'}}
                                                                      </a>

                                                                 

                                                                  </td>
                                                                  <td>
                                                                       
                                                                          <a href="{{route('courses.edit',$cours->id)}}"><button style="border: none;" name="redakte_et" class="badge badge-info btn-block" >Redaktə Et</button></a> 
                                                                      
                                                                         <a
                                                                     class="delete_teachers_btn btn btn-danger"  href="{{route('delete',$cours->id)}}">Sil</a>
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

// ========  Change slider status Ajax ===============

    $('.change_status_btn').on('click', function(e){
      e.preventDefault();
      var btn = $(this);
      var link = btn.attr('href');
      $.ajax({
        url : link,
        success :  function(data){
          //console.log(data);
          if(data=='ok'){
            //console.log(btn.attr('class'));
            if(btn.hasClass('btn-success')){
              btn.removeClass('btn-success');
              btn.addClass('btn-danger');
              btn.text('Deaktiv et');
            }else{
              btn.removeClass('btn-danger');
              btn.addClass('btn-success');
              btn.text('Aktiv et');
            }
          }
        },
        error :  function(e){
          console.log(e);
        }
      })
    });    


// ========  Delete slider Ajax ===============

    $('.delete_courses_btn').on('click', function(e){

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
@endsection()