   {{-- Finished --}}
    <div class="row setup-content {{ $currentStep != 3 ? 'd-none' : '' }}" id="step-3">
        <div class="col-md-12">
            <h3> Step 3</h3>
                @error('photo') <p class="error text text-danger">{{ $message }}</p> @enderror
                 <input type="file" wire:model="photo">

                 <br>
            <button class="btn btn-primary nextBtn  pull-right" wire:click="TherdStepSubmit"
                type="button">{{trans('admin.next')}}</button>
                 <button class="btn btn-danger nextBtn  pull-right" wire:click="backSubmit(2)"
                type="button">{{trans('admin.back')}}</button>
        </div>
    </div>