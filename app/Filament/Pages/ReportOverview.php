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
    public $search_affiliate_id = '';
    public $search_offer_id = '';
    public $date_from = '';
    public $date_to = '';
    public $search_status = '';

    protected function getViewData(): array
    {
        return [
            'records' => $this->getFilteredQuery()->paginate(10),
        ];
    }

    protected function getFilteredQuery()
    {
        $query = Tracklink::query();

        if ($this->search_id !== '') {
            $query->where('id', $this->search_id);
        }

        if ($this->search_affiliate_id !== '') {
            $query->where('aff_id', 'LIKE', '%' . $this->search_affiliate_id . '%');
        }

        if ($this->search_offer_id !== '') {
            $query->where('offer_id', $this->search_offer_id);
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

        return $query->orderBy('created_at', 'desc');
    }

    public function applyFilters(): void
    {
        $this->resetPage();
    }

    public function clearFilters(): void
    {
        $this->reset([
            'search_id',
            'search_affiliate_id',
            'search_offer_id',
            'date_from',
            'date_to',
            'search_status',
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
                'Affiliate ID',
                'Aff Click ID',
                'Offer ID',
                'Banner ID',
                'Advertiser ID',
                'Source',
                'Pub ID',
                'Sub1',
                'Sub2',
                'Sub3',
                'Sub4',
                'IP Address',
                'Country',
                'Referrer URL',
                'Payout',
                'Device Type',
                'Browser',
                'OS',
                'User Agent',
                'Status',
                'Clicked At',
                'Converted At',
                'Created At',
            ]);

            foreach ($records as $record) {
                fputcsv($handle, [
                    $record->id,
                    $record->aff_id,
                    $record->aff_clickid,
                    $record->offer_id,
                    $record->banner_id,
                    $record->advertiser_id,
                    $record->source,
                    $record->pubid,
                    $record->sub1,
                    $record->sub2,
                    $record->sub3,
                    $record->sub4,
                    $record->ip_address,
                    $record->country,
                    $record->referrer_url,
                    $record->payout,
                    $record->device_type,
                    $record->browser,
                    $record->os,
                    $record->user_agent,
                    $record->status,
                    $record->clicked_at?->format('Y-m-d H:i:s'),
                    $record->converted_at?->format('Y-m-d H:i:s'),
                    $record->created_at?->format('Y-m-d H:i:s'),
                ]);
            }

            fclose($handle);
        }, $filename, [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }
}