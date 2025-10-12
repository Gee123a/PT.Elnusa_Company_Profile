@extends('layout.main')
@section('title', 'Our Clients')
@section('content')

    {{-- Hero Section: Menampilkan judul, deskripsi, dan statistik klien di bagian atas halaman --}}
    @include('layout.heroSection', [
        'title' => 'Trusted by Industry Leaders',
        'description' => 'Building lasting partnerships through quality and reliability',
        'background' => 'https://images.unsplash.com/photo-1560179707-f14e90ef3623?w=1920',
        'statistic' => [
            'main' => $clients->count(),
            'label' => 'Valued Clients',
            'items' => [
                ['value' => '98%', 'label' => 'Retention Rate'],
                ['value' => '100%', 'label' => 'Satisfaction Rate'],
            ],
        ],
        'scrollTo' => '#clients-section',
    ])

    {{-- Testimonials Section: Menampilkan review/testimoni dari klien --}}
    <section id="clients-section"  class="py-5 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(rgba(30, 20, 15, 0.85), rgba(30, 20, 15, 0.85)), 
                    url('https://images.unsplash.com/photo-1615529182904-14819c35db37?w=1920') center/cover no-repeat; z-index: -1;">
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    {{-- Judul section testimoni klien --}}
                    @include('layout.sectionTitle', ['title' => 'WHAT THEY SAY ABOUT US'])
                </div>
            </div>
            <div class="row g-4">
                {{-- Daftar card review/testimoni --}}
                @foreach ($reviews as $review)
                    @include('card.reviewCard', ['review' => $review])
                @endforeach
            </div>
        </div>
    </section>

@endsection
