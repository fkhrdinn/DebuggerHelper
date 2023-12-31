<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Debug') }}
            </h2>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <form
            method="post"
            action="{{ route('debug.process') }}"
            class="p-6"
        >
            @csrf

            <h2 class="text-lg font-medium">
                Start debugging here!
            </h2>

            <div class="mt-6 space-y-6">
                <x-form.label
                    for="error-log-input"
                    class="sr-only"
                />

                <x-form.textarea 
                    placeholder="Type your message..."
                    id="error-log-input"
                    name="message"
                    rows="8"
                    class="block w-3/4"
                />
                <x-button
                    variant="primary"
                    class=""
                >
                    {{ __('Enter') }}
                </x-button>
            </div>

            <!-- <div class="mt-6 flex justify-end">
                
            </div> -->
        </form>
        <h2 class="text-lg font-medium">
            Answer
        </h2>
        <div class ="mt-6 space-y-6">
            <x-form.textarea 
            id="error-log-input"
            name="message"
            rows="4"
            class="block w-3/4"
            />
        </div>
        
    </div>
</x-app-layout>