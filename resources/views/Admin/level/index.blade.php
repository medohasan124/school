@extends('admin.layout.home')

@section('head')
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{trans('admin.grade')}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection
@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if(session()->get('success'))
  <div class='alert alert-success'>{{session()->get('success')}}</div>
@endif
   <section class="content">
      <!-- Default box -->
                   <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">

                
                 @include('Admin.level.modalAdd')
                  @include('Admin.level.removeAll') 
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap text-center">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Select All <input type='checkbox' id='selectAll'></th>
                      <th>{{trans('admin.name')}}</th>
                      <th>{{trans('admin.grade_name')}}</th>
                      <th>{{trans('admin.created_at')}}</th>
                      <th>{{trans('admin.updated_at')}}</th>
                      <th>{{trans('admin.controle')}}</th>
                    </tr>
                  </thead>
                  <tbody>
                
                  @foreach($data as $row)
                      <tr>
                      <td>{{$row->id}}</td>
                      <td><input type='checkbox' value='{{$row->id}}' class='select' name='select[]'></td>
                     </td>
                      
                      <td>{{$row->name}}</td>
                      <td>{{App\grade::where('id' , $row->grade_id)->first()->name}}</td>
                      <td>{{$row->created_at}}</td>
                      <td>{{$row->updated_at}}</td>
                      <td>
                       @include('Admin.level.controles') 
                       
                      </td>
                      </tr>
                  @endforeach            

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>


      
    </section>
@endsection


@push('js')
  <script>
    $('#level-open').addClass('menu-open') ;
    $('#level').addClass('active') ;
    $('#level-list').addClass('active') ;
     var arr = [] ;
    
    $('#selectAll').change(function(){
      $('.select').prop('checked' , $(this).prop('checked')) ;

      if($(this).prop('checked')){
        var number = $('.select:checked').length ;
         $('#exampleModalDeleteAll .modal-body h2').html('{{trans('admin.suringDelete')}}' + number) ;
          $('.select').prop('checked' , $(this).prop('checked')).each(function(){
              arr.push(this.value);
           });
             
         $('#exampleModalDeleteAll #deleteAll').removeClass('d-none') ;
      }else{
        $('#exampleModalDeleteAll .modal-body h2').html('{{trans('admin.pleaseSelect')}}') ;
            arr = [] ;
        $('#exampleModalDeleteAll #deleteAll').addClass('d-none') ;
      }


     
       console.log(arr) ;
      $('.input-hide').attr('value' , arr) ;
    });

    $('.select').change(function(){

      if($(this).prop('checked') == false){
         $('#selectAll').prop('checked' , false) ;
        // arr = arr.splice(this.value);
          var removeItem = $(this).val() ;
          arr = jQuery.grep(arr, function(value) {
              return value != removeItem;
            });
      }else{
        arr.push(this.value);
      }

      if($('.select:checked').length == $('.select').length){
         $('#selectAll').prop('checked' , true) ;
         var number = $('.select:checked').length ;
         $('#exampleModalDeleteAll .modal-body h2').html('{{trans('admin.suringDelete')}}' + number) ;
            
         $('#exampleModalDeleteAll #deleteAll').removeClass('d-none') ;
      }


      var number = $('.select:checked').length ;
      $('#exampleModalDeleteAll .modal-body h2').html('{{trans('admin.suringDelete')}}' + number) ;
      
      $('#exampleModalDeleteAll #deleteAll').removeClass('d-none') ;
      if($('.select:checked').length == 0){
        $('#exampleModalDeleteAll .modal-body h2').html('{{trans('admin.pleaseSelect')}}') ;
        $('#exampleModalDeleteAll #deleteAll').addClass('d-none') ;
        var removeItem = $(this).val() ;
          arr = jQuery.grep(arr, function(value) {
              return value != removeItem;
            });
      }
      console.log(arr) ;
     $('.input-hide').attr('value' , arr) ;
    });





  </script>
@endpush