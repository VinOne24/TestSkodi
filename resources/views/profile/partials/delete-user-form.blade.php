<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Hapus Akun') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __(' Setelah akun Anda dihapus, semua sumber daya dan datanya akan dihapus secara permanen. Sebelum menghapus akun Anda, harap unduh data atau informasi apa pun yang ingin Anda pertahankan..') }}
        </p>
    </header>

    <!-- <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</x-danger-button> -->
    <button class="bg-red-600 hover:bg-red-700 text-white font-medium mt-5 h-8 px-8 rounded-full" x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
            {{ __('Hapus') }}
                </button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <!-- <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button> -->

                <button x-on:click="$dispatch('close')" class="bg-transparent hover:bg-sky-600 text-sky-600 font-medium hover:text-white mt-5 h-8 mx-4 px-8 border border-sky-600 hover:border-transparent rounded-full">
                    Cancel
                </button>

                <!-- <x-danger-button class="ml-3">
                    {{ __('Delete Account') }}
                </x-danger-button> -->

                <button class="bg-red-600 hover:bg-red-700 text-white font-medium mt-5 h-8 px-8 rounded-full">
            {{ __('Hapus') }}
                </button>

            </div>
        </form>
    </x-modal>
</section>
