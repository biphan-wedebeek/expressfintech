<div class="flex flex-col gap-1 w-full min-w-[320px]">
    @forelse ($getRecord()->offers as $offer)
        @php
            $link = url('/click?affiliate_id=' . $getRecord()->id . '&offer_id=' . $offer->id);
        @endphp

        <div class="p-1">
            {{-- Row 1 --}}
            <div class="text-sm font-semibold text-gray-900">
                {{ $offer->title ?? 'Untitled Offer' }}
            </div>

            {{-- Row 2 --}}
            <div class="mt-1 flex items-center gap-2">
                <a
                    href="{{ $link }}"
                    target="_blank"
                    class="block flex-1 min-w-0 truncate text-sm text-primary-600 hover:underline"
                    title="{{ $link }}"
                >
                    {{ $link }}
                </a>

                <div 
                    x-data="{ copied: false }"
                    class="inline-flex"
                >
                    <button
                        type="button"
                        class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-white text-gray-600 hover:bg-gray-50"
                        title="Copy link"
                        @click="
                            navigator.clipboard.writeText(@js($link));
                            copied = true;
                            setTimeout(() => copied = false, 1200);
                        "
                    >
                        {{-- Icon copy --}}
                        <svg x-show="!copied" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 16H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2m-8 12h8a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2z" />
                        </svg>

                        {{-- Icon check --}}
                        <svg x-show="copied" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-green-600">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    @empty
        <span class="text-sm text-gray-500">No offers</span>
    @endforelse
</div>