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
      {{ Form::open(['route' => ['levels.update' , $row->id] , 'method' => 'PUT' ,'class' => 'update']) }}
      <div class="modal-body">
          {{Form::label(trans('admin.EnName'))}}
          {{Form::text('EnName' ,$row->getTranslation('name','en') , ['class' => 'form-control'] )}} 


          {{Form::label(trans('admin.ArName'))}}
          {{Form::text('ArName' ,$row->getTranslation('name','ar') , ['class' => 'form-control'] )}} 


       
          <label>{{trans('admin.grade')}}</label>
            <select class='form-control' name='grade_id' required>
              <option value='' class='d-none'>{{trans('admin.selectOption')}}</option>
              @foreach(\App\grade::all() as $rows)
                @if($rows->id == $row->grade_id)
                  <option  value='{{$rows->id}}' selected>{{$rows->name}}</option>
                @else
                  <option  value='{{$rows->id}}'>{{$rows->name}}</option>
                @endif
                
              @endforeach
            </select>
           
         

         
      </div>
      <div class="modal-footer">

       
           <input class='btn btn-primary' type='submit' value='{{trans('admin.insert')}}'>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('admin.close')}}</button>
       
      </div>
       {{ Form::close() }}
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
        <h5 class="modal-title" id="exampleModalLabel">{{trans('admin.delete')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {{ Form::open(['route' => ['levels.destroy' , $row->id] , 'method' => 'DELETE']) }}
      <div class="modal-body">
        

        <h2 class='h4'>
          {{trans('admin.deleteModal')}} 
          <apan class='text-danger'>:{{$row->name}}</apan>  ?
        </h2>

         
      </div>
      <div class="modal-footer">

       
           <input class='btn btn-danger' type='submit' value='{{trans('admin.delete')}}'>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('admin.close')}}</button>
        
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>
{{-- end add grade modal --}}