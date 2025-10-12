@extends('layout.main')
@section('title', 'Our Team')
@section('content')

    {{-- Hero Section: Bagian atas halaman tim, menampilkan statistik dan deskripsi tim --}}
    @include('layout.heroSection', [
        'title' => 'Meet Our Expert Team',
        'description' => 'Dedicated professionals committed to excellence in every project',
        'background' => 'https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=1920',
        'statistic' => [
            'main' => $totalEmployee,
            'label' => 'Expert Members',
            'items' => [
                ['value' => '5+', 'label' => 'Years Experience'],
                ['value' => '100%', 'label' => 'Certified'],
            ]
        ],
        'scrollTo' => '#team-section'
    ])

    {{-- Section Tim Manajemen: Menampilkan judul, deskripsi, dan daftar card anggota tim --}}
    <section id="team-section" class="py-5 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(rgba(30, 20, 15, 0.75), rgba(30, 20, 15, 0.75)), 
                    url('https://images.unsplash.com/photo-1615529182904-14819c35db37?w=1920') center/cover no-repeat; 
                    z-index: -1;">
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    {{-- Judul Section Tim --}}
                    @include('layout.sectionTitle', ['title' => 'INTRODUCE OUR TEAM'])
                    <p class="lead text-white text-opacity-90 mt-4" data-aos="fade-up" data-aos-delay="250">
                        Leadership that drives innovation and excellence
                    </p>
                </div>
            </div>

            <div class="row g-4">
                {{-- Daftar Card Anggota Tim --}}
                @foreach ($employees as $employee)
                    @include('card.teamCard', ['employee' => $employee])
                @endforeach
            </div>
        </div>
    </section>

@endsection
