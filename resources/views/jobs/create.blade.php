<x-layout>
    <x-slot name="heading">
        Create job
    </x-slot>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Jobs</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Create a new Job</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="title">Title</x-form-label>
                        <x-form-input type="text" name="title" id="title" placeholder="CEO"  />
                        <x-form-error name="title" />
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="salary">Salary</x-form-label>
                        <x-form-input type="text" name="salary" id="salary" placeholder="e.g., 60000" />
                        <x-form-error name="salary" />
                    </div>
                </div>

                <!-- @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul> 
                @endif
            </div> -->

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <x-form-button type="submit">Save</x-form-button>
            </div>
        </div>
    </form>
</x-layout>
