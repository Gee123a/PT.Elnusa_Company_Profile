@extends('layout.main')
@section('title', 'Contact Us')
@section('content')

    {{-- Hero Section: Menampilkan judul, deskripsi, dan statistik kontak di bagian atas halaman --}}
    @include('layout.heroSection', [
        'title' => 'Get In Touch',
        'description' => "Let's discuss your next project. We're here to help bring your vision to life with professional construction services.",
        'background' => 'https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=1920',
        'statistic' => [
            'main' => '24/7',
            'label' => 'Customer Support',
            'items' => [
                ['value' => 'Fast', 'label' => 'Response Time'],
                ['value' => '100%', 'label' => 'Satisfaction'],
            ]
        ],
        'scrollTo' => '#contact-form'
    ])

    {{-- Contact Form Section: Formulir pengiriman pesan dan info kontak kantor --}}
    <section id="contact-form" class="py-5 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(rgba(30,20,15,0.85), rgba(30,20,15,0.85)), url('https://images.unsplash.com/photo-1464983953574-0892a716854b?w=1920') center/cover no-repeat; z-index: -1;">
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    {{-- Judul section contact --}}
                    @include('layout.sectionTitle', ['title' => 'CONTACT US'])
                </div>
            </div>
            <div class="row align-items-start g-4">
                <div class="col-lg-7 mb-4 d-flex flex-column" data-aos="fade-right" data-aos-delay="300">
                    {{-- Formulir kontak --}}
                    <div class="p-4 p-lg-5 rounded-3 shadow-lg border border-warning border-opacity-25 flex-grow-1 d-flex flex-column justify-content-between"
                        style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.25); min-height: 520px;">
                        <div>
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-warning bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width:56px;height:56px;">
                                    <i class="bi bi-envelope-fill fs-3 text-white"></i>
                                </div>
                                <h3 class="fw-bold mb-0 text-white">Send Us a Message</h3>
                            </div>
                            <form class="h-100 d-flex flex-column">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold text-white">Full Name *</label>
                                        <input type="text"
                                            class="form-control border-warning border-opacity-50 bg-dark text-white"
                                            placeholder="John Doe" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold text-white">Email *</label>
                                        <input type="email"
                                            class="form-control border-warning border-opacity-50 bg-dark text-white"
                                            placeholder="john@example.com" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold text-white">Phone Number *</label>
                                        <input type="tel"
                                            class="form-control border-warning border-opacity-50 bg-dark text-white"
                                            placeholder="+62 812 3456 7890" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold text-white">Subject *</label>
                                        <select class="form-select border-warning border-opacity-50 bg-dark text-white"
                                            required>
                                            <option value="">Select Subject</option>
                                            <option>New Project Inquiry</option>
                                            <option>Request Quote</option>
                                            <option>General Question</option>
                                            <option>Partnership</option>
                                        </select>
                                    </div>
                                    <div class="col-12 flex-grow-1 d-flex flex-column">
                                        <label class="form-label fw-semibold text-white">Message *</label>
                                        <textarea class="form-control border-warning border-opacity-50 bg-dark text-white flex-grow-1"
                                            style="height:350px; min-height:350px; max-height:350px; resize:none;" rows="12"
                                            placeholder="Tell us about your project..." required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-warning btn-lg px-5 py-3 w-100 mt-2">
                                            <i class="bi bi-send-fill me-2"></i>Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="300">
                    {{-- Info kontak kantor dan jam operasional --}}
                    <div class="p-4 rounded-3 shadow-lg border border-warning border-opacity-25 mb-4"
                        style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.25);">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-warning bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center me-3"
                                style="width:56px;height:56px;">
                                <i class="bi bi-building fs-3 text-white"></i>
                            </div>
                            <h2 class="fw-bold mb-0 text-white fs-4">Head Office</h2>
                        </div>
                        <div>
                            <p class="text-white text-opacity-85 mb-2">
                                <strong>Elnusa Puspita Pratama</strong><br>
                                Jalan Manyar Kertoadi no 93
                            </p>
                        </div>
                        <hr class="my-3 border-warning border-opacity-25">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-warning bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center me-3"
                                style="width:56px;height:56px;">
                                <i class="bi bi-clock fs-3 text-white"></i>
                            </div>
                            <h2 class="fw-bold mb-0 text-white fs-4">Operating Hours</h2>
                        </div>
                        <div>
                            <p class="text-white text-opacity-85 small mb-0">
                                Mon-Sat: 08:00 - 17:00<br>
                               Sun: Closed
                            </p>
                        </div>
                    </div>
                    <div class="p-4 rounded-3 shadow-lg border border-warning border-opacity-25 mb-4"
                        style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.25);">
                        <h5 class="fw-bold mb-4 text-white">
                            <i class="bi bi-telephone-fill text-white me-2"></i>Contact Methods
                        </h5>
                        <div class="d-flex align-items-center mb-3 pb-3 border-bottom border-warning border-opacity-25">
                            <div class="bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                style="width:32px;height:32px;">
                                <i class="bi bi-telephone-fill text-white fs-5"></i>
                            </div>
                            <div>
                                <small class="text-white text-opacity-85 d-block">Phone</small>
                                <a href="tel:+622187654321" class="text-white text-decoration-none fw-semibold">
                                    +62 21 8765 4321
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3 pb-3 border-bottom border-warning border-opacity-25">
                            <div class="bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                style="width:32px;height:32px;">
                                <i class="bi bi-whatsapp text-white fs-5"></i>
                            </div>
                            <div>
                                <small class="text-white text-opacity-85 d-block">WhatsApp</small>
                                <a href="https://wa.me/6281234567890" target="_blank"
                                    class="text-white text-decoration-none fw-semibold">
                                    +628811812904
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                style="width:32px;height:32px;">
                                <i class="bi bi-envelope-fill text-white fs-5"></i>
                            </div>
                            <div>
                                <small class="text-white text-opacity-85 d-block">Email</small>
                                <a href="mailto:contact@elnusapp.co.id"
                                    class="text-white text-decoration-none fw-semibold">
                                    contact@elnusapp.co.id
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-dark text-white p-4 rounded-3 shadow-lg">
                        <h5 class="fw-bold mb-3">
                            <i class="bi bi-share-fill text-warning me-2"></i>Follow Us
                        </h5>
                        <div class="d-flex gap-2 flex-wrap">
                            <a href="https://wa.me/628811812904" target="_blank"
                                class="btn btn-outline-light btn-sm rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 45px; height: 45px;">
                                <i class="bi bi-whatsapp fs-5"></i>
                            </a>
                            <a href="https://instagram.com/elnusapuspitapratama" target="_blank"
                                class="btn btn-outline-light btn-sm rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 45px; height: 45px;">
                                <i class="bi bi-instagram fs-5"></i>
                            </a>
                            <a href="https://facebook.com/elnusapuspitapratama" target="_blank"
                                class="btn btn-outline-light btn-sm rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 45px; height: 45px;">
                                <i class="bi bi-facebook fs-5"></i>
                            </a>
                            <a href="https://linkedin.com/company/elnusapuspitapratama" target="_blank"
                                class="btn btn-outline-light btn-sm rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 45px; height: 45px;">
                                <i class="bi bi-linkedin fs-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Location Section: Menampilkan peta lokasi kantor utama --}}
    <section class="py-5 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(rgba(30,20,15,0.85), rgba(30,20,15,0.85)), url('https://images.unsplash.com/photo-1464983953574-0892a716854b?w=1920') center/cover no-repeat; z-index: -1;">
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    {{-- Judul section lokasi --}}
                    @include('layout.sectionTitle', ['title' => 'OUR LOCATION'])
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="rounded-3 overflow-hidden shadow-lg border border-warning border-opacity-25"
                        style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.25);">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d455.2231510277365!2d112.77185038652816!3d-7.280052460523613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa3129c99a4f%3A0x6d089073fc6ac2b6!2sJl.%20Manyar%20Kertoarjo%20No.93%2C%20RT.007%2FRW.11%2C%20Mojo%2C%20Kec.%20Gubeng%2C%20Surabaya%2C%20Jawa%20Timur%2060285!5e0!3m2!1sen!2sid!4v1760275044969!5m2!1sen!2sid"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
