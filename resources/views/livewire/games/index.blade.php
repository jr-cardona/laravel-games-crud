<section class="text-gray-600 body-font">
    <div class="container px-5 mx-auto">
        <div class="flex items-center justify-center px-4 py-3 sm:py-6 text-right">
            <x-search></x-search>
            <x-jet-button class="mx-10" wire:click="openEditModal">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                {{ __('Create Game') }}
            </x-jet-button>
        </div>
        <div class="flex flex-wrap -m-4 justify-center">
            @foreach($games as $game)
                <div class="max-w-sm rounded overflow-hidden shadow-lg m-4">
                    <img class="w-full" src="{{ $game->url_image }}" alt="{{ $game->name }}">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $game->name }}</div>
                        <p class="text-gray-700 text-base">
                            {{ $game->excerptDescription() }}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <div class="flex justify-between items-center">
                            <x-jet-secondary-button wire:click="openEditModal({{ $game->getKey() }})">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                                {{ __('Edit') }}
                            </x-jet-secondary-button>
                            <a href="{{ $game->url }}" target="_blank">
                                <x-jet-button>{{ __('Try out') }}!</x-jet-button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-5 px-4 py-3 bg-gray-50 border-t">
            {{ $games->links() }}
        </div>
    </div>

    <x-jet-dialog-modal wire:model="showModalForm">
        <x-slot name="title">
            @if ($game->exists)
                {{ __('Edit Game') }} {{ $name }}
            @else
                {{ __('Create Game') }}
            @endif
        </x-slot>

        <x-slot name="content">
            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Name') }}"></x-jet-label>
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" wire:model="name">
                </x-jet-input>
                <x-jet-input-error for="name" class="mt-2"></x-jet-input-error>
            </div>
            <div class="mt-4">
                <x-jet-label for="description" value="{{ __('Description') }}"></x-jet-label>
                <textarea class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                          name="description" id="description"
                          wire:model="description">
                </textarea>
                <x-jet-input-error for="description" class="mt-2"></x-jet-input-error>
            </div>
            <div class="mt-4">
                <x-jet-label for="url" value="{{ __('Url') }}"></x-jet-label>
                <textarea class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                          name="url" id="url"
                          wire:model="url">
                </textarea>
                <x-jet-input-error for="url" class="mt-2"></x-jet-input-error>
            </div>
            <div class="mt-4">
                <x-jet-label for="url_image" value="{{ __('Url Image') }}"></x-jet-label>
                <textarea class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                          name="url_image" id="url_image"
                          wire:model="url_image">
                </textarea>
                <x-jet-input-error for="url_image" class="mt-2"></x-jet-input-error>
            </div>
            <div class="mt-4">
                <x-jet-label for="status" value="{{ __('Status') }}"></x-jet-label>
                <select class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        name="status" id="status"
                        wire:model="status"
                >
                    @foreach($statuses as $status)
                        <option>{{ $status }}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="status" class="mt-2"></x-jet-input-error>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button class="mr-auto" wire:click="$toggle('showModalForm')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
            <x-jet-danger-button class="ml-3" wire:click="save" wire:loading.attr="disabled">
                {{ __('Save') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</section>
