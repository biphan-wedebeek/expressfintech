<x-filament::page>
    @include('filament.partials.filament-head')

    <div class="space-y-6">
        <!-- Header -->
        <div class="bg-gradient-to-r from-slate-700 to-slate-800 dark:from-slate-800 dark:to-slate-900 rounded-lg p-6 shadow-lg">
            <h2 class="text-2xl font-bold text-white">📊 Tracklink Report</h2>
            <p class="text-slate-300 text-sm mt-1">Affiliate tracking and conversion analytics</p>
        </div>

        <!-- Search Form -->
        <div class="bg-white dark:bg-slate-900 rounded-xl shadow-lg border border-slate-200 dark:border-slate-700 p-4">
            <div class="flex items-center justify-between mb-3">
                <h3 class="text-base font-semibold text-slate-800 dark:text-slate-200">🔍 Filters</h3>
                <button
                    wire:click="exportToExcel"
                    class="px-3 py-1.5 bg-green-600 hover:bg-green-700 text-white text-sm rounded-lg font-medium transition-colors flex items-center gap-2">
                    📥 Export Excel
                </button>
            </div>

            <form wire:submit.prevent="applyFilters" class="space-y-3">
                <div class="grid grid-cols-1 md:grid-cols-6 gap-3">
                    <!-- ID Search -->
                    <div>
                        <label class="block text-xs font-medium text-slate-600 dark:text-slate-400 mb-1">
                            ID
                        </label>
                        <input
                            type="number"
                            wire:model="search_id"
                            placeholder="ID..."
                            class="w-full px-2 py-1.5 text-sm border border-slate-300 dark:border-slate-600 rounded-md focus:ring-2 focus:ring-slate-500 focus:border-transparent bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100 placeholder-slate-400">
                    </div>

                    <!-- Affiliate ID Search -->
                    <div>
                        <label class="block text-xs font-medium text-slate-600 dark:text-slate-400 mb-1">
                            Affiliate ID
                        </label>
                        <input
                            type="text"
                            wire:model="search_affiliate_id"
                            placeholder="Aff ID..."
                            class="w-full px-2 py-1.5 text-sm border border-slate-300 dark:border-slate-600 rounded-md focus:ring-2 focus:ring-slate-500 focus:border-transparent bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100 placeholder-slate-400">
                    </div>

                    <!-- Campaign ID Search -->
                    <div>
                        <label class="block text-xs font-medium text-slate-600 dark:text-slate-400 mb-1">
                            Campaign ID
                        </label>
                        <input
                            type="text"
                            wire:model="search_campaign_id"
                            placeholder="Campaign..."
                            class="w-full px-2 py-1.5 text-sm border border-slate-300 dark:border-slate-600 rounded-md focus:ring-2 focus:ring-slate-500 focus:border-transparent bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100 placeholder-slate-400">
                    </div>

                    <!-- Status -->
                    <div>
                        <label class="block text-xs font-medium text-slate-600 dark:text-slate-400 mb-1">
                            Status
                        </label>
                        <select
                            wire:model="search_status"
                            class="w-full px-2 py-1.5 text-sm border border-slate-300 dark:border-slate-600 rounded-md focus:ring-2 focus:ring-slate-500 focus:border-transparent bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100">
                            <option value="">All Status</option>
                            <option value="1">Lead</option>
                            <option value="0">Click</option>
                        </select>
                    </div>

                    <!-- Date From -->
                    <div>
                        <label class="block text-xs font-medium text-slate-600 dark:text-slate-400 mb-1">
                            From Date
                        </label>
                        <input
                            type="date"
                            wire:model="date_from"
                            class="w-full px-2 py-1.5 text-sm border border-slate-300 dark:border-slate-600 rounded-md focus:ring-2 focus:ring-slate-500 focus:border-transparent bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100">
                    </div>

                    <!-- Date To -->
                    <div>
                        <label class="block text-xs font-medium text-slate-600 dark:text-slate-400 mb-1">
                            To Date
                        </label>
                        <input
                            type="date"
                            wire:model="date_to"
                            class="w-full px-2 py-1.5 text-sm border border-slate-300 dark:border-slate-600 rounded-md focus:ring-2 focus:ring-slate-500 focus:border-transparent bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100">
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex gap-2">
                    <button
                        type="submit"
                        class="px-4 py-1.5 bg-slate-700 hover:bg-slate-800 dark:bg-slate-600 dark:hover:bg-slate-700 text-white text-sm rounded-md font-medium transition-colors">
                        Search
                    </button>
                    <button
                        type="button"
                        wire:click="clearFilters"
                        class="px-4 py-1.5 bg-slate-100 hover:bg-slate-200 dark:bg-slate-700 dark:hover:bg-slate-600 text-slate-700 dark:text-slate-300 text-sm rounded-md font-medium transition-colors">
                        Clear
                    </button>
                </div>
            </form>
        </div>

        @if($records->count() > 0)
        <!-- Table -->
        <div class="bg-white dark:bg-slate-900 rounded-xl shadow-xl overflow-hidden border border-slate-200 dark:border-slate-700">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-slate-200 dark:divide-slate-700">
                    <thead class="bg-gradient-to-r from-slate-50 to-slate-100 dark:from-slate-800 dark:to-slate-850">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300">ID</th>
                            <th class="px-4 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300">Aff ID</th>
                            <th class="px-4 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300">Aff Source</th>
                            <th class="px-4 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300">Aff Click ID</th>
                            <th class="px-4 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300">Campaign</th>
                            <th class="px-4 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300">IP Address</th>
                            <th class="px-4 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300">Referrer</th>
                            <th class="px-4 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300">Payout</th>
                            <th class="px-4 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300">Device/Browser/OS</th>
                            <th class="px-4 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300">User Agent</th>
                            <th class="px-4 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300">Lead</th>
                            <th class="px-4 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300">Converted</th>
                            <th class="px-4 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300">Created</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-slate-100 dark:divide-slate-800 bg-white dark:bg-slate-900">
                        @foreach ($records as $row)
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-all duration-150">
                            <!-- ID -->
                            <td class="px-4 py-3">
                                <span class="font-mono text-sm font-semibold text-slate-900 dark:text-slate-100">
                                    {{ $row->id }}
                                </span>
                            </td>

                            <!-- Affiliate ID -->
                            <td class="px-4 py-3">
                                <span class="text-sm text-slate-700 dark:text-slate-300 font-medium">
                                    {{ $row->aff_id ?? '—' }}
                                </span>
                            </td>

                            <!-- Affiliate ID -->
                            <td class="px-4 py-3">
                                <span class="text-sm text-slate-700 dark:text-slate-300 font-medium">
                                    {{ $row->source ?? '—' }}
                                </span>
                            </td>

                            <!-- Aff Click ID -->
                            <td class="px-4 py-3">
                                <span class="text-xs font-mono text-slate-600 dark:text-slate-400">
                                    {{ $row->aff_clickid ?? '—' }}
                                </span>
                            </td>

                            <!-- Campaign ID -->
                            <td class="px-4 py-3">
                                <span class="text-sm text-slate-700 dark:text-slate-300">
                                    {{ $row->campaign_id ?? '—' }}
                                </span>
                            </td>

                            <!-- IP Address với cờ -->
                <td class="px-4 py-3 align-top">
                    <div class="flex items-center gap-2">
                        @php
                            $countryCode = strtolower(trim($row->country ?? ''));
                            $hasCountryCode = preg_match('/^[a-z]{2}$/', $countryCode);
                        @endphp

                        @if($hasCountryCode)
                        <!-- src="https://flagcdn.com/w20/{{ $countryCode }}.png" -->
                            <img
                                alt="{{ strtoupper($countryCode) }}"
                                class="h-4 w-5 flex-shrink-0 rounded object-cover shadow-sm"
                                loading="lazy"
                                onerror="this.style.display='none'"
                            >
                        @else
                            <span class="inline-block w-5 text-center text-[10px] text-slate-400">—</span>
                        @endif

                        <span class="truncate font-mono text-xs text-slate-600 dark:text-slate-400" title="{{ $row->ip_address }}">
                            {{ $row->ip_address ?? '—' }}
                        </span>
                    </div>
</td>

                            <!-- Referrer -->
                            <td class="px-4 py-3">
                                <div class="truncate max-w-[200px] text-xs text-slate-500 dark:text-slate-400" title="{{ $row->referrer_url }}">
                                    {{ $row->referrer_url ?: '—' }}
                                </div>
                            </td>

                            <!-- Payout -->
                            <td class="px-4 py-3">
                                <span class="text-sm font-semibold text-green-700 dark:text-green-400">
                                    ${{ number_format($row->payout, 2) }}
                                </span>
                            </td>

                            <!-- Device/Browser/OS -->
                            <td class="px-4 py-3">
                                <div class="flex flex-col gap-1">
                                    <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">
                                        {{ ucfirst($row->device_type ?? 'Unknown') }}
                                    </span>
                                    <span class="text-xs text-slate-600 dark:text-slate-400">
                                        {{ $row->browser ?? '—' }}
                                    </span>
                                    <span class="text-xs text-slate-500 dark:text-slate-500">
                                        {{ $row->os ?? '—' }}
                                    </span>
                                </div>
                            </td>

                            <!-- User Agent -->
                            <td class="px-4 py-3">
                                <div class="truncate max-w-[250px] text-xs text-slate-500 dark:text-slate-500 font-mono" title="{{ $row->user_agent }}">
                                    {{ $row->user_agent ?? '—' }}
                                </div>
                            </td>

                            <!-- Lead Status -->
                            <td class="px-4 py-3">
                                @if($row->lead)
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-bold rounded-full bg-emerald-50 text-emerald-700 border border-emerald-200 dark:bg-emerald-900/30 dark:text-emerald-300 dark:border-emerald-800">
                                    ✓
                                </span>
                                @else
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium rounded-full bg-slate-100 text-slate-600 border border-slate-200 dark:bg-slate-800 dark:text-slate-400 dark:border-slate-700">
                                    ✗
                                </span>
                                @endif
                            </td>


                            <!-- Converted At -->
                            <td class="px-4 py-3">
                                <span class="text-xs text-slate-500 dark:text-slate-400 font-mono">
                                    {{ $row->converted_at?->format('Y-m-d H:i') ?? '—' }}
                                </span>
                            </td>

                            <!-- Created At -->
                            <td class="px-4 py-3">
                                <span class="text-xs text-slate-500 dark:text-slate-400 font-mono">
                                    {{ $row->created_at->format('Y-m-d H:i') }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-6">
            <div class="bg-white dark:bg-slate-900 rounded-lg shadow-md px-4 py-3 border border-slate-200 dark:border-slate-700">
                @if($records->hasPages())
                {{ $records->links() }}
                @else
                <span class="text-sm text-slate-600 dark:text-slate-400">Page 1/1</span>
                @endif
            </div>
        </div>

        @else
        <div class="text-center py-12 bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-700">
            <p class="text-slate-500 dark:text-slate-400 text-lg">📭 No data found</p>
            <p class="text-slate-400 dark:text-slate-500 text-sm mt-2">Try adjusting your search filters</p>
        </div>
        @endif

    </div>
</x-filament::page>