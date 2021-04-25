<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 {{trans('admin.insert')}}
 <i class='fas fa-plus'></i> 
</button>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{trans('admin.insert')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method='POST' action="{{route('grade.store')}}">
           @csrf
          <label>{{trans('admin.EnName')}}</label>
          <input class='form-control' type='text' name='EnName'>

          <label>{{trans('admin.ArName')}}</label>
          <input class='form-control' type='text' name='ArName'>

        
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('admin.close')}}</button>
          <input class='btn btn-primary' type='submit' value='{{trans('admin.insert')}}'>
        </form>
      </div>
    </div>
  </div>
</div>
{{-- end add grade modal --}}