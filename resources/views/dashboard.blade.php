<x-layout>
    <x-section>
        Dashboard
    </x-section>
    <x-flash type="warning">
        You have logged out
    </x-flash>

    <x-flash class="mt-6">
        Good Job!
    </x-flash>
    {{  str_match('Jan-01-2019', '/Jan-.*-2019/') }}
</x-layout>
