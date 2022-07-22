<div class="w-60">
    @foreach($available_locales as $locale_name => $available_locale)
        <x-jet-dropdown-link href="{{ route('locale.update', $available_locale) }}">
            <span class="ml-2 mr-2 text-gray-700">{{ __($locale_name) }}</span>
        </x-jet-dropdown-link>
    @endforeach
</div>
