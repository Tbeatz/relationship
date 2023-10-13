<section class="bg-gray-50 dark:bg-gray-900 h-full">
    <div class="flex flex-col items-center justify-center px-6 py-12 mx-auto">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white font-arial">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#ec4899" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ec4899" class="w-8 h-8 mr-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
            </svg>
            Welcome to our world!
        </a>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <div class="flex flex-row items-center">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white font-arial mr-4">
                        Login Form
                    </h1>
                    <livewire:theme-switcher />
                </div>
                <form class="space-y-4 md:space-y-6">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white font-arial">Your email</label>
                        <input wire:model='email' type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-arial" placeholder="name@gmail.com" required="">
                        @error('email') <span class="mt-1 text-red-500 text-sm font-arial">{{ $message }}</span> @enderror
                        @if(session('error')) <span class="mt-1 text-red-500 text-sm font-arial">{{ session('error') }}</span> @endif
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
                    <button type="button" wire:click='login' class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 font-arial">Login</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400 font-arial">
                        Still not registered? <a wire:navigate href="/register" class="font-medium text-primary-600 hover:underline dark:text-primary-500 font-arial">Register Here</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
