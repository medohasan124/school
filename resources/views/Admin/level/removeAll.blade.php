<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalDeleteAll">
 {{trans('admin.deleteAll')}}
 <i class='fas fa-trash'></i> 
</button>



<!-- Modal -->
<div class="modal fade" id="exampleModalDeleteAll" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{trans('admin.deleteAll')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       {{Form::open(['route' => ['deleteAll'] ] , [ 'id' =>'delAll'])}}
          <h2>{{trans('admin.pleaseSelect')}}</h2>
          <input type='text'  name='arr' value='' class='input-hide d-none'>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('admin.close')}}</button>
          <button id='deleteAll' class='btn btn-danger d-none'>{{trans('admin.delete')}}</button>
       {{Form::close()}}
      </div>

    </div>
  </div>
</div>
{{-- end add grade modal --}}
@push('js')
<script>
  $('#deleteAll').click(function(){
    $('tbody #delAll').submit();
  });
</script>
@endpush