<div>
    <x-guest-layout>

        <section class="h-full  md:h-screen">
            <div class="container py-12 px-6 mx-auto h-full">
                <div class="md:flex justify-center items-center flex-wrap h-full g-6 text-gray-800">

                    <div class=" bg-white shadow-lg rounded-lg">
                        <div class="lg:flex lg:flex-wrap g-0">
                            <div class=" px-4 md:px-0">
                                <div class="md:p-12 md:mx-6">
                                    <div class="text-center">
                                        <img class="mx-auto w-48" src="{{ asset('img/rain.png') }}"
                                            alt="logo" />
                                        <!-- Session Status -->
                                        <x-auth-session-status class="mb-4" :status="session('status')" />
                                        <h4 class="text-4xl font-bold mt-1 mb-12 pb-1">Flood View</h4>
                                    </div>
                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <p class="mb-4 text-center bold">Create An Account</p>
                                        <div class="mb-4">
                                            <x-label for="name" :value="__('Name')" />
                                            <x-input id="name"
                                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                type="text" name="name" :value="old('name')" required autofocus />


                                        </div>
                                        <div class="mb-4">
                                            <x-label for="email" :value="__('Email')" />
                                            <x-input id="email"
                                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                type="email" name="email" :value="old('name')" required autofocus />


                                        </div>
                                        <div class="mb-4">
                                            <x-label for="password" :value="__('Password')" />
                                            <x-input id="password"
                                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                type="password" name="password" required autocomplete="new-password" />
                                        </div>
                                        <div class="mb-4">
                                            <x-label for="password_confirmation" :value="__('Confirm Password')" />
                                            <x-input id="password"
                                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                type="password" name="password_confirmation" required
                                                autocomplete="new-password" />
                                        </div>
                                        <!-- Remember Me -->
                                        <div class="block mt-4 mb-4">
                                            <a class=" text-gray-500 hover:text-gray-900"
                                                href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                            </a>
                                        </div>
                                        <div class="text-center pt-1 mb-12 pb-1">
                                            <button
                                                class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded bg-orange-600 shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                                                type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light">

                                                {{ __('Register') }}
                                            </button>

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
