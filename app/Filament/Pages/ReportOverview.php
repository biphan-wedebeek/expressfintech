<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\Tracklink;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ReportOverview extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static string $view = 'filament.pages.report-overview';
    protected static ?string $navigationLabel = 'Tracklink Report';
    protected static ?string $title = '';

    public $search_id = '';
    public $search_affiliate_id = '';
    public $search_campaign_id = '';
    public $date_from = '';
    public $date_to = '';
    public $search_status = '';

    use \Livewire\WithPagination;

    protected function getViewData(): array
    {
        return [
            'records' => $this->getFilteredQuery()->paginate(10),
        ];
    }

    protected function getFilteredQuery()
    {
        $query = Tracklink::query();

        if ($this->search_id) {
            $query->where('id', $this->search_id);
        }

        if ($this->search_affiliate_id) {
            $query->where('aff_id', 'LIKE', '%' . $this->search_affiliate_id . '%');
        }

        if ($this->search_campaign_id) {
            $query->where('campaign_id', 'LIKE', '%' . $this->search_campaign_id . '%');
        }

        if ($this->date_from) {
            $query->whereDate('created_at', '>=', $this->date_from);
        }

        if ($this->date_to) {
            $query->whereDate('created_at', '<=', $this->date_to);
        }

        if ($this->search_status !== '') {
            $query->where('lead', $this->search_status);
        }

        return $query->orderBy('created_at', 'desc');
    }

    public function applyFilters()
    {
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->reset(['search_id', 'search_affiliate_id', 'search_campaign_id', 'date_from', 'date_to', 'search_status']);
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
                'Affiliate ID',
                'Aff Source',
                'Aff Click ID',
                'Campaign ID',
                'Source',
                'IP Address',
                'Country',
                'Referrer URL',
                'Payout',
                'Device Type',
                'Browser',
                'OS',
                'User Agent',
                'Lead',
                'Status',
                'Converted At',
                'Created At'
            ]);

            foreach ($records as $record) {
                fputcsv($handle, [
                    $record->id,
                    $record->aff_id,
                    $record->source,
                    $record->aff_clickid,
                    $record->campaign_id,
                    $record->source,
                    $record->ip_address,
                    $record->country,
                    $record->referrer_url,
                    $record->payout,
                    $record->device_type,
                    $record->browser,
                    $record->os,
                    $record->user_agent,
                    $record->lead ? 'Yes' : 'No',
                    $record->status,
                    $record->converted_at?->format('Y-m-d H:i:s'),
                    $record->created_at->format('Y-m-d H:i:s')
                ]);
            }

            fclose($handle);
        }, $filename, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }
}