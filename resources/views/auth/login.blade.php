<div>
    <x-guest-layout>
        {{-- <x-auth-card>
            <x-slot name="logo">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </x-slot>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('Email')" />

                    <x-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-button class="ml-3">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
        </x-auth-card> --}}
        <section class="h-full  md:h-screen">
            <div class="container py-12 px-6 mx-auto h-full">
              <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">

                  <div class=" bg-white shadow-lg rounded-lg">
                    <div class="lg:flex lg:flex-wrap g-0">
                      <div class=" px-4 md:px-0">
                        <div class="md:p-12 md:mx-6">
                          <div class="text-center">
                            <img
                              class="mx-auto w-48 "
                              src="{{ asset('img/rain.png') }}"
                              alt="logo"
                            />
                            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <h4 class="text-4xl font-bold mt-1 mb-12 pb-1">Flood View</h4>
                          </div>
                                  <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                          <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <p class="mb-4">Please login to your account</p>
                            <div class="mb-4">
                                <x-label for="email" :value="__('Email')" />
                                <x-input wire:model="email"  class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email" type="email" name="email" :value="old('email')" required autofocus />

                            </div>
                            <div class="mb-4">
                                <x-label for="password" :value="__('Password')" />
                                <x-input id="password"  class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                            </div>
                                           <!-- Remember Me -->
                <div class="block mt-4 mb-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                            <div class="text-center pt-1 mb-12 pb-1">
                              <button
                                class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded bg-orange-600 shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                                type="submit"
                                data-mdb-ripple="true"
                                data-mdb-ripple-color="light"
                              >

                              {{ __('Log in') }}
                              </button>
                              @if (Route::has('password.request'))
                              <a class=" text-gray-500 hover:text-gray-900" href="{{ route('password.request') }}">
                                  {{ __('Forgot your password?') }}
                              </a>
                          @endif
                            </div>
                            <div class="flex items-center justify-between pb-6">
                              <p class="mb-0 mr-2">Don't have an account?</p>
                              <a href="{{ route('register') }}"
                                type="button"
                                class="inline-block px-6 py-2 border-2 border-orange-600 text-orange-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                                data-mdb-ripple="true"
                                data-mdb-ripple-color="light"
                              >
                                Register
                              </a>
                            </div>
                          </form>
                        </div>
                      </div>

                    </div>
                  </div>

              </div>
            </div>
          </section>
    </x-guest-layout>

</div>

