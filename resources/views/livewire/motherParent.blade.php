 {{-- First Step --}}
      <div class="row setup-content {{ $currentStep != 2 ? 'd-none' : '' }}" id="step-1">
        
           
            <div class="col-md-6">
                
                <div class="form-group">
                    <label for="detail">{{trans('admin.m_name')}}:</label>
                    <input type="text" wire:model="m_name" class="form-control" id="teamPrice" />
                    @error('m_name') <span class="text text-danger error">{{ $message }}</span> @enderror
                </div>

                 <div class="form-group">
                    <label for="detail">{{trans('admin.m_card')}}:</label>
                    <input type="text" wire:model="m_card_id" class="form-control" id="teamPrice" />
                    @error('m_card_id') <span class="text text-danger error">{{ $message }}</span> @enderror
                    @if($old_card_id == $m_card_id)
                        <span class='text text-danger'>that number by father ID</span>
                    @endif  
                </div>

                 <div class="form-group">
                <label for="detail">{{trans('admin.m_dayana')}}:</label>
                <select class='form-control' wire:model='m_dayana'>
                    <option value='' class='d-none'>{{trans('pleaseSelect')}}</option>
                    @foreach($dayana as $row)
                    <option value='{{$row->id}}'>{{$row->name}}</option>
                    @endforeach
                </select>
                @error('m_dayana') <span class="error text text-danger">{{ $message }}</span> @enderror
            </div>
               
            </div>

         <div class="col-md-6">
           
            <div class="form-group">
                <label for="title">{{trans('admin.m_job')}}:</label>
                <input type="text" wire:model="m_job" class="form-control" id="taskTitle">
                @error('m_job') <span class="error text text-danger">{{ $message }}</span> @enderror
            </div>

              <div class="form-group">
                <label for="title">{{trans('admin.m_mobile')}}:</label>
                <input type="text" wire:model="m_mobile" class="form-control" id="taskTitle">
                @error('m_mobile') <span class="error text text-danger">{{ $message }}</span> @enderror
            </div>


            <div class="form-group">
                <label for="description">{{trans('admin.m_bloode')}}:</label>

                <select class='form-control' wire:model='m_bloode_id'>
                    <option value='' class='d-none'>{{trans('pleaseSelect')}}</option>
                    @foreach($bloodes as $row)
                    <option value='{{$row->id}}'>{{$row->name}}</option>
                    @endforeach
                </select>

                @error('m_bloode_id') <span class="error text text-danger">{{ $message }}</span> @enderror
            </div>


           
           
            </div>

             <div class="col-md-12">
           
                <div class="form-group">
                    <label for="title">{{trans('admin.m_address')}}:</label>
                    <textarea type="text" wire:model="m_address" class="form-control"
                    id="taskDetail">{{{ $detail ?? '' }}}</textarea>
                    @error('m_address') <span class="error text text-danger">{{ $message }}</span> @enderror
                </div>
                <button class="btn btn-danger nextBtn" wire:click="backSubmit(1)"
                        type="button">{{trans('admin.back')}}</button>
                 <button class="btn btn-primary nextBtn pull-right" wire:click="SecondStepSubmit"
                        type="button">{{trans('admin.next')}}</button>
           
           
            </div>
       
    </div>