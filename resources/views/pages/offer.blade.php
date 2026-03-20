@extends('layouts.finreview')

@section('title', 'Express Fintech | Offer Links')

@section('content')
<section class="bg-white" style="padding: 72px 24px 48px; border-bottom: 1px solid #e5e7eb;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="font-size: 13px; letter-spacing: 0.18em; text-transform: uppercase; color: #6b7280; font-weight: 700; margin-bottom: 18px;">
            Offer Directory
        </div>

        <h1 style="
            margin: 0 0 18px;
            font-family: Georgia, 'Times New Roman', serif;
            font-size: clamp(36px, 5vw, 64px);
            line-height: 1.05;
            font-weight: 700;
            color: #111827;
            max-width: 900px;
        ">
            Internal Tracking Offer Links
        </h1>
    </div>
</section>

<section style="background: #f4f5f7; padding: 72px 24px 90px;">
    <div style="max-width: 1200px; margin: 0 auto;">
        @if($offers->isEmpty())
            <div style="
                background: #ffffff;
                border: 1px solid #e5e7eb;
                padding: 40px;
                text-align: center;
                color: #6b7280;
                font-size: 18px;
            ">
                No active offers available.
            </div>
        @else
            <div style="
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 24px;
            ">
            @foreach($offers as $offer)
                <a 
                    href="{{ $offer->copy_link }}" 
                    target="_blank"
                    class="offer-copy-card"
                    style="
                        display: block;
                        position: relative;
                        background: #ffffff;
                        border: 1px solid #e5e7eb;
                        overflow: hidden;
                        text-decoration: none;
                        transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
                    "
                >
                    <div style="background: #e5e7eb; aspect-ratio: 16 / 9; overflow: hidden;">
                        <img
                            src="{{ $offer->image_url ? asset('storage/' . $offer->image_url) : 'https://via.placeholder.com/960x540?text=Offer+Banner' }}"
                            alt="{{ $offer->title }}"
                            style="width: 100%; height: 100%; object-fit: cover; display: block;"
                        >
                    </div>

                    <div style="padding: 16px">
                        <h3 style="
                            margin: 0 0 14px;
                            font-family: Georgia, 'Inter', serif;
                            font-size: 16px;
                            color: #1f2937;
                            font-weight: 700;
                        ">
                            {{ $offer->title }}
                        </h3>

                        <p style="
                            margin: 0 0 18px;
                            color: #6b7280;
                            font-size: 12px;
                            line-height: 1.7;
                        ">
                            {{ $offer->description ?? 'Internal offer link available for copy.' }}
                        </p>
                    </div>
                </a>
                @endforeach
            </div>
        @endif
    </div>
</section>
@endsection