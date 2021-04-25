<div>
   @if(!empty($message))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
   		{{$message}}
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
	</div>
   @endif






   <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="multi-wizard-step">
                <a href="#step-1" type="button"
                    class="btn {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                <p>{{trans('admin.step')}} 1</p>
               
            </div>
            <div class="multi-wizard-step">
                <a href="#step-2" type="button"
                    class="btn {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                <p>{{trans('admin.step')}} 2</p>
            </div>
            <div class="multi-wizard-step">
                <a href="#step-3" type="button"
                    class="btn {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}"
                    disabled="disabled">3</a>
                <p>{{trans('admin.step')}} 3</p>
            </div>
        </div>
    </div>

    @include('livewire.fatherParent')
    @include('livewire.motherParent') 
    @include('livewire.attachment')

  

    





</div>
