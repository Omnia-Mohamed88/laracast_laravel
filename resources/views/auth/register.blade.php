<x-layout>
    <x-slot name="heading">
        Register
    </x-slot>

    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="first_name">First Name</x-form-label>
                        <x-form-input type="text" name="first_name" id="first_name" required />
                        <x-form-error name="first_name" />
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="last_name">Last Name</x-form-label>
                        <x-form-input type="text" name="last_name" id="last_name" required />
                        <x-form-error name="last_name" />
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="email">Email</x-form-label>
                        <x-form-input type="email" name="email" id="email" required />
                        <x-form-error name="email" />
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="password">Password</x-form-label>
                        <x-form-input type="password" name="password" id="password" required />
                        <x-form-error name="password" />
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <x-form-input type="password" name="password_confirmation" id="password_confirmation" required />
                        <x-form-error name="password_confirmation" />
                    </div>
                </div>

            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <x-form-button type="submit">Register</x-form-button>
            </div>
        </div>
    </form>
</x-layout>
