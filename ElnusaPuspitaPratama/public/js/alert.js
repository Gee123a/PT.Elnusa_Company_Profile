/**
 * Alert Auto-close Handler
 * Automatically close Bootstrap alerts after 5 seconds
 */

document.addEventListener('DOMContentLoaded', function() {
    // Get all alert elements
    const alerts = document.querySelectorAll('.alert');
    
    alerts.forEach(function(alert) {
        // Auto-close after 5 seconds (5000ms)
        setTimeout(function() {
            // Use Bootstrap's built-in close method
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        }, 5000);
    });
});