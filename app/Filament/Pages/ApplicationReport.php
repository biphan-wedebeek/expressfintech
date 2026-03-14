<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\LoanApplication;
use App\Models\LoanExport;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Livewire\WithPagination;

class ApplicationReport extends Page
{
    use WithPagination;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Application Report';
    protected static ?string $title = '';
    protected static string $view = 'filament.pages.application-report';

    public $search_name = '';
    public $search_tracklink_id = '';
    public $search_email = '';
    public $search_status = '';
    public $search_export_status = '';
    public $date_from = '';
    public $date_to = '';

    // Column visibility
    public $visibleColumns = [
        'id' => true,
        'exported' => true,
        'tracklink_id' => true,
        'source' => true,
        'loan_amount' => true,
        'credit' => false,
        'loan_reason' => false,
        'first_name' => true,
        'last_name' => true,
        'date_of_birth' => true,
        'ssn' => true,
        'military' => false,
        'citizen' => false,
        'dl_state' => false,
        'own_home' => false,
        'own_car' => false,
        'email' => true,
        'phone' => true,
        'home_phone' => false,
        'contact_time' => false,
        'address' => true,
        'city' => true,
        'state' => true,
        'zipcode' => true,
        'residence_months' => false,
        'rent' => false,
        'job_title' => false,
        'employer' => false,
        'employed_months' => false,
        'work_phone' => false,
        'income' => false,
        'income_type' => false,
        'pay_frequency' => false,
        'next_payday' => false,
        'other_income' => false,
        'debt' => false,
        'bank_name' => true,
        'account_number' => true,
        'aba' => true,
        'bank_type' => false,
        'bank_months' => false,
        'bank_phone' => false,
        'direct_deposit' => false,
        'status' => true,
        'created_at' => true,
    ];

    public $showColumnSelector = false;

    public function getColumnLabels(): array
    {
        return [
            'id' => 'ID',
            'tracklink_id' => 'Click ID',
            'source' => 'Aff Source',
            'loan_amount' => 'Loan Amount',
            'credit' => 'Credit Score',
            'loan_reason' => 'Loan Reason',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'date_of_birth' => 'Date of Birth',
            'ssn' => 'SSN',
            'military' => 'Military',
            'citizen' => 'US Citizen',
            'dl_state' => 'DL State',
            'own_home' => 'Own Home',
            'own_car' => 'Own Car',
            'email' => 'Email',
            'phone' => 'Phone',
            'home_phone' => 'Home Phone',
            'contact_time' => 'Contact Time',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'zipcode' => 'Zip Code',
            'residence_months' => 'Residence Time',
            'rent' => 'Rent/Mortgage',
            'job_title' => 'Job Title',
            'employer' => 'Employer',
            'employed_months' => 'Employed Time',
            'work_phone' => 'Work Phone',
            'income' => 'Income',
            'income_type' => 'Income Type',
            'pay_frequency' => 'Pay Frequency',
            'next_payday' => 'Next Payday',
            'other_income' => 'Other Income',
            'debt' => 'Debt',
            'bank_name' => 'Bank Name',
            'account_number' => 'Account Number',
            'aba' => 'ABA',
            'bank_type' => 'Bank Type',
            'bank_months' => 'Bank Account Age',
            'bank_phone' => 'Bank Phone',
            'direct_deposit' => 'Direct Deposit',
            'status' => 'Status',
            'exported' => 'Exported', // NEW
            'created_at' => 'Created At',
        ];
    }

    public function getColumnGroups(): array
    {
        return [
            'Basic' => ['id', 'exported', 'tracklink_id', 'source', 'status', 'created_at'], // exported sau id
            'Loan' => ['loan_amount', 'credit', 'loan_reason'],
            'Personal' => ['first_name', 'last_name', 'date_of_birth', 'ssn', 'military', 'citizen', 'dl_state', 'own_home', 'own_car'],
            'Contact' => ['email', 'phone', 'home_phone', 'contact_time'],
            'Address' => ['address', 'city', 'state', 'zipcode', 'residence_months', 'rent'],
            'Employment' => ['job_title', 'employer', 'employed_months', 'work_phone'],
            'Income' => ['income', 'income_type', 'pay_frequency', 'next_payday', 'other_income', 'debt'],
            'Bank' => ['bank_name', 'account_number', 'aba', 'bank_type', 'bank_months', 'bank_phone', 'direct_deposit'],
        ];
    }

