 {{-- First Step --}}
      <div class="row setup-content {{ $currentStep != 1 ? 'd-none' : '' }}" id="step-1">
        
           
            <div class="col-md-6">


                
                <div class="form-group">
                    <label for="title">{{trans('admin.username')}}:</label>
                    <input type="text" wire:model="username" class="form-control" id="taskTitle">
                   
                    @error('username') <div  class="text text-danger" role="alert">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="description">{{trans('admin.password')}}:</label>
                    <input type="text" wire:model="password" class="form-control" id="teamPrice" />
                    @error('password') <div  class="text text-danger" role="alert">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="detail">{{trans('admin.f_name')}}:</label>
                    <input type="text" wire:model="f_name" class="form-control" id="teamPrice" />
                     @error('f_name') <div  class="text text-danger" role="alert">{{ $message }}</div> @enderror
                </div>

                 <div class="form-group">
                    <label for="detail">{{trans('admin.f_card')}}:</label>
                    <input type="text" wire:model="f_card_id" class="form-control" id="teamPrice" />
                     @error('f_card_id') <div  class="text text-danger" role="alert">{{ $message }}</div> @enderror
                </div>

               
            </div>

         <div class="col-md-6">
           
            <div class="form-group">
                <label for="title">{{trans('admin.f_job')}}:</label>
                <input type="text" wire:model="f_job" class="form-control" id="taskTitle">
                @error('f_job') <div  class="text text-danger" role="alert">{{ $message }}</div> @enderror
            </div>

              <div class="form-group">
                <label for="title">{{trans('admin.f_mobile')}}:</label>
                <input type="text" wire:model="f_mobile" class="form-control" id="taskTitle">
                 @error('f_mobile') <div  class="text text-danger" role="alert">{{ $message }}</div> @enderror
            </div>


            <div class="form-group">
                <label for="description">{{trans('admin.f_bloode')}}:</label>

                <select class='form-control' wire:model='f_bloode'>
                    <option value='' class='d-none'>{{trans('pleaseSelect')}}</option>
                    @foreach($bloodes as $row)
                    <option value='{{$row->id}}'>{{$row->name}}</option>
                    @endforeach
                </select>

               @error('f_bloode') <div  class="text text-danger" role="alert">{{ $message }}</div> @enderror
            </div>


            <div class="form-group">
                <label for="detail">{{trans('admin.f_dayana')}}:</label>
                <select class='form-control' wire:model='f_dayana'>
                    <option value='' class='d-none'>{{trans('pleaseSelect')}}</option>
                    @foreach($dayana as $row)
                    <option value='{{$row->id}}'>{{$row->name}}</option>
                    @endforeach
                </select>
                @error('f_dayana') <div  class="text text-danger" role="alert">{{ $message }}</div> @enderror
            </div>
           
            </div>

             <div class="col-md-12">
           
                <div class="form-group">
                    <label for="title">{{trans('admin.f_address')}}:</label>
                    <textarea type="text" wire:model="f_address" class="form-control"
                    id="taskDetail">{{{ $detail ?? '' }}}</textarea>
                    @error('f_address') <div  class="text text-danger" role="alert">{{ $message }}</div> @enderror
                </div>
                 <button class="btn btn-primary nextBtn pull-right" wire:click="firstStepSubmit"
                        type="button">{{trans('admin.next')}}</button>
           
           
            </div>
       
    </div>