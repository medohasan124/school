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
        <form method='POST' action="{{route('levels.store')}}">
           @csrf
           <div class='f-form'>
            <div class='row'>
            <div class='col-md-4'>
              <label>{{trans('admin.EnName')}}</label>
              <input class='form-control' type='text' name='EnName[]' required="required">
            </div>
            <div class='col-md-4'>
                <label>{{trans('admin.ArName')}}</label>
                <input class='form-control' type='text' name='ArName[]' required="required">
            </div>

             <div class='col-md-4'>
                <label>{{trans('admin.grade')}}</label>
                <select class='form-control' name='grade_id[]' required>
                  <option value='' class='d-none'>{{trans('admin.selectOption')}}</option>
                  @foreach(\App\grade::all() as $row)
                    <option  value='{{$row->id}}'>{{$row->name}}</option>
                  @endforeach
                </select>
            </div>
              
            <span id='rm-element' class='btn btn-danger'>{{trans('admin.delete')}}</span>
           
            
          </div>
         
          <hr>
          </div>  
      </div>


      <span id='createNewRow' class='btn btn-info'>create new + </span>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('admin.close')}}</button>
          <button id='submiting' class='btn btn-primary'>{{trans('admin.insert')}}</button>
        </form>
      </div>

    </div>
  </div>
</div>
{{-- end add grade modal --}}
@push('js')
<script>
  $('#createNewRow').click(function(){
    var div = $('.modal-body .f-form').html() ;
    $('.modal-body form').append(`
      <div class='f-form'>
            <div class='row'>
            <div class='col-md-4'>
              <label>{{trans('admin.EnName')}}</label>
              <input class='form-control' type='text' name='EnName[]' required="required">
            </div>
            <div class='col-md-4'>
                <label>{{trans('admin.ArName')}}</label>
                <input class='form-control' type='text' name='ArName[]' required="required">
            </div>

            <div class='col-md-4'>
                <label>{{trans('admin.grade')}}</label>
                 <select class='form-control' name='grade_id[]' required>
                  <option value='' class='d-none'>{{trans('admin.selectOption')}}</option>
                  @foreach(\App\grade::all() as $row)
                    <option  value='{{$row->id}}'>{{$row->name}}</option>
                  @endforeach
                </select>
            </div>
           
          </div>
           <span id='rm-element' class='btn btn-danger'>remove</span>
          <hr>
          </div>
      `) ;
  });

  $(document).on( 'click' ,'#rm-element', function(){
    $(this).parent().fadeOut().remove();
  });

  // $('#submit').click(function(){
  //   $('.modal-body form').submit() ;
  // });
</script>
@endpush