    public function toggleColumnSelector()
    {
        $this->showColumnSelector = !$this->showColumnSelector;
    }

    public function toggleColumn($column)
    {
        $this->visibleColumns[$column] = !$this->visibleColumns[$column];
    }

    public function selectAllColumns()
    {
        foreach ($this->visibleColumns as $key => $value) {
            $this->visibleColumns[$key] = true;
        }
    }

    public function deselectAllColumns()
    {
        foreach ($this->visibleColumns as $key => $value) {
            $this->visibleColumns[$key] = false;
        }
        // Keep essential columns
        $this->visibleColumns['id'] = true;
        $this->visibleColumns['status'] = true;
    }

    public function toggleGroup($group)
    {
        $groups = $this->getColumnGroups();
        if (!isset($groups[$group])) return;

        $columns = $groups[$group];
        $allSelected = collect($columns)->every(fn($col) => $this->visibleColumns[$col] ?? false);

        foreach ($columns as $col) {
            $this->visibleColumns[$col] = !$allSelected;
        }
    }

    protected function getViewData(): array
    {
        return [
            'records' => $this->getFilteredQuery()->paginate(10),
            'columnLabels' => $this->getColumnLabels(),
            'columnGroups' => $this->getColumnGroups(),
        ];
    }

    protected function getFilteredQuery()
    {
        $query = LoanApplication::with(['tracklink', 'exports']);

        if ($this->search_name) {
            $query->where(function ($q) {
                $q->where('first_name', 'LIKE', '%' . $this->search_name . '%')
                    ->orWhere('last_name', 'LIKE', '%' . $this->search_name . '%');
            });
        }

        if ($this->search_tracklink_id) {
            $query->where('tracklink_id', $this->search_tracklink_id);
        }

        if ($this->search_email) {
            $query->where('email', 'LIKE', '%' . $this->search_email . '%');
        }

        if ($this->search_status) {
            $query->where('status', $this->search_status);
        }

        if ($this->search_export_status === 'exported') {
            $query->has('exports');
        } elseif ($this->search_export_status === 'not_exported') {
            $query->doesntHave('exports');
        }

        if ($this->date_from) {
            $query->whereDate('created_at', '>=', $this->date_from);
        }

        if ($this->date_to) {
            $query->whereDate('created_at', '<=', $this->date_to);
        }

        return $query->orderBy('created_at', 'desc');
    }

    public function applyFilters()
    {
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->reset(['search_name', 'search_email', 'search_tracklink_id', 'search_status', 'search_export_status', 'date_from', 'date_to']);
        $this->resetPage();
    }

    public function exportToExcel(): StreamedResponse
    {
        $records = $this->getFilteredQuery()->get();
        $filename = 'loan_application_report_' . date('Y-m-d_His') . '.csv';
        $labels = $this->getColumnLabels();

        $userId = auth()->id();
        foreach ($records as $record) {
            LoanExport::create([
                'application_id' => $record->id,
                'exported_at' => now(),
                'file_name' => $filename,
                'exported_by' => $userId,
            ]);
        }

        return response()->streamDownload(function () use ($records, $labels) {
            $handle = fopen('php://output', 'w');
            fprintf($handle, chr(0xEF) . chr(0xBB) . chr(0xBF));

            $headers = [];
            foreach ($this->visibleColumns as $col => $visible) {
                if ($visible && $col !== 'exported') {
                    $headers[] = $labels[$col] ?? $col;
                }
            }
            fputcsv($handle, $headers);

            foreach ($records as $r) {
                $row = [];
                foreach ($this->visibleColumns as $col => $visible) {
                    if ($visible && $col !== 'exported') {
                        $row[] = $this->getColumnValue($r, $col);
                    }
                }
                fputcsv($handle, $row);
            }

            fclose($handle);
        }, $filename, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }

    private function getColumnValue($record, $column)
    {
        return match ($column) {
            'source' => $record->tracklink->source ?? '—',
            'date_of_birth' => $record->date_of_birth?->format('Y-m-d'),
            'next_payday' => $record->next_payday?->format('Y-m-d'),
            'military', 'citizen', 'own_home', 'own_car', 'direct_deposit' => $record->$column ? 'Yes' : 'No',
            'status' => ucfirst($record->status),
            'created_at' => $record->created_at->format('Y-m-d H:i:s'),
            default => $record->$column ?? '—',
        };
    }
}
