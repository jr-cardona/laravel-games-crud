<div class="mt-5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col mt-5">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        {{ $content }}
                        @isset($links)
                            <div class="px-4 py-3 bg-gray-50 border-t">
                                {{ $links }}
                            </div>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
