let currentSlide = 0;
let totalSlides = 0;
let carouselElement = null;

document.addEventListener('DOMContentLoaded', function() {
    carouselElement = document.getElementById('featuredProjectsCarousel');
    
    if (carouselElement) {
        // Get total slides from carousel items
        totalSlides = document.querySelectorAll('.carousel-item').length;
        
        // Initialize Bootstrap Carousel
        if (typeof bootstrap !== 'undefined') {
            const carousel = new bootstrap.Carousel(carouselElement, {
                interval: 5000,
                wrap: true
            });
            
            // Listen to Bootstrap carousel slide events
            carouselElement.addEventListener('slid.bs.carousel', function(e) {
                currentSlide = e.to;
                updateIndicators();
            });
        }
    }
});

function nextSlide() {
    if (totalSlides === 0) return;
    currentSlide = (currentSlide + 1) % totalSlides;
    updateCarousel();
}

function previousSlide() {
    if (totalSlides === 0) return;
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    updateCarousel();
}

function goToSlide(index) {
    if (totalSlides === 0) return;
    currentSlide = index;
    updateCarousel();
}

function updateCarousel() {
    // Update carousel items
    const items = document.querySelectorAll('.carousel-item');
    items.forEach((item, index) => {
        if (index === currentSlide) {
            item.classList.add('active');
        } else {
            item.classList.remove('active');
        }
    });

    updateIndicators();

    // Use Bootstrap carousel if available
    if (typeof bootstrap !== 'undefined' && carouselElement) {
        const bsCarousel = bootstrap.Carousel.getInstance(carouselElement);
        if (bsCarousel) {
            bsCarousel.to(currentSlide);
        }
    }
}

function updateIndicators() {
    // Update indicators
    const indicators = document.querySelectorAll('.carousel-indicator-btn');
    indicators.forEach((indicator, index) => {
        if (index === currentSlide) {
            indicator.classList.add('active');
        } else {
            indicator.classList.remove('active');
        }
    });
}