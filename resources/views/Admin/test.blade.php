@extends('admin.layout.home')

@push('css')
<style>
  display-none {
    display: none;
}

.multi-wizard-step p {
    margin-top: 12px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    position: relative;
    width: 100%;
}

.multi-wizard-step button[disabled] {
    filter: alpha(opacity=100) !important;
    opacity: 1 !important;
}

.stepwizard-row:before {
    top: 20px;
    bottom: 0;
    content: " ";
    width: 100%;
    height: 1px;
    z-order: 0;
    position: absolute;
    background-color:#212529;
}

.multi-wizard-step {
    text-align: center;
    position: relative;
    display: table-cell;
}
</style>
@livewireStyles
@endpush


@section('head')
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
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
   <section class="content">
      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          
            
          @livewire('my-parents')
         
        </div>
  
      </div>
    </section>
@endsection

@push('js')
@livewireScripts
@endpush


