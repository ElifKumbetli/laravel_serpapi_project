@extends('layouts.app')

@section('title', 'Arama Sonuçları')

@section('content')
    <h1> Arama Sonuçları</h1>
    <p><strong>"{{ $keyword }}"</strong> araması için <strong>"{{ $location }}"</strong> konumundaki sonuçlar</p>

    {{-- Sıralama Bilgisi (Üste Alındı) --}}
    <div class="ranking-box bg-light p-3 rounded mb-4">
        <h2> Sıralama Durumu</h2>
        <div class="ranking-status">
            <span class="fs-2 fw-bold text-primary">
                {{ $ranking == 'Bulunamadı' ? '—' : $ranking }}
            </span>
            <p class="mt-2">
                {{ $ranking == 'Bulunamadı' ? 'Sonuç bulunamadı.' : "Aradığınız kelime $ranking. sırada bulundu!" }}
            </p>
        </div>
    </div>

    <h2> Google Arama Sonuçları</h2>
    @if($data && isset($data['organic_results']))
        <ul class="list-group">
            @foreach ($data['organic_results'] as $index => $result)
                <li class="list-group-item">
                    <span class="fw-bold">{{ $index + 1 }}.</span>
                    <a href="{{ $result['link'] }}" target="_blank" class="fw-bold text-primary">
                        {{ $result['title'] }}
                    </a>
                    <p class="text-muted">{{ $result['link'] }}</p>
                    <p>{{ $result['snippet'] ?? '' }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p class="alert alert-danger">❌ Sonuç bulunamadı veya API isteğinde hata oluştu.</p>
    @endif

    <a href="{{ route('search') }}" class="btn btn-secondary mt-3"> Yeni Arama Yap</a>
@endsection
