<x-layout>
    <form method="POST" action="/posts">
        @csrf
        <div class="mb-6">
            <div class="mb-6">
                <label for="first-name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    First Name
                </label>

                <input class="border border-gray-400 p-2 w-full" type="text" id="first-name" name="first-name" required>

                @error('first-name')
                <p class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="last-name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Last Name
                </label>

                <input class="border border-gray-400 p-2 w-full" type="text" id="last-name" name="last-name" required>

                @error('last-name')
                <p class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </p>
                @enderror
            </div>


            <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Title
            </label>

            <input type="text" name="title" id="title" required class="border border-gray-400 p-2 w-full">
            @error('title')
            <p class="text-red-500 text-xs mt-2">
                {{ $message }}
            </p>
            @enderror

        </div>
    </form>
</x-layout>
