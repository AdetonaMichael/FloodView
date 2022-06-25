<div>
    <p class="hidden md:block text-4xl font-bold p-5 text-black">Profile</p>
    <p class="hidden md:block text-gray-600 px-5 text-xl py-2">The Information You share here, will be visible to the public</p>
    <div class="md:flex">
        <div class="grid grid-cols-1  mt-4 gap-4 md:w-1/4 sm:mx-5 md:h-1/4">
            <div class="bg-white p-4 rounded-lg shadow ">
                <div class="">
                    <div class="rounded-lg shadow-xl flex justify-center"><img class="object-contain ml-4 p-4" src="https://cdn.pixabay.com/photo/2016/03/27/17/42/man-1283235_960_720.jpg"  alt="product image"></div>

                    <div class="sm:block space-y-5">

                       <p class="font-bold text-xl text-gray-700 mt-5">Michael Adetona</p>
                       <div><span class="p-1.5 text-xs font-medium uppercase tracking-wider text-red-800 bg-red-200 rounded-lg bg-opacity-30">Offline</span> </div>
                       <div class=" font-medium text-black">Surveyors</div>
                       <div class="flex items-center space-x-2 text-sm">
                        <a href="#" class="text-blue-500 font-bold hover:underline">SUR/2016/32F</a>
                        <div class="text-gray-500 whitespace-nowrap">T-shirt</div>
                        <div class="text-gray-500">10/20/2022</div>
                   </div>
                   <div class="flex space-x-2 text-sm">
                    <td class="p-3 text-sm text-gray-700 whitespace-nowr"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowr"><i class="fa fa-trash fa-2x text-red-500" aria-hidden="true"></i></td>
                   </div>
                    </div>
                </div>
        </div>
      </div>

        <div class="bg-white p-5 rounded-lg shadow md:mt-5 md:mr-5 md:mx-auto md:w-3/4">
           <div class="md:grid md:grid-cols-2 gap-4">

                <div>
                    <x-label class="mt-2 font-bold" for="firstname" :value="__('First Name')"></x-label>
                    <x-input wire:model="firstname" id="firstname" name="firstname" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-200 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-600 focus:outline-none"> </x-input>
                    @error('firstname') <span class="text-red-600 text-sm">{{ $message }} </span> @enderror
                </div>
                <div>
                    <x-label class="mt-2 font-bold" for="lastname" :value="__('Last Name')"></x-label>
                    <x-input wire:model="lastname" id="lastname" type="text"  class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-200 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-600 focus:outline-none"> </x-input>
                    @error('lastname') <span class="text-red-600 text-sm">{{ $message }} </span> @enderror
                </div>

           </div>
           <div class="form-group">
            <x-label class="mt-2 font-bold" for="profpix" :value="__('Upload Profile Pix')"></x-label>
                    <x-input wire:model="profpix" id="profpix" name="profpix" type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-200 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-600 focus:outline-none"> </x-input>
                    @error('profpix') <span class="text-red-600 text-sm">{{ $message }} </span> @enderror
           </div>
           <div class="form-group">
            <x-label class="mt-2 font-bold" for="about" :value="__('Tell Us About YourSelf')"></x-label>
                    <textarea wire:model="about" cols="10" rows="8" id="about" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-200 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-600 focus:outline-none"> </textarea>
                    @error('about') <span class="text-red-600 text-sm">{{ $message }} </span> @enderror
           </div>

           <p class="text-2xl font-bold text-black">Personal Information</p>
           <p class="text-gray-600 text-lg ">The Information You share here, will be visible to the public</p>
           <br/>
           <div class="md:grid md:grid-cols-2 gap-4">

            <div>
                <x-label class="mt-2 font-bold" for="firstname" :value="__('Phone')"></x-label>
                <x-input wire:model="phone" id="phone" name="phone" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-200 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-600 focus:outline-none"> </x-input>
                @error('phone') <span class="text-red-600 text-sm">{{ $message }} </span> @enderror
            </div>
            <div>
                <x-label class="mt-2 font-bold" for="lastname" :value="__('Language')"></x-label>
                <x-input wire:model="language" id="language" type="text"  class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-200 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-600 focus:outline-none"> </x-input>
                @error('language') <span class="text-red-600 text-sm">{{ $message }} </span> @enderror
            </div>

       </div>
       <div class="md:grid md:grid-cols-2 gap-4">

        <div>
            <x-label class="mt-2 font-bold" for="firstname" :value="__('Occupation')"></x-label>
            <x-input wire:model="occpation" id="occupation" name="occupation" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-200 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-600 focus:outline-none"> </x-input>
            @error('occupation') <span class="text-red-600 text-sm">{{ $message }} </span> @enderror
        </div>
        {{-- <div>
            <x-label class="mt-2 font-bold" for="lastname" :value="__('Last Name')"></x-label>
            <x-input wire:model="lastname" id="lastname" type="text"  class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-200 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-600 focus:outline-none"> </x-input>
            @error('lastname') <span class="text-red-600 text-sm">{{ $message }} </span> @enderror
        </div> --}}

   </div>
    <div class="buttons m-5 px-4">
        <button class="btn-solid-reg popup-with-move-anim mr-1.5" wire:click="$emit('closeModal')">Close</button>
        <button type="submit" class="btn-outline-reg">Submit</button>
    </div>


        </div>
    </div>



</div>
