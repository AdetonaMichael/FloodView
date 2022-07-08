<div>

    <x-modal>
        {{-- <form  wire:submit.prevent="storeReport">
            @csrf --}}
        <x-slot name="title">
            <p class="my-4 uppercase font-extrabold  text-gray-700">Submit a report</p>
        </x-slot>
        <x-slot name="content">
            <p class="uppercase font-bold pb-4 border-b-2 border-gray-400">Location Details</p>

            <div class="form-group md:grid md:grid-cols-2 md:gap-4">
                <div>
                    <x-label for="location" :value="__('Location')"></x-label>
                    <x-input wire:model.lazy="clientLocation" id="demo" name="location" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-green-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-600 focus:outline-none"> </x-input>
                    @error('location') <span class="text-red-600 text-sm">{{ $message }} </span> @enderror

                </div>
                <div>
                    <x-label class="mt-2" for="street" :value="__('Street')"></x-label>
                    <x-input wire:model.lazy="street" id="street" name="street" type="text"  class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-600 focus:outline-none"> </x-input>
                    @error('street') <span class="text-red-600 text-sm">{{ $message }} </span> @enderror
                </div>
            </div>
            <div class="form-group md:grid md:grid-cols-2 md:gap-4">
                <div>
                    <x-label class="mt-2" for="City" :value="__('City')"></x-label>
                    <x-input wire:model.lazy="city"  id="city" name="city" type="text"  class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-600 focus:outline-none"> </x-input>
                    @error('city') <span class="text-red-600 text-sm">{{ $message }} </span> @enderror
                </div>
                <div>
                    <x-label for="state" class="mt-2" :value="__('State')"></x-label>
                    <x-input wire:model.lazy="state" name="state" id="state" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-600 focus:outline-none"> </x-input>
                    @error('state') <span class="text-red-600 text-sm">{{ $message }} </span> @enderror
                </div>
            </div>
            <div class="form-group md:grid md:grid-cols-2 md:gap-4">
                <div>
                    <x-label class="mt-2" for="lga" :value="__('LGA')"></x-label>
                    <x-input wire:model.lazy="lga" id="lag" name="lga" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-600 focus:outline-none"> </x-input>
                    @error('lga') <span class="text-red-600 text-sm">{{ $message }} </span> @enderror
                </div>
                <div>
                    <x-label class="mt-2" for="zipcode" :value="__('Zip Code')"></x-label>
                    <x-input wire:model.lazy="zipcode" id="zipcode" type="number"  class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-600 focus:outline-none"> </x-input>
                    @error('zipcode') <span class="text-red-600 text-sm">{{ $message }} </span> @enderror
                </div>
            </div>
            <br/>
            <p class="font-bold uppercase pb-4 border-b-2 border-gray-400">Damage Details</p>
            <br/>
            <div class="form-group md:grid md:grid-cols-2 md:gap-4">
                <div>
                    <x-label for="loss_of_life" :value="__('Lives Lost')"></x-label>
                    <x-input wire:model.lazy="loss_of_life" id="loss_of_life" name="loss_of_life"  class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-600 focus:outline-none" type="number"> </x-input>
                    @error('loss_of_life') <span class="text-red-600 text-sm">{{ $message }} </span> @enderror
                </div>
                <div>
                    <x-label for="loss_of_life" :value="__('Other Damages')"></x-label>
                    <select wire:model.lazy="other_damages" name="other_damages"  class="damages-selector form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-600 focus:outline-none"  name="choice" multiple>
                        <option value="Buildings">Buildings</option>
                        <option value="Shops" selected>Shops</option>
                        <option value="Power line">Power line</option>
                        <option value="Properties">Properties</option>
                      </select>
                      @error('other_damages') <span class="text-red-600 text-sm">{{ $message }} </span> @enderror
                    </div>
            </div>

            <br/>
            <p class="font-bold uppercase pb-4 border-b-2 border-gray-400">Description</p>
            <div class="form-group">
                <div>
                    <x-label for="description" :value="__('Description')"></x-label>

                        <textarea wire:model.lazy="description" type="text"  id="description" name="description" rows="10" cols="10"  class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-600 focus:outline-none"> </textarea>
                        @error('description') <span class="text-red-600 text-sm">{{ $description }} </span> @enderror

                </div>

            </div>

            <div class="form-group">
                <x-label for="images" :value="__('Images')"></x-label>
                <input wire:model="images" id="images" type="file" name="images" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-600 focus:outline-none mb-5" multiple>
                @error('images') <span class="text-red-600 text-sm">{{ $images }} </span> @enderror
            </div>
        </x-slot>

        <x-slot name="buttons">
            <button class="btn-solid-reg popup-with-move-anim mr-1.5" wire:click="$emit('closeModal')">Close</button>
            <button type="submit" class="btn-outline-reg">Submit</button>
        </x-slot>
    {{-- </form> --}}
    </x-modal>
{{--
    <script src="https://cdn.tiny.cloud/1/914cbs1n4e1r1683f7ere86yes0kemwesp1tctsdsft2pq6k/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
            tinymce.init({
    selector: "textarea",
    menubar: true,
    plugins: "link image code",
    toolbar: 'undo redo | styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | code | media'

        });

        $(".damages-selector").select2({
  tags: true
});
    </script> --}}


</div>

