<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white font-arial">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#ec4899" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ec4899" class="w-8 h-8 mr-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
            </svg>
            Explore your true love!
        </a>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <div class="flex flex-row items-center">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white font-arial mr-4">
                        Create an account
                    </h1>
                    <livewire:theme-switcher />
                </div>
                <form class="space-y-4 md:space-y-6">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white font-arial">Your name</label>
                        <input wire:model='name' type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-arial" placeholder="Name" required="">
                        @error('name') <span class="mt-1 text-red-500 text-sm font-arial">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white font-arial">Your email</label>
                        <input wire:model='email' type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-arial" placeholder="name@gmail.com" required="">
                        @error('email') <span class="mt-1 text-red-500 text-sm font-arial">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white font-arial">Password</label>
                        <div class="flex flex-row items-center gap-2">
                            <input wire:model='password' type="{{$showpw == true ? 'text' : 'password'}}" id="password" placeholder="••••••••" class="font-arial bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            <button type="button" wire:click='toggleShowpw' class="text-white bg-primary-500 border border-primary-700 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-full p-2 inline-flex items-center transition duration-300 ease-in-out">
                                @if ($showpw == true)
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                @endif
                            </button>
                        </div>
                        @error('password') <span class="mt-1 text-red-500 text-sm font-arial">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="password" class="font-arial block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                        <div class="flex flex-row items-center gap-2">
                            <input wire:model='confirmPassword' type="{{$showcpw == true ? 'text' : 'password'}}" id="confirm-password" placeholder="••••••••" class="font-arial bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            <button type="button" wire:click='toggleShowcpw' class="text-white bg-primary-500 border border-primary-700 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-full p-2 inline-flex items-center transition duration-300 ease-in-out">
                                @if ($showcpw == true)
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                @endif
                            </button>
                        </div>
                        @error('confirmPassword') <span class="mt-1 text-red-500 text-sm font-arial">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                          <input id="terms" wire:model='terms' aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                        </div>
                        <div class="ml-3 text-sm">
                          <label for="terms" class="font-light font-arial text-gray-500 dark:text-gray-300">I accept the <a class="font-medium font-arial text-primary-600 hover:underline dark:text-primary-500" wire:click='toggleTerms' href="#">Terms and Conditions</a></label>
                          @error('terms') <span class="mt-1 text-red-500 text-sm font-arial">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <button type="button" wire:click='storeUser' class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 font-arial">Create an account</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400 font-arial">
                        Already have an account? <a wire:navigate href="/" class="font-medium text-primary-600 hover:underline dark:text-primary-500 font-arial">Login here</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    @if ($isTerms == true)
        {{-- Terms and conditions modal --}}
        <div class="relative z-10 flex flex-col justify-center align-center" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <div class="relative transform overflow-hidden rounded-lg dark:bg-gray-900 bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                        <div class="bg-white dark:bg-gray-900 px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                    </svg>
                                </div>
                                <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                    <h3 class="font-semibold leading-6 dark:text-white text-gray-900 font-arial text-lg mt-2" id="modal-title">Terms and Conditions</h3>
                                    <div class="mt-5">
                                        <ol class="list-decimal font-arial dark:text-white">
                                            <li class="mb-2">
                                                <strong class="font-semibold">Account Security:</strong>
                                                <ul class="list-disc pl-6 mt-2">
                                                    <li>You are responsible for maintaining the confidentiality of your account and password. Notify us immediately of any unauthorized use.</li>
                                                    <li>Do not share your login credentials. We will never ask for your password via email or any other means.</li>
                                                </ul>
                                            </li>
                                            <li class="mb-2">
                                                <strong class="font-semibold">User Safety and Privacy:</strong>
                                                <ul class="list-disc pl-6 mt-2">
                                                    <li>We prioritize your safety. Exercise caution and take necessary safety measures when meeting someone in person.</li>
                                                    <li>Your privacy is important. Review our Privacy Policy to understand how we collect, use, and safeguard your personal information.</li>
                                                </ul>
                                            </li>
                                            <li class="mb-2">
                                                <strong class="font-semibold">Contact Information:</strong>
                                                <p class="pl-6 mt-2">If you have any questions or concerns about these terms and conditions, please contact us at <a href="mailto:tbeatz.feb@gmail.com" class="text-blue-500 hover:underline">tbeatz.feb@gmail.com</a>.</p>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 dark:bg-gray-900 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                            <button wire:click='toggleTerms' type="button" class="mt-3 font-arial inline-flex w-full justify-center rounded-md dark:bg-primary-600 dark:border-primary-500 dark:text-white dark:hover:bg-primary-700 bg-white border border-gray-300 px-4 py-2 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-200 dark:focus:ring-primary-200 sm:mt-0 sm:w-auto">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</section>
