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
                 @include('Admin.grade.modalAdd')
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap text-center">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>{{trans('admin.name')}}</th>
                      <th>{{trans('admin.created_at')}}</th>
                      <th>{{trans('admin.updated_at')}}</th>
                      <th>{{trans('admin.controle')}}</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($data as $row)
                      <tr>
                      <td>{{$row->id}}</td>
                      
                      <td>{{$row->name}}</td>
                      <td>{{$row->created_at}}</td>
                      <td>{{$row->updated_at}}</td>
                      <td>
                       @include('Admin.grade.controles')
                       
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
    $('#grade-open').addClass('menu-open') ;
    $('#grade').addClass('active') ;
    $('#grade-list').addClass('active') ;
  </script>
@endpush