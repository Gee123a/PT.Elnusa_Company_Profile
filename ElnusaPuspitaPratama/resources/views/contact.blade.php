@extends('layout.main')
@section('title', 'Contact Us')
@section('content')

<!-- Hero Section -->
<section class="position-relative vh-50 d-flex align-items-center" 
         style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=1920') center/cover no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center text-white">
                <h1 class="display-3 fw-bold mb-3" data-aos="fade-up">Get In Touch</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Let's discuss your next project. We're here to help bring your vision to life.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Info -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-7" data-aos="fade-right">
                <div class="bg-white p-5 rounded-3 shadow">
                    <h2 class="fw-bold mb-4">Send Us a Message</h2>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Full Name *</label>
                                <input type="text" class="form-control" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Email *</label>
                                <input type="email" class="form-control" placeholder="john@example.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Phone Number *</label>
                                <input type="tel" class="form-control" placeholder="+62 812 3456 7890" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Subject *</label>
                                <select class="form-select" required>
                                    <option value="">Select Subject</option>
                                    <option>New Project Inquiry</option>
                                    <option>Request Quote</option>
                                    <option>General Question</option>
                                    <option>Partnership</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Message *</label>
                                <textarea class="form-control" rows="5" placeholder="Tell us about your project..." required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-warning btn-lg px-5">
                                    <i class="bi bi-send me-2"></i>Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-5" data-aos="fade-left">
                <!-- Office Location -->
                <div class="bg-white p-4 rounded-3 shadow mb-4">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-building text-warning me-2"></i>Head Office
                    </h5>
                    <p class="text-muted mb-2">
                        <strong>Elnusa Puspita Pratama</strong><br>
                        Jl. Sudirman No. 88<br>
                        Jakarta Pusat 10220<br>
                        Indonesia
                    </p>
                    <hr class="my-3">
                    <h6 class="fw-bold mb-2">
                        <i class="bi bi-clock text-warning me-2"></i>Operating Hours
                    </h6>
                    <p class="text-muted small mb-0">
                        Monday - Friday: 08:00 - 17:00<br>
                        Saturday: 08:00 - 12:00<br>
                        Sunday: Closed
                    </p>
                </div>

                <!-- Contact Methods -->
                <div class="bg-white p-4 rounded-3 shadow mb-4">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-telephone text-warning me-2"></i>Contact Methods
                    </h5>
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-warning bg-opacity-10 p-3 rounded-circle me-3">
                            <i class="bi bi-telephone-fill text-warning fs-5"></i>
                        </div>
                        <div>
                            <small class="text-muted d-block">Phone</small>
                            <a href="tel:+622187654321" class="text-dark text-decoration-none fw-semibold">
                                +62 21 8765 4321
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-warning bg-opacity-10 p-3 rounded-circle me-3">
                            <i class="bi bi-whatsapp text-warning fs-5"></i>
                        </div>
                        <div>
                            <small class="text-muted d-block">WhatsApp</small>
                            <a href="https://wa.me/6281234567890" target="_blank" 
                               class="text-dark text-decoration-none fw-semibold">
                                +62 812 3456 7890
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="bg-warning bg-opacity-10 p-3 rounded-circle me-3">
                            <i class="bi bi-envelope-fill text-warning fs-5"></i>
                        </div>
                        <div>
                            <small class="text-muted d-block">Email</small>
                            <a href="mailto:contact@elnusapp.co.id" 
                               class="text-dark text-decoration-none fw-semibold">
                                contact@elnusapp.co.id
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="bg-dark text-white p-4 rounded-3 shadow">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-share text-warning me-2"></i>Follow Us
                    </h5>
                    <div class="d-flex gap-2">
                        <a href="https://wa.me/6281234567890" target="_blank" 
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

<!-- Google Maps -->
<section class="py-0">
    <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2195794253347!2d106.82090731476898!3d-6.232152995493979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f150bb0b7d63%3A0xe90edb68d8c34f19!2sJl.%20Sudirman%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1621234567890!5m2!1sen!2sid" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
        </iframe>
    </div>
</section>

@endsection