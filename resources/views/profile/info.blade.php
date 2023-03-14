<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
    
            <div class="p-4 sm:p-8 bg-gray-100 dark:bg-gray-800 shadow-lg sm:rounded-lg h-96 ">
                <div class="max-w-xl m-20">
                    @include('profile.partials.info-gambar')
                </div>
            </div>

            <div class="p-4 sm:p-8 dark:bg-gray-800 shadow-lg sm:rounded-lg h-96">
                <div class="max-w-xl">
                    @include('profile.partials.info-gelar')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
