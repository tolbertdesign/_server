<x-layout>
    <x-section>
        <x-form
            method="PATCH"
            action="/comments/{{ $comment->id }}"
        >
            <div class="mb-6">
                <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                       for="body"
                >
                    Body
                </label>

                <textarea class="w-full p-2 border border-gray-400"
                          name="body"
                          id="body"
                          required
                >{{ $comment->body }}</textarea>

                @error('body')
                    <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit"
                        class="px-4 py-2 text-white bg-blue-400 rounded hover:bg-blue-500"
                >
                    Submit
                </button>
            </div>
        </x-form>

        <x-form-button method="DELETE" action="/comments/{{ $comment->id }}">
            Delete
        </x-form-button>
    </x-section>
</x-layout>
