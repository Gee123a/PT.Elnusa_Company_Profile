function validateAndPreviewImage(event) {
    const preview = document.getElementById('preview');
    const previewContainer = document.getElementById('imagePreview');
    const fileSizeError = document.getElementById('fileSizeError');
    const imageInput = document.getElementById('imageInput');
    const file = event.target.files[0];
    
    // Hide previous error
    fileSizeError.classList.add('d-none');
    imageInput.classList.remove('is-invalid');
    
    if (file) {
        // Check file size (5MB = 5242880 bytes)
        const maxSize = 5242880;
        
        if (file.size > maxSize) {
            // File too large
            fileSizeError.classList.remove('d-none');
            imageInput.classList.add('is-invalid');
            previewContainer.classList.add('d-none');
            imageInput.value = ''; // Clear the input
            
            // Show alert
            alert('⚠️ File size is too large!\n\nSelected file: ' + (file.size / 1024 / 1024).toFixed(2) + ' MB\nMaximum allowed: 5 MB\n\nPlease choose a smaller image.');
            
            return false;
        }
        
        // Show file size info
        const fileSizeMB = (file.size / 1024 / 1024).toFixed(2);
        console.log('File size: ' + fileSizeMB + ' MB');
        
        // Preview image
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            previewContainer.classList.remove('d-none');
        }
        reader.readAsDataURL(file);
    }
}

// Prevent form submission if file size is invalid
document.getElementById('projectForm').addEventListener('submit', function(e) {
    const imageInput = document.getElementById('imageInput');
    const file = imageInput.files[0];
    
    if (file && file.size > 5242880) {
        e.preventDefault();
        alert('⚠️ Cannot submit! Image file is too large. Maximum size is 5MB.');
        return false;
    }
});
