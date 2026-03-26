@php
    $link = url('/click?offer_id=' . $getRecord()->id . '&affiliate_id={affiliate_id}');
@endphp

<button
    type="button"
    x-data="{}"
    x-on:click="
        navigator.clipboard.writeText(@js($link));
        $tooltip('Copied!', { timeout: 1200 });
    "
    class="inline-flex items-center justify-center text-primary-600 hover:text-primary-500"
    title="Copy link"
>
    <x-heroicon-o-clipboard-document class="w-5 h-5" />
</button>