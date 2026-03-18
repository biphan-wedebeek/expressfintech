@extends('layouts.personal-finance')

@section('title', 'Budgeting — 50/30/20 Rule')
@section('breadcrumb', 'Budgeting')
@section('eyebrow', 'Chapter 01 · Planning')
@section('page_title', 'The Art of Budgeting')
@section('page_lead', 'A budget is not a restriction on your freedom — it is the architecture of your financial life. Without one, money flows out invisibly. With one, every dollar has a destination.')

@section('content')

{{-- 50/30/20 Rule --}}
<section class="bg-surface border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600">
            <span class="w-6 h-px bg-emerald-600"></span>
            The Framework
        </div>

        <div class="grid lg:grid-cols-2 gap-14 items-start">
            <div>
                <h2 class="fonttitle text-3xl lg:text-4xl font-bold leading-tight mb-6">
                    The <em class="text-emerald-600 italic">50/30/20</em> Rule
                </h2>

                <p class="text-muted leading-relaxed mb-4">
                    The most proven framework in personal finance divides after-tax income into three buckets:
                    <strong class="text-[var(--text-primary)]">needs, wants, and savings</strong>.
                    It requires no spreadsheet and works across nearly every income level.
                </p>

                <p class="text-muted leading-relaxed mb-4">
                    Your <strong class="text-[var(--text-primary)]">needs</strong> — housing, utilities, groceries, transport — should consume no more than
                    <strong class="text-emerald-600">50%</strong> of take-home pay.
                </p>

                <p class="text-muted leading-relaxed mb-8">
                    <strong class="text-[var(--text-primary)]">Wants</strong> cap at 30%.
                    The remaining <strong class="text-emerald-600">20%</strong> is non-negotiable.
                </p>

                <div class="border border-emerald-200 bg-emerald-50 p-6 rounded-lg">

                    <div class="text-[10px] uppercase tracking-[0.2em] text-emerald-700 font-semibold mb-2">
                        Key Insight
                    </div>

                    <p class="text-sm text-muted leading-relaxed">
                        Studies show people who write down a budget spend
                        <strong class="text-[var(--text-primary)]">15–20% less</strong> per month.
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-6">
                <div class="border-l-4 border-emerald-500 bg-white p-8 shadow-sm">
                    <div class="fonttitle text-6xl font-black text-emerald-600 mb-2">50%</div>
                    <div class="text-xs uppercase tracking-[0.1em] text-muted">
                        Maximum allocation for essential needs
                    </div>
                </div>

                <div class="border-l-4 border-yellow-500 bg-white p-8 shadow-sm">
                    <div class="fonttitle text-6xl font-black text-yellow-500 mb-2">30%</div>
                    <div class="text-xs uppercase tracking-[0.1em] text-muted">
                        Ceiling for discretionary spending
                    </div>
                </div>

                <div class="border-l-4 border-blue-500 bg-white p-8 shadow-sm">
                    <div class="fonttitle text-6xl font-black text-blue-500 mb-2">20%</div>
                    <div class="text-xs uppercase tracking-[0.1em] text-muted">
                        Savings & debt repayment floor
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600">
            <span class="w-6 h-px bg-emerald-600"></span>
            How To Start
        </div>

        <h2 class="fonttitle text-3xl lg:text-4xl font-bold mb-10">
            4 Steps to Your First Budget
        </h2>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

            @foreach([
            ['01','Track Your Income','List every source of after-tax take-home pay.'],
            ['02','Map Your Fixed Costs','List all recurring monthly obligations.'],
            ['03','Estimate Variable Spend','Review 3 months of bank and card statements.'],
            ['04','Assign & Automate','Automate savings transfers on payday.'],
            ] as [$n,$title,$body])

            <div class="bg-surface p-7 border border-[var(--border)] hover:border-emerald-400 transition">
                <div class="text-4xl font-bold text-emerald-500 opacity-40 mb-4">
                    {{ $n }}
                </div>

                <div class="font-semibold mb-2 text-[var(--text-primary)]">
                    {{ $title }}
                </div>

                <div class="text-sm text-muted leading-relaxed">
                    {{ $body }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-surface border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600">
            <span class="w-6 h-px bg-emerald-600"></span>
            Methods Compared
        </div>

        <h2 class="fonttitle text-3xl lg:text-4xl font-bold mb-10">
            Which Budgeting Method Fits You?
        </h2>

        <div class="overflow-x-auto border border-[var(--border)] bg-white">
            <table class="w-full text-sm">
                <thead class="bg-surface text-xs uppercase tracking-wider text-muted">
                    <tr>
                        <th class="p-4 text-left">Method</th>
                        <th class="p-4 text-left">Best For</th>
                        <th class="p-4 text-left">Effort</th>
                        <th class="p-4 text-left">Accuracy</th>
                        <th class="p-4 text-left">Tools</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach([
                    ['50/30/20','Beginners','Low','Moderate','Calculator'],
                    ['Zero-Based','Detail-oriented','High','Highest','Spreadsheet'],
                    ['Envelope','Cash spenders','Medium','High','Envelope'],
                    ['Pay Yourself First','Savers','Low','Moderate','Auto transfer'],
                    ['Anti-Budget','Minimalists','Minimal','Low','Bank only'],
                    ] as $row)

                    <tr class="border-t border-[var(--border)] hover:bg-surface">

                        <td class="p-4 font-medium text-[var(--text-primary)]">{{ $row[0] }}</td>
                        <td class="p-4 text-muted">{{ $row[1] }}</td>
                        <td class="p-4 text-muted">{{ $row[2] }}</td>
                        <td class="p-4 text-emerald-600 font-semibold">{{ $row[3] }}</td>
                        <td class="p-4 text-muted">{{ $row[4] }}</td>

                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection

@section('related')

<section class="bg-white border-t border-[var(--border)] py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600 mb-8">
            Related Articles
        </div>
        <div class="grid md:grid-cols-3 gap-6">

            @foreach([
            ['finance.planning.emergency_fund','Emergency Fund','Emergency Fund: Your Financial Firewall','Build 3–6 months of liquid runway.'],
            ['finance.planning.budget','Debt','Defeating Debt: Avalanche vs Snowball','Learn to eliminate debt strategically.'],
            ['finance.behavior.decision_bias','Financial Decision Bias','Recognize Decision Bias','Biases can influence financial choices and lead to poor decisions.'],
            ] as [$route,$cat,$title,$body])

            <a href="{{ route($route) }}" class="block border border-[var(--border)] bg-surface p-6 hover:shadow-md transition">

                <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2">
                    {{ $cat }}
                </div>

                <div class="fonttitle text-lg font-bold mb-2">
                    {{ $title }}
                </div>

                <p class="text-sm text-muted mb-4">
                    {{ $body }}
                </p>

                <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold">
                    Read More →
                </span>
            </a>

            @endforeach

        </div>
    </div>
</section>

@endsection