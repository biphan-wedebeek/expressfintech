<?php

namespace App\Filament\Pages;

use App\Models\Tracklink;
use Filament\Pages\Page;
use Livewire\WithPagination;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ReportOverview extends Page
{
    use WithPagination;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static string $view = 'filament.pages.report-overview';
    protected static ?string $navigationLabel = 'Tracklink Report';
    protected static ?string $title = 'Tracklink Report';

    public $search_id = '';
    public $search_user_id = '';
    public $search_offer_id = '';
    public $search_banner_id = '';
    public $date_from = '';
    public $date_to = '';
    public $search_status = '';
    public $search_flead = '';

    protected function getViewData(): array
    {
        return [
            'records' => $this->getFilteredQuery()->paginate(10),
        ];
    }

    protected function getFilteredQuery()
    {
        $query = Tracklink::query()->with(['offer', 'banner']);

        if ($this->search_id !== '') {
            $query->where('id', $this->search_id);
        }

        if ($this->search_user_id !== '') {
            $query->where('user_id', $this->search_user_id);
        }

        if ($this->search_offer_id !== '') {
            $query->where('offer_id', $this->search_offer_id);
        }

        if ($this->search_banner_id !== '') {
            $query->where('banner_id', $this->search_banner_id);
        }

        if ($this->date_from) {
            $query->whereDate('created_at', '>=', $this->date_from);
        }

        if ($this->date_to) {
            $query->whereDate('created_at', '<=', $this->date_to);
        }

        if ($this->search_status !== '') {
            $query->where('status', $this->search_status);
        }

        if ($this->search_flead !== '') {
            $query->where('flead', $this->search_flead);
        }

        return $query->orderByDesc('created_at');
    }

    public function applyFilters(): void
    {
        $this->resetPage();
    }

    public function clearFilters(): void
    {
        $this->reset([
            'search_id',
            'search_user_id',
            'search_offer_id',
            'search_banner_id',
            'date_from',
            'date_to',
            'search_status',
            'search_flead',
        ]);

        $this->resetPage();
    }

    public function exportToExcel(): StreamedResponse
    {
        $records = $this->getFilteredQuery()->get();
        $filename = 'tracklink_report_' . date('Y-m-d_His') . '.csv';

        return response()->streamDownload(function () use ($records) {
            $handle = fopen('php://output', 'w');
            fprintf($handle, chr(0xEF) . chr(0xBB) . chr(0xBF));

            fputcsv($handle, [
                'ID',
                'User ID',
                'Offer ID',
                'Offer Title',
                'Banner ID',
                'Banner Name',
                'IP Address',
                'Flead',
                'Status',
                'Amount',
                'Sale Amount',
                'Device Type',
                'Device Manufacturer',
                'Browser',
                'Operating System',
                'User Language',
                'Country',
                'Referrer URL',
                'User Agent',
                'Created At',
                'Updated At',
            ]);

            foreach ($records as $record) {
                fputcsv($handle, [
                    $record->id,
                    $record->user_id,
                    $record->offer_id,
                    $record->offer?->title,
                    $record->banner_id,
                    $record->banner_name,
                    $record->ip_address,
                    $record->flead,
                    $record->status,
                    $record->amount,
                    $record->sale_amount,
                    $record->device_type,
                    $record->device_manuf,
                    $record->browser,
                    $record->operating_system,
                    $record->user_language,
                    $record->country,
                    $record->referrer_url,
                    $record->user_agent,
                    $record->created_at?->format('Y-m-d H:i:s'),
                    $record->updated_at?->format('Y-m-d H:i:s'),
                ]);
            }

            fclose($handle);
        }, $filename, [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }
}