<x-layout>
    <x-slot name="head">
        <x-social-media-meta title="Blade Component Examples"
            description="Learn about all sorts of Blade component tips and tricks."
            image="https://farm6.staticflickr.com/5510/14338202952_93595258ff_z.jpg" card="summary" />
    </x-slot>

    <x-section>
        <h1 class="font-bold text-lg">Blade Component Examples</h1>
    </x-section>

    <x-section>
        Dashboard
    </x-section>


    <form method="POST" x-data @submit.prevent="$dispatch('recaptcha')">
        @csrf

        <!-- Your form inputs -->

        <x-recaptcha />

        <button type="submit">Submit</button>
    </form>

    <x-flash type="warning">
        You have logged out
    </x-flash>

    <x-flash class="mt-6">
        Good Job!
    </x-flash>

    <x-section>
        <x-tabs active="First">
            <x-tab name="First">
                First content goes here.
            </x-tab>

            <x-tab name="Second">
                Second content goes here.
            </x-tab>

            <x-tab name="Third">
                Third content goes here.
            </x-tab>
        </x-tabs>
    </x-section>

    <x-dialog title="Deactivate Your Account?" submit-label="Deactivate">
        <x-slot name="trigger">
            <button @click="on = true">Show Modal</button>
        </x-slot>

        Are you really sure you want to deactivate your account? All of your data will be permanently removed. This
        action cannot be undone.
    </x-dialog>

    {{ str_match('Jan-01-2019', '/Jan-.*-2019/') }}

    <x-section>
        <x-team></x-team>
    </x-section>

    <x-section>
        <div>
            <x-dropdown>
                <x-slot name="trigger">
                    <button>Click Me</button>
                </x-slot>

                <x-dropdown-link href="/">One</x-dropdown-link>
                <x-dropdown-link href="/">Two</x-dropdown-link>
                <x-dropdown-link href="/">Three</x-dropdown-link>
            </x-dropdown>
        </div>
    </x-section>


</x-layout>
