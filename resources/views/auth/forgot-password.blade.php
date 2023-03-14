<div class="py-12 ">
    <div class="max-w-full mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                <!-- Atas -->
                <div class="container mx-auto sm:px-6 lg:px-8 flex justify-center">
                    <div class="grid grid-cols-1 gap-2 w-96 mt-8" >
                    <h5 class="text-2xl font-bold py-4 pt-0">Lupa Password </h5>
                            
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <!-- Email Address -->
                                <div>
                                    <!-- <x-input-label for="email" :value="__('Email')" /> -->
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Email"/>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div class="flex items-center justify-start mt-4">
                                <a href="/login">
                                <button class="bg-sky-600 hover:bg-sky-300 text-white font-medium mt-5 h-8 px-8 rounded-full">
                                Kirim Permintaan
                                </button>
                                </a>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<x-guest-layout>
    

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    
</x-guest-layout>
