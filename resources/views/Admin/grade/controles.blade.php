<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$row->id}}">
 {{trans('admin.update')}}
 <i class='fas fa-edit'></i> 
</button>



<!-- Modal -->
<div class="modal fade text-left" id="exampleModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{trans('admin.insert')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ Form::open(['route' => ['grade.update' , $row->id] , 'method' => 'put']) }}

          {{Form::label(trans('admin.EnName'))}}
          {{Form::text('EnName' ,$row->getTranslation('name','en') , ['class' => 'form-control'] )}} 


          {{Form::label(trans('admin.ArName'))}}
          {{Form::text('ArName' ,$row->getTranslation('name','ar') , ['class' => 'form-control'] )}} 


       
         

         
      </div>
      <div class="modal-footer">

       
           <input class='btn btn-primary' type='submit' value='{{trans('admin.insert')}}'>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('admin.close')}}</button>
        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>
{{-- end add grade modal --}}




<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeleteModal{{$row->id}}">
 {{trans('admin.delete')}}
 <i class='fas fa-trash'></i>
</button>



<!-- Modal -->
<div class="modal fade text-left" id="DeleteModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{trans('admin.insert')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ Form::open(['route' => ['grade.destroy' , $row->id] , 'method' => 'DELETE']) }}

        <h2 class='h4'>
          {{trans('admin.deleteModal')}} 
          <apan class='text-danger'>:{{$row->name}}</apan>  ?
        </h2>

         
      </div>
      <div class="modal-footer">

       
           <input class='btn btn-danger' type='submit' value='{{trans('admin.delete')}}'>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('admin.close')}}</button>
        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>
{{-- end add grade modal --}}