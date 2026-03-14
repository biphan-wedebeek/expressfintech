<x-filament-panels::page>
    @include('filament.partials.filament-head')

    <div class="space-y-6">
        <!-- Header -->
        <div class="bg-gradient-to-r from-slate-700 to-slate-800 dark:from-slate-800 dark:to-slate-900 rounded-lg p-6 shadow-lg">
            <h2 class="text-2xl font-bold text-white">📋 Loan Application Report</h2>
            <p class="text-slate-300 text-sm mt-1">Track and manage loan applications</p>
        </div>

        <!-- Search Form -->
        <div class="bg-white dark:bg-slate-900 rounded-xl shadow-lg border border-slate-200 dark:border-slate-700 p-4">
            <div class="flex items-center justify-between mb-3">
                <h3 class="text-base font-semibold text-slate-800 dark:text-slate-200">🔍 Filters</h3>
                <div class="flex gap-2">
                    <button
                        wire:click="toggleColumnSelector"
                        class="px-3 py-1.5 bg-slate-600 hover:bg-slate-700 text-white text-sm rounded-lg font-medium transition-colors flex items-center gap-2">
                        ⚙️ Columns
                    </button>
                    <button
                        wire:click="exportToExcel"
                        class="px-3 py-1.5 bg-green-600 hover:bg-green-700 text-white text-sm rounded-lg font-medium transition-colors flex items-center gap-2">
                        📥 Export Excel
                    </button>
                </div>
            </div>

            <form wire:submit.prevent="applyFilters" class="space-y-3">
                <div class="grid grid-cols-1 md:grid-cols-7 gap-3">
                    <!-- Name Search -->
                    <div>
                        <label class="block text-xs font-medium text-slate-600 dark:text-slate-400 mb-1">Name</label>
                        <input type="text" wire:model="search_name" placeholder="First or Last name..."
                            class="w-full px-2 py-1.5 text-sm border border-slate-300 dark:border-slate-600 rounded-md focus:ring-2 focus:ring-slate-500 focus:border-transparent bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100 placeholder-slate-400">
                    </div>

                    <!-- Tracklink ID Search -->
                    <div>
                        <label class="block text-xs font-medium text-slate-600 dark:text-slate-400 mb-1">Click ID</label>
                        <input type="number" wire:model="search_tracklink_id" placeholder="Click ID..."
                            class="w-full px-2 py-1.5 text-sm border border-slate-300 dark:border-slate-600 rounded-md focus:ring-2 focus:ring-slate-500 focus:border-transparent bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100 placeholder-slate-400">
                    </div>

                    <!-- Email Search -->
                    <div>
                        <label class="block text-xs font-medium text-slate-600 dark:text-slate-400 mb-1">Email</label>
                        <input type="email" wire:model="search_email" placeholder="Email address..."
                            class="w-full px-2 py-1.5 text-sm border border-slate-300 dark:border-slate-600 rounded-md focus:ring-2 focus:ring-slate-500 focus:border-transparent bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100 placeholder-slate-400">
                    </div>

                    <!-- Status Filter -->
                    <div>
                        <label class="block text-xs font-medium text-slate-600 dark:text-slate-400 mb-1">Status</label>
                        <select wire:model="search_status"
                            class="w-full px-2 py-1.5 text-sm border border-slate-300 dark:border-slate-600 rounded-md focus:ring-2 focus:ring-slate-500 focus:border-transparent bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100">
                            <option value="">All Status</option>
                            <option value="valid">Valid</option>
                            <option value="invalid">Invalid</option>
                        </select>
                    </div>

                    <!-- Exported -->
                    <div>
                        <label class="block text-xs font-medium text-slate-600 dark:text-slate-400 mb-1">Export Status</label>
                        <select wire:model="search_export_status"
                            class="w-full px-2 py-1.5 text-sm border border-slate-300 dark:border-slate-600 rounded-md focus:ring-2 focus:ring-slate-500 focus:border-transparent bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100">
                            <option value="">All</option>
                            <option value="exported">Exported</option>
                            <option value="not_exported">Not Exported</option>
                        </select>
                    </div>


                    <!-- Date From -->
                    <div>
                        <label class="block text-xs font-medium text-slate-600 dark:text-slate-400 mb-1">From Date</label>
                        <input type="date" wire:model="date_from"
                            class="w-full px-2 py-1.5 text-sm border border-slate-300 dark:border-slate-600 rounded-md focus:ring-2 focus:ring-slate-500 focus:border-transparent bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100">
                    </div>

                    <!-- Date To -->
                    <div>
                        <label class="block text-xs font-medium text-slate-600 dark:text-slate-400 mb-1">To Date</label>
                        <input type="date" wire:model="date_to"
                            class="w-full px-2 py-1.5 text-sm border border-slate-300 dark:border-slate-600 rounded-md focus:ring-2 focus:ring-slate-500 focus:border-transparent bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100">
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex gap-2">
                    <button type="submit"
                        class="px-4 py-1.5 bg-slate-700 hover:bg-slate-800 dark:bg-slate-600 dark:hover:bg-slate-700 text-white text-sm rounded-md font-medium transition-colors">
                        Search
                    </button>
                    <button type="button" wire:click="clearFilters"
                        class="px-4 py-1.5 bg-slate-100 hover:bg-slate-200 dark:bg-slate-700 dark:hover:bg-slate-600 text-slate-700 dark:text-slate-300 text-sm rounded-md font-medium transition-colors">
                        Clear
                    </button>
                </div>
            </form>
        </div>

        <!-- Column Selector -->
        @if($showColumnSelector)
        <div class="bg-white dark:bg-slate-900 rounded-xl shadow-lg border border-slate-200 dark:border-slate-700 p-4">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-base font-semibold text-slate-800 dark:text-slate-200">⚙️ Column Visibility</h3>
                <div class="flex gap-2">
                    <button wire:click="selectAllColumns"
                        class="px-3 py-1 text-xs bg-slate-200 hover:bg-slate-300 dark:bg-slate-700 dark:hover:bg-slate-600 text-slate-700 dark:text-slate-300 rounded-md transition-colors">
                        Select All
                    </button>
                    <button wire:click="deselectAllColumns"
                        class="px-3 py-1 text-xs bg-slate-200 hover:bg-slate-300 dark:bg-slate-700 dark:hover:bg-slate-600 text-slate-700 dark:text-slate-300 rounded-md transition-colors">
                        Deselect All
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                @foreach($columnGroups as $groupName => $columns)
                <div class="border border-slate-200 dark:border-slate-700 rounded-lg p-3">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-semibold text-slate-700 dark:text-slate-300">{{ $groupName }}</span>
                        <button wire:click="toggleGroup('{{ $groupName }}')"
                            class="text-xs text-slate-500 hover:text-slate-700 dark:hover:text-slate-300">
                            Toggle
                        </button>
                    </div>
                    <div class="space-y-1">
                        @foreach($columns as $col)
                        <label class="flex items-center gap-2 cursor-pointer hover:bg-slate-50 dark:hover:bg-slate-800 p-1 rounded">
                            <input type="checkbox" wire:click="toggleColumn('{{ $col }}')"
                                {{ $visibleColumns[$col] ? 'checked' : '' }}
                                class="rounded border-slate-300 text-slate-600 focus:ring-slate-500">
                            <span class="text-xs text-slate-600 dark:text-slate-400">{{ $columnLabels[$col] }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        @if($records->count() > 0)
        <!-- Table -->
        <div class="bg-white dark:bg-slate-900 rounded-xl shadow-xl overflow-hidden border border-slate-200 dark:border-slate-700">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-slate-200 dark:divide-slate-700">
                    <thead class="bg-gradient-to-r from-slate-50 to-slate-100 dark:from-slate-800 dark:to-slate-850">
                        <tr>
                            @foreach($visibleColumns as $col => $visible)
                            @if($visible)
                            <th class="px-4 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300">
                                {{ $columnLabels[$col] }}
                            </th>
                            @endif
                            @endforeach
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-slate-800 bg-white dark:bg-slate-900">
                        @foreach ($records as $row)
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-all duration-150">
                            @foreach($visibleColumns as $col => $visible)
                            @if($visible)
                            <td class="px-4 py-3">
                                @switch($col)
                                @case('id')
                                <span class="font-mono text-sm font-semibold text-slate-900 dark:text-slate-100">{{ $row->id ?? '—' }}</span>
                                @break
                                @case('exported')
                                @if($row->exports->count() > 0)
                                <div class="relative inline-block group">
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1.5 text-xs font-semibold rounded-lg bg-emerald-50 text-emerald-700 border border-emerald-200 dark:bg-emerald-900/30 dark:text-emerald-300 dark:border-emerald-800 cursor-help">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="text-[10px] font-medium">{{ $row->exports->count() }}x</span>
                                    </span>
                                    <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-3 py-2 bg-slate-900 dark:bg-slate-700 text-white text-xs rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 whitespace-nowrap z-50">
                                        Last exported: {{ $row->getLastExportedAt()?->format('M d, Y H:i') ?? 'N/A' }}
                                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 -mt-1">
                                            <div class="border-4 border-transparent border-t-slate-900 dark:border-t-slate-700"></div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1.5 text-xs font-medium rounded-lg bg-slate-50 text-slate-500 border border-slate-200 dark:bg-slate-800/50 dark:text-slate-400 dark:border-slate-700">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-[10px]">Pending</span>
                                </span>
                                @endif
                                @break
                                @case('tracklink_id')
                                <span class="text-sm text-slate-700 dark:text-slate-300 font-medium">{{ $row->tracklink_id ?? '—' }}</span>
                                @break
                                @case('source')
                                <span class="text-sm text-slate-600 dark:text-slate-400">{{ $row->tracklink->source ?? '—' }}</span>
                                @break
                                @case('loan_amount')
                                <span class="text-sm font-semibold text-blue-700 dark:text-blue-400">{{ $row->loan_amount }}</span>
                                @break
                                @case('first_name')
                                @case('last_name')
                                <span class="text-sm font-medium text-slate-800 dark:text-slate-200">{{ $row->$col }}</span>
                                @break
                                @case('date_of_birth')
                                <span class="font-mono text-xs text-slate-600 dark:text-slate-400">{{ $row->date_of_birth?->format('Y-m-d') ?? '—' }}</span>
                                @break
                                @case('next_payday')
                                <span class="font-mono text-xs text-slate-600 dark:text-slate-400">{{ $row->next_payday?->format('Y-m-d') ?? '—' }}</span>
                                @break
                                @case('ssn')
                                @case('phone')
                                @case('home_phone')
                                @case('work_phone')
                                @case('bank_phone')
                                @case('account_number')
                                @case('aba')
                                <span class="font-mono text-xs text-slate-600 dark:text-slate-400">{{ $row->$col ?? '—' }}</span>
                                @break
                                @case('military')
                                @case('citizen')
                                @case('own_home')
                                @case('own_car')
                                @case('direct_deposit')
                                <span class="inline-flex px-2 py-1 text-xs font-medium rounded-full {{ $row->$col ? 'bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400' : 'bg-slate-100 text-slate-600 dark:bg-slate-800 dark:text-slate-400' }}">
                                    {{ $row->$col ? 'Yes' : 'No' }}
                                </span>
                                @break
                                @case('income')
                                @case('other_income')
                                @case('debt')
                                @case('rent')
                                <span class="text-sm text-slate-700 dark:text-slate-300">${{ number_format($row->$col ?? 0, 2) }}</span>
                                @break
                                @case('status')
                                @if($row->status === 'valid')
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-semibold rounded-full bg-green-50 text-green-700 border border-green-200 dark:bg-green-900/30 dark:text-green-300 dark:border-green-800">
                                    Valid
                                </span>
                                @else
                                <div class="relative inline-block group">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-semibold rounded-full bg-yellow-50 text-yellow-700 border border-yellow-200 dark:bg-yellow-900/30 dark:text-yellow-300 dark:border-yellow-800 cursor-help">
                                        Invalid
                                        @if($row->reason)
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                        </svg>
                                        @endif
                                    </span>
                                    @if($row->reason)
                                    <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-3 py-2 bg-slate-900 dark:bg-slate-700 text-white text-xs rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 whitespace-nowrap z-50">
                                        {{ $row->reason }}
                                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 -mt-1">
                                            <div class="border-4 border-transparent border-t-slate-900 dark:border-t-slate-700"></div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                @endif
                                @break
                                @case('created_at')
                                <span class="text-xs text-slate-500 dark:text-slate-400 font-mono">{{ $row->created_at->format('Y-m-d H:i') }}</span>
                                @break
                                @default
                                <span class="text-sm text-slate-600 dark:text-slate-400">{{ $row->$col ?? '—' }}</span>
                                @endswitch
                            </td>
                            @endif
                            @endforeach
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
</x-filament-panels::page>