<x-app-layout title="Edit {{ $tag->name }}" basiclayout='true'>
    <section class="space-y-4">
        <div>
            <a href="{{ route('tags.show', ['tag' => $tag->id]) }}" class="underline text-blue-500">{{ __('Back to') }} {{ $tag->name }}</a>
        </div>
        <div>
            <p class="mt-1 text-sm text-gray-600">
                {{ __("Update the tag") }}
            </p>
        </div>
    </section>

    <form action="{{ route('tags.update', ['tag' => $tag->id]) }}" method="POST" class="mt-6 space-y-6">
        @csrf
        @method('PUT')

        <div class="space-y-4">
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $tag->name)" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</x-app-layout>
