<section class="position-relative vh-100 d-flex align-items-center overflow-hidden">
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ $background }}') center/cover no-repeat; z-index: -1;">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-white">
                <h1 class="display-3 fw-bold mb-4" data-aos="fade-right">
                    {{ $title ?? 'Section Title' }}
                </h1>
                <p class="lead mb-4" data-aos="fade-right" data-aos-delay="100">
                    {{ $description ?? '' }}
                </p>
            </div>
            <div class="col-lg-6 text-white text-lg-end mt-5 mt-lg-0">
                @if(!empty($statistic))
                    <div data-aos="fade-left">
                        <h2 class="display-1 fw-bold text-warning">{{ $statistic['main'] ?? '' }}</h2>
                        <h3 class="display-6 fw-light mb-4">{{ $statistic['label'] ?? '' }}</h3>
                    </div>
                    <div class="row mt-4" data-aos="fade-left" data-aos-delay="100">
                        @foreach($statistic['items'] ?? [] as $item)
                            <div class="col-6">
                                <h4 class="fw-bold text-warning">{{ $item['value'] }}</h4>
                                <p class="mb-0">{{ $item['label'] }}</p>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4">
        <a href="{{ $scrollTo ?? '#section' }}" class="text-white text-decoration-none">
            <i class="bi bi-chevron-down fs-1"></i>
        </a>
    </div>
</section>