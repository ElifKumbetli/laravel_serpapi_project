@extends('layouts.app')

@section('title', 'SERP API Arama')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100" style="background: #f4f4f4;">
    <form action="{{ route('results') }}" method="get" class="p-4 rounded-4 shadow-lg text-center"
          style="max-width: 400px; width: 100%; background: white; border: none; padding: 25px;">

        <h1 class="text-primary fw-bold" style="font-size: 24px; margin-bottom: 5px;">
            SERP API ARAMA
        </h1>
        <h2 class="text-secondary" style="font-size: 14px; font-weight: 500; margin-bottom: 15px;">
            Google Arama Sonuçlarında Kelimenizin Sıralamasını Öğrenin
        </h2>

        <div class="mb-3 text-start">
            <label for="keyword" class="form-label fw-semibold" style="font-size: 14px;">Anahtar Kelime:</label>
            <input type="text" class="form-control shadow-sm px-3 py-2 rounded-3 border-light"
                   id="keyword" name="keyword" required autocomplete="off"
                   style="font-size: 14px; background: #f8f9fa;">
        </div>

        <div class="mb-3 text-start">
            <label for="location" class="form-label fw-semibold" style="font-size: 14px;">Konum:</label>
            <input type="text" class="form-control shadow-sm px-3 py-2 rounded-3 border-light"
                   id="location" name="location" autocomplete="off"
                   style="font-size: 14px; background: #f8f9fa;">
        </div>

        <button type="submit" class="btn text-white py-2 rounded-3 w-100"
                style="background: #4a63e7; font-size: 16px; font-weight: bold;">
            Sıralamayı Kontrol Et
        </button>

        <p class="mt-3 text-muted small" style="font-size: 12px;">
            Not: SerpAPI üzerinden Google arama sonuçlarına erişim sağlanmaktadır. <br>
            Doğru sonuçlar için tam anahtar kelimenizi ve şehrinizi girin.
        </p>
    </form>
</div>
@endsection